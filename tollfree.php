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
 
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tollfree</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.css">
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
  <link rel="stylesheet" href="admin/assets/notifier.css">
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
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
  

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
 
 
   <script>
  $(document).ready(function() {
     $('#example13').DataTable();
  } );
  </script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PHONECONTACT"+num).val(data[2]);
  $("#FIRSTNAME").val(data[2]);   
   
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "jquery_search/serch_call.php",
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
  function searchpro(){
     var dataString = document.getElementById('MOTHERLASTNAME').value;

     if(dataString==''){ document.getElementById('schrest').innerHTML="";}
     else{

     var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
  //alert(this.responseText);
      document.getElementById('schrest').innerHTML = this.responseText; //
    }
  };
  xhttp.open("GET", "get_clientno.php?q="+dataString, true);
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
      document.getElementById('MOTHERLASTNAME').value = separatedDataArray[0];
    document.getElementById('NTIHCNO').value = separatedDataArray[1];
        document.getElementById('CNAME').value = separatedDataArray[2];
    document.getElementById('AGE1').value= separatedDataArray[3];
      document.getElementById('schrest').innerHTML="";
    document.getElementById('AGE').value= separatedDataArray[5];
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

function postclient(vd){

  var dta = vd.split("###");
  $("#NTIHCNO").val(dta[0]);
  $("#CNAME").val(dta[1]);
}

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
   
<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
  font-weight: normal;
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
         font-weight: normal;
             }
             table tr:nth-child(odd) {
              background-color:transparent;
             }
             table tr:nth-child(even) {
              background-color:transparent;
             } 
 </style>
 

