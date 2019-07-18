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
  <title>Ntihc </title>
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
     $('#appraistk').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' Appraisal'
		},
		{extend :'pdf',
		 title:'Appraisal '
		},
		{extend :'print',
		 title:'Appraisal'
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#times').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TIME SHEET'
		},
		{extend :'pdf',
		 title:'TIME SHEET'
		},
		{extend :'print',
		 title:'TIME SHEET'
		}
        ]
    } );
  } );
  </script>
<script>
  $(document).ready(function() {
     $('#exaconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
  
  
  
<script>
  $(document).ready(function() {
     $('#exstaffconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'STAFF CONTACTS '
		},
		{extend :'print',
		 title:' STAFF CONTACTS'
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

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTR").val(data[4]);
  $("#SECONDQTR").val(data[5]);
  $("#THIRDQTR").val(data[6]);
  $("#FOURTHQTR").val(data[7]);
  $("#BUDGETAMOUNT").val(data[8]); 
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

 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border: 1px solid #000;
    line-height: 1.0;
    padding: 2px;
    vertical-align: center;
	
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #000;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
             	color:#000000;
				font-weight:normal;
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

    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" font style=" font:bold 18px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;margin-top: 10px;">Human resource module</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
           <li class="active"><a href="individual_report.php" class="" >Back<span class="sr-only">(current)</span></a></li> 
   
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> Logout</li></a>
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
 

 
  <!-- Content Wrapper. Contains page content --> 
    <!-- Content Header (Page header) -->
    <section class="content-header">  
    </section>
 
              
      <div class ="container-fluid" style="width:90%; height:100%; border: 1px #f8f1f1 solid;border-radius: 4px;" >
      <div class="row">
      <div class="col-sm-12">
         
          <link rel="stylesheet" type="text/css" href="css/style1.css">
<center>
      
    <div id="print" style="border: 1px solid; width: 80%; height: auto;">
        <div class="report-title" style = "margin:10px;"><br/>
            <div class="print-logo">
              <img src="../hrm_home/img/logsbigxt.PNG"  width="100%" height="100%">   
  
          <font style=" font-weight:bold; color:#000; font-size:11px;"><center>INDIVIDUAL PROFILE</center></font>
          <br> 
            <center><strong>As of <?php echo date('F Y'); ?></strong></center>
        </div>
        <br /> 
            <style>
	table {
			width: 70%;
			text-align: center;
		}
		td {
			padding:10px;
		}
	</style>
    
    

<?php
  $id = $_GET['id'];   
  $Serial = '';
  $BIRTHDATE = '';
  $TIMESTAMP  = '';
    
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ahr";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM staffcontacts WHERE `id` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){ 
     $TIMESTAMP = $row['TIMESTAMP'];
     $Serial = $row['Serial'];
     $BIRTHDATE = $row['DATECREATED'];
     $id  = $row['id']; 
      }

  ?>
	 
                    <?php
					$a=mysqli_query($conn,"select * from staffcontacts WHERE `id` = '$id'");
					$arow=mysqli_fetch_array($a); 
					$b=mysqli_query($conn,"select * from appraisal_b WHERE `id` = '$id'");
					$brow=mysqli_fetch_array($a);  
				   ?>    
          
            <table id = "example" class = "stripe order-table" cellspacing = "0" style="margin: 10px;">
                <tr>
		<td colspan = "4" class = "page-header"> I. Personal Information</td>	
		</tr>
		<tr>
			<td>
             <input name="id" type="hidden" value="<?php  echo $id; ?>"  />
             
			<label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Last Name		
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			First Name
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Middle Name
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Name Extension
			</td>
		</tr>
			<tr>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Date of Birth		
			</td>
			<td colspan = "3">
			<label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Address
			</td>
		</tr>
		<tr>
			<td colspan = "3">
			<label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Place of Birth
			</td>
			<<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Contact No.		
			</td>
		</tr>
		<tr>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Sex		
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Civil Status		
			</td>
		</tr>
		<tr>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Pag-ibig No.		
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			GSIS No.		
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			TIN No.		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Plantilla No.		
			</td>
			<td>
			 
			<label><?php echo $arow['FIRSTNAME']; ?></label>
	 
			<br>
			Position
		
			</td>
			<td>
			 
			<label> </label>
			 
			<br>
			Rank	
			</td>
			<td>
			 
			<label> </label>
 
			<br>
			Department
		
			</td>
		</tr>
		<tr>
			<td><label> </label>
			<br>
			Date of Appointment		
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan = "4" class = "page-header">Educational Background</label>
		</tr>
		<tr>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Bachelor's Degree	
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Year	
			</td>
			<td colspan = "2"><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			School	
			</td>
		</tr>
		<tr>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Master's Degree	
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Year	
			</td>
			<td colspan = "2"><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			School	
			</td>
		</tr>
		<tr>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Doctoral Degree		
			</td>
			<td><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			Year	
			</td>
			<td colspan = "2"><label><?php echo $arow['FIRSTNAME']; ?></label>
			<br>
			School	
			</td>
		</tr>
	</table>
	 
                <br><br> 
                <div class="noted">
                    <label>Prepared by:</label>
                    <br>
                    <br>
                    <label style="text-transform: uppercase;"><strong><?php  echo $nameofuser; ?></strong></label>
                    <br>
                    <label style="text-transform: capitalize;"><?php  echo $desc; ?></label>
                    <br><br> 
                </div>
            </div>
        </div>
    </center>
    </form>
<script src="plugins/js/jquery-1.js"></script>
<script type="text/javascript">
$("#btnExport").click(function (e) {
    //getting values of current time for generating the file name
    var dt = new Date();
    var day = dt.getDate();
    var month = dt.getMonth() + 1;
    var year = dt.getFullYear();
    var hour = dt.getHours();
    var mins = dt.getMinutes();
    var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
    //creating a temporary HTML link element (they support setting file names)
    var a = document.createElement('a');
    //getting data from our div that contains the HTML table
    var data_type = 'data:application/vnd.ms-excel;charset=utf-8';
    
    var table_html = $('#print')[0].outerHTML;
//    table_html = table_html.replace(/ /g, '%20');
    table_html = table_html.replace(/<tfoot[\s\S.]*tfoot>/gmi, '');
    
    var css_html = '<style>td {border: 0.5pt solid #c0c0c0} .tRight { text-align:right} .tLeft { text-align:left} </style>';
//    css_html = css_html.replace(/ /g, '%20');
    
    a.href = data_type + ',' + encodeURIComponent('<html><head>' + css_html + '</' + 'head><body>' + table_html + '</body></html>');
    
    //setting the file name
    a.download = 'Individual Report_' + postfix + '.xls';
    //triggering the function
    a.click();
    //just in case, prevent default behaviour
    e.preventDefault();
});
</script>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
<script type="text/javascript">
    (function(document) {
    'use strict';

    var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
            _input = e.target;
            var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
            Arr.forEach.call(tables, function(table) {
                Arr.forEach.call(table.tBodies, function(tbody) {
                    Arr.forEach.call(tbody.rows, _filter);
                });
            });
        }

        function _filter(row) {
            var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
            row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
            init: function() {
                var inputs = document.getElementsByClassName('light-table-filter');
                Arr.forEach.call(inputs, function(input) {
                    input.oninput = _onInputEvent;
                });
            }
        };
    })(Array.prototype);

    document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
            LightTableFilter.init();
        }
    });

})(document);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.name = " ";
});
app.filter('capitalize', function() {
    return function(input) {
      return (!!input) ? input.charAt(0).toUpperCase() + input.substr(1).toLowerCase() : '';
    }
});
</script>
