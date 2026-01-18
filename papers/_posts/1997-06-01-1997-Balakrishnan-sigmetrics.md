---
key: 1997-Balakrishnan-sigmetrics
date: 1997-06-01
title: "Analyzing Stability in Wide-Area Network Performance"
venue: "ACM SIGMETRICS"
authors: Hari Balakrishnan, Mark Stemm, Srinivasan Seshan and Randy H. Katz
webpage: https://doi.org/10.1145/258612.258631
categories: [Measurement, Prediction]
localpdf: papers/1997-Balakrishnan-sigmetrics/1997-Balakrishnan-sigmetrics.pdf
localppt: papers/1997-Balakrishnan-sigmetrics/1997-Balakrishnan-sigmetrics.ppt
---

<pre>
@inproceedings{1997-Balakrishnan-sigmetrics,
    author = "Balakrishnan, Hari and Stemm, Mark and Seshan, Srinivasan and Katz, Randy H.",
    title = "Analyzing Stability in Wide-Area Network Performance",
    year = "1997",
    month = "June",
    isbn = "0897919092",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/258612.258631",
    doi = "10.1145/258612.258631",
    abstract = "The Internet is a very large scale, complex, dynamical system that is hard to model and analyze. In this paper, we develop and analyze statistical models for the observed end-to-end network performance based on extensive packet-level traces (consisting of approximately 1.5 billion packets) collected from the primary Web site for the Atlanta Summer Olympic Games in 1996. We find that observed mean throughputs for these transfers measured over 60 million complete connections vary widely as a function of end-host location and time of day, confirming that the Internet is characterized by a large degree of heterogeneity. Despite this heterogeneity, we find (using best-fit linear regression techniques) that we can express the throughput for Web transfers to most hosts as a random variable with a log-normal distribution. Then, using observed throughput as the control parameter, we attempt to quantify the spatial (statistical similarity across neighboring hosts) and temporal (persistence over time) stability of network performance. We find that Internet hosts that are close to each other often have almost identically distributed probability distributions of throughput. We also find that throughputs to individual hosts often do not change appreciably for several minutes. Overall, these results indicate that there is promise in protocol mechanisms that cache and share network characteristics both within a single host and amongst nearby hosts.",
    booktitle = "ACM SIGMETRICS",
    pages = "2–12",
    numpages = "11",
    location = "Seattle, Washington, USA",
    series = "SIGMETRICS '97",
    category = "[Measurement, Prediction]"
}

</pre>
