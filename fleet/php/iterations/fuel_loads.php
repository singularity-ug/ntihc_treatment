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
  header('location:../index.php');
}
 ?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stssl ="";
if( $result = $connect->query("SELECT * FROM panel WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?>  
 
  
  
<!DOCTYPE html>
<html>
<head>
	<title>ftls</title>
	<script src="jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="bootstrap.min.js"></script>
	
	<style>
		input[type="checkbox"] {
		transform:scale(2, 2);
    }
	</style>
	
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 5px;
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
</head>
<body style="background-color: #fff;">
<div class="container">
	<div class="row">
    
		<div class="col-lg-12">
        <br> 
         <img src="../../img/logsbig.png" width="100%" height="30%"> 
        
			<h2 style="color:#000;font-size:15px;">List of fuel cards due for re-loading </h2>
            
            
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<form method="POST" action="process_loads.php" class="form-inline">
				<table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
						<th style="text-align:center"><input type="checkbox" id="checkAll"></th>
						<th>Fuel Card Name</th>
						<th>Fuel available</th>
                        <th>Reorder level</th>
						<th>Actual fuel loaded</th> 
                    </thead>
                    <tbody>
						<?php
							include('connftl.php');
							$query=mysqli_query($conn,"select * ,Fueltargetlevel-fuelvailable as reorder 
							from fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' order by Fuelcardname asc");
							//dis is our iterator
							$iterate=0;
							while($row=mysqli_fetch_array($query)){
							?>
								<tr>
									<td align="center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="prodid[]"></td>
									<td><?php echo $row['Fuelcardname']; ?></td>
									<td><?php echo number_format($row['fuelvailable'],2); ?></td>
                                    <td><?php echo number_format($row['reorder'],2); ?></td>   
									<td><input type="text" name="quantity_<?php echo $iterate; ?>"></td>
								</tr>
							<?php
							$iterate++;
							}
						?>
                    </tbody>
                </table>
                 
            <p>Body description </p>
            <textarea style="width:1139px; height:44px;" name="Description">  </textarea> 
  
			Requested by &nbsp;&nbsp;<input type="text" name="cname" class="form-control" value="<?php echo $nameofuser; ?> " 
            style="width:200px;" required>
            
            Title &nbsp;&nbsp;<input type="text" name="Title" class="form-control" value="<?php echo $desc; ?> " 
            style="width:292px;" required> 
            
            Date&nbsp;&nbsp;<input type="date" name="Createddate" class="form-control" value="<?php echo date('Y-m-d'); ?>"
            style="width:150px;" required>
            
             Send to:&nbsp;&nbsp;<select name="Throughoneaccount" class="form-control"  
            style="width:200px;" required="required">
            <option></option>
             ttt     = "<?php   echo $stssl; ?>"; 
            </select>
            
            <input type="hidden" name="Fiscalmonth" class="form-control" value="<?php echo date('F'); ?> <?php echo date("Y");?>">
            <input type="hidden" name="Yearval" class="form-control" value="<?php echo date("Y");?>" >
            <input type="hidden" name="Serial" class="form-control"  value="<?php echo uniqid();?>">
              
             <button type="submit" class="btn btn-primary"><span class=""></span> Save</button>
			</form>
		</div>
    </div>
	
	<div class="row">
		<div class="col-lg-12">
			<h2 style="color:#000;font-size:15px;"> <a rel="" href="../fuel_master.php" class="btn btn-danger" /><i class=""></i> << Back</button></a>
            &nbsp;&nbsp;Fuel loading history
            &nbsp;&nbsp;<a rel="" href="../fuel/get_load_history.php" class="btn btn-danger" /><i class=""></i> Print >></button></a>
            <br> 
            </h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
        
        
 <div id="dialog-window">
  <div id="scrollable-content">
   <ul>
  <div class=""  id=" " style="margin-left:-40px;">  
        
				<table width="100%" class="table table-tabled table-tabled table-hover">
                    <thead>
						<th class="hidden"></th>
                        <th>Reference</th>
						<th>Requisition date</th>
						<th>Initiated by</th>
						<th>Total amount</th>
                        <th>Status</th>
						<th>Action</th>
                    </thead>
                    <tbody>
						<?php
							include('connftl.php');
							$query1=mysqli_query($conn,"select * from purchase order by date desc");
							while($row1=mysqli_fetch_array($query1)){
							?>
								<tr>
									<td class="hidden"></td>
                                    <td>KCCA/AHR/FTL/<?php echo $row1['purchaseid']; ?>/<?php echo $row1['Yearval']; ?>/<?php echo $row1['Monthno']; ?></td>
									<td><?php echo date('M d, Y h:i A', strtotime($row1['date'])); ?></td>
									<td><?php echo $row1['name']; ?></td>
									<td><?php echo number_format($row1['total'],2); ?></td>
                                    <td><?php echo $row1['Approval']; ?></td>
									<td>
										<a href="#show<?php echo $row1['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class=""></span>
                                         Requisition </a>
										<?php include('modal_loads.php'); ?>
									</td>
								</tr>
							<?php
							}
						?>
                    </tbody>
                </table>
                
                
              </div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 280px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 280px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>


              </div>
		</div>
    </div>
     
</div>
 
<script>
$(document).ready(function(){
	$("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
	});
});
</script>
</body>
</html>