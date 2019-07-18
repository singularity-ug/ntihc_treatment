<?php

if(isset($_POST['NTIHCNO'])){
$cdat   = trim($_POST['CREATEDDATE']); 
$fcn   = trim($_POST['FUELCARDNAME']); 
$ui   = trim($_POST['USERINITIAL']);  
$fuelrows  = trim($_POST['mytable_rows']); 
$month = trim(date('M'));
$year = trim(date('Y'));
$fy = (intval(trim(date('Y')))-1).'/'.$year;
$fiscm = (intval(trim(date('Y')))-1).'/'.$month;
$fquarter = (intval(trim(date('Y')))-1).'/'.$month;

$connect = new mysqli("localhost", "root", "", "fleet");
/*check connection */
if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
}
//print_r($_POST);

              $rsns = intval($fuelrows);  //convert value to integer mytable_rows
              if($rsns>0){
			  $prescccc    = intval($rowsss1);  if($presccc<=0){ $acti='';}
              $x=1;
              for ($x=1; $x <= $rsns; $x++) {
 
 $invo = trim($_POST['inv_'.$x]);
 $regn = trim($_POST['reg_'.$x]);
 $driv = trim($_POST['dri_'.$x]); 
 $sodo = trim($_POST['sod_'.$x]);
 $eodo = trim($_POST['eodo_'.$x]);
 $pccva = trim($_POST['pccv_'.$x]);
 $pdt = trim($_POST['pd_'.$x]); 
 $ltr = trim($_POST['lt_'.$x]);
 $unp = trim($_POST['un_'.$x]);
 $amt = trim($_POST['am_'.$x]);
 $udt = trim($_POST['ud_'.$x]); 
 $pps = trim($_POST['pp_'.$x]);
 
$sql="INSERT INTO `fleet`.`fuellogs` (`TIMESTAMP`,
`CREATEDDATE`, 
`FUELCARDNAME`, 
`INVOICENO`, 
`REGISTRATIONNO`, 
`DRIVER`, 
`START_ODOkm`, 
`END_ODOkm`, 
`PCCV_previousConsumptionVERSUSpresentVariance`, 
`PRODUCT`, 
`LITRE`, 
`UNITPRICE`, 
`AMOUNT`, 
`USERDEPARTMENT`, 
`PURPOSE`, 
`USERINITIAL`,  
`MONTH_NAME`, 
`YEAR_FULL`, 
`FY`, 
`FISCALMONTH`, 
`FQTR`) 
 VALUES (CURRENT_TIMESTAMP,  
   '$cdat',
                                                       '$fcn',
                                                       '$invo', 
                                                       '$regn',
                                                       '$driv',
                                                       '$sodo', 
                                                       '$eodo',
                                                       '$pccva',
                                                       '$pdt', 
                                                       '$ltr',
                                                       '$un', 
                                                       '$amt',
                                                       '$udt',
                                                       '$pps',
                                                       '$ui', 
                                                       '$month',
                                                       '$year',
                                                       '$fy',
                                                       '$fiscm',
													   '$fquarter')";
													   
          //GENERATE THE QUERY TO INSERT AND UPDATE THE NUMBER OF VISITS.
          if ($connect->query($sql)) {
          //  echo "<br /> something  didnt go  wrong : ";
          }

          else {
            echo "something went wrong : 1".$connect->error;
          }
          // echo "<br /> ".$sql;
           //echo '<br />'.$sql;
                 }
               }
  
       else{echo "error while inserting , TRY AGAIN";
       header('location:fuellogs.php');
	   exit();}
?>






