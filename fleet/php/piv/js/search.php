<?php
include ("connect.php");
if (isset($_GET['term'])){
$searchTerm = $_GET['term'];
//get matched data from skills table
// $query = $db->query("SELECT * FROM skills WHERE skill LIKE '%".$searchTerm."%' ORDER BY skill ASC");
// while ($row = $query->fetch_assoc()) {
//     $data[] = $row['skill'];
// }
$query  = $con->prepare("SELECT * FROM tbl_personnel WHERE per_firstname LIKE '%".$searchTerm."%' ORDER BY per_id ASC");
while($row = $query->fetch()){
	$data[] = $row['per_firstname'];
}
//return json data
echo json_encode($data);
?>