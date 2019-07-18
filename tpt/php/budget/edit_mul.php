<?php

	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='index.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);

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
<link href="../../js/googleapis.js" rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />   
  <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">


<script src="../jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>

<script type="text/javascript">
  function 	calcTotal(objct){
      var id = objct.id;  //get elems id
			var num = id.charAt(id.length-1); //get number from id
      //start getting values
			var qty = parseFloat(document.getElementById('qua'+num).value);
			var unitcost = parseFloat(document.getElementById('ucoss'+num).value);
			var qtut = parseFloat(document.getElementById('qtut'+num).value);
			var oqtr = parseFloat(document.getElementById('1qtr'+num).value);
			var twoqtr = parseFloat(document.getElementById('2qtr'+num).value);
			var threeqtr = parseFloat(document.getElementById('3qtr'+num).value);
			var fourthqtr = parseFloat(document.getElementById('4qtr'+num).value);

			//set the apparopriate values as required
      document.getElementById('qttt'+num).value = ''+(oqtr + twoqtr + threeqtr + fourthqtr);
			document.getElementById('ttc'+num).value  = ''+(qty * unitcost * qtut);

    //get the new values  for further comparisons
     var		ttc = parseFloat(document.getElementById('ttc'+num).value);
		 var    qttt = parseFloat(document.getElementById('qttt'+num).value);
		 if(qttt>ttc){
			     document.getElementById('qttt'+num).style ="background-color:yellow;";
		 }
		 else {
			     document.getElementById('qttt'+num).style ="background-color: gainsboro;";
		 }
			}
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
        <a href="../budgeting.php" title="Home" class="tip-bottom"><i class="icon-home"></i> Home</a>&nbsp;
        
        </span>
          <h5> Update budget details  
          </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
<form method="post" action="update_mul.php">
<table class='table table-bordered' >
<tr>
  <th style="width:10%;">FINANCIAL PERIOD</th>
    <th style="width:17%;">ACCOUNT NUMBER</th>
    <th style="width:17%;">BUDGET DETAILS</th>  
	<th style="width:10%;text-align:center;">BUDGET AMOUNT</th> 
    <th style="width:9%;text-align:center;">FIRST QTR</th>
    <th style="width:9%;text-align:center;">SECOND QTR</th>
    <th style="width:9%;text-align:center;">THIRD QTR</th>
    <th style="width:9%;text-align:center;">FOURTH QTR</th>
	<th style="width:10%;text-align:center;">TOTAL SUM</th>
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];
	$res=$MySQLiconn->query("SELECT * FROM budgeting WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
		<input type="numeric" name="fy[]" value="<?php echo $row['financial_yr'];?>" class="form-control" />
        </td>
        <td>
		<input type="numeric" name="account[]" value="<?php echo $row['Accountcode'];?>" class="form-control" />
        </td>
        <td>
		<input type="numeric" name="fagix[]" value="<?php echo $row['Accountdetails'];?>" class="form-control" />
        </td>
        <td>
		<input type="numeric" name="tt[]" value="<?php echo $row['budgetamount'];?>" class="form-control" />
        </td>
          
         
        <td>
		<input type="numeric" name="fqone[]" onkeyUp = "calcTotal(this)"  id="fqone<?php echo $i; ?>" 
        value="<?php echo $row['1stqtr_estimate'];?>" class="form-control" />  </td>
        <td>
		<input type="numeric" name="fqtwo[]" onkeyUp = "calcTotal(this)"  id="fqtwo<?php echo $i; ?>" 
        value="<?php echo $row['2ndqtr_estimate'];?>" class="form-control" /> </td>
         
        <td>
		<input type="numeric" name="fqthree[]" onkeyUp = "calcTotal(this)" id="fqthree<?php echo $i; ?>" 
        value="<?php echo $row['3rdqtr_estimate'];?>" class="form-control" /> </td>
        
        <td>
		<input type="numeric" name="fourthqtr[]" onkeyUp = "calcTotal(this)" id="fourthqtr<?php echo $i; ?>" 
        value="<?php echo $row['4thqtr_estimate'];?>" class="form-control" /> </td>
        
        <td> <input type="numeric" name="qtt[]" value="<?php echo $row['qtr_totals'];?>" id="qttt<?php echo $i; ?>"  class="form-control" /> </td>
        
        
		</tr>
		<?php
	}
}
?>
<tr>
<td colspan="10">
<center><button type="submit" name="savemul" class=""><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="index.php" class=""><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a></center>
<br>
</td>
</tr>
</table>
</form>
 
        </body>
</html>
