
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
  $id =  $_GET['purchaseid'];  
  $purchaseid = '';  
  $date = ''; 
  $name = '';   
  $total = '';   
  $Approval = '';   
  $Title = ''; 
  $Yearval = '';   
  $Monthno = '';  
  $Description = '';     
  $Toapprover = ''; 
   
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ftl";

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
	 $Toapprover = $row['Toapprover'];   
	 
	 $Yearval = $row['Yearval'];   
	 $Monthno = $row['Monthno']; 
	 $Description = $row['Description'];  
	  } 
  ?>
  
 <?php
$connect = new mysqli("localhost", "root", "", "ahr");
$stssl ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?>  
  
    </head>  
 <section class="invoice">
      <!-- title row -->
      <div class="row">
       
        <script>
function myFunction() {
    window.print();
}
</script>
  
       
       <div class="col-sm-2">
       </div>
        <div class="col-sm-8">
          <img src="../../img/logsbig3.png" width="100%" height="30%"> 
                 <center><p style="font-weight:bold; font-size:11px;"> MEMORANDUM FOR FUEL RE-LOADING </p></center>
        
        <form class="form-horizontal" action="" method="POST" style="height:auto; font-weight:normal;">
         <div class="panel-body">   
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:30%; text-align:left; border:0px;background-color:#fff;">Ref: </th>
               <td style="width:70%;border:0px;background-color:#fff;"> KCCA/AHR/FTL/<?php  echo $purchaseid; ?>/<?php  echo $Yearval; ?>/<?php  echo $Monthno; ?> </td> 
                 
			</tr>             
            </table>  
         
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:30%; text-align:left; border:0px;">Date </th>
               <td style="width:70%;border:0px;background-color:#fff;"><?php  echo $date; ?>  </td> 
                 
			</tr>             
            </table>  
           
              <?php
					$a=mysqli_query($conn,"select * from details where purchaseid='$id'");
					$arow=mysqli_fetch_array($a);
					
					$b=mysqli_query($conn,"select * from purchase where purchaseid='$id'");
					$brow=mysqli_fetch_array($b);
				?>
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:30%; text-align:left; border:0px;background-color:#fff;">To </th>
               <td style="width:70%;border:0px;background-color:#fff;">   <?php echo $brow['Toapprover']; ?>  </td> 
                 
			</tr>             
            </table>  
            
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:30%; text-align:left; border:0px;background-color:#fff;">Through </th>
               <td style="width:70%;border:0px;background-color:#fff;"> <?php echo $brow['Throughonetitle']; ?> </td>  
			</tr>             
            </table>         
               
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
        <th style="width:30%; text-align:left; border:0px;background-color:#fff;">From</th>
        <td style="width:70%;border:0px;background-color:#fff;">  <?php echo $brow['Title']; ?>  </td>  
              </tr>
			  </table> 
            
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
        <th style="width:30%; text-align:left; border:0px;background-color:#fff;">Subject</th>
        <td style="width:70%;border:0px;background-color:#fff;"> <b style="font-size:12px;">Request for loading of fuel cards worth UGX <?php echo number_format($brow['total'],0); ?> shillings</b> </td>  
              </tr>
			  </table>     
 
      
            <br>
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
        <td style="width:100%;border:0px;background-color:#fff;"> Reference is made to the above. </td>  
              </tr>
			  </table>  
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
        <td style="width:100%;border:0px;background-color:#fff;"><?php  echo $Description; ?>  </td>  
              </tr>
			  </table>  
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
        <td style="width:100%;border:0px;background-color:#fff;">Below is a summary of cards and fuel required.</td>  
              </tr>
			  </table>       
						 
                        <p></p>
                        
							<table width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>Fuel Card Name</th>
										<th>Current Fuel Available</th>
										<th>Fuel Required</th>
										<th>Fuel available after Approval</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$total=0;
										$total2=0;
										$s=mysqli_query($conn,"select * from details left join fuelcards on fuelcards.productid=details.productid 
										where purchaseid='$id'");
										while($srow=mysqli_fetch_array($s)){
											?>
											<tr>
												<td><?php echo $srow['Fuelcardname']; ?></td>
                                                
												<td><?php echo number_format($srow['fuelvailable'],2); ?></td>
                                                 
                                                
                                                <td>
													<?php 
														$sub=$srow['quantity'];
														echo number_format($sub,2);
														$total+=$sub;
													?>
												</td> 
                                                
												<td>
													<?php 
														$sub=$srow['fuelvailable']+$srow['quantity'];
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
                            <br>
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
               <th style="width:100%; text-align:left;border:0px; font-weight:normal:"> <?php echo $brow['name']; ?>  </th>   
			 </tr>             
            </table>  
        <br>
        <center><button onClick="myFunction()" >Print &nbsp;<?php echo $brow['Serial']; ?> </button>  &nbsp; &nbsp; 
             </form>