<?php
session_start();
session_regenerate_id();
$nameofuser = '';
$desc       = "";
$dept       = "";
$pf       = "";
$rm         = "";
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID'];
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
$rm = $_SESSION['MREPEAT'];
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:../index.php');
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../css/uniform.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" />  
 
<link rel="stylesheet" href="../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 

 <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../js/googleapis.js" type='text/css'>

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
    "iDisplayLength":3,
        dom: 'Bfrtip',
        buttons: [

    {extend :'pdf',
     title:'myfile'
    }
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:'  '
    },
    {extend :'pdf',
     title:'  '
    },
    {extend :'print',
     title:' '
    }
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
    "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
               padding-bottom: 0px;
              font-size: 11px;
              color:#000000;
        font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 
            </style> 

</head>
 
 <div class="col-sm-1">
       </div>
        <div class="col-sm-10">
  

 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class=""></i>
        <a href="dashboard.php" title="Home" class="tip-bottom"><i class="icon-home"></i> Home</a>&nbsp;
        
        </span>
          <h5> 
           <a href="fuel_review.php" class="">Approved requisitions</a>
            &nbsp;  <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE 
                                                                 APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'WAITING' 
                                 GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>     &nbsp; &nbsp;
           <a href="fuel/fuel_myentry.php" class="">My fuel data</a> 
          </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
            <div class="panel-body">
             <img src="../img/logsbig3.png" width="100%" height="30%"> </div>
                 <center><p style="font-weight:bold; font-size:11px;"> FUEL ENTRY RECORDS MANAGEMENT  </p></center>
           <div class="span3"> 
       
              
              <form class="form-horizontal" action="fuel/fuel_process_entrant.php" method="POST" 
              style="height:auto; font-weight:normal;border: 2px solid #eee; border-radius: 2px; border-right: 2px solid #eee; 
              border-left: 0px; border-top: 0px; border-bottom: 5px solid #eee;">
         
              <label style=" color:#000; font-weight:bold;">
              <center>Fill this form to access fuel entry window </center></label>
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
    <thead> 
    <tr> 
   <th style="border:0px; background-color:#fff;"><b>Fuel entry date</b></th> 
    </tr>
   </thead>
   <tbody>
   <tr>      
   <td style="border:0px;"><input type="date" name="FUELISSUANCEDATE" id="FUELISSUANCEDATE"  value="<?php echo date('y-m-d'); ?>" required="required"
          style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; ">  
                  </td>  
              </tr>
        </table> 
              
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
    <thead> 
    <tr> 
   <th style="border:0px; background-color:#fff; text-align:"><b>Entry month</b></th> 
   <th style="border:0px; background-color:#fff; text-align:"><b>Entry year</b></th> 
    </tr>
   </thead>
   <tbody>
   <tr>      
   <td style="border:0px;"><input type="numeric" name="Fiscalmonth" id="Fiscalmonth"  value="<?php echo date('F'); ?>" required="required"
          style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; ">  
                  </td> 
                  
                   <td style="border:0px;"><input type="numeric" name="FISCALYEAR" id="FISCALYEAR"  value="<?php echo date("Y");?>" required="required"
          style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; ">  
                  </td> 
                   
              </tr>
        </table>        
              
              
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
    <thead> 
    <tr> 
   <th style="border:0px; background-color:#fff;"><b>Fuel card name</b></th> 
    <?php
