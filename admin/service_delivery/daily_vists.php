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
$conn1  = new mysqli("localhost", "root", "toor2", "dbtollfree");
$conn2 = new mysqli("localhost", "root", "toor2", "patientmgt");


function gettotals($conns,$sql1,$sex){  
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
return  $res->num_rows;
}


function getages($conns,$sql1,$sex){ 
     $age=[0,0,0,0,0,0]; 
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
   while($row=$res->fetch_assoc()){
       if($row['AGE_GROUP']=='10-14'){ $age[0] = $age[0]+1;}
   elseif($row['AGE_GROUP']=='15-19'){ $age[1] = $age[1]+1;}
   elseif($row['AGE_GROUP']=='20-24'){ $age[2] = $age[2]+1;}
   elseif($row['AGE_GROUP']=='24'){ $age[3] = $age[3]+1;}
   elseif($row['AGE_GROUP']=='E'){ $age[4] = $age[4]+1;}
   elseif($row['AGE_GROUP']=='X'){ $age[5] = $age[5]+1;}
   }
return  $age;

}


function getagess_episode($conns,$sql1,$sex){ 
     $age=array(); 
   $age[0] =0; $age[1] =0; $age[2] =0; $age[3] =0; $age[4] =0; $age[5] =0;
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
   while($row=$res->fetch_assoc()){
   if(explode('__',$row['SERVICE_EPISODE'])[1]=='1'){
       if($row['AGE_GROUP']=='10-14'){ $age[0] = $age[0]+1;}
   elseif($row['AGE_GROUP']=='15-19'){ $age[1] = $age[1]+1;}
   elseif($row['AGE_GROUP']=='20-24'){ $age[2] = $age[2]+1;}
   elseif($row['AGE_GROUP']=='24'){ $age[3] = $age[3]+1;}
   elseif($row['AGE_GROUP']=='E'){ $age[4] = $age[4]+1;}
   elseif($row['AGE_GROUP']=='X'){ $age[5] = $age[5]+1;}
   }
   }
return  $age;

}

if(isset($_POST['edate'])){
  $d1 = $_POST['sdate'].' 00:00:00';
  $d2 = $_POST['edate'].' 23:59:59';
$sql  = "SELECT * FROM `hct_counselling_andtesting` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql2 = "SELECT * FROM `counsellingservices` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql0 = "SELECT * FROM `tollfree` GROUP BY PHONECONTACT HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql3 = "SELECT * FROM `clientsexamination` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql4 = "SELECT * FROM `hcg` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql5 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql6 = "SELECT * FROM `antenatal` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql7 = "SELECT * FROM `postnatal_care` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql8 = "SELECT * FROM `abortioncare` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql9 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
  
$sql01 = "SELECT * FROM `cmpatientsregistration` HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

}
 
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>
  
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTROB").val(data[4]);
  $("#SECONDQTROB").val(data[5]);
  $("#THIRDQTROB").val(data[6]);
  $("#FOUTHQTROB").val(data[7]);
  $("#TOTALROB").val(data[8]); 
  $("#BUDGETSTATUS").val(data[9]);       
  
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "serch_budget.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result); 
}
  });
}
} 
</script>
  
  <?php
  $fz ='';
  if(isset($_GET['q'])) { $fz=$_GET['q']; }
  ?>
  <script>
  $(document).ready(function() {
     var ttt = "<?php echo $fz;  ?>";

   if(ttt==""){}  else{ $("#notificationModal").modal("show"); }
     $('#example').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

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
 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

    {extend :'pdf',
     title:' file'
    }
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#secondq').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' Ntihc imms'
    },
    {extend :'pdf',
     title:'Ntihc imms '
    },
    {extend :'print',
     title:' Ntihc imms'
    }
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exnclients').DataTable( {
    "iDisplayLength": 20,
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
     $('#example13').DataTable();
  } );
  </script>
 
  
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>  
  
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<?php 
include('connectproc.php');
$result = $db->prepare("SELECT * FROM payments");  
for($i=0; $row = $result->fetch(); $i++){
$cname=$row['PLANDETAILS'];
$invoice=$row['id'];
$date=$row['PAYMENTDATE'];
$cash=$row['due_date'];
$cashier=$row['cashier'];

$pt=$row['type'];
$am=$row['AMOUNTPAYABLE'];
if($pt=='cash'){
$cash=$row['due_date'];
$amount=$cash-$am;
}
}
?> 
       

    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}


