import os

from pybtex.database.input import bibtex
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
    try: 
        os.mkdir("papers/"+paper.key)
    except OSError as error:
        print(error)

    