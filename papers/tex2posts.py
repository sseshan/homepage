from pybtex.database.input import bibtex
import os

parser = bibtex.Parser()
bib_data = parser.parse_file('DNA.bib')

months = {"January": "01", "February":"02", "March":"03", "April":"04", 
"May":"05", "June":"06", "July":"07", "August":"08", "September":"09", 
"October":"10", "November":"11", "December":"12"}


def authors(paper):
    persons = paper.persons['author']

    if len(persons) == 1:
        i = persons[0]
        return(" ".join(i.bibtex_first_names) + " " + " ".join(i.last_names))

    authList=""
    firstName=""
    lastName=""
    for i in persons:
        authList += firstName+lastName
        firstName = " ".join(i.bibtex_first_names)
        lastName = " "+" ".join(i.last_names)+", "
    authList = authList[:-2] + " and "+firstName+lastName[:-2]
    return authList

def title(paper):
    strTitle = paper.fields['title']
    strTitle = strTitle.replace("{","")
    strTitle = strTitle.replace("}","")
    return strTitle

for entry in bib_data.entries:
    paper = bib_data.entries[entry]

    date = paper.fields['year'] + "-" + months[paper.fields['month']] + "-01"
    f = open("_posts/"+date+ "-" + paper.key+".md", "w")

    f.write("---" + "\n")
    f.write("key: " + paper.key + "\n")
    f.write("date: " + date + "\n")

    f.write("title: \"" + title(paper) + "\"\n")
    if paper.type == 'inproceedings':
        f.write("venue: \"" + paper.fields['booktitle'] + "\"\n")
    elif paper.type == 'article':
        f.write("venue: " + paper.fields['journal'] + "\n")
    elif paper.type == 'mastersthesis':
        f.write("venue: " + "Masters Thesis" + "\n")
    elif paper.type == 'phdthesis':
        f.write("venue: " + "Ph.D. Thesis" + "\n")
    f.write("authors: " + authors(paper) + "\n")
    if "url" in paper.fields:
        f.write("webpage: " + paper.fields['url'] + "\n")
    if "video" in paper.fields:
        f.write("video: " + paper.fields['video'] + "\n")
    if "github" in paper.fields:
        f.write("github: " + paper.fields['github'] + "\n")
    if "award" in paper.fields:
        f.write("award: " + paper.fields['award'] + "\n")
    if "category" in paper.fields:
        f.write("categories: " + paper.fields['category'] + "\n")
    if os.path.isfile("papers/"+paper.key+"/" + paper.key + ".pdf"):
        f.write("localpdf: papers/" + paper.key + "/" + paper.key + ".pdf" + "\n")
    if os.path.isfile("papers/"+paper.key+"/" + paper.key + "-slides.pdf"):
        f.write("localslides: papers/" + paper.key + "/" + paper.key + "-slides.pdf" + "\n")
    if os.path.isfile("papers/"+paper.key+"/" + paper.key + ".ppt"):
        f.write("localppt: papers/" + paper.key + "/" + paper.key + ".ppt\n")
    if os.path.isfile("papers/"+paper.key+"/" + paper.key + ".pptx"):
        f.write("localppt: papers/" + paper.key + "/" + paper.key + ".pptx\n")
    f.write("---" + "\n")
    f.write("\n")
    f.write("<pre>\n" + paper.to_string("bibtex") + "\n</pre>\n")
    f.close()