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
             	font-size: 11px;
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
      opts[1] = ["Select reason ","AIDS SYMPTOMS","CONF. PREV. HIV STATUS","CURRENT HIV RISK","FEEL ILL","FURTHER STUDIES","ILL RELATIVE/PARTNER","LOST RELATIVE/PARTNER","NEW PARTNER","OTHERS","PAST HIV RISK","PREGNANCY","STD SYMPTOMS","TO GET MARRIED","TRAVEL ABROAD"];

      opts[2] = ["General topic","CAREER GUIDANCE","CULTURE","FOLLOW UP","GBV","HYGIENE","NUTRITION","OTHERS","R/SHIP WITH PARENTS","R/SHIP WITH PARTNER","R/SHIP WITH PEERS"];

      opts[3] = ["Pyschological","ANGER","ANXIETY","DEFILEMENT","DEPRESSION","GBV-PSYCHOLOGICAL","GUILTY","HOSTILITY","RAPE","STRESS","TRAUMA"];

      opts[4] = ["Sexual health","HIV/AIDS","SEXUAL ABUSE","SEXUAL PROBLEMS","STDS-SEXUAL HEALTH"];

      opts[5] = ["Select STDS","ABNORMAL VAGINAL DISCHARGE","GENITAL ULCER","GROWTHS IN GENITALS","HERPES SIMPLEX","HERPES ZOSTA","HIV/AIDS","ITCHING IN GENITAL","PAINFUL GENITALS","SWELLING IN GENITALS","SYPHILLIS","URETHRAL DISCHARGE","VAGINAL DISCHARGE"];

      opts[6] = ["Body changes","ACNE","BODY ODOUR","BREAST CHANGES","MENSTRUAL RELATED PROBLEMS","MENSTRUATION","NORMAL VAGINAL DISCHARGE","SIZE OF SEX ORGANS","VIRGINITY","WET DREAMS"];


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
    <a href="client_management.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NTIHC</b> &nbsp;&nbsp dashboard</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
	  <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
		    <li><a href="client_medical.php" class="button5"> Updates<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="client_management.php" class="button5"> Tally tool<span class="sr-only">(current)</span></a></li>
              <li><a href="medical/waiting_room.php" class="button5"> Waiting room<span class="sr-only">(current)</span></a></li>
            <li><a href="admin/home_user.php" class="button5"> Admin<span class="sr-only">(current)</span></a></li>

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
              <span class="">&nbsp<?php echo $nameofuser; ?>  </span>
            </a>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-th"></i>
              <span class="">&nbsp<?php echo $desc; ?>  </span>
            </a>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-share"></i>
              <span class="">&nbsp<?php echo $dept; ?>  </span>
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

            <div class="box-header with-border" style="background-color: #ecf0f5;">
              <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right" style="margin-top:-6px;">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Waiting (On site)</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Pending Entries</a></li>
              <li><a href="#tab_3-2" data-toggle="tab" style="color:green;">Off site</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1"> 
 <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>   
                   <th style="background-color:#ecf0f5; color:black;width:25%;">DATE</th>
		     <th style="background-color:#ecf0f5; color:black;width:15%;">NTIHC.NO.</th>
                     <th style="background-color:#ecf0f5; color:black;width:40%;">NAME</th>
                     <th style="background-color:#ecf0f5; color:black;width:10%;">AGE</th>  
                     <th style="background-color:#ecf0f5; color:black;width:10%;">START</th>  
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th style="background-color:#ecf0f5; color:black;width:25%;">DATE</th>
		     <th style="background-color:#ecf0f5; color:black;width:15%;">NTIHC.NO.</th>
                     <th style="background-color:#ecf0f5; color:black;width:40%;">NAME</th>
                     <th style="background-color:#ecf0f5; color:black;width:10%;">AGE</th>  
                     <th style="background-color:#ecf0f5; color:black;width:10%;">START</th> 
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

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>"; 
		echo "<td>".$res['AGE1']."</td>"; 
		echo '<td>    
		&nbsp;&nbsp;&nbsp; 
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service" 
		<span class="glyphicon glyphicon-cog"> </span></a>  
		</td>';   	
	}
	   
    ?>
	</tbody>
  </table>  

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
					 <th style="background-color:#f39c12; color:WHITE;width:8%;">VIST</th>
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

