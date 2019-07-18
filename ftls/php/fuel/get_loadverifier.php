  
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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />  
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

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
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
     $('#exvehc').DataTable( {
	  "iDisplayLength": 20,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength":3,
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
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#reconcilx').DataTable( {
	  "iDisplayLength": 10,
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
     $('#exapurpose').DataTable( {
	  "iDisplayLength": 15,
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
     $('#example4').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>


    <style media="screen">

  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
   border-top: 1px solid #000;
line-height: 1.0;
padding: 3px;
vertical-align: center;
background-color: #fff;
color: #000;
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
             	 color:#000;
				 text-align:center;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
</head>
  
  <div id="content-header" style="margin-top: 0px;">
   <div id="breadcrumb"> <a href="../fleet_administrator.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
                          </div> 
  </div> 
   
   
   
 <!--Chart-box-->  
 <div class="col-sm-2">
 </div>
  
<?php 
  $id =  $_GET['purchaseid'];  
  $purchaseid = '';  
  $date = ''; 
  $verfiedby = '';   
  $Createddate = '';   
  $Approval = '';   
  $Title = ''; 
  $Yearval = '';   
  $Monthno = '';  
  $Loadreview = '';     
  $Fiscalmonth = ''; 
   
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM purchase WHERE `purchaseid` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $purchaseid  = $row['purchaseid'];
     $date = $row['date'];
     $verfiedby = $row['verfiedby'];   
	 $Createddate = $row['Createddate']; 
	 $Approval = $row['Approval']; 
	 $Title = $row['Title'];  
	 $Fiscalmonth = $row['Fiscalmonth'];   
	 
	 $Yearval = $row['Yearval'];   
	 $Monthno = $row['Monthno']; 
	 $Loadreview = $row['Loadreview'];  
	  } 
  ?>
          
      
      <div class="col-sm-8">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-bookmark"></i></span>
          <h5 style="text-align:center;">Click to verify fuel load</h5>  
        </div>
        <div class="widget-content" style="background-color:#fff;">
        
         <div class=""  id="getpurpose" >  </div>
                <script> 
          function getresorder(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'dles.php?q='+odno,
                       success : function(data){
                                $('#getresorder').html(data);
								$("#oexplosion").modal("show");
                                 }
               });
               } 
                </script> 
               <form class="form-horizontal" action="get_loadverifier_processor.php" method="POST" 
               style="height:auto; font-weight:normal;">
               
               <input type="hidden" name="purchaseid" id="purchaseid"  value="<?php  echo $purchaseid; ?>">
               
               <input type="hidden" name="Loadreview" value="Verified" >
  
               <input type="hidden" name="verfiedby"  value="<?php  echo $nameofuser; ?>"> 
               
                <input type="hidden" name="Reference" value="KCCA/AHR/FTL/<?php  echo $purchaseid; ?>/<?php  echo $Yearval; ?>/<?php  echo $Monthno; ?>" >
                 <input type="hidden" name="Monthno" value="<?php  echo $Monthno; ?>" >
                  <input type="hidden" name="Yearval" value="<?php  echo $Yearval; ?>" >
                   <input type="hidden" name="Fiscalmonth" value="<?php  echo $Fiscalmonth; ?>" > 
                     <input type="hidden" name="FUELISSUANCEDATE" value="<?php  echo $Createddate; ?>" >
            
            
      
<?php
  $id = $_GET['purchaseid'];    
  $purchaseid = ''; 
  $dnx = array();
  $fqx = array();
  $tmx = array(); 
  $cord = array();  
 
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "select * from fuellogs left join fuelcards on fuelcards.productid=fuellogs.productid 
										where Reconciliation='Pending' and purchaseid = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){ 
     $purchaseid = $row['purchaseid'];  
	 $dnx[] = $row['productid'];
     $fqx[] = $row['Fuelcardname'];
	 $cord[] = $row['Cardcode'];
     $tmx[] = $row['Fueloaded'];   
      } 
  ?>
        <div class="table-responsive mailbox-messages"> <br>
        
       <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
       <thead>
       <tr>
                     <th style="background-color: #ecf0f5;">*</th> 
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">ID</th> 
					 <th style="background-color:#ecf0f5; color:#000;font-size:10px;">FUEL CARD NAME</th>  
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">CORD</th>  
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">AMOUNT</th>    
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($tmx[$s]);?>
                                                            <tr > 
                                                   <td> <input type="checkbox" checked="checked" /></td>         
                                                 
                                                   <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                   class="form-control input-md" style= "width:100%;"/></td>
                                                   
                                                   <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>" 
                                                   class="form-control input-md" style= "width:100%; "/></td>
                                                    
                                                   <td> <input  name="cord[]" readonly="" type="text" value="<?php  echo $cord[$s]; ?>" 
                                                   class="form-control input-md" style= "width:100%; "/></td> 
                                                    
                                                   <td> <input  name="tmx[]" readonly="" type="text" value="<?php  echo $tmx[$s]; ?>" 
                                                   class="form-control input-md" style= "width:100%; text-align:right;"/></td> 
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
                                <br> 
                                
                                <?php 
					$b=mysqli_query($conn,"select * from purchase where purchaseid='$id'");
					$totals=mysqli_fetch_array($b);
				?>  
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:50%; text-align:left;border:0px; background-color:#eee;"> Amount</th> 
                <td style="width:50%; text-align:right; border:0px;background-color:#eee;"> <?php echo number_format($totals['total'],0); ?> </td>  
			  
			 </tr>              
            </table> 
            
               <br />
                
            <center> <input type="submit" name="buttonsend" id="button" value="Verify" style="border-radius: 11px; height: 38px;"/> </center>  
             
         
         </form> 
         </div>    
         </div>
         
          <div class="col-sm-2">
 </div>
         
        </div>
      </div>  
   
     
             
    
<!--End model--->       

<!--Footer-part-->
<div class="row-fluid"> 
</div>
<!--end-Footer-part-->
<!--<script src="../js/jquery.min.js"></script>-->
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.js"></script>  
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/matrix.wizard.js"></script> 
</body>
</html> 

 <script>
   
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("ORDERVALUE").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domeeitem(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'" required="required"'+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';	
				 
      var  sxb = '<input type="text" name="code[]" id="code'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';			 
			 
      var  sab = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
 
    
   
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+sxb+' </td>'+
								  '<td>'+sab+' </td>';
								  
								  
								  
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
		  table.rows[x].cells[3].childNodes[0].id="code"+x;
		  table.rows[x].cells[4].childNodes[0].id="tmx"+x; 
		   
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script> 