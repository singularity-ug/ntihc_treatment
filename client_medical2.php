<?php
session_start();
session_regenerate_id();
$nameofuser = '';
$desc       = "";
$dept       = "";
$pf       = "";
$rm         = "";
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID'];
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
$rm = $_SESSION['MREPEAT'];
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM ntihcdrugs"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['DRUGNAME'] . "</option>";   }
  }
$connect->close();
?>

z

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap3.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="admin/assets/notifier.css">
  <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="admin/datatable/css/buttons.dataTables.min.css">

  <script src="admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="admin/datatable/js/bootstrap.min.js"></script>
  <script src="admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="admin/datatable/js/buttons.flash.min.js"></script>
  <script src="admin/datatable/js/jszip.min.js"></script>
  <script src="admin/datatable/js/pdfmake.min.js"></script>
  <script src="admin/datatable/js/vfs_fonts.js"></script>
  <script src="admin/datatable/js/buttons.html5.min.js"></script>
  <script src="admin/datatable/js/buttons.print.min.js"></script>

   <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dn"+num).val(data[2]);
  $("#instock").val(data[2]);
  $("#PROGRAMME").val(data[3]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "medical/drugsearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>


 <script>
  $(document).ready(function() {
     $('#exaoffsite').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#viewresults').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#example01').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#exatable').DataTable( {
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#myhistory').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>


  <script>
  $(document).ready(function() {
     $('#myserachhistory').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>


    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
         {extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength":4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example7').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'pdf',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'print',
		 title:'NTIHC |IMMS USER CONTACTS '
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example8').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example9').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example10').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example11').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example12').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example13').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example14').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#example15').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example16').DataTable( {
	  "iDisplayLength": 7,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>




  <style media="screen">
  .btn {padding : 0px 3px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ecf0f5;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #ecf0f5;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 12px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
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
  xhttp.open("GET", "get_clientNTIHCno_onregn.php?q="+dataString, true);
  xhttp.send();

	}
	}



  function agecalc(){
    var pn = $("#datepicker1").val();
    var dataString = "d="+pn;
    $.ajax({ type: "POST",   url: "time.php", data: dataString, cache: false,
          success: function(result){
                           $("#AGE1").val(result);
          }
         });
  }




	function upt(idxx){
    var separatedDataArray = idxx.split("__");
	    document.getElementById('NTIHCNO').value = separatedDataArray[0];
        document.getElementById('CNAME').value = separatedDataArray[1];
	    document.getElementById('schrest').innerHTML="";
		document.getElementById('myAGE1').value= separatedDataArray[3];
	}

    </script>

  <script type="text/javascript">

  </script>


	<script type="text/javascript">
function ajaxFunction(str)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      httpxml=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
function stateChanged()
    {
    if(httpxml.readyState==4)
      {
document.getElementById("displayDiv").innerHTML=httpxml.responseText;
document.getElementById("msg").style.display='none';

      }
    }
	var url="registration_desk_oldpidsearch.php";
url=url+"?txt="+str;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send(null);
document.getElementById("msg").innerHTML="Please Wait ...";
document.getElementById("msg").style.display='inline';

  }
</script>



<script>
 var x=0,y=0;


</script>


<script>


function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php
  require('admin/connect/config.php');
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="client_medical.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TREATMENT ROOM</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
	  <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav"> 
            <li class="active"><a href="client_management.php" class=""> Clients mgt<span class="sr-only">(current)</span></a></li>
            <li><a href="medical/waiting_room.php" class=""> Waiting room<span class="sr-only">(current)</span></a></li>
            <li><a href="admin/service_delivery/medical_tool_user.php" class=""> Tally tool
            	<span class="sr-only">(current)</span></a></li> 

             <li><a href="admin/reports/prescription.php?d1=0&d2=0" 
            class="button 5" class="button 5" style="height: 22px; border-radius: 7px; margin-top: 14px; padding: 1px 8px;" > 
            Daily report<span class="sr-only">(current)</span></a></li>

          </ul>

        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <i class="glyphicon glyphicon-user"><b>Welcome:</b></i>

              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"> </li>
              <li>

                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                         <img src="assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
                      </div>
                      <h4>
                         Ntihc M.E team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not use this awesome application?</p>
                    </a>
                  </li>
                  <!-- end message -->
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i>
              <span class="">&nbsp;<?php echo $nameofuser; ?>  </span>
            </a>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-th"></i>
              <span class="">&nbsp;<?php echo $desc; ?>  </span>
            </a>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-share"></i>
              <span class="">&nbsp;<?php echo $dept; ?>  </span>
            </a>

            <ul class="dropdown-menu">
              <li class="header">

              </li>
              <li>

          </li>

          <li>
          </li>
        </ul>
      </div>
    </nav>
  </header>

      <div class="row">
        <div class="col-md-4">
