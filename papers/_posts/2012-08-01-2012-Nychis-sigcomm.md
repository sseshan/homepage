---
key: 2012-Nychis-sigcomm
date: 2012-08-01
title: "On-Chip Networks from a Networking Perspective: Congestion and Scalability in Many-Core Interconnects"
venue: "ACM SIGCOMM Conference"
authors: George P. Nychis, Chris Fallin, Thomas Moscibroda, Onur Mutlu and Srinivasan Seshan
webpage: https://doi.org/10.1145/2342356.2342436
categories: Misc
localpdf: papers/2012-Nychis-sigcomm/2012-Nychis-sigcomm.pdf
---

<pre>
@inproceedings{2012-Nychis-sigcomm,
    author = "Nychis, George P. and Fallin, Chris and Moscibroda, Thomas and Mutlu, Onur and Seshan, Srinivasan",
    title = "On-Chip Networks from a Networking Perspective: Congestion and Scalability in Many-Core Interconnects",
    year = "2012",
    isbn = "9781450314190",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/2342356.2342436",
    doi = "10.1145/2342356.2342436",
    abstract = "In this paper, we present network-on-chip (NoC) design and contrast it to traditional network design, highlighting similarities and differences between the two. As an initial case study, we examine network congestion in bufferless NoCs. We show that congestion manifests itself differently in a NoC than in traditional networks. Network congestion reduces system throughput in congested workloads for smaller NoCs (16 and 64 nodes), and limits the scalability of larger bufferless NoCs (256 to 4096 nodes) even when traffic has locality (e.g., when an application's required data is mapped nearby to its core in the network). We propose a new source throttling-based congestion control mechanism with application-level awareness that reduces network congestion to improve system performance. Our mechanism improves system performance by up to 28\\% (15\\% on average in congested workloads) in smaller NoCs, achieves linear throughput scaling in NoCs up to 4096 cores (attaining similar performance scalability to a NoC with large buffers), and reduces power consumption by up to 20\\%. Thus, we show an effective application of a network-level concept, congestion control, to a class of networks -- bufferless on-chip networks -- that has not been studied before by the networking community.",
    booktitle = "ACM SIGCOMM Conference",
    pages = "407–418",
    numpages = "12",
    month = "August",
    category = "Misc",
    keywords = "congestion control, multi-core, on-chip networks",
    location = "Helsinki, Finland",
    series = "SIGCOMM '12"
}

</pre>
