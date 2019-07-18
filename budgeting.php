 <?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM newaccount"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['Accountnumber'] . "</option>";   }
  }
$connect->close();
?>

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
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src=" js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src=" js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 130px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

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
              <li class="active"><a href="dashboard.php"><i class="icon-home icon-white"></i> System dashboard</a></li>  
              <li><a href="#"><i class="icon-th icon-white"></i> Staff contacts</a></li>
              <li><a href="../php/logut.php"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container" style="height:810px;">
  
	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="half-unit">
	      		<hr>
                <h1>Current budget amount </h1> 
				<div class="thumbnail" style="font-size:34px; font-weight:bold;">  
                 
                 00,000,000,000
                 
                   
				</div><!-- /thumbnail -->  
        </div></div>
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="half-unit">
                    <hr>  
		     <h1>% Utilised</h1> 
				<div class="thumbnail" style="font-size:34px; font-weight:bold;"> 
                  
                0%  
                
				</div><!-- /thumbnail -->  
        </div></div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="half-unit"> 
	        	 <hr>  
		  		   <h1>% Remaining</h1>  
                <div class="thumbnail" style="font-size:34px; font-weight:bold;"> 
                  
                  0%  
                  
				</div><!-- /thumbnail -->  
			</div>
        </div> 
        
        <div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle>Local Time</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div>
			</div>
 
        
	  <!-- THIRD ROW OF BLOCKS -->      
      		<div class="dash-unit" style="width:1140px; margin-left:-877px;"> 
      			<div class="text" style="font-size:14px;">
      			<h2 class="demoHeaders">Income and Expenditure Budgeting</h2>
<div id="accordion">
	<h3> Add-ins </h3>
	<div>
      
   <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:290px; margin-left:-46px; height:300px; "> 
         
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px;"/> 
	      		<hr>  
<form method="post" action="budget/add-data.php" style="margin-left: -4px; width:189px;">
 
<table class='table table-bordered' style="margin-left: 33px;">
<td><h1>New budget record</h1></td>
</tr>
<td>Enter how many records you want to insert</td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" style="width: 281px;" class="form-control" required />
</td>
</tr>

<tr>
<td><button type="submit" name="btn-gen-form" style="height: 34px; color: #fff; background-color: #449d44; border-color: #398439;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button>
 

<a href="budget/index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-eye-open"></i> &nbsp; View Data</a>
  
</td>
</tr>

</table>

</form>  
                
                
				 
        </div></div> 
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px; margin-left:95px;"/>  
                    <hr> 
                    
                <form method="post" action="newaccount_process.php" style="margin-left: -4px; width:189px;">
 
<table class='table table-bordered' style="margin-left: 33px;">
<td><h1>New account number</h1></td>
</tr>
<td>Account number</td>
</tr>

<tr>
<td>
<input type="text" name="Accountnumber" id="Accountnumber" maxlength="20" pattern="[0-9]+" style="width: 281px;" class="form-control" required />
</td>
</tr>

<td>Bank name</td>
</tr>

<tr>
<td>
<input type="text" name="Bankname" id="Bankname" maxlength="20" pattern="[a-z]+" style="width: 281px;" class="form-control" required />
</td>
</tr>

<td>Minimum account sum </td>
</tr>

<tr>
<td>
<input type="text" name="Minimumaccountsum" id="Minimumaccountsum" maxlength="20" pattern="[0-9]+" style="width: 281px;" class="form-control" required />
</td>
</tr>
 
<tr>
<td><button type="submit" name="btn-gen-form" style="height: 34px; color: #fff; background-color: #449d44; border-color: #398439;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Submit</button>
   
</td>
</tr>

</table>

</form>    
					</div>
				</div> 
           <!-- close messanger -->
           
            <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px; margin-left: 212px;"/>  
                <hr> 
                    
                <form method="post" action="newaccountreload_process.php" style="margin-left: -4px; width:189px;">
 
<table class='table table-bordered' style="margin-left: 33px;">
<td><h1>Load an account</h1></td>
</tr>
<td>Select an Account Number</td>
</tr>

<tr>
<td>        <select class="form-control" id="Accountnumber" input name="Accountnumber"  required />
                <option value="_1"> </option>
                                
                 </select>
                  </div>  
              <br> 
</td>
</tr>

<td>Aount loaded</td>
</tr>

<tr>
<td>
<input type="text" name="amountloaded" id="amountloaded" maxlength="20" pattern="[0-9]+" style="width: 281px;" class="form-control" required />
</td>
</tr>

<td>Reason for loading </td>
</tr>

<tr>
<td>
<input type="text" name="Reasonforloading" id="Reasonforloading" maxlength="20" pattern="[0-9]+" style="width: 281px;" class="form-control" required />
</td>
</tr>
 
<tr>
<td><button type="submit" name="btn-gen-form" style="height: 34px; color: #fff; background-color: #449d44; border-color: #398439;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Submit</button>
   
</td>
</tr>

</table>

