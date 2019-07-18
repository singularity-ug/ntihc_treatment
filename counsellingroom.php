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
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['DRUGNAME'] . "</option>"; }
  }
$connect->close();
?>
 
  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>hct</title>
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
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [ 
      
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [ 
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
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
     {extend :'excel',
     title:' file'
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
     $('#exampex').DataTable( {
    "iDisplayLength":8,
        dom: 'Bfrtip',
        buttons: [
 
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
    border-top: 0px;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
   font-weight:normal;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;

}

             table, th , td  {
                 border: 0px;
                 border-collapse: collapse;
                 padding-left: 0px;
               padding-bottom: 0px;
              font-size: 11px;
              color:#000000;
              font-weight:normal;
             }
             table tr:nth-child(odd) {
             background-color:transparent;
             }
             table tr:nth-child(even) {
             background-color:transparent;
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
      opts[1] = ["Select reason ","AIDS SYMPTOMS","CONF. PREV. HIV STATUS","CURRENT HIV RISK","FEEL ILL","FURTHER STUDIES","ILL RELATIVE/PARTNER","LOST RELATIVE/PARTNER","NEW PARTNER","OTHERS","PAST HIV RISK","PREGNANCY","STD SYMPTOMS","TO GET MARRIED","TRAVEL ABROAD","OTHERS"];

      opts[2] = ["General topic","CAREER GUIDANCE","CULTURE","FOLLOW UP","GBV","HYGIENE","NUTRITION","OTHERS","R/SHIP WITH PARENTS","R/SHIP WITH PARTNER"
    ,"R/SHIP WITH PEERS","DRUG AND SUBSTANCE ABUSE","TRAEATMENT COMPLIANCE"]; 

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
      else{   obj.removeChild( obj.childNodes[c]);
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
<body class="hold-transition skin-blue sidebar-mini" 
 style="background:url(assets/img/pattern/4326703-white-background-wallpapero.jpg);">
<?php
  require('admin/connect/config.php');
  ?>
   

      <div class="panel-body"> 
      
   
  <div class="col-md-8" style="background-color:transparent;">  
     
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:16%; border: 0px;">  
        <img src="assets/img/ntihclog2.png"width="70" height="90" style="border: 0px; ">   
      </td>
   
      <td style="width:28%; border: 0px;"> 
     <a href="client_management.php">  
     <center><img src="assets/imgx/indexsssssss.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        Dashboard&nbsp;&nbsp;&nbsp;</center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    <p></p> 
        
    <a href="admin/reports/counselling_rtp.php?d1=0&d2=0"> 
       <center><img src="database icons/59449894425chart-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">   
        Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
   
    
   
      <td style="width:28%; border: 1px;"> <a href="regn_services.php"> 
        <center><img src="assets/imgx/kkk.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        Edit&nbsp;Services </center>    </a>
        <div class="pull-right box-tools"> </div> 
        </div>  
    <p></p>
     <a href="counsellingroom.php">
        <center><img src="database icons/clients.jpg"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
         Art&nbsp;module&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
    <td style="width:28%; border: 1px;">  <a href="counsellingroom.php">
        <center><img src="database icons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png"width="100" height="100" class=" " 
        style=" height:30px; width:30px; background-color:transparent"> 
        History </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    <p></p>
    
    <a href="index.php">
        <center><img src="database icons/delete3.jpg"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
         Logout </center>    </a>
         <div class="pull-right box-tools"> </div> 
         </div>   
     </td>   
    
   <td style="width:10%; border: 1px;">  
    </td>  
 </tbody>
 </table> 
 
  
   </div> 
  
   <div class="col-md-4" style=" background-color:transparent;">  
  
  
   </div>
   </div>
     
   <div class="col-md-3" style=" background-color:transparent;">  
   </div>
   
     
    
        
   </td>  
 </tbody>
 </table> 
  
     
    
     
    </div> </div>
    <div class="col-md-12"> 
           
    
     <div class="col-md-4">
      
            <div class="box-header with-border" style="background-color:transparent;">
              <div class="nav-tabs-custom" style="background-color:transparent;border:0px;">
            <ul class="nav nav-tabs pull-right" style="margin-top:-4px;background-color:transparent; border:0px;">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">On&nbsp;site&nbsp;
              <b class="" style="text-align: center; font-size: 15px; border-radius: 11px;width: 28%; "> 
                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP")) {
 
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
</b>
</a></li>
              <li><a href="#tab_2-2" data-toggle="tab" class="">Outreach
              &nbsp; 
              
                  <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO
                                ORDER BY NTIHCNO DESC");
        $result->execute();
        $rowcount3 = $result->rowcount(); 
       ?>
    <?php echo $rowcount3;?> 
             </a></li> 
             <li><a href="#tab_3-3" data-toggle="tab" class="">Moonlight
              &nbsp; 
              
                  <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE SERVICETYPE ='MOONLIGHT' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO
                                ORDER BY NTIHCNO DESC");
        $result->execute();
        $rowcount4 = $result->rowcount(); 
       ?>
    <?php echo $rowcount4;?> 
             </a></li>  
                 
              </ul>
              <div class="tab-content" style="background-color:transparent;">
              <div class="tab-pane active" id="tab_1-1" style="background-color:transparent;"> 
        
   <div id="dialog-window" style="background-color:transparent;height: 325px;">
   <div id="scrollable-content" style="background-color:transparent;"> 
   <ul>
                               <div class=""  id="counsellingvists" style="margin-left: -41px;font-size:10px;"></div>
                                </div> 
                                </ul>
</div>

<div id="footer" style="text-align:left; border:0px;">
</div> 

<style>
#dialog-window {
  height: 310px;
  border: 0px black solid;
  border-radius:7px;
  width:104%;
}

#scrollable-content {
  height: 310px;
  overflow: auto;
  background-color: transparent;
  width:104%;
}

#footer {
height: 0px;
}
</style>  
        
          
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2" style="background-color:transparent;"> 
              <table id="example1" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
        <thead>
        <tr>   
                  
                 <th style="background-color:transparent;">DATE</th>
           <th style="background-color:transparent;">NO.</th>
                     <th style="background-color:transparent;">CLIENT&nbsp;NAME</th>  
                     <th style="background-color:transparent;">ACTION</th>  
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dtsxxcq = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsxxcq[0];
document.getElementById("myID").value=dtsxxcq[1];  
document.getElementById("myAGE1").value=dtsxxcq[2]; 
document.getElementById("myAGEGP").value=dtsxxcq[3];
document.getElementById("mySEX").value=dtsxxcq[4];  
}
</script>    
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
  while($res = mysqli_fetch_array($result)) {
  $dtsxxcq = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['DATECREATED'];
    echo "<tr>"; 
    echo "<td>".$res['DATECREATED']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>";   
    echo '<td>     
    <a id="4091__'.$dtsxxcq.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
    <span class="glyphicon glyphicon-cog"> </span></a> &nbsp; &nbsp; 
    <a id="5091__'.$dtsxxcq.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a>  
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
        
         <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr> 
             <th style="width:39%; text-align:left; border:0px;">  <strong>Clients&nbsp;due&nbsp;for HCT / Counselling</strong></th>
       <th style="width:10%; text-align:left; border:0px;">   
       <b style="text-align:center; font-size:40px; font-size: 15px;border-radius: 11px;color:#fff;" class="button 5"> 
       <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP")) {
 
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
       </td>  
       <th style="width:2%; text-align:left; border:0px;">  </th>
       <th style="width:39%; text-align:left; border:0px;"><strong>Outreach clients due for entry</strong>  </th>
       <th style="width:10%; text-align:left; border:0px;">  
       <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;color:#fff;" class="button 5">
         <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO
                                ORDER BY NTIHCNO DESC");
        $result->execute();
        $rowcount3 = $result->rowcount(); 
       ?>
    <?php echo $rowcount3;?> 
     </b>
       </td>  
       </tr>             
             </table> 
             
         
              
              
        </div></div>
        <!-- /.col -->   
       
                
   
            <div class="col-md-8" style=" background-color:transparent;">  
              
         <div class="panel-body">
         
        <center style="color:#000; font-weight:bold; font-size:10px;font:bold 13px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">
        HCT / GENERAL COUNSELLING</center><br>
                
   
              <div class="panel-body">
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
              </div>
      
    <form class="form-horizontal" action="counsellingroom_process.php" method="post" style="height:auto;">
 
    <input type="hidden"  name="NTIHCNO"   id="myNTIHCNO" value="" >
    <input type="hidden" id="myID" name="RID">
    <input type="hidden"  name="AGE1" id="myAGE1">
    <input type="hidden" id="myRSVN" name="RSVNID"> 
    <input type="hidden" id="myAGEGP" name="AGE_GROUP">  
       
    <input type="hidden"  id="REGISTERACCOUNT" name="REGISTERACCOUNT"  value="<?php echo $rm; ?>" />
   
    <input type="hidden"  name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="COUNSELLING SERVICES" /> 
    <input type="hidden"  name="TIMEOUT" id="CHECKIN" >  
    
    <input type="hidden" id="TESTDESCRIPTION" name="TESTDESCRIPTION" value="HIV TEST" />
    
   
    <div class="col-sm-4">  
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead>  <tr> 
        <th style="width:100%;border:0px;">Client Vist Date </th>  
        </tr>
        </table>
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead>  <tr>  
        <th style="width:100%;border:0px;"> 
    <input type="date" name="DATECREATED" id="myDATECREATED" value="<?php echo date('d-m-y'); ?>" 
        required="required"  style="width:100%; font-weight:normal; background-color:transparent; height:20px;"> </th> 
        </tr>
        </table>
        <p></p>
        
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
        <?php include('addin_js/client_medical_vb.js'); ?> 
         
              <th style="width:30%;border:0px;">Vist by </th>
        <th style="width:70%;border:0px;"> <select  name="VISTBY" id="cboOptions" onChange="showDiv('div',this)"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
                                      <option value="1"> </option>
                                      <option value="SELF">SELF</option>
                                      <option value="COUPLE">COUPLE</option>
                                     <option value="ESCORTED">ESCORTED</option> 
                                     </select>      
        </th>  
        </tr>
        </table>
        <p></p>
        
          <div id="div1" class="text" style="display:none;">  </div>
      <div id="divSELF" class="text" style="display:none;">  </div>
      <div id="divCOUPLE" class="text" style="display:none;">  </div>
      <div id="divESCORTED" class="text" style="display:none;"> 
           
      <P></P>         
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr>  
          
           <th style="width:30%; text-align:left; border:0px;color:#d70000;">Specify</th>
           <th style="width:70%; text-align:left;border:0px;">
           <select  name="ESCORTEDBY" id="ESCORTEDBY" 
           style="text-transform: uppercase; width:100%; background-color:transparent;width:100%; font-size:11px;" />
       <option></option>
       <option>MOTHER</option>
       <option>FATHER</option>
       <option>UNCLE</option>
       <option>AUNT</option>
       <option>GRAND PARENT</option>
       <option>BROTHER</option>
       <option>SISTER</option>
       <option>GUARDIAN</option>
       <option>TEACHER</option>
       <option>SCHOOL MATRON</option>
       <option>SENIOR MAN</option>
       <option>SENIOR WOMAN TEACHER</option>
       <option>FRIEND</option>
       <option>HUSBAND</option>
       <option>WIFE</option>
       <option>BOY FRIEND</option>
       <option>GIRL FRIEND</option> 
       </select>
       
         </th> 
         </tr>             
         </table>    
         </div>  <P></P>
        
        
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
        <th style="width:30%;border:0px;">HCT Vist</th>
        <th style="width:70%;border:0px;"> <select  name="VISTTYPE" id="VISTTYPE"  
        required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
                                      <option></option>
                                     <option>1st TIME TESTER</option>
                                     <option>RETESTER</option> 
                                     </select>       
        </th>  
                </tr>
          </table>
        <p></p>
        
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px; text-align:left;border: 0px;" width="100%">
          <p style="font-size:11px; font-weight:bold;">REASON(S) FOR TESTING</p>
          <thead> 
          <tr>  
        <td style="width:100%;border:0px;">  
        <div id="fields1" name="fields1">   </div> 
                      <input type="hidden" class="form-control" style="width:100%; " id="values" name="values" value="0,0,0,0,0,0">
                     <input type="button"  onclick="adss(1)" value="Add" style="margin-left: 0px; "/>
                     <input type="button"  onclick="remove(1)" value="Remove" />
                       
       </td>  
       </tr>
       </table>  
     <p></p>
  
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> Counselling Notes *
          <thead> 
          <tr>  
        <th style="width:100%;border:0px;"> <textarea  name="BRIEF" id="BRIEF" value="WANTS VCT"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;"></textarea>  </th> 
          </tr>
        </table>
        
          <p></p> 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">Comment
          <thead> 
          <tr>  
        <td style="width:100%;border:0px;"> <textarea  name="COUNSELLING" id="COUNSELLING" value="PRE AND POST TEST COUNSELLING"   
          style="width:100%; font-weight:normal; background-color:transparent;"></textarea>  </td>  
              </tr>
        </table>  
 
              </div>
        
        <div class="col-sm-8" style="margin-top: 0px;"> 
        <div class="panel-body" >
         <?php include('addin_js/client_counselling_gen.js'); ?> 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead> 
          <tr>
          <td style="width:70%;border:0px;font-weight:bold;">Is General counselling required? &nbsp; *</td> 
          <td style="width:30%;border:0px;">
          <select  name="GENREQT"   id="cboOptions" onChange="showDiv01('div',this)" 
          required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option value="01"></option>
                                     <option value="NOT REQUIRED">NO</option>
                                     <option value="REQUIRED">YES</option> 
                                     </select>       
        </th>  
                </tr>
          </table>
          <div id="div01" class="text" style="display:none;">  </div> 
      <div id="divNOT REQUIRED" class="text" style="display:none;">  </div>
          
          <p></p>
          <div id="divREQUIRED" class="text" style="display:none;">   
            
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
      <thead> 
      <tr>  
      <td style="width:38%; border: 0px;font-weight:normal;">GENERAL 
                    
      </td>
   
      <td style="width:2%; border: 0px;"> 
    </td>
      
      <td style="width:60%; border: 0px;font-weight:bold;"> 
                     <div id="fields2" name="field2">   </div>
                     <input type="button"  onclick="adss(2)" value="Add "  />
                     <input type="button"  onclick="remove(2)" value=" Remove " />  
    </td>
      
      </tr>
      </thead>
      </table>
        
       <br> 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
      <thead> 
      <tr>  
      <td style="width:38%; border: 0px;font-weight:normal;">PSYCHOLOGICAL 
      </td>
   
      <td style="width:2%; border: 0px;"> 
    </td>
      
      <td style="width:60%; border: 0px;font-weight:bold;"> 
                     <div id="fields3" name="field3">   </div>
                     <input type="button"  onclick="adss(3)" value="Add " />
                     <input type="button"  onclick="remove(3)" value=" Remove " /> 
    </td>
      
      </tr>
      </thead>
      </table>
        
       <br> 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
      <thead> 
      <tr>  
      <td style="width:38%; border: 0px;font-weight:normal;">SEXUAL HEALTH 
                    
      </td>
   
      <td style="width:2%; border: 0px;"> 
    </td>
      
      <td style="width:60%; border: 0px;font-weight:bold;"> 
                      <div id="fields4" name="field4">   </div>
                     <input type="button"  onclick="adss(4)" value="Add " />
                     <input type="button"  onclick="remove(4)" value=" Remove " />
    </td>
      
      </tr>
      </thead>
      </table>  
       <br>
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
      <thead> 
      <tr>  
      <td style="width:38%; border: 0px;font-weight:normal;">STDs  
      </td>
   
      <td style="width:2%; border: 0px;"> 
    </td>
      
      <td style="width:60%; border: 0px;font-weight:bold;"> 
                     <div id="fields5" name="field5">   </div>
                     <input type="button"  onclick="adss(5)" value="Add "/>
                     <input type="button"  onclick="remove(5)" value=" Remove "/>
    </td>
      
      </tr>
      </thead>
      </table>      
        <br>  
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
      <thead> 
      <tr>  
      <td style="width:38%; border: 0px;font-weight:normal;">BODY CHANGES
                     
      </td>
   
      <td style="width:2%; border: 0px;"> 
    </td>
      
      <td style="width:60%; border: 0px;font-weight:bold;">
      <div id="fields6" name="field6">   </div>
                     <input type="button"  onclick="adss(6)" value="Add " />
                     <input type="button"  onclick="remove(6)" value=" Remove " />
    </td>
      
      </tr>
      </thead>
      </table>  
     
      </div>
        
         <p></p> 
           
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead> 
          <tr>
          <td style="width:70%;border:0px;font-weight:bold;">Deactivate HCT test if not required &nbsp; *</td> 
          <td style="width:30%;border:0px;">
          <select  name="HCTURGENCY" id="HCTURGENCY"  
          required="required"  style="width:100%; font-weight:normal; background-color:transparent;">  
                                     <option value="HCT WANTED">ACTIVE</option>
                                     <option value="NOT REQUIRED">DEACTIVATE</option> 
                                     </select>       
        </th>  
                </tr>
          </table> 
          <P></P>
          </div>
          
          <div class="panel-body" style="    font-weight: normal; font-size: ;  width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
        
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Pre-Test Counselling done / information given</td> 
          <td style="width:30%;border:0px;">
          <select  name="PRE_TESTCOUSELLING_GIVEN" id="PRE_TESTCOUSELLING_GIVEN"  
           style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>NO</option>
                                     <option>YES</option> 
                                     </select>       
           </th>    </tr>  </table>  
        
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Counselled as </td> 
          <td style="width:30%;border:0px;">
          <select  name="COUNSELLED_AS" id="COUNSELLED_AS"  
           style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>INDIVIDUAL</option>
                                     <option>COUPLE</option> 
                                     <option>GROUP</option>
                                     </select>       
           </th>    </tr>  </table>  
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr> 
        <th style="width:70%;border:0px;">HCT Entry Point</th>
        <th style="width:30%;border:0px;"> <select  name="HCT_ENTRYPOINT" id="HCT_ENTRYPOINT" 
         style="width:100%; font-weight:normal; background-color:transparent;"> 
                 <option value="-1"> </option>
                                <option>FACILITY BASED</option>
                                <option>WORK PLACE</option>
                                <option>HBHCT</option>
                                <option>FOR PREGNANT</option>
                                <option>PMTCT</option>
                                <option>PEP</option>
                                <option>CIRCUMCISION (SMC)</option>
                                <option>MARPS</option>
                                <option>OUTREACH</option>
                                </select>
        </th>  
        </tr>
        </table> 
        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Have you ever Tested for HIV before? </td> 
          <td style="width:30%;border:0px;">
          <select  name="EVERTESTEDBEFORE" id="EVERTESTEDBEFORE"  
            style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>YES</option>
                                     <option>NO</option>  
                                     </select>       
           </th>    </tr>  </table>  
            
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">How many times have you tested in the last 12 months. </td> 
          <td style="width:30%;border:0px;">
          <input type="number"  name="NUMBEROFTESTS" id="NUMBEROFTESTS"  
           style="width:100%; font-weight:normal; background-color:transparent;">         
           </th>    </tr>  </table>  
            
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Number of sexual partners in the last 12 months. </td> 
          <td style="width:30%;border:0px;">
          <input type="number"  name="NUMBEROFSEXUALPARTNERS" id="NUMBEROFSEXUALPARTNERS"  
           style="width:100%; font-weight:normal; background-color:transparent;">         
           </th>    </tr>  </table>  <p></p>
           
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">What was the test results last time you Tested?.</td> 
          <td style="width:30%;border:0px;">
          <select  name="LAST_TESTRESULTS" id="LAST_TESTRESULTS"  
            style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>NEVER TESTED</option>
                                     <option>NEGATIVE</option>
                                     <option>POSITIVE</option>  
                                     </select>       
           </th>    </tr>  </table> <p></p>
            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Has your Partner / Spouse been tested for HIV before?</td> 
          <td style="width:30%;border:0px;">
          <select  name="SPOUSE_PARTNERTESTED_BEFORE" id="SPOUSE_PARTNERTESTED_BEFORE"  
           style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>NO</option>
                                     <option>YES</option> 
                                     <option>DO NOT KNOW</option> 
                                     </select>       
           </th>    </tr>  </table> 
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">If yes what were the results?</td> 
          <td style="width:30%;border:0px;">
          <select  name="IFYES_RESULTS" id="IFYES_RESULTS"  
         style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>NEGATIVE</option>
                                     <option>POSITIVE</option>  
                                     <option>DO NOT KNOW</option> 
                                     </select>       
           </th>    </tr>  </table> <p></p>
           
            
        </div> </div>
         
          <div class="col-sm-6" style=" background-color:transparent;"> <br> 
          
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
           <thead> 
           <tr> 
        <td style="width:30%;border:0px; background-color:transparent;"><b>Other</b> services </td>
        <td style="width:75%;border:0px;"> <select name="SERVICEEXTENTION" id="SERVICEEXTENTION"
        style="width:100%; font-weight:normal; background-color:transparent;">
                                              <option> NOT REQUIRED </option>
                                              <option> COUNSELLING</option>
                                                    <option> MEDICAL </option>
                                                    <option> PAC </option>
                          <option> ANC</option>
                                                    <option> FP </option>
                          <option> PNC</option>
                                                    </select>
              </tr>
        </table>
 <p></p>
          
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead>  
    <tr>  
        <td style="width:30%;border:0px; font-weight:bold;">Check&nbsp;out </td>  
        <td style="width:40%;border:0px;"> 
        <input type="radio" name="OUTSVSTATUS" id="OUTSVSTATUS" value="IN SESSION" checked>IN&nbsp;SESSION</td> 
        <td style="width:30%;border:0px;"> 
        <input type="radio" name="OUTSVSTATUS"  id="OUTSVSTATUS" value="CHECKED OUT">&nbsp;&nbsp;YES  </td> 
       </tr>
       </table>    
     </div>
     
     <div class="col-sm-6" style=" background-color:transparent;"> <br>
         
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead>  
    <tr>  
        <td style="width:30%;border:0px;background-color:transparent;">User initials  </td>
        <td style="width:70%;border:0px;">  <input type="text" name="USERINITIAL" id="USERINITIAL" value="<?php echo $nameofuser; ?>"  
        readonly="" style="width:100%; font-weight:normal; background-color:transparent;"> 
       </td>
       </tr>
       </table> 
       
       <p></p> 
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; 
         font-size: 12px;  border: 0px;text-align:left;" width="100%">
         <thead>  
         <tr>  
        <td style="width:30%;border:0px;background-color:transparent;">Service provider </td>
        <td style="width:70%;border:0px;"> <Select id="SERVICEPROVIDER" name="SERVICEPROVIDER" required="required" 
        style="width:100%; font-weight:normal; background-color:transparent;">
                                              <option> </option>
                                              <option>TULINA LINDA </option>
                                              <option>NABOSSA REBECCA </option>
                                              <option>NABADDA SHAMIM </option>
                                              <option>NAMUDDU PROSSY</option>
                                              <option>BYAMUGISHA MARTIN</option>
                                              <option>NAKIWANUKA REBECCA</option>
                                              <option>NAKIYEMBA MADINAH</option>
                                              <option>MUBIRU ESTHER</option>
                                              </select>
       </td>
       </tr>
       </table>  </div>  </div>
       
           
            <center> <input type="submit" name="button" id="button" value="Save " style= "border-radius:11px;"/> </center>
          </form>

      </div>  
                
         </div>        
         <div class="col-sm-12">
     <div class="panel-body">
         
          <ul class="nav nav-tabs"> 
      <div class="col-sm-4">
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
      <td style="width:33.333333%; border: 0px; background-color:transparent;">    <a data-toggle="tab" href="#tab1a">
       <center><img src="database icons/queue-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> <br>
        <a href="client_management.php">Lab results <b class="data-taggle" class="tooltip" title="No. of clients due for medical services">
    &nbsp; 
    </a> </b>
     
    </center>   </a> 
    </td> 
   
   <td style="width:33.333333%;border: 0px ; background-color:transparent;">  
     <a data-toggle="tab" href="#tab2a">   
                                                                       
       <center><img src="database icons/press-nozbe.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> <br> 
         In-referals &nbsp;
      <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                                                       AND SERVICEEXTENTIONSTATUS ='NULL'  
                                                                       AND SERVICEEXTENTION = 'COUNSELLING'  GROUP BY NTIHCNO");
        $result->execute();
        $rowcount5Z = $result->rowcount(); 
       ?>
         <?php echo $rowcount5Z;?>
 <center></a> 
     
  </td>
  <td style="width:33.333333%;border:0px ; background-color:transparent;"> 
   <a data-toggle="tab" href="#tab3a">
          <center><img src="database icons/images.jpg"width="100" height="100" class="" data-toggle="tooltip" title="Current HCT service list"
          style=" height:30px; width:30px; background-color:transparent"> <br>
          Outreach&nbsp;
       <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' 
        AND INSVCSTATUS ='NO' GROUP BY NTIHCNO
                                ORDER BY NTIHCNO DESC");
        $result->execute();
        $rowcount3 = $result->rowcount(); 
       ?>
    <?php echo $rowcount3;?>
      </center></a> 
         
   </td>  
 </tbody>
 </table>
   </ul>  
   </div> <div class="col-sm-8"> </div>
        <div class="panel-body">  
        <div class="widget-content tab-content" style="border:0px;" >  
            <div id="tab1a" class="tab-pane active"> 
      
      <div class="col-sm-4">
       <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr> 
             <th style="width:39%; text-align:left; border:0px;">  <strong>Pending&nbsp;lab requests</strong></th>
       <th style="width:10%; text-align:left; border:0px;">   
       <b data-toggle="tooltip" title="All sent requests" style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px; color:#fff;" class="button 5"> 

<?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM cmpatientsregistration  WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='NOT STARTED' AND HCT ='1' AND LABVIST ='1'
                                          GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
       </td>  
       <th style="width:2%; text-align:left; border:0px;">  </th>
       <th style="width:39%; text-align:left; border:0px;"><strong>Completed&nbsp;lab orders due for PTC</strong>  </th>
       <th style="width:10%; text-align:left; border:0px;">  
       <b data-toggle="tooltip" title="All completed results" style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;color:#fff;" class="button 5">
       <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='COMPLETED' AND HCT ='1' AND LABVIST ='1' AND LABRESULTREVIEW ='NOTAPPLICABLE'
                                   GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
     </b>
       </td>  
       </tr>             
             </table> 
    </div></div>
    <div class="col-sm-8"></div>
    <br>
    <div class="col-sm-12"> <br>            
       <table id="examplejosexp" class="table table-stripped table-bordered" 
     style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
          <th>VIST&nbsp;DATE</th> 
        <th>CLIENT&nbsp;NAME</th> 
        <th>NTIHC&nbsp;NO.</th> 
              <th>AGE</th>
        <th>HCT</th>
        <th>LAB&nbsp;VIST</th>
        <th>GENERAL&nbsp;(C)</th>
        <th>SERVICE&nbsp;PROVIDER</th> 
              <th>LAB&nbsp;TECHNICIAN</th> 
              <th style="text-align:center;">VIEW</th>
        <th style="text-align:center;">PTC</th> 
        <th style="text-align:center;">RESULTS</th>     
           </tr>
         
        </tfoot> 
        <tbody> 
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';  
     
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='COMPLETED' AND HCT ='1' AND LABVIST ='1' 
                   AND LABRESULTREVIEW ='NOTAPPLICABLE'
                                          GROUP BY NTIHCNO ORDER BY DATECREATED ASC ");
  
  while($res = mysqli_fetch_array($result)) {
  $dtsget = $res['DATECREATED']."***".$res['NTIHCNO']."***".$res['NTIHCNO']."***".$res['DATECREATED'];
    echo "<tr>";  
    echo "<td>".$res['DATECREATED']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>";  
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['AGE1']."</td>"; 
    echo "<td>".$res['HCT']."</td>"; 
    echo "<td>".$res['LABVISTSDONE']."</td>"; 
    echo "<td>".$res['GENERALCOUNSELLING']."</td>"; 
    echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
    echo "<td>".$res['TECHNICIANNAME']."</td>";  
    echo '<td>  &nbsp;   &nbsp;  &nbsp; 
    <a id="5__'.$dtsget.'" href="javascript:void(0)"  onclick="getvistdata(this.id)" data-toggle="tooltip" title="View" 
    <span class="glyphicon glyphicon-ok"> </span></a> &nbsp;&nbsp; 
    </td>';  
    echo "<td><a href=\"counsellingroom_hist_episode.php?NTIHCNO=$res[NTIHCNO]\">CLICK</a>  </td>";  
    echo "<td><a href=\"medical/print_hctresults.php?NTIHCNO=$res[NTIHCNO]\">PRINT</a>  </td>";       
  }
     
    ?>
  </tbody>
  </table>  
      
  
            <br> 
   <center>
     <a href="counsellingroom.php">
        <center><img src="database icons/press-nozbe.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        Find new results </center>    </a>
     </center>
  
      
            </div></div>
            <div id="tab2a" class="tab-pane"> 
          <p>Internal referrals / Clients recommended for HCT / General Counselling</p>
         <table id="examplemania" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
        <thead>
        <tr>   
                  
                 <th style="background-color:transparent;">VIST DATE</th>
           <th style="background-color:transparent;">NTIHC.NO</th>
                     <th style="background-color:transparent;">CLIENT&nbsp;NAME</th> 
           <th style="background-color:transparent;">REQUESTING&nbsp;UNIT</th>
           <th style="background-color:transparent;">SENT&nbsp;BY</th>
           <th style="background-color:transparent;">TIME&nbsp;IN</th>
                     <th style="background-color:transparent; text-align:center;">SERVICE</th> 
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dtexplosion = myid.split("***");
document.getElementById("myNTIHCNO").value=dtexplosion[0];
document.getElementById("myID").value=dtexplosion[1];  
document.getElementById("myAGE1").value=dtexplosion[2]; 
document.getElementById("myAGEGP").value=dtexplosion[3];
document.getElementById("mySEX").value=dtexplosion[4]; 
}
</script>    
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                                                       AND SERVICEEXTENTIONSTATUS ='NULL'  
                                                                       AND SERVICEEXTENTION = 'COUNSELLING' 
                                     GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
  while($res = mysqli_fetch_array($result)) {
  $dtexplosion = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['DATECREATED'];
    echo "<tr>"; 
    echo "<td>".$res['DATECREATED']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>"; 
    echo "<td>".$res['INSVCSTATUS']."</td>"; 
    echo "<td>".$res['USERINITIAL']."</td>"; 
    echo "<td>".$res['TIMEOUT']."</td>";
    
    echo '<td> &nbsp; &nbsp; &nbsp;  
    <a id="114__'.$dtexplosion.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
    <span class="glyphicon glyphicon-ok"> </span></a> &nbsp; &nbsp; &nbsp; 
    <a id="115__'.$dtexplosion.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a>&nbsp;  
    </td>';     
  }
     
    ?>
  </tbody>
  </table> 
       
            </div>
            <div id="tab3a" class="tab-pane">
        List of clients processed for outreach services
             <table id="exampleoutreach" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
        <thead>
        <tr>   
                  
                 <th style="background-color:transparent;">VIST DATE</th>
           <th style="background-color:transparent;">NTIHC.NO</th>
                     <th style="background-color:transparent;">CLIENT&nbsp;NAME</th> 
            
           <th style="background-color:transparent;">SERVICE&nbsp;INFO</th>
           <th style="background-color:transparent;">PROCESSED&nbsp;BY</th>
                     <th style="background-color:transparent;">TIME&nbsp;IN</th>  
                     <th style="background-color:transparent;">ACTION</th>  
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dtsxxcq = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsxxcq[0];
document.getElementById("myID").value=dtsxxcq[1];  
document.getElementById("myAGE1").value=dtsxxcq[2]; 
document.getElementById("myAGEGP").value=dtsxxcq[3];
document.getElementById("mySEX").value=dtsxxcq[4]; 
document.getElementById("myRSVNID").value=dtsxxcq[5]; 
}
</script>    
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
  while($res = mysqli_fetch_array($result)) {
  $dtsxxcq = $res['RID']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']."***".$res['DATECREATED'];
    echo "<tr>"; 
    echo "<td>".$res['DATECREATED']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>";   
    echo "<td>".$res['SERVICETYPE']."</td>";
    echo "<td>".$res['USERINITIAL']."</td>";
    echo "<td>".$res['CHECKIN']."</td>";
     echo "<td><a href=\"counsellingroom_hist_outreach.php?NTIHCNO=$res[NTIHCNO]\">Add HCT details</a>  </td>";       
  }
     
    ?>
  </tbody>
    </table>  
          </div>  
    
    </div></div></div>
         
         
         </div>
        
       
        </div> </div>
              </div> 
                 
                   
   
   
    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: 1000px; margin-left: -220px;">
                                        <div class="modal-header" style="background-color:transparent;" >
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
                        <div class="modal" id="impres5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                         
                         
                                
                 
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="imp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 <form>
      
           <div class=""  id="getallhistory" >  </div> 
                <script>

          function getallhistory(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/medical_gethist.php?q='+odno,
                       success : function(data){
                                $('#getallhistory').html(data);
                $("#imp").modal("show");
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
                    </div>
    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->
  <div class="col-sm-12" style="height:40px; background-color:transparent;"  >
  <!-- Control Sidebar -->
   

<!-- jQuery 2.2.3 --> 
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
