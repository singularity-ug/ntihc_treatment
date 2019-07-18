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
	include_once 'dbcon.php';
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
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid black;
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
          <a href="../budget_mgr.php" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
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
       
<form method="post" name="frm">

  <td colspan="100%">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>
 
    <label>
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span>
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
    </label>&nbsp;&nbsp
     <a href="../budget_mgr.php" style="font-weight:bold; font-size:16px;"><i class="glyphicon glyphicon-back" ></i> &nbsp; Home page </a>

    </td>
<br>
<table class='table table-bordered table-responsive' style="margin-left: 0px; width:100%;">
<tr>
<th style="background-color:#ecf0f5;">##</th>
   <th style="text-transform:uppercase; background-color:#f0f0f0;">ID</th>
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Financial period</th>
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Budget details</th>
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Unit.type</th>
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Qty</th>
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Unit.cost</th>
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Total.cost</th>
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Budgetline</th>
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Code</th>
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Cost description</th> 
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Programme</th>
   <th style="text-transform:uppercase;background-color:#ecf0f5;">Programme code</th>
   <th style="text-transform:uppercase;background-color:#f0f0f0;">Status</th> 
</tr>

<?php
	$res = $MySQLiconn->query("SELECT * FROM budget WHERE periodstatus = 'Active' AND Approval = 'Pending' ");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['financial_period']; ?></td>
			<td><?php echo $row['budgetdetails']; ?></td>
			<td><?php echo $row['unit_type']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
			<td><?php echo $row['unit_cost']; ?></td>
			<td><?php echo $row['totalcost']; ?></td> 
			<td><?php echo $row['budgetline']; ?></td>
			<td><?php echo $row['code']; ?></td>
			<td><?php echo $row['Costdescription']; ?></td>
			<td><?php echo $row['programme']; ?></td> 
			<td><?php echo $row['programecode']; ?></td> 
			<td><?php echo $row['budgetstatus']; ?></td> 
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr> 
	</tr>
    <?php
}

?>

</table>
</form>
 
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