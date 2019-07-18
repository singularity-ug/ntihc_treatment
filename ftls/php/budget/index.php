<?php
	include_once 'dbcon.php';
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
<form method="post" name="frm">
<table class='table table-bordered table-responsive' >
<tr>
<th>##</th>
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
	$res = $MySQLiconn->query("SELECT * FROM budgeting");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
			<td><?php echo $row['financial_yr']; ?></td>
			<td><?php echo $row['Accountcode']; ?></td>
			<td><?php echo $row['Accountdetails']; ?></td>
			<td><?php echo $row['budgetamount']; ?></td>
			<td><?php echo $row['1stqtr_estimate']; ?></td>
			<td><?php echo $row['2ndqtr_estimate']; ?></td>
			<td><?php echo $row['3rdqtr_estimate']; ?></td>
			<td><?php echo $row['4thqtr_estimate']; ?></td> 
			<td><?php echo $row['qtr_totals']; ?></td> 
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="10"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="10">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>


    <label style="margin-left:100px; width: 223px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span>
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
    </label>


    </td>
	</tr>
    <?php
}

?>

</table>
</form>
             
</body>
</html>