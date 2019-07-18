<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Request an Appointment</title>
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
        <link type="text/css" rel="stylesheet" href="css/layout.css" />

    </head>
    <body>
        <?php
            // check the input
            is_numeric($_GET['id']) or die("invalid URL");

            require_once '_db.php';

            $stmt = $db->prepare('SELECT * FROM appointment WHERE appointment_id = :id');
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            $event = $stmt->fetch();

        ?>
        <form id="f" action="backend_request_save.php" style="padding:20px;">
            <input type="hidden" name="id" id="id" value="<?php print $_GET['id'] ?>" />
            <h1>Request an Appointment</h1>

            <div>Start:</div>
            <div><input type="text" id="start" name="start" value="<?php print (new DateTime($event['appointment_start']))->format('d/M/y g:i A') ?>" disabled /></div>

            <div>End:</div>
            <div><input type="text" id="end" name="end" value="<?php print (new DateTime($event['appointment_end']))->format('d/M/y g:i A') ?>" disabled /></div>

            <div>Your Name: </div>
            <div><input type="text" id="name" name="name" value="" /></div>

            <div class="space"><input type="submit" value="Save" /> <a href="#" id="cancel">Cancel</a></div>
        </form>

        <script type="text/javascript">

        $("#f").submit(function () {
            var f = $("#f");
            $.post(f.attr("action"), f.serialize(), function (result) {
                DayPilot.Modal.close(result);
            });
            return false;
        });

        $("#cancel").click(function() {
            DayPilot.Modal.close();
            return false;
        });

        $(document).ready(function () {
            $("#name").focus();
        });

        </script>
    </body>
</html>
