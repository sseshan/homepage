<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0039)http://www.intel-iris.net/irislog5.html -->
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<SCRIPT language=javascript>
var lists = new Array();

// First set of text and values
lists['world'] = new Array();
lists['world'][0] = new Array('All', 'USA', 'Rest of the World');
lists['world'][1] = new Array('all', 'usa', 'rest');

lists['rest'] = new Array();
lists['rest'][0] = new Array('All', 'Asia', 'Canada', 'Europe (Edu)', 'Europe (Non Edu)');
lists['rest'][1] = new Array('all', 'asia', 'canada', 'europe1', 'europe2');

lists['usa'] = new Array();
lists['usa'][0] = new Array('All', 'usa-east1', 'usa-east2', 'usa-east3', 'usa-mid1', 'usa-mid2', 'usa-west1', 'usa-west2', 'usa-west3');
lists['usa'][1] = new Array('all', 'usa-east1', 'usa-east2', 'usa-east3', 'usa-mid1', 'usa-mid2', 'usa-west1', 'usa-west2', 'usa-west3');

lists['asia'] = new Array();
lists['asia'][0] = new Array('All', ' CERNET-MSR Joint Lab, Tsinghua University', ' Univ of Canterbury, New Zealand', ' Intel - Cavite', ' Chinese University of Hong Kong', ' Haifa University', ' The Hebrew University of Jerusalem', ' Intel - Haifa', ' KAIST', ' Communications Research Laboratory', ' National Tsing Hua University', ' National Taiwan University, Department of Information Management', ' Academia Sinica - Taiwan', ' Seoul National University', ' Tel-Aviv University', ' Technion', ' Univ of Technology, Sydney');
lists['asia'][1] = new Array('all', '6test', 'canterbury', 'cavite', 'cuhk', 'haifa', 'huji', 'intelhaifa', 'kaist', 'koganei', 'nthu', 'ntu', 'sinica', 'snu', 'tau', 'technion', 'uts');

lists['canada'] = new Array();
lists['canada'][0] = new Array('All', ' Canarie - Calgary', ' University of Calgary', ' Canarie - Halifax', ' McGill University', ' Canarie - Montreal', ' Canarie - Ottawa', ' Canarie - Toronto', ' UBC', ' University of New Brunswick', ' University of Toronto', ' Canarie - Winnipeg');
lists['canada'][1] = new Array('all', 'calgary', 'enel', 'halifax', 'mcgillplanetlab', 'montreal', 'ottawa', 'toronto', 'ubc', 'unb', 'utoronto', 'winnipeg');

lists['europe1'] = new Array();
lists['europe1'][0] = new Array('All', ' Birkbeck University of London', ' Ben-Gurion University of the Negev', ' Copenhagen', ' Lancaster', ' Moscow State University', ' University of Passau', ' Politecnico di Torino', ' Warsaw University of Technology', ' Universidade Federal de Minas Gerais', ' University of Sussex', ' Politecnico di Torino', ' Technische Universitat Berlin', ' University of Tuebingen', ' University of Bologna', ' Dipartimento di Informatica di Torino', ' Nizhny Novgorod State University', ' Universitat Politècnica de Catalunya', ' Technical University of Madrid', ' Uppsala', ' Vrije Universiteit', ' Cambridge');
lists['europe1'][1] = new Array('all', 'bbk', 'bgu', 'diku', 'lancs', 'msu', 'passau', 'polito', 'pw', 'rnp', 'susx', 'torino', 'tu', 'tueb', 'unibo', 'unito', 'unn', 'upc', 'upm', 'uu', 'vu', 'xeno');

lists['europe2'] = new Array();
lists['europe2'][0] = new Array('All', ' ETH Zuerich', ' Eurecom Institute', ' Inst. of Computer Science, Foundation for Research and Technology - Hellas', ' HP Labs, Cambridge', ' HP Labs, Bristol', ' INRIA Sophia Antipolis', ' Interxion - Frankfurt', ' Intel Research Cambridge', ' Intel - Leixlip', ' Swedish Institute of Computer Science', ' Basel');
lists['europe2'][1] = new Array('all', 'ethz', 'eurecom', 'forth', 'hp-crl', 'hpl', 'inria', 'interxion', 'irc', 'leixlip', 'sics', 'unibas');

