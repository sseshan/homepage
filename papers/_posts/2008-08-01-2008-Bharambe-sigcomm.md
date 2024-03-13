---
key: 2008-Bharambe-sigcomm
date: 2008-08-01
title: "Donnybrook: Enabling Large-Scale, High-Speed, Peer-to-Peer Games"
venue: "ACM SIGCOMM"
authors: Ashwin Bharambe, John R. Douceur, Jacob R. Lorch, Thomas Moscibroda, Jeffrey Pang, Srinivasan Seshan and Xinyu Zhuang
webpage: https://doi.org/10.1145/1402958.1403002
categories: DistApps
---

URL: https://doi.org/10.1145/1402958.1403002

Bibtex Entry:

@inproceedings{2008-Bharambe-sigcomm,
    author = "Bharambe, Ashwin and Douceur, John R. and Lorch, Jacob R. and Moscibroda, Thomas and Pang, Jeffrey and Seshan, Srinivasan and Zhuang, Xinyu",
    title = "Donnybrook: Enabling Large-Scale, High-Speed, Peer-to-Peer Games",
    year = "2008",
    isbn = "9781605581750",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/1402958.1403002",
    doi = "10.1145/1402958.1403002",
    abstract = "Without well-provisioned dedicated servers, modern fast-paced action games limit the number of players who can interact simultaneously to 16-32. This is because interacting players must frequently exchange state updates, and high player counts would exceed the bandwidth available to participating machines. In this paper, we describe Donnybrook, a system that enables epic-scale battles without dedicated server resources, even in a fast-paced game with tight latency bounds. It achieves this scalability through two novel components. First, it reduces bandwidth demand by estimating what players are paying attention to, thereby enabling it to reduce the frequency of sending less important state updates. Second, it overcomes resource and interest heterogeneity by disseminating updates via a multicast system designed for the special requirements of games: that they have multiple sources, are latency-sensitive, and have frequent group membership changes. We present user study results using a prototype implementation based on Quake III that show our approach provides a desirable user experience. We also present simulation results that demonstrate Donnybrook's efficacy in enabling battles of up to 900 players.",
    booktitle = "ACM SIGCOMM",
    pages = "389–400",
    numpages = "12",
    month = "August",
    category = "DistApps",
    keywords = "computer games, doppelg\{a}ngers, interest sets",
    location = "Seattle, WA, USA",
    series = "SIGCOMM '08"
}

