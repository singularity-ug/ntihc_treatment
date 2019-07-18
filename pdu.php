
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>NTIHC | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="assets/admin_bootstrap/css/bootstrap.css" />

    <link href="assets/admin_css/main.css" rel="stylesheet">
    <link href="assets/admin_css/font-style.css" rel="stylesheet">
    <link href="assets/admin_css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src=" assets/js/jquery.js"></script>
    <script type="text/javascript" src=" assets/admin_bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src=" assets/js/lineandbars.js"></script>

	<script type="text/javascript" src=" assets/js/dash-charts.js"></script>
	<script type="text/javascript" src=" assets/js/gauge.js"></script>

	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src=" assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topCenter.js"></script>

	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src=" assets/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="assets/js/highcharts.js"></script>
	<script src=" js/jquery.flexslider.js" type="text/javascript"></script>
    
     
    <script type="text/javascript" src="assets/lib/jquery/jquery.min2.js"></script>
	<script type="text/javascript" src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src=" js/admin.js"></script>

    <style type="text/css">
      body {
        padding-top: 130px;
      }
    </style>

    <!-- start datatables --> 
  <link rel="stylesheet" href="assets/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/datatable/css/buttons.dataTables.min.css">
    
      <script src="assets/datatable/js/jquery-1.12.3.js"></script>
  <script src="assets/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/datatable/js/bootstrap.min.js"></script>
  <script src="assets/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/datatable/js/buttons.flash.min.js"></script>
  <script src="assets/datatable/js/jszip.min.js"></script>
  <script src="assets/datatable/js/pdfmake.min.js"></script>
  <script src="assets/datatable/js/vfs_fonts.js"></script>
  <script src="assets/datatable/js/buttons.html5.min.js"></script>
  <script src="assets/datatable/js/buttons.print.min.js"></script>
  
    <!-- end datatables -->
    <script>
  $(document).ready(function() {
     $('#example').DataTable({
	    "iDisplayLength": 7,
        dom: 'Bfrtip',
        buttons: [
		{extend :'copy',
		 title:'myfile'
		},
		{extend :'csv',
		 title:'myfile'
		},
		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
    <!-- start datatables function -->
      
    <!-- end datatables -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script> 

  <style>
   {
                 border-bottom: 2px solid #000000;
                 color:#000000;
                 font-size: 10.5px;
             }
             table, th , td  {
                 border: 2px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 10.5px;
             	 color:#000000;
             }
             table tr:nth-child(odd) {
             background:#f0f0f0;
             }
             table tr:nth-child(even) {
             background:#f0f0f0;
             }
    </style>

    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 6px;
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
  <body>

  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php" style="margin-left: 237px; color: #fffaf9; font-size: 22px;">
           NAGURU TEENAGE INFORMATION AND HEALTH CENTRE</a>
        </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <img src="assets/img/ntihclog2.png" width="40" height="50" style="margin-left: 204px; margin-top: -11px;">
              <li class="active"><a href="procurement.php"><i class="icon-home icon-white"></i> System dashboard</a></li>
              <li><a href="#"><i class="icon-th icon-white"></i> Staff contacts</a></li>
              <li><a href="logut.php"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

   <!-- /#top -->
                      <div id="left" style="background-color:#fff;">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href=""> 
                                    <span class="label label-danger user-label"></span>                                </a>

                                <div class="media-body"> 
                                    <ul class="list-unstyled user-info"> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                         <p>  </p>
                         
                 <!-- START NEW ICON-->
                <div class="col-lg-1"> 
				<div class="thumbnail">
		        <a href="pdu.php"><img src="database icons/admin.jpg" alt="" class="img-circle"></i> </a></li><bold>Home</bold>  
				</div><!-- /thumbnail --> 
                <!-- END ICON-->
                
                <!-- START NEW ICON--> 
				<div class="thumbnail col-lg-2">
		        <a href="purchase_req.php"><img src="database icons/Nepal+facing+site_Procurement+Icon.png" alt="" class="img-circle"></i> </a></li><bold> Purchase orders</bold>  
				</div><!-- /thumbnail --> 
                <!-- END ICON-->
                
                <!-- START NEW ICON-->  
				<div class="thumbnail col-lg-2">
		        <a href="petty_cashmgt.php"><img src="database icons/budget.png" alt="" class="img-circle"></i></a></li> <bold> Petty cash</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON-->
                
                <!-- START NEW ICON-->   
				<div class="thumbnail col-lg-2">
                <a href="#"><img src="database icons/report-icon-23.png" alt="  " class="img-circle"></i></a></li> <bold> .</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON--> 
                
                   <!-- START NEW ICON-->   
				<div class="thumbnail col-lg-2">
			    <a href="#"><img src="database icons/report-icon-23.png" style="width: 72px;margin-left:0px;" alt="  " class="img-circle"></i></a></li> <bold> .</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON--> 
                
                  <!-- START NEW ICON-->   
				<div class="thumbnail col-lg-2">
			     <a href="#"><img src="database icons/report-icon-23.png" alt="  " class="img-circle"></i></a></li> <bold> .</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON--> 
                 
                 <!-- START NEW ICON-->  
				<div class="thumbnail col-lg-2">
			    <a href="#"><img src="database icons/report-icon-23.png" alt="  " class="img-circle"></i></a></li> <bold>.</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON--> 
                         
                 <!-- START NEW ICON-->  
				<div class="thumbnail">
			     <a href="#"><img src="database icons/report-icon-23.png" alt="  " class="img-circle"></i></a></li> <bold> .</bold> 
				</div><!-- /thumbnail -->
                </div>  
                 
                <!-- END ICON--> <!-- END ICON--><!-- END ICON--><!-- END ICON--><!-- END ICON--><!-- END ICON-->
                
                <!-- START CONTAINER-->
                
                <div class="container" style="height:auto; ">  

<!-- USER PROFILE BLOCK -->
 <div class="row" >
 <div class="col-lg-11">
                     <div class="panel panel-default" > 
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab" style="background-color: #fff; color: #000;">Notifications</a>
                                </li>
                                <li><a href="#profile-pills" data-toggle="tab">Procurement orders</a>
                                </li>
                                <li><a href="#messages-pills" data-toggle="tab">LPOs</a>
                                </li>
                                <li><a href="#settings-pills" data-toggle="tab">Settings</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-pills">
                                   <p></p>
             <!-- USER PROFILE BLOCK -->
             <div class="col-sm-3 col-lg-3" style="margin-left: -2px;">
      		 <div class="half-unit3">
                <h6>Incoming Orders </h6>
				<div class="thumbnail" style="font-size:34px; font-weight:bold;">

                  0
 
				</div>
				</div><!-- /thumbnail -->
                </div>
                
                <!-- USER PROFILE BLOCK -->
                <div class="col-sm-3 col-lg-3">
                <div class="half-unit3">
                <h6>Purchase Orders  </h6>
				<div class="thumbnail" style="font-size:34px; font-weight:bold;">

                  0
 
				</div><!-- /thumbnail -->
                </div>   
                </div>
                <!-- DONUT CHART BLOCK -->
                                    
                 <!-- USER PROFILE BLOCK -->
                <div class="col-sm-3 col-lg-3">
                <div class="half-unit3">
                <h6>Purchase Orders  </h6>
				<div class="thumbnail" style="font-size:34px; font-weight:bold;">

                  0
 
				</div><!-- /thumbnail -->
                </div>   
                </div>
                <!-- DONUT CHART BLOCK --> 
                
                 <!-- USER PROFILE BLOCK -->
                <div class="col-sm-3 col-lg-3">
                <div class="half-unit3">
                <h6>Purchase Orders  </h6>
				<div class="thumbnail" style="font-size:34px; font-weight:bold;">

                  0
 
				</div><!-- /thumbnail -->
                </div>   
                </div>
                <!-- DONUT CHART BLOCK -->
                                   
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                 
                                    <p>Incoming procurement orders.</p>
                                    
                                    
                                    
                                    
                                </div>
                                <div class="tab-pane fade" id="messages-pills"> 
                                    <h4>msg Tab</h4>
                                    <p>Lorem ipsum dol mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                
                                    
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <br>
             
       
      <!-- DONUT CHART BLOCK --> 
       <div class="col-lg-13" >  
       <p> </p>
		<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;color: #000;
font-weight: bold;">
		Monthly petty cash records by budget code.<span class="sr-only">60% Complete</span> 
		</div>
	    </div>  		  
<!--  <meta http-equiv="refresh" content="10" > -->
 
 <p> </p>  
  
  <div id="work" style="width:100%;">

    <table id="example" class="table table-striped table-bordered" >
        <thead>
          <tr> 
          <th>NO.</th>
                     <th>DATE</th>
                     <th>EXPENDITURE DETAILS</th>
					 <th>VOUCHER-NO.</th>
					 <th>CREDIT</th> 
                     <th>DEBIT</th> 
					 <th>BALANCE</th>
                     <th>BUDGET-LINE</th> 
                     <th>CODE</th>  
					 <th>MONTH</th>
					 <th>FY</th>   
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
           
              <th>NO</th>
              <th>DATE</th>
                     <th>EXPENDITURE DETAILS</th>
					 <th>VOUCHER-NO.</th>
					 <th>CREDIT</th> 
                     <th>DEBIT</th> 
					 <th>BALANCE</th> 
                     <th>BUDGET LINE</th> 
                     <th>CODE</th>
					 <th>FISCAL (M)</th>
					 <th>FY</th> 
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('assets/datatable/config_dbmultiple.php');

$sql = "SELECT * FROM pettycash";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['CREDIT']))-intval($row['DEBIT']);
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
       '<td>'.$row['DATECREATED'].'</td>'.
       '<td>'.$row['EXPENDITURE_DETAILS'].'</td>'.
       '<td>'.$row['VOUCHER_NO'].'</td>'.
       '<td>'.$row['CREDIT'].'</td>'.
       '<td>'.$row['DEBIT'].'</td>'.
       '<td>'.$bal.'</td>'. 
	    '<td>'.$row['BUDGETLINE'].'</td>'.
	   '<td>'.$row['CODE'].'</td>'.
	   '<td>'.$row['FISCALMONTH'].'</td>'.
	   '<td>'.$row['FY'].'</td>'. 
       '<td><input type="button" class="btn-success"  id="'.$row['UID'].'" onclick="alert(this.id)" value="UPDATE"></td>'.
   '</tr>';
$x=$x+1;
} 

 ?>
	  </tbody>
  </table>
  <h2 style="margin-top: -37px;"> <?php   echo"BALANCE  : ".$bal; ?></h2>
      </div>
	   
		</div>
        </div>                

   
  </div>
  </div> 
		</div> 
        </div>  
        </div>
        </div> 
<!-- CLOSE DIV -->
        

  </p>
    </div>
</div>

	          </div>
      		</div>
      	</div>
      </div><!-- /row -->

	  <!-- FOURTH ROW OF BLOCKS -->
	<div class="row">

				</div>
			</div>

		</div><!--/row -->



	</div> <!-- /container -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p>Naguru Teenage Information and Health Centre - Admin dashboard - Copyright 2016</p>
                <p><img src="assets/img/ntihclog2.png" width="50" height="50"  style="margin-left: -671px;margin-top: -37px;">
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->
	</div><!-- /footerwrap -->

 
</body>
</html>
