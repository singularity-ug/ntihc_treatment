 
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
  header('location:index.php');
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
 
 
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
   border-top: 2px solid #f9f9f9;
line-height: 1.0;
padding: 3px;
vertical-align: center;
background-color: #f9f9f9;
color: #000;
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
  

<?php 
  $id =  $_GET['q'];  
  $purchaseid = '';  
  $date = ''; 
  $name = '';   
  $total = '';   
  $Approval = '';   
  $Title = ''; 
  $Yearval = '';   
  $Monthno = '';  
  $Description = '';     
   
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM purchase WHERE `purchaseid` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $purchaseid  = $row['purchaseid'];
     $date = $row['date'];
     $name = $row['name'];   
	 $total = $row['total']; 
	 $Approval = $row['Approval']; 
	 $Title = $row['Title']; 
	 
	 $Yearval = $row['Yearval'];   
	 $Monthno = $row['Monthno']; 
	 $Description = $row['Description'];  
	  } 
  ?>
  
 <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stssl ="";
if( $result = $connect->query("SELECT * FROM panel WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?>  
  
 
        <form class="form-horizontal" action="fuel/get_review_update.php" method="POST" style="height:auto; font-weight:normal; background-color:#f9f9f9;">
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:30%; text-align:left; border:0px;background-color:#f9f9f9;">Ref: </th>
               <td style="width:70%;border:0px;background-color:#f9f9f9;"><input type="text" name="Ref" id="Ref" readonly="readonly"
                value="KCCA/AHR/FTL/<?php  echo $purchaseid; ?>/<?php  echo $Yearval; ?>/<?php  echo $Monthno; ?>"  
			   style="width:100%; font-size:11px;  background-color:#f9f9f9; text-align:left; font-weight:bold; border:0px;border:0px; text-align:left;"> </td> 
                 
			</tr>             
            </table>  
         <input type="hidden" name="purchaseid" id="purchaseid"  value="<?php  echo $purchaseid; ?>">
         
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:30%; text-align:left; border:0px; background-color:#f9f9f9;">Date </th>
               <td style="width:70%;border:0px;background-color:#f9f9f9;"><input type="text" name="date" id="date" readonly="readonly" value="<?php  echo $date; ?>"  
			   style="width:100%; font-size:11px;  background-color:#f9f9f9; text-align:left; font-weight:bold; border:0px; text-align:left;"> </td> 
                 
			</tr>             
            </table>  
           
            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:30%; text-align:left; border:0px;background-color:#f9f9f9;">To </th>
               <td style="width:70%;border:0px;background-color:#f9f9f9;"> <select name="Toaccount" class="form-control"  required="required"   
			   style="width:100%; font-size:11px;  background-color:#fff; text-align:left; font-weight:bold;text-align:left;">  
             <option></option>
             ttt     = "<?php   echo $stssl; ?>"; 
            </select>
               
               </td> 
                 
			</tr>             
            </table>  
            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead>
		<tr> 
               <th style="width:30%; text-align:left; border:0px;background-color:#f9f9f9;">Through </th>
               <td style="width:70%;border:0px;background-color:#f9f9f9;"><input type="text" name="Throughonetitle" id="Throughonetitle" required="required" 
               value="<?php  echo $desc; ?>"  
			   style="width:100%; font-size:11px;  background-color:#f9f9f9; text-align:left; font-weight:bold;  border:0px; text-align:left;"> </td> 
               
               <input type="hidden" name="Throughone" id="Throughone" required="required"   value="<?php  echo $nameofuser; ?>" />    
			</tr>             
            </table>         
               
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
        <th style="width:30%; text-align:left; border:0px;background-color:#f9f9f9;">From</th>
        <td style="width:70%;border:0px;background-color:#f9f9f9;"><input type="text" name="Title" id="Title" value="<?php  echo $Title; ?>" readonly="readonly"
				  style="width:100%; font-size:11px; background-color:#f9f9f9; text-align:left; font-weight:bold;  border:0px; "> </td>  
              </tr>
			  </table> 
              <?php
					$a=mysqli_query($conn,"select * from details where purchaseid='$id'");
					$arow=mysqli_fetch_array($a);
					
					$b=mysqli_query($conn,"select * from purchase where purchaseid='$id'");
					$brow=mysqli_fetch_array($b);
				?>
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
        <th style="width:30%; text-align:left; border:0px;background-color:#f9f9f9;">Subject</th>
        <td style="width:70%;border:0px;background-color:#f9f9f9;"> <b style="font-size:12px;">
        Request for loading of fuel cards worth UGX <?php echo number_format($brow['total'],2); ?> shillings</b> </td>  
              </tr>
			  </table>     
              
        
<?php
  $id =  $_GET['q'];  
  $purchaseid = ''; 
  $dFuelcardname = array();
  $dquantity = array();  
 
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "select * from details left join fuelcards on fuelcards.productid=details.productid 
										where `purchaseid` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $purchaseid = $row['purchaseid']; 
	 $dFuelcardname[] = $row['Fuelcardname'];
     $dquantity[]    = $row['quantity']; 
      }

  ?>
      <br /> 
      
      
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
        <td style="width:100%;border:0px;background-color:#f9f9f9;"> Reference is made to the above. </td>  
              </tr>
			  </table>  
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
        <td style="width:100%;border:0px;background-color:#f9f9f9;"><?php  echo $Description; ?>  </td>  
              </tr>
			  </table>  
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
        <td style="width:100%;border:0px;background-color:#f9f9f9;">Below is a summary of cards and fuel required. </td>  
              </tr>
			  </table>               
        
       <table width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr> 
   <th style="width:65%;border:0px; ">CARD NAME </th>  
   <th style="width:35%;border:0px; text-align:center;">AMOUNT</th>  
         
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dFuelcardname); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($dquantity[$s]);?>
                                                            <tr > 
                                                    <td style=" background-color:#fff; color:#000;"> <?php  echo $dFuelcardname[$s]; ?>  </td>
                                                       
                                                    <td  style=" background-color:#fff;color:#000;text-align:right;">  <?php echo $dquantity[$s]; ?> </td> 
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
                                
     <table width="100%" class="table table-striped table-bordered table-hover" style="margin-top:-20px;">
								<thead>
									<tr> 
                 <th style="width:65%; text-align:left;">TOTAL FUEL REQUIRED</th>
                 <td style="width:35%; text-align:right;"> <?php echo number_format($brow['total'],2); ?> </td>   
			 </tr>             
             </table>      
       
             <p>Authoriser's comment </p>
             <table width="100%" class="table table-striped table-bordered table-hover" style="margin-top:0px;">
								<thead>
							    <tr> 
                 <th style="width:100%; text-align:left;"> <textarea name="Throughonecomment" required="required"
                 style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:normal; border:0px; "></textarea>  </td>  
		    </tr>             
            </table>
             
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	margin-top:-20px;text-align:left;" width="100%">
		<thead> 
		<tr> 
                 <th style="width:40%; border: 0px; text-align:left; background-color:#f9f9f9;">ConfirmationDate</th>
                 <td style="width:60%; border: 0px; text-align:right;background-color:#f9f9f9;"> 
				 <input type="date" name="Throughoneaccountdate" value="<?php echo date('Y-m-d'); ?>" required="required"
                 style="width:100%; font-weight:normal; background-color:#f9f9f9; text-align:left; font-weight:normal; border:0px; " /> </td>   
			 </tr>             
             </table>    
              
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>    
                <th style="width:40%;border:0px; background-color:#f9f9f9;">
                <input type="radio" name="Approval" id="Approval" value="Reviewed" checked style="margin-top: -4px;"/>&nbsp;Review 
                </th> 
				<th style="width:40%; border:0px;background-color:#f9f9f9;"> 
                <input name="Approval" type="radio" id="Approval" value="Reject" style="margin-top: -4px;"/> &nbsp;Reject
                </th>
                    
              <th style="width:20%;border:0px;background-color:#f9f9f9;"><input type="submit" name="button" id="button" value="Save" style="border-radius: 11px; height: 38px;"/></th>   
              </tr>
			  </table>  
              <br />
                
 </form>