<br>
            <div class="box-header with-border" style="background-color: #ecf0f5;">
              <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right" style="margin-top:-6px;">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Waiting (On site)</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Pending Entries</a></li>
              <li><a href="#tab_3-2" data-toggle="tab" style="color:green;">Off site</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
			  <div class="panel-body" style="margin-top: -25px;">

			  <div id="dialog-window">
  <div id="scrollable-content">
   <ul>
                               <div class=""  id="medicalvists" style="margin-left: -41px;"></div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 227px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 227px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">

			   <table id="example4" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>
                      <th style="background-color:#f39c12; color:WHITE;width:20%;">DATE</th>
					 <th style="background-color:#00a65a; color:WHITE;width:16%;">NTIHC.NO</th>
                     <th style="background-color:#dd4b39; color:WHITE;width:40%;">NAME</th>
                     <th style="background-color:#f39c12; color:WHITE;width:8%;">AGE</th>
					 <th style="background-color:#f39c12; color:WHITE;width:8%;">VIST</th>
                     <th style="background-color:#FFF; color:BLACK; width:8%;">START</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		     <th style="background-color:#f39c12; color:WHITE;width:20%;">DATE</th>
					 <th style="background-color:#00a65a; color:WHITE;width:16%;">NTIHC.NO</th>
                     <th style="background-color:#dd4b39; color:WHITE;width:40%;">NAME</th>
                     <th style="background-color:#f39c12; color:WHITE;width:8%;">AGE</th>
					 <th style="background-color:#f39c12; color:WHITE;width:8%;">VISIT</th>
                     <th style="background-color:#FFF; color:BLACK; width:8%;">START</th>
        </tr>
        </tfoot>
        <tbody>

    <script>
function postclient(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[0];
document.getElementById("myID").value=dts[1];
document.getElementById("myAGE1").value=dts[2];
document.getElementById("myAGEGP").value=dts[3];
}
</script>


<?php
include_once("updatecmgt/config.php");

$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP'];
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['AGE1']."</td>";
		echo "<td>".$res['VISTTYPE']."</td>";
		echo '<td>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
		<span class="glyphicon glyphicon-cog"> </span></a>
    &nbsp;&nbsp;
		</td>';
	}

    ?>
	</tbody>
  </table>


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
              <p></p>


         <table id="exaoffsite" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>
                     <th style="background-color:#f39c12; color:WHITE;width:25%;">DATE</th>
					 <th style="background-color:#00a65a; color:WHITE;width:15%;">NTIHC.NO</th>
                     <th style="background-color:#dd4b39; color:WHITE;width:40%;">NAME</th>
                     <th style="background-color:#f39c12; color:WHITE;width:10%;">AGE</th>
					 <th style="background-color:#f39c12; color:WHITE;width:10%;">DATA</th>
                      <th style="background-color:#FFF; color:BLACK; width:10%;">START</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		     <th style="background-color:#f39c12; color:WHITE;width:25%;">DATE</th>
					 <th style="background-color:#00a65a; color:WHITE;width:15%;">NTIHC NO</th>
                     <th style="background-color:#dd4b39; color:WHITE;width:40%;">NAME</th>
                     <th style="background-color:#f39c12; color:WHITE;width:10%;">AGE</th>
					  <th style="background-color:#f39c12; color:WHITE;width:10%;">DATA</th>
                     <th style="background-color:#FFF; color:BLACK; width:10%;">START</th>
        </tr>
        </tfoot>
        <tbody>

    <script>
function postclient(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[0];
document.getElementById("myID").value=dts[1];
document.getElementById("myAGE1").value=dts[2];
document.getElementById("myAGEGP").value=dts[3];
}
</script>


<?php
include_once("updatecmgt/config.php");

$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'OFF SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP'];
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['AGE1']."</td>";
		echo "<td>".$res['DATATYPE']."</td>";
		echo '<td>
		&nbsp;&nbsp;&nbsp;
		<a id="21__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
		<span class="glyphicon glyphicon-cog"> </span></a>
    &nbsp;&nbsp;&nbsp;
		</td>';
	}

    ?>
	</tbody>
  </table>
              </div>
            </div>
          </div>





				   <a class="quick-btn" href="#" style="border-radius:5px; ">
                                <i class="icon-check icon-2x"></i>
                                <span> Due for medical </span>
                                <span class="label label-danger">
							     <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>

								</span>
                            </a>
                          &nbsp;
                            <a class="quick-btn" href="#" style=" border-radius:5px; ">
                                <i class="icon-check icon-2x"></i>
                                <span> Counselling</span>
                                <span class="label label-success">
							     <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
						    </span>
              </a>&nbsp;
                            <a class="quick-btn" href="#" style="border-radius:5px; ">
                                <i class="icon-check icon-2x"></i>
                                <span>PRS </span>
                                <span class="label label-warning">

<?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date'
AND SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
								</span>
                            </a>

							&nbsp;
                            <a class="quick-btn" href="#" style="border-radius:5px;">
                                <i class="icon-check icon-2x"></i>
                                <span>Others</span>
                                <span class="label label-danger">

