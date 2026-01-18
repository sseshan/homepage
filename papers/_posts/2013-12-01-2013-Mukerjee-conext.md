---
key: 2013-Mukerjee-conext
date: 2013-12-01
title: "Understanding Tradeoffs in Incremental Deployment of New Network Architectures"
venue: "ACM Conference on Emerging Networking EXperiments and Technologies (CoNEXT)"
authors: Matthew K. Mukerjee, Dongsu Han, Srinivasan Seshan and Peter Steenkiste
webpage: https://doi.org/10.1145/2535372.2535396
categories: XIA
localpdf: papers/2013-Mukerjee-conext/2013-Mukerjee-conext.pdf
---

<pre>
@inproceedings{2013-Mukerjee-conext,
    author = "Mukerjee, Matthew K. and Han, Dongsu and Seshan, Srinivasan and Steenkiste, Peter",
    title = "Understanding Tradeoffs in Incremental Deployment of New Network Architectures",
    year = "2013",
    month = "December",
    category = "XIA",
    isbn = "9781450321013",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/2535372.2535396",
    doi = "10.1145/2535372.2535396",
    abstract = {Despite the plethora of incremental deployment mechanisms proposed, rapid adoption of new network-layer protocols and architectures remains difficult as reflected by the widespread lack of IPv6 traffic on the Internet. We show that all deployment mechanisms must address four key questions: How to select an egress from the source network, how to select an ingress into the destination network, how to reach that egress, and how to reach that ingress. By creating a design space that maps all existing mechanisms by how they answer these questions, we identify the lack of existing mechanisms in part of this design space and propose two novel approaches: the "4ID" and the "Smart 4ID". The 4ID mechanism utilizes new data plane technology to flexibly decide when to encapsulate packets at forwarding time. The Smart 4ID mechanism additionally adopts an SDN-style control plane to intelligently pick ingress/egress pairs based on a wider view of the local network. We implement these mechanisms along with two widely used IPv6 deployment mechanisms and conduct wide-area deployment experiments over PlanetLab. We conclude that Smart 4ID provide better overall performance and failure semantics, and that innovations in the data plane and control plane enable straightforward incremental deployment.},
    booktitle = "ACM Conference on Emerging Networking EXperiments and Technologies (CoNEXT)",
    pages = "271–282",
    numpages = "12",
    keywords = "network architectures, incremental deployment, future internet architectures",
    location = "Santa Barbara, California, USA",
    series = "CoNEXT '13"
}

</pre>