</head> 
<body class="hold-transition skin-blue sidebar-mini"  style="background:url(assets/img/pattern/4326703-white-background-wallpapero.jpg);">
        
  </header>
    
   
     
    <!-- Main content -->
    <section class="content">  
   

    <!-- Main content -->
    <section class="content" >
      <div class="row" > 
           <div class="col-md-1">  
            </div> 

           
     
         <div class="col-md-11">  
         
         
         <div class="panel-body">
         <div class="col-md-6">  
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:10%; border: 0px;">  
    <img src="assets/img/ntihclog2.png"width="60" height="60" style="border: 0px; ">  
    </td>
   
     <td style="width:80%; border: 0px;">  
   <center style="color:#000; font-weight:bold; font-size:12px;">NAGURU&nbsp;TEENAGE&nbsp;INFORMATION AND&nbsp;HEALTH&nbsp;CENTER</center><p></p>
   <center style="color:#000; font-weight:bold; font-size:14px;font:bold 16px 'Aleo'; text-shadow:1px 1px 4px #000; color:#fff;">TOLL&nbsp;FREE</center><BR> 
    
    <td style="width:10%; border: 1px;">  
    </td>  
    </tbody>
    </table> 
    
    
      </div> 
      
                <div class="col-md-5">
                 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:25%; border: 1px;"> <a href="client_management.php">  
      <img src="assets/imgx/index.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Dashboard   </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
    
    <td style="width:25%; border: 1px;"> <a href="admin/reports/med_daily_reception.php?d1=0&d2=0"> 
       <center><img src="assets/imgx/kkk.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Reports&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
   
     <td style="width:25%; border: 1px;"> <a href="tollfree_records.php"> 
         <center><img src="assets/imgx/indexreewss.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
         Call&nbsp;Data&nbsp;&nbsp;  </center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
   <td style="width:25%; border: 1px;"> <a href="admin/index.php"> 
       <center><img src="database icons/access-administrator-account.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
       Logout </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
   </tbody>
   </table>  
     </div> </div>
     <br><br>
     
        <div class="col-sm-12"> 
    
            <form class="form-horizontal"  method="post" action="tollfree_processor.php" 
            style="height: auto;background-color:transparent;"> 
        
            <div class="col-sm-4">  
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
     <thead> 
     <tr>
              <th style="width:40%;  border:0px;background-color:transparent;">Call date </th>
               <td style="width:60%;border:0px; background-color:transparent;">
                 <input type="date"  name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  required="required"
         style="font-size:10px;width:100%; background-color:transparent; " /> </td> 
                
      </tr>             
            </table> 
               
               <table border="1" cellpadding="4" cellspacing="0" 
               style="font-family: arial; font-size: 12px; border:0px;text-align:left;background-color:transparent;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:40%; border:0px;background-color:transparent; font-size:11px;">Phone contact </th>
               <td style="width:60%;border:0px;background-color:transparent;">
               <input type="numeric" onKeyUp="domee(this)" name="PHONECONTACT" id="PHONECONTACT" required="required" autocomplete="off" 
                 placeholder="Search Phone number " style="width:100%; background-color:transparent; text-transform:uppercase; font-size:10px;">   </td> 
                 
      </tr>             
            </table>  
            
            <div class="col-sm-12" style="margin-top:5px;"> <div id="res"> </div>   </div> 
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
      <thead> 
      <tr> 
      <th style="width:20%; text-align:left; border:0px;">Caller name </th>
      <th style="width:30%; text-align:left; border:0px;"> <input type="text"   name="FIRSTNAME"   id="FIRSTNAME"  
      style="font-size:10px; width:100%; background-color:transparent; text-transform: uppercase;"></td> 
         </tr>             
         </table> 
          
      <input type="hidden"  name="LASTNAME"  id="LASTNAME" >
      
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
      <thead> 
      <tr> 
      <th style="width:20%; text-align:left; border:0px;">Sex </th>
      <th style="width:30%; text-align:left; border:0px;"> <select id="SEX"  name="SEX"  required="required" 
      style="width:100%;background-color:transparent;height: 21px;" > 
        <option>  </option>
        <option value="MALE">MALE</option>
        <option value="FEMALE">FEMALE</option>
        </select>
         </th>  
         </tr>             
         </table> 
            
          
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:40%;  border:0px;background-color:transparent;">Age</th>
               <td style="width:60%;border:0px;background-color:transparent;">
               <select name="AGE" id="AGE"  required="required" 
         style="width:100%; background-color:transparent; text-transform: uppercase;" >
          <option>  </option>
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
                <option value="25">Above 24</option>
                </select>
         </td>
         </tr>             
         </table> 
         
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:40%;  border:0px;background-color:transparent;">Schooling</th>
               <td style="width:60%;border:0px;background-color:transparent;">
               <select name="SCHOOLINGSTATUS" id="SCHOOLINGSTATUS"  required="required" 
         style="width:100%; background-color:transparent; text-transform: uppercase;" >
          <option> </option>
                <option>IS</option>
                <option>OS</option>  
                </select>
         </td>
         </tr>             
         </table> 
         
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:40%;  border:0px;background-color:transparent;">Education</th>
               <td style="width:60%;border:0px;background-color:transparent;">
               <select name="HIGHESTLEVELOFEDUCATION" id="HIGHESTLEVELOFEDUCATION" required="required" 
         style="width:100%; background-color:transparent; text-transform: uppercase;" >
          <option>  </option>
               <option>NONE</option>
                                <option>PRIMARY</option> 
                                <option>O LEVEL</option>
                                <option>A LEVEL</option>
                                <option>TERTIARY</option>  
                                </select>
         </td>
         </tr>             
         </table> 
         
           
                <input type="hidden" name="CALLSERIALNO" id="CALLSERIALNO" value="<?php echo uniqid();?>" >
                 
           
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:40%;  border:0px;background-color:transparent;">Marital status</th>
               <td style="width:60%;border:0px;background-color:transparent;">
               <select name="MARITALSTATUS" id="MARITALSTATUS"  required="required" 
         style="width:100%; background-color:transparent; text-transform: uppercase;" >
          <option> </option>
              <option> </option>
                                <option>MARRIED</option>
                                 <option>SINGLE</option>
                                <option>SEPARATED</option>
                <option>WIDOWED</option>
                                <option>DIVORCED</option>
                <option>NO RESPONSE</option>
            </select>
         </td>
         </tr>             
         </table> 
         
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:40%;  border:0px;background-color:transparent;">Employment status</th>
               <td style="width:60%;border:0px;background-color:transparent;">
               <select name="EMPLOYMENTSTATUS" id="EMPLOYMENTSTATUS"  required="required" 
         style="width:100%; background-color:transparent; text-transform: uppercase;" >
          <option> </option> 
                <option>YES</option>
                <option>NO</option>
        </select> 
         </td>
         </tr>             
         </table> 
         
          <?php include('districts.js'); ?> 
         
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:40%;  border:0px;background-color:transparent;">District</th>
               <td style="width:60%;border:0px;background-color:transparent;">
               <select name="DISTRICT"  id="cboOptions" onChange="showDiv4('div',this)" required=" " 
         style="width:100%; background-color:transparent; text-transform: uppercase;" >
                                <option value="4">  </option> 
                                <option value="KAMPALA"> KAMPALA</option> 
                                <option value="MUKONO"> MUKONO</option>
                                <option value="WAKISO"> WAKISO</option>
                                <option value="MPIGI"> MPIGI</option>
                                <option value="KAYUNGA"> KAYUNGA</option>
                                <option value="LUWERO"> LUWERO</option>
                                <option value="BUTAMBALA"> BUTAMBALA</option>
                                <option value="NAKASEKE"> NAKASEKE</option> 
                                <option value="GOMBA"> GOMBA</option> 
                                <option value="OTHERDISTRICT"> OTHERS</option>  
                                </select> 
         </td>
         </tr>             
         </table> 
          <div id="div4" class="text" style="display:none;">  </div>
      <div id="divKAMPALA" class="text" style="display:none;"> 
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
         
         <th style="width:40%; text-align:left; border:0px;color:#d70000;">Division</th>
                 <th style="width:60%; text-align:left;border:0px;">
         <select id="DIVISION" name="DIVISION"  
                 style="text-transform: uppercase; width:100%;width:100%;background-color:transparent;" />
                         <option>  </option>
                <option>CENTRAL</option>
                <option>LUBAGA</option>
                                <option>NAKAWA</option>
                                <option>MAKINDYE</option>
                                <option>KAWEMPE</option>
                                </select>
         </th> 
      </tr>    </table> 
    
      </div>
         <div id="divMUKONO" class="text" style="display:none;">  </div>
         <div id="divWAKISO" class="text" style="display:none;">  </div>
         <div id="divMPIGI" class="text" style="display:none;">  </div>
         <div id="divKAYUNGA" class="text" style="display:none;">  </div>
         <div id="divLUWERO" class="text" style="display:none;">  </div>
         <div id="divBUTAMBALA" class="text" style="display:none;">  </div>
         <div id="divNAKASEKE" class="text" style="display:none;">  </div>
         <div id="divGOMBA" class="text" style="display:none;">  </div> 
         
         <div id="divOTHERDISTRICT" class="text" style="display:none;">   
          
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
      <thead> 
      <tr>  
          
         <th style="width:40%; text-align:left; border:0px;color:#d70000;">Specify</th>
                 <th style="width:60%; text-align:left;border:0px;">
         <input type="text" id="OTHERDISTRICTS" name="OTHERDISTRICTS"   
                        style="text-transform: uppercase;background-color:transparent; width:100%;width:100%;" /> 
         </th> 
      </tr>    </table> 
      </div>
      
         
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
                 <th style="width:20%; text-align:left; border:0px;"> Village</th> 
                 <th style="width:30%; text-align:left;border:0px;"> 
           <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE"  
           required="required" style="text-transform: uppercase;width:100%;background-color:transparent;"/>
                   </th>  
      </tr>    </table> 
      
      
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
                 <th style="width:20%; text-align:left; border:0px;">Living with</th> 
                 <th style="width:30%; text-align:left;border:0px;"> 
         <select id="LIVINGWITH" name="LIVINGWITH"  
         required="required" style="text-transform: uppercase;width:100%;background-color:transparent;"/> 
                        <option> </option>
                <option>SINGLE PARENTS</option>
                <option>BOTH PARENTS</option>
                                <option>GRAND PARENTS</option>
                                <option>GUARDIAN</option>
                <option>ALONE/SELF</option>
                                <option>AUNT</option>
                                <option>UNCLE</option> 
                                <option>BROTHER</option>
                                <option>SISTER</option>
                                <option>BOY FRIEND</option>
                <option>GIRL FRIEND</option>
                <option>FRIEND</option>
                                <option>WIFE</option>
                                <option>HUSBAND</option>
                                </select>   
            </th>
         </tr>    </table>
         
          <?php include('heard.js'); ?>  
          
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
                 <th style="width:20%; text-align:left; border:0px;">Heard about us</th> 
                 <th style="width:30%; text-align:left;border:0px;">  
         <select name="HEAREDABOUTNTIHC" id="HEAREDABOUTNTIHC" id="cboOptions" onChange="showDiv5('div',this)"
         style="text-transform: uppercase; width:100%;background-color:transparent;"/> 
                <option value="5">  </option>
                <option value="PEERS">PEERS</option>
                <option value="PARENTS">PARENTS</option>
                <option value="GUARDIAN">GUARDIAN</option>
                                <option value="HEALTH WORKER">HEALTH WORKER</option>
                                <option value="OUTREACH">OUTREACH</option>
                                <option value="EMPLOYER">EMPLOYER</option>
                                <option value="NEWS PAPER">NEWS PAPER</option>
                                <option value="RADIO">RADIO</option>
                                <option value="TV">TV</option> 
                                <option value="FRIEND">FRIEND</option>
                                <option value="IEC MATERIALS">IEC MATERIALS</option>
                                <option value="OTHERHAU">OTHERS</option>   
                                </select>
           </th> 
           </tr>    </table>  
          <p></p>    
          <div id="div5" class="text" style="display:none;">  </div> 
      <div id="divPEERS" class="text" style="display:none;">  </div>
      <div id="divPARENTS" class="text" style="display:none;">  </div>
      <div id="divGUARDIAN" class="text" style="display:none;">  </div>  
      <div id="divHEALTH WORKER" class="text" style="display:none;">  </div>
      <div id="divOUTREACH" class="text" style="display:none;">  </div>
      <div id="divEMPLOYER" class="text" style="display:none;">  </div>  
      <div id="divNEWS PAPER" class="text" style="display:none;">  </div>
      <div id="divRADIO" class="text" style="display:none;">  </div>
      <div id="divTV" class="text" style="display:none;">  </div>  
      <div id="divFRIEND" class="text" style="display:none;">  </div>
      <div id="divIEC MATERIALS" class="text" style="display:none;">  </div>  
      
          <div id="divOTHERHAU" class="text" style="display:none;"> 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
                  
         <th style="width:20%; text-align:left; border:0px; color:#d70000;">Specify</th>
                 <th style="width:30%; text-align:left;border:0px;">
         <input type="text" id="OTHERSOURCESOFINFO" name="OTHERSOURCESOFINFO"  
                        style="text-transform: uppercase; width:100%;background-color:transparent;" /> 
         </th> 
      </tr>    </table>  
      
      </div> 
      
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
         <th style="width:20%; text-align:left; border:0px;"> Heard about phone</th>
                 <th style="width:30%; text-align:left;border:0px;">
         <select id="HOWDIDYOUKNOABOUTTHISNO" name="HOWDIDYOUKNOABOUTTHISNO"    
                        style="text-transform: uppercase; width:100%;background-color:transparent;" /> 
                        <option> </option>
                        <option>PEERS</option>
                        <option>PARENTS/GUARDIAN</option>
                                <option>HEALTH WORKER</option>
                                <option>OUTREACH</option>
                                <option>EMPLOYER</option>
                                <option>NEWS PAPER</option>
                                <option>RADIO</option>
                                <option>TV</option>
                                </select> 
                        </th> 
                   </tr>    </table>  
      
      
            
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:40%;  border:0px;background-color:transparent;">User initial</th>
               <td style="width:60%;border:0px; background-color:transparent; text-transform: uppercase;">
               <input type="text" name="USERINITIAL"  id="USERINITIAL" value="<?php echo $nameofuser; ?>" required="required"  
               style="font-size:10px;width:100%; background-color:transparent; text-transform: uppercase;"> 
      </tr>             
            </table> 
             
             
               
    
     </div>
     
     
         
          
        <div class="col-sm-7">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:20%;  border:0px;background-color:transparent;">Problem description</th>
             
               <td style="width:80%;border:0px; background-color:transparent; text-transform: uppercase;">
               <textarea id="wysihtml" name="DESCRIPTION" class="form-control"  rows="2" 
               style="background-color:transparent; border:3px soloid;"></textarea> 
      </tr>             
            </table> 
               <br>
               
        <input type="button" onClick="addRow16('mytable1')" value="Add" style="border-radius:9px;"/>
     <input type="button" onClick="deleteRow16('mytable1')" value="Remove" style="border-radius:9px;" />
     <input type="hidden" id="mytable_rows1" value="0"> <p></p>
    
    <table class="table table-table table tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
       <tr>
       <th>*</th>
       <th>Problem </th>  
     <th>Category</th> 
           
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>  
  
   
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>       
               <th style="width:20%;  border:0px;background-color:transparent;">Action taken </th>
               <td style="width:30%;border:0px; background-color:transparent; text-transform: uppercase;">
               <select name="ACTIONTAKEN"   id="cboOptions" onChange="showDiv('div',this)" required="required"  
               style="font-size:10px;width:100%; background-color:transparent; text-transform: uppercase;">
               <option> </option>
               <option>COUNSEL</option>
               <option>REFER</option>
               <option>BOTH</option>
               </select>
               <th style="width:50%;  border:0px;background-color:transparent;">  </th>
            </td>
            </tr>             
            </table>
          
         
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:20%;  border:0px;background-color:transparent;">If referred; Specify referral centre </th>
             
               <td style="width:80%;border:0px; background-color:transparent; text-transform: uppercase;">
               <select name="RECOMMENDEDNEARESTHEALTHCENTRE"   id="RECOMMENDEDNEARESTHEALTHCENTRE"  
               style="font-size:10px;width:100%; background-color:transparent; text-transform: uppercase;">
                <option> </option>
                                 <option value="AIC">AIC</option>
                                 <option value="POLICE">NTIHC</option>
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
                                 <option value="NSAMBYA">NSAMBYA</option>
                                 <option value="REACHOUT MBUYA">REACHOUT MBUYA</option>
                                 <option value="TASO">TASO</option>
                                 <option value="POLICE">POLICE</option>
                                 </select>
            </td>
            </tr>             
            </table> 
        
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:20%;  border:0px;background-color:transparent;">Specify service referred for </th>
               <td style="width:80%;border:0px; background-color:transparent; text-transform: uppercase;">
               <select name="SPECIFYSERVICEREFERREDFOR"   id="SPECIFYSERVICEREFERREDFOR"   
               style="font-size:10px;width:100%; background-color:transparent; text-transform: uppercase;">
                <option > </option>
                                <option> ABDOMINAL PAIN</option>
