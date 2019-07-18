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
  $APPROVERTITLE='';
  $APPROVEDBYNAME='';   
  $APPROVALDATE = ''; 
  $APPROVERCOMMENT=''; 
  $APPROVERDEPT = '';  
  $AUTHDEPT='';  
  	  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
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
	 $RVDNAME=$row['RVDNAME']; 
	 $RVDBY   = $row['RVDBY'];  
	 $APPROVERTITLE   = $row['APPROVERTITLE']; 
	 $APPROVEDBYNAME   = $row['APPROVEDBYNAME']; 
	 $APPROVALDATE=$row['APPROVALDATE']; 
	 $APPROVERCOMMENT   = $row['APPROVERCOMMENT']; 
	 $APPROVERDEPT   = $row['APPROVERDEPT']; 
	 $AUTHDEPT   = $row['AUTHDEPT'];  
      }

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
<link rel="stylesheet" href="../../js/googleapis.js" type='text/css'>
<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 

<link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">
 
 
<?php
$connect = new mysqli("localhost", "root", "toor2", "ftl");
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
  
             <div class="col-sm-12">
               
             <div class="table-responsive mailbox-messages"> 
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		 <thead> 
		 <tr> 
               <th style="width:80%; text-align:right; border:0px;background-color:#fff;">Requisition date </th>
               <td style="width:20%;border:0px;background-color:#fff; text-align:right;"> <?php echo $DATECREATED; ?> </td> 
                 
			</tr>             
            </table>
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:80%; text-align:right; border:0px;background-color:#fff;">Serial No. &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
               <td style="width:20%;border:0px;background-color:#fff;text-align:right;"><?php echo $ORDERNO; ?> </td> 
                 
			</tr>             
            </table>    
              <br>
         
    <table border="1"  id="mytable1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
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
       
                 
                  <input type="hidden" id="SERIALNO" name="SERIALNO" value="<?php echo $SERIALNO; ?>"  > 
                  
            <br>
     <table class="table-responsive" style="margin-top:4px;">
               <table class="table" style="border:0px;">
               <tr>  
                <th style="width:13.33333333%;border:0px;">Requested by</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $INITIATORTITLE; ?> </th>   
                  
                 <th style="width:13.33333333%;border:0px;">Authorised by</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $ARBY; ?></th>   
                 
                 <th style="width:13.33333333%;border:0px;">Approved by</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $APPROVERTITLE; ?></th>  
              </tr>
			  </table>      
               
               
                <table class="table-responsive" style="margin-top:-17px;">
             <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Name</th>  
				<th style="width:20%;border:1px solid;">  <?php echo $INITIATEDBY; ?>  </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $ARNAME; ?>  </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $APPROVEDBYNAME; ?> </th>   
                  
                  
              </tr>                            
			  </table> 
              
               <table class="table-responsive" style="margin-top:-17px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Department</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $INITIATORDEPARTRMENT; ?> </th>   
                  
                 
                 <th style="width:13.33333333%;border:0px;">Department</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $AUTHDEPT; ?>    </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Department</th> 
				<th style="width:20%;border:1px solid;">  <?php echo $APPROVERDEPT; ?>  </th>   
                  
                  
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-17px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $INITIATIONDATE; ?> </th>    
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:1px solid;">   <?php echo $ARDATE; ?>   </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:1px solid;">   <?php echo $APPROVALDATE; ?> </th>   
                  
                  
              </tr>
			  </table> 
            
         </div> </div> 
         <div class="col-sm-12"> 
         <form class="form-horizontal" method="post" action="fuel/fuel_updatereview.php" style="height:auto;">   
         
                <input type="hidden"  name="ORDERNO"  id="ORDERNO" value="<?php echo $ORDERNO; ?>" >  
            
               <table border="1"  id="mytable1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
   <th>&nbsp; Reviewed by</th>
   <th>&nbsp; Name</th>
   <th>&nbsp; Date</th>
   <th><center>&nbsp; Action</center></th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:33%;"><input type="text" id="RVDBY" name="RVDBY"  value="<?php echo $desc; ?> "  readonly="readonly" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
    <td style="width:33%;"><input type="text" id="RVDNAME" name="RVDNAME"  value="<?php echo $nameofuser; ?>"  readonly="readonly" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   
   <td style="width:24%;"> <input type="date" id="RVDDATE" name="RVDDATE"  value="<?php echo date('Y-m-d'); ?>" required="required"  
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   
   <input type="hidden" id="RVWERCOMMENT" name="RVWERCOMMENT" >   
              
                <input type="hidden" name="REVIEWFUEL" id="REVIEWFUEL" value="REVIEWED"  /> 
                 
                <input type="hidden" id="TIMESTAMP" name="TIMESTAMP"/>
                  
              
   <td style="width:10%;"> <center><input type="submit" name="button" id="button" value="Reviewed"/></center></td>
   </tr>
   <tr>
   </tbody>
   </table>
              
			    
              
              </div>     
            
                    </form> 
                       </div>    