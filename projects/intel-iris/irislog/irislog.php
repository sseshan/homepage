<html>

<head>
<title>IrisLog: A Structured, Distributed Syslog </title>
<meta name="generator" content="Namo WebEditor v5.0">
</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<h1 align="center"><I><FONT color=#0000cc>IrisLog</FONT></I>: A Structured, Distributed Syslog </h1>
<p>

<!--
<h2 align="center"><FONT color=#ff0000>IrisLog is currently shutdown 
since the planetLab sensors used by IrisLog are currently not available. 
We will be back once the sensors are available.</FONT></h2>
-->

<FONT face=Verdana,Arial size=2>IrisLog, built on <A 
href="http://www.intel-iris.net">IrisNet</A>,  is&nbsp;a unified and extensible 
service through&nbsp;which 
users can easily query the data measured across a widely dispersed 
computing infrastructure. 
IrisLog's&nbsp;&nbsp;monitoring service avoids centrally collecting measurements in 
the&nbsp;interest of network bandwidth efficiency. Each node in the monitored 
infrastructure runs a monitoring daemon (Sensing Agent, in IrisNet's 
terminology) that monitors the current&nbsp;the status (CPU load, bandwidth usage 
etc.)&nbsp;of the node. These measurement information, along with the logs generated 
by the applications running on the node are stored locally in a structured way 
(using XML). Anyone can query this global XML database using standard XPATH 1.0 
language. IrisLog uses Irisnet's distributed query processing mechanism to 
efficiently answer the queries. </FONT></p>
<P><FONT face=Verdana,Arial size=2>Currently, IrisLog runs on the <A 
href="http://www.planet-lab.org">PlanetLab</A> nodes. Measurement data of the 
nodes are collected from the <A 
href="http://www.planet-lab.org/ganglia.beta/index.php">Ganglia</A> daemon 
and the <a href="http://berkeley.intel-research.net/bnc/slicestat/">Slicestat</a> 
sensor running on those node. </FONT></P><P>&nbsp;</P>
<p align=center>
<table cellpadding="0" cellspacing="0" width="982" bgcolor="white">
    <tr>
        <td width="694" bgcolor="#CBE4B2">
            <p align="center"><font face="Arial"><b><a href="cquery.php">Demo 
            1: Continuous queries over the planetlab nodes</a></b></font></p>
            <ul>
                <ul>
                    <div align="center">
                        <li><font face="Arial">Monitor how bandwidth usage, 
                        cpu load etc. of different Planet-lab nodes change 
                        over time</font></li>
                        <li><font face="Arial">Customize the continuous queries 
                        by selecting the region and metricss of interest</font></li>
                    </div>
                </ul>
            </ul>
            <ul>
                <p align="center"><font face="Arial"><i>This service is currently
 (Thu Aug 9 21:55:31 EDT 2007)  
                </i></font><font face="Arial" color="red"><i><b>

shutdown
</b></i></font><font face="Arial"><i>.</i></font></p>
            </ul>
        </td>
        <td width="278" bgcolor="#CBE4B2">
            <p align="center"><font face="Arial"><img src="screen3.JPG"  
border="1"></font></p>
        </td>
    </tr>
    <tr>
        <td width="694" bgcolor="#F3DAF3">
            <p align="center"><font face="Arial"><b><a 
href="slicestat.php">Demo 
            2: Aggregate queries over slice statistics</a></b></font></p>
            <ul>
                <ul>
                    <div align="center">
                        <li><font face="Arial">Monitor the resource usage by 
                        different slices</font></li>
                        <li><font face="Arial">Customize the queries by selecting 
                        the region and metrices of interest</font></li>
                    </div>
                </ul>
            </ul>
            <ul>
                <p align="center"><font face="Arial"><i>This service is currently
 (Thu Aug 9 21:55:31 EDT 2007)  
                </i></font><font face="Arial" color="red"><i><b>

shutdown

</b></i></font><font face="Arial"><i>.</i></font></p>
            </ul>
        </td>
        <td width="278" bgcolor="#F3DAF3">
            <p align="center"><font face="Arial"><img src="screen1.JPG"  width="147" height="147" 
border="0"></font></p>
        </td>
    </tr>
<!--
    <tr>
        <td width="694" bgcolor="#CBE4B2">
            <p align="center"><font face="Arial"><b><a href="raw.php">Demo 
            3: Snapshot queries on the XML data</a></b></font></p>
            <ul>
                <ul>
                    <div align="center">
                        <li><font face="Arial">Gather the raw XML data</font></li>
                        <li><font face="Arial">Customize the queries by selecting 
                        the region and metrices of interest</font></li>
                    </div>
                </ul>
            </ul>
            <ul>
                <p align="center"><font face="Arial"><i>This service is currently
 (Thu Aug 9 21:55:31 EDT 2007)  
                </i></font><font face="Arial" color="red"><i><b>

shutdown
</b></i></font><font face="Arial"><i>.</i></font></p>
            </ul>
        </td>
        <td width="278" bgcolor="#CBE4B2">
            <p align="center"><font face="Arial"><img src="screen4.JPG"  border="1"></font></p>
        </td>
    </tr>
-->

</table>
</p>
<p><font face="Arial">&nbsp;</font></p>

<p align="center"><font face="Verdana,Arial"><a 
href="http://www.intel-iris.net/feedback.htm">Please 
provide your feedback to improve IrisLog.</a></font></p>

</body>

</html>
