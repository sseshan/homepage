---
layout: post
title:  "Chaotic Wireless (2005-2010)"
date:   2005-11-30 14:36:23
permalink: /Chaotic-Wireless.html
tags: project
---
<span class="image featured"><img src="/images/pic02.jpg" alt=""></span>
Before 2005, the bulk of the research done by the wireless networking community focused on topics such as sensor networks, mesh networks and ad hoc networks. However, the commercial use of wireless networking largely used 802.11 technology with access point-based infrastructure. The problems with such networks were largely ignored since most deployments of 802.11 networks had been in campus-like environments, where experts carefully managed deployments. However, home users with little computer expertise were rapidly deploying 802.11 and other wireless technologies. The resulting dense deployment of wireless networks differed from past dense campus-like deployments in two important ways:

   > **Unplanned.** The spontaneous deployment of access points (APs) by independent people/organizations results in highly variable densities of wireless nodes and APs (e.g high density in an apartment building).

   > **Unmanaged.** Configuring and managing wireless networks is difficult for most people. In addition, nearby wireless networks managed by other users may interfere with each other.

Since our initial work, in 2005, characterizing the magnitude of this deployment trend and highlighting some of the resulting problems, there has been growing interest in solving problems that these “chaotic” deployments create. Our own work has focused on two key problems: 1) making wireless more secure and private, and 2) making wireless link performance better and more reliable. In each of these areas, wireless links, especially in chaotic deployments, fell far short of their wired counterparts.

## Security and Privacy

In the context of network architecture, privacy has traditionally been taken to mean the confidentiality of messages. One of the key contributions of our work in this area has been in showing that the emerging usage patterns for ubiquitous computing devices are creating new privacy risks. We use such devices anywhere and everywhere and the fact that these devices communicate wirelessly raises the significant risk that these devices allow users to be tracked and profiled, even when users employ the best existing security practices.

Our work in addressing this problem makes three core contributions. First, we quantified the magnitude of the privacy threats in using state-of-the-art wireless protocols, such as Wi-Fi and Bluetooth, in ubiquitous computing settings. Using practical machine learning techniques and analysis on the 802.11 traffic of hundreds of users, our work showed that an adversary can accurately track many users even if devices periodically change addresses and use state-of-the-art link layer encryption, such as WPA. Second, we developed a wireless link-layer protocol, called SlyFi, that defends against privacy attacks by hiding all explicit protocol fields that can link any two packets together. This is challenging because many identifying fields play key roles in all wireless protocols today, such as device discovery and message filtering. This work won the Best Paper Award at MobiSys 2008 and Intel is leading a push for its application and IEEE standardization. Third, we developed new ways to bootstrap trust between devices that have never communicated before. As part of this effort, we developed Wifi-Reports, a service that enables users to evaluate Wi-Fi hotspots before they use them. Wifi-Reports incorporates a novel privacy-preserving, reputation system for wireless networks that uses measurement reports contributed by users. We believe that this collection of work has created significant new interest in the areas of location privacy and wireless security.

### Performance and Reliability

One of the greatest problems with the growing usage of wireless networks is the demand they place on the limited spectrum resources that these networks can use. Note that this is a important area of on-going research in my group and I expect that we will make significant progress on improving wireless performance and reliability in the coming years. Our current work in this area addresses uses two approaches: 1) improving the ability of wireless networks to coexist or identify problems when spectrum resources are scarce and 2) improving the efficiency of wireless spectrum use.

The traditional method for understanding how the transmissions of two different networks interact has been to use interference modeling and Shannon information theory-based computations. Unfortunately, this approach fails to account for hardware implementation limitations and for the behavior of protocol layers above the physical layer. As a result, this approach only provides an upper limit for performance. Our work was the first to explore the real-world interaction between 802.11 and other wireless technologies. We showed that performance is often much worse than predicted and developed a model for predicting this performance. Based on these results, we have begun developing tools to help identify and diagnose poor wireless interactions. Our first step in this direction has been the development of novel techniques for monitoring a broad range of wireless network technologies simultaneously.