lists['usa-east1'] = new Array();
lists['usa-east1'][0] = new Array('All', ' Boston University', ' Columbia', ' Cornell', ' Dartmouth College, Computer Science', ' Harvard', ' Howard University', ' Hopkins CNDS', ' MIT', ' Internet2 - New York', ' NYU', ' Princeton', ' University of Rochester', ' Rensselaer Polytechnic Institute', ' Rutgers University', ' Stevens Institute of Technology', ' Stony Brook University', ' UMass', ' University of Maryland', ' Wayne State University');
lists['usa-east1'][1] = new Array('all', 'bu', 'columbia', 'cornell', 'dartmouth', 'harvard', 'howard', 'jhu', 'mit', 'nycm', 'nyu', 'princeton', 'rochester', 'rpi', 'rutgers', 'stevens-tech', 'stonybrook', 'umass', 'umd', 'wayne');

lists['usa-east2'] = new Array();
lists['usa-east2'][0] = new Array('All', ' Carnegie Mellon University', ' Duke', ' GT', ' Michigan State University', ' North Carolina AT State University', ' North Carolina State University', ' University of Notre Dame', ' Purdue', ' University of Georgia', ' Kentucky', ' Michigan', ' UNC - Chapel Hill', ' UPenn', ' Tennessee', ' University of Virginia');
lists['usa-east2'][1] = new Array('all', 'cmu', 'duke', 'gt', 'msu', 'ncat', 'ncsu', 'nd', 'purdue', 'uga', 'uky', 'umich', 'unc', 'upenn', 'utk', 'virginia');

lists['usa-east3'] = new Array();
lists['usa-east3'][0] = new Array('All', ' Internet2 - Atlanta', ' Internet2 - Chicago', ' Equinix - Ashburn', ' Princeton - GTI DSL', ' Internet2 - Indianapolis', ' Intel Research Pittsburgh', ' NEC Laboratories');
lists['usa-east3'][1] = new Array('all', 'atla', 'chin', 'equinix', 'gti-dsl', 'ipls', 'irp', 'nec-labs');

lists['usa-mid1'] = new Array();
lists['usa-mid1'][0] = new Array('All', ' DePaul University', ' Internet2 - Denver', ' Northwestern', ' University of Chicago', ' University of Illinois at UC', ' University of Nebraska - Lincoln', ' Wisconsin');
lists['usa-mid1'][1] = new Array('all', 'depaul', 'dnvr', 'northwestern', 'uchicago', 'uiuc', 'unl', 'wisc');

lists['usa-mid2'] = new Array();
lists['usa-mid2'][0] = new Array('All', ' Bio Inspired Grid Computing Lab', ' Arizona', ' Internet2 - Houston', ' Internet2 - Kansas City', ' Kansas', ' Rice', ' Texas AM University', ' University of New Mexico', ' Utah', ' Univ of Texas, Austin', ' WashU');
lists['usa-mid2'][1] = new Array('all', 'agentlab', 'arizona-gigapop', 'hstn', 'kscy', 'ku', 'rice', 'tamu', 'unm', 'utah', 'utexas', 'wustl');

lists['usa-west1'] = new Array();
lists['usa-west1'][0] = new Array('All', ' UC Berkeley', ' UC Berkeley', ' CalTech', ' California State University San Bernardino', ' Stanford', ' University of California, Davis', ' UCLA', ' UC Santa Barbara', ' UC Santa Cruz', ' UC San Diego', ' University of Oregon', ' University of Washington');
lists['usa-west1'][1] = new Array('all', 'Berkeley', 'BerkeleyM', 'caltech', 'csusb', 'stanford', 'ucdavis', 'ucla', 'ucsb', 'ucsc', 'ucsd', 'uoregon', 'washington');

