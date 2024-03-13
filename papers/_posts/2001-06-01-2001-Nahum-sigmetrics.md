---
key: 2001-Nahum-sigmetrics
date: 2001-06-01
title: "The Effects of Wide-Area Conditions on WWW Server Performance"
venue: "ACM SIGMETRICS"
authors: Erich M. Nahum, Marcel-Catalin Rosu, Srinivasan Seshan and Jussara Almeida
webpage: https://doi.org/10.1145/378420.378790
categories: [Measurement]
---

URL: https://doi.org/10.1145/378420.378790

Bibtex Entry:

@inproceedings{2001-Nahum-sigmetrics,
    author = "Nahum, Erich M. and Rosu, Marcel-Catalin and Seshan, Srinivasan and Almeida, Jussara",
    title = "The Effects of Wide-Area Conditions on WWW Server Performance",
    month = "June",
    year = "2001",
    isbn = "1581133340",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/378420.378790",
    doi = "10.1145/378420.378790",
    abstract = "WWW workload generators are used to evaluate web server performance, and thus have a large impact on what performance optimizations are applied to servers. However, current benchmarks ignore a crucial component: how these servers perform in the environment in which they are intended to be used, namely the wide-area Internet.This paper shows how WAN conditions can affect WWW server performance. We examine these effects using an experimental test-bed which emulates WAN characteristics in a live setting, by introducing factors such as delay and packet loss in a controlled and reproducible fashion. We study how these factors interact with the host TCP implementation and what influence they have on web server performance. We demonstrate that when more realistic wide-area conditions are introduced, servers exhibit very different performance properties and scaling behaviors, which are not exposed by existing benchmarks running on LANs. We show that observed throughputs can give misleading information about server performance, and thus find that maximum throughput, or capacity, is a more useful metric. We find that packet losses can reduce server capacity by as much as 50 percent and increase response time as seen by the client. We show that using TCP SACK can reduce client response time, without reducing server capacity.",
    booktitle = "ACM SIGMETRICS",
    pages = "257–267",
    numpages = "11",
    category = "[Measurement]",
    location = "Cambridge, Massachusetts, USA",
    series = "SIGMETRICS '01"
}

