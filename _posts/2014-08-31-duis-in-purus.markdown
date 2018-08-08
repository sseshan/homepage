---
layout: post
title:  "Content-Aware Networking (2008-2012)"
date:   2008-09-07 14:36:23
permalink: /Content-Aware-Networking.html
categories: Duis
---
<span class="image featured"><img src="/images/Content-Aware-Networking.jpg" alt=""></span>
Different users on the Internet often access the same content. This results in the same data being transferred repeatedly over the network, leading to inefficient resource usage. Many diverse systems have explored how to eliminate this redundant content from network links. These range from traditional Web caches and content distribution networks to recent work on “WAN optimizers” (systems that strip duplicate strings from network packets that have appeared in earlier packets).

Despite their system-level differences, these existing mechanisms share the common goal of redundancy elimination, or removing duplicate data from the network. Our work examines a new network architecture where redundancy elimination (RE) is a network-supported primitive that is accessible in a uniform fashion to all applications, protocols and flows. Since it operates in an application-agnostic fashion, RE allows all applications to obtain the benefits of caching and enables caching of content between different applications. RE also extends caching benefits to below the application object granularity. In our initial work, we showed how Internet service providers could benefit from the RE because it allows them to manage their network resources better, especially under overload conditions such as flash crowds. Our work goes beyond the basic RE design to consider how Internet routing protocols should change if RE were widely deployed (e.g. rather than use shortest path routing, ISPs could construct routes that place potentially redundant traffic on a common set of links so as to maximize the effectiveness of redundancy elimination).

In this project, we consider the broader implications of RE. For example, in a network where the infrastructure inherently removes redundant content, the design of applications and protocols could be impacted in a fundamental, and positive way. For instance, application layer multicast is vastly simplified in such a network because there is no longer a need to be careful about duplicate transmissions. Similarly, protocols may change to make the network more aware of the content of their packets; thus, simplifying the job of eliminating redundant content transmissions. We believe that this is a key step towards making the Internet architecture more content-aware and more efficient for the modern usage patterns of the Internet.
>
### People:
Srinivasan Seshan (CMU)
<br>
Aditya Akella (UWisc)
<br>
Vyas Sekar (CMU)
<br>
Ashok Anand (UWisc)
<br>
Archit Gupta (UWisc)
<br>
Athula Balachandran (CMU)
<br>
Arun Kumar (UWisc)

>
### Publications:
**“Packet Caches on Routers: The Implications of Universal Redundant Traffic Elimination”**
<br>
by A. Anand, A. Gupta, A. Akella, S. Seshan, and S. Shenker.
In Proceedings of the ACM SIGCOMM, (Seattle, WA), Aug. 2008.
Details. Download: PDF, PostScript, PowerPoint.
>
**“RPT: Re-architecting loss protection for content-aware networks”**
<br>
by Dongsu Han, Ashok Anand, Aditya Akella, and Srinivasan Seshan.
In Proceedings of the USENIX NSDI, (San Jose, CA), Apr. 2012.
Details. Download: PDF.
>
**“CARE: content aware redundancy elimination for challenged networks”**
<br>
by Udi Weinsberg, Qingxi Li, Nina Taft, Athula Balachandran, Vyas Sekar, Gianluca Iannaccone, and Srinivasan Seshan.
In Proceedings of HotNets, (Redmond, WA), Oct. 2012.
Details. Download: PDF.
