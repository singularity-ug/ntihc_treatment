<?php
define('DB_USER', 'ENTER_USER');
define('DB_PASSWORD', 'ENTER_PASSWORD');
define('DB_SERVER', 'localhost');
define('DB_NAME', 'ENTER_DBNAME');


if (!$db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME)) {
	die($db->connect_errno.' - '.$db->connect_error);
}

$arr = array();

if (!empty($_POST['keywords'])) {
	$keywords = $db->real_escape_string($_POST['keywords']);
	$sql = "SELECT ID, post_title FROM wp_posts WHERE post_content LIKE '%".$keywords."%' AND post_status = 'publish'";
	$result = $db->query($sql) or die($mysqli->error);
	if ($result->num_rows > 0) {
		while ($obj = $result->fetch_object()) {
			$arr[] = array('id' => $obj->ID, 'title' => $obj->post_title);
		}
	}
}
echo json_encode($arr);
