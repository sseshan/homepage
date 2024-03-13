---
key: 2008-Greenstein-mobisys
date: 2008-06-01
title: "Improving Wireless Privacy with an Identifier-Free Link Layer Protocol"
venue: "ACM Conference on Mobile Systems, Applications, and Services (MobiSys)"
authors: Ben Greenstein, Damon McCoy, Jeffrey Pang, Tadayoshi Kohno, Srinivasan Seshan and David Wetherall
webpage: https://doi.org/10.1145/1378600.1378607
award: Best Student Paper Award
categories: Privacy
---

URL: https://doi.org/10.1145/1378600.1378607

Bibtex Entry:

@inproceedings{2008-Greenstein-mobisys,
    author = "Greenstein, Ben and McCoy, Damon and Pang, Jeffrey and Kohno, Tadayoshi and Seshan, Srinivasan and Wetherall, David",
    title = "Improving Wireless Privacy with an Identifier-Free Link Layer Protocol",
    year = "2008",
    isbn = "9781605581392",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/1378600.1378607",
    doi = "10.1145/1378600.1378607",
    month = "June",
    award = "Best Student Paper Award",
    category = "Privacy",
    abstract = "We present the design and evaluation of an 802.11-like wireless link layer protocol that obfuscates all transmitted bits to increase privacy. This includes explicit identifiers such as MAC addresses, the contents of management messages, and other protocol fields that the existing 802.11 protocol relies on to be sent in the clear. By obscuring these fields, we greatly increase the difficulty of identifying or profiling users from their transmissions in ways that are otherwise straightforward. Our design, called SlyFi, is nearly as efficient as existing schemes such as WPA for discovery, link setup, and data delivery despite its heightened protections; transmission requires only symmetric key encryption and reception requires a table lookup followed by symmetric key decryption. Experiments using our implementation on Atheros 802.11 drivers show that SlyFi can discover and associate with networks faster than 802.11 using WPA-PSK. The overhead SlyFi introduces in packet delivery is only slightly higher than that added by WPA-CCMP encryption (10\\% vs. 3\\% decrease in throughput).",
    booktitle = "ACM Conference on Mobile Systems, Applications, and Services (MobiSys)",
    pages = "40–53",
    numpages = "14",
    keywords = "802.11, privacy, anonymity, wireless",
    location = "Breckenridge, CO, USA",
    series = "MobiSys '08"
}