<option> ABNORMAL VAGINAL DISCHARGE</option>
<option> ANTE-NATAL CARE</option>
<option> ART SERVICES</option>
<option> C-C SCREENING-INITIAL</option>
<option> C-C VIA SUSPICIOUS FOR CANCER</option>
<option> CONSTIPATION</option>
<option> FAMILY PLANNING</option>
<option> GBV-EMERGENCY CONTRACEPTION</option>
<option> GBV-PEP</option>
<option> GBV-STI TREATMENT</option>
<option> GENITAL ITCHYING</option>
<option> GENITAL ULCER</option>
<option> HERPES SIMPLEX</option>
<option> HERPES ZOSTA</option>
<option> HIV/AIDS</option>
<option> INFERTILITY</option>
<option> ITCHING IN GENITAL</option>
<option> JOINT PAINS</option>
<option> LOWER ABDOMINAL PAIN</option>
<option> MALARIA</option>
<option> OTHERS</option>
<option> PAINFUL GENITALS</option>
<option> PEP</option>
<option> POST- ABORTION CARE</option>
<option> POST-NATAL CARE</option>
<option> PREGNANCY TESTING</option>
<option> SKIN PROBLEM</option>
<option> SORE THROAT</option>
<option> SWELLING IN GENITALS</option>
<option> SYPHILLIS</option>
<option> URETHRAL DISCHARGE</option>
<option> URINARY TRACT INFECTION</option>
<option> VAGINAL DISCHARGE</option> 
</select>
            </td>
            </tr>             
            </table> 
            
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%"> 
     <thead> 
     <tr>
               <th style="width:20%;  border:0px;background-color:transparent;">Reason for refer </th>
               <td style="width:80%;border:0px; background-color:transparent; text-transform: uppercase;">
               <textarea name="REASONFORREFER"    
               style="font-size:10px;width:100%; background-color:transparent; text-transform: uppercase;">
              </textarea>
            </td>
            </tr>             
            </table> 
             
             <br>
             <center><input type="submit" name="button" id="button" value="Process call" 
     style=" font-weight:bold; border-radius:11px; width: 100%; height:29px;"/> </center>  
     </form> 
            </div> 
                      
       <div class="col-sm-11">      
        
        <br>
        <P style="font-size:17px; text-align:center; font-family:lcd; ">Today's caller info</P>
     
        <table id="example" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>  
                     <th style="font-size:10px;">DATE</th> 
                     <th style="font-size:10px;">CALLER NAME</th>
                     <th style="font-size:10px;">TELEPHONE</th>  
                     <th style="font-size:10px;">ACTION</th> 
           
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclientxx(myid){
var dts = myid.split("***");
document.getElementById("CALLSERIALNO").value=dts[1];
document.getElementById("myid").value=dts[0]; 
document.getElementById("PHONECONTACT").value=dts[2]; 
document.getElementById("myFIRSTNAME").value=dts[3]; 
,
}
</script>    
         
        
<?php 
include_once("updatecmgt/config.php");
  $date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  tollfree WHERE TIMESTAMP >='$date'  
                                 GROUP BY CALLSERIALNO DESC LIMIT 50");
  
  while($res = mysqli_fetch_array($result)) {
  $dts = $res['CID']."***".$res['CALLSERIALNO']."***".$res['PHONECONTACT']." ".$res['FIRSTNAME'];
    echo "<tr>";  
  echo "<td>".$res['TIMESTAMP']."</td>";   
    echo "<td>".$res['FIRSTNAME']."</td>"; 
    echo "<td>".$res['PHONECONTACT']."</td>";  
    
    echo "<td><a href=\"toll_data.php?CALLSERIALNO=$res[CALLSERIALNO]\">Update</a> </td>";  
  }
     
    ?>
  </tbody>
  </table>  

          </div> 
             
                    
     
         <div class="col-sm-11" style="background-color:transparent;">
           <br><br>
         <div class="panel-body">
         
      
       
           <BR>
           
          
   
                
    </div> </div>
    <!-- /.box-body -->

    
          </div>
          <!-- /.box --> 
        </div>
        <!-- ./col -->
                          
             
         
         <script>

          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/waiting_innerroom.php',
                       success : function(data){
                                $('#waiting_innerroom').html(data);
                                 }
               });
               }, 2000);

          </script>             
                     
          </div>
          <!-- /.box -->
        </div>
          
        <!-- /.col -->
      </div>
        
  </footer> 
 
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
    <!--END PAGE LEVEL SCRIPTS --> 
  
 <script type="text/javascript" src="admin/ ../assets/js/gauge.js"></script>