<?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date'
AND SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
								</span>
                            </a>

        </div>


            <!-- /.box-header -->
            <div class="box-body" style="background-color: #ecf0f5;">
              <div class="box-group" id="accordionq">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border" >
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOneq">
                      Incoming lab results

					  &nbsp; &nbsp; &nbsp; &nbsp;
                            <a class="quick-btn" href="#" style="border-radius:5px;background-color:#fff; ">
                                <i class="icon-check icon-2x"></i>
                                <span style="color:black;">Inbox </span>
                                <span class="label label-success">&nbsp; &nbsp

<?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM laboratory WHERE TIMESTAMP >='$date'
                                   AND TESTSTATUS ='COMPLETED' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
								</span>
                            </a>

                      </a>
                    </h4>
                  </div>


                  <div id="collapseOneq" class="panel-collapse collapse in">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right" style="margin-top: -2px;">
              <li class="active"><a href="#tab_1-1LL" data-toggle="tab">My service list</a></li>
              <li><a href="#tab_2-2LL" data-toggle="tab">Lab results</a></li>
              <li><a href="#tab_3-2LL" data-toggle="tab">Search</a></li>

              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1LL" style="margin-top: -15px;">
                <table id="myhistory" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>
                      <th style="background-color:#ECF0F5; color:#000;">NO.</th>
		    <th style="background-color:#ECF0F5; color:#000;">DATE</th>
            <th style="background-color:#ECF0F5; color:#000;">NTIHC.NO.</th>
                     <th style="background-color:#ECF0F5; color:#000;">NAME</th>
                     <th style="background-color:#ECF0F5; color:#000;">ACTION</th>

           </tr>
        </thead>
        <tfoot>
          <tr>
		 <th style="background-color:#ECF0F5; color:#000;">NO.</th>
		    <th style="background-color:#ECF0F5; color:#000;">DATE</th>
            <th style="background-color:#ECF0F5; color:#000;">NTIHC.NO.</th>
                     <th style="background-color:#ECF0F5; color:#000;">NAME</th>
                     <th style="background-color:#ECF0F5; color:#000;">ACTION</th>
        </tr>
        </tfoot>
        <tbody>

<?php
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';

$result = mysqli_query($mysqli, "SELECT * FROM  clientsexamination WHERE TIMESTAMP >='$date' GROUP BY NTIHCNO ORDER BY DATECREATED");

	while($res = mysqli_fetch_array($result)) {
	$dtsget = $res['NTIHCNO']."***".$res['DATECREATED']."***".$res['DATECREATED'];
		echo "<tr>";
		echo "<td>".$res['EID']."</td>";
		echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo '<td>
		<a id="4__'.$dtsget.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="History"
		<span class="glyphicon glyphicon-cog"> </span></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="5__'.$dtsget.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
    <span class="glyphicon glyphicon-ok"> </span></a>

		</td>';
	}

    ?>
	</tbody>
  </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2LL" style="margin-top: -15px;">
                 <table id="example01" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>
                      <th style="background-color:#DD4B39; color:WHITE;">NO.</th>
		    <th style="background-color:#DD4B39; color:WHITE;">DATE</th>
            <th style="background-color:GREEN; color:WHITE;">NTIHC NO.</th>
                     <th style="background-color:#D70000; color:WHITE;">CLIENT NAME</th>
                     <th style="background-color:#FFF; color:#000;">ACTION</th>

           </tr>
        </thead>
        <tfoot>
          <tr>
		  <th style="background-color:#DD4B39; color:WHITE;">NO.</th>
		    <th style="background-color:#DD4B39; color:WHITE;">DATE</th>
            <th style="background-color:GREEN; color:WHITE;">NTIHC NO.</th>
                     <th style="background-color:#D70000; color:WHITE;">CLIENT NAME</th>
                     <th style="background-color:#FFF; color:#000;">ACTION</th>

        </tr>
        </tfoot>
        <tbody>
 <?php
include_once("admin/config/inline/dbcon.php");

$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='PENDING' AND SENDTO ='$rm' ORDER BY TIMESTAMP DESC");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['ORDERNO']."</td>";
		echo "<td>".$res['IMPREST_DESCRIPTION']."</td>";
		echo "<td>".$res['IMP_DEBIT']."</td>";
		echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="View item"   onclick="postpetty(this.id)">
		<span class="glyphicon glyphicon-ok"> </span> </a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuff(this.id)" data-toggle="tooltip" title="open"
		<span class="glyphicon glyphicon-off"> </span></a>
		</td>';
	}
    ?>
	</tbody>
  </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2LL">
                 <table id="myserachhistory" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>
                      <th style="background-color:#DD4B39; color:WHITE;">NO.</th>
		    <th style="background-color:#DD4B39; color:WHITE;">DATE</th>
            <th style="background-color:GREEN; color:WHITE;">NTIHC NO.</th>
                     <th style="background-color:#D70000; color:WHITE;">CLIENT NAME</th>
                     <th style="background-color:#FFF; color:#000;">ACTION</th>

           </tr>
        </thead>
        <tfoot>
          <tr>
		  <th style="background-color:#DD4B39; color:WHITE;">NO.</th>
		    <th style="background-color:#DD4B39; color:WHITE;">DATE</th>
            <th style="background-color:GREEN; color:WHITE;">NTIHC NO.</th>
                     <th style="background-color:#D70000; color:WHITE;">CLIENT NAME</th>
                     <th style="background-color:#FFF; color:#000;">ACTION</th>

        </tr>
        </tfoot>
        <tbody>
 <?php