$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
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

$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
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
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
		<span class="glyphicon glyphicon-cog"> </span></a>
		</td>';
	}

    ?>
	</tbody>
  </table>
              </div>
            </div>
          </div>




		    &nbsp
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
                          &nbsp
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
                            </a>&nbsp
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

							&nbsp
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

					  &nbsp; &nbsp; &nbsp; &nbsp
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
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM laboratory WHERE TESTSTATUS ='COMPLETED' AND REQUESTINGUNIT ='COUNSELLING SERVICES'
                                          GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

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
              <li class="active"><a href="#tab_1-1LL" data-toggle="tab"><B>HCT &nbsp Lab results</B></a></li>
              <li><a href="#tab_2-2LL" data-toggle="tab" style="color:green;">My <B>service list</B></a></li>
              <li><a href="#tab_3-2LL" data-toggle="tab"><B>Search</B></a></li>

              </li>
              </ul>
              <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1LL" style="margin-top: -15px;">
               <table id="example01" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>
              <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NO.</th>
		      <th style="background-color:green; font-size:9px; color:#fff;">DATE</th>
			  <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NAME</th>
              <th style="background-color:green; font-size:9px; color:#fff;">NTIHC.NO.</th>
              <th style="background-color:#DD4B39; font-size:9px; color:#fff;">ACTION</th>
              <th style="background-color:green; font-size:9px; color:#fff;"></th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		      <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NO.</th>
		      <th style="background-color:green; font-size:9px; color:#fff;">DATE</th>
			  <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NAME</th>
              <th style="background-color:green; font-size:9px; color:#fff;">NTIHC.NO.</th>
              <th style="background-color:#DD4B39; font-size:9px; color:#fff;">ACTION</th>
              <th style="background-color:green; font-size:9px; color:#fff;"></th>
        </tr>
        </tfoot>
        <tbody>

		 <script>
function postpetty(myid){
var dts = myid.split("***");
document.getElementById("myEXPIRYDATET1").value=dts[1];
document.getElementById("myid").value=dts[0];
document.getElementById("myEXPIRYDATET2").value=dts[2];
document.getElementById("myEXPIRYDATET3").value=dts[3];
document.getElementById("myREACTIVITYT1").value=dts[4];
document.getElementById("myREACTIVITYT2").value=dts[5];
document.getElementById("myREACTIVITYT3").value=dts[6];
document.getElementById("myFINALREACTIVITY").value=dts[7];
document.getElementById("myTECHNICIAN_NAME").value=dts[8];
document.getElementById("myTITLE").value=dts[9];
document.getElementById("mySERVICE_EPISODE").value=dts[10];
document.getElementById("mymNTIHCNO").value=dts[11];
document.getElementById("myVISTID").value=dts[12];
}
</script>
 <?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM laboratory WHERE TESTSTATUS ='COMPLETED' AND REQUESTINGUNIT ='COUNSELLING SERVICES'
                                          GROUP BY NTIHCNO ORDER BY id ASC");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['EXPIRYDATET1']."***".$res['EXPIRYDATET2']."***".$res['EXPIRYDATET3']."***".$res['REACTIVITYT1']
	."***".$res['REACTIVITYT2']."***".$res['REACTIVITYT3']."***".$res['FINALREACTIVITY']
	."***".$res['TECHNICIAN_NAME']."***".$res['TITLE']."***".$res['SERVICE_EPISODE']."***".$res['NTIHCNO']."***".$res['VISTID']
	."***".$res['RESULTSRECEIVED']."***".$res['RECIEVEDASACOUPLE']."***".$res['COUPLERESULTS']
	."***".$res['TB_SUSPICION']	."***".$res['COTRIMOXAZOLE_START']."***".$res['CARE_LINK']."***".$res['CDFOUR']."***".$res['ACTIONTAKEN']
	."***".$res['COUNSELORSNAME']
	."***".$res['RECIEVEDDATE'];

		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['NAME']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="View results"   onclick="postpetty(this.id)">
		<span class="glyphicon glyphicon-ok"> </span> </a>  </td>';
         echo "<td><a href=\"medical/print_hctresults.php?NTIHCNO=$res[NTIHCNO]\">Print</a>  </td>";
	}
    ?>
	</tbody>
  </table>

              
             </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2LL" style="margin-top: -15px;">
                 
              
              <table id="myhistory" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>
              <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NO.</th>
		      <th style="background-color:green; font-size:9px; color:#fff;">DATE</th>
			  <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NTIHC.NO.</th>
              <th style="background-color:green; font-size:9px; color:#fff;">NAME</th>
              <th style="background-color:#DD4B39; font-size:9px; color:#fff;">ACTION</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		       <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NO.</th>
		      <th style="background-color:green; font-size:9px; color:#fff;">DATE</th>
			  <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NTIHC.NO.</th>
              <th style="background-color:green; font-size:9px; color:#fff;">NAME</th>
              <th style="background-color:#DD4B39; font-size:9px; color:#fff;">ACTION</th>

        </tr>
        </tfoot>
        <tbody>

