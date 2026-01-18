---
key: 1996-Balakrishnan-sigcomm
date: 1996-08-01
title: "A Comparison of Mechanisms for Improving TCP Performance over Wireless Links"
venue: "ACM SIGCOMM Conference"
authors: Hari Balakrishnan, Venkata N. Padmanabhan, Srinivasan Seshan and Randy H. Katz
webpage: https://doi.org/10.1145/248156.248179
categories: [Mobile, Wireless, TCP]
localpdf: papers/1996-Balakrishnan-sigcomm/1996-Balakrishnan-sigcomm.pdf
---

<pre>
@inproceedings{1996-Balakrishnan-sigcomm,
    author = "Balakrishnan, Hari and Padmanabhan, Venkata N. and Seshan, Srinivasan and Katz, Randy H.",
    title = "A Comparison of Mechanisms for Improving TCP Performance over Wireless Links",
    year = "1996",
    isbn = "0897917901",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/248156.248179",
    doi = "10.1145/248156.248179",
    abstract = "Reliable transport protocols such as TCP are tuned to perform well in traditional networks where packet losses occur mostly because of congestion. However, networks with wireless and other lossy links also suffer from significant non-congestion-related losses due to reasons such as bit errors and handoffs. TCP responds to all losses by invoking congestion control and avoidance algorithms, resulting in degraded end-to-end performance in wireless and lossy systems. In this paper, we compare several schemes designed to improve the performance of TCP in such networks. These schemes are classified into three broad categories: end-to-end protocols, where the sender is aware of the wireless link; link-layer protocols, that provide local reliability; and split-connection protocols, that break the end-to-end connection into two parts at the base station. We present the results of several experiments performed in both LAN and WAN environments, using throughput and goodput as the metrics for comparison.Our results show that a reliable link-layer protocol with some knowledge of TCP provides very good performance. Furthermore, it is possible to achieve good performance without splitting the end-to-end connection at the base station. We also demonstrate that selective acknowledgments and explicit loss notifications result in significant performance improvements.",
    booktitle = "ACM SIGCOMM Conference",
    pages = "256–269",
    numpages = "14",
    location = "Palo Alto, California, USA",
    category = "[Mobile, Wireless, TCP]",
    series = "SIGCOMM '96",
    month = "August"
}

</pre>
