<!DOCTYPE html>
<html ng-app="app">
<head>
	<title>Pie/Doughnut Chart using ChartJS, AngularJS and PHP/MySQLi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../css/matrix-style2.css" />
<link rel="stylesheet" href="../../css/matrix-media.css" />
<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../../css/uniform.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 
<link rel="stylesheet" href="../../js/googleapis.js" type='text/css'>
   
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 

 <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">

  <script src="../../datatable/js/jquery-1.12.3.js"></script>
  <script src="../../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../datatable/js/bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../../datatable/js/buttons.flash.min.js"></script>
  <script src="../../datatable/js/jszip.min.js"></script>
  <script src="../../datatable/js/pdfmake.min.js"></script>
  <script src="../../datatable/js/vfs_fonts.js"></script>
  <script src="../../datatable/js/buttons.html5.min.js"></script>
  <script src="../../datatable/js/buttons.print.min.js"></script>

	
	
	<link href="bootstrap.min.css" rel="stylesheet">
	<script src="angular.min.js"></script>
	<script src="Chart.bundle.min.js"></script>
	<style type="text/css">
		canvas{
			margin:auto;
		}
		.alert{
			margin-top:20px;
		}
	</style>
</head>
<body ng-controller="myCtrl">
<div class="container">
	<div class="row">
		 
		<div class="col-sm-7" ng-init="fetchsales()">
			<h3 class="page-header text-center">Sales Chart</h3>
			<canvas id="dvCanvas" height="600" width="600"></canvas>
	    </div>
	</div>
</div>
<script src="app.js"></script>
<!--End-Footer-part-->
<!--script src="../js/jquery.min.js"></script--> 
<script src="../../js/jquery.ui.custom.js"></script> 
<script src="../../js/bootstrap.min.js"></script> 
<script src="../../js/jquery.gritter.min.js"></script> 
<script src="../../js/jquery.peity.min.js"></script> 
<script src="../../js/matrix.js"></script> 
<script src="../../js/matrix.interface.js"></script> 
<script src="../../js/matrix.popover.js"></script>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<!--script src="../plugins/jQuery/jquery-2.2.3.min.js"--> 
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plugins/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../s../plugins/flot/jquery.flot.categories.min.js"></script>
</body>
</html>