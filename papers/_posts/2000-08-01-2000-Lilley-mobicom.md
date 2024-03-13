---
key: 2000-Lilley-mobicom
date: 2000-08-01
title: "A Unified Header Compression Framework for Low-Bandwidth Links"
venue: "ACM Conference on Mobile Computing and Networking (Mobicom)"
authors: Jeremy Lilley, Jason Yang, Hari Balakrishnan and Srinivasan Seshan
webpage: https://doi.org/10.1145/345910.345933
award: Best Student Paper Award
categories: [Mobile]
---

URL: https://doi.org/10.1145/345910.345933

Bibtex Entry:

@inproceedings{2000-Lilley-mobicom,
    author = "Lilley, Jeremy and Yang, Jason and Balakrishnan, Hari and Seshan, Srinivasan",
    title = "A Unified Header Compression Framework for Low-Bandwidth Links",
    year = "2000",
    isbn = "1581131976",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/345910.345933",
    doi = "10.1145/345910.345933",
    abstract = "Compressing protocol headers has traditionally been an attractive way of conserving bandwidth over low-speed links, including those in wireless systems. However, despite the growth in recent years in the number of end-to-end protocols beyond TCP/IP, header compression deployment for those protocols has not kept pace. This is in large part due to complexities in implementation, which often requires a detailed knowledge of kernel internals, and a lack of a common way of pursuing the general problem across a variety of end-to-end protocols. To address this, rather than defining several new protocol-specific standards, we present a unified framework for header compression. This framework includes a simple, platform-independent header description language that protocol implementors can use to describe high-level header properties, and a platform-specific code generation tool that produces kernel source code automatically from this header specification. Together, the high-level description language and code generator free protocol designers from having to understand any details of the target platform, enabling them to implement header compression with relatively little effort. We analyze the performance of compression produced using this framework for TCP/IP in the Linux 2.0 kernel and demonstrate that unified, automatically-generated header compression without significant performance penalty is viable.",
    booktitle = "ACM Conference on Mobile Computing and Networking (Mobicom)",
    pages = "131–142",
    numpages = "12",
    location = "Boston, Massachusetts, USA",
    award = "Best Student Paper Award",
    category = "[Mobile]",
    series = "MobiCom '00",
    month = "August"
}

