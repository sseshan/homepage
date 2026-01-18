---
key: 2002-Akella-sigcomm
date: 2002-08-01
title: "Selfish Behavior and Stability of the Internet: A Game-Theoretic Analysis of TCP"
venue: "ACM SIGCOMM Conference"
authors: Aditya Akella, Srinivasan Seshan, Richard Karp, Scott Shenker and Christos Papadimitriou
webpage: https://doi.org/10.1145/633025.633037
categories: [Congestion Control, TCP]
localpdf: papers/2002-Akella-sigcomm/2002-Akella-sigcomm.pdf
localppt: papers/2002-Akella-sigcomm/2002-Akella-sigcomm.ppt
---

<pre>
@inproceedings{2002-Akella-sigcomm,
    author = "Akella, Aditya and Seshan, Srinivasan and Karp, Richard and Shenker, Scott and Papadimitriou, Christos",
    title = "Selfish Behavior and Stability of the Internet: A Game-Theoretic Analysis of TCP",
    year = "2002",
    isbn = "158113570X",
    publisher = "Association for Computing Machinery",
    address = "New York, NY, USA",
    url = "https://doi.org/10.1145/633025.633037",
    doi = "10.1145/633025.633037",
    abstract = {For years, the conventional wisdom [7, 22] has been that the continued stability of the Internet depends on the widespread deployment of "socially responsible" congestion control. In this paper, we seek to answer the following fundamental question: If network end-points behaved in a selfish manner, would the stability of the Internet be endangered?.We evaluate the impact of greedy end-point behavior through a game-theoretic analysis of TCP. In this "TCP Game" each flowattempts to maximize the throughput it achieves by modifying its congestion control behavior. We use a combination of analysis and simulation to determine the Nash Equilibrium of this game. Our question then reduces to whether the network operates efficiently at these Nash equilibria.Our findings are twofold. First, in more traditional environments -- where end-points use TCP Reno-style loss recovery and routers use drop-tail queues -- the Nash Equilibria are reasonably efficient. However, when endpoints use more recent variations of TCP (e.g., SACK) and routers employ either RED or drop-tail queues, the Nash equilibria are very inefficient. This suggests that the Internet of the past could remain stable in the face of greedy end-user behavior, but the Internet of today is vulnerable to such behavior. Second, we find that restoring the efficiency of the Nash equilibria in these settings does not require heavy-weight packet scheduling techniques (e.g., Fair Queuing) but instead can be done with a very simple stateless mechanism based on CHOKe [21].},
    booktitle = "ACM SIGCOMM Conference",
    pages = "117–130",
    numpages = "14",
    location = "Pittsburgh, Pennsylvania, USA",
    category = "[Congestion Control, TCP]",
    month = "August",
    series = "SIGCOMM '02"
}

</pre>
