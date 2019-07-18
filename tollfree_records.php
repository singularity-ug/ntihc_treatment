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
     $('#hagy').DataTable( {
    "iDisplayLength": 50,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' TollFree Data'
    },
    {extend :'pdf',
     title:'TollFree Data '
    },
    {extend :'print',
     title:'TollFree Data'
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

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PHONECONTACT"+num).val(data[2]);
  $("#FIRSTNAME").val(data[2]);
  $("#SEX").val(data[3]);
  $("#AGE").val(data[4]); 
  $("#SCHOOLINGSTATUS").val(data[5]);     
   
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
   <td style="width:25%; border: 1px;"> <a href="tollfree.php">  
      <img src="assets/imgx/index.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
       Home&nbsp;page </a>
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
        
                      
       <div class="col-sm-11">      
         
        <P style="font-size:17px; text-align:center; font-family:lcd; ">Caller's Data </P>
     
        <table id="hagy" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
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
$result = mysqli_query($mysqli, "SELECT * FROM  tollfree GROUP BY CALLSERIALNO DESC");
  
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
               'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">'+
            '<option> </option>'+
            '<option>AIDS SYMPTOMS</option>'+
            '<option>HIV STATUS</option>'+ 
            '<option>STI RELATED ISSUES</option>'+
            '<option>PREGNANCY RELATED ISSUES</option>'+  
            '<option>CAREER GUIDANCE</option>'+ 
            '<option>FOLLOW UP</option>'+
            '<option>GBV</option>'+
            '<option>HYGIENE</option>'+
            '<option>NUTRITION</option>'+ 
            '<option>R/SHIP RELATED ISSUES</option>'+ 
            '<option>ANGER</option>'+ 
            '<option>DEFILEMENT</option>'+  
            '<option>ART SERVICES</option>'+ 
            '<option>RAPE</option>'+ 
            '<option>HIV/AIDS</option>'+
            '<option>SEXUAL HEALTH</option>'+ 
            '<option>BODY CHANGES RELATED ISSUES</option>'+ 
            '<option>MASTURBATION</option>'+
            '</select>';
 
     var  s2bb = '<select name="fqx[]" id="fqx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"'+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >'+
                    '<option> </option>'+
                    '<option>HCT</option>'+
                    '<option>STI</option>'+
                    '<option>MEDICAL</option>'+
                    '<option>HCG</option>'+
                    '<option>FP CHANGES</option>'+
                    '<option>ANCHEALTH</option>'+ 
                    '<option>PNC</option>'+
                    '<option>PAC</option>'+
                    '<option>GENERAL COUNSELLING</option>'+
                    '<option>TOLLFREE </option>'+
                    '<option>SGBV</option>'+ 
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