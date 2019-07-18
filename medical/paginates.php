<?php
require("config.php");
$id        = '';
$tablename = '';
$date1     = '';
$date2     = '';

$results   = array();
$x         = 1;
$res       = $conn->query("SELECT * FROM $tablename WHERE NTIHCNO= '$id' AND DATECREATED>='$date1'AND DATECREATED<='$date2'");
$total     = $res->num_rows;
while ($row-$res->fetch_assoc()) {
      $results["".$x.""] = $row['id'];
      $x++;
}
 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

<script type="text/javascript">
var total   =   parseInt("<?php echo $total; ?>");
var results1 = JSON.parse("<?php echo json_encode($results); ?>");
var current = 1;

//we conver res1 object to array
var arr = [];
for(var x in results1){  arr[x] = results1[x]; }


  function paginate(btnselect){
    var btn = btnselect.id;
              document.getElementById('back').Enabled    = true;
              document.getElementById('forward').Enabled = true;

         if(btn=='back'){if(current==1){document.getElementById('back').Enabled = false;}
                            else{ current= current-1;}
                        }
  else if(btn=='forward'){if(current==total){document.getElementById('forward').Enabled = false;}
                        else{current= current-1;}
                        }
    else{return;}

    // make a post request to the server to obtain the data
    $.post( "bringdata.php", { id: results1[current], 'choices[]': [ "item1", "item2" ] })
  .done(function( data ) {
     $("#contentdiv").html(data);
  });

  }
</script>

  </head>
  <body>

  </body>
</html>
