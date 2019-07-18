<?php
	include_once 'dbcon.php';
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMMS|budget</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NTIHC|Budget</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>

    <meta name="description" content="jk3.x">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="../assets/lib/animate.css/animate.css"> 
    </head>

<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}


	  {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 10px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
             }
    </style>
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

	 <link rel="stylesheet" href="../assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="../assets/less/theme.less"> 

  </head>
  <!-- /#left -->
                     <!--PAGE CONTENT -->
        <div id="content">
            <div class="outer">
                    <div class="inner bg-light lter5" style="height:auto;">
                    <div class="text-left">
                     <div class="row">
                     <div class="col-sm-12">
                    <h1 class="page-header" style="text-align:center;">
                    NAGURU TEENAGE INFORMATION AND HEALTH CENTER </h1>
                </div>
            </div>
        <div class="row">
    <div class="col-sm-12">
        <div class="box">
            <header>

<div class="icons"><i class="icon-th"></i></div>
                <div class="toolbar">
                    <ul class="nav pull-right">
                        <li><a href="#"></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#div-5" data-toggle="collapse" class="accordion-toggle minimize-box">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="top">
                    <!-- .navbar -->
                        <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                                </button>
                            <a href="" class="navbar-brand"><img src="" alt=""></a>                            </header>



                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                             </a>     </div>


                                        <a data-placement="bottom" data-original-title="Messages"
                                        href="<button class="btn btn-warning" data-toggle="modal" data-target="#ntihcmessager" "
                                       class="btn btn-default btn-sm">
                                        <i class=" "></i>
                                        <span class="label label-danger" style="color: #fff;height: 18px;">4</span>
                                        </a>

                                <div class="btn-group">
                                    <a href="logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                        <span class="glyphicon glyphicon-comment"></span>
                                                          </a>      </div>
                            </div>

                            <div class="collapse navbar-collapse navbar-ex1-collapse" >

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="admin_dashboard.php" style="background-color:#518dc1;border: 2px solid #f4f4f4;padding: 10.5px; text-align:left;color:#fff;">Dashboard</a></li>
                                    <li><a href="human_resource.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;background-color:#8bcf3f;"><i class="icon-lock icon-white"></i>Home</a></li>

                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;">
                                            Quick links<b class="caret"></b>  </a>
                                        <ul class="dropdown-menu">
                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#notificationModal" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Transport booking</a></li>

                                      <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#buttonedModal " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Hire a vehicle</a></li>

                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#formModal " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Fuel and lubricants requistion</a></li>

                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Accident form</a></li>

                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal1 " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Defect form</a></li>
                                        <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal2 " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Asset acknoledgement form</a></li>
                                        </ul>
                                    </li>
 <li><a href="#" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"><i class="icon-lock icon-white"></i>Staff contacts</a></li>
 <li><a href="#" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"><i class="icon-lock icon-white"></i>Appraisal form</a></li>


                                    </div>

                                  </a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>
            </header>
            <div id="div-5" class="accordion-body collapse in body" >

              <div class="col-sm-12"> 
      <p style="text-align:center; font-weight:bold; font-size:14px;" >HRM-NEW APPLICANTS</p>
      

      <div class="col-sm-12" style="background-color:#ffffff; height:auto;">
      <div class="panel-body">              
 <form method="post" name="frm"> 
 <tr>
    <td colspan="3">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>
 
    <label style="margin-left:100px; width: 223px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span>
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
    </label>


    </td>
	</tr> 
<table class='table table-bordered table-responsive' style=" width:100%;">
<tr>
<th>##</th> 
<th>DATE</th>
    <th>COMMENT</th>
    <th>FIRST NAME</th>
    <th>LAST NAME</th>
	<th>PHONE CONTACT</th>
    <th>GENDER</th>
	<th>QUALIFICATIONS</th>
    <th>PERMIT CLASSESS</th>
    <th>POSITION APPLIED</th> 
    <th>SHORTLIST</th> 
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM vetting_screening ");
	$count = $res->num_rows;  
 
	if($count > 0)
	{
		while($row=$res->fetch_array())   
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
			<td><?php echo $row['RECIEVEDDATE']; ?></td>
            <td><?php echo $row['COMMENT']; ?></td>
			<td><?php echo $row['FIRSTNAME']; ?></td>
			<td><?php echo $row['LASTNAME']; ?></td>
			<td><?php echo $row['PHONECONTACT']; ?></td>
			<td><?php echo $row['GENDER']; ?></td>
			<td><?php echo $row['SUMMARY_OF_QUALIFICATIONS']; ?></td>
			<td><?php echo $row['DRIVING_PERMIT_CLASSESS']; ?></td>
			<td><?php echo $row['POSITION_APPLIED_FOR']; ?></td>  
			<td><?php echo $row['SHORTLISTSTATUS']; ?></td> 
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
	
    <?php
}

?>

</table>
</form>
</div> 
  </p>
    </div>
     </div>
     </div>

     
     </div>
     </div>
     </div>

     <div class="row">
                     <div class="col-sm-12">
                    <h1 class="page-header" style="text-align:left;"> </h1>
                </div>
            </div>
        <div class="row">
    <div class="col-sm-12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-th"></i></div>
                <div class="toolbar">
                    <ul class="nav pull-right">
                        <li><a href="#"></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#div-5" data-toggle="collapse" class="accordion-toggle minimize-box">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                            </div>
            </header>
            <div id="div-5" class="accordion-body collapse in body" style="height:250px;">

            </div>
            </div>
            </div>
                    
 
 
                            </div></div>
                        </div>
                    </div>
                </div>

         <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information asnd Health Centre</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
        </body>
</html>
