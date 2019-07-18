<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMMS</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href=" assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href=" assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" assets/css/main.css">
    <link rel="stylesheet" href=" assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href=" assets/lib/animate.css/animate.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
   <style>
h9 {
    border-bottom: 2px solid #cc9900;
    color:#FF0000;
    font-size: 12px;
}
table, th , td  {
    border: 2px solid grey;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background:#EEEEEE;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>


   <script>
/*var ts  = setInterval(function(){

      var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
      document.getElementById('aside222').innerHTML = this.responseText; //
        }
       };
     xhttp.open("GET", "http://localhost/IMMS/php/Examination_side.php", true);
     xhttp.send();

},1000); */



function searchpro() {
  var xhttp;
  var st =document.getElementById("NTIHCNO").value;
  if (st.length == 0) {
    document.getElementById("recievedids").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("recievedids").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/IMMS/php/view_demography.php?RID="+st, true);
  xhttp.send();
}


function update(thiss) {
  var xhttp;
 var s= thiss;
    if (s.length == 0) {
    document.getElementById("recievedids").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("recievedids").innerHTML = '';
	  document.getElementById("NTIHCNO").value=s;
	  document.getElementById("pats").innerHTML = this.responseText;


    }
  };
  xhttp.open("GET", "http://localhost/ntihc/UpdateDemography.php?RID="+s, true);
  xhttp.send();
}

var pn = [];
    pn["v1"] = 0;
    pn["v2"] = 0;
    pn["v3"] = 0;
    pn["v4"] = 0;
    pn["v5"] = 0;
    pn["v6"] = 0;
var x="0,0,0,0,0,0";

function adss(selectorint){
    pn["v"+selectorint] = pn["v"+selectorint]+1;
     var obj=  document.getElementById('fields'+selectorint);
     var opts = [];
      opts[0] = ["",""];
      opts[1] = ["Select reason for testing","AIDS SYMPTOMS","CONF. PREV. HIV STATUS","CURRENT HIV RISK","FEEL ILL","FURTHER STUDIES","ILL RELATIVE/PARTNER","LOST RELATIVE/PARTNER","NEW PARTNER","OTHERS","PAST HIV RISK","PREGNANCY","STD SYMPTOMS","TO GET MARRIED","TRAVEL ABROAD"];

      opts[2] = ["Select general topic","CAREER GUIDANCE","CULTURE","FOLLOW UP","GBV","HYGIENE","NUTRITION","OTHERS","R/SHIP WITH PARENTS","R/SHIP WITH PARTNER","R/SHIP WITH PEERS"];

      opts[3] = ["Select pyschological","ANGER","ANXIETY","DEFILEMENT","DEPRESSION","GBV-PSYCHOLOGICAL","GUILTY","HOSTILITY","RAPE","STRESS","TRAUMA"];

      opts[4] = ["Select sexual health","HIV/AIDS","SEXUAL ABUSE","SEXUAL PROBLEMS","STDS-SEXUAL HEALTH"];

      opts[5] = ["Select STDS","ABNORMAL VAGINAL DISCHARGE","GENITAL ULCER","GROWTHS IN GENITALS","HERPES SIMPLEX","HERPES ZOSTA","HIV/AIDS","ITCHING IN GENITAL","PAINFUL GENITALS","SWELLING IN GENITALS","SYPHILLIS","URETHRAL DISCHARGE","VAGINAL DISCHARGE"];

      opts[6] = ["Select body changes","ACNE","BODY ODOUR","BREAST CHANGES","MENSTRUAL RELATED PROBLEMS","MENSTRUATION","NORMAL VAGINAL DISCHARGE","SIZE OF SEX ORGANS","VIRGINITY","WET DREAMS"];


var optsss = [];
for (var i = 0; i < opts.length; i++) {
optsss.push( opts[i])
}

x=  pn["v1"] +","+ pn["v2"] +","+pn["v3"]+","+pn["v4"]+","+pn["v5"]+","+pn["v6"];

var node = document.createElement('p');
  node.appendChild(document.createTextNode("Row "+pn["v"+selectorint]+"  ."));

var node1 = document.createElement('select');
    document.getElementById('values').value=x;
    node1.id   = 'fields'+selectorint+'_'+pn["v"+selectorint];
    node1.name = 'fields'+selectorint+'_'+pn["v"+selectorint];
    node1.type ='text';

for(var i =0; i<optsss[selectorint].length;i++) {
    var options = document.createElement('option');
        options.value=optsss[selectorint][i];
        options.text =optsss[selectorint][i];
        node1.appendChild(options);}
node.appendChild(node1);
  obj.appendChild(node);



}

function remove(sid){
      var  field='fields'+sid;
      var c = document.getElementById(field).childElementCount;
      var obj = document.getElementById(field);
      if(c<=0){}
      else{ 	obj.removeChild( obj.childNodes[c]);
             pn["v"+sid] = pn["v"+sid]-1;
             x=  pn["v1"] +","+ pn["v2"] +","+pn["v3"]+","+pn["v4"]+","+pn["v5"]+","+pn["v6"];
             document.getElementById('values').value=x;
          }
}

function save(){}

</script>

  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>





    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
            
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">


                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                                </button>
                            <a href="" class="navbar-brand"><img src="" alt=""></a>                            </header>



                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a href="logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>          
                                        <span class="glyphicon glyphicon-comment"></span>                                    </a>                                </div>
                            </div>
 
                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="client_management.php">Dashboard</a></li>
                                     <li><a href="counsellingroom.php">NTIHC COUNSELLING ROOM</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            QUICK LINKS<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Waiting room</a></li>
                                             <li><a href="">Counselling room referral follow ups</a></li>
                                             <li><a href="">View VCT Record</a></li>
                                             <li><a href="">View Referral records</a></li>
                                             <li><a href="">View VCT Lab Request</a></li> 
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                  </nav>
                    <!-- /.navbar -->               <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder=" ">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class=""></i>                                                </button>
                                            </span>                                        </div>
                                  </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <img src="assets/img/ntihclog2.png" width="30" height="30" style="margin-left:-3px;">
             NAGURU TEENAGE INFORMATION AND HEALTH CENTRE : (I.M.M.SYSTEM)          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->

              <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="text-center">
    <ul class="stats_box">
	<li>
 
	    <div class="stat_text">
		<strong></strong>Due for medical svs
		<span class="percent down"> <i class=""></i>
         <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
        </span>	    </div>
	</li>
	<li>
 
	    <div class="stat_text">
		<strong></strong>Due for Counselling
		<span class="percent up"> <i class=""></i>
                               <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>

</span>	    </div>
	</li>
	<li>
 
	    <div class="stat_text">
		<strong></strong>Due for Counselling
		<span class="percent up"> <i class=""></i>
                               <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>


</span></div>
	</li>
	<li>
 
      <div class="stat_text">
		<strong></strong>Completed lab Orders
		<span class="percent">
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='LABORDERCOMPLETED' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
 
</span></div>
	</li>
	<li>
 
    	    <div class="stat_text">
		<strong></strong>Completed lab Orders
		<span class="percent">
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='LABORDERCOMPLETED' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
 
 
</span></div>
	</li>
	<li>
 
    	    <div class="stat_text">
		<strong></strong>Completed lab Orders
		<span class="percent">
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='LABORDERCOMPLETED' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
        </span>	    </div>
	</li>

    </ul>
</div>

<form action="counsellingroom_process.php" method="post">

<div class="text-center" >
  <div class="form-inline">
   <div class="form-group">
   <div class="col-lg-31" style="margin-left:-36px;">
     <label for="NTIHCNO">NTIHC NO:</label>
      <input name="NTIHCNO" onKeyUp="searchpro()" id="NTIHCNO" type="text" class="form-control" placeholder="Search Client Ntihc No." required="required"/>
   </div>
     <label for="DATECREATED">Date:</label>
     <input type="text" class="form-control"  name="DATECREATED" value="<?php echo date('Y-m-d'); ?>">
   </div> 
 
</div> </p>
<div class="row">
    <div class="col-lg-4" style="width:34%">
	    <div class="box">
	         <div class="body" style="height: 650px; text-align:left; width:77%;background-color:#eeeeee;"/>
                 <header>
  	  	             <h5>COUNSELLING VISTS</h5>
                 </header><br /> 
                 <div class="clear" id="recievedids" style="margin-left: -87px; margin-top:-10px; width:342px; margin-left: 64px;">    
                 </div> 
                 
                  <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#ffffa6;">Vist by</span>
                <select class="form-control" id="VISTBY" input name="VISTBY"  required="required" style="height:28px;     width: 200px;"/>
                  <option value="-1">Select</option>
                                     <option>YOUTH</option>
                                     <option>PARENT</option>
                                     <option>YOUTH AND PARENT</option>
                                     <option>COUPLE</option>
                             </select>
              </div>   
               <br>
                  
	                <div id="fields1" name="fields1">   </div>
                     <div>
                      <input type="hidden" class="form-control"  id="values" name="values" value="0,0,0,0,0,0">
                     <input type="button"  onclick="adss(1)" value="+ Add reason for testing" style="margin-left: 0px;"/>
                     <input type="button"  onclick="remove(1)" value="- Remove" />
                    </div>
                    </P>
                <div class="input-group">
                <span class="input-group-addon" style=" width:70px; text-align:left; background-color:#ffffa6;">Action</span>
                <textarea id="wysihtml5" name="ACTION" style=" margin-left: -14px; width:245px; height:100px;" class="form-control"></textarea>  
               </div>  
               <br>
               
               
               <div class="input-group">
                <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#ffffa6;">Brief</span>
                 <input type="text" input name="BRIEF"  id="BRIEF"  value="WANTS VCT" class="form-control" style="height:28px; width: 200px;"/>
              </div>  
              <br>
               
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#ffffa6;">Counselling</span>
                 <input type="text" input name="COUNSELLING"  id="COUNSELLING"  value="PRE AND POST TEST COUNSELLING" class="form-control" style="height:28px; width: 200px; font-size:10px;"/>
              </div>  
              <br>
               
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#ffffa6;">User initial</span>
                 <input type="text" input name="USERINITRIAL"  id="USERINITRIAL" disabled="disabled" class="form-control" style="height:28px; width: 200px;"/>
              </div>  
              <br>
               
   <div class="input-group">
                <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#ffffa6;">User</span>
                 <input type="text" input name="SENDER"  id="SENDER"  value="COUNSELLOR" class="form-control" style="height:28px; width: 200px;"/>
              </div>  
              <br>
          
             </div>
         </div>
     </div>

	<div class="col-lg-4" style="margin-left:-120px; width: 75%"/>
    <div class="box" >
    <div class="body" style="height: 565px; width:100%; background-color:#EEEEEE;" >
    
    <div id="tabs" >
	<ul>
		<li><a href="#tabs-1">GENERAL</a></li>
		<li><a href="#tabs-2">HCT</a></li> 
        <li><a href="#tabs-3">Lab results (View)</a></li> 
	</ul>
	<div id="tabs-1" style="height: 400px; background-color:#ffffc6; width:873px;"> 
        <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:270px; margin-top:2px; "/>
         
	                <div id="fields2" name="field2">   </div>
                     <div>
                     <input type="button"  onclick="adss(2)" value="+ General Topic ." style="width:170px;"/>
                     <input type="button"  onclick="remove(2)" value=" - " />
                    </div>
                     
                     <div id="fields3" name="field3">   </div>
                     <div>
                     <input type="button"  onclick="adss(3)" value="+ Psychological ." style="width:170px;"/>
                     <input type="button"  onclick="remove(3)" value=" - " />
                     </div> 
                     
                     
                      <div id="fields4" name="field4">   </div>
                      <div>
                     <input type="button"  onclick="adss(4)" value="+ Sexual health ." style="width:170px;"/>
                     <input type="button"  onclick="remove(4)" value=" - " />
                    </div> 
                           </div> 
                      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:270px; margin-top:2px; "/>    

                   <div id="fields5" name="field5">   </div>
                     <div>
                     <input type="button"  onclick="adss(5)" value="+ STDS............ " style="width:170px;"/>
                     <input type="button"  onclick="remove(5)" value=" - " />
                    </div>

                    <div id="fields6" name="field6">   </div>
                     <div>                      
                     <input type="button"  onclick="adss(6)" value="+ Body Changes" style="width:170px;"/>
                     <input type="button"  onclick="remove(6)" value=" - " />
                    </div>

                  <div class="clear"></div>
     <input type="submit" name="button" id="button" value="Save" style= 'margin-left: 2px; width: 190px; margin-top:7px;height:26px;  font-weight:bold; color:red;'/>
      </form>
             
        </div>
      <!-- DONUT CHART BLOCK -->
              <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 379px; margin-top:-70px; width:365px; margin-left:-16px;"/>  
            
                    <span class="input-group-addon" style=" width: 363px; text-align:center; font-weight:bold; background-color:#FFF;"> Clients due for Counselling Services</span>
                
              <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "patientmgt";

                     // Create connection
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     // Check connection
                     if (!$conn) {
                     die("Connection failed: " . mysqli_connect_error());
                     }

                     $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'";

                     $result = $conn->query($sql);
                     $st ='<table>
                     <thead>
                     <tr>
                     <th>RID</th>
                     <th>NTIHC NO.</th>
	                 <th>VIST TYPE</th>
					 <th>CLIENT NAME</th>
                     </tr>
                     </thead>
                     <tbody ">';

                     while($row = $result->fetch_assoc()) {
                     $st=$st."<tr>".
	                 "<td>" . $row['RID'] . "</td>".
                     "<td>" . $row['NTIHCNO'] . "</td>".
		             "<td>" . $row['VISTTYPE'] . "</td>".
					  "<td>" . $row['CLIENTNAME'] . "</td>".
		             "</tr>";
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?>
     
             
				</div> </div> </div>
           <!-- close messanger --> 
             <div id="tabs-2" style="height: 500px; background-color:#ffffc6; width:873px;"/> 
             
          <div id="accordion">
	<h3>HCT Section A & B</h3>
	<div>    
        <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:350px; margin-top:-6px; margin-left: -20px"/>
              
                 <span class="input-group-addon" style=" width: 349px; text-align:center; font-weight:bold; background-color:#FFF;"> SECTION A</span>
                 </P>
                 
                <div class="input-group">
                <span class="input-group-addon" style=" width: 220px; text-align:left; background-color:#eeeeee;">Reg. No.</span>
                <input type="alphanumeric" input name="REGISTRATIONNUMBER"  id="REGISTRATIONNUMBER" disabled="disabled" class="form-control" style="height:28px;  width: 200px;"/>
                </div>   
                
               <div class="input-group"> 
               <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#eeeeee;">Date</span>
             <input type="date"  name="DATECREATED" id="datepicker" value="<?php echo date('d-m-y'); ?>" class="form-control" style="height:28px;    width: 200px;"/>
               </div>   
              
                 <div class="input-group">
                <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#eeeeee;">Health Unit</span>
                 <input type="text" input name="HEALTHUNIT"  id="HEALTHUNIT"  value="NTIHC" class="form-control" style="height:28px; width: 200px;"/>
              </div>   
               
               <div class="input-group">
                <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#eeeeee;">HSD:</span>
                 <input type="text" input name="HSD"  id="HSD" required="required" class="form-control" style="height:28px;    width: 200px;"/>
              </div> 
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 164px; text-align:left; background-color:#eeeeee;">District</span>
                 <input type="text" input name="DISTRICT"  id="DISTRICT" disabled="disabled" class="form-control" style="height:28px;    width: 200px;"/>
              </div>  
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#eeeeee;">Centre status</span>
                <select class="form-control" id="CENTRE STATUS" input name="CENTRE STATUS" required="required" style="height:28px;  width: 200px;"/>
                <option value="STATIC">STATIC </option>
                                <option>OUTREACH</option>  
                 </select> 
              </div>    
               
               <div class="input-group">
                <span class="input-group-addon" style=" width:220px; text-align:left; background-color:#eeeeee;">Location</span>
               <input type="numeric" input name="LOCATION"  id="LOCATION" placeholder="Specify where" required="required" class="form-control" style="height:28px;    width: 200px;"/>
              </div>   
               
              <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Point of testing</span>
                <select class="form-control" id="POINTOFTESTING" input name="POINTOFTESTING" placeholder="e.g. Ward, OPD, Clinic" required="required" style="height:28px;     width: 200px;"/>
                <option value="-1"> </option>
                             <option>WARD</option>  
                             <option>OPD</option>  
                             <option>CLINIC</option>  
                 </select> 
              </div>   
               
                    <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Client's Name</span>
               <input type="numeric" input name="CLIENTNAME"  id="CLIENTNAME" disabled="disabled" class="form-control" style="height:28px;    width: 200px;"/>
              </div>  
              
                <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Telephone</span>
               <input type="numeric" input name="COTACTPHONE"  id="COTACTPHONE" disabled="disabled" class="form-control" style="height:28px;    width: 200px;"/>
              </div>  
               
                     <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Sex</span>
                <select class="form-control" id="SEX" input name="SEX" disabled="disabled" style="height:28px;  width: 200px;"/>
                <option value="-1"> </option>
                             <option>MALE</option>  
                             <option>FEMALE</option>   
                 </select> 
              </div>  
              
                </div>  
      <!-- close messanger -->
              <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 379px; margin-top:-87px; width:365px; margin-left:18px;"/>  
                    </P>
                <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Age</span>
                <select class="form-control" id="AGE" input name="AGE"  disabled="disabled" style="height:28px;  width: 200px;"/> 
                                <option>Below 10</option> 
								<option>10</option> 
                                <option>11</option>
								<option>12</option> 
                                <option>13</option>
								<option>14</option> 
                                <option>15</option>
								<option>16</option> 
                                <option>17</option>
								<option>18</option> 
                                <option>19</option>
								<option>20</option> 
                                <option>21</option>
								<option>22</option> 
                                <option>23</option> 
                                <option>24</option> 
                                 <option>Above 24</option>    
                                </select> 
                                 </div>   
                                   
                     <div class="input-group">
               <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Accompanied by:</span>
               <select class="form-control" id="ACCOMPANIEDBY" input name="ACCOMPANIEDBY" placeholder="If child (Below 12 years)" required="required" style="height:28px;    width: 200px;"/>
                <option value="MOTHER">MOTHER</option>
                             <option>FATHER</option>  
                             <option>CARE TAKER</option>   
                 </select> 
              </div>   
               
               <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Address</span>
               <input type="text" input name="VILLAGES"  id="VILLAGE" placeholder="Village" class="form-control" style="height:28px;    width: 200px;"/>
              </div>  
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Address</span>
               <input type="text" input name="PARISH"  id="PARISH"  placeholder="Parish" class="form-control" style="height:28px;    width: 200px;"/>
              </div>  
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">Address</span>
              <input type="text" input name="SUBCOUNTY"  id="SUBCOUNTY"  placeholder="Sub county" class="form-control" style="height:28px;  width: 200px;"/>
              </div>  
              <br>  
              
              
              
              <span class="input-group-addon" style=" width: 366px; text-align:center; font-weight:bold; background-color:#FFF;"> SECTION B</span>
                 </P> 
                 
                 <div class="input-group">
                <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#eeeeee;">Pre-Test Counselling done?</span>
                <select class="form-control" id="PRE_TESTCOUSELLING_GIVEN" input name="PRE_TESTCOUSELLING_GIVEN" required="required" style="height:28px; width:146px; background-color:#FFFFD7;"/>
                                <option value="YES">YES</option> 
                                <option>NO</option>  
                 </select> 
              </div>   
                  
                  </P> 
                <div class="input-group">
                <span class="input-group-addon" style=" width: 220px; text-align:left; background-color:#eeeeee;">Counselled as</span>
                <select class="form-control" id="COUNSELLED_AS" input name="COUNSELLED_AS" required="required" style="height:28px;  width: 200px;background-color:#FFFFD7;"/>
                <option value="INDIVIDUAL">INDIVIDUAL</option>
                                <option>COUPLE</option>  
                                <option>GROUP</option> 
                 </select> 
              </div>   
                
                <div class="input-group">
                <span class="input-group-addon" style=" width: 220px; text-align:left; background-color:#eeeeee;">Approach:</span>
                <select class="form-control" id="APPROACH" input name="APPROACH" required="required" style="height:28px;  width: 200px;background-color:#FFFFD7;"/>
                <option value="-1"> </option>
                                <option>CICT</option>  
                                <option>PITC</option> 
                </select> 
                </div>   
                
                <div class="input-group">
                <span class="input-group-addon" style=" width: 220px; text-align:left; background-color:#eeeeee;">HCT Entry Point:</span>
                <select class="form-control" id="HCT_ENTRYPOINT" input name="HCT_ENTRYPOINT" required="required" style="height:28px;  width: 200px;background-color:#FFFFD7;"/>
                <option value="-1"> </option>
                                <option>FACILITY BASED</option>  
                                <option>WORK PLACE</option> 
                                <option>HBHCT</option>  
                                <option>For Pregnant</option> 
                                <option>PMTCT</option>  
                                <option>PEP</option> 
                                <option>Circumcision (SMC)</option> 
                                <option>MARPS</option> 
                </select> 
                </div>    
                 
                   <div class="input-group">
                <span class="input-group-addon" style=" width: 220px; text-align:left; background-color:#eeeeee;">Marital status</span>
                <select class="form-control" id="MARITALSTATUS" input name="MARITALSTATUS" required="required" style="height:28px;  width: 200px;background-color:#FFFFD7;"/>
                <option value="-1"> </option>
                                <option>MARRIED/COHABITING</option>  
                                <option>DIVORCED/SEPARATED</option> 
                                <option>WIDOWED</option>  
                                <option>NEVER MARRIED</option>  
                </select> 
                </div>  
                </div> </div> 
               </p>              
    </div>
	<h3>Section B (count)</h3>
	<div>
     <!-- USER PROFILE BLOCK -->
             <div class="col-sm-3 col-lg-3" style="width:400px; margin-top:-6px; margin-left: -29px;"/> 
             </P>
                 <span class="input-group-addon" style=" width: 376px; text-align:center; font-weight:bold; background-color:#FFF;"> SECTION B (COUT)</span>
                 </P> 
                
                 <div class="input-group" style="font-size:14px;">Have you ever Tested for HIV before?</span> 
                <select class="form-control" id="MARITALSTATUS" input name="MARITALSTATUS" required="required" style="height:28px;  width: 200px;background-color:#FFFFD7;"/>
                <option value="-1"> </option>
                                <option>YES</option>  
                                <option>NO</option>    
                </select> 
                </div>    
                
                 <div class="input-group" style="font-size:14px;">How many times have you tested in the last 12 months</span> 
                <input type="number" input name="NUMBEROFTESTS"  id="NUMBEROFTESTS" placeholder=" " required="required" class="form-control" style="height:28px;    width: 200px;background-color:#FFF;"/>   
                </div>  
              
                  <div class="input-group" style="font-size:14px;">Number of sexual partners in the last 12 months</span>
               <input type="number" input name="NO_SEXUALPARTNERS"  id="NO_SEXUALPARTNERS" placeholder=" " required="required" class="form-control" style="height:28px;    width: 200px;background-color:#FFF;"/>  
                  
                </div>   
                 
                   <div class="input-group" style="font-size:14px;">What was the test results last time you Tested </span>
                <select class="form-control" id="LAST_TESTRESULTS" input name="LAST_TESTRESULTS" required="required" style="height:28px;  width: 200px;background-color:#FFF;"/>
                <option value="-1"> </option>
                                <option>POSITIVE</option>   
                                <option>NEGATIVE</option>   
                </select> 
                </div> 
               
                <div class="input-group" style="font-size:14px;">Has your Partner / Spouse bee?n tested for HIV before?</span> 
                <select class="form-control" id="SPOUSE_PARTNERTESTED_BEFORE" input name="SPOUSE_PARTNERTESTED_BEFORE" required="required" style="height:28px;  width: 200px;background-color:#FFF;"/>
                <option value="-1"> </option>
                                <option>NO</option>  
                                <option>YES</option> 
                                <option>DON'T KNOW</option>    
                </select> 
                </div>    
               <br>
                <div class="input-group" style="font-size:14px;">If yes what were the results?</span>
                <select class="form-control" id="IFYES_RESULTS" input name="IFYES_RESULTS"  style="height:28px;  width: 200px;background-color:#FFF;"/>
                <option value="-1">  </option>
                                <option>POSITIVE</option>   
                                <option>NEGATIVE</option>  
                                <option>DON'T KNOW</option>    
                </select> 
                </div> 
                <br>  
                </div>   
                
      <!-- close messanger -->
              <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 379px; margin-top:-76px; width:365px; margin-left:18px;"/>  
                     </P>
                
                <span class="input-group-addon" style=" width: 376px; text-align:center; font-weight:bold; background-color:#FFF;"> CONSENT</span>
                </P> 
                 
                <div class="input-group">
                <span class="input-group-addon" style="width: 220px;text-align:left; background-color:#eeeeee;">I</span>
                <input type="numeric" input name="CLIENTNAMERT"  id="CLIENTNAMERT" disabled="disabled" class="form-control" style="height:28px; background-color:#dddddd; width: 200px;"/>
                </div> 
                 
                <div class="input-group"> 
                <textarea id="wysihtml5" name="ACTION" placeholder="having recieved information about testing for HIV from my counselor and understand. I do here by voluntarily decide and consent /assent if (12-<18 years) for an HIV test." style=" margin-left: 1px;  background-color:#dddddd;" class="form-control" rows="4"cols="40" ></textarea> 
                <br>
                 <div class="input-group"> 
               <span class="input-group-addon" style="width: 220px; text-align:left; background-color:#eeeeee;">Signature date</span>
             <input type="date"  name="SIGNEDDATE" id="datepicker" value="<?php echo date('d-m-y'); ?>" class="form-control" style="height:28px; width: 200px;"/>
               </div>
                 
             <br>
             <input type="submit" name="button" id="button" value="Process an HIV test" style= 'margin-left: 2px; width: 197px; margin-top: 21px;height:26px;  font-weight:bold; color:red;'/>
            </form>                 
      
  </p>              
    </div>  
                
      </div> </div> </div>
          </div> </div>  
                <!-- close messanger -->  
                <div id="tabs-3" style="height: 490px; background-color:#fff; width:873px; "> 
        <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:316px; margin-top:-6px; margin-left: -14px; background-color:#fff; height: 344px;"/> 
          </P>
          <span class="input-group-addon" style=" width: 176px; text-align:center; font-weight:bold; background-color:#FFF;"> Click the (view icon) to display results</span>
        </P> 
                
         
                 
                    
      <!-- close messanger -->
              <div class="col-sm-3 col-lg-3" style=" margin-left: 261px;">
      		<div class="dash-unit" style="height: 379px; margin-top:-121px; width:525px; margin-left:35px;"/>  
                     
                <div class="input-group"> 
                <input type="numeric" input name="CLIENTNAME"  id="CLIENTNAME" disabled="disabled" class="form-control" placeholder="Client Name" style="height:28px; background-color:#eeeeee; width: 230px;"/>
                </div>  
                 
                 <div class="input-group">
                <span class="input-group-addon" style="width: 229px;text-align:left; background-color:#ffffc6;">HIV Test 1</span> 
                </div>  
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 229px;text-align:left; background-color:#ffffc6;">Kit Name:Determine</span> 
                </div>
                
                 <div class="input-group">
                <span class="input-group-addon" style="width:87px;text-align:left; background-color:#ffffc6;">Lot No.1</span>
                <input type="numeric" input name="LOTNOT1"  id="LOTNOT1" disabled="disabled" class="form-control"  style="height:28px; background-color:#eeeeee; width: 142px;"/>
                </div>  
                
                 <div class="input-group"> 
               <span class="input-group-addon" style="width: 87px; text-align:left; background-color:#ffffc6;">Exp D1</span>
             <input type="date"  name="EXPIRYDATET1" id="datepicker" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px; width: 142px;"/>
               </div>
                 
                 <div class="input-group">
                <span class="input-group-addon" style="width:87px;text-align:left; background-color:#ffffc6;">Reactivity</span> 
                <select class="form-control" id="REACTIVITYT1" input name="REACTIVITYT1" disabled="disabled" style="height:28px;  width: 142px;background-color:#eeeeee;"/>
                <option value="-1">  </option>
                                <option>NR</option>   
                                <option>R</option>  
                                <option>INV</option>    
                                <option>NT</option>    
                </select> 
                </div> 
                
                 
               <fieldset class="row123" style="margin-left:232px; margin-top:-178px; width:180px;">
                 
                <div class="input-group"> 
                <input type="numeric" input name="NTIHCNO"  id="NTIHCNO" disabled="disabled" class="form-control" placeholder="NTIHC NO." style="height:28px; background-color:#eeeeee; width: 152px;"/>
                </div>  
                 
                <div class="input-group">
                <span class="input-group-addon" style="width: 152px;text-align:left; background-color:#ffffc6;">HIV test2</span> 
                </div>  
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 152px;text-align:left; background-color:#ffffc6;">Start Pack</span> 
                </div>
                
                 <div class="input-group">
                <span class="input-group-addon" style="width:87px;text-align:left; background-color:#ffffc6;">Lot No.2</span>
                <input type="numeric" input name="LOTNOT2"  id="LOTNOT2" disabled="disabled" class="form-control"  style="height:28px; background-color:#eeeeee; width: 65px;"/>
                </div>  
                
                 <div class="input-group">  
             <input type="date"  name="EXPIRYDATET2" id="datepicker" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px; width: 152px;"/>
               </div>
                 
                 <div class="input-group">
                <span class="input-group-addon" style="width:87px;text-align:left; background-color:#ffffc6;">RR2</span> 
                <select class="form-control" id="REACTIVITYT2" input name="REACTIVITYT2"  disabled="disabled" style="height:28px;  width: 66px; background-color:#eeeeee;"/>
                <option value="-1">  </option>
                                <option>NR</option>   
                                <option>R</option>  
                                <option>INV</option>    
                                <option>NT</option>    
                </select> 
                </div> 
                </fieldset>  
                 
               <fieldset class="row1231" style="margin-left:388px; margin-top:-176px; width:180px;">
                 
                <div class="input-group"> 
                <input type="numeric" input name="TECHNICIAN_NAME"  id="TECHNICIAN_NAME" disabled="disabled" class="form-control" placeholder="Test done by" style="height:28px; background-color:#eeeeee; width: 152px; color:#FF0000;"/>
                </div>  
                 
                <div class="input-group">
                <span class="input-group-addon" style="width: 152px;text-align:left; background-color:#ffffc6;">HIV test3</span> 
                </div>  
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 152px;text-align:left; background-color:#ffffc6;">Unigold</span> 
                </div>
                
                 <div class="input-group">
                <span class="input-group-addon" style="width:87px;text-align:left; background-color:#ffffc6;">Lot No.3</span>
                <input type="numeric" input name="LOTNOT3"  id="LOTNOT3" disabled="disabled" class="form-control"  style="height:28px; background-color:#eeeeee; width: 65px; color:#FF0000;"/>
                </div>  
                
                 <div class="input-group">  
             <input type="date"  name="EXPIRYDATET3" id="datepicker" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px; width: 152px; color:#FF0000;"/>
               </div>
                 
                 <div class="input-group">
                <span class="input-group-addon" style="width:87px;text-align:left; background-color:#ffffc6;">RR3</span> 
                <select class="form-control" id="REACTIVITYT3" input name="REACTIVITYT3"  disabled="disabled" style="height:28px;  width: 66px; background-color:#eeeeee;color:#FF0000;"/>
                <option value="-1">  </option>
                                <option>NR</option>   
                                <option>R</option>  
                                <option>INV</option>    
                                <option>NT</option>    
                </select> 
                </div> 
                </fieldset>    
                <fieldset class="row1232" style="margin-left:1px; margin-top:-1px; width:180px;"> 
                 <br>
                 <div class="input-group">
                 <span class="input-group-addon" style="width: 198px;text-align:left; background-color:#FFFfa6;">HIV final test</span>  	`
                  <select class="form-control" id="FINALREACTIVITY" input name="FINALREACTIVITY"  disabled="disabled" style="height:28px;  width: 158px; background-color:#eeeeee; font-size:16px; font-weight:bold;"/>
                <option value="-1">  </option>
                                <option>NEG</option>   
                                <option>POS</option>  
                                <option>INC</option>    
                                <option>NT</option>   
                </select> 
                </div>  <br> 
                 
                 <div class="input-group">
                <span class="input-group-addon" style="width:198px;text-align:left; background-color:#ffffa6;">Results recieved</span>
                <select class="form-control" id="RESULTSRECEIVED" input name="RESULTSRECEIVED" style="height:28px;  width:158px; background-color:#fff;"/>
                <option value="YES">YES</option>
                             <option>NO</option>      
                </select> 
                </div>  
                 
                <div class="input-group">
                <span class="input-group-addon" style="width:198px;text-align:left; background-color:#ffffa6;">As a couple</span>
                <select class="form-control" id="RECIEVEDASACOUPLE" input name="RECIEVEDASACOUPLE" style="height:28px; width: 158px; background-color:#fff;"/>
                <option value="-1"> </option>
                             <option>YES</option>  
                             <option>NO</option>      
                </select> 
                </div>  
                  
               <div class="input-group">
                <span class="input-group-addon" style="width:198px;text-align:left; background-color:#ffffa6;">Couple results</span>
                <select class="form-control" id="COUPLERESULTS" input name="COUPLERESULTS" style="height:28px; width:158px; background-color:#FFF;"/>
                <option value="-1"> </option>
                             <option>CONCORDANT</option>
                             <option>DISCORDANT</option>        
                </select> 
                </div>   
                
                  <div class="input-group">
                <span class="input-group-addon" style="width:198px; text-align:left; background-color:#ffffa6;">Is there suspicion of TB</span>
                <select class="form-control" id="COUPLERESULTS" input name="COUPLERESULTS" style="height:28px;  width:158px; background-color:#FFF;"/>
                <option value="-1"> (Current cough,fever,weight loss and night sweats)</option>
                             <option>YES</option>
                             <option>NO</option>        
                </select> 
                </div>  
                
                 <div class="input-group">
                 <span class="input-group-addon" style="width:198px;text-align:left; background-color:#ffffa6;">Co-trimoxazole prophylasis</span>  
                <select class="form-control" id="COUPLERESULTS" input name="COUPLERESULTS" style="height:28px;  width:158px; background-color:#FFF;"/>
                <option value="-1">Has client started? </option>
                             <option>YES</option>
                             <option>NO</option>        
                </select>  
                 </div>  
                 
                  <div class="input-group">
                 <span class="input-group-addon" style="width:198px;text-align:left; background-color:#ffffa6;">Care or any other service</span>  
                <select class="form-control" id="COUPLERESULTS" input name="COUPLERESULTS" style="height:28px;  width:158px; background-color:#FFF;"/>
                <option value="-1">Has client been linked? </option>
                             <option>YES</option>
                             <option>NO</option>        
                </select>  
                 </div>
                   
                  
                     <div class="input-group">
                <span class="input-group-addon" style="width:198px;text-align:left; background-color:#ffffa6;">CD4 count results</span> 
                <input type="text" class="form-control" id="CD4_COUNTRECOERDS" input name="CD4_COUNTRECOERDS" placeholder="If applicable:" style="height:28px;  width: 158px; background-color:#fff;"/>
                </div>  
                 
                <div class="input-group">
                <span class="input-group-addon" style="width:198px;text-align:left; background-color:#ffffa6;">Counselor's name</span> 
                <input type="text" class="form-control" id="COUNSELORS_NAME" input name="COUNSELORS_NAME" style="height:28px;  width: 158px; background-color:#fff;"/>
              </div>   
              <br>  
         <input type="submit" name="button" id="button" value="Achive results" style= " margin-left: 704px; margin-top:-10px; height:26px; background-color:fff; font-weight:bold; 
         color:fff;"/> 
                 </form>             
                   
                </div> </div> 
                   </div>
       </div>
       </div>
       </div>
       </div>
	   </div> 
 </div>
 </div>
 </div>
 </div> 
 </div>
                     
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information And Health Centre</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->

                    <script src="assets/lib/jquery/jquery.js"></script>
                    <script src="assets/lib/timepicker/js/bootstrap-timepicker.min.js"></script>
                    <script src="assets/lib/timepicker/js/bootstrap-timepicker.js"></script>
                    <script src="asset/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="asset/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="asset/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="asset/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="asset/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="asset/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="asset/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="asset/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="../ntihc/assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="../ntihc/assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="../ntihc/assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="../ntihc/assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="../ntihc/assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
                
                
            <link href="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src="assets/lib/jquery/jquery.js"></script>
<script src="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
			    <!-- END PAGE LEVEL SCRIPTS -->
        </body>
</html>