<?php
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';

$result = mysqli_query($mysqli, "SELECT * FROM  hct_counselling_andtesting WHERE TIMESTAMP >='$date' GROUP BY NTIHCNO ORDER BY DATECREATED");

	while($res = mysqli_fetch_array($result)) {
	$dtsget = $res['NTIHCNO']."***".$res['DATECREATED']."***".$res['DATECREATED'];
		echo "<tr>";
		echo "<td>".$res['HCTCID']."</td>";
		echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo '<td>
		<a id="4__'.$dtsget.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="History"
		<span class="glyphicon glyphicon-cog"> </span></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="5__'.$dtsget.'" href="javascript:void(0)"  onclick="getvistdata(this.id)" data-toggle="tooltip" title="Update"
		<span class="glyphicon glyphicon-ok"> </span></a>

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
              <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NO.</th>
		      <th style="background-color:green; font-size:9px; color:#fff;">DATE</th>
			  <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NTIHC.NO.</th>
              <th style="background-color:green; font-size:9px; color:#fff;">NAME</th>
              <th style="background-color:#DD4B39; font-size:9px; color:#fff;">ACTION</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		       <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NO.</th>
		      <th style="background-color:green; font-size:9px; color:#fff;">DATE</th>
			  <th style="background-color:#DD4B39; font-size:9px; color:#FFF;">NTIHC.NO.</th>
              <th style="background-color:green; font-size:9px; color:#fff;">NAME</th>
              <th style="background-color:#DD4B39; font-size:9px; color:#fff;">ACTION</th>

        </tr>
        </tfoot>
        <tbody>

<?php
include_once("updatecmgt/config.php");


$result = mysqli_query($mysqli, "SELECT * FROM  hct_counselling_andtesting GROUP BY NTIHCNO ORDER BY DATECREATED");

	while($res = mysqli_fetch_array($result)) {
	$dtsget = $res['HCTCID']."***".$res['NTIHCNO']."***".$res['DATECREATED'];
		echo "<tr>";
		echo "<td>".$res['HCTCID']."</td>";
		echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo '<td>
		<a id="4__'.$dtsget.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="History"
		<span class="glyphicon glyphicon-cog"> </span></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="5__'.$dtsget.'" href="javascript:void(0)"  onclick="getvistdata(this.id)" data-toggle="tooltip" title="Update"
		<span class="glyphicon glyphicon-ok"> </span></a>

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
<div class="col-sm-12" style="background-color:#fff;">
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
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
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
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
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
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->





        <div class="col-md-8">



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





<form class="form-horizontal" action="counsellingroom_process2.php" method="post" style="height:auto;"> 
          
         <div class="col-lg-12" style="text-align:left;">
 <img src="assets/img/logsbig.PNG" width="100%" height="100%">    
</div>
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">HCT / COUNSELLING CLIENT CARD </legend> </center> 
          
       
        <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
		<th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
		<th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
		
		 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Client.No.</label>
                    <div class="col-sm-8">
                     <input type="text" name="NTIHCNO"  class="form-control" 
					 readonly="readonly" style="font-weight:normal; background-color:#fff;">
                </div>
                </div>
                <!-- /.form-group -->
				
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Vist.date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"   class="form-control"
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                </div>
                </div>
                <!-- /.form-group --> 

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First.name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  
				   readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"   
				   readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->
 

        </th>
		
         <td>
		 
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Age</label>
                    <div class="col-sm-7">
                    <input type="numeric" name="AGE1" id="AGE1" class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group --> 
		 
		  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Gender</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="SEX"  
						readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    </div>
                </div>
                <!-- /.form-group -->

                  

               

 
			  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Schooling</label>
                    <div class="col-sm-7"> 
                    <input type="text"  class="form-control" name="SCHOOLINGSTATUS"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Education.level</label>
                    <div class="col-sm-7">
                      <input type="text"  class="form-control" name="HIGHESTLEVELOFEDUCATION"  
					   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Marital.status</label>
                    <div class="col-sm-7"> 
                              <input type="text"  class="form-control" name="MARITALSTATUS"  
							  readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
		 </th>
		 
        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment</label>
                    <div class="col-sm-8"> 
                   <input type="text"  class="form-control" name="EMPLOYMENTSTATUS"  
				   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <input type="text" class="form-control" name="DISTRICT"  
				   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
			      <input type="text" class="form-control" name="DIVISION"   readonly="readonly" 
				  style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone.No.</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->
 
             </td>
			 
			 <td>
			 
			 
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->
		 
		
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control"  
					style="font-weight:normal; background-color:#ecf0f5;"> 
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control"  
					style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
        <br>
		 <div class="form-group" style="margin-top:-15px;">
                    <label for="pass1" class="control-label col-sm-4">Living.with</label>
                    <div class="col-sm-8"> 
			      <input type="text"  class="form-control" name="LIVINGWITH"  
				 readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
			 
			 </td>
    </tbody>
    </table>
 
        <input type="hidden"  name="NTIHCNO"   id="myNTIHCNO" value="" >
		<input type="hidden" id="myID" name="RID">
		<input type="hidden"  name="AGE1" id="myAGE1">
		<input type="hidden" id="myAGEGP" name="AGE_GROUP">
		<input type="hidden"  id="REGISTERACCOUNT" name="REGISTERACCOUNT"  value="<?php echo $rm; ?>" >
		<input type="hidden"  id="USERINITIAL" name="USERINITIAL"  value="<?php echo $nameofuser; ?>" >
		<input type="hidden"  id="SERVICEPROVIDER" name="SERVICEPROVIDER"  value="<?php echo $nameofuser; ?>" >
		<input type="hidden"  name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="COUNSELLING SERVICES">
        <input type="hidden"  name="TIMEOUT" id="CHECKIN" >
		<input type="hidden" id="TESTDESCRIPTION" name="TESTDESCRIPTION" value="HCT" >

    
               <div class="col-sm-4">

	 <table class="table-responsive" style="margin-top:0px;">


            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:40%;border:0px;">Service date </th>
				<th style="width:60%;border:0px;"> <input type="date"  name="DATECREATED" id="DATECREATED" value="<?php echo date('Y-m-d'); ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>
</tr>
			  </table>

			  <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>
	            <th style="width:40%;border:0px;">Vist by </th>
				<th style="width:60%;border:0px;"> <select  name="VISTBY" id="VISTBY"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">
                	 <option value="YOUTH">YOUTH</option>
                                     <option>PARENT</option>
                                     <option>YOUTH AND PARENT</option>
                                     <option>COUPLE</option>
                                     </select>
				</th>
              </tr>
			  </table>
              
              
              
              
   <table class="table-responsive"  style="font-weight:normal;margin-top: -13px; ">
            <table class="table" style="border:0px;">
              <tr>
			  <td style="width:100%;border:0px; font-weight:bold;">REASON(S) FOR TESTING </td>
              </tr>
			  </table>

			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
				<td style="width:100%;border:0px;">
				<div id="fields1" name="fields1">   </div>
                      <input type="hidden" class="form-control" style="width:100%; " id="values" name="values" value="0,0,0,0,0,0">
                     <input type="button"  onclick="adss(1)" value="+ Add " style="margin-left: 0px; "/>
                     <input type="button"  onclick="remove(1)" value="- Remove" />

			 </td>
              </tr>
			  </table>



	 <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			   <th style="width:40%;border:0px;">Bief </th>
				<th style="width:60%;border:0px;"> <input type="text"  name="BRIEF" id="BRIEF" value="WANTS VCT"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>
				  </tr>
			  </table>

				 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
			  <td style="width:100%;border:0px; font-weight:bold;">Counselling</td>
              </tr>
			  </table>

			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
				<td style="width:100%;border:0px;"> <input type="text"  name="COUNSELLING" id="COUNSELLING" value="PRE AND POST TEST COUNSELLING"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>
              </tr>
			  </table>

			  <table class="table-responsive" >
              <table class="table" style="margin-top:2px;">
              <tr>
			    <td style="width:40%;border:1px solid #ecf0f5; background-color:#ecf0f5; font-weight:bold;">Disable HCT test if not required </td>
			    <td style="width:30%;border:1px solid #ecf0f5;">
				<input type="radio" name="HCTURGENCY" id="HCTURGENCY" value="HCT WANTED" checked>
        <label for="HCT WANTED">ACTIVE</label> </td>
		<td style="width:30%;border:1px solid #ecf0f5;">
		<input type="radio" name="HCTURGENCY"  id="HCTURGENCY" value="NOT REQUIRED">
		<label for="NOT REQUIRED">DISABLE</label>  </td>
              </tr>
			  </table>
              </div>

			  <div class="col-sm-8" style="margin-top: 0px;">

              <table class="table-responsive" >
              <table class="table" style="margin-top:2px;">
              <tr>
			    <td style="width:55%;border:1px solid #ecf0f5;">Pre-Test Counselling done / information given </td>
			    <td style="width:45%;border:1px solid #ecf0f5;">
				<input type="radio" name="PRE_TESTCOUSELLING_GIVEN" id="PRE_TESTCOUSELLING_GIVEN" value="YES" checked>
        <label for="YES">YES</label>
		<input type="radio" name="PRE_TESTCOUSELLING_GIVEN"  id="PRE_TESTCOUSELLING_GIVEN" value="NO">
		<label for="NO">NO</label>  </td>
              </tr>
			  </table>

			  <table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:55%;border:1px solid #ecf0f5;">Counselled as </th>
				<td style="width:45%;border:1px solid #ecf0f5;">
				<input type="radio" name="COUNSELLED_AS" id="COUNSELLED_AS" value="INDIVIDUAL" checked>
        <label for="INDIVIDUAL">INDIVIDUAL</label>
		        <input type="radio" name="COUNSELLED_AS"  id="COUNSELLED_AS" value="COUPLE">
		<label for="COUPLE">COUPLE</label>
		        <input type="radio" name="COUNSELLED_AS"  id="COUNSELLED_AS" value="GROUP">
		<label for="GROUP">GROUP</label>  </td>
              </tr>
			  </table>

				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:70%;border:1px solid #ecf0f5;">HCT Entry Point</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <select  name="HCT_ENTRYPOINT" id="HCT_ENTRYPOINT"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">
                 <option value="-1"> </option>
                                <option>FACILITY BASED</option>
                                <option>WORK PLACE</option>
                                <option>HBHCT</option>
                                <option>FOR PREGNANT</option>
                                <option>PMTCT</option>
                                <option>PEP</option>
                                <option>CIRCUMCISION (SMC)</option>
                                <option>MARPS</option>
                                </select>
				</th>
				</tr>
			    </table>

				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:55%;border:1px solid #ecf0f5;">Have you ever Tested for HIV before?</th>
				<th style="width:45%;border:1px solid #ecf0f5;">
				<input type="radio" name="EVERTESTEDBEFORE" id="EVERTESTEDBEFORE" value="YES" checked>
        <label for="YES">YES</label>
		<input type="radio" name="EVERTESTEDBEFORE"  id="EVERTESTEDBEFORE" value="NO">
		<label for="NO">NO</label>  </td>
              </tr>
			  </table>

				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:80%;border:1px solid #ecf0f5;">How many times have you tested in the last 12 months</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="numeric"  name="NUMBEROFTESTS" id="NUMBEROFTESTS"
				  style="width:100%; text-align:center; font-weight:normal; background-color:#ecf0f5;">  </th>
				</tr>
			    </table>

				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:80%;border:1px solid #ecf0f5;">Number of sexual partners in the last 12 months</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="numeric"  name="NUMBEROFSEXUALPARTNERS" id="NUMBEROFSEXUALPARTNERS"
				 style="width:100%; text-align:center; font-weight:normal; background-color:#ecf0f5;">  </th>
				</tr>
			    </table>

				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:55%;border:1px solid #ecf0f5;">What was the test results last time you Tested?</th>
                <th style="width:45%;border:1px solid #ecf0f5;">
                <input type="radio" name="LAST_TESTRESULTS" id="LAST_TESTRESULTS" value="NEVER TESTED" checked>
        <label for="NEVER TESTED">NEVER TESTED</label>
				<input type="radio" name="LAST_TESTRESULTS" id="LAST_TESTRESULTS" value="NEGATIVE" checked>
        <label for="NEGATIVE">NEGATIVE</label>
		<input type="radio" name="LAST_TESTRESULTS"  id="LAST_TESTRESULTS" value="POSITIVE">
		<label for="POSITIVE">POSITIVE</label>  </td>
              </tr>
			  </table>

				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:55%;border:1px solid #ecf0f5;">Has your Partner / Spouse been tested for HIV before?</th>
				<th style="width:45%;border:1px solid #ecf0f5;">
				<input type="radio" name="SPOUSE_PARTNERTESTED_BEFORE" id="SPOUSE_PARTNERTESTED_BEFORE" value="YES" checked>
        <label for="YES">YES</label>
		<input type="radio" name="SPOUSE_PARTNERTESTED_BEFORE"  id="SPOUSE_PARTNERTESTED_BEFORE" value="NO">
		<label for="NO">NO</label>  </td>
              </tr>
			  </table>

				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:55%;border:1px solid #ecf0f5;">If yes what were the results?</th>
				 <th style="width:45%;border:1px solid #ecf0f5;">
				<input type="radio" name="IFYES_RESULTS" id="IFYES_RESULTS" value="NEGATIVE" checked>
        <label for="NEGATIVE">NEGATIVE</label>
		<input type="radio" name="IFYES_RESULTS"  id="IFYES_RESULTS" value="POSITIVE">
		<label for="POSITIVE">POSITIVE</label>  </td>
		<input type="radio" name="IFYES_RESULTS"  id="IFYES_RESULTS" value="DO NOT KNOW">
		<label for="DO NOT KNOW">DO NOT KNOW</label>  </td>
              </tr>
			  </table>

				</div>
				  
                 <center> <b>GENERAL COUNSELLING</b></center>     
                 
           <div class="col-sm-12" > 
         
           <div class="col-sm-4" style="border:2px solid; background-color:#ecf0f5;">  
           
		  <table class="table-responsive" style="margin-top:0px;"><b style="text-align:left; "></b>
            <table class="table">
              <tr>
			  <td style="width:100%; font-weight:bold;background-color:#ecf0f5;">GENERAL </td>
              </tr>
			  </table>

			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
				<td style="width:100%;border:0px;">
				<div id="fields2" name="field2">   </div>
                     <input type="button"  onclick="adss(2)" value="Add "  />
                     <input type="button"  onclick="remove(2)" value=" Remove " />
			 </td>
              </tr>
			  </table>

			  
             <table class="table-responsive" style="margin-top:0px;"><b style="text-align:left; "></b>
            <table class="table" style="border: 2px solid #ecf0f5;">
              <tr>
			  <td style="width:100%; font-weight:bold;background-color:#ecf0f5;">PSYCHOLOGICAL </td>
              </tr>
			  </table>

			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
				<td style="width:100%;border:0px;">
				     <div id="fields3" name="field3">   </div>
                     <input type="button"  onclick="adss(3)" value="Add " />
                     <input type="button"  onclick="remove(3)" value=" Remove " />
			 </td>
              </tr>
			  </table>
				
             </div>   
           
            <div class="col-sm-4" style="border:2px solid #fff; background-color:#ecf0f5;">  
           
		    <table class="table-responsive" style="margin-top:0px;"><b style="text-align:left; "></b>
            <table class="table" style="border: 2px solid #ecf0f5;">
              <tr>
			  <td style="width:100%; font-weight:bold;background-color:#ecf0f5;">SEXUAL HEALTH </td>
              </tr>
			  </table>

			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
				<td style="width:100%;border:0px;">
				     <div id="fields4" name="field4">   </div>
                     <input type="button"  onclick="adss(4)" value="Add " />
                     <input type="button"  onclick="remove(4)" value=" Remove " />
			 </td>
              </tr>
			  </table>
					
										   <table class="table-responsive" style="margin-top:0px;"><b style="text-align:left; "></b>
            <table class="table" style="border: 2px solid #ecf0f5;">
              <tr>
			  <td style="width:100%; font-weight:bold;background-color:#ecf0f5;">STDs </td>
              </tr>
			  </table>

			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
				<td style="width:100%;border:0px;">
				     <div id="fields5" name="field5">   </div>
                    <input type="button"  onclick="adss(5)" value="Add "/>
                     <input type="button"  onclick="remove(5)" value=" Remove "/>
			 </td>
              </tr>
			  </table>
			
            
            </div>  
           
            <div class="col-sm-4" style="border:2px solid; background-color:#ecf0f5;">  
          
            <table class="table-responsive" style="margin-top:0px;"><b style="text-align:left; "></b>
            <table class="table" style="border: 2px solid #ecf0f5;">
              <tr>
			  <td style="width:100%; font-weight:bold;background-color:#ecf0f5;">BODY CHANGES</td>
              </tr>
			  </table>

			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>
				<td style="width:100%;border:0px;">
				     <div id="fields6" name="field6">   </div>
                     <input type="button"  onclick="adss(6)" value="Add " />
                     <input type="button"  onclick="remove(6)" value=" - " />
			 </td>
              </tr>
			  </table>
					 
             </div>
             
            <table class="table-responsive" style="margin-top:4px;"> 
            <table class="table">
              <tr>
			  <td style="width:20%;border:0px; font-weight:bold;">Service check out </td>
				<td style="width:20%;border:0px;">
				<input type="radio" name="OUTSVSTATUS" id="OUTSVSTATUS" value="IN SESSION" checked>
        <label for="IN SESSION">IN SESSION</label> </td>
		   <td style="width:20%;border:0px;">
		<input type="radio" name="OUTSVSTATUS"  id="OUTSVSTATUS" value="CHECKED OUT">
		<label for="CHECKED OUT">CHECK OUT</label>  </td>
        
        <td style="width:20%;border:0px; font-weight:bold;">Other line services </td>
			  <td style="width:20%;border:0px;"> <select name="SERVICEEXTENTION" id="SERVICEEXTENTION"
			 style="width:100%; font-weight:normal; background-color:#ecf0f5;">
			                                        <option> NOT REQUIRED </option>
			                                        <option> MEDICAL</option>
                                                    <option> PAC </option>
													<option> ANC</option>
                                                    <option> FP </option>
													<option> PNC</option>
                              	                    </select></td>
        
              </tr>
			  </table>
    
				
           </div> 	 
 
				    <center> <input type="submit" name="button" id="button" value="Save " style= " font-size:15px; font-weight:bold; border-radius:11px; background-color:#000000; color:#ffffff; height:30px;"/>
                     <a href="client_counselling_hct.php" style="border: 1px solid #000; padding: 2px;border-radius: 3px; font-weight:bold;"> History <span class="sr-only">(current)</span></a> 
                     </center>
					</form>
                


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
                <script>

          function getvistdata(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/getepisode_counselling.php?q='+odno,
                       success : function(data){
                                $('#getvist').html(data);
								$("#impres2").modal("show");
                                 }
               });
               }

          </script>
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
                <script>

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

          </script>
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
                <script>

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

</body>
</html>
  