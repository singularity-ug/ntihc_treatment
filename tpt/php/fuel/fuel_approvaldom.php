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
 
 
<?php
  $id = $_GET['q'];  
  
  $SERIALNO = ''; 
  $DATECREATED  = ''; 
  $dnx = array();
  $fqx = array(); 
  $tmx = array();
  $pdx = array(); 
  $qtyx = array();
  $ord = array(); 
  $dri = array();  
  
  $TIMESTAMP='';
  $INITIATORDEPARTRMENT = '';
  $INITIATORTITLE = '';  
  $INITIATEDBY='';   
  $INITIATIONDATE = ''; 
  $SENDTO=''; 
  $ORDERNO = '';
  $INITIATORACCOUNT = '';   
  $ARBY = '';    
  $RVDBY='';
  $ARNAME='';   
  $RVDNAME = ''; 
  $ARDATE=''; 
  $RVDDATE = '';   
  $ARCOMMENT=''; 
  	  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ftl";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM fuellogs  WHERE `SERIALNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $SERIALNO = $row['SERIALNO'];  
	 $DATECREATED   = $row['DATECREATED'];  
	 $dnx[] = $row['REGISTRATIONNO'];
     $fqx[]    = $row['TYPE']; 
     $tmx[]       = $row['PRODUCT'];   
	 $pdx[]       = $row['LUBRICANT']; 
	 $qtyx[]        = $row['LITRE'];
     $ord[]       = $row['CURRENTODOREADING'];
	 $dri[]        = $row['DRIVER'];  
     $INITIATORDEPARTRMENT=$row['INITIATORDEPARTRMENT'];  
     $INITIATORTITLE   = $row['INITIATORTITLE'];  
	 $INITIATEDBY=$row['INITIATEDBY'];  
     $INITIATIONDATE   = $row['INITIATIONDATE']; 
     $SENDTO=$row['SENDTO'];    
     $ORDERNO=$row['ORDERNO'];  
     $ARBY   = $row['ARBY']; 
	 $ARNAME=$row['ARNAME'];  
     $ARDATE   = $row['ARDATE']; 
	 $RVDDATE   = $row['RVDDATE']; 
	 $ARCOMMENT   = $row['ARCOMMENT']; 
      }

  ?>
     
<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../css/matrix-style.css" />
<link rel="stylesheet" href="../../css/matrix-media.css" />
<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../../css/uniform.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> 

<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 

<link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">
 
 
  <?php
