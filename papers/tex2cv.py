from pybtex.database.input import bibtex
import pybtex
import datetime

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
        #firstName = " ".join(i.bibtex_first_names)
        # firstName = " ".join(i.get_part('first', abbr=True))
        firstName = pybtex.textutils.abbreviate(" ".join(i.bibtex_first_names))
        lastName = " "+" ".join(i.last_names)+", "
    authList = authList[:-2] + " and "+firstName+lastName[:-2]
    return authList

def title(paper):
    strTitle = paper.fields['title']
    strTitle = strTitle.replace("{","")
    strTitle = strTitle.replace("}","")
    return strTitle

for y in range(datetime.date.today().year, 1992, -1):
    for m in ["December", "November", "October", "September", "August", "July", "June", "May", "April", 
"March", "February", "January"]:

        for entry in bib_data.entries:
            paper = bib_data.entries[entry]
            if y == int(paper.fields['year']) and m == paper.fields['month']:

                #date = paper.fields['year'] + "-" + months[paper.fields['month']] + "-01"
                #f = open("_posts/"+date+ "-" + paper.key+".md", "w")

                #f.write("---" + "\n")
                #f.write("key: " + paper.key + "\n")
                #f.write("date: " + date + "\n")

                #if paper.type == 'phdthesis':
                #if paper.type == 'mastersthesis':

                if paper.type == 'article':
                    print(title(paper) + "!" + paper.fields['journal'] + ", " + paper.fields['month'] + " " + paper.fields['year']+"!"+authors(paper))
                    print()

                # if paper.type == 'inproceedings':
                #     print(title(paper) + "!" + paper.fields['booktitle'] + ", " + paper.fields['month'] + " " + paper.fields['year']+"!"+authors(paper))
                #     if "award" in paper.fields:
                #         print(paper.fields['award'])

                #if paper.type != 'inproceedings' and paper.type != 'article':
                    # print(title(paper) + "!" + paper.fields['month'] + " " + paper.fields['year']+"!"+authors(paper))
