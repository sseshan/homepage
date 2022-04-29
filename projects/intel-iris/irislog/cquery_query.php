<html>

<head>
<title>Continuous Query</title>
</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<H1 align=center><font color=blue>Continuous Node Statistics with IrisLog </font></H1> 

<script language=javascript>
   
function submitQuery()
{
  query=  "region=" + document.forms['cqform'].region.value + "&"
          + "period=" + document.forms['cqform'].period.value + "&"
          + "metric=" + document.forms['cqform'].ganglia.value + "&"
          + "duration=" +  document.forms['cqform'].duration.value;

  url = "/IrisLogMachine/IrisLog/cquery_response.php?" + query; //escape(query);
  //alert(url);
  parent.response.location.href=url;

}

</script>

<center>
<form name="cqform">
<table border="0" bgcolor="white">
    <tr>
        <td width="241" bgcolor="#FFCC99">
            <p align="center"><FONT face=Arial>Region</FONT></p>
        </td>
        <td width="241" bgcolor="#FFCC99">
            <p align="center"><FONT face=Arial>Metric</FONT></p>
        </td>
        <td width="241" bgcolor="#FFCC99">
            <p align="center"><FONT face=Arial>Period</FONT></p>
        </td>
        <td width="241" bgcolor="#FFCC99">
            <p align="center"><FONT face=Arial>Duration</FONT></p>
        </td>
    </tr>
    <tr>
        <td width="241" bgcolor="#CCCCCC" height="14">
                <p align="center"><FONT face=Arial><select name="region" size="1">
                <option selected value="us.cq">USA</option>
                <option value="europe.cq">Non-USA</option>
    
                </select></FONT></p>
        </td>
        <td width="241" bgcolor="#CCCCCC" height="14">      
<P align="center"><select name="ganglia" size="1">
<OPTION value=load_one>Load (one)
<OPTION value=load_five>Load (five)
<OPTION value=load_fifteen>Load (fifteen)
<OPTION value=cpu_speed>CPU Speed
<OPTION value=cpu_user>CPU (user)
<OPTION value=cpu_system>CPU (System)
<OPTION value=cpu_aidle>CPU (aidle)
<OPTION value=cpu_idle>CPU (Idle)
<OPTION value=pkts_in>Packets (in)
<OPTION value=pkts_out>Packets (out)
<OPTION value=bytes_in>Bytes (in)
<OPTION value=bytes_out>Bytes (out)
<OPTION value=mem_total>Memory (total)
<OPTION value=mem_free>Free memory
<OPTION value=disk_total>Disk (total)
<OPTION value=disk_free>Disk (free)
<OPTION value=proc_total>Proc (total)
</OPTION>
                </select> </P>
</td>
        <td width="241" bgcolor="#CCCCCC" height="14">
                <p align="center"><FONT face=Arial><select name="period" size="1">
                <option value="60000">1 Minute</option>
                <option selected value="120000">2 Minutes</option>
                <option value="300000">5 Minutes</option>
                <option value="600000">10 Minutes</option>
                </select></FONT></p>
        </td>
        <td width="241" bgcolor="#CCCCCC" height="14">
                <p align="center"><FONT face=Arial><select name="duration" size="1">
                <option value="300000" selected>5 Minutes</option>
                <option value="600000">10 Minutes</option>
                </select></FONT></p>
        </td>
    </tr>
    <tr>
        <td width="976" bgcolor="#FFCC99" colspan="4" height="12">
                <p align="center"><input onclick=submitQuery() type="button" value="Submit"></p>
        </td>
    </tr>
</table>
</form>
</center>
</body>

</html>
