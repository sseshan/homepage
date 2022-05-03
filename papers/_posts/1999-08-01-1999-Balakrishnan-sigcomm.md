---
key: 1999-Balakrishnan-sigcomm
date: 1999-08-01
title: "An Integrated Congestion Management Architecture for Internet Hosts"
venue: "Conference on Applications, Technologies, Architectures, and Protocols for Computer Communication (ACM SIGCOMM)"
authors: Hari Balakrishnan, Hariharan S. Rahul and Srinivasan Seshan
webpage: https://doi.org/10.1145/316188.316220
---

URL: https://doi.org/10.1145/316188.316220

Bibtex Entry:

@inproceedings{1999-Balakrishnan-sigcomm,
    author = "Balakrishnan, Hari and Rahul, Hariharan S. and Seshan, Srinivasan",
    title = "An Integrated Congestion Management Architecture for Internet Hosts",
    year = "1999",
    isbn = "1581131356",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/316188.316220",
    doi = "10.1145/316188.316220",
    abstract = "This paper presents a novel framework for managing network congestion from an end-to-end perspective. Our work is motivated by trends in traffic patterns that threaten the long-term stability of the Internet. These trends include the use of multiple independent concurrent flows by Web applications and the increasing use of transport protocols and applications that do not adapt to congestion. We present an end-system architecture centered around a Congestion Manager (CM) that ensures proper congestion behavior and allows applications to easily adapt to network congestion. Our framework integrates congestion management across all applications and transport protocols. The CM maintains congestion parameters and exposes an API to enable applications to learn about network characteristics, pass information to the CM, and schedule data transmissions. Internally, it uses a window-based control algorithm, a scheduler to regulate transmissions, and a lightweight protocol to elicit feedback from receivers.We describe how TCP and an adaptive real-time streaming audio application can be implemented using the CM. Our simulation results show that an ensemble of concurrent TCP connections can effectively share bandwidth and obtain consistent performance, without adversely affecting other network flows. Our results also show that the CM enables audio applications to adapt to congestion conditions without having to perform congestion control or bandwidth probing on their own. We conclude that the CM provides a useful and pragmatic framework for building adaptive Internet applications.",
    booktitle = "Conference on Applications, Technologies, Architectures, and Protocols for Computer Communication (ACM SIGCOMM)",
    pages = "175–187",
    numpages = "13",
    location = "Cambridge, Massachusetts, USA",
    category = "CM",
    series = "SIGCOMM '99",
    month = "August"
}

