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
    <link rel="stylesheet" href="../ntihc/assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../ntihc/assets/css/main.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/animate.css/animate.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
        <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
        <!-- END PAGE LEVEL  STYLES -->


      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>


    <style>
	table{border:2px solid white;}
	td,th,tr{border:2px solid white;}
	select{width:64%;margin-left: -5px;float: right;font-size: 11px; height:24px;border: -1px solid #ccc;border-radius: 9px;}
	</style>

   <script>
	function searchpro(){
	   var dataString = document.getElementById('NTIHCNO').value;

	   if(dataString==''){ document.getElementById('schrest').innerHTML="";}
	   else{
	   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
      document.getElementById('schrest').innerHTML = this.responseText; //
    }
  };
  xhttp.open("GET", "http://localhost/IMMS/php/get_clientNTIHCno_onregn.php?q="+dataString, true);
  xhttp.send();

	}
	}


	function upt(idxx){
	document.getElementById('NTIHCNO').value = idxx;
	 document.getElementById('schrest').innerHTML="";
	}

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
                                    <a href="file:///G|/IMMS/ntihc/login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>                                    </a>
                                    <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip"
                                       class="btn btn-default btn-sm toggle-right">
                                        <span class="glyphicon glyphicon-comment"></span>                                    </a>                                </div>
                            </div>




                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="http://localhost/IMMS/ntihc/treatmentroom.php">Dashboard</a></li>
                                    <li><a href="">.</a></li>
                                    <li><a href="">.</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Welcome<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">.</a></li>
                                            <li><a href="">.</a></li>
                                            <li><a href="">.</a></li>
                                            <li><a href="">.</a></li>
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
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class=""></i>                                                </button>
                                            </span>                                        </div>
                                  </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-dashboard"></i>&nbsp;
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
</span></div>
	</li>
	<li>

	    <div class="stat_text">
		<strong></strong>No. of clients in svs
		<span class="percent">
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='YES' ORDER BY NTIHCNO")) {

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
	<li>

	    <div class="stat_text">
		<strong></strong> Total vists registered
		<span class="percent down"> <i class=""></i>
         <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' ORDER BY NTIHCNO")) {

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
<hr>
<div class="text-center" >
                     <div class="aside001" style= ' margin-left: 0px;margin-top:0px; width:100%; background:#00CA78;'>

                     				<p>
                     					<input type="button" value="Add test" onClick="addRow('dataTable')" />
                     					<input type="button" value="Remove" onClick="deleteRow('dataTable')"  />

                     				</p>
                                    <table id="dataTable"  border="1" style="width:100%;">
                                      <thead>
                                        <tr style="width:100%;">
                                <th> <label for="NTIHCNO" class="label"> *</label>                   </th>
                                <th> <label for="NTIHCNO" class="label">NTIHC NO. *</label>          </th>
                                <th><label for="SPECIMEN" class="label">SPECIMEN</label>             </th>
                                <th> <label for="HEAMATOLOGY/SCROLOGY" class="label">HEAMATOLOGY/SCROLOGY</label>  </th>
                                <th><label for="MALARIA" class="label">MALARIA</label>                </th>
                                <th><label for="STOOL_MICROSCOPY" class="label">STOOL MICROSCOPY</label></th>
                                <th> <label for="URINE_MICROSCOPY" class="label">URINE MICROSCOPY</label></th>
                                <th><label for="SWABS-TYPE" class="label">SWABS.TYPE</label> </th>
                                <th><label for="SWABS-WETPREP" class="label">WET.PREP</label>        </th>
                                <th><label for="SWABS-GRAMSTAIN" class="label">GRAM STAIN</label>    </th>
                                <th><label for="SWABS-GRAMSTAIN" class="label">SAVE</label>           </th>
                             </tr>
                                      </thead>
                                       <tbody id="tablebody" style="width:800px;">
                                         <tr id="0_rowdata" >
                                         <td><input type="checkbox" required="required" checked="checked" /></td>
                                         <td>
                                          <input type="text" name="NTIHCNO" id="NTIHCNO" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFFFAA;'/>
                                         </td>
                     					       	  <td><select name="SWABS-TYPE" id="SPECIMEN" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:82px; background-color:#FFFFAA;'/>
                     		                       	<option value="-1">Select</option>
                     			                      <option>BLOOD</option>
                     								            <option>URINE</option>
                                                 <option>STOOL</option>
                     								            <option>CSF</option>
                     							             	<option>SALIVA</option>
                                           </select>
                     						       </td>
                     						       <td><select name="HEAMATOLOGY_SCROLOGY" id="HEAMATOLOGY_SCROLOGY" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFFFAA;'/>
                     		                      	<option value="-1">Select</option>
                     			                      <option>Hb</option>
                     							             	<option>WBCT</option>
                                                 <option>VDRL/RPR</option>
                     							        </select>
                     					         </td>
                     					      	 <td><select name="MALARIA" id="MALARIA" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:190px; background-color:#FFFFAA;'/>
                     		                      	<option value="-1">Select</option>
                     			                      <option>MALARIA MICROSCOPY</option>
                     							            	<option>MALARIA RDTs</option>
                                                 <option>OTHER HEAMOPATRASITES</option>
                     							        </select>
                     		              </td>
                     					        <td><select name="STOOL_MICROSCOPY" id="STOOL_MICROSCOPY" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFFFAA;'/>
                     			                      <option value="-1">Select</option>
                     			                      <option>MACRO</option>
                     								            <option>MICRO</option>
                                         </select>
                     							  </td>
                     						    <td><select name="URINE_MICROSCOPY" id="URINE_MICROSCOPY" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:130px; background-color:#FFFFAA;'/>
                     			                      <option value="-1">Select</option>
                     			                      <option>MACROSCOPY</option>
                     								            <option>MICROSCOPY</option>
                                                 <option>PROTEIN</option>
                     								            <option>SUGAR</option>
                     								            <option>PREGNANCY</option>
                     								    </select>
                                   </td>
                     						  <td><select name="SWABS-TYPE" id="SWABS-TYPE" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:90px; background-color:#FFFFAA;'/>
                     			                      <option value="-1">Select</option>
                     			                      <option>VIGINAL</option>
                     								            <option>ORAL</option>
                                                 <option>PENILE</option>
                     									</select>
                                  </td>
                     						 <td><select name="SWABS-TYPE" id="SWABS-WETPREP" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:81px; background-color:#FFFFAA;'/>
                     			                      <option value="-1">Select</option>
                     								            <option>VIGINAL</option>
                     								            <option>ORAL</option>
                                                 <option>PENILE</option>
                     							  	</select>
                                 </td>
                     						 <td><select name="SWABS-TYPE" id="SWABS-GRAMSTAIN" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:91px; background-color:#FFFFAA;'/>
                     			                      <option value="-1">Select</option>
                     								            <option>POSITIVE</option>
                     								            <option>NEGATIVE</option>
                                       </select>
                                 </td>
                     						 <td>
                                       <div class="clear"></div>
                                         <input class="submit" type="button" onClick="getvalues(this)" value="Out &raquo;" style= 'margin-left: 0px;margin-top: 18px;height:22px; width:50px;'/>
                                  <div class="clear"></div>
                                </td>
                     				  </tr>
                               </tbody>
                               </table>
                           <!--  </form> -->
                </div>

 <script>
 $(document).ready(function(){
      function fetch_data()
      {
           $.ajax({
                url:"lab_hmis_select.php",
                method:"POST",
                success:function(data){
                     $('#live_data').html(data);
                }
           });
      }
      fetch_data();
      $(document).on('click', '#btn_add', function(){
           var NTIHCNO = $('#NTIHCNO').text();
           var SPECIMEN = $('#SPECIMEN').text();
		   var HEAMATOLOGY/SCROLOGY = $('#HEAMATOLOGY/SCROLOGY').text();
           var MALARIA = $('#MALARIA').text();
		   var STOOL_MICROSCOPY = $('#STOOL_MICROSCOPY').text();
           var URINE_MICROSCOPY = $('#URINE_MICROSCOPY').text();
		    var SWABS-TYPE = $('#SWABS-TYPE').text();
			 var SWABS-WETPREP = $('#SWABS-WETPREP').text();
			 var SWABS-GRAMSTAIN = $('#SWABS-GRAMSTAIN').text();

           if(NTIHCNO == '')
           {
                alert("ENTER NTIHC NO.");
                return false;
           }
           if(SPECIMEN == '')
           {
                alert("ENTER SPECIMEN");
                return false;
           }
		    if(HEAMATOLOGY/SCROLOGY == '')
           {
                alert("ENTER HEAMATOLOGY/SCROLOGY");
                return false;
           }
		    if(MALARIA == '')
           {
                alert("ENTER MALARIA");
                return false;
           }
		    if(STOOL_MICROSCOPY == '')
           {
                alert("ENTER STOOL_MICROSCOPY");
                return false;
           }
		    if(URINE_MICROSCOPY == '')
           {
                alert("ENTER URINE_MICROSCOPY");
                return false;
           }
		    if(SWABS-TYPE == '')
           {
                alert("ENTER SWABS-TYPE");
                return false;
           }
		   if(SWABS-WETPREP == '')
           {
                alert("ENTER SWABS-WETPREP");
                return false;
           }
		   if(SWABS-GRAMSTAIN == '')
           {
                alert("ENTER SWABS-GRAMSTAIN");
                return false;
           }

           $.ajax({
                url:"lab_hmis_insert.php",
                method:"POST",
                data:{NTIHCNO:NTIHCNO, SPECIMEN:SPECIMEN, HEAMATOLOGY/SCROLOGY:HEAMATOLOGY/SCROLOGY, MALARIA:MALARIA, STOOL_MICROSCOPY:STOOL_MICROSCOPY, URINE_MICROSCOPY:URINE_MICROSCOPY, SWABS-TYPE:SWABS-TYPE, SWABS-WETPREP:SWABS-WETPREP, SWABS-GRAMSTAIN:SWABS-GRAMSTAIN},
                dataType:"text",
                success:function(data)
                {
                     alert(data);
                     fetch_data();
                }
           })
      });
      function edit_data(id, text, column_name)
      {
           $.ajax({
                url:"lab_hmis_edit.php",
                method:"POST",
                data:{id:id, text:text, column_name:column_name},
                dataType:"text",
                success:function(data){
                     alert(data);
                }
           });
      }
      $(document).on('blur', '.NTIHCNO', function(){
           var id = $(this).data("id1");
           var NTIHCNO = $(this).text();
           edit_data(id, NTIHCNO, "NTIHCNO");
      });
      $(document).on('blur', '.SPECIMEN', function(){
           var id = $(this).data("id2");
           var SPECIMEN = $(this).text();
           edit_data(id,SPECIMEN, "SPECIMEN");
      });

	   $(document).on('blur', '.HEAMATOLOGY/SCROLOGY', function(){
           var id = $(this).data("id3");
           var HEAMATOLOGY/SCROLOGY = $(this).text();
           edit_data(id, HEAMATOLOGY/SCROLOGY, "HEAMATOLOGY/SCROLOGY");
      });
      $(document).on('blur', '.MALARIA', function(){
           var id = $(this).data("id4");
           var MALARIA = $(this).text();
           edit_data(id,MALARIA, "MALARIA");
      });
	  $(document).on('blur', '.STOOL_MICROSCOPY', function(){
           var id = $(this).data("id5");
           var STOOL_MICROSCOPY = $(this).text();
           edit_data(id, STOOL_MICROSCOPY, "STOOL_MICROSCOPY");
      });
      $(document).on('blur', '.URINE_MICROSCOPY', function(){
           var id = $(this).data("id6");
           var URINE_MICROSCOPY = $(this).text();
           edit_data(id,URINE_MICROSCOPY, "URINE_MICROSCOPY");
      });

	   $(document).on('blur', '.SWABS-TYPE', function(){
           var id = $(this).data("id7");
           var SWABS-TYPE = $(this).text();
           edit_data(id, SWABS-TYPE, "SWABS-TYPE");
      });
      $(document).on('blur', '.SWABS-WETPREP', function(){
           var id = $(this).data("id8");
           var SWABS-WETPREP = $(this).text();
           edit_data(id,SWABS-WETPREP, "SWABS-WETPREP");
      });
	   $(document).on('blur', '.SWABS-GRAMSTAIN', function(){
           var id = $(this).data("id9");
           var SWABS-GRAMSTAIN = $(this).text();
           edit_data(id,SWABS-GRAMSTAIN, "SWABS-GRAMSTAIN");
      });
      $(document).on('click', '.btn_delete', function(){
           var id=$(this).data("id10");
           if(confirm("Are you sure you want to delete this?"))
           {
                $.ajax({
                     url:"lab_hmis_delete.php",
                     method:"POST",
                     data:{id:id},
                     dataType:"text",
                     success:function(data){
                          alert(data);
                          fetch_data();
                     }
                });
           }
      });
 });
 </script>

 <div class="clear" id="recievedids" style="margin-left:-87px; margin-top:-10px; width:342px;"></div>
                </p>
                <div  id="schrest">