lists['usa-west2'] = new Array();
lists['usa-west2'][0] = new Array('All', ' University of Washington - Accretive DSL', ' HP Labs', ' HP Labs', ' HP Labs, Internet 2', ' Intel DSL - Oregon', ' Intel Research Berkeley', ' Intel Research Seattle', ' LBL', ' Intel DSL - Oregon', ' OGI at OHSU', ' ISI');
lists['usa-west2'][1] = new Array('all', 'accretive-dsl', 'hp', 'hpl', 'hpl2', 'intel-dsl', 'irb', 'irs', 'lbl', 'nbgisp', 'ogi', 'postel');

lists['usa-west3'] = new Array();
lists['usa-west3'][0] = new Array('All', ' Internet2 - Los Angeles', ' Equinix - San Jose', ' PlanetLab Colo - Santa Clara', ' Internet2 - Sunnyvale', ' Internet2 - Seattle', ' SwRI/UT San Antonio', ' Internet2 - Washington');
lists['usa-west3'][1] = new Array('all', 'losa', 'sanjose', 'scla', 'snva', 'sttl', 'swri', 'wash');

lists['all'] = new Array();
lists['all'][0] = new Array('All');
lists['all'][1] = new Array('all');

lists['nodecount'] =  new Array();
lists['nodecount']['6test'] = new Array('2');
lists['nodecount']['canterbury'] = new Array('2');
lists['nodecount']['cavite'] = new Array('2');
lists['nodecount']['cuhk'] = new Array('2');
lists['nodecount']['haifa'] = new Array('2');
lists['nodecount']['huji'] = new Array('5');
lists['nodecount']['intelhaifa'] = new Array('2');
lists['nodecount']['kaist'] = new Array('4');
lists['nodecount']['koganei'] = new Array('2');
lists['nodecount']['nthu'] = new Array('2');
lists['nodecount']['ntu'] = new Array('2');
lists['nodecount']['sinica'] = new Array('2');
lists['nodecount']['snu'] = new Array('2');
lists['nodecount']['tau'] = new Array('4');
lists['nodecount']['technion'] = new Array('2');
lists['nodecount']['uts'] = new Array('2');
lists['nodecount']['calgary'] = new Array('2');
lists['nodecount']['enel'] = new Array('2');
lists['nodecount']['halifax'] = new Array('2');
lists['nodecount']['mcgillplanetlab'] = new Array('2');
lists['nodecount']['montreal'] = new Array('2');
lists['nodecount']['ottawa'] = new Array('2');
lists['nodecount']['toronto'] = new Array('2');
lists['nodecount']['ubc'] = new Array('2');
lists['nodecount']['unb'] = new Array('2');
lists['nodecount']['utoronto'] = new Array('2');
lists['nodecount']['winnipeg'] = new Array('2');
lists['nodecount']['bbk'] = new Array('2');
lists['nodecount']['bgu'] = new Array('2');
lists['nodecount']['diku'] = new Array('2');
lists['nodecount']['lancs'] = new Array('2');
lists['nodecount']['msu'] = new Array('4');
lists['nodecount']['passau'] = new Array('2');
lists['nodecount']['polito'] = new Array('1');
lists['nodecount']['pw'] = new Array('1');
lists['nodecount']['rnp'] = new Array('2');
lists['nodecount']['susx'] = new Array('2');
lists['nodecount']['torino'] = new Array('1');
lists['nodecount']['tu'] = new Array('1');
lists['nodecount']['tueb'] = new Array('2');
lists['nodecount']['unibo'] = new Array('2');
lists['nodecount']['unito'] = new Array('2');
lists['nodecount']['unn'] = new Array('1');
lists['nodecount']['upc'] = new Array('1');
lists['nodecount']['upm'] = new Array('2');
lists['nodecount']['uu'] = new Array('2');
lists['nodecount']['vu'] = new Array('2');
lists['nodecount']['xeno'] = new Array('3');
lists['nodecount']['ethz'] = new Array('2');
lists['nodecount']['eurecom'] = new Array('2');
lists['nodecount']['forth'] = new Array('2');
lists['nodecount']['hp-crl'] = new Array('3');
lists['nodecount']['hpl'] = new Array('5');
lists['nodecount']['inria'] = new Array('2');
lists['nodecount']['interxion'] = new Array('3');
lists['nodecount']['irc'] = new Array('3');
lists['nodecount']['leixlip'] = new Array('2');
lists['nodecount']['sics'] = new Array('2');
lists['nodecount']['unibas'] = new Array('2');
lists['nodecount']['bu'] = new Array('2');
lists['nodecount']['columbia'] = new Array('3');
lists['nodecount']['cornell'] = new Array('2');
lists['nodecount']['dartmouth'] = new Array('2');
lists['nodecount']['harvard'] = new Array('2');
lists['nodecount']['howard'] = new Array('1');
lists['nodecount']['jhu'] = new Array('1');
lists['nodecount']['mit'] = new Array('9');
lists['nodecount']['nycm'] = new Array('2');
lists['nodecount']['nyu'] = new Array('2');
lists['nodecount']['princeton'] = new Array('4');
lists['nodecount']['rochester'] = new Array('2');
lists['nodecount']['rpi'] = new Array('2');
lists['nodecount']['rutgers'] = new Array('2');
lists['nodecount']['stevens-tech'] = new Array('2');
lists['nodecount']['stonybrook'] = new Array('1');
lists['nodecount']['umass'] = new Array('1');
lists['nodecount']['umd'] = new Array('2');
lists['nodecount']['wayne'] = new Array('2');
lists['nodecount']['cmu'] = new Array('3');
lists['nodecount']['duke'] = new Array('3');
lists['nodecount']['gt'] = new Array('2');
lists['nodecount']['msu'] = new Array('2');
lists['nodecount']['ncat'] = new Array('1');
lists['nodecount']['ncsu'] = new Array('1');
lists['nodecount']['nd'] = new Array('2');
lists['nodecount']['purdue'] = new Array('2');
lists['nodecount']['uga'] = new Array('2');
lists['nodecount']['uky'] = new Array('2');
lists['nodecount']['umich'] = new Array('2');
lists['nodecount']['unc'] = new Array('2');
lists['nodecount']['upenn'] = new Array('2');
lists['nodecount']['utk'] = new Array('3');
lists['nodecount']['virginia'] = new Array('2');
lists['nodecount']['atla'] = new Array('2');
lists['nodecount']['chin'] = new Array('2');
lists['nodecount']['equinix'] = new Array('2');
lists['nodecount']['gti-dsl'] = new Array('2');
lists['nodecount']['ipls'] = new Array('2');
lists['nodecount']['irp'] = new Array('3');
lists['nodecount']['nec-labs'] = new Array('2');
lists['nodecount']['depaul'] = new Array('2');
lists['nodecount']['dnvr'] = new Array('2');
lists['nodecount']['northwestern'] = new Array('2');
lists['nodecount']['uchicago'] = new Array('3');
lists['nodecount']['uiuc'] = new Array('2');
lists['nodecount']['unl'] = new Array('2');
lists['nodecount']['wisc'] = new Array('2');
lists['nodecount']['agentlab'] = new Array('1');
lists['nodecount']['arizona-gigapop'] = new Array('1');
lists['nodecount']['hstn'] = new Array('2');
lists['nodecount']['kscy'] = new Array('2');
lists['nodecount']['ku'] = new Array('2');
lists['nodecount']['rice'] = new Array('3');
lists['nodecount']['tamu'] = new Array('2');
lists['nodecount']['unm'] = new Array('3');
lists['nodecount']['utah'] = new Array('3');
lists['nodecount']['utexas'] = new Array('3');
lists['nodecount']['wustl'] = new Array('3');
lists['nodecount']['Berkeley'] = new Array('9');
lists['nodecount']['BerkeleyM'] = new Array('10');
lists['nodecount']['caltech'] = new Array('2');
lists['nodecount']['csusb'] = new Array('2');
lists['nodecount']['stanford'] = new Array('2');
lists['nodecount']['ucdavis'] = new Array('2');
lists['nodecount']['ucla'] = new Array('2');
lists['nodecount']['ucsb'] = new Array('2');
lists['nodecount']['ucsc'] = new Array('3');
lists['nodecount']['ucsd'] = new Array('3');
lists['nodecount']['uoregon'] = new Array('3');
lists['nodecount']['washington'] = new Array('3');
lists['nodecount']['accretive-dsl'] = new Array('1');
lists['nodecount']['hp'] = new Array('2');
lists['nodecount']['hpl'] = new Array('4');
lists['nodecount']['hpl2'] = new Array('2');
lists['nodecount']['intel-dsl'] = new Array('3');
lists['nodecount']['irb'] = new Array('3');
lists['nodecount']['irs'] = new Array('3');
lists['nodecount']['lbl'] = new Array('2');
lists['nodecount']['nbgisp'] = new Array('10');
lists['nodecount']['ogi'] = new Array('3');
lists['nodecount']['postel'] = new Array('2');
lists['nodecount']['losa'] = new Array('2');
lists['nodecount']['sanjose'] = new Array('3');
lists['nodecount']['scla'] = new Array('3');
lists['nodecount']['snva'] = new Array('2');
lists['nodecount']['sttl'] = new Array('2');
lists['nodecount']['swri'] = new Array('2');
lists['nodecount']['wash'] = new Array('2');
lists['nodecount']['all'] = new Array('0');

