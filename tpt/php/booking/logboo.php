
 
<?php
  $id = $_GET['q'];  
  
  $REGISTRATIONNO = ''; 
  $UNITPRICE  = '';  
  $FUELISSUANCEDATE = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ftl";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM fuellogs  WHERE `REGISTRATIONNO` = '$id' AND FUELISSUANCESTATUS ='ISSUED' LIMIT 1";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $REGISTRATIONNO = $row['REGISTRATIONNO'];
     $UNITPRICE = $row['UNITPRICE'];  
     $FUELISSUANCEDATE = $row['FUELISSUANCEDATE'];  
      } 
  ?>
  
  <input type="hidden" name="REGISTRATIONNO" id="REGISTRATIONNO" value="<?php  echo $REGISTRATIONNO; ?>" />
   <input type="hidden" name="FUELISSUANCEDATE" id="FUELISSUANCEDATE" value="<?php  echo $UNITPRICE; ?>"/> 
   <input type="text" name="Costperlitre" id="Costperlitre" value="<?php  echo $UNITPRICE; ?>"/> 