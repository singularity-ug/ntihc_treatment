<?php

   $servername = "localhost";
   $username = "root";
   $password = "toor2";
   $dbname = "patientmgt";

// Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   if (!$conn) {    die("Connection failed:".$conn->error); }

     $NTIHCNO = $_POST['NTIHCNO'];

     $res = $conn->query("SELECT * FROM laboratory_temp WHERE NTIHCNO='$NTIHCNO'");
     $arr = array();
     while ($row=$res->fetch_assoc()) {

           $arr['NTIHCNO']              = $row['NTIHCNO'];
           $arr['SPECIMEN']             = json_decode($row['SPECIMEN']);
           $arr['HEAMATOLOGY_SCROLOGY'] = json_decode($row['HEAMATOLOGY_SCROLOGY']);
           $arr['MALARIA']              = json_decode($row['MALARIA']);
           $arr['STOOL_MICROSCOPY']     = json_decode($row['STOOL_MICROSCOPY']);
           $arr['URINE_MICROSCOPY']     = json_decode($row['URINE_MICROSCOPY']);
           $arr['SWABS_TYPE']           = json_decode($row['SWABS_TYPE']);
           $arr['SWABS_WETPREP']        = json_decode($row['SWABS_WETPREP']);
           $arr['SWABS_GRAMSTAIN']      = json_decode($row['SWABS_GRAMSTAIN']);
           $arr['TECHNICIAN_NAME']      = $row['TECHNICIAN_NAME'];
           $arr['TITLE']                = $row['TITLE'];
           $arr['REQUESTINGUNIT']       = $row['REQUESTINGUNIT'];
           $arr['USERINITIAL']          = $row['USERINITIAL'];
           $arr['TESTDESCRIPTION']      = $row['TESTDESCRIPTION'];
           $arr['FISCALMONTH']          = $row['FISCALMONTH'];
           $arr['FISCALYEAR']           = $row['EXPIRYDATET1'];
           $arr['EXPIRYDATET1']         = $row['TITLE'];
           $arr['EXPIRYDATET2']         = $row['EXPIRYDATET2'];
           $arr['EXPIRYDATET3']         = $row['EXPIRYDATET3'];
           $arr['REACTIVITYT1']         = $row['REACTIVITYT1'];
           $arr['REACTIVITYT2']         = $row['REACTIVITYT2'];
           $arr['REACTIVITYT3']         = $row['REACTIVITYT3'];
           $arr['FINALREACTIVITY']      = $row['FINALREACTIVITY'];
           $arr['HEPATITIS_B']          = $row['HEPATITIS_B'];
           $arr['SYPHILIS']             = $row['SYPHILIS'];
           $arr['HB']                   = $row['HB'];
           $arr['RBS']                  = $row['RBS'];
           $arr['BLOOD']                = $row['BLOOD'];
           $arr['BLOODRESULTS']         = $row['BLOODRESULTS'];
           $arr['HCG']                  = $row['HCG'];
           $arr['MALARIARDTs']          = $row['MALARIARDTs'];
           $arr['MALARIAMICROSCOPY']    = $row['MALARIAMICROSCOPY'];
           $arr['OTHERHEAMOPATRASITES'] = $row['OTHERHEAMOPATRASITES'];
           $arr['CYSTECELLS']           = $row['CYSTECELLS'];
           $arr['PROTEINS']             = $row['PROTEINS'];

     }
     $conn->close();
     echo json_encode($arr);
            exit();
    ?>
