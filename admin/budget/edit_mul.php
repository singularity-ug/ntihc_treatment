<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?> 
 
<?php

	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='index_draft.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap2.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
 
  
 
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
             	font-size: 12px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>


<script type="text/javascript">
  function 	calcTotalxx(objct){
      var id = objct.id;  //get elems id
			var num = id.charAt(id.length-1); //get number from id
      //start getting values
			var qty = parseFloat(document.getElementById('qua'+num).value);
			var unit_cost = parseFloat(document.getElementById('ucoss'+num).value);
			var qtut = parseFloat(document.getElementById('qtut'+num).value);
			var oqtr = parseFloat(document.getElementById('1qtr'+num).value);
			var twoqtr = parseFloat(document.getElementById('2qtr'+num).value);
			var threeqtr = parseFloat(document.getElementById('3qtr'+num).value);

			//set the apparopriate values as required
            document.getElementById('qttt'+num).value = ''+(oqtr + twoqtr + threeqtr);
			document.getElementById('ttc'+num).value  = ''+(qty * unitcost);

    //get the new values  for further comparisons
         var ttc = parseFloat(document.getElementById('ttc'+num).value);
		 var    qttt = parseFloat(document.getElementById('qttt'+num).value);
		 if(qttt>ttc){
			     document.getElementById('qttt'+num).style ="background-color:yellow;";
		 }
		 else {
			     document.getElementById('qttt'+num).style ="background-color: gainsboro;";
		 }
			}
    </script>
    
    
 <?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM budgetcoder WHERE codestatus = 'ACTIVE' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['budgetline'] . " </option>";   }
  }
$connect->close();
?>

 <?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stdd ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['period'] . " </option>";   }
  }
$connect->close();
?> 
 
 
 </head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php
  require('../connect/config.php');
  ?>
  <script src="js-script.js"></script>
  <script src="jquery.js"></script>
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../../index2.html" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
             </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
           
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container" style="background-color:white;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      
      
      
        
<form method="post" action="update_mul.php">

<table class='table table-bordered'>
<tr>  
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Financial period</th>
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Budget details</th>
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Unit.type</th>
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Qty</th>
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Unit.cost</th>
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Total.cost</th>  
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Action</th> 
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Comment</th> 
   
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];
	$res=$MySQLiconn->query("SELECT * FROM budget WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
		<select  name="fiy[]" value="<?php echo $row['financial_period'];?>" class="form-control"  style="width:100%;"/>
         ddd     = "<?php   echo $stdd; ?>";  
        </select>
        </td>
        <td>
		<input type="text" onKeyUp="dome(this)" name="bud[]" value="<?php echo $row['budgetdetails'];?>" class="form-control" style="width:100%;"/>
        </td>
        <td>
		<input type="text" name="unt[]" value="<?php echo $row['unit_type'];?>" class="form-control" style="width:100%;"/>
        </td>
        <td>
		<input type="text" onkeyUp = "calcTotalxx(this)" name="qua[]" value="<?php echo $row['quantity'];?>" class="form-control" style="width:100%;"/>
        </td>
        <td>
		<input type="text" onkeyUp = "calcTotalxx(this)" name="ucoss[]" value="<?php echo $row['unit_cost'];?>" class="form-control" style="width:100%;"/>
        </td>
        <td>
		<input type="text" name="ttc[]" value="<?php echo $row['totalcost'];?>" class="form-control" style="width:100%;"/>
        </td>
         
        <td>
        <select class='form-control' name="approvalx[]" value="<?php echo $row['approval'];?>"  style="background-color:#ecf0f5;width:100%;"/>
        <option <?php if ($approval=='pending') { echo 'selected="selected"';   } ?>>pending</option>   
        <option <?php if ($approval=='Confirmed') { echo 'selected="selected"';   } ?>>Confirmed</option> 
                                </select>
        </td>  
         
        <td> 
		<textarea name="Commentx[]" value="<?php echo $row['Comment'];?>" class="form-control" style="width:100%; height:19px;"/></textarea>
         </td> 
		</tr>
		<?php
	}
}
?>
<tr>

<td colspan="100%"><br> 
<button type="submit" name="savemul" class="btn btn-large btn-info"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="index_draft.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Draft budget</a>
<a href="../budget_mgr.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate new Records </a>

<br>
</td>
</tr>
</table>
</form>
</div>
 </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
   
</div>
<!-- ./wrapper -->
<!-- Morris.js charts -->
<script src="../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="../plugins/daterangepicker/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
 <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

         <!-- PAGE LEVEL SCRIPTS -->
    <script src="../../plugins/wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
    <script src="../../assets/plugins/bootstrap-wysihtml5-hack.js"></script> 
    <script src="../../assets/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="../../assets/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="../../assets/plugins/Markdown.Editor-hack.js"></script>
    <script src="../../assets/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>
<!-- jvectormap -->
<link href="../../assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
<script src="../../assets/lib/jquery/jquery.js"></script>
<script src="../../assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>

<script src="../plugins/ckeditor/ckeditor.js"></script>
<script src="../plugins/ckeditor/build-config.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>  