include_once("admin/config/inline/dbcon.php");

$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='PENDING' AND SENDTO ='$rm' ORDER BY TIMESTAMP DESC");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['ORDERNO']."</td>";
		echo "<td>".$res['IMPREST_DESCRIPTION']."</td>";
		echo "<td>".$res['IMP_DEBIT']."</td>";
		echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="View item"   onclick="postpetty(this.id)">
		<span class="glyphicon glyphicon-ok"> </span> </a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuff(this.id)" data-toggle="tooltip" title="open"
		<span class="glyphicon glyphicon-off"> </span></a>
		</td>';
	}
    ?>
	</tbody>
  </table>

              </div>
              <!-- /.tab-pane -->
            </div>


                    </div>
                  </div>
                </div>

              </div>

			  <div class="progress" style="margin-top: -19px;">
           <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
            <b style="font-size:14px; text-align:center;"> </b> <span class="sr-only">35% Complete (success)</span></div>
           <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
           </div>
          <p></p>

		          <div class="col-sm-6">
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;">Off site data</p>
                    <br>
                   <p class="button 5" style="font-size:30px; font-family:lcd; margin-top:-15px; text-align:center;">
                     <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'OFF SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                   </p>
                   </div> </div>

			      <div class="col-sm-6">
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;"> Pending entries</p>
                   <br>
                   <p class="button 5" style="font-size:30px; font-family:lcd; margin-top:-15px; text-align:center;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>

                   </p>
                   </div></div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->





        <div class="col-md-8">
<br>


			   <div class=""  id="dem" >  </div>
               <script>

          function getstuffclientel(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[0];
		  var ddt = jose.split("__")[1];
		      postclient(ddt);
                $.ajax({
                       type    : 'POST',
					   data    :{bb:odno},
                       url     : 'medical/medical_get.php?q='+odno,
                       success : function(data){
                                $('#dem').html(data);
								$("#demm").modal("show");
                                 }
               });
               }

          </script>



			 <div class="col-sm-7" style="border-radius:7px;
      border-bottom: 3px solid; border-top: 1px solid;">

<form class="form-horizontal" action="treatmentroom_process3.php" method="post" style="height:auto;">


            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:0px;">Service date </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" value="<?php echo date('Y-m-d'); ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>

	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <select  name="VISTBY" id="VISTBY"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">
                  <option value="YOUTH">YOUTH</option>
                                                   <option>PARENT</option>
                                                   <option>YOUTH AND PARENT</option>
                                                   <option>COUPLE</option>
                                                   </select>
				</th>
              </tr>
			  </table>

  <table class="table table-striped" id="mytable" style="font-weight:normal;margin-top: -13px; ">
  
     <input type="button" onClick="addRow12('mytable')" value="Add" class="btn-success"  style="background-color:green;" > &nbsp;
     <input type="button" onClick="deleteRow12('mytable')" value="Remove"  class="btn-danger" >
	 <br> <br>
    <thead>
      <tr>
      <th>*</th>
   <th>PROBLEM CATEGORY</th>
   <th>DESCRIPTION</th>
      </tr>
      </thead>
      <tbody>
                                       </tbody>
                                </table>


 <table class="table table-responsive" style="border:0px;">
              <tr>
			    <th style="width:25%;border:0px; background-color:#ecf0f5;">Problem brief</th>
				<th style="width:75%;border:0px;background-color:#ecf0f5;">
          <textarea name="PROBLEMBRIEF" required="required"  style="width:100%; font-weight:normal; background-color:#fff;">
          </textarea>
         </th>
              </tr>
			  </table>


            <table class="table" style="border:0px;">
              <tr>
            <td>Urgency</td>
            <td>  <input type="radio" name="URGENCYTYPE" id="URGENCYTYPE" value="NORMAL" checked>
        <label for="NORMAL">NORMAL</label>
		<input name="URGENCYTYPE" type="radio" id="URGENCYTYPE" value="EMERGENCY">
		<label for="EMERGENCY">EMERGENCY</label>
		<input name="URGENCYTYPE" type="radio" id="URGENCYTYPE" value="CRITICAL">
		<label for="CRITICAL">CRITICAL</label>
                                </td>


            </td>
        <tr>
            <td>Counselling done</td>
             <td>   <input type="radio" name="COUNSELLINGDONE" id="COUNSELLINGDONE" value="YES" checked>
        <label for="YES">YES</label>
		<input name="COUNSELLINGDONE" type="radio" id="COUNSELLINGDONE" value="NO" >
		<label for="NO">NO</label>
                               </td>
        </tr>
       </tbody>
      </table>
           
</div> 
<br> 
 <div class="col-sm-7" style="border-radius: 7px;