</div>
<hr>
<div class="row">
    <div class="col-lg-4">
	    <div class="box">
	         <div class="body" style="height: 500px; width:100%; background-color:#FF0000;"   >
                 <header>
  	  	         <h5>View Registered Clients NTIHC NO.</h5>
  	             </header>

		        <div class="aside2" id="aside222" style="color:white;">
                     <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "patientmgt");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

$xx=0;
     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	$sql="SELECT * FROM cmpatientsnewregistration WHERE TIMESTAMP >='$date'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo '<table  id="regclients">';
                echo "<tr>";

					echo "<th>NTIHC NO.</th>";
                    echo "<th>FIRST NAME</th>";
				  echo "<th>LAST NAME</th>";
          echo "<th>Sender</th>";
          echo "<th>Action</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
              $xx=$xx+1;
              $retVal = ($xx%2==0) ? "Dr" : "Cs";
                echo "<tr>";

                     echo "<td>" . $row['NTIHCNO'] . "</td>";
					 echo "<td>" . $row['FIRSTNAME'] . "</td>";
				 echo "<td>" . $row['LASTNAME'] . "</td>";
         echo "<td>" .$retVal  . "</td>";
         echo '<td><input style="background-color:green;" type="button" id="'. $row['NTIHCNO'] . '" value=">>>>" onclick="sendToService(this)" ></td>';
                echo "</tr>";
            }
            echo "</table>";
            // Close result set

            mysqli_free_result($result);
        } else{
           echo "No records matching your query were found.";
       }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    ?>

                 </div>
             </div>
         </div>
     </div>

	<div class="col-lg-4">
	     <div class="box">
	         <div class="body" style="height: 500px; width:185%; background-color:#fefdc8;">
                 <header>
                 <h5>Voluntary Testing</h5>
                 </header><br />
                 <form name="form1" method="post" action="../php/Client_registration_process.php">
                     <div class="form-group">
     <label for="DATECREATED">Date of first registration</label>
     <input type="text" class="form-control"  id="DATECREATED" value="<?php echo date('d-m-y'); ?>">
   </div>



   <div class="aside001" style= ' margin-left: 0px;margin-top:0px; width:100%; background:#00CA78;'>

          <p>
            <input type="button" value="Add test" onClick="addRow('dataTable1')" />
            <input type="button" value="Remove" onClick="deleteRow('dataTable1')"  />

          </p>
                  <table id="dataTable1"  border="1" style="width:100%;">
                    <thead>
                      <tr style="width:100%;">
              <th> <label for="NTIHCNO" class="label"> *</label>                   </th>
              <th> <label for="NTIHCNO" class="label">NTIHC NO. *</label>          </th>
              <th><label for="SPECIMEN" class="label">SPECIMEN</label>             </th>
              <th> <label for="HEAMATOLOGY/SCROLOGY" class="label">HEAMATOLOGY/SCROLOGY</label>  </th>
              <th><label for="MALARIA" class="label">MALARIA</label>                </th>
              <th><label for="SWABS-GRAMSTAIN" class="label">SAVE</label>           </th>
           </tr>
                    </thead>
                     <tbody id="tablebody" style="width:800px;">
                       <tr id="0_rowdata" >
                       <td><input type="checkbox" required="required" /></td>
                       <td>
                        <input type="text" name="NTIHCNO" id="NTIHCNO" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFFFAA;'/>
                       </td>
                      <td><select name="SWABS-TYPE" id="SPECIMEN" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:82px; background-color:#FFFFAA;'/>
                              <option value="-1">Select</option>
                              <option>BLOOD</option>
                              <option>URINE</option>
                               <option>STOOL</option>
                              <option>CSF</option>
                              <option>SALIVA</option>
                         </select>
                     </td>
                     <td><select name="HEAMATOLOGY_SCROLOGY" id="HEAMATOLOGY_SCROLOGY" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFFFAA;'/>
                              <option value="-1">Select</option>
                              <option>Hb</option>
                              <option>WBCT</option>
                               <option>VDRL/RPR</option>
                        </select>
                     </td>
                     <td><select name="MALARIA" id="MALARIA" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:190px; background-color:#FFFFAA;'/>
                              <option value="-1">Select</option>
                              <option>MALARIA MICROSCOPY</option>
                              <option>MALARIA RDTs</option>
                               <option>OTHER HEAMOPATRASITES</option>
                        </select>
                    </td>

               <td>
                     <div class="clear"></div>
                       <input class="submit" type="button" onClick="getvalues1(this)" value="Out &raquo;" style= 'margin-left: 0px;margin-top: 18px;height:22px; width:50px;'/>
                <div class="clear"></div>
              </td>
            </tr>
             </tbody>
             </table>
         <!--  </form> -->