</form>  
              
				</div></div>
             </div>  
       <!-- DONUT CHART BLOCK -->  
             
	<h3>Budget Codification by Cost Description and Fiscal period</h3>
	<div> 
   <!-- USER PROFILE BLOCK -->  
      		<div class="dash-unit" style=" height: 434px;  margin-top: -13px;   width: 1131px;  margin-left: -30px; background-color: #fff;"/> 
	      		<hr> 
    <script>

  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<select name="costdescription" id="p_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:310px; background-color:#fff" >'+             		                      	
                                         '<option value="-1"> </option>'+
                        '<option>Facility Based Service Delivery</option>'+
						'<option>Community-Based Service Delivery</option>'+
						'<option>Capacity Building</option>'+
						'<option>M&E Research Documentation</option>'+ 
						'<option>Financial Support</option>'+
						'<option>Material Support</option>'+ 
						'<option>Advocacy</option>'+ 
						'<option>Capacity Building </option>'+
						'<option>Personnel Costs</option>'+ 
						'<option>Administrative / Support costs </option>'+ 
						'<option>Repairs & Maintenance </option>'+
						'<option>Utilities</option>'+ 
						'<option>Travel and Transport</option>'+ 
						'<option>Office Equipment </option>'+
						'<option>Capital Expenditure</option>'+ 
						'<option>Communication costs</option>'+ 
						'<option>Insurance & Licenses </option>'+
						'<option>Office supplies</option>'+ 
						'<option>Security </option>'+ 
						'<option>Workshops, Meetings & Conferences</option>'+ 
						'<option>Building and furniture </option>'+
						'<option>Professional  Services</option>'+ 
						'<option>Finance cost</option>'+
						'<option>Contingency</option>'+ 
						'</select>'; 
 
     var select  =  '<select name="Financial year" required="required"  id="c_'+rowCount+'"'+
                    'style= "margin-left: 0px;margin-top: 5px;height:20px; width:143px; background-color:#fff;" >'+
             		    '<option value="-1"> </option>'+  
'<option> 2010-2011</option>'+
'<option> 2012-2011</option>'+
'<option> 2012-2013</option>'+
'<option> 2014-2014</option>'+
'<option> 2015-2016</option>'+
'<option> 2016-2017</option>'+
'<option> 2017-2018</option>'+
'<option> 2018-2019</option>'+
'<option> 2019-2020</option>'+
'<option> 2020-2021</option>'+
'<option> 2021-2022</option>'+
'<option> 2022-2023</option>'+
'<option> 2023-2024</option>'+
'<option> 2024-2025</option>'+
'<option> 2025-2026</option>'+
'<option> 2026-2027</option>'+
'<option> 2027-2028</option>'+
'<option> 2028-2029</option>'+
'<option> 2029-2030</option>'+
'<option> 2030-2031</option>'+
'<option> 2031-2032</option>'+
'<option> 2032-2033</option>'+
'<option> 2034-2035</option>'+
'<option> 2035-2036</option>'+
'<option> 2036-2037</option>'+
'<option> 2037-2038</option>'+
'<option> 2038-2039</option>'+
'<option> 2039-2040</option>'+
'<option> 2040-2041</option>'+
'<option> 2041-2042</option>'+
'<option> 2042-2043</option>'+
'<option> 2043-2044</option>'+
'<option> 2044-2045</option>'+
'<option> 2045-2046</option>'+
'<option> 2046-2047</option>'+
'<option> 2047-2048</option>'+
'<option> 2048-2049</option>'+
'<option> 2049-2050</option>'+
'<option> 2050-2051</option>'+
'<option> 2051-2052</option>'+
'<option> 2052-2053</option>'+
'<option> 2053-2054</option>'+
'<option> 2054-2055</option>'+
'<option> 2055-2056</option>'+
'<option> 2056-2057</option>'+
'<option> 2057-2058</option>'+
'<option> 2058-2059</option>'+
'<option> 2059-2060</option>'+
'<option> 2060-2061</option>'+
'<option> 2061-2062</option>'+
'<option> 2062-2063</option>'+
'<option> 2063-2064</option>'+
'<option> 2064-2065</option>'+
'<option> 2065-2066</option>'+
'<option> 2066-2067</option>'+
'<option> 2067-2068</option>'+
'<option> 2068-2069</option>'+
'<option> 2069-2070</option>'+
'<option> 2070-2071</option>'+
'<option> 2071-2072</option>'+
'<option> 2072-2073</option>'+
'<option> 2073-2074</option>'+
'<option> 2074-2075</option>'+
'<option> 2075-2076</option>'+ 
                    '</select>'; 
					 
     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+select+' </td>'+
               '<td>'+s1+'</td>';

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

  function deleteRow12(tableID) {
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
          table.rows[x].cells[1].childNodes[0].id="p_"+x;
          table.rows[x].cells[2].childNodes[0].id="c_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}


  </script>
  
<div class="container" style="width:440px; margin-left: 1px;"> 
  <p><input type="button" onClick="addRow12('mytable')" value="Add cost description" class="btn btn-success">
     <input type="button" onClick="deleteRow12('mytable')" value="Remove" class="btn btn-danger">
     <input type="hidden" id="mytable_rows" value="0">
  </p>
  <table class="table table-striped" id="mytable" style="width: 418px; color:#000000;">
    <thead>
      <tr>
        <th>*</th>
        <th>Financial year</th>
        <th>Cost-description</th>
        <th>Account-number</th>
        <th>Amount</th>
        <th>Code-line</th>
        <th>Vote</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
  </div> 
     
</div></div>
             </div>  
       <!-- DONUT CHART BLOCK -->  
   

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
    
    
            <link href="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src="assets/lib/jquery/jquery.js"></script>
<script src="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
		 
          
</body></html>