border-bottom: 3px solid; border-top: 1px solid;">

          <table id="dataTable1" class="table table-striped" style="font-weight:normal;margin-top:0px; ">
		                    <input type="button" value="Drugs" onClick="addRow13('dataTable1')" class="btn-success" style="background-color:green;" > &nbsp;
                            <input type="button" value="Remove" onClick="deleteRow13('dataTable1')"class="btn-danger" style="background-color:red;" >
                            <input type="hidden" value="0" name="mytable_rows1"  id="mytable_rows1" >
                            <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">

          <thead>
            <tr>
                <th style="width:5%;">*</th>
                <th style="width:55%;">DRUG</th>
                <th style="width:10%;">QTY</th>
                <th style="width:10%;">TIMES</th>
                <th style="width:10%;">PERIOD</th>
                <th style="width:10%;">TOTAL</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
                  




    </div>


        <input type="hidden"  name="NTIHCNO"   id="myNTIHCNO" value="" >
		<input type="hidden" id="myID" name="RID">
		<input type="hidden"  name="AGE1" id="myAGE1">
		<input type="hidden" id="myAGEGP" name="AGE_GROUP">
		<input type="hidden"  id="REGISTERACCOUNT" name="REGISTERACCOUNT"  value="<?php echo $rm; ?>" >
		<input type="hidden"  id="USERINITIAL" name="USERINITIAL"  value="<?php echo $nameofuser; ?>" >
		<input type="hidden"  id="SERVICEPROVIDER" name="SERVICEPROVIDER"  value="<?php echo $nameofuser; ?>" >
		<input type="hidden"  name="REQUESTINGUNIT" id="REQUESTINGUNIT" >
        <input type="hidden"  name="TIMEOUT" id="CHECKIN"   readonly = "readonly" style="text-align:center; background-color:#fff; width:100%;">


		   <div class="col-sm-5" style="border:2px solid #ecf0f5;">
	 <table class="table-responsive" > <center><b style="text-align:center;">Turn On Lab request to activate</b></center>
            <table class="table" style="border:0px;">
              <tr>
            <td>Lab order processing</td>
            <td>  <input type="radio" name="TROOM_INITIATION" id="TROOM_INITIATION" value="OFF" checked>
        <label for="OFF">OFF</label>
		<input name="TROOM_INITIATION" type="radio" id="TROOM_INITIATION" value="ON">
		<label for="ON">ON</label>  </td>

        <tr>
            <td>Add test(s) required</td>
             <td>   <input type="text" name="TESTDESCRIPTION" id="TESTDESCRIPTION" style="width:100%;" </td>
        </tr>
       </tbody>
      </table>
		   </div>
		   <br> <br> <br>  <br> <br>  <br>
		    <div class="col-sm-5" style="border:2px solid #ecf0f5;">

	<table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;"><center><b style="text-align:center;">HCG</b></center>
              <tr>
            <td>Activate HCG if required</td>
            <td>  <input type="radio" name="HCGSTATUS" id="HCGSTATUS" value="NO" checked>
        <label for="NO">DEACTIVE</label> </td>
		<td>
		<input name="HCGSTATUS" type="radio" id="HCGSTATUS" value="YES" >
		<label for="YES">ACTIVATE</label>  </td>


            </td>
        <tr>
            <td>Results</td>
             <td>  
        <input type="radio" name="HCGRESULTS" id="HCGRESULTS" value="0" checked>
        <input type="radio" name="HCGRESULTS" id="HCGRESULTS" value="NEGATIVE">
        <label for="NEGATIVE">NEGATIVE</label></td>
		<td>
		<input name="HCGRESULTS" type="radio" id="HCGRESULTS" value="POSITIVE">
		<label for="POSITIVE">POSITIVE</label>
                               </td>

		</td>
        <tr>
            <td>Justify results</td>
             <td>  
              <input type="radio" name="HCGPOSITIVE" id="HCGPOSITIVE" value="0" checked>
              <input type="radio" name="HCGPOSITIVE" id="HCGPOSITIVE" value="WANTED">
        <label for="WANTED">WANTED</label> </td>
		<td><input name="HCGPOSITIVE" type="radio" id="HCGPOSITIVE" value="UNWANTED">
		<label for="UN WANTED">UNWANTED</label>
                               </td>
        </tr>
         </tbody>
      </table>
  </div>

  <BR>
    <div class="col-sm-7">

 

			  </div>

	   <div class="col-sm-5">
	 <div id="res" style="border:0px;"> </div>
 </div>

    <div class="col-sm-7">

	 <table class="table-responsive" >
            <table class="table" style="border:0px;margin-top: 10px;">
              <tr>
			    <th style="width:25%;border:0px; background-color:#ecf0f5;">Prescription comment</th>
				<th style="width:75%;border:0px;background-color:#ecf0f5;"> <textarea name="PRESCRIPTIONCOMMENT" id ="PRESCRIPTIONCOMMENT"
				required="required"  style="width:100%; font-weight:normal; background-color:#fff;"> </textarea> </th>
              </tr>
			  </table>
	</div>

	<div class="col-sm-5">
	<table class="table-responsive" style="margin-top:10px; border:1px solid #ecf0f5;">
   <thead>
   <tr>
   <th> <b>Activate Medical follow up </b> </th>
   <th> Shedule date</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td>  <input type="radio" name="FOLLOWUP" id="FOLLOWUP" value="NOT REQUIRED" checked>
        <label for="NOT REQUIRED">NOT REQUIRED</label>
		<input name="FOLLOWUP" type="radio" id="FOLLOWUP" value="REQUIRED">
		<label for="REQUIRED">REQUIRED</label>  </td>

   <td style="width:30%;"><input type="date" name="FOLLOWUPDATE" id="FOLLOWUPDATE"   placeholder="dd / mm/ yyyy"
                style="width:100%; text-align:left;background-color:#ecf0f5; height:21px;"></td>
   </tr>
  <tr>
 </tbody>
 </table>
	</div>

	<div class="col-sm-7"	>
        <table class="table-responsive" style="margin-top:1px;border:1px solid;"><b style="text-align:left; "></b>
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr>
			  <td style="width:50%;border:0px; font-weight:bold; color:blue;">Turn on referral to process if required </td>
			   <td>  <input type="radio" name="REFTUNER" id="REFTUNER" value="SWITCHED OFF" checked>
        <label for="SWITCHED OFF">SWITCHED OFF</label>
		<input type="radio" name="REFTUNER"  id="REFTUNER" value="TURN ON">
		<label for="TURN ON">TURN ON</label>  </td>
              </tr>
			  </table>


			   <table class="table-responsive" style="margin-top:-20px;border:1px solid;"><b style="text-align:left; "></b>
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr>
			  <td style="width:25%;border:0px; font-weight:bold;">Referral centre </td>
				<td style="width:75%;border:0px;">
          <select  name="MEDICALREFERRAL" id="MEDICALREFERRAL" style="width:100%; font-weight:normal; background-color:#ecf0f5;">
			                            <option value=""> </option>
								                 <option value="NTIHC">NTIHC</option>
                                 <option value="AIC">AIC</option>
                                 <option value="BUTABIKA HOSPITAL">BUTABIKA HOSPITAL</option>
                                 <option value="CHINA-UG FRIENDSHIP HOSP">CHINA-UG FRIENDSHIP HOSP</option>
                                 <option value="KADIC CLINIC">KADIC CLINIC</option>
                                 <option value="KAMPALA DISPENSARY">KAMPALA DISPENSARY</option>
                                 <option value="KIBULI HOSPITAL">KIBULI HOSPITAL</option>
                                 <option value="KISWA HEALTH CENTRE">KISWA HEALTH CENTRE</option>
                                 <option value="KISWA TB CLINIC">KISWA TB CLINIC</option>
                                 <option value="LUBAGA HOSPITAL">LUBAGA HOSPITAL</option>
                                 <option value="MENGO HOSPITAL">MENGO HOSPITAL</option>
                                 <option value="MILDMAY">MILDMAY</option>
                                 <option value="MULAGO ASSESSMENT CENTRE">MULAGO ASSESSMENT CENTRE</option>
                                 <option value="MULAGO DENTAL CLINIC">MULAGO DENTAL CLINIC</option>
                                 <option value="MULAGO ENT CLINIC">MULAGO ENT CLINIC</option>
                                 <option value="MULAGO EYE CLINIC">MULAGO EYE CLINIC</option>
                                 <option value="MULAGO MAIN HOSPITAL">MULAGO MAIN HOSPITAL</option>
                                 <option value="MULAGO SICKLE CELL CLINIC">MULAGO SICKLE CELL CLINIC</option>
                                 <option value="MULAGO SKIN CLINIC">MULAGO SKIN CLINIC</option>
                                 <option value="MULAGO STD CLINIC">MULAGO STD CLINIC</option>
                                 <option value="MULAGO SURGICAL OPD">MULAGO SURGICAL OPD</option>
                                 <option value="MULAGO TB MANAGEMENT">MULAGO TB MANAGEMENT</option>
                                 <option value="MULAGO ULTRA SCAN">MULAGO ULTRA SCAN</option>
                                 <option value="NSAMBYA HOSPITAL">NSAMBYA HOSPITAL</option>
                                 <option value="REACHOUT MBUYA">REACHOUT MBUYA</option>
                                 <option value="TASO">TASO</option>
                                 <option value="POLICE">POLICE</option>
								 </select>
			 </td>
              </tr>
			  </table>

			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr>
			  <td style="width:25%;border:0px; font-weight:bold;">Service referred </td>
				<td style="width:75%;border:0px;">
          <select name="SERVICEREFERREDFOR" id="SERVICEREFERREDFOR" style="width:100%; font-weight:normal; background-color:#ecf0f5;">
			            <option value="-1"> </option>
                        <option value="ART, SUPPORT AND CARE">ART, SUPPORT AND CARE</option>
                        <option value="FURTHER MANAGEMENT">FURTHER MANAGEMENT</option>
					</select>


			  </td>
              </tr>
			  </table>
          </div>

		  <div class="col-sm-5"	>
        <table class="table-responsive" style="margin-top:0px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
			  <td style="width:40%;border:0px; font-weight:bold;">Action taken </td>
			  <td style="width:60%;border:0px;">