lists['nodes'] = new Array();
lists['nodes'][0] = new Array('All', 'Node1','Node2','Node3','Node4','Node5','Node6','Node7','Node8','Node9','Node10');
lists['nodes'][1] = new Array('all', 'pl1','pl2','pl3','pl4','pl5','pl6','pl7','pl8','pl9','pl10');
</SCRIPT>

<META content="MSHTML 6.00.2800.1226" name=GENERATOR>
<title>SliceStat on IrisNet</title>
<base target="response">
</HEAD>
<BODY onload="changeList1(document.forms['drops'].level1);" 
onreload="changeList1(document.forms['drops'].level1);">
<P align=center>
<SCRIPT language=javascript>

// This function goes through the options for the given
// drop down box and removes them in preparation for
// a new set of values

function emptyList( box ) {
        // Set each option to null thus removing it
        while ( box.options.length ) box.options[0] = null;
}

// this function assigns new drop down options to 
// the "Select Node" drop down box
function fillNodeList(box, num) {
	if (num >= 1) {
		for (i = 0; i <=num; i++) {
			option = new Option (lists['nodes'][0][i], lists['nodes'][1][i]);
			box.options[box.length] = option;
		}
	} else {
		option = new Option('All', 'all');
		box.options[box.length] = option;
	}
	box.selectedIndex=0;
}