</body>
</html>
       
 <script>
   
   function calcsubtt(tableId){
       var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
      var sum = 0;
       for(var x=1; x<rowCount; x++) { //0
      // alert(table.rows[x].cells[2].childNodes[1].value);
         sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
       }
       document.getElementById("SUBTOTAL").value = ''+sum;
   
   }
   
  
  function addRow16(tableId){

   var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<select name="dnx[]" id="dnx'+rowCount+'"  autocomplete="off" required="required" '+ 
               'style= "margin-left:0px'+ 'background-color:transparent; width:100%;">'+
            '<option> </option>'+
            '<option>AIDS SYMPTOMS</option>'+
            '<option>ANGER</option>'+ 
            '<option>ART SERVICES</option>'+ 
            '<option>BODY CHANGES RELATED ISSUES</option>'+
            '<option>CAREER GUIDANCE</option>'+ 
            '<option>DEFILEMENT</option>'+ 
            '<option>FOLLOW UP</option>'+
            '<option>GBV</option>'+
            '<option>HIV/AIDS</option>'+
            '<option>HIV STATUS</option>'+
            '<option>HYGIENE</option>'+
            '<option>MASTURBATION</option>'+
            '<option>MENSTRUATION</option>'+ 
            '<option>NUTRITION</option>'+
            '<option>PREGNANCY RELATED ISSUES</option>'+
            '<option>OTHERS</option>'+ 
            '<option>RAPE</option>'+ 
            '<option>R/SHIP RELATED ISSUES</option>'+
            '<option>SEXUAL HEALTH</option>'+     
            '<option>STI RELATED ISSUES</option>'+                                  
            '</select>';
 
     var  s2bb = '<select name="fqx[]" id="fqx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:transparent;text-align:left;" >'+
                    '<option> </option>'+
                    '<option>ANC HEALTH</option>'+
                    '<option>BODY CHANGES</option>'+
                    '<option>FP CHANGES</option>'+
                    '<option>GENERAL COUNSELLING</option>'+
                    '<option>HCG</option>'+
                    '<option>HCT</option>'+
                    '<option>MEDICAL</option>'+
                    '<option>OTHERS</option>'+
                    '<option>PAC</option>'+
                    '<option>PNC</option>'+
                    '<option>SGBV</option>'+
                    '<option>STI</option>'+                
                    '<option>TOLLFREE </option>'+
                     
                    '</select>';
      
          var row      = table.insertRow(rowCount);
      var row2     = '<td><input type="checkbox" ></td>'+
                                '<td>'+s1aa+' </td>'+
                                '<td>'+s2bb+' </td>';
            row.innerHTML = row2;
          //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
  }

  function deleteRow16(tableID) {
         var table = document.getElementById(tableID);
       var rowCount = table.rows.length;
       for(var i=1; i<rowCount; i++) { //0
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
      table.rows[x].cells[1].childNodes[0].id="dnx"+x;
      table.rows[x].cells[2].childNodes[0].id="fqx"+x; 
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
       calcsubtt(tableId);
}
  </script>