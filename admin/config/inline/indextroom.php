   <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">

  <script src="../../datatable/js/jquery-1.12.3.js"></script>
  <script src="../../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../datatable/js/bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../../datatable/js/buttons.flash.min.js"></script>
  <script src="../../datatable/js/jszip.min.js"></script>
  <script src="../../datatable/js/pdfmake.min.js"></script>
  <script src="../../datatable/js/vfs_fonts.js"></script>
  <script src="../../datatable/js/buttons.html5.min.js"></script>
  <script src="../../datatable/js/buttons.print.min.js"></script>
  <script src="../js/custom.js"></script>

  <script>
  $(document).ready(function() {
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
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		{extend :'pdf',
		 title:'myfile'
		} 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
     $('#example2').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		{extend :'pdf',
		 title:'myfile'
		} 
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
     $('#example5').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' X'
		},
		{extend :'pdf',
		 title:'X '
		},
		{extend :'print',
		 title:' X'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 10,
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

<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}


	  {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 10px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
             }
    </style>
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid black;
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


  
            <div id="div-5" class="accordion-body collapse in body"> 
             <center> <legend style="color:#000; font-weight:bold;font-size:12px;">MANAGE INTERNAL REFERRALS </legend> </center>
 
  
	<form method="post" action="edit1.php">
		<table class="table table-bordered">
			<tr>				
				<td>NTIHCNO : <input type="text" id="myNTIHCNO" name="NTIHCNO" value="" readonly="readonly"></td>
				<td>SERVICETYPE : <select id="mySERVICETYPE" name="SERVICETYPE" value="">
                  <option value="">  </option>
                  <option value="MEDICAL SERVICES">MEDICAL SERVICES</option>
                  <option value="COUNSELLING SERVICES">COUNSELLING SERVICES</option>
                  <option value="PREGNANCY RELATED SERVICES">PREGNANCY RELATED SERVICES</option>
                   <option value="OTHER SERVICES">OTHER SERVICES</option>
               </select>
                </td>
				<td> VIST TYPE : <input type="text" id="myVISTTYPE" name="VISTTYPE" value=""></td>
				<td> DATE : <input type="text" name="TIMESTAMP" value="<?php echo date('Y-m-d');?>" readonly="readonly"></td>
				<td><input type="hidden" id="myRID" name="RID" value=""</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>			
		</table>
	</form>
                 
     <div class="col-sm-6" style="height:auto; "> 
 <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		CLIENTS PROCESSED FOR MEDICAL ATTENTION <span class="sr-only">60% Complete</span>
        </div></div>
        
	  <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example2" class="table table-striped table-bordered" >
        <thead>
        <tr> 
        <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function referpat(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[1];
document.getElementById("myRID").value=dts[0];
document.getElementById("mySERVICETYPE").value=dts[2];
document.getElementById("myVISTTYPE").value=dts[3];
}
</script> 
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>
     </div></div>
                 
 
      <div class="col-sm-6" style="height:auto;">
 <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		CLIENTS PROCESSED FOR PREGNANCY RELATED SERVICES <span class="sr-only">60% Complete</span> 
		</div>
	    </div>
      <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example3" class="table table-striped table-bordered" >
        <thead>
        <tr> 
        <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>  
     
     </div>    
    
    
     </div>
	   <div class="col-sm-6" style="height:auto;">
     <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		PROCESSED CLIENTS DUE FOR OTHER SERVICES <span class="sr-only">60% Complete</span>
		</div>
	    </div>
      <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example1" class="table table-striped table-bordered" >
        <thead>
        <tr> 
        <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>  
     
     
       
		PROCESSED CLIENTS DUE FOR COUNSELLING SERVICES  
		 
      <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example4" class="table table-striped table-bordered" >
        <thead>
        <tr> 
        <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>  
     
     
  
 
	<center><h5> ALL RECORDS  </small></h5></center>
 
  <form method="post" action="edit1.php">
		 <table class="table table-striped table-bordered" >
			<tr>				
				<td>NTIHCNO : <input type="text" id="cNTIHCNO" name="NTIHCNO" value="" readonly="readonly"></td>
				<td>SERVICETYPE : <select id="cSERVICETYPE" name="SERVICETYPE" value="">
                  <option value="">  </option>
                  <option value="MEDICAL SERVICES">MEDICAL SERVICES</option>
                  <option value="COUNSELLING SERVICES">COUNSELLING SERVICES</option>
                  <option value="PREGNANCY RELATED SERVICES">PREGNANCY RELATED SERVICES</option>
                  <option value="OTHER SERVICES">OTHER SERVICES</option>
               </select>
                </td>
				<td> VIST TYPE : <input type="text" id="cVISTTYPE" name="VISTTYPE" value=""></td>
				<td> DATE : <input type="text" name="TIMESTAMP" value="<?php echo date('Y-m-d');?>" readonly="readonly"></td>
				<td><input type="hidden" id="cRID" name="RID" value=""</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>			
		</table>
	</form>
 
 
<script> 
function regnrecords(myid){
var dts = myid.split("***");
document.getElementById("cNTIHCNO").value=dts[1];
document.getElementById("cRID").value=dts[0];
document.getElementById("cSERVICETYPE").value=dts[2];
document.getElementById("cVISTTYPE").value=dts[3];
}
</script>

 

	 <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example5" class="table table-striped table-bordered" >
        <thead>
        <tr> 
            <th>DATE TIME</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>SERVICE TYPE</th>
					 <th>VIST TYPE</th>
                     <th>DATA TYPE</th> 
                     <th>USER INITIAL </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr>
              
              <th>DATE TIME</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>SERVICE TYPE</th>
					 <th>VIST TYPE</th>
                     <th>DATA TYPE</th> 
                     <th>USER INITIAL </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND OUTSVSTATUS ='NO' ORDER BY RID DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>";
		echo "<td>".$res['VISTTYPE']."</td>";
		echo "<td>".$res['DATATYPE']."</td>";
		echo "<td>".$res['USERINITIAL']."</td>";
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="regnrecords(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>  
    
  
  
   </body>
</html>