// This function assigns new drop down options to the given
// drop down box from the list of lists specified
function fillList( box, arr ) {
        // arr[0] holds the display text
        // arr[1] are the values

        for ( i = 0; i < arr[0].length; i++ ) {

                // Create a new drop down option with the
                // display text and value from arr

                option = new Option( arr[0][i], arr[1][i] );

                // Add to the end of the existing options

                box.options[box.length] = option;
        }

        // Preselect option 0

        box.selectedIndex=0;
}


// This function performs a drop down list option change by first
// emptying the existing option list and then assigning a new set
function changeList1( box ) {
        // Isolate the appropriate list by using the value
        // of the currently selected option

        list = lists['world'];

        // Next empty the slave list
        emptyList( box.form.level1 );

        // Then assign the new list values
        fillList( box.form.level1, list );
       box.form.level1.selectedIndex = 1;
       changeList234(box.form.level1)
	 //DisplayQuery(box);
}

function changeList234( box ) {
        // Isolate the appropriate list by using the value
        // of the currently selected option

        list = lists[box.options[box.selectedIndex].value];

        // Next empty the slave list
        emptyList( box.form.level2 );

        // Then assign the new list values
        fillList( box.form.level2, list );
	box.form.level2.selectedIndex=1;

	list = 	lists[box.form.level2.options[box.form.level2.selectedIndex].value];
	

	// Next empty the slave list
        emptyList( box.form.level3 );

	
        // Then assign the new list values
        fillList( box.form.level3, list );


	// Next empty the slave list
        emptyList( box.form.level4 );

        // Then assign the new list values
        fillNodeList( box.form.level4, 1 );
	  DisplayQuery(box);
}


