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

 <?php
$connect = new mysqli("localhost", "root", "", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
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
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css"> 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
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

  $("#dnx"+num).val(data[2]); 
  $("#tmx").val(data[4]); 
    
} 

function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "str_searchitem.php",
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

		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
 
  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 3,
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
     $('#example6').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>

  
 
  
<style>
h9 {
    border-bottom: 1px solid #eee;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 1px solid #eee;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #eee;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #eee;
    line-height: 1.0;
    padding: 1px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 1px solid #eee;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
				 background-color: #fff;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
             }
             table tr:nth-child(even) {
             background:#ffffff;
             }

</style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('config.php');
  ?>

  <header class="main-header">
    <nav class="navbar navbar-static-top"> 
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="lpo_general.php" > Find<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="proc_pdu_user.php" class="button 5" > P D U<span class="sr-only">(current)</span></a></li>

          </ul>

        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user" style="font-size:16px;"><b>Welcome:</b></span>
         <B style="font-size:11px;"> &nbsp <?php echo $nameofuser; ?>  </B>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Ntihc M.E team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not use this awesome application?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#"> </a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                 <img src="../../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>

                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">

                  <p>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i>
              <span class="">&nbsp<?php echo $nameofuser; ?>  </span>
            </a>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-th"></i>
              <span class="">&nbsp<?php echo $desc; ?>  </span>
            </a>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-share"></i>
              <span class="">&nbsp<?php echo $dept; ?>  </span>
            </a>

                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="../../index.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
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
   <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">  
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:14px; background-color:#fff; margin-top:-18px; font-family:lcd;">  LOCAL PURCHASE ORDER  </p> </center> 
  
     <form id="form1" class="form-horizontal" action="lpo_gen_processor.php" method="POST" style="height:auto; font-weight:normal;">  
        <br>
        <div class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:left; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">Order No.</th>
                <td style="width:14.75%"><input type="numeric" name="LPONO" id="LPONO"    readonly="readonly"
				style="width:100%; text-align:left;background-color:#fff;"></td>  
			  
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">Date</th>
                <td style="width:14.75%"><input type="date"id="DATECREATED" name="DATECREATED" required="required"  
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
             
             
             <p style="font-weight:bold;">Order To</p>
             
              <div class="table-responsive" style="margin-top:0px;border:0px;" > 
            <table class="table"  style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="numeric" name="SERVICEPROVIDER" id="SERVICEPROVIDER"  
				style="width:100%; text-align:left;background-color:#fff;"></td>  
			 </tr>   
              <tr>  
                 <td style="width:100%; border:0px;"><input type="numeric" name="SVPADDRESS" id="SVPADDRESS"     
				style="width:100%; text-align:left;background-color:#fff;"></td>  
			 </tr> 
                 <td style="width:100%;border:0px;"><input type="numeric" name="SVPLOCATION" id="SVPLOCATION"    
				style="width:100%; text-align:left;background-color:#fff;"></td>  
			  
			 </tr>        
            </table>
             
            
      <p style="font-weight:bold;">Please deliver the following items.</p>
     
              
   <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
       <th style="width:43%;">DESCRIPTION </th> 
   <th style="width:10%; text-align:center;">QUANTITY</th> 
     <th style="width:18%;">UNIT OF MEASURE</th>
   <th style="width:13.25%; text-align:center;">RATE</th>
   <th style="width:14.75%; text-align:center;">AMOUNT</th>  
           
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>    
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
     
      <div id="res" style="border:0px;"> </div>
     
      <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:left; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">SUB TOTAL</th>
                <td style="width:14.75%"><input type="numeric" name="SUBTOTAL" id="SUBTOTAL"   
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold;"></td>  
			  
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">VAT</th>
                <td style="width:14.75%"><input type="numeric" name="TAX" id="TAX"   
				style="width:100%; text-align:right;background-color:#fff;font-weight:bold;"></td>  
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr> 
                 <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">GRAND TOTAL</th>
                <td style="width:14.75%"><input type="numeric" name="TOTALCOST" id="TOTALCOST"  
				style="width:100%; text-align:right;background-color:#fff;font-weight:bold;"></td>  
			  
			 </tr>             
            </table>
          
     
            <div class="table-responsive" style="margin-top:0px;"> <b>Terms of delivery</b>
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><textarea name="TERMSOFDELIVERY" id="TERMSOFDELIVERY" style="width:100%;" >  </textarea> 
				 </td>  
			  
			 </tr>             
            </table>
               
              <div class="table-responsive" >
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%;border:0px;">  </th>
				<th style="width:23.3333333%;border:0px;"> <b> Approved by<b> </th>
                <th style="width:33.3333333%; border:0px;"> </th> 
				 <th style="width:10%; border:0px;">   </th>
                <td style="width:23.3333333%;border:0px;"> <b>Reviewed and approved by<b> </td>
              </tr>
              <tr>
			    <th style="width:10%;font-weight:normal;"> Name</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" name="APPROVERNAME" id="APPROVERNAME"  
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Name </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" name="REVNAME" id="REVNAME"  
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> Signature</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" readonly="readonly"
				 style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;"> Signature</th>
                <td style="width:23.3333333%"><input type="text" class="form-control"  readonly="readonly"
			     style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Title </th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" id="APPROVERTITLE" name="APPROVERTITLE"    
				  style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Title </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="REVTITLE" name="REVTITLE"   
				 style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Date </th>
				<th style="width:23.3333333%">  <input type="text" class="form-control" id="APPROVEDDATE" name="APPROVEDDATE"    
			    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Date </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="REVDATE"  name="REVDATE"  
				 style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
            </table>  
             <br>
             
    <table class="table-responsive" style="background-color:#ffffff; margin-top:0px;">
            <table class="table">
              <tr>
			    <th style="width:11.33333333%;border:2px solid #ecf0f5;">Alert stores </th>
                <th style="width:45.33333333%">
				<input type="radio" name="ORDERTYPE" id="ORDERTYPE" value="ALERTED" checked>
        <label for="ORDERTYPE">ALERTED</label>  
		<input name="ORDERTYPE" type="radio" id="ORDERTYPE" value="NOT REQUIRED">
		<label for="ORDERTYPE">NOT REQUIRED</label>  
				</th>  
             <th style="width:15.3333333%;border:2px solid #ecf0f5;">Order serial No. </th>
              <th style="width:25%"> 
              <input type="text" name="ORDERSERIALID" id="ORDERSERIALID" value=" <?php echo uniqid();?>" readonly="" style="width:100%; border:0px;background-color:fff;"> </th> 
              </tr>   
            </table>  
          
           <table class="table-responsive" style="background-color:#ffffff; margin-top:0px;">
            <table class="table">
              <tr>
			    <th style="width:10.73333333%;border:2px solid #ecf0f5;">Delivery status </th>
                <th style="width:15%">
				<select name="DELIVERYSTATUS" id="DELIVERYSTATUS"  style="width:100%;" >
        <option value="PENDING"> PENDING</option>          
        <option> DELIVERED</option>    
        </select>
		     </th>  
             <th style="width:15.33333333%;border:2px solid #ecf0f5;">Expected date of delivery </th>
             <th style="width:20%"> 
             <input type="date" name="DATEREQUIRED" id="DATEREQUIRED" style="width:100%; background-color:fff;height:20px;"> </th> 
             
             <th style="width:10%;border:2px solid #ecf0f5;">Remind date </th>
             <th style="width:20%"> 
             <input type="date" name="DELIVERYREMINDDATE" id="DELIVERYREMINDDATE" style="width:100%; background-color:fff;height:20px;"> </th> 
             
             </tr>   
             </table>      
             
           <div class="table-responsive" style="margin-top:0px;"> <b>Note:</b>
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEA" id="NOTEA"  value="Please quote this LPO number on your invoice." style="width:100%;" >   </td>  
			  
			 </tr>             
            </table>  
            
             <div class="table-responsive" style="margin-top:0px;">  
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEB" id="NOTEB" style="width:100%;" >   </td>  
			  
			 </tr>             
            </table> 
            
            <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEC" id="NOTEC" style="width:100%;" >   </td>  
			  
			 </tr>             
            </table>  
             
        <input type="hidden" name="DOCUMENTTYPE" id="DOCUMENTTYPE" value="LPO">      
              
        <input type="hidden" name="PREPAREDBY" id="PREPAREDBY" value="<?php echo $nameofuser; ?>" > 
        <input type="hidden" name="PREPTITLE" id="PREPTITLE" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="PREPFPNO" id="PREPFPNO" value="<?php echo $pf; ?>" >                  
        <center> <input type="submit" name="button" id="button" value="Save" /> </center> 
        </form>
       
   

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer"> 
      <div class="pull-right hidden-xs">

      </div>
      <center> Copyright &copy; 2017  <strong> Naguru Teenage Information and Health Center</strong> All rights
    reserved.</center>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
<!-- Morris.js charts -->
     <script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>
  <script>
  
 
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 

	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:left;">';
 		 
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
				                  '<td>'+s7gg+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
  }

  function deleteRow16(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="dnx"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[5].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[6].childNodes[0].id="qtyx"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>