</div>






    <div class="col-lg-16">





        </div>
        </form>
             </div>
               </div>
         </div>
	</div>

    <div class="col-lg-12">
         <div class="box"  >
             <div class="body" style="background-color:#F6F4F4; height:500px;">
                 <header>
                 <h5> Waiting room</h5>
                 </header>



</div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">    </div>
</div>

                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger" style="margin-left:-14px;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>
               In service
                     <ul  id="pats">
<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "patientmgt");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='YES'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				    echo "<th>RID</th>";
					echo "<th>NTIHC-NO.</th>";
                    echo "<th>VIST-TYPE</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['RID'] . "</td>";
                     echo "<td>" . $row['NTIHCNO'] . "</td>";
					 echo "<td>" . $row['VISTTYPE'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set

            mysqli_free_result($result);
        } else{
           echo "No records matching your query were found.";
       }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    ?>

                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                            Completed Lab Orders

                                 <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "patientmgt");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='YES'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				    echo "<th>RID</th>";
					echo "<th>NTIHC-NO.</th>";
                    echo "<th>VIST-TYPE</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['RID'] . "</td>";
                     echo "<td>" . $row['NTIHCNO'] . "</td>";
					 echo "<td>" . $row['VISTTYPE'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set

            mysqli_free_result($result);
        } else{
           echo "No records matching your query were found.";
       }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    ?>
                                <li><span class="inlinesparkline pull-right"></span></li>
                                <li><span class="dynamicsparkline pull-right"></span></li>
                                <li><span class="dynamicbar pull-right"></span></li>
                                <li><span class="inlinebar pull-right"></span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                        <span>
                       Completed Lab Orders
                                 <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "patientmgt");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='YES'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				    echo "<th>RID</th>";
					echo "<th>NTIHC-NO.</th>";
                    echo "<th>VIST-TYPE</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['RID'] . "</td>";
                     echo "<td>" . $row['NTIHCNO'] . "</td>";
					 echo "<td>" . $row['VISTTYPE'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set

            mysqli_free_result($result);
        } else{
           echo "No records matching your query were found.";
       }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    ?>
                        </span>                        </div>

                        <div class="well well-small dark">
                            <span>..</span><span class="pull-right"><small>...</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: .."></div>
                            </div>
                            <span>..</span><span class="pull-right"><small> ..</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: .."></div>
                            </div>
                            <span> ..</span><span class="pull-right"><small> ..</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width:.."></div>
                            </div>
                            <span> ..</span><span class="pull-right"><small> ..</small></span>

                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width:  .."></div>
                            </div>
                        </div>                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information And Health Centre</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->

            <script src="../ntihc/assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

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
<script>
 var x=0,y=0;