function changeList34( box ) {
        // Isolate the appropriate list by using the value
        // of the currently selected option

        list = lists[box.options[box.selectedIndex].value];

        // Next empty the slave list
        emptyList( box.form.level3 );

        // Then assign the new list values
        fillList( box.form.level3, list );

	// Next empty the slave list
        emptyList( box.form.level4 );

        // Then assign the new list values
        fillNodeList( box.form.level4, 1 );
	  
	  DisplayQuery(box);
}
function changeList4( box ) {
        // Isolate the appropriate list by using the value
        // of the currently selected option

	if (box.options[box.selectedIndex].value == "all")
		list = lists['all'];
	else
        	list = lists['nodecount'][box.options[box.selectedIndex].value];

        // Next empty the slave list

        emptyList( box.form.level4);
        // Then assign the new list values

        fillNodeList( box.form.level4, list[0]);
	  DisplayQuery(box);
}

function DisplayQuery(box) {

	if (box.form.level1.value != "all")
	     countryExp = "[@id='" +box.form.level1.value  + "']";
	else
	     countryExp = "";
	     
	if (box.form.level2.value != "all")
	     regionExp = "[@id='" +box.form.level2.value  + "']";
	else
	     regionExp = "";

	if (box.form.level3.value != "all")
	     siteExp = "[@id='" + box.form.level3.value + "']";
	else
	     siteExp = "";	

	if (box.form.level4.value != "all")
	     nodeExp = "[@id='" + box.form.level4.value + "']";
	else
	     nodeExp = "";

	gangExp = "/sensor[@id='SLICESTAT']/SLICE";

	if (document.forms['drops'].mem.value != "none")
		memExp = ", '" + document.forms['drops'].mem.value + " mem'";
	else
		memExp = "";	

	if (document.forms['drops'].cpu.value != "none")
		cpuExp = ", '" + document.forms['drops'].cpu.value + " cpu'";
	else
		cpuExp = "";

	if (document.forms['drops'].pmem.value != "none")
		pmemExp = ", '" + document.forms['drops'].pmem.value + " pmem'";
	else
		pmemExp = "";
	if (document.forms['drops'].vmem.value != "none")
		vmemExp = ", '" + document.forms['drops'].vmem.value + " vmem'";
	else
		vmemExp = "";
		
	if (document.forms['drops'].ntasks.value != "none")
		ntasksExp = ", '" + document.forms['drops'].ntasks.value + " ntasks'";
	else
		ntasksExp = "";
	
	if (document.forms['drops'].send_bw1.value != "none")
		send_bw1Exp = ", '" + document.forms['drops'].send_bw1.value + " send_bw1'";
	else
		send_bw1Exp = "";
		
	if (document.forms['drops'].send_bw5.value != "none")
		send_bw5Exp = ", '" + document.forms['drops'].send_bw5.value + " send_bw5'";
	else
		send_bw5Exp = "";
	
	if (document.forms['drops'].send_bw15.value != "none")
		send_bw15Exp = ", '" + document.forms['drops'].send_bw15.value + " send_bw15'";
	else
		send_bw15Exp = "";

	if (document.forms['drops'].recv_bw1.value != "none")
		recv_bw1Exp = ", '" + document.forms['drops'].recv_bw1.value + " recv_bw1'";
	else
		recv_bw1Exp = "";
		
	if (document.forms['drops'].recv_bw5.value != "none")
		recv_bw5Exp = ", '" + document.forms['drops'].recv_bw5.value + " recv_bw5'";
	else
		recv_bw5Exp = "";
	

		
	box.form.Textarea.value="multiCall(/irisnet6ROOT[@id='irisnet6ROOT']/service[@id='irislog']/country" + countryExp + "/region" + regionExp + "/site" + siteExp + "/host" + nodeExp + gangExp + ", 'GROUPBY id'" + memExp + cpuExp + pmemExp + vmemExp + ntasksExp + send_bw1Exp + send_bw5Exp + send_bw15Exp + recv_bw1Exp + recv_bw5Exp + ")";
	
			
	
}

