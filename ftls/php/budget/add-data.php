<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{
	$total = $_POST['total'];

	for($i=1; $i<=$total; $i++)
	{
		$fy = $_POST["fiy$i"];
	    $account = $_POST["account$i"];
		  
		$tt = $_POST["ttcactive$i"];

        $fagix = $_POST["fagix$i"];
		 
		$fqone = $_POST["1qtr$i"];
		$fqtwo = $_POST["2qtr$i"];
		$fqthree = $_POST["3qtr$i"];
        $fourthqtr = $_POST["4qtr$i"];
		$qtt = $_POST["qttt$i"];

		$sql="INSERT INTO budgeting(financial_yr,
		        Accountcode, Accountdetails,
				budgetamount, 
				1stqtr_estimate,2ndqtr_estimate,3rdqtr_estimate, 4thqtr_estimate, qtr_totals) 
				VALUES('".$fy."','".$account."','".$fagix."', 
				'".$tt."', 
				'".$fqone."','".$fqtwo."','".$fqthree."','".$fourthqtr."',
				'".$qtt."' )";

		$sql = $MySQLiconn->query($sql);
	}

	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='index.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
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
          <h5> Add new budget details  
          </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
             
<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
     
	<table class='table table-bordered'>

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
	for($i=1; $i<=$_POST["no_of_rec"]; $i++)
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        
        <td>
        <select name="fiy<?php echo $i; ?>" id="fiy<?php echo $i; ?>" required="required" style="height:22px; ">
    <option></option>
    <option>2017-2018</option>
    <option>2019-2020</option>
    </select>
        </td>
        
          <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stssd ="";
if( $result = $connect->query("SELECT Accountcode FROM budgetaccount GROUP BY Accountcode asc"))
{ while ($row = $result->fetch_assoc() ) {   $stssd=$stssd. "<option> " . $row['Accountcode'] ." </option>";   }
  }
$connect->close();
?> 
         <td><select name="fagix<?php echo $i; ?>" id="fagix<?php echo $i; ?>" required="required"   class='form-control'
     style="width:100%;" />
        <option></option> 
        <?php   echo $stssd; ?> 
        </select>
     </td>
      
        
         <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stss ="";
if( $result = $connect->query("SELECT SOURCEOFFUND FROM purposecategory GROUP BY SOURCEOFFUND asc"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['SOURCEOFFUND'] ." </option>";   }
  }
$connect->close();
?> 
        <td><select name="fagix<?php echo $i; ?>" id="fagix<?php echo $i; ?>" required="required"   class='form-control'
     style="width:100%;" />
        <option></option> 
        <?php   echo $stss; ?> 
        </select>
     </td>
     
	<input type="hidden" onkeyUp = "calcTotal(this)" name="qua<?php echo $i; ?>" id="qua<?php echo $i; ?>"  value="1"/> 
        
    <input type="hidden" onkeyUp = "calcTotal(this)" name="ucoss<?php echo $i; ?>" id="ucoss<?php echo $i; ?>"   /> 
    
    <input type="hidden" onkeyUp = "calcTotal(this)" name="qtut<?php echo $i; ?>" id="qtut<?php echo $i; ?>" value="1" /> 
    
    <input type="hidden" name="ttc<?php echo $i; ?>" id="ttc<?php echo $i; ?>" class='form-control'
     style="width:100%;" />
     
    
    <td><input type="numeric" name="ttcactive<?php echo $i; ?>" id="ttcactive<?php echo $i; ?>" required="required"  placeholder="sum" class='form-control'
     style="width:100%;" /></td>
    

    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="1qtr<?php echo $i; ?>" id="1qtr<?php echo $i; ?>" class="form-control"
    style="width:100%;" /></td>
    
    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="2qtr<?php echo $i; ?>" id="2qtr<?php echo $i; ?>" class="form-control"
    style="width:100%;" /></td>
        
    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="3qtr<?php echo $i; ?>" id="3qtr<?php echo $i; ?>" class="form-control"
    style="width:100%;" /></td>
    
    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="4qtr<?php echo $i; ?>" id="4qtr<?php echo $i; ?>" class="form-control"
    style="width:100%;" /></td>

    <td><input type="numeric" name="qttt<?php echo $i; ?>" id="qttt<?php echo $i; ?>" readonly="readonly" class="form-control"
    style="width:100%;" /></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="10">

    <center><button type="submit" name="save_mul" style="height: 24px;" class=""><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button>

    <a href="../budgeting.php" class=""> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to menu</a></center>

    </td>
    </tr>
    </table>
    </form>
	<?php
}
?>
 
            
</body>
</html>
