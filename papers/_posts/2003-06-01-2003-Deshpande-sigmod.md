---
key: 2003-Deshpande-sigmod
date: 2003-06-01
title: "Cache-and-Query for Wide Area Sensor Databases"
venue: "ACM SIGMOD International Conference on Management of Data (SIGMOD)"
authors: Amol Deshpande, Suman Nath, Phillip B. Gibbons and Srinivasan Seshan
webpage: https://doi.org/10.1145/872757.872818
---

URL: https://doi.org/10.1145/872757.872818

Bibtex Entry:

@inproceedings{2003-Deshpande-sigmod,
    author = "Deshpande, Amol and Nath, Suman and Gibbons, Phillip B. and Seshan, Srinivasan",
    title = "Cache-and-Query for Wide Area Sensor Databases",
    year = "2003",
    isbn = "158113634X",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/872757.872818",
    doi = "10.1145/872757.872818",
    abstract = "Webcams, microphones, pressure gauges and other sensors provide exciting new opportunities for querying and monitoring the physical world. In this paper we focus on querying wide area sensor databases, containing (XML) data derived from sensors spread over tens to thousands of miles. We present the first scalable system for executing XPATH queries on such databases. The system maintains the logical view of the data as a single XML document, while physically the data is fragmented across any number of host nodes. For scalability, sensor data is stored close to the sensors, but can be cached elsewhere as dictated by the queries. Our design enables self starting distributed queries that jump directly to the lowest common ancestor of the query result, dramatically reducing query response times. We present a novel query-evaluate gather technique (using XSLT) for detecting (1) which data in a local database fragment is part of the query result, and (2) how to gather the missing parts. We define partitioning and cache invariants that ensure that even partial matches on cached data are exploited and that correct answers are returned, despite our dynamic query-driven caching. Experimental results demonstrate that our techniques dramatically increase query throughputs and decrease query response times in wide area sensor databases.",
    booktitle = "ACM SIGMOD International Conference on Management of Data (SIGMOD)",
    pages = "503–514",
    numpages = "12",
    month = "June",
    category = "IrisNet",
    location = "San Diego, California",
    series = "SIGMOD '03"
}

