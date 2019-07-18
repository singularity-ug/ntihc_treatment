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
    .form-control{padding: 0px 0px;}
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
                 background:#FFF;
             }
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
    <script src=" asset/libs/less.js/2.7.1/less.js"></script>
    
    <!-- start datatables --> 
  <link rel="stylesheet" href="assets/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/datatable/css/buttons.dataTables.min.css">
    
      <script src="assets/datatable/js/jquery-1.12.3.js"></script>
  <script src="assets/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/datatable/js/bootstrap.min.js"></script>
  <script src="assets/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/datatable/js/buttons.flash.min.js"></script>
  <script src="assets/datatable/js/jszip.min.js"></script>
  <script src="assets/datatable/js/pdfmake.min.js"></script>
  <script src="assets/datatable/js/vfs_fonts.js"></script>
  <script src="assets/datatable/js/buttons.html5.min.js"></script>
  <script src="assets/datatable/js/buttons.print.min.js"></script>
  
    <!-- end datatables -->
    <script>
  $(document).ready(function() {
     $('#example').DataTable({
	    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
		{extend :'copy',
		 title:'myfile'
		},
		{extend :'csv',
		 title:'myfile'
		},
		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
    <!-- start datatables function -->  
    
    
  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap" >
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
                                    <a href="logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    
                                    <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip"
                                       class="btn btn-default btn-sm toggle-right">
                                        <span class="glyphicon glyphicon-comment"></span>                                    </a>                                </div>
                            </div>




                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="client_management.php">Dashboard</a></li>
                                    <li><a href="lab_hmis_index.php" style="font-weight:bold; color:#33FF66; font-size:17px;" >LABORATORY</a></li> 
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Quick links<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Waiting room</a></li> 
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
                    
                        <div class="inner bg-light lter3">
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
<div class="text-left" >

<div class="col-lg-12">  
                            <div class="row">   
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
                                       <tbody id="tablebody" style="width:100px;">
                                         <tr id="0_rowdata" >
                                         <td><input type="checkbox" required="required" checked="checked" /></td>
                                         <td>
                                          <input type="text" name="NTIHCNO" id="NTIHCNO" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFF;'/>
                                           <input type="hidden" id="RID" name="RID">
                                         </td>
                     					       	  <td><select name="SWABS-TYPE" id="SPECIMEN" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:82px; background-color:#FFF;'/>
                     		                       	<option value="-1"> </option>
                     			                      <option>BLOOD</option>
                     								            <option>URINE</option>
                                                 <option>STOOL</option>
                     								            <option>CSF</option>
                     							             	<option>SALIVA</option>
                                           </select>
                     						       </td>
                     						       <td><select name="HEAMATOLOGY_SCROLOGY" id="HEAMATOLOGY_SCROLOGY" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFF;'/>
                     		                      	<option value="-1"> </option>
                     			                      <option>Hb</option>
                     							             	<option>WBCT</option>
                                                 <option>VDRL/RPR</option>
                     							        </select>
                     					         </td>
                     					      	 <td><select name="MALARIA" id="MALARIA" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:190px; background-color:#FFF;'/>
                     		                      	<option value="-1"> </option>
                     			                      <option>MALARIA MICROSCOPY</option>
                     							            	<option>MALARIA RDTs</option>
                                                 <option>OTHER HEAMOPATRASITES</option>
                     							        </select>
                     		              </td>
                     					        <td><select name="STOOL_MICROSCOPY" id="STOOL_MICROSCOPY" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFF;'/>
                     			                      <option value="-1"> </option>
                     			                      <option>MACRO</option>
                     								            <option>MICRO</option>
                                         </select>
                     							  </td>
                     						    <td><select name="URINE_MICROSCOPY" id="URINE_MICROSCOPY" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:130px; background-color:#FFF;'/>
                     			                      <option value="-1"> </option>
                     			                      <option>MACROSCOPY</option>
                     								            <option>MICROSCOPY</option>
                                                 <option>PROTEIN</option>
                     								            <option>SUGAR</option>
                     								            <option>PREGNANCY</option>
                     								    </select>
                                   </td>
                     						  <td><select name="SWABS-TYPE" id="SWABS-TYPE" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:90px; background-color:#FFF;'/>
                     			                      <option value="-1"> </option>
                     			                      <option>VIGINAL</option>
                     								            <option>ORAL</option>
                                                 <option>PENILE</option>
                     									</select>
                                  </td>
                     						 <td><select name="SWABS-TYPE" id="SWABS-WETPREP" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:81px; background-color:#FFF;'/>
                     			                      <option value="-1"> </option>
                     								            <option>VIGINAL</option>
                     								            <option>ORAL</option>
                                                 <option>PENILE</option>
                     							  	</select>
                                 </td>
                     						 <td><select name="SWABS-TYPE" id="SWABS-GRAMSTAIN" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:91px; background-color:#FFF;'/>
                     			                      <option value="-1"> </option>
                     								            <option>POSITIVE</option>
                     								            <option>NEGATIVE</option>
                                       </select>
                                 </td>
                     						 <td>
                                       <div class="clear"></div>
                                         <input class="submit" type="button" onClick="getvalues(this)" value="Out &raquo;" style= 'margin-left: 0px;margin-top:4px;height:22px; width:50px;'/>
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
                <div  id="schrest">

</div>
<hr>  
        <div class="col-lg-12"> 
                            <div class="col-lg-150" style="border:2px solid #fff; margin-left: -29px; border-radius:10px;">  
                            
                            <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;color: #000;
font-weight: bold;">
	    Clients due for testing<span class="sr-only">60% Complete</span> 
		</div>
	    </div>  		          
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
                     $sql="SELECT * FROM requestforlabtest WHERE TIMESTAMP >='$date'";

                     $result = $conn->query($sql);
                     $st ='<table>
                     <thead>
                     <tr>
                     <th>ORD NO.</th>
					 <th>TIME STAMP</th>
                     <th>NTIHC NO.</th> 
					 <th>CLIENT NAME</th>
					 <th> VIST BY</th>
                     </tr>
                     </thead>
                     <tbody ">';

                     while($row = $result->fetch_assoc()) {
					 $vd =  $row['NTIHCNO'].','.$row['ORDERNO']; 
                     $st=$st."<tr>".
	                 "<td>" . $row['ORDERNO'] . "</td>".
					  "<td>" . $row['TIMESTAMP'] . "</td>".
                     "<td>" . $row['NTIHCNO'] . "</td>".  
					 '<td><input type="button" class="btn-success" style="height:20px; border:2px solid #fff; width:170px; color:#fff;" onclick="postclient(\''.$vd.'\')"  value="'.$row['NAME'].'" ></td>'.
					 "<td>" . $row['VISTBY'] . "</td>".
		             "</tr>";
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?>    
         

                 </div>
             </div>
        <br> 
 
     
      <div class="col-lg-12" style=" margin-left: -29px; height:450px;">
       <br>  
        <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;color: #000;
font-weight: bold;">
	Local storage<span class="sr-only">60% Complete</span> 
		</div>
	    </div>  		  
<!--  <meta http-equiv="refresh" content="10" > -->
 
 <p> </p>  
   <div id="work" style="width:100%;">

    <table id="example" class="table table-striped table-bordered" >
        <thead>
          <tr> 
               <th>N0.</th>
              <th>DATE</th>
              <th>NTIHCNO</th>
                     <th>CLIENT NAME</th>
					 <th>SPECIMEN</th>
					 <th>HEAMATOLOGY/SCROLOGY</th> 
                     <th>MALARIA</th>  
                     <th>STOOL_MICROSCOPY</th> 
                     <th>URINE_MICROSCOPY</th> 
					 <th>SWABS-TYPE</th> 
                      <th>SWABS-WETPREP</th> 
                      <th>SWABS-GRAMSTAIN</th>  
              <th>RECORD</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
           <th>N0.</th>
              <th>DATE</th>
              <th>NTIHCNO</th>
                     <th>CLIENT NAME</th>
					 <th>SPECIMEN</th>
					 <th>HEAMATOLOGY/SCROLOGY</th> 
                     <th>MALARIA</th>  
                     <th>STOOL_MICROSCOPY</th> 
                     <th>URINE_MICROSCOPY</th> 
					 <th>SWABS-TYPE</th> 
                      <th>SWABS-WETPREP</th> 
                      <th>SWABS-GRAMSTAIN</th>  
              <th>RECORD</th>
            </tr>
        </tfoot>
        <tbody>
        
<?php
require('assets/datatable/config_patientmgt.php');

$sql = "SELECT * FROM lab_hmis-tests ORDER BY id desc";

 $res = $conn->query($sql);
$x=1; 
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
	    '<td>'.$row['TIMESTAMP'].'</td>'.
       '<td>'.$row['NTIHCNO'].'</td>'.
	    '<td>'.$row['CLIENTNAME'].'</td>'.
       '<td>'.$row['SPECIMEN'].'</td>'.
	   '<td>'.$row['HEAMATOLOGY/SCROLOGY'].'</td>'. 
       '<td>'.$row['MALARIA'].'</td>'.
       '<td>'.$row['STOOL_MICROSCOPY'].'</td>'.
       '<td>'.$row['URINE_MICROSCOPY'].'</td>'.
       '<td>'.$row['SWABS-TYPE'].'</td>'. 
	    '<td>'.$row['SWABS-WETPREP'].'</td>'.
	   '<td>'.$row['SWABS-GRAMSTAIN'].'</td>'.
       '<td><input type="button" class="btn-success"  id="'.$row['LOID'].'" onclick="alert(this.id)" value="UPDATE"></td>'.
   '</tr>';
$x=$x+1;
} 

 ?>
	  </tbody>
  </table> 
  
				
 
 
 
 
               </div>
         </div>
	</div>

    <div class="col-lg-104">  
  
</div>
<hr>
<div class="row">
    <div class="col-lg-1">    </div>
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
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width:  .."></div>
                            </div>
                        </div>                    
                    <!-- /#right -->
          
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
function postclient(vd){

  var dta = vd.split(",");
  $("#NTIHCNO").val(dta[0]); 
  $("#RID").val(dta[1]); 
}

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