We have also been actively exploring how next generation radio hardware might help alleviate performance and reliability issues by using spectrum more effectively. Two particular technologies that have shown much promise are directional RF transmission and software-defined radios (SDRs). The focus of our work has been to develop the upper layer protocols to make effective use of this technology. For example, while directional antennas can focus RF energy in different directions and, thus, reduce interference, the design of distributed control mechanisms to configure these antennas has been a challenging open issue. This problem has been especially difficult and important in indoor environments where complex RF propagation patterns are difficult to predict and the where dense usage patterns are common. Our work was the first to show how to use directional antennas effectively to improve spectrum reuse and performance in indoor settings. Similarly, SDRs provide the hardware ability for any transmitter’s behavior (e.g., frequency band and modulation) to adapt to current conditions and avoid coexistence problems. However, the software to implement these behaviors and adapt them is lacking. Our efforts have produced one of the first designs for effectively partitioning modern link-layer functionality between the SDR hardware and the software protocol stack. We have also been active in the design of the distributed framework for controlling and coordinating the behavior of SDRs on different nodes.

**People:**
<br>
Srinivasan Seshan (CMU)
<br>
Peter Steenkiste (CMU)
<br>
David Wetherall (UW/Intel Seattle)
<br>
Tadayoshi Kohno (UW)
<br>
Ben Greenstein (Intel Seattle)
<br>
Anmol Sheth (Intel Seattle)
<br>
Dipankar Raychaudhuri (Rutgers)
<br>
Joseph Evans (KU)
<br>
David Andersen (CMU)
<br>
Dina Papagiannaki (Intel Pittsburgh)
<br>
Michael Kaminsky (Intel Pittsburgh)
<br>
Jeff Pang (CMU)
<br>
Xi Liu (CMU)
<br>
George Nychis (CMU)
<br>
Dongsu Han (CMU)
<br>
Damon McCoy (Univ. of Colorado)
<br>
Ramakrishna Gummadi (USC)

**Publications:**

“Self Management in Chaotic Wireless Deployments”
by A. Akella, G. Judd, S. Seshan, and P. Steenkiste.
In Proceedings of ACM MobiCom, (Cologne, Germany), Sep. 2005.
Details. Download: PDF, PostScript, PowerPoint.