function addfields(selectorint){
if(selectorint==1){
    var obj=  document.getElementById('fields');

	var node = document.createElement('p');
	    node.appendChild(document.createTextNode("Medical prob: "+(x++)+"  ."));

	var opts = ["Select","ABDOMINAL PAIN","ABNORMAL VAGINAL DISCHARGE","ANTE-NATAL CARE","BACKACHE","C-C SCREENING-INITIAL","C-C SCREENING-ROUTINE RESCREENING","C-C VIA NEGATIVE","C-C VIA POSITIVE","C-C VIA SUSPICIOUS FOR CANCER","CHEST PAIN","CONSTIPATION","CONTRACEPTIONS","COUGH","DENTAL PROBLEM","DIZZINESS","EYE PROBLEM","FAMILY PLANNING","FEVER","FLU","GBV-COMMUNITY REDRESS/SUPPORT GROUP","GBV-EMERGENCY CONTRACEPTION"];
    var node1 = document.createElement('select');
	    node1.id = ''+(x);
		node1.type ='text';

		for(var i =0; i<opts.length;i++) {
		    var options = document.createElement('option');
			    options.value=opts[i];
				options.text =opts[i];
				node1.appendChild(options);}

		node.appendChild(node1);
	    obj.appendChild(node);
        }

        else{
          var obj=  document.getElementById('fields1');

	var node = document.createElement('p');
	    node.appendChild(document.createTextNode( (y++)+". "+document.getElementById('prob_category').value+": "));

	var opts = ["Select reason","ANGER","ANXIETY","BODY ODOUR","BODY CHANGES","BREAST CHANGES"];

    var node1 = document.createElement('select');
	    node1.id = 'next_'+(y);
		node1.type ='text';

		for(var i =0; i<opts.length;i++) {
		    var options = document.createElement('option');
			    options.value=opts[i];
				options.text =opts[i];
				node1.appendChild(options);}

		node.appendChild(node1);
	    obj.appendChild(node);


        }
   }

function remove( sid){
if(sid==1){
      var c = document.getElementById('fields').childElementCount;
    var obj = document.getElementById('fields');
		obj.removeChild( obj.childNodes[c]);
		x--;	}
        else{
        var c = document.getElementById('fields1').childElementCount;
      var obj = document.getElementById('fields1');
		  obj.removeChild( obj.childNodes[c]);
		y--;

        }
}

function save(){}
</script>


      <!-- PAGE LEVEL SCRIPT-->
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>
       <script src="assets/js/labscript.js"></script>
        <script>
            $(function () { formInit(); });
        </script>

     <!--END PAGE LEVEL SCRIPT-->
        </body>
</html>
