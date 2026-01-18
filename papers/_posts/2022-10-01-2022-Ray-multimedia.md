---
key: 2022-Ray-multimedia
date: 2022-10-01
title: "Prism: Handling Packet Loss for Ultra-Low Latency Video"
venue: "ACM International Conference on Multimedia (ACM Multimedia)"
authors: Devdeep Ray, Vicente Bobadilla Riquelme and Srinivasan Seshan
webpage: https://doi.org/10.1145/3503161.3547856
localpdf: papers/2022-Ray-multimedia/2022-Ray-multimedia.pdf
---

<pre>
@inproceedings{2022-Ray-multimedia,
    author = "Ray, Devdeep and Bobadilla Riquelme, Vicente and Seshan, Srinivasan",
    title = "Prism: Handling Packet Loss for Ultra-Low Latency Video",
    year = "2022",
    isbn = "9781450392037",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/3503161.3547856",
    doi = "10.1145/3503161.3547856",
    abstract = "Real-time interactive video streaming applications like cloud-based video games, AR, and VR require high quality video streams and extremely low end-to-end interaction delays. These requirements cause the QoE to be extremely sensitive to packet losses. Due to the inter-dependency between compressed frames, packet losses stall the video decode pipeline until the lost packets are retransmitted (resulting in stutters and higher delays), or the decoder state is reset using IDR-frames (lower video quality for given bandwidth). Prism is a hybrid predictive-reactive packet loss recovery scheme that uses a split-stream video coding technique to meet the needs of ultra-low latency video streaming applications. Prism's approach enables aggressive loss prediction, rapid loss recovery, and high video quality post-recovery, with zero overhead during normal operation - avoiding the pitfalls of existing approaches. Our evaluation on real video game footage shows that Prism reduces the penalty of using I-frames for recovery by 81\\%, while achieving 30\\% lower delay than pure retransmission-based recovery.",
    booktitle = "ACM International Conference on Multimedia (ACM Multimedia)",
    pages = "3104–3114",
    numpages = "11",
    keywords = "cloud gaming, real-time, video streaming, cloud rendering, encoder modeling, loss prediction, loss recovery, packet loss, low latency video",
    location = "Lisboa, Portugal",
    series = "MM '22",
    month = "October"
}

</pre>
