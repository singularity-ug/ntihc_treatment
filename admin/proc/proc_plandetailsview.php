  <?php
  $idx = $_GET['q']; 
  
  $OBJECTIVE = '';
  $CODE = '';
  $ITEMDESCRIPTION  = '';
  $FINANCIALPERIOD = ''; 
 
  $dnx = array();
  $ppx = array();
  $fqx = array();
  $tmx = array();
  $pdx = array();
  $fqtr = array();
  $qtyx = array(); 
  
  $CODEDAMOUNT='';

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM procplanning  WHERE ITEMDESCRIPTION = '$idx'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
  
     $OBJECTIVE = $row['OBJECTIVE'];
     $CODE = $row['CODE'];
     $ITEMDESCRIPTION  = $row['ITEMDESCRIPTION']; 
	 $dnx[] = $row['PLANDETAILS'];
     $ppx[]    = $row['FINANCIALPERIOD'];
	 $fqx[]    = $row['FIRSTQTR'];
     $tmx[]       = $row['SECONDQTR'];  
     $pdx[]       = $row['THIRDQTR'];
	 $fqtr[]        = $row['FOURTHQTR'];
	 $qtyx[] = $row['BUDGETAMOUNT'];
	  
     $CODEDAMOUNT = $row['CODEDAMOUNT'];   
      }

  ?>
 
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
<div class="wrapper" style="background-color:#fff;">
  <!-- Main content -->                                  

<form id="form1" class="form-horizontal" action="proc_procplan_update.php" method="POST" style="height:auto; font-weight:normal;">  
                 
				<table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   <th>OBJECTIVE</th>
   <th style="text-align:center;">CODE</th>
   <th style="text-align:center;">ITEM DESCRIPTION</th>
   <th style="text-align:center;border:0px;"> </th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:20%;"><input type="text" name="OBJECTIVE" id="OBJECTIVE"  value="<?php  echo $OBJECTIVE; ?>" readonly=""
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:20%;"><input type="text" name="CODE" id="CODE"  value="<?php  echo $CODE; ?>" readonly=""
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
   <td style="width:35%;"><input type="text" name="ITEMDESCRIPTION" id="ITEMDESCRIPTION"  value="<?php  echo $ITEMDESCRIPTION; ?>"  readonly=""
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:25%; border:0px;"> </td> 
                             
   </tr>
  <tr>
 </tbody>
 </table>
     
  <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
          <th style="width:30%;"> DETAILS </th> 
          <th style="width:20%;"> FINANCIAL.PERIOD </th>
	      <th style="width:10%;"> 1ST QUARTER  </th>
		  <th style="width:10%;"> 2ND QUARTER  </th>
		  <th style="width:10%;"> 3RD QUARTER  </th>
          <th style="width:10%;"> 4TH QUARTER </th>  
          <th style="width:10%;"> AMOUNT </th> 
      </tr>
      </thead>
      <tbody>
      
  
      <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                    <td> <input  name="ppx[]" readonly="" type="text" value="<?php  echo $ppx[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td> 
                                                  
                                                  <td> <input  name="tmx[]" readonly="" type="numeric" value="<?php echo $tmx[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td>
                                                  
                                                   <td> <input  name="pdx[]" readonly="" type="text" value="<?php echo $pdx[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td>  
                                                  
                                                  <td> <input  name="fqtr[]" readonly="" type="numeric" value="<?php echo $fqtr[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td> 
												  
                                                    <td> <input  name="qtyx[]" readonly="" type="numeric" value="<?php echo $qtyx[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td> 
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                
    <table class="table table-bordered" style="margin-top:-20px;">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:85%;"> </th>  
        <th style="border-bottom-color:white; width:15%;"></th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td style="text-align:right; font-weight:bold;">SUB TOTAL </td>
        <td><input type="text"  name="CODEDAMOUNT" id="CODEDAMOUNT" value="<?php echo $totals;?>" readonly="" 
        style="background-color:#fff;width:100%; font-size:14px; font-weight:bold;"></td> 
       
      </tr>
    </tbody>
  </table> 
      <center>  
        <a href="proc_pdu_mgr.php"> close <span class="sr-only">(current)</span></a> 
        </center> 
            </form>
			
			 
    <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
  
 
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[6].childNodes[0].value);
		   }
		   document.getElementById("CODEDAMOUNT").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s1aappx = '<input type="text" name="ppx[]" id="ppx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';			 
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 

	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  ssx = '<input type="numeric" name="fqtr[]" id="fqtr'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
			 

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
								  '<td>'+s1aappx+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
								  '<td>'+ssx+' </td>'+
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
		  table.rows[x].cells[2].childNodes[0].id="ppx"+x;
		  table.rows[x].cells[3].childNodes[0].id="fqx"+x;
          table.rows[x].cells[4].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[5].childNodes[0].id="pdx"+x; 
		  table.rows[x].cells[6].childNodes[0].id="fqtr"+x;
		  table.rows[x].cells[7].childNodes[0].id="qtyx"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