$connect = new mysqli("localhost", "root", "", "ftl");
$stdd ="";
if( $result = $connect->query("SELECT * FROM motorisedequipments WHERE GENERALSTATUS = 'OPERATIONAL' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['REGISTRATIONNO'] ." </option>";   }
  }
$connect->close();
?> 

<?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stssl ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 
 
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
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 
            </style>

                <form class="form-horizontal" method="post" action="fuel/fuel_updateapproval.php" style="height:auto;">   
   
			    <input type="hidden"  name="TIMESTAMP"  id="TIMESTAMP" value="<?php echo $ORDERNO; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  
                
                <input type="hidden"  name="ORDERNO"  id="ORDERNO" value="<?php echo $ORDERNO; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  
             
                <div class="col-sm-12">
               
      <div class="table-responsive mailbox-messages"> 
               
      <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
      <thead>
      <tr>  
   <th>REG NUMBER</th>
   <th>TYPE</th>
   <th>PRODUCT</th> 
   <th>LUBRICANT </th> 
   <th>QTY</th> 
   <th>ODO READING</th>
   <th>DRIVER</th>
      </tr>
      </thead>
      <tbody>
       
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr > 
                                                  
                                                  <td> <?php  echo $dnx[$s]; ?> </td>
                                                   
                                                  <td> <?php  echo $fqx[$s]; ?> </td> 
                                                  
                                                  <td> <?php echo $tmx[$s]; ?> </td>  
                                                  
                                                  <td> <?php echo $pdx[$s]; ?> </td> 
                                                  
                                                   <td> <?php echo $qtyx[$s]; ?> </td> 
                                                  
                                                   <td> <?php echo $ord[$s]; ?> </td>  
                                                    
                                                    <td> <?php echo $dri[$s]; ?> </td> 
                                                    
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
       
                  </div></div>
                  <input type="hidden" id="SERIALNO" name="SERIALNO" value="<?php echo $SERIALNO; ?>"  > 
                 
                 
               <div class="col-sm-4"> 
         
          <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:40%;border:0px;">Requested by</th> 
				<th style="width:60%;border:0px;"> <input type="text" id="INITIATORTITLE" name="INITIATORTITLE" value="<?php echo $INITIATORTITLE; ?> " 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
			  </table>      
               
                <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:40%;border:0px;">Name</th>  
				<th style="width:60%;border:0px;"> <input type="text" id="INITIATEDBY" name="INITIATEDBY"  value="<?php echo $INITIATEDBY; ?> " 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
               
               
               
              <table class="table-responsive" style="margin-top:-20px;">
              <table class="table" style="border:0px;">
              <tr>  
                <th style="width:40%;border:0px;">Uesr department</th> 
				<th style="width:60%;border:0px;"> <input type="text" id="INITIATORDEPARTRMENT" name="INITIATORDEPARTRMENT" value="<?php echo $INITIATORDEPARTRMENT; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
               </tr>
			  </table>
                
              <table class="table-responsive" style="margin-top:-20px;">
              <table class="table" style="border:0px;">
              <tr> 
                 <th style="width:40%;border:0px;">Date</th> 
				<th style="width:60%;border:0px;"> <input type="text" id="INITIATIONDATE" name="INITIATIONDATE" value="<?php echo $TIMESTAMP; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
			  </table>
              
              <table class="table-responsive" style="margin-top:-20px;">
              <table class="table" style="border:0px;">
              <tr>  
              <th style="width:60%;border:0px;"> </th>    
              </tr>
			  </table>
                 
              </div>
                    
                 
               <div class="col-sm-4"> 
               <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
               <tr>  
                <th style="width:40%;border:0px;">Authorised by</th> 
				<th style="width:60%;border:0px;"> <input type="text" id="ARBY" name="ARBY"  value="<?php echo $ARBY; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                    <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:40%;border:0px;">Name</th> 
				<th style="width:60%;border:0px;"> <input type="text" id="ARNAME" name="ARNAME"  value="<?php echo $ARNAME; ?> " 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>     
              </tr>
			  </table>  
              </tr>
			  </table>      
               
          
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>  
                 
                <th style="width:40%;border:0px;">Date</th> 
				<th style="width:60%;border:0px;"> <input type="text" id="ARDATE" name="ARDATE" value="<?php echo $ARDATE; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
              
             <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;"> 
               
                <th style="width:40%;border:0px;">Comment</th> 
				<th style="width:60%;border:0px;"> <textarea name="ARCOMMENT"   
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#fff; height:20px;"> <?php echo $ARCOMMENT; ?></textarea></th>   
                      
              </tr>
			  </table>  
         </div>
         
         <div class="col-sm-4"> 
          <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:40%;border:0px;">Approved by</th> 
				<th style="width:60%;border:0px;"> <input type="text" id="APPROVERTITLE" name="APPROVERTITLE"  value="<?php echo $desc; ?>"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
              </tr>
			  </table>      
               
           <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr>  
                 
                 <th style="width:40%;border:0px;">Name</th> 
				<th style="width:60%;border:0px;"> <input type="text" id="APPROVEDBYNAME" name="APPROVEDBYNAME"  value="<?php echo $nameofuser; ?>"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
             <input type="hidden" id="APPROVERDEPT" name="APPROVERDEPT"  value="<?php echo $dept; ?>"> 
              
            <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
                 <tr>      
                 <th style="width:40%;border:0px;">Date</th> 
				 <th style="width:60%;border:0px;"> <input type="text" id="APPROVALDATE" name="APPROVALDATE"  value="<?php echo date('Y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
              
            
              <table class="table-responsive" style="margin-top:-20px;">
              <table class="table" style="border:0px;">
              <tr>   
                <th style="width:40%;border:0px;">Comment</th> 
				<th style="width:60%;border:0px;"> <textarea id="APPROVERCOMMENT" name="APPROVERCOMMENT"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:20px;"> </textarea></th>    
              </tr>
			  </table>
              
               <table class="table-responsive" style="margin-top:-20px;">
                 <table class="table" style="border:0px;">
                 <tr>      
                 <th style="width:40%;border:0px;">
                 <input type="radio" name="APPROVALSTATUS" id="APPROVALSTATUS" value="APPROVED" checked>
                <label for="APPROVED">Approve</label>
                 </th> 
				<th style="width:40%; border:0px;"> 
                <input name="APPROVALSTATUS" type="radio" id="APPROVALSTATUS" value="REJECTED">
		        <label for="REJECTED">Reject</label> </center>
                </th>
                   
                 
                <th style="width:20%;border:0px;">
                <input type="submit" name="button" id="button" value="Confirm "/> </th>   
              </tr>
			  </table> 
              
                   </div>
              
           
                  
               
               
               
           
             
                    </form> 