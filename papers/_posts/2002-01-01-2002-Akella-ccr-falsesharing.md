---
key: 2002-Akella-ccr-falsesharing
date: 2002-01-01
title: "The Impact of False Sharing on Shared Congestion Management"
venue: {SIGCOMM Computer Communications Review (CCR)}
authors: Aditya Akella and Srinivasan Seshan
webpage: https://doi.org/10.1145/510726.510744
categories: [Congestion Control, TCP]
---

URL: https://doi.org/10.1145/510726.510744

Bibtex Entry:

@article{2002-Akella-ccr-falsesharing,
    author = "Akella, Aditya and Seshan, Srinivasan",
    title = "The Impact of False Sharing on Shared Congestion Management",
    year = "2002",
    issue_date = "January 2002",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    volume = "32",
    number = "1",
    issn = "0146-4833",
    url = "https://doi.org/10.1145/510726.510744",
    doi = "10.1145/510726.510744",
    abstract = {Recently, several proposals have been made for sharing congestion information across concurrent flows between end-systems. In these proposals, the granularity for sharing has ranged from all flows to a common host to all hosts on a shared LAN. While these proposals have been successful at ensuring sound AIMD behavior of the aggregate of flows, they suffer from what we term "false sharing". False sharing occurs when two or more flows sharing congestion state may, in fact, not share the same bottleneck.In this work, we investigate the effects of false sharing on shared congestion management schemes. We characterize the origins of false sharing into two distinct cases: (i) networks with QoS enhancements such as differentiated services, where a flow classifier segregates flows into different queues, and (ii) networks with path diversity where different flows to the same destination address are routed differently --- a situation that occurs in dispersity routing, load-balancing, and with network address translators (NATs). We evaluate the impact of false sharing on flow performance and consider whether it might cause a bottleneck link to become persistently overloaded. We propose schemes for detecting false sharing and show how different metrics (loss rate, delay distribution, and reordering) compare for this purpose. We also consider the issue of how a sender should respond when it detects false sharing.},
    journal = "{SIGCOMM Computer Communications Review (CCR)}",
    category = "[Congestion Control, TCP]",
    month = "January",
    pages = "70",
    numpages = "1"
}

