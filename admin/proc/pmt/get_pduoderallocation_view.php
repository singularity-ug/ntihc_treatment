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
  $id =  $_GET['q'];  
  $JOBNUMBER = ''; 
  $SEQUENCENUMBER = ''; 
  $AODEPT = ''; 
  $AONAME='';
  $AOPCOMMENT='';
  $AOTITLE='';
  $AODATE=''; 
  $PROCUREMENTSTATUS='';
  $RECIEVEDDATE=''; 
  $REQUISITIONID=''; 
  $desc = array();
  $qty = array();
  $uom = array();
  $escost = array();
  $marktp = array();
  $SUBJECTOFPROCUREMENT='';
  $SUBTOTAL='';
  $VOTE_HEADNO='';
  $SUBPROGRAMME='';
  $OFFICERALLOCATED='';
  $OFFICERACCOUNT='';
  $ALLOCATIONCOMMENT='';
   
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM procreqn  WHERE `REQUISITIONID` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
    
     $JOBNUMBER  = $row['JOBNUMBER'];
     $SEQUENCENUMBER = $row['SEQUENCENUMBER']; 
     $AODEPT = $row['AODEPT']; 
     $AOPCOMMENT = $row['AOPCOMMENT']; 
     $AONAME=$row['AONAME'];
     $PROCUREMENTSTATUS=$row['PROCUREMENTSTATUS'];
     $AOTITLE=$row['AOTITLE'];
     $AODATE=$row['AODATE'];  
	 $REQUISITIONID=$row['REQUISITIONID']; 
     $RECIEVEDDATE=$row['RECIEVEDDATE']; 
     $desc[] = $row['DESCRIPTION'];
     $qty[]    = $row['QUANTITY'];
     $uom[]       = $row['UNITOFMEASURE'];  
     $escost[]       = $row['ESTIMATEDCOST'];
	 $marktp[]        = $row['MARKETPRICE'];
 	 $SUBJECTOFPROCUREMENT=$row['SUBJECTOFPROCUREMENT'];  
	 $SUBTOTAL=$row['SUBTOTAL']; 
	 $DATEREQUIRED=$row['DATEREQUIRED']; 
	 $VOTE_HEADNO=$row['VOTE_HEADNO']; 
	 $SUBPROGRAMME=$row['SUBPROGRAMME']; 
	 $OFFICERALLOCATED=$row['OFFICERALLOCATED']; 
	 $OFFICERACCOUNT=$row['OFFICERACCOUNT']; 
	 $ALLOCATIONCOMMENT=$row['ALLOCATIONCOMMENT']; 		
      }

  ?>
  
 <?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 

  
    

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
   <form class="form-horizontal" action="update_pduorderallocation.php" method="POST" style="height:auto; font-weight:normal;">  
 
	 <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th>Order no.</th>
   <th>Recieved date</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:15%;"><input type="text" name="JOBNUMBER" id="JOBNUMBER"  value="<?php  echo $JOBNUMBER; ?> "  readonly="readonly" 
   style="width:100%; text-align:left;background-color:#ffffff;"></td>
   
   <td style="width:20%;"><input type="text" name="RECIEVEDDATE" id="RECIEVEDDATE"  value="<?php  echo $RECIEVEDDATE; ?> " readonly="readonly" 
                style="width:100%; text-align:left;background-color:#ffffff;"></td>   
   </tr>
  <tr>
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th>Subject</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:15%;"><input type="text" name="SUBJECTOFPROCUREMENT" id="SUBJECTOFPROCUREMENT"  value="<?php  echo $SUBJECTOFPROCUREMENT; ?> "  readonly="readonly" 
   style="width:100%; text-align:left;background-color:#fff;"></td>  
   </tr>
  <tr>
 </tbody>
 </table>
 
   <input type="hidden" name="REQUISITIONID"  id="REQUISITIONID" value="<?php  echo $REQUISITIONID; ?>" >	 
	
   <table class="table table-striped" style="background-color:#fff; margin-top:-23px; ">
   <thead>
   <tr> 
   <th>Estimated cost</th>
   <th>Required date</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;"><input type="text" name="SUBTOTAL" id="SUBTOTAL"  value="<?php  echo $SUBTOTAL; ?>" readonly="readonly" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
	
	<td style="width:50%;"><input type="text" name="DATEREQUIRED" id="DATEREQUIRED"  value="<?php  echo $DATEREQUIRED; ?>" readonly="readonly" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
	<table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr> 
   <th>Budget line </th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:100%;"><input type="text" name="SUBPROGRAMME" id="SUBPROGRAMME"  value="<?php  echo $SUBPROGRAMME; ?>" readonly="readonly" 
    style="width:100%; text-align:left;background-color:#fff;"></td>  
							
   </tr>
  <tr>
 </tbody>
 </table> 	

  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>  
   <th>Account / budget code</th>
   </tr>
   </thead>
   <tbody>
   <tr>  
	<td style="width:50%;"><input type="text" name="VOTE_HEADNO" id="VOTE_HEADNO"  value="<?php  echo $VOTE_HEADNO; ?>" readonly="readonly" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>  
   <th>Name of officer allocated</th>
   </tr>
   </thead>
   <tbody>
   <tr>  
	<td style="width:50%;"><input type="text" name="OFFICERALLOCATED" id="OFFICERALLOCATED"  value="<?php  echo $OFFICERALLOCATED; ?>" readonly="readonly"  
    style="width:100%; text-align:left;background-color:#fff;"></td> 
					
   </tr>
  <tr>
 </tbody>
 </table> 
 
 <table class="table table-striped" style="background-color:#fff; margin-top:-20px; ">
   <thead>
   <tr>  
   <th>Comment</th>
   </tr>
   </thead>
   <tbody>
   <tr>  
	<td style="width:50%;"><input type="text" name="ALLOCATIONCOMMENT" id="ALLOCATIONCOMMENT"  value="<?php  echo $ALLOCATIONCOMMENT; ?>" readonly="readonly" 
    style="width:100%; text-align:left;background-color:#fff;"> </td> 
					
   </tr>
  <tr>
 </tbody>
 </table> 
  
 
 <input type="hidden" name="ORDERSTATUS" id="ORDERSTATUS"  value="STARTED" >	 
			</form>
			
			
			

    <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
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

     var  s1aa = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="uom[]" id="uom_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';			 

	 var  s3cc = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="numeric" name="escost[]" id="escost_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';

     var  s7gg = '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'" onkeyup="calcsubtt(\'mytable100\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';
		 

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
		  table.rows[x].cells[1].childNodes[0].id="desc_"+x;
		  table.rows[x].cells[2].childNodes[0].id="uom_"+x;
          table.rows[x].cells[3].childNodes[0].id="qty_"+x; 
		  table.rows[x].cells[5].childNodes[0].id="escost_"+x;
		  table.rows[x].cells[6].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
   <!-- /.END PROCUREMENT REQUISITION  SCRIPT -->			
			
			
			