“CogNet - An Architecture for Experimental Cognitive Radio Networks within the Future Internet”
by D. Raychaudhuri, N. Mandayam, J. Evans, B. Ewy, S. Seshan, and P. Steenkiste.
In Proceedings of the First ACM/IEEE international workshop on Mobility in the evolving internet architecture (MobiArch '06), (San Francisco, CA), Dec. 2006.
Details. Download: PDF, PostScript.

“Understanding and Mitigating the Impact of RF Interference on 802.11 Networks”
by R. Gummadi, D. Wetherall, B. Greenstein, and S. Seshan.
In Proceedings of the ACM SIGCOMM, (Kyoto, Japan), Aug. 2007.
Details. Download: PDF, PostScript, PowerPoint.

“Interference-Aware Transmission Power Control for Dense Wireless Networks”
by S. Seshan, X. Liu, and P. Steenkiste.
In Proceedings of the Annual Conference of ITA, (College Park, MD), Sep. 2007.
Details. Download: PDF, PostScript.

“Self Management in Chaotic Wireless Deployments”
by A. Akella, G. Judd, S. Seshan, and P. Steenkiste.
Wireless Networks Journal (WINET), Special Issue on Selected Papers from MobiCom 2005, vol. 13, no. 6, Dec. 2007, pp. 737-755.
Details. Download: PDF, PostScript.

“Link-alike: using wireless to share network resources in a neighborhood”
by S. Jakubczak, D. G. Andersen, M. Kaminsky, K. Papagiannaki, and S. Seshan.
SIGMOBILE Mobile Computing Communications Review (MC2R), vol. 12, no. 4, Oct. 2008, pp. 1-14, ACM.
Details. Download: PDF, PostScript.

“Mark-and-Sweep: Getting the Inside Scoop on Neighborhood Networks”
by D. Han, A. Agarwala, D. G. Andersen, M. Kaminsky, K. Papagiannaki, and S. Seshan.
In Proceedings of IMC, (Vouliagmeni, Greece), Oct. 2008.
Details. Download: PDF, PostScript, PowerPoint.

“Metronome: Coordinating spectrum sharing in heterogeneous wireless networks”
by Ramakrishna Gummadi, Hari Balakrishnan, and Srinivasan Seshan.
In Proceedings of COMSNETS, (Bangalore, India), Jan. 2009.
Details. Download: PDF.

“Access Point Localization using Local Signal Strength Gradient”
by D. Han, and D. G. Andersen, M. Kaminsky, K. Papagiannaki, and S. Seshan.
In Proceedings of the PAM conference, (Seoul, Korea), Apr. 2009.
Details. Download: PDF, PostScript, PowerPoint.

“Enabling MAC Protocol Implementations on Software-defined Radios”
by G. Nychis, T. Hottelier, Z. Yang, S. Seshan, and P. Steenkiste.
In Proceedings of the USENIX NSDI, (Boston, MA), Apr. 2009.
Details. Download: PDF, PostScript, PowerPoint.

“DIRC: Increasing Indoor Wireless Capacity Using Directional Antennas”
by X. Liu, A. Sheth, M. Kaminsky, K. Papagiannaki, S. Seshan, and P. Steenkiste.
In Proceedings of the ACM SIGCOMM, (Barcelona, Spain), Aug. 2009.
Details. Download: PDF, PostScript, PowerPoint.

“RFDump: An Architecture for Monitoring the Wireless Ether”
by K. Lakshminarayanan, S. Sapra, S. Seshan, and P. Steenkiste.
In Proceedings of ACM CoNEXT, (Rome, Italy), Dec. 2009.
Details. Download: PDF, PostScript, PowerPoint.

“Pushing the envelope of indoor wireless spatial reuse using directional access points and clients”
by Xi Liu, Anmol Sheth, Michael Kaminsky, Konstantina Papagiannaki, Srinivasan Seshan, and Peter Steenkiste.
In Proceedings of ACM MobiCom, (Chicago, IL), Sep. 2010.
Details. Download: PDF.

“The hare and the tortoise: taming wireless losses by exploiting wired reliability”
by Anirudh Badam, Michael Kaminsky, Dongsu Han, Konstantina Papagiannaki, David G Andersen, and Srinivasan Seshan.
In Proceedings of ACM MobiHoc, (Paris, France), May 2011.
Details. Download: PDF.

“Clearing the RF smog: making 802.11n robust to cross-technology interference”
by Shyamnath Gollakota, Fadel Adib, Dina Katabi, and Srinivasan Seshan.
In Proceedings of the ACM SIGCOMM, (Toronto, Canada), Aug. 2011.
Details. Download: PDF.

“Understanding 802.11 performance in heterogeneous environments”
by Kaushik Lakshminarayanan, Srinivasan Seshan, and Peter Steenkiste.
In Proceedings of the 2nd ACM SIGCOMM workshop on Home networks, (Toronto, Canada), Aug. 2011.
Details. Download: PDF.

“When Are Directional Antennas Useful in Indoor Environments”
by Xi Liu, Srinivasan Seshan, and Peter Steenkiste.
In Proceedings of the 6th ACM International Workshop on Wireless Network Testbeds, Experimental Evaluation and Characterization, Sep. 2011, pp. 59-66.
Details. Download: PDF.

“Predicting handoffs in 3g networks”
by Umar Javed, Dongsu Han, Ramon Caceres, Jeffrey Pang, Srinivasan Seshan, and Alexander Varshavsky.
In Proceedings of ACM MobiHeld, (Cascais, Portugal), Oct. 2011.
Details. Download: PDF.

“IdleChat: enabling high bandwidth real-time applications in residential broadband networks”
by Ramya Raghavendra, Michael Kaminsky, Konstantina Papagiannaki, Srinivasan Seshan, and Elizabeth Belding.
ACM SIGMOBILE Mobile Computing and Communications Review, vol. 15, no. 3, Nov. 2011, pp. 10-22.
Details. Download: PDF.

“Can user-level probing detect and diagnose common home-WLAN pathologies”
by Partha Kanuparthy, Constantine Dovrolis, Konstantina Papagiannaki, Srinivasan Seshan, and Peter Steenkiste.
ACM SIGCOMM Computer Communication Review, vol. 42, no. 1, Jan. 2012, pp. 7-15.
Details. Download: PDF.

“Centralized, measurement-based, spectrum management for environments with heterogeneous wireless networks”
by George Nychis, Charalampos Tsourakakis, Srinivasan Seshan, and Peter Steenkiste.
In Dynamic Spectrum Access Networks (DYSPAN), 2014 IEEE International Symposium on, (Mclean, VA), Apr. 2014, pp. 303-314, IEEE.
Details. Download: PDF.

“Using your smartphone to detect and map heterogeneous networks and devices in the home”
by George Nychis, Srinivasan Seshan, and Peter Steenkiste.
In Proceedings of the 1st ACM workshop on Hot topics in wireless, (Maui, HI), Sep. 2014, pp. 31-36, ACM.
Details. Download: PDF.