.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid black;
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
</head> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header">
 
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../sys_dashboard.php" class="" >Home<span class="sr-only">(current)</span></a></li> 

          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../../index.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button --> 
        </ul>
      </div>

    </nav>
  
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="margin-top: -50px;"> 
      
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel --> 
         
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff; min-height: 50px;">REPORTS NAVIGATION</li>
        
       <li>
          <a href="medical_rpt_monthly.php">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">Monthly clients vists</span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
        

      <li>
          <a href="daily_vists.php">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">Daily clients vists</span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
         

          
          <li>
          <a href="cm_general.php?d1=0&d2=0">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">General service report</span>
            <span class="pull-right-container">
               <small class=" ">  </small>
            </span>
          </a>
        </li>
          

            <li>
          <a href="tollfree_rpt.php">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">Toll free report</span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
        
          
  <li>
          <a href="#">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">User-dashboard</span>
            <span class="pull-right-container">
               <small class=" ">  </small>
            </span>
          </a>
        </li>
        
          
            <li>
          <a href="#">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">User-dashboard</span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
        
          
  <li>
          <a href="#">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">User-dashboard</span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
        
          
           <li>
          <a href="#">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">User-dashboard</span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
        
          
          <li>
          <a href="#">
            <i class="fa fa-th"></i> <span style="font:bold 15px; color:#000;">User-dashboard</span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
        
             



       
         <li class="treeview">
         <a href=<button class="" data-toggle="modal"  data-target="#switchaccess"></button> 
            <i class="fa fa-share"></i> <span style="font:bold 15px; color:#000;">User-dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right">Admin</i>
            </span>
          </a>
          <ul class="treeview-menu"> 
          </ul>
        </li>  
       
         <canvas id="canvas" width="300" height="300" style="height: 100%; width:100%;">
      </canvas> 
            
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#fff;">
    <!-- Content Header (Page header) -->
    <section class="content-header">  
    </section>
<body class="hold-transition skin-blue sidebar-mini">
  
  <!-- Left side column. contains the logo and sidebar -->
              <br> 
        
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">


                  <!-- Info boxes --> 
    
  
<div class="content" id="content">
<div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
 <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
   <p style="font-weight:normal; font-size:12px;"> DAILY CLIENTS VISTS BY GENDER AND AGE GROUP</p> 
</div>

 <div id="dialog-window">
  <div id="scrollable-content">
   <ul>
                               <div class=""  id=" " style="margin-left: -41px;">
 
        <?php
  include_once '../config/config_pmgt.php';
?> 
      <table id="secondq" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">DATE</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
    <th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
    <th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
   $MySQLiconn = new mysqli('localhost', 'root', 'toor2', 'patientmgt');
  $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` GROUP BY  DATECREATED DESC");
    while($row=$res->fetch_assoc()) {if($row['DATECREATED']==''){}
    else{$dates[] = $row['DATECREATED'];} }   //GET ALL THE DATES IN SPECIFIED RANGE     
   
   for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
       $res = $MySQLiconn->query("SELECT * FROM `clientsexamination`   WHERE clientsexamination.DATECREATED='$dates[$d]' ");
                   $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0;   $SH =0;  
                   $MALES =0; $FEMALES =0; $result = array();
                   $NEG =0; $POS=0;  
                   $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
                          {   
                     $result= $row;
                 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
                          elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
                          elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
                          elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
                          elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
                          elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
                          else{}
                                 
                
                //COUNT SEX 
                    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
                          elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
                else{}
                
                //GET AGE GROUPS  
                
                          }
                         ?>   

                    <?php 
          $sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
          $grps = getages($conn2,$sql1,"FEMALE");
          $grps1 = getages($conn2,$sql1,"MALE");
          ?>             
                             <tr>
      <td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
        <?php echo $dates[$d]; ?>  
      </td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
      
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
       
      <td style="text-align:center;font-weight:bold;">
      <?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
      
      <td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
        
      </tr>               
     
   <?php }   ?>
   
  <?php
$count=1;
if($count > 0)
{
  ?>
  <tr>
    <td colspan="1"> </th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
     <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
     <th style="text-align:center;width:14%;"> </th> 
    </td>
  </tr>
    <?php
}
  
?>

</table>


  </div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 500px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 500px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>


              </div>

    
 <div class="pull-right" style="margin-right:100px;">
    <a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
    </div>  
           
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
 
</body>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
      {

 $.ajax({
   type: "GET",
   url: "deletesales.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
    .animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>             
            
                 
             </div></div></div></div></div>
              
              
               </div></div>
              
                 <!-- /. ROW  -->  
             
                              </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
</div>


<script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->

</body>
</html> 