<Select name="ACTIONTAKEN" id="ACTIONTAKEN" style="width:100%; font-weight:normal; background-color:#ecf0f5;">
                                              <option value=""> </option>
			                                        <option> TREATED </option>
			                                        <option> REFERRED </option>
                                              <option> TREATED AND REFERRED </option>
     </select>
			 </td>
              </tr>
			  </table>


			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
			   <td style="width:40%;border:0px; font-weight:bold;">Service check </td>
				<td style="width:60%;border:0px;">
				<input type="radio" name="OUTSVSTATUS" id="OUTSVSTATUS" value="IN SESSION" checked>
        <label for="IN SESSION">IN SESSION</label>
		<input type="radio" name="OUTSVSTATUS"  id="OUTSVSTATUS" value="CHECKED OUT">
		<label for="CHECKED OUT">CHECK OUT</label>  </td>
              </tr>
			  </table>

			  <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
			    <td style="width:40%;border:0px; font-weight:bold;">Other line services </td>
			  <td style="width:60%;border:0px;"> <select name="SERVICEEXTENTION" id="SERVICEEXTENTION"
			 style="width:100%; font-weight:normal; background-color:#ecf0f5;">
			                                        <option> NOT REQUIRED </option>
			                                        <option> COUNSELLING</option>
                                                    <option> PAC </option>
													<option> ANC</option>
                                                    <option> FP </option>
													<option> PNC</option>
                              	                    </select>
              </tr>
			  </table>

        <center> <input type="submit" name="button" id="button" value="Save " style= " font-size:15px; font-weight:bold; border-radius:11px; background-color:#000000; color:#ffffff; height:30px;"/> </center>
             <div class="clear">
          </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


      </div>
      <br>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      <!-- START PROGRESS BARS -->

   </div>
   </div>
   </div>


    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


           <div class=""  id="getvist" >  </div>

           <div class="col-sm-12">
           <BR>


         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>

    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


           <div class=""  id="pettyview" >  </div>

           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>

                      <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


           <div class=""  id="getresults" >  </div>

           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>



                         </div>
                    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div>
    <strong>Copyright &copy;  <a href="admin/budget_config.php">Naguru Teenage Information and Health Center</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Control Sidebar -->