function FireQuery(box) 
{
	if (document.forms['drops'].mem.value == "none"
		&& document.forms['drops'].cpu.value == "none"
		&& document.forms['drops'].pmem.value == "none"
		&& document.forms['drops'].vmem.value == "none"
		&& document.forms['drops'].ntasks.value == "none"
		&& document.forms['drops'].send_bw1.value == "none"
		&& document.forms['drops'].send_bw5.value == "none"
		&& document.forms['drops'].send_bw15.value == "none"
		&& document.forms['drops'].recv_bw1.value == "none"
		&& document.forms['drops'].recv_bw5.value == "none")
	{
		alert("You must select at least one attribute!");
		return;
	}
				
        url = "/IrisLogMachine/IrisLog/slicestat.php?query="+escape(box.form.Textarea.value);
	parent.response.location.href=url;
	//location.href=url;
}

</SCRIPT>

<H1 align=center><font color="blue">Slice Statistics with IrisLog </font></H1>
<FORM name=drops action=# method=get>
<TABLE width="929" align=center bgColor="white" border=0>
  <TBODY>
  <TR>
    <TD width="188" colspan="2" bgcolor="#CCCCCC">
                <p align="center"><font face="Arial">Select Scope</font></p>
</TD>
    <TD width="33" bgcolor="white">
                <p>&nbsp;</p>
</TD>    <TD width="694" colspan="6" bgcolor="#CCCCCC">
                <p align="center"><font face="Arial">Select Slice Attributes</font></p>
</TD></TR>
  <TBODY>
  <TR>
    <TD width="69" bgcolor="#FFEECC">
      <P align=right><font face="Arial">Country: </font></P></TD>
    <TD width="115" bgcolor="#FFEECC">
      <P align=left><SELECT onchange=changeList234(this) size=1 name=level1> 
        <OPTION value=all>All<OPTION value=usa selected>USA<OPTION 
        value=rest>Non-USA</OPTION></SELECT> </P></TD>    <TD width="33" rowspan="4" bgcolor="white">
                <p>&nbsp;</p>
</TD>    <TD width="155" bgcolor="#FFEECC">
                <p align="right"><font face="Arial">%CPU</font></p>
</TD>    <TD width="95" bgcolor="#FFEECC">
                <p><font face="Arial"><select name="cpu" onchange=DisplayQuery(this)  size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD>    <TD width="95" bgcolor="#FFEECC">
                <p align="right"><font face="Arial">Send BW (1)</font></p>
</TD>    <TD width="96" bgcolor="#FFEECC">
                <p><font face="Arial"><select name="send_bw1" onchange=DisplayQuery(this) size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD><TD width="116" bgcolor="#FFEECC">
                <p align="right"><font face="Arial">Recv BW(1)</font></p>
</TD><TD width="117" bgcolor="#FFEECC">
                <p><font face="Arial"><select name="recv_bw1" onchange=DisplayQuery(this) size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD></TR>
  <TR>
    <TD width="69" bgcolor="#CCFFFF">
      <P align=right><font face="Arial">Region: </font></P></TD>
    <TD width="115" bgcolor="#CCFFFF">
      <P align=left><SELECT onchange=changeList34(this) size=1 name=level2> 
        <OPTION value=all selected>All</OPTION></SELECT> </P></TD>    <TD width="155" bgcolor="#CCFFFF">
                <p align="right"><font face="Arial">%MEM</font></p>
