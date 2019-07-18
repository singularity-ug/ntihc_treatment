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
              
                
            <?php 
include_once("php/configpatientmgtdb.php"); 

    $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND DATATYPE = 'ON SITE'";

                     $result = $conn->query($sql);
                     $st ='<table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
                     <thead>
                     <tr>
                     <th>ID</th> 
                     <th>NTIHC-NO.</th>
					 <th>NAME</th>
					 <th>AGE</th> 
                     <th>ACTION</th>
                     </tr>
                     </thead>
                     <tbody ">';
                     $seenid = ""; $x=1;
                     while($row = $result->fetch_assoc()) {
                       if ($seenid==$row['NTIHCNO']) {
                        
                       }
                       else{
                         $seenid = $row['NTIHCNO'];
                     $st=$st."<tr>".
	                 "<td>" . ($x++) . "</td>". 
                     "<td>" . $row['NTIHCNO'] . "</td>".
					 "<td>" . $row['CLIENTNAME'] . "</td>".
					 "<td>" . $row['AGE1'] . "</td>". 
					 
                     "<td>" . '<input type="button" style="width:100%; text-align:left;" id="'.$row['NTIHCNO'] .'______'.$row['DATECREATED'].'______'.$row['SERVICE_EPISODE'] 
					 .'______'.$row['VISTTYPE'].'______'.$row['USERINITIAL'].'______'.$row['AGE1']. '" value="Click"  onclick="getClient(this.id)">' . "</td>".
		             "</tr>";
                   }
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?> 
          
              
              
			<script>
function getClient(id){
var id1 = id.split('______');
$.ajax({
     url:"client_counsellinghistory.php",
     method:"POST",
     data:{id:id1[0]},
     success:function(data){
	 var s = data.split("______");
          $('#prescribed').html(s[1]);
		  $('#AMOUNT').html(s[0]);
		  $("#DATECREATED").val(id1[1]);
		  $("#SERVICE_EPISODE").val(id1[2]);
		  $("#VISTTYPE").val(id1[3]);
		  $("#USERINITIAL").val(id1[4]); 
		  $("#AGE1").val(id1[5]);
     }
});
}
</script> 
<!-- jQuery 2.2.3 --> 


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

    <div class="box-group" id="accordionxd">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border" style="background-color: #ecf0f5;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordionxd" href="#collapseOnexd">
                      HIV Counselling and Testing
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOnexd" class="panel-collapse collapse in">
                    <div class="box-body">
     
     <form class="form-horizontal" method="post" action=" " style="height:auto;">  
     
      <div class="col-lg-12" style="text-align:left;">
 <img src="assets/img/logsbig.PNG" width="100%" height="100%">    
</div>
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">HCT / COUNSELLING CLIENT CARD </legend> </center> 
          
       <div class="col-sm-12">
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
            </div>
        <div class="col-sm-5">       
       <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:0px;">Service date </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th> 
</tr>
			  </table>
			 
			  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr>
	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="VISTBY" id="VISTBY"   readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
              </tr>
			  </table>
               
	 <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			   <th style="width:50%;border:0px;">Bief </th>
				<th style="width:50%;border:0px;"> <input type="text"  name="BRIEF" id="BRIEF"    readonly="readonly"
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
				<td style="width:100%;border:0px;"> <input type="text"  name="COUNSELLING" id="COUNSELLING"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>  
              </tr>
			  </table>
                             
 
               <div id="prescribed"> 
                           <table id="dataTable1"class="table table-bordered" style="background-color: transparent;">
                           <thead>
                           <tr> 
          <th > </th>
	      <th style="width:40%;"> Reason for testing  </th>  
           <th style="width:60%;"> Reason for testing  </th> 
                              </tr>
                              </thead>
                              <tbody id="tablebody">
                                <tr id="1_rowdata" >
                                <td><input type="checkbox" required="required" checked="checked" /></td>
                                <td>
                                <input type="text" name="PROBLEM_CATEGORY" id="PROBLEM_CATEGORY" required="required"
                                  style= "width:100%; background-color:#fff;"/> 
                                </td>  
                                
                                 <td>
                                <input type="text" name="PROBLEM" id="PROBLEM" required="required"
                                  style= "width:100%; background-color:#fff;"/> 
                                </td> 
                            </td>
                              </tr>
                      </tbody>
                      </table>   
                 
                 
                 
                 
              </div> </div>
			  
			  <div class="col-sm-6" style="margin-top: 0px;"> 
              <table class="table-responsive" >
              <table class="table" style="margin-top:2px;">
              <tr>
			    <th style="width:70%;border:1px solid #ecf0f5;">Pre-Test Counselling done / information given </th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="PRE_TESTCOUSELLING_GIVEN" id="PRE_TESTCOUSELLING_GIVEN" 
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				
				  </tr>
			  </table>
			  
			  <table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">Counselled as </th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="COUNSELLED_AS" id="COUNSELLED_AS" 
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">HCT Entry Point</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="HCT_ENTRYPOINT" id="HCT_ENTRYPOINT" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">Have you ever Tested for HIV before?</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="EVERTESTEDBEFORE" id="EVERTESTEDBEFORE" 
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">How many times have you tested in the last 12 months</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="NUMBEROFTESTS" id="NUMBEROFTESTS" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">Number of sexual partners in the last 12 months</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="NUMBEROFSEXUALPARTNERS" id="NUMBEROFSEXUALPARTNERS" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">What was the test results last time you Tested?</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="LAST_TESTRESULTS" id="LAST_TESTRESULTS" 
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">Has your Partner / Spouse been tested for HIV before?</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="SPOUSE_PARTNERTESTED_BEFORE" id="SPOUSE_PARTNERTESTED_BEFORE" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">If yes what were the results?</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="IFYES_RESULTS" id="IFYES_RESULTS" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
               </div> 
              </div> 
 
            <center>  
                <a href="client_counsellingroom.php" style="border: 1px solid #000; padding: 2px;border-radius: 3px; font-weight:bold;"> New service <span class="sr-only">(current)</span></a> 
               </center>
               <br>
                    </form> 
 
					   
					  </div>
                  </div>  
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border" style="background-color: #ecf0f5;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordionxd" href="#collapseTwoxddd">
                       HCT results/ Post Test Counselling
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwoxddd" class="panel-collapse collapse">
                    <div class="box-body"><BR>



				<div class="col-sm-5" style="border: 2px solid #ecf0f5;">
				<table class="table-responsive" ><b>HIV </b> <b>Lab results</b>
				<table class="table" style="margin-left:0px; background-color:#fff; font-weight:normal; border:2px solid #ecf0f5;">
         <thead>
         <th>*</th>
         <th>HIV Test 1</th>
         <th>HIV Test 2</th>
         <th>HIV Test 3</th>
         </thead>

         <thead>
         <th>Kit name</th>
         <th>Determine</th>
         <th>Start Pack</th>
         <th>Unigold</th>
         </thead>
    <tbody>
      <tr>
       <th>Lot No.</th>
        <td ><input type="text" value="1"  readonly style="width:100%; text-align:center;"></td>
        <td ><input type="text" value="2" readonly style="width:100%; text-align:center;"></td>
        <td ><input type="text" value="3" readonly style="width:100%; text-align:center;"></td>
        </tr>

         <form method="post" class="form-horizontal" action="updatecmgt/update_counselling_lab_results.php">

         <tr>
         <th >Expiry date</th>
        <td ><input type="text" name="EXPIRYDATET1" id="myEXPIRYDATET1" value=" "  readonly="readonly"
		style="width:100%; text-align:center;"></td>
        <td ><input type="text" name="EXPIRYDATET2" id="myEXPIRYDATET2" value=" "  readonly="readonly"
		style="width:100%; text-align:center;"></td>
        <td ><input type="text" name="EXPIRYDATET3" id="myEXPIRYDATET3" value=" "  readonly="readonly"
		style="width:100%; text-align:center;"></td>
     </tr>
    <tr>

    <tr>
        <th>Reactivity</th>
        <td style=" border:1px solid #ecf0f5;"><input type="text"  name="REACTIVITYT1" id="myREACTIVITYT1" value=""
		 readonly="readonly"
		style="width:100%; text-align:center;">

                                </td>
        <td style=" border:1px solid #ecf0f5;"><input type="text"  id="myREACTIVITYT2" name="REACTIVITYT2" value=""
		 readonly="readonly"
		style="width:100%; text-align:center;">

                                </td>
        <td style=" border:1px solid #ecf0f5;"><input type="text"  id="myREACTIVITYT3" name="REACTIVITYT3" value=""
	    readonly="readonly"
		style="width:100%; text-align:center;">
       </td>
    </tr>
    </tbody>
    </table>
	<br>
	<table class="table-responsive" >
                <table class="table" style="margin-top: -23px;">
                <tr>
				<th style="width:35%;border:1px solid #ecf0f5;">Final reactivity</th>
				<th style="width:65%;border:1px solid #ecf0f5;"> <input type="text"  name="FINALREACTIVITY" id="myFINALREACTIVITY" value=""
				 readonly="readonly"
				required="required" style="width:100%; font-weight:bold; background-color:#000; color:#fff;">  </th>
				</tr>
			    </table>

				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:35%;border:1px solid #ecf0f5;">Technician name</th>
				<th style="width:65%;border:1px solid #ecf0f5;"> <input type="text"  name="TECHNICIAN_NAME" id="myTECHNICIAN_NAME" value=""
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>
				</tr>
			    </table>

				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:35%;border:1px solid #ecf0f5;">Title</th>
				<th style="width:65%;border:1px solid #ecf0f5;"> <input type="text"  name="TITLE" id="myTITLE" value=""
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>
				</tr>
			    </table>





				</div>

				<div class="col-sm-7">
				<table class="table-responsive" ><b>Post Test Counselling</b>
              <table class="table" style="margin-top:2px;">
              <tr>
			    <th style="width:60%;border:1px solid #ecf0f5;">Results recieved </th>
				<th style="width:40%;border:1px solid #ecf0f5;">
	    <input type="radio" name="RESULTSRECEIVED" id="RESULTSRECEIVED" value="YES" checked>
        <label for="YES">YES</label>
		<input type="radio" name="RESULTSRECEIVED"  id="RESULTSRECEIVED" value="NO">
		<label for="NO">NO</label>  </td>
				  </tr>
			  </table>

			  <table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:60%;border:1px solid #ecf0f5;">As a couple </th>
				<th style="width:40%;border:1px solid #ecf0f5;">
		<input type="radio" name="RECIEVEDASACOUPLE" id="RECIEVEDASACOUPLE" value="YES" >
        <label for="YES">YES</label>
		<input type="radio" name="RECIEVEDASACOUPLE"  id="RECIEVEDASACOUPLE" value="NO" checked>
		<label for="NO">NO</label>  </td>
				</tr>
			    </table>

				 <table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:60%;border:1px solid #ecf0f5;">Couple results</th>
				<th style="width:40%;border:1px solid #ecf0f5;">
				<input type="radio" name="COUPLERESULTS" id="COUPLERESULTS" value="CONCORDANT">
        <label for="CONCORDANT">CONCORDANT</label>
		<input type="radio" name="COUPLERESULTS"  id="COUPLERESULTS" value="DISCORDANT" >
		<label for="DISCORDANT">DISCORDANT</label>  </td>
				</tr>
			    </table>

				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:60%;border:1px solid #ecf0f5;">Is there suspicion of TB.(Current cough,fever,weight loss and night sweats) </th>
				<th style="width:40%;border:1px solid #ecf0f5;">
				<input type="radio" name="TB_SUSPICION" id="TB_SUSPICION" value="YES" >
        <label for="YES">YES</label>
		<input type="radio" name="TB_SUSPICION"  id="TB_SUSPICION" value="NO" checked>
		<label for="NO">NO</label>  </td>
				</tr>
			    </table>

				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:60%;border:1px solid #ecf0f5;">Has client started Co-trimoxazole prophylasis dosage? </th>
				<th style="width:40%;border:1px solid #ecf0f5;">
				 <input type="radio" name="COTRIMOXAZOLE_START" id="COTRIMOXAZOLE_START" value="YES" checked>
        <label for="YES">YES</label>
		<input type="radio" name="COTRIMOXAZOLE_START"  id="COTRIMOXAZOLE_START" value="NO">
		<label for="NO">NO</label>  </td>
				</tr>
			    </table>

				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:60%;border:1px solid #ecf0f5;">Has client been linked care or any other service?</th>
				<th style="width:40%;border:1px solid #ecf0f5;">
                <input type="radio" name="CARE_LINK" id="CARE_LINK" value="YES"  >
        <label for="YES">YES</label>
		<input type="radio" name="CARE_LINK"  id="CARE_LINK" value="NO" checked>
		<label for="NO">NO</label>  </td>

				</tr>
			    </table>

				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr>
				<th style="width:60%;border:1px solid #ecf0f5;">CD4 count results (If applicable)</th>
				<th style="width:40%;border:1px solid #ecf0f5;"> <input type="text"  name="CDFOUR" id="CDFOUR" value=""
				style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>
				</tr>
			    </table>

				<input type="hidden" name="SERVICE_EPISODE" id="mySERVICE_EPISODE" value=" " >
		        <input type="text" name="NTIHCNO" id="mymNTIHCNO" value=" " style="border:0px; text-align:center; width:100%;">
				<input type="hidden" name="VISTID" id="myVISTID" value=" " >
		        <input type="hidden" id="myid" name="id" value="">

				</div>
				 <br>
				<div class="col-sm-12" style="border: 2px solid #ecf0f5;">
				 <table class="table-responsive" >
            <table class="table" style="border:0px;margin-top: 10px;">
              <tr>
			    <th style="width:25%;border:0px; background-color:#ecf0f5;">Action taken</th>
				<th style="width:75%;border:0px;background-color:#ecf0f5;"> <textarea name="ACTIONTAKEN"   required="required"
				style="width:100%;" >
				</textarea> </th>
              </tr>
			  </table>

		      <table class="table-responsive" style="margin-top:0px;">
              <table class="table" style="border:2px solid #ecf0f5;">
              <tr>
			    <th style="width:14%;border:0px;">Counsellor's Name </th>
				<th style="width:36%;border:0px;"> <input type="text" name="COUNSELORSNAME" id="COUNSELORSNAME"
				value="<?php echo $nameofuser; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>
				<th style="width:14%;border:0px;"> Results date </th>
                <td style="width:36%;border:0px;"> <input type="text" name="RECIEVEDDATE" id="RECIEVEDDATE"
				 value="<?php echo date('Y-m-d'); ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </td>
              </tr>
			  </table></div>

              </div>

             <center> <input type="submit" name="update" value="Update">  </center>
              </form>
			  </div>
			  </div>

			  </div>
              </div>


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
  <script>

          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/counsellingvists.php',
                       success : function(data){
                                $('#counsellingvists').html(data);
                                 }
               });
               }, 2000);

          </script>

<script>
