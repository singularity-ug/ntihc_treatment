<?php

  require('connect/config.php');
  //got from the workpack table
$i=0;
    $handle = fopen("file2.txt", "r");
     if ($handle) {
         while (($line = fgets($handle)) !== false) {
      $data =explode(',',$line);
      $id   =$data[0];
    //  $id   = strtolower($data[0]);
      //$id   = str_replace(' ','_',$id);
   $bal=    intval($data[1])-intval('0'); //$led;

   $item = $data[0];
   $qty  = $data[1];
   $uom  = $data[2];
   $query= "INSERT INTO `stores_electrical`(item, store_quantity,unit_cost,UOM,last_update)
            VALUES('$item','$qty','0','$uom',now())";

            if($conn->query($query)===true){
                    echo ($i++).'<br />';

             }

         }

         fclose($handle);
     } else {
         // error opening the file.
     }



      ?>