$connect = new mysqli("localhost", "root", "toor2", "ftl");
$stss ="";
if( $result = $connect->query("SELECT Fuelcardname FROM fuelcards GROUP BY Fuelcardname asc"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Fuelcardname'] ." </option>";   }
  }
$connect->close();
?> 
   </tr>
   </thead>
   <tbody>
   <tr>      
   <td style="border:0px;"><select name="Fuelcardname" id="Fuelcardname"  required="required" 
          style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; "> 
                  <option></option>
                   <?php   echo $stss; ?> 
                  </select>
                  </td>  
              </tr>
        </table> 
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
    <thead> 
    <tr> 
    <th style="width:80%; border:0px; background-color:#fff;"><b>Captured by</b></th>
    <th style="width:30%; border:0px; background-color:#fff;"> </th> 
    </tr>
    </thead>
    <tbody>
    <tr>      
    <td style="border:0px;"><input type="numeric" name="ISSUEDBY" id="ISSUEDBY"  value="<?php  echo $nameofuser; ?>"  readonly="readonly" 
          style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; ">  
              </td>  
                <input type="hidden" name="ISSUERTITLE" id="ISSUERTITLE"  value="<?php  echo $desc; ?>"  >   
               <input type="hidden" name="ISSUERACCOUNT" id="ISSUERACCOUNT"  value="<?php  echo $rm; ?>"  />
              <td style="border:0px;background-color:#f9f9f9; text-align:right;">   <input type="submit" name="button" id="button" value="Save"/>  </td>
              </tr>
        </table> 
                        
             
               <br>
               
       </form>
       <BR>
        <ul class="site-stats" style="height:auto; font-weight:normal;border: 2px solid #eee; border-radius: 2px; border-right: 2px solid #eee; 
              border-left: 0px; border-top: 0px; border-bottom: 5px solid #eee;">
                <li class="bg_lo"><i class="icon-plus"></i>  
                <small style="font:bold 14px 'Aleo'; text-shadow:1px 1px 2px #000; color:#fff;"> Vehicles due for re-fueling</small>
                 <strong>
                 <?php 
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED'
                            AND REVIEWFUEL = 'REVIEWED' AND FUELISSUANCESTATUS = 'PENDING' GROUP BY SERIALNO")) { 
                           
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                </strong> </li> 
                <li class="bg_lg"> <i class="icon-share"></i>  
                <small style="font:bold 14px 'Aleo'; text-shadow:1px 1px 2px #000; color:#fff;">My total vehicles seen  </small>
                <strong>
                
                                   <?php
      
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' 
                                   AND FUELISSUANCESTATUS = 'ISSUED' AND ISSUERACCOUNT = '$rm' AND FUELISSUANCEDATE = '$date' 
                   GROUP BY id")) {


    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</strong> </li>
                
                
              </ul> 
         
      </div> 
    
    <div class="span8">
             
<?php
  $id ='';  
  $FUELISSUANCEDATE = ''; 
  $Fuelcardname  = '';
  $ISSUEDBY = '';
  $ISSUERTITLE = '';   
  $ISSUERACCOUNT=''; 
  $FISCALYEAR = '';   
  $Fiscalmonth='';  
    
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ftl";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM getentrant ORDER BY id DESC LIMIT 1";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $FUELISSUANCEDATE = $row['FUELISSUANCEDATE'];
     $Fuelcardname = $row['Fuelcardname'];  
   $ISSUEDBY=$row['ISSUEDBY'];  
     $ISSUERTITLE   = $row['ISSUERTITLE']; 
     $ISSUERACCOUNT=$row['ISSUERACCOUNT']; 
   $FISCALYEAR=$row['FISCALYEAR']; 
   $Fiscalmonth=$row['Fiscalmonth']; 
   $id=$row['id'];     
      } 
  ?>
    
    
              <table width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Fuel Card Name</th>
                    <th>Target level</th>
                                        <th>Fuel Available</th> 
                    <th>Re-order</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $total=0;
                    $total2=0;
                    $s=mysqli_query($conn,"SELECT *,Fueltargetlevel-fuelvailable as reorder  FROM fuelcards  
                    where Fuelcardstatus = 'ACTIVE' AND Fuelcardname='$Fuelcardname'");
                    while($srow=mysqli_fetch_array($s)){
                      ?>
                      <tr>
                        <td><?php echo $srow['Fuelcardname']; ?></td>
                                                 
                                                <td><?php echo number_format($srow['Fueltargetlevel'],2); ?></td>
                                                
                                                
                                                <td>
                          <?php 
                            $sub=$srow['fuelvailable'];
                            echo number_format($sub,2);
                            $total+=$sub;
                          ?>
                        </td> 
                                                
                        <td>
                          <?php 
                            $sub=$srow['reorder'];
                            echo number_format($sub,2);
                            $total2+=$sub;
                          ?>
                        </td> 
                      </tr>
                      <?php
                    }
                  ?>
                  <tr>
                    <td colspan="2" align="right"><strong>Grand Total</strong></td>
                                        <td><strong><?php echo number_format($total,2); ?></strong></td>
                    <td><strong><?php echo number_format($total2,2); ?></strong></td>
                  </tr>
                </tbody>
              </table>
     
            </div> 
    
    <div class="span8">
   <div class="table-responsive mailbox-messages"> 
       
        <script type="text/javascript" src="fusion/js/fusioncharts.js"></script>
        <script src="fusion/js/fusioncharts.js"></script>
        <script src="fusion/js/fusioncharts.charts.js"></script>
        <script src="fusion/js/themes/fusioncharts.theme.zune.js"></script>
               
 
             <?php
       
     include("fusion/src/fusioncharts.php");
  
$hostdb = "localhost"; 
$userdb = "root";  
$passdb = "toor2"; 
$namedb = "ftl"; 

// Establish a connection to the database
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
 
if ($dbhandle->connect_error) {
exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?> 

<?php
  
    $strQuery = "SELECT * FROM fuelcards WHERE Fuelcardstatus = 'ACTIVE' ORDER BY Fuelcardname ASC";
  
    // Execute the query, or else return the error message.
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

    // If the query returns a valid response, prepare the JSON string
    if ($result) {
        // The `$arrData` array holds the chart attributes and data
        $arrData = array(
            "chart" => array(
              "caption" => "Current fuel available by card name",
              "paletteColors" => "#cdcdcd",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "20",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
              "xAxisLineColor" => "#000",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0"
            )
        );

        $arrData["data"] = array();

// Push the data into the array
        while($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
    
            "label" => $row["Fuelcardname"], 
      
            "value" => $row["fuelvailable"]
            )
        );
        }

        /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        $jsonEncodedData = json_encode($arrData); 
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 660, 331, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();

        // Close the database connection
        $dbhandle->close();
    }

?>

    <div id="chart-1"><!-- Fusion Charts will render here--></div> 
    </div>  </div> 
   
  </div>
             </div>  </div> 
            </div>
           </div> 
         </div>
        
       
<!--End-Chart-box--> 

    

<!--Footer-part-->
<div class="row-fluid"> 
</div>
<!--end-Footer-part-->
<!--<script src="../js/jquery.min.js"></script>-->
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.js"></script>  
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/matrix.wizard.js"></script> 
</body>
</html>
