<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);

$received_range_start = $params->start;
$received_range_end = $params->end;

$stmt = $db->prepare("DELETE FROM appointment WHERE appointment_status = 'free' AND NOT ((appointment_end <= :start) OR (appointment_start >= :end))");
$stmt->bindParam(':start', $params->start);
$stmt->bindParam(':end', $params->end);
$stmt->execute();    

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Cleared';
//$response->id = $db->lastInsertId();

header('Content-Type: application/json');
echo json_encode($response);

?>
