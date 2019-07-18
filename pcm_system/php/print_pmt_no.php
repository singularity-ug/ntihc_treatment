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
  $id = $_GET['q'];  
  
  $PMTNO = ''; 
  $PAYMENTDATE = ''; 
  $PMTSERIALID  = ''; 
  $USERINITIALS = '';   
  $TIMESTAMP='';
  $QUARTERACCOUNTABLE='';   
  $USERTITLE = ''; 
  $USERINO='';  
  $UTILITYTYPE = '';  
  $PLANDETAILS = ''; 
  $CODE  = '';
  $FINANCIALPERIOD = '';  
  $BUDGETSTATUS = ''; 
  $dnx = array();
  $mopx = array();
  $mopz = array();   
  $dov = array();
  $fqx = array();  
  
  $aaa = array();
  $bbb = array();
  $ccc = array();   
  $ddd = array();
  $eee = array(); 
  $fff = array();
  $ggg = array(); 
  
  $USERINITIALS  = '';
  $USERTITLE = '';  
  $USERINO = ''; 
  	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "pcms";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM payments  WHERE `PMTNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $PMTNO = $row['PMTNO']; 
     $PAYMENTDATE = $row['PAYMENTDATE'];
     $PMTSERIALID  = $row['PMTSERIALID']; 
	 
	 $dnx[] = $row['FROMDATE'];
	 $mopx[] = $row['TODATE'];
     $mopz[]    = $row['PREVIOUSUNITS'];   
	 $dov[] = $row['CURRENTUNITS'];
     $fqx[]    = $row['UNITSUSED'];  
	  
	 $aaa[] = $row['COSTPERUNIT'];
	 $bbb[] = $row['SERVICEFEES'];
     $ccc[]    = $row['VAT'];   
	 $ddd[] = $row['BILLEDAMOUNT'];
     $eee[]    = $row['PREVIOUSPAYMENT'];  
	 $fff[] = $row['ARREARS'];
     $ggg[]    = $row['AMOUNTPAYABLE'];    
	  
     $USERINITIALS   = $row['USERINITIALS'];  
	 $QUARTERACCOUNTABLE=$row['QUARTERACCOUNTABLE'];  
     $USERTITLE   = $row['USERTITLE']; 
     $USERINO=$row['USERINO'];    
     $PLANDETAILS=$row['PLANDETAILS'];  
     $CODE   = $row['CODE']; 
	 $FINANCIALPERIOD=$row['FINANCIALPERIOD'];   
	       
	 $USERINITIALS=$row['USERINITIALS'];  
     $USERTITLE   = $row['USERTITLE']; 
     $USERINO=$row['USERINO'];    
      }

  ?>
   
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> .</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../admin/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../admin/assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href=".../../admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
 
 
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
             	font-size: 11px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
 
  

   
     <form id="form1" class="form-horizontal" action="" method="POST" style="height:auto; font-weight:normal;">
       
                 <input type="hidden" name="PMTNO" id="PMTNO"  value="<?php  echo $PMTNO; ?>"  >
               
                 <input type="hidden" name="PMTSERIALID" id="PMTSERIALID" value="<?php  echo $PMTSERIALID; ?>">  
                 
              
   <table class="table table-table-tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>   
   <th style="border:2px solid #ecf0f5;  ">From date</th>
   <th style="border:2px solid #ecf0f5; ">To date</th>
   <th style="border:2px solid #ecf0f5; ">Previous units</th>
   <th style="border:2px solid #ecf0f5; ">Current units</th>
   <th style="border:2px solid #ecf0f5; ">Units used</th>
   <th style="border:2px solid #ecf0f5; ">Cost per unit</th> 
    <th style="border:2px solid #ecf0f5; ">Service fees charged</th>
   <th style="border:2px solid #ecf0f5; ">Vat 18%</th>
   <th style="border:2px solid #ecf0f5; ">Billed amount</th>
   <th style="border:2px solid #ecf0f5; ">Previous payment</th>
   <th style="border:2px solid #ecf0f5; ">Arrears</th>
   <th style="border:2px solid #ecf0f5; ">Amount payable</th>
 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($ggg[$s]);?>
                                                            <tr > 
                                                  <td>  <?php  echo $dnx[$s]; ?> </td> 
                                                  
                                                   <td>  <?php  echo $mopx[$s]; ?> </td> 
                                                  
                                                   <td>  <?php  echo $mopz[$s]; ?> </td> 
                                                  
                                                  <td> <?php  echo $dov[$s]; ?> </td> 
                                                    
                                                  <td>  <?php echo $fqx[$s]; ?> </td> 
                                                    
                                                   
                                                   <td> <?php  echo $aaa[$s]; ?> </td> 
                                                  
                                                   <td>  <?php  echo $bbb[$s]; ?> </td> 
                                                  
                                                   <td>  <?php  echo $ccc[$s]; ?> </td> 
                                                  
                                                  <td>  <?php  echo $ddd[$s]; ?> </td> 
                                                    
                                                  <td>  <?php echo $eee[$s]; ?> </td> 
                                                  
                                                   <td>  <?php  echo $fff[$s]; ?> </td> 
                                                    
                                                  <td>  <?php echo $ggg[$s]; ?> </td> 
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
    </tbody>
  </table>     
      
     
      <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                 <th style="width:85%; text-align:left;border:0px; text-align:right;">Total payment</th>
                <td style="width:15%;border:0px;"> <?php  echo $totals; ?> </td>  
			  
			 </tr>             
            </table>
            
            
        <table class="table-responsive" > 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:10%; text-align:left; ">Created by</th>
                <td style="width:20%; "> <?php  echo $USERINITIALS; ?> </td>  
                   
               <th style="width:10%; text-align:left; ">Title</th>
                <td style="width:30%; "> <?php  echo $USERTITLE; ?> </td> 
                  
                  <th style="width:10%; text-align:left; ">PF number</th>
                <td style="width:20%; "> <?php  echo $USERINO; ?> </td>  
			 </tr>             
            </table>
              
        </form>
       
          

      </section>
      <!-- /.content --> </div>
    </div> </div> </div> </div> </div> </div>
<!-- ./wrapper -->
<!-- Morris.js charts -->
     <script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../admin/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../admin/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../admin/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../admin/dist/js/demo.js"></script>
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
		     sum    =sum+ parseFloat(table.rows[x].cells[11].childNodes[0].value);
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
				 
					 
	 var  sab = '<input type="text" name="qtyrecieved[]" id="qtyrecieved'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:left;">';
 		 			 
				  
	 var  sac = '<input type="text" name="variance[]" id="variance'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 			 
	 var  sad = '<input type="text" name="batch[]" id="batch'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 			 
	 var  sae = '<input type="text" name="expdet[]" id="expdet'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 			 			 
	 var  saf = '<input type="text" name="remdrt[]" id="remdrt'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  s8lc = '<input type="date" name="lcn[]" id="lcn'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';		 
	
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
 
    
   
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+sab+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+sac+' </td>'+
								  '<td>'+sad+' </td>'+
								  '<td>'+sae+' </td>'+ 
				                  '<td>'+saf+' </td>'+
								  '<td>'+s8lc+' </td>'+ 
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
		  table.rows[x].cells[3].childNodes[0].id="qtyrecieved"+x;
		  table.rows[x].cells[9].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[4].childNodes[0].id="variance"+x;
          table.rows[x].cells[5].childNodes[0].id="batch"+x; 
		  table.rows[x].cells[6].childNodes[0].id="expdet"+x;
		  table.rows[x].cells[7].childNodes[0].id="remdrt"+x;
		  table.rows[x].cells[8].childNodes[0].id="lcn"+x;  
		  table.rows[x].cells[10].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[11].childNodes[0].id="qtyx"+x;  
		   
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script> 