<!-- jQuery 2.2.3 -->

<script src="assets/lib/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<!-- Page script -->
<script>
 
function getvistdata(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getepisode.php?q='+odno,
       success : function(data){
                $('#getvist').html(data);
$("#impres2").modal("show");
                 }
});
}


function getstuff(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getepisode2.php?q='+odno,
       success : function(data){
                $('#pettyview').html(data);
$("#impres").modal("show");
                 }
});
}


function gettestresults(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getresults2.php?q='+odno,
       success : function(data){
                $('#getresults').html(data);
$("#impres4").modal("show");
                 }
});
}

</script>

  <script>

          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/medicalvists.php',
                       success : function(data){
                                $('#medicalvists').html(data);
                                 }
               });
               }, 2000);

          </script>

<script>

  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<select  name="p_'+rowCount+'" id="p_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >'+
             		                      	'<option value="-1"> </option>'+
                                            '<option>ABDOMINAL PAIN</option>'+
                                            '<option>ABNORMAL VAGINAL DISCHARGE</option>'+
                                            '<option>ANTE-NATAL CARE</option>'+
                                            '<option>BACKACHE</option>'+
						'+<option>HEADACHE</option>'+
						'+<option>SORETHROAT</option>'+
                                            '<option>C-C SCREENING-INITIAL</option>'+
                                            '<option>C-C SCREENING-ROUTINE RESCREENING</option>'+
                                            '<option>C-C VIA NEGATIVE</option>'+
                                            '<option>C-C VIA POSITIVE</option>'+
                                            '<option>C-C VIA SUSPICIOUS FOR CANCER</option>'+
                                            '<option>CHEST PAIN</option>'+
                                            '<option>CONSTIPATION</option>'+
                                            '<option>CONTRACEPTIONS</option>'+
                                            '<option>COUGH</option>'+
                                            '<option>DENTAL PROBLEM</option>'+
                                            '<option>DIZZINESS</option>'+
                                            '<option>EYE PROBLEM</option>'+
                                            '<option>FAMILY PLANNING</option>'+
                                            '<option>FEVER</option>'+
                                            '+<option>FLU</option>'+
						'+<option>LAP</option>'+
						'+<option>UTI</option>'+
											'+<option>SKIN INFECTION</option>'+
                                            '+<option>GBV-COMMUNITY REDRESS/SUPPORT GROUP</option>'+
                                            '<option>GBV-EMERGENCY CONTRACEPTION</option>'+
                                            '<option>ABNORMAL VAGINAL DISCHARGE</option>'+
                                            '<option>GENITAL ULCER</option>'+
                                            '<option>GROWTHS IN GENITALS</option>'+
											'<option>GENITAL WARTS</option>'+
                                            '<option>HERPES SIMPLEX</option>'+
                                            '<option>HERPES ZOSTA</option>'+
                                            '<option> HIV/AIDS</option>'+
                                            '<option>ITCHING IN GENITAL</option>'+
                                            '<option>PAINFUL GENITALS</option>'+
                                            '<option>SWELLING IN GENITALS</option>'+
                                            '<option>SYPHILLIS</option>'+
                                            '<option>URETHRAL DISCHARGE</option>'+
                                            '<option>VAGINAL DISCHARGE</option>'+
                                            '<option>SEXUAL ABUSE</option>'+
                                            '<option>SEXUAL PROBLEMS</option>'+
                                            '<option>STDS-SEXUAL HEALTH</option>'+
                                           '<option> ACNE</option>'+
										   '<option>TRICHOMONIASIS</option>'+
										   '<option>PUBIC LICE</option>'+
										   '<option>CHLAMYDIA</option>'+
										   '<option>GONORRHEA</option>'+
                                           '<option>BODY ODOUR</option>'+
                                           '<option>BREAST CHANGES</option>'+
                                           '<option>MENSTRUAL RELATED PROBLEMS</option>'+
                                           '<option>MENSTRUATION</option>'+
                                           '<option>NORMAL VAGINAL DISCHARGE</option>'+
                                           '<option>SIZE OF SEX ORGANS</option>'+
                                           '<option>VIRGINITY</option>'+
                                           '<option>WET DREAMS</option>'+
                                           '</Select>';


        var selects = '<select  name="c_'+rowCount+'" id="c_'+rowCount+'" required="required" '+
                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff;" >'+
             		    '<option> </option>'+
                    '<option>GENERAL</option>'+
                    '<option>ART</option>'+
             			  '<option>PREGNANCY</option>'+
             		    '<option>STI</option>'+
						        '<option>SGBV</option>'+
                    '<option>BODY CHANGES</option>'+
             		    '<option>SEXUAL HEALTH</option>'+
                    '</select>';
     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+selects+' </td>'+
               '<td>'+s1+'</td>';

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

