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
  <title>Admin cpanel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css"> 
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="assets/notifier2.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="datatable/css/buttons.dataTables.min.css">

  <script src="datatable/js/jquery-1.12.3.js"></script>
  <script src="datatable/js/jquery.dataTables.min.js"></script>
  <script src="datatable/js/bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.buttons.min.js"></script>
  <script src="datatable/js/buttons.flash.min.js"></script>
  <script src="datatable/js/jszip.min.js"></script>
  <script src="datatable/js/pdfmake.min.js"></script>
  <script src="datatable/js/vfs_fonts.js"></script>
  <script src="datatable/js/buttons.html5.min.js"></script>
  <script src="datatable/js/buttons.print.min.js"></script>

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
     $('#example1ot').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [ 
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exampleoutex').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [ 
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
     $('#exampleout').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
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
    border-top: 0px solid transparent;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
} 
.progress{
  vertical-align:center;
  margin-bottom: 0px;
} 
                 table, th , td  {
                 border: 0px solid transparent;
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
<body class="hold-transition skin-blue sidebar-mini" style="background:url(assets/img/pattern/4326703-white-background-wallpapero.jpg);">
     
  <?php
  require('admin/connect/config.php');
  ?>
  
 <!--?php
 require('v2/header_cm.php');
 ?-->
   
 
       
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
	   <center><img src="databaseicons/Medical-54-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        Dashboard&nbsp;&nbsp;&nbsp;</center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		<a href="reports/prescription.php?d1=0&d2=0"> 
       <center><img src="databaseicons/59449894425chart-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">   
        Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
   
      <td style="width:28%; border: 1px;"> <a href="abortioncare.php">
        <center><img src="databaseicons/social_network-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        PAC&nbsp;&nbsp; </center>    </a>
        <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		<a href="postnatalcare.php">
        <center><img src="databaseicons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        PNC&nbsp;&nbsp; </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
		 
	  <td style="width:28%; border: 1px;">  <a href="index.php">
        <center><img src="databaseicons/icon-processmanagement.png"width="100" height="100" class=" " style=" height:30px; width:40px; background-color:transparent"> 
        Enrollment </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		
		<a href="index.php">
        <center><img src="databaseicons/switchb1.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        Logout&nbsp;&nbsp; </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>   
    
   <td style="width:10%; border: 1px;">  
    </td>  
 </tbody>
 </table> 
 
  
   </div> 
  
   h>
 
   <td style="border:2px solid #ecf0f5;"> </th> 
   <td style="border:2px solid #ecf0f5;"> </th>
   
   <td style="border:2px solid #ecf0f5;"> Adhere  </th>
   <td style="border:2px solid #ecf0f5;">/why </th> 
    <td style="border:2px solid #ecf0f5;"> </th>
   <td style="border:2px solid #ecf0f5;"> </th>
   <td style="border:2px solid #ecf0f5;">  </th> 
   <td style="border:2px solid #ecf0f5;"> </th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="DATECREATED" id="DATECREATED" value="<?php echo date('Y-m-d'); ?>" style="width:100%; text-align:left;background-color:transparent;">
	<input type="radio" name="art2" value="deactive" checked="checked">
	<label>OFF</label>
	<input type="radio" name="art2" value="Active">
	<label>ON</label>
    </td>   
			     
    <td style="border:2px solid transparent;"><input type="date" name="art3" id="art3"    
    style="width:100%; text-align:left;background-color:transparent;"></td> 
     
	  
     
	<td style="border:2px solid transparent;">
	<input type="text" name="art4" id="art4"  style="width:100%; text-align:left;background-color:transparent;">
    <input type="text" name="art5" id="art5"  style="width:100%; text-align:left;background-color:transparent; height:20px;">
   </td>   
			     
    <td style="border:2px solid transparent;">
	<input type="numeric" name="art6" id="art6"  style="width:100%; text-align:left;background-color:transparent;">
	<input type="text" name="art7" id="art7"  style="width:100%; text-align:left;background-color:transparent;">
	<input type="text" name="art8" id="art8" style="width:100%; text-align:left;background-color:transparent;">
	</td> 
     
	 		     
    
	<td style="border:2px solid transparent;">
	<input type="numeric" name="art9" id="art9" style="width:100%; text-align:left;background-color:transparent;">
	<input type="text" name="art10" id="art10"  style="width:100%; text-align:left;background-color:transparent;">
	<input type="text" name="art11" id="art11"  style="width:100%; text-align:left;background-color:transparent;">
	</td> 
     
	<td style="border:2px solid transparent;">
   <input type="text" name="art12" id="art12" style="width:100%; text-align:left;background-color:transparent; height:20px;">
   <input type="text" name="art13" id="art13"   style="width:100%; text-align:left;background-color:transparent;">
   <input type="text" name="art14" id="art14"   style="width:100%; text-align:left;background-color:transparent;">
   </td>   
			     
    
	<td style="border:2px solid transparent;">
	<textarea name="art15" id="art15" style="width:100%; text-align:left;background-color:transparent;height:20px;"></textarea></td> 
      
	  
   <td style="border:2px solid transparent;">
   <textarea name="art16" id="art16"  
   style="width:100%; text-align:left;background-color:transparent; height:20px;"></textarea>
   
   </td>   
			     
    
	<td style="border:2px solid transparent;"><select  name="art17" id="art17"    
    style="width:100%; text-align:left;background-color:transparent;">
   <option></option>
   <option>G</option>
   <option>F</option>
   <option>P</option>
   </select> 
	</td> 
     
   <td style="border:2px solid transparent;">
   <select name="art18" id="art18" style="width:100%; text-align:left;background-color:transparent; height:20px;"> 
   <option></option>
   <option>i</option>
   <option>ii</option>
   <option>iii</option>
   <option>iv</option>
   <option>Ti</option>
   <option>T2</option>
   <option>T3</option>
   <option>T4</option>
   </select>
   </td>   
			     
    
	<td style="border:2px solid transparent;"><select name="art19" id="art19"    
    style="width:100%; text-align:left;background-color:transparent;"> 
	 <option></option>
   <option>G</option>
   <option>F</option>
   <option>P</option>
   </select> 
	</td>  
    
	<td style="border:2px solid transparent;"><select type="numeric" name="art20" id="art20"    
    style="width:100%; text-align:left;background-color:transparent;">
	<option></option>
	<option>G</option>
	<option>F</option>
	<option>P</option>
	</select> 
	</td> 
     
	<td style="border:2px solid transparent;">
    <input type="number" name="art21" id="art21" style="width:100%; text-align:left;background-color:transparent; height:20px;">
   </td>   
			     
    
	<td style="border:2px solid transparent;">
	<input type="numeric" name="art22" id="art22" style="width:100%; text-align:left;background-color:transparent;"></td> 
     
	<td style="border:2px solid transparent;">
    <input type="text" name="art23" id="art23" style="width:100%; text-align:left;background-color:transparent; height:20px;">
    </td>   
			     
	<td style="border:2px solid transparent;">
	<input type="numeric" name="art24" id="art24" style="width:100%; text-align:left;background-color:transparent;"></td> 
	
	<td style="border:2px solid transparent;">
	<input type="numeric" name="art25" id="art25" style="width:100%; text-align:left;background-color:transparent;"></td>
                				                        
   </tr>
  <tr>
 </tbody>
 </table> 
		 </div>	
			  
	   
		 <center> <input type="submit" name="button" id="button" value="Save " 
		style= " font-size:15px;  border-radius:11px;"/> </center><br>
		</div>    
		 
 </div></div></div></div></div>
   
 
 
                                                                                    

       
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
  
  <!-- Control Sidebar -->


<!-- jQuery 2.2.3 -->

<script src="assets/lib/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
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
       
      var selects = '<select  name="c_'+rowCount+'" id="c_'+rowCount+'" required="required" '+
                    'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:transparent;" >'+
             		'<option> </option>'+
                    '<option>GENERAL</option>'+
                    '<option>ART</option>'+
             	    '<option>PREGNANCY</option>'+
             		'<option>STI</option>'+
			        '<option>SGBV</option>'+
                    '<option>BODY CHANGES</option>'+
             		'<option>SEXUAL HEALTH</option>'+
                    '</select>';
					

     var s1 = '<select  name="p_'+rowCount+'" id="p_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >'+
             		                        '<option> </option>'+
											'<optgroup label="M.E UNIT"> </option>'+ 
                                            '<option>ABDOMINAL PAIN</option>'+
                                            '<option>ABNORMAL VAGINAL DISCHARGE</option>'+
                                            '<option>ANTE-NATAL CARE</option>'+
											'</optgroup>'+
                                            
                                            '<option>WET DREAMS</option>'+ 
                                            '</Select>';

       
					
					
     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+selects+' </td>'+
               '<td>'+s1+'</td>';

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

    function  dostg(thisid){

     var val = thisid.split("_")[1]; 
	 var v1 = parseFloat(document.getElementById("fq_"+val).value); 

	 var v4 = v1;
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

	 var fq = '<input type="hidden" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="fq_'+rowCount+'" id="fq_'+rowCount+'"  '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';
 

	 var qty = '<input type="hidden" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qty_'+rowCount+'" id="qty_'+rowCount+'" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';


     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+s1+' </td>'+
			   '<td>'+fq+' </td>'+ 
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
          table.rows[x].cells[2].childNodes[0].id="c_"+x; 
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
		   
          table.rows[x].cells[3].childNodes[0].id="qty_"+x;
		  table.rows[x].cells[3].childNodes[0].name="qty_"+x;

          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}


  </script>

 
 </body>
 </html>
