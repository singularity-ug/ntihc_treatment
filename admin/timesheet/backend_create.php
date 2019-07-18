<?php
require_once '_db.php';

$json = file_get_contents('php://input');
$params = json_decode($json);

$received_range_start = $params->start;
$received_range_end = $params->end;

$start = new DateTime($received_range_start);
$start_day = clone $start;
$start_day->setTime(0, 0, 0);

$end = new DateTime($received_range_end);
$end_day = clone $end;
$end_day->setTime(0, 0, 0);

$days = $end_day->diff($start_day)->days;

if ($end > $end_day) {
    $days += 1;
}

$scale = $params->scale;

$timeline = load_timeline();

$slot_duration = 60;
$doctor_id = $params->resource;

foreach($timeline as $cell) {
    if ($start <= $cell->start && $cell->end <= $end) {
        for($shift_start = clone $cell->start; $shift_start < $cell->end; $shift_start->add(new DateInterval("PT".$slot_duration."M"))) {
            $shift_end = clone $shift_start;
            $shift_end->add(new DateInterval("PT".$slot_duration."M"));
            create_shift($shift_start->format("Y-m-d\\TH:i:s"), $shift_end->format("Y-m-d\\TH:i:s"), $doctor_id);
        }
    }
}

function create_shift($start, $end, $doctor) {
    global $db;
    $stmt = $db->prepare("INSERT INTO appointment (appointment_start, appointment_end, doctor_id) VALUES (:start, :end, :doctor)");
    $stmt->bindParam(':start', $start);
    $stmt->bindParam(':end', $end);
    $stmt->bindParam(':doctor', $doctor);
    $stmt->execute();    
}

class TimeCell {}

function load_timeline() {
    global $scale, $days, $start_day;
    
    $morning_shift_starts = 9;
    $morning_shift_ends = 13;
    $afternoon_shift_starts = 14;
    $afternoon_shift_ends = 18;
    
    switch ($scale) {
        case "hours":
            $increment_morning = 1;
            $increment_afternoon = 1;
            break;
        case "shifts":
            $increment_morning = $morning_shift_ends - $morning_shift_starts;
            $increment_afternoon = $afternoon_shift_ends - $afternoon_shift_starts;
            break;
        default:
            die("Invalid scale");
    }
    
    $timeline = array();

    for ($i = 0; $i < $days; $i++) {
        $day = clone $start_day;
        $day->add(new DateInterval("P".$i."D"));
        
        for($x = $morning_shift_starts; $x < $morning_shift_ends; $x += $increment_morning) {
            $cell = new TimeCell();
            
            $from = clone $day;
            $from->add(new DateInterval("PT".$x."H"));
            
            $to = clone $day;
            $to->add(new DateInterval("PT".($x + $increment_morning)."H"));
            
            $cell->start = $from;
            $cell->end = $to;    
            $timeline[] = $cell;            
        }

        for($x = $afternoon_shift_starts; $x < $afternoon_shift_ends; $x += $increment_afternoon) {
            $cell = new TimeCell();
            
            $from = clone $day;
            $from->add(new DateInterval("PT".$x."H"));
            
            $to = clone $day;
            $to->add(new DateInterval("PT".($x + $increment_afternoon)."H"));
            
            $cell->start = $from;
            $cell->end = $to;    
            $timeline[] = $cell;            
        }

    }
    
    return $timeline;
}

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Shifts created';
//$response->id = $db->lastInsertId();

header('Content-Type: application/json');
echo json_encode($response);

?>
