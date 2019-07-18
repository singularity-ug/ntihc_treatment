<!DOCTYPE html>
<html>
<head>
	<title>Referral</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:100%;">
	<span style="font-size:25px; color:blue"><center><strong>
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:10%; border: 0px;">  
    <img src="ntihclog2.png"width="60" height="60" style="border: 0px; ">  
    </td>
   
     <td style="width:80%; border: 0px;">  
   <center style="color:#000; font-weight:bold; font-size:12px;">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</center><p></p> 
   <center style="color:#000; font-weight:bold; font-size:12px;">P.O, Box 27572, Kampala-Uganda</center> 
   <center style="color:#000; font-weight:bold; font-size:12px;">Tel:&nbsp;0393-216-467</center> 
	
    <td style="width:10%; border: 1px;">  
    </td>  
    </tbody>
    </table>
	<br> 
	<p style="font-size:18px;">Refferals Module</p>
	</strong></center></span>	
		<span class="pull-left"><a href="index.php"  class="btn btn-danger">
		<span class="glyphicon glyphicon-edit"></span> Pending</a></span>
		
		<span class="pull-left"><a href="comp.php" class="btn btn-success">
		<span class="glyphicon glyphicon-ok"></span> Completed</a></span>
		 
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary">
		<span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>DATE</th>
				<th>CLIENT&nbsp;NAME</th>
				<th>NTIHC&nbsp;NO.</th>
				<th>AGE</th>
				<th>SEX</th>
				<th>REFERRAL CENTER</th>
				<th>SERVICE REFERRED FOR</th>
				<th style="text-align:center;">ACTION</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `referral` WHERE REFTUNER='FOLLOWED UP' GROUP BY RID DESC");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr> 
						<td><?php echo $row['DATECREATED']; ?></td>
						<td><?php echo $row['CLIENTNAME']; ?></td>
						<td><?php echo $row['NTIHCNO']; ?></td>
						<td><?php echo $row['AGE1']; ?></td>
						<td><?php echo $row['SEX']; ?></td>
						<td><?php echo $row['MEDICALREFERRAL']; ?></td>
						<td><?php echo $row['SERVICEREFERREDFOR']; ?></td>
						<td>
							<a href="#edit<?php echo $row['RID']; ?>" data-toggle="modal" class="">
							<b data-toggle="tooltip" title="Follow up">
							<span class="glyphicon glyphicon-edit"></span></a> || 
							
							<a href="#del<?php echo $row['RID']; ?>" data-toggle="modal" class="">
							<b data-toggle="tooltip" title="Remove">
							<span class="glyphicon glyphicon-trash"></span></a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html> 