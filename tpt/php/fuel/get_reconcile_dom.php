 
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
   border-top: 1px solid #000;
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
  

<?php 
  $id =  $_GET['q'];  
  $Fuelcardname = '';  
  $Reconciliation = ''; 
  $Recstatus = '';  
  
  $FUELISSUANCEDATE = '';  
  $Invoicedate = ''; 
  $Loadinvoiceno = ''; 
  $Fueloaded = '';  
  $Fiscalmonth = '';  
  $Fiscalpaymentmonth = '';  
   
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ftl";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM fuellogs WHERE `id` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $id  = $row['id'];
     $Fuelcardname = $row['Fuelcardname'];
     $Reconciliation = $row['Reconciliation']; 
	 $Recstatus  = $row['Recstatus'];        
	 
	 $FUELISSUANCEDATE  = $row['FUELISSUANCEDATE'];
     $LoadInvoicedate = $row['LoadInvoicedate'];
     $invoiceno = $row['Loadinvoiceno']; 
	 $Fueloaded  = $row['Fueloaded'];
     $Fiscalmonth = $row['Fiscalmonth'];
	 $Fiscalpaymentmonth  = $row['Fiscalpaymentmonth'];
	  
	  } 
  ?>
   
    
        
         <form class="form-horizontal" action="get_reconcile_dom_processor.php" method="POST" style="height:auto; font-weight:normal;">
             
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:30%; text-align:left; border:0px;background-color:#fff; color:#fff;"> . </th>
               <td style="width:70%;border:0px;background-color:#fff;"> </td> 
                 
			</tr>             
            </table>    
         
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
       
   <th style="border:2px solid #ecf0f5;">S/NO.</th>
   <th style="border:2px solid #ecf0f5;">Request date</th> 
   <th style="border:2px solid #ecf0f5;">Invoice date</th>
   <th style="border:2px solid #ecf0f5;">Invoice No.</th> 
   <th style="border:2px solid #ecf0f5;">Discount</th>
   <th style="border:2px solid #ecf0f5;">Card name</th>
   <th style="border:2px solid #ecf0f5;">Amount loaded</th>  
   <th style="border:2px solid #ecf0f5;">Payment period</th> 
   <th style="border:2px solid #ecf0f5;text-align:center;">Action</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="border:2px solid #f9f9f9;">
    <input type="numeric" name="id" id="id" readonly="readonly" value="<?php  echo $id; ?>"
   style="width:100%; text-align:center;background-color:#fff; height:20px; ">
   </td>    
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" name="FUELISSUANCEDATE" id="FUELISSUANCEDATE"  value="<?php  echo $FUELISSUANCEDATE; ?>"  readonly="readonly"
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
    
	<td style="border:2px solid #ecf0f5;"><input type="date" name="LoadInvoicedate" id="LoadInvoicedate" value="<?php  echo $LoadInvoicedate; ?>"   required="required"
    style="width:100%; text-align:left;background-color:#fff; height:22px;"></td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" name="Loadinvoiceno" id="Loadinvoiceno" value="<?php  echo $Loadinvoiceno; ?>"  required="required" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
    <td style="border:2px solid #ecf0f5;"><input type="numeric" name="Discountallowed" id="Discountallowed" value="2.5"  required="required" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" name="Fuelcardname" id="Fuelcardname"  value="<?php  echo $Fuelcardname; ?>"  readonly="readonly" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" name="Fueloaded" id="Fueloaded" value="<?php  echo $Fueloaded; ?>"      
    style="width:100%; text-align:left;background-color:#fff;"></td> 
      
    
	<td style="border:2px solid #ecf0f5;"><select name="Fiscalpaymentmonth" id="Fiscalpaymentmonth"  value="<?php  echo $Fiscalmonth; ?>"    
    style="width:100%; text-align:left;background-color:#fff;"> 
    <option><?php echo date('F'); ?> <?php echo date("Y");?></option>
    </select>
    </td> 
    
    <td style="border:2px solid #fff;"><center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" /></center> </td> 
				       				                        
   </tr>
  <tr>
 </tbody>
 </table>        
                     
                                
  <input type="hidden" name="Recstatus" value="Successfull" >
  
  <input type="hidden" name="Reconciliation"  value="Reconciled"> 
   
         
        </form>
        
         </div>   </div>     