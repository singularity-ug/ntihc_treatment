<?php 
	$conn = new mysqli("localhost", "root", "toor2", "fleet");  
	$out = array(); 
	$sql = "SELECT *, sum(amount) AS total FROM sales LEFT JOIN fruits ON fruits.fruitid=sales.fruitid GROUP BY sales.fruitid";
	$query = $conn->query($sql); 
	while($row=$query->fetch_array()){
	    $out['total'][] = $row['total'];
	    $out['fruitname'][] = $row['fruitname'];
	} 
	echo json_encode($out); 
?>


  