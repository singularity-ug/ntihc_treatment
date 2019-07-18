<?php
	include('conn.php');
	if(isset($_POST['prodid'])){
		
		$customer=$_POST['cname'];
		mysqli_query($conn,"insert into purchase (name, date) values ('$customer', NOW())");
		$purchase=mysqli_insert_id($conn);
		
		$total=0;
		
		foreach($_POST['prodid'] as $product):
		$proinfo=explode("||",$product);
		$productid=$proinfo[0];
		$iterate=$proinfo[1];
		$pquery=mysqli_query($conn,"select * from product where productid='$productid'");
		$prow=mysqli_fetch_array($pquery);
		
		if (isset($_POST['quantity_'.$iterate])){
			$subt=$prow['price']*$_POST['quantity_'.$iterate];
			$total+=$subt;
			mysqli_query($conn,"insert into details (purchaseid, productid, quantity) values ('$purchase', '$productid', '".$_POST['quantity_'.$iterate]."')");
			
			header('location:index.php');
			
		}
		endforeach;
		
		mysqli_query($conn,"update purchase set total='$total' where purchaseid='$purchase'");		
	}
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='index.php';
		</script>
		<?php
	}
?>