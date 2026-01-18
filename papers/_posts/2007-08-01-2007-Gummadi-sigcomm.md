---
key: 2007-Gummadi-sigcomm
date: 2007-08-01
title: "Understanding and Mitigating the Impact of RF Interference on 802.11 Networks"
venue: "ACM SIGCOMM Conference"
authors: Ramakrishna Gummadi, David Wetherall, Ben Greenstein and Srinivasan Seshan
webpage: https://doi.org/10.1145/1282380.1282424
categories: Chaotic
localpdf: papers/2007-Gummadi-sigcomm/2007-Gummadi-sigcomm.pdf
localppt: papers/2007-Gummadi-sigcomm/2007-Gummadi-sigcomm.ppt
---

<pre>
@inproceedings{2007-Gummadi-sigcomm,
    author = "Gummadi, Ramakrishna and Wetherall, David and Greenstein, Ben and Seshan, Srinivasan",
    title = "Understanding and Mitigating the Impact of RF Interference on 802.11 Networks",
    year = "2007",
    isbn = "9781595937131",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/1282380.1282424",
    doi = "10.1145/1282380.1282424",
    abstract = "We study the impact on 802.11 networks of RF interference from devices such as Zigbee and cordless phones that increasingly crowd the 2.4GHz ISM band, and from devices such as wireless camera jammers and non-compliant 802.11 devices that seek to disrupt 802.11 operation. Our experiments show that commodity 802.11 equipment is surprisingly vulnerable to certain patterns of weak or narrow-band interference. This enables us to disrupt a link with an interfering signal whose power is 1000 times weaker than the victim's 802.11 signals, or to shut down a multiple AP, multiple channel managed network at a location with a single radio interferer. We identify several factors that lead to these vulnerabilities, ranging from MAC layer driver implementation strategies to PHY layer radio frequency implementation strategies. Our results further show that these factors are not overcome by simply changing 802.11 operational parameters (such as CCA threshold, rate and packet size) with the exception of frequency shifts. This leads us to explore rapid channel hopping as a strategy to withstand RF interference. We prototype a channel hopping design using PRISM NICs, and find that it can sustain throughput at levels of RF interference well above that needed to disrupt unmodified links, and at a reasonable cost in terms of switching overheads.",
    booktitle = "ACM SIGCOMM Conference",
    pages = "385–396",
    numpages = "12",
    month = "August",
    category = "Chaotic",
    keywords = "channel hopping, jamming, RF interference, 802.11, SINR",
    location = "Kyoto, Japan",
    series = "SIGCOMM '07"
}

</pre>