</TD>    <TD width="95" bgcolor="#CCFFFF">
                <p><font face="Arial"><select name="mem" onchange=DisplayQuery(this) size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD>    <TD width="95" bgcolor="#CCFFFF">
                <p align="right"><font face="Arial">Send BW(5)</font></p>
</TD>    <TD width="96" bgcolor="#CCFFFF">
                <p><font face="Arial"><select name="send_bw5" onchange=DisplayQuery(this) size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD><TD width="116" bgcolor="#CCFFFF">
                <p align="right"><font face="Arial">Recv BW(5)</font></p>
</TD><TD width="117" bgcolor="#CCFFFF">
                <p><font face="Arial"><select name="recv_bw5" onchange=DisplayQuery(this)  size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD></TR>
  <TR>
    <TD width="69" bgcolor="#FFEECC">
      <P align=right><font face="Arial">Site: </font></P></TD>
    <TD width="115" bgcolor="#FFEECC">
      <P align=left><SELECT onchange=changeList4(this) size=1 name=level3> 
        <OPTION value=all selected>All</OPTION></SELECT> </P></TD>    <TD width="155" bgcolor="#FFEECC">
                <p align="right"><font face="Arial">Physical Memory</font></p>
</TD>    <TD width="95" bgcolor="#FFEECC">
                <p><font face="Arial"><select name="pmem" onchange=DisplayQuery(this) size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD>    <TD width="95" bgcolor="#FFEECC">
                <p align="right"><font face="Arial">Send BW(15)</font></p>
</TD>    <TD width="96" bgcolor="#FFEECC">
                <p><font face="Arial"><select name="send_bw15" onchange=DisplayQuery(this) size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD><TD width="116" bgcolor="#FFEECC">
                <p>&nbsp;</p>
</TD><TD width="117" bgcolor="#FFEECC">
                <p>&nbsp;</p>
</TD></TR>
  <TR>
    <TD width="69" bgcolor="#CCFFFF">
      <P align=right><font face="Arial">Node: </font></P></TD>
    <TD width="115" bgcolor="#CCFFFF">
      <P align=left><SELECT onchange=DisplayQuery(this) size=1 name=level4> 
        <OPTION value=all selected>All</OPTION></SELECT> </P></TD>    <TD width="155" bgcolor="#CCFFFF">
                <p align="right"><font face="Arial">Virtual Memory</font></p>
</TD>    <TD width="95" bgcolor="#CCFFFF">
                <p><font face="Arial"><select name="vmem" onchange=DisplayQuery(this) size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD>    <TD width="95" bgcolor="#CCFFFF">
                <p align="right"><font face="Arial"># Tasks</font></p>
</TD>    <TD width="96" bgcolor="#CCFFFF">
                <p><font face="Arial"><select name="ntasks" onchange=DisplayQuery(this) size="1">
                <option value="none" selected>NONE</option>
                <option value="avg">Avg</option>
                <option value="max">Max</option>
                <option value="min">Min</option>
                <option value="sum">Sum</option>
                </select></font></p>
</TD><TD width="116" bgcolor="#CCFFFF">
                <p>&nbsp;</p>
</TD><TD width="117" bgcolor="#CCFFFF">
                <p>&nbsp;</p>
</TD></TR>
</TBODY></TABLE>
    <p align="center"><INPUT onclick=FireQuery(this) type=button value="Submit Query"></p>

    <p align="center"><FONT face=Verdana,Arial size=2>XPATH Query: (For more complex 
query, edit the query below)</FONT> <BR><TEXTAREA name=Textarea rows="3" cols=100></TEXTAREA> <BR>
    </p>
<P align=center> 
&nbsp;

</FORM>

<P align=center><FONT face="Verdana, Arial" size=2>If you get the message 
&quot;Cannot find server&quot; or &quot;The page cannot be displayed&quot;, the service is currently 
off. </FONT>&nbsp;</P>
</BODY></HTML>
