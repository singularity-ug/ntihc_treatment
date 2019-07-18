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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 

 <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

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
        <a href="fleet_administrator.php" title="Home" class="tip-bottom"><i class="icon-home"></i> Home</a>&nbsp;
        
        </span>
          <h5>   
          </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
            <div class="panel-body"> 
             <img src="../img/logsbig.png" width="100%" height="30%">  </div>
                 <center><p style="font-weight:bold; font-size:11px;"> FUEL BUDGETING </p></center>
           <div class="span3"> 
       
              
              <ul class="site-stats" 
               style="height:auto; font-weight:normal;border: 2px solid #fcfcfc; border-radius: 2px; border-right: 2px solid #fcfcfc; 
               border-left: 0px; border-top: 0px; border-bottom: 5px solid #fcfcfc;">
               
                <li class=" "><i class="icon-plus" style="color:green;"></i>  
                <small style="font:bold 14px 'Aleo'; text-shadow:1px 1px 2px #000; color:#fff;"> Budget analysis</small>
                <strong>
               
                </strong> </li> 
                
                <li class=" "> <a href="budget/index.php"><i class="icon-share" style="color:green;"></i>  
                <small style="font:bold 14px 'Aleo'; text-shadow:1px 1px 2px #000; color:#fff;">Budget update center </small></a>
                <strong>
                 
                </strong> </li>
                 
              </ul> 
         
         <br> 
                
               <form method="post" action="budget/add-data.php" >
 
<table class="table table-bordered" style="border:0px;">
<td style="border:0px;"><center><b style="font-size:15px;">Add new fuel budget</b></center></td>
</tr>
<td style="border:0px;">Enter how many records you want to insert</td>
</tr>

<tr>
<td style="border:0px;">
<input type="numeric" name="no_of_rec" placeholder="Like: 1 , 2 " maxlength="2" pattern="[0-9]+" class="form-control" autocomplete="off" required  style="text-align:center;"/>
</td>
</tr>

<tr>
<td style="border:0px;"><center><button type="submit" name="btn-gen-form" 
style="height: 22px; color: #000;">
<i class="glyphicon glyphicon-plus"></i> Generate</button></center> 
  
</td>
</tr>

</table>

</form>   
                
    <form class="form-horizontal" action="budget/new_account_process.php" method="POST" 
    
    
    
              style="height:auto; font-weight:normal;border: 2px solid #eee; border-radius: 2px; border-right: 2px solid #eee; 
              border-left: 0px; border-top: 0px; border-bottom: 5px solid #eee;">
         
             <td style="border:0px;"><center><b style="font-size:15px;">Fuel budget Accounts </b></center></td><br>
             <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stss ="";
if( $result = $connect->query("SELECT SOURCEOFFUND FROM purposecategory GROUP BY SOURCEOFFUND asc"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['SOURCEOFFUND'] ." </option>";   }
  }
$connect->close();
?>    
              
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
   <th style="border:0px; background-color:#fff; width:100%;"><b>New account details</b></th>  
   </tr>
   </thead>
   <tbody>
   <tr>      
   <td style="border:0px;"><select name="Accountdetails" id="Accountdetails"  required="required" 
				  style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; height:22px; ">
                    <option></option> 
          <?php   echo $stss; ?> 
        </select>
                   
              </tr>
			  </table>  
              
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
   <th style="border:0px; background-color:#fff; width:80%;"><b>Account number</b></th> 
   <th style="border:0px; background-color:#fff; width:20%; text-align:center;"><b>Action</b></th> 
   </tr>
   </thead>
   <tbody>
   <tr>      
   <td style="border:0px;"><input type="numeric" name="Accountcode" id="Accountcode"  required="required" 
				  style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; ">  
                  
                <td style="border:0px;background-color:#f9f9f9; text-align:right;">   <input type="submit" name="button" id="button" value="Add"/>  </td>
              </tr>
			  </table>  
       
              <input type="hidden" name="Createdby" id="Createdby"  value="<?php  echo $nameofuser; ?>"  readonly="readonly" 
		      style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; ">  
                
               <input type="hidden" name="Accountststus" id="Accountststus"  value="Active">  
             
               <br>
               
       </form>
       <BR>
              
         
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
 $dbname = "fleet";
 
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
										<th>Financial year</th>
										<th>Account number</th>
                                        <th>Account details</th> 
										<th>Budget amount</th>
                                        <th>% utilised</th>
                                        <th>% Remaining</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$total=0;
										$total2=0;
										$total3=0;
										$s=mysqli_query($conn,"SELECT *,qtr_totals / budgetamount * 100 as remaining, 
										                                (budgetamount / budgetamount * 100)-(qtr_totals / budgetamount * 100) as utilised  FROM budgeting");
										while($srow=mysqli_fetch_array($s)){
											?>
											<tr>
												<td><?php echo $srow['financial_yr']; ?></td>
                                                 
                                                <td><?php echo $srow['Accountcode']; ?></td>
                                                <td><?php echo $srow['Accountdetails']; ?></td>
                                                
                                                <td>
													<?php 
														$sub=$srow['budgetamount'];
														echo number_format($sub,2);
														$total+=$sub;
													?>
												</td> 
                                                
												<td>
													<?php 
														$sub=$srow['utilised'];
														echo number_format($sub,2);
														$total2+=$sub;
													?>
												</td> 
                                                
                                                <td>
													<?php 
														$sub=$srow['remaining'];
														echo number_format($sub,2);
														$total2+=$sub;
													?>
												</td> 
											</tr>
											<?php
										}
									?>
									<tr>
										<td colspan="3" align="right"><strong>Grand Total</strong></td>
                                        <td><strong><?php echo number_format($total,2); ?></strong></td> 
                                        <td colspan="2" align="right"><strong>   </strong></td>
									</tr>
								</tbody>
							</table>
     
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
