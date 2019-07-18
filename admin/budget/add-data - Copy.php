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

if(isset($_POST['save_mul']))
{
	$total = $_POST['total'];

	for($i=1; $i<=$total; $i++)
	{
		$fy = $_POST["fiy$i"];
		$bd = $_POST["bud$i"]; 
		$un = $_POST["unt$i"];
		$qu = $_POST["qua$i"];
		$ucoss = $_POST["ucoss$i"];
		$qtu = $_POST["qtut$i"]; 
		$tt = $_POST["ttc$i"];

		$fqone = $_POST["1qtr$i"];
		$fqtwo = $_POST["2qtr$i"];
		$fqthree = $_POST["3qtr$i"];

		$qtt = $_POST["qttt$i"]; 
		$bline = $_POST["bline$i"];
		$bcod = $_POST["bcod$i"];
		$bcosd = $_POST["bcosd$i"];
		$bpro = $_POST["bpro$i"];
		$bproc = $_POST["bproc$i"];  

		$sql="INSERT INTO budget(financial_period,budgetdetails, unit_type,quantity,unit_cost,qty_unittype,totalcost,1stqtr_estimate,2ndqtr_estimate,
		3rdqtr_estimate,
		qtr_totals,
		budgetline,
		code,
		Costdescription,
		programme,
		programecode) 
		        
		VALUES('".$fy."','".$bd."','".$un."','".$qu."','".$ucoss."','".$qtu."','".$tt."','".$fqone."','".$fqtwo."',
		'".$fqthree."',
		'".$qtt."',
		'".$bline."',
		'".$bcod."',
		'".$bcosd."',
		'".$bpro."',
		'".$bproc."')";
	

		$sql2 = $MySQLiconn->query($sql);
	
	}

	if($sql2)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='../budget_mgr.php';
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  
 
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

			//set the apparopriate values as required
      document.getElementById('qttt'+num).value = ''+(oqtr + twoqtr + threeqtr);
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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]--> 
 <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);
  
  var num = data[0].substring(3); 
  
  $("#bline"+num).val(data[2]); 
  $("#bcod"+num).val(data[3]);
  $("#bcosd"+num).val(data[4]); 
  $("#bpro"+num).val(data[5]);
  $("#bproc"+num).val(data[6]);  

}


function dome(ths){

  var bd   = ths.value;
  var idxx = ths.id; 
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "budgetsearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script> 
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php
  require('../connect/config.php');
  ?>
  
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
        <h5>
        
        </h5>
        <ol class="breadcrumb">
          
        </ol>
      </section>

      <!-- Main content -->
      <section class="content"> 
            <!-- /.box-header -->
            <div class="box-body">
      <?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
    
    
	<table class='table table-bordered'> 
    <tr>
    <th>##</th>
    <th>Financial period</th>
    <th>Budget details</th> 
    <th>Unit type</th>
    <th>Unit qty</th>
    <th>Unit cost</th> 
	<th>Total cost</th>
 
    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++)
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><select name="fiy<?php echo $i; ?>" id="fiy<?php echo $i; ?>"  placeholder="financial year" class='form-control' />
         ddd     = "<?php   echo $stdd; ?>";  
        </select>
        </td>
        
        <td><input type="text" onKeyUp="dome(this)" name="bud<?php echo $i; ?>" id="bud<?php echo $i; ?>" required="required" placeholder="budget details" class='form-control' />
        
        </td>
		 
        <td><input type="text" name="unt<?php echo $i; ?>" id="unt<?php echo $i; ?>"  required="required" placeholder="unit_type" class='form-control' /></td>
		<td><input type="text" onkeyUp = "calcTotal(this)" name="qua<?php echo $i; ?>" id="qua<?php echo $i; ?>"  value="1" required="required" class='form-control' /></td>
    <td><input type="numeric" onkeyUp = "calcTotal(this)" name="ucoss<?php echo $i; ?>" id="ucoss<?php echo $i; ?>" required="required" placeholder="unit_cost" class='form-control' /></td> 
		
     <input type="hidden" onkeyUp = "calcTotal(this)" name="qtut<?php echo $i; ?>" id="qtut<?php echo $i; ?>" value="1" disabled="" class='form-control' /> 

     <td><input type="text" name="ttc<?php echo $i; ?>" id="ttc<?php echo $i; ?>"  readonly="readonly" class='form-control' /></td>
         
      <input type="hidden" name="bline<?php echo $i; ?>" id="bline<?php echo $i; ?>" />   
      <input type="hidden" name="bcod<?php echo $i; ?>" id="bcod<?php echo $i; ?>"   />     
      <input type="hidden" name="bcosd<?php echo $i; ?>" id="bcosd<?php echo $i; ?>" />  
      <input type="hidden" name="bpro<?php echo $i; ?>" id="bpro<?php echo $i; ?>"   />  
      <input type="hidden" name="bproc<?php echo $i; ?>" id="bproc<?php echo $i; ?>" /> 

     <input type="hidden" onkeyUp = "calcTotal(this)" name="1qtr<?php echo $i; ?>" id="1qtr<?php echo $i; ?>"placeholder="1stqtr_estimate" class='form-control' /> 
     <input type="hidden" onkeyUp = "calcTotal(this)" name="2qtr<?php echo $i; ?>" id="2qtr<?php echo $i; ?>"placeholder="2ndqtr_estimate" class='form-control' /> 
     <input type="hidden" onkeyUp = "calcTotal(this)" name="3qtr<?php echo $i; ?>" id="3qtr<?php echo $i; ?>"placeholder="3rdqtr_estimate" class='form-control' /> 
     <input type="hidden" name="qttt<?php echo $i; ?>" id="qttt<?php echo $i; ?>"   placeholder="qtr_totals" class='form-control' /> 
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="3">

    <button type="submit" name="save_mul" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button>

    <a href="../budget_mgr.php" class="btn btn-primary"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to menu</a>

    </td>
    </tr>
    </table>
    </form>
	<?php
}
?>                 
  <div id="res" style="border:3px solid;"> </div>           
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
 