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
		   
		$fagone = $_POST["fagone$i"];   $fagtwo = $_POST["fagtwo$i"];   $fagthree = $_POST["fagthree$i"];  
		  
		$tt = $_POST["ttcactive$i"];
 
		$fqone = $_POST["1qtr$i"];
		$fqtwo = $_POST["2qtr$i"];
		$fqthree = $_POST["3qtr$i"];
        $fourthqtr = $_POST["4qtr$i"];
		$qtt = $_POST["qttt$i"];

		$sql="INSERT INTO budgeting(financial_yr,   subjectofprocurement,
		                            Qtypro, costcurrency, sourceoffunding,
				                    budgetamount, 1stqtr_estimate,2ndqtr_estimate,3rdqtr_estimate, 4thqtr_estimate, qtr_totals) 
				VALUES('".$fy."','".$account."', 
				'".$fagone."', '".$fagtwo."', '".$fagthree."',
				'".$tt."', '".$fqone."','".$fqtwo."','".$fqthree."','".$fourthqtr."', '".$qtt."' )";

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
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pcms</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="../../plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href="../../plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="../../plugins/bootstrap-slider/slider.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

   <link rel="stylesheet" href="../../assets/notifier2.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css"> 
  
  
 <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css"> 
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons --> 
  
  
  

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
  
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
          <div class="box box-primary" style="border:0px;">
               <a href="../budgeting.php" class="btn btn-primary btn-block margin-bottom"> Budgeting module</a> 

              <div class="box-tools pull-right">
                <div class="has-feedback"> 
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
             <!-- /.box-header -->
             <div class="box-body no-padding">
             <div class="mailbox-controls">
             <!-- Check all button -->

              </div>
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">
             
<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
     
	<table class='table table-bordered'>

    <tr>
    <th>##</th>
    <th style="width:7%;">FINANCIAL PERIOD</th>
    <th style="width:20%;">SUBJECT OF PROCUREMENT</th>
    <th style="width:4%;text-align:center;">QTY</th>
    <th style="width:5%;text-align:center;">CURRENCY</th>
    <th style="width:8%;text-align:center;">SOURCE OF FUNDING</th>  
	<th style="width:10%;text-align:center;">PROCUREMENT AMOUNT</th> 
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
        <select name="fiy<?php echo $i; ?>" id="fiy<?php echo $i; ?>" required="required" style="height:22px;padding: 0px 0px; ">
    <option></option>
    <option>FY/2017-2018</option>
    <option>FY/2019-2020</option>
    </select>
        </td>
        
     
     <td><input type="numeric"  name="account<?php echo $i; ?>" id="account<?php echo $i; ?>" required="required"   class='form-control'
     style="width:100%;padding: 0px 0px;" /> 
     </td>
      
     <td><input type="numeric" name="fagone<?php echo $i; ?>" id="fagone<?php echo $i; ?>" required="required"   class='form-control'
     style="width:100%;padding: 0px 0px; text-align:center;" />  
    
     </td>
     
     <td><select name="fagtwo<?php echo $i; ?>" id="fagtwo<?php echo $i; ?>" required="required"   class='form-control'
     style="width:100%;padding: 0px 0px;" /> 
      <option>UGX</option>
     </select>
     </td>
     
     <td><select name="fagthree<?php echo $i; ?>" id="fagthree<?php echo $i; ?>" required="required"   class='form-control'
     style="width:100%;padding: 0px 0px;" /> 
      <option></option>
      <option>GOU</option>
      <option>NTR</option>
      <option>GOU/NTR</option>
     </select>
     </td>
     
	<input type="hidden" onkeyUp = "calcTotal(this)" name="qua<?php echo $i; ?>" id="qua<?php echo $i; ?>"  value="1"/> 
        
    <input type="hidden" onkeyUp = "calcTotal(this)" name="ucoss<?php echo $i; ?>" id="ucoss<?php echo $i; ?>"   /> 
    
    <input type="hidden" onkeyUp = "calcTotal(this)" name="qtut<?php echo $i; ?>" id="qtut<?php echo $i; ?>" value="1" /> 
    
    <input type="hidden" name="ttc<?php echo $i; ?>" id="ttc<?php echo $i; ?>" class='form-control'
     style="width:100%;" />
     
    
    <td><input type="numeric" name="ttcactive<?php echo $i; ?>" id="ttcactive<?php echo $i; ?>" required="required"  placeholder="sum" class='form-control'
     style="width:100%;padding: 0px 0px;" /></td>
    

    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="1qtr<?php echo $i; ?>" id="1qtr<?php echo $i; ?>" class="form-control"
    style="width:100%;padding: 0px 0px;" /></td>
    
    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="2qtr<?php echo $i; ?>" id="2qtr<?php echo $i; ?>" class="form-control"
    style="width:100%;padding: 0px 0px;" /></td>
        
    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="3qtr<?php echo $i; ?>" id="3qtr<?php echo $i; ?>" class="form-control"
    style="width:100%;padding: 0px 0px;" /></td>
    
    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="4qtr<?php echo $i; ?>" id="4qtr<?php echo $i; ?>" class="form-control"
    style="width:100%;padding: 0px 0px;" /></td>

    <td><input type="numeric" name="qttt<?php echo $i; ?>" id="qttt<?php echo $i; ?>" readonly="readonly" class="form-control"
    style="width:100%;padding: 0px 0px;" /></td>
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
