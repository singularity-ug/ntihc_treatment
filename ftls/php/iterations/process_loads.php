<?php
	include('connftl.php');
	if(isset($_POST['prodid'])){
		
		$customer=$_POST['cname'];
		$Throughoneaccount=$_POST['Throughoneaccount'];
		$Description=$_POST['Description'];
		$Title=$_POST['Title'];
		$Createddate=$_POST['Createddate'];
		
		$m = date("m");
		$Fiscalmonth=$_POST['Fiscalmonth'];
		$Yearval=$_POST['Yearval'];
		$Serial=$_POST['Serial'];
		mysqli_query($conn,"insert into purchase (name, date, Throughoneaccount, Description, Title, Monthno, Fiscalmonth, Yearval, Serial,Createddate) 
		                    values ('$customer', NOW(),'$Throughoneaccount', '$Description', '$Title', '$m', '$Fiscalmonth', '$Yearval',  '$Serial', '$Createddate')");
		$purchase=mysqli_insert_id($conn);
		
		$total=0;
		
		foreach($_POST['prodid'] as $product):
		$proinfo=explode("||",$product);
		$productid=$proinfo[0];
		$iterate=$proinfo[1];
		$pquery=mysqli_query($conn,"select * from fuelcards where productid='$productid'");
		$prow=mysqli_fetch_array($pquery);
		
		if (isset($_POST['quantity_'.$iterate])){
			$subt=$prow['Defaultint']*$_POST['quantity_'.$iterate];
			$total+=$subt;
			mysqli_query($conn,"insert into details (purchaseid, productid, quantity) values ('$purchase', '$productid', '".$_POST['quantity_'.$iterate]."')");
			
			mysqli_query($conn,"insert into fuellogs (purchaseid, productid, Fueloaded, Reconciliation, Recstatus, Loadreview) 
			values ('$purchase', '$productid', '".$_POST['quantity_'.$iterate]."','Pending','Pending','Pending')");
			
			header('location:fuel_loads.php'); 
		}
		endforeach; 
		mysqli_query($conn,"update purchase set total='$total' where purchaseid='$purchase'");		
	}
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='fuel_loads.php';
		</script>
		<?php
	}
?>