function  dostg(thisid){

     var val = thisid.split("_")[1];
	 var v1 = parseFloat(document.getElementById("pd_"+val).value);
	 var v2 = parseFloat(document.getElementById("fq_"+val).value);
	 var v3 = parseFloat(document.getElementById("tm_"+val).value);

	 var v4 = v1*v2*v3;
	  document.getElementById("qty_"+val).value = v4;

}

   function addRow13(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;
     var ttt     = "<?php   echo $stss; ?>";

	 var s1 = '<select name="dn_'+rowCount+'" onKeyUp="domee(this)" id="dn_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >'+
                                        '<option></option>'+
                                        '<option><?php   echo $stss; ?></option>'+
                                        '</select>';

	 var fq = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="fq_'+rowCount+'" id="fq_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';


	 var tm = '<select  onchange="dostg(this.id)" name="tm_'+rowCount+'" id="tm_'+rowCount+'" required="required" '+
	           'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />'+
                                        '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
										'<option>4</option>'+
                                        '</select>';

	 var pd = '<input type="numeric"  onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pd_'+rowCount+'" id="pd_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';



	 var qty = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qty_'+rowCount+'" id="qty_'+rowCount+'" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';


     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+s1+' </td>'+
			   '<td>'+fq+' </td>'+
			   '<td>'+tm+' </td>'+
			   '<td>'+pd+' </td>'+
			   '<td>'+qty+' </td>';


      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows1').value=rowCount;

  }

  function deleteRow12(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) {
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="p_"+x;
		  table.rows[x].cells[1].childNodes[0].name="p_"+x;
          table.rows[x].cells[2].childNodes[0].id="c_"+x;
		  table.rows[x].cells[2].childNodes[0].name="c_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}

 function deleteRow13(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) {
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="dn_"+x;
		      table.rows[x].cells[1].childNodes[0].name="dn_"+x;
		  table.rows[x].cells[2].childNodes[0].id="fq_"+x;
		  table.rows[x].cells[2].childNodes[0].name="fq_"+x;
		  table.rows[x].cells[3].childNodes[0].id="tm_"+x;
		  table.rows[x].cells[3].childNodes[0].name="tm_"+x;
		  table.rows[x].cells[4].childNodes[0].id="pd_"+x;
		  table.rows[x].cells[4].childNodes[0].name="pd_"+x;

          table.rows[x].cells[5].childNodes[0].id="qty_"+x;
		  table.rows[x].cells[5].childNodes[0].name="qty_"+x;

          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}


  </script>

  <script>
      var pn = [];
          pn["v1"] = 0;
          pn["v2"] = 0;

      var x="0,0,0,0,0,0";

      function adss(selectorint)
      {
          pn["v"+selectorint] = pn["v"+selectorint]+1;
          var obj=  document.getElementById('fields'+selectorint);
                x=  pn["v1"] +","+ pn["v2"];
      }

      function remove(sid)
      {
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


 </body>
 </html>
