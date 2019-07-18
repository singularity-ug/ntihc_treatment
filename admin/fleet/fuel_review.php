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
  
  $SERIALNO = ''; 
  $DATECREATED  = ''; 
  $dnx = array(); 
  $qtyx = array();
  $fcn = array(); 
  $fs = array();  
  
  $TIMESTAMP='';
  $INITIATORDEPARTRMENT = '';
  $INITIATORTITLE = '';  
  $INITIATEDBY='';   
  $INITIATIONDATE = ''; 
  $SENDTO=''; 
  $ORDERNO = '';
  $INITIATORACCOUNT = '';   
  $ARBY = '';    
  $RVDBY='';
  $ARNAME='';   
  $RVDNAME = ''; 
  $ARDATE=''; 
  $RVDDATE = '';   
  	  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM fuellogs  WHERE `SERIALNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $SERIALNO = $row['SERIALNO'];  
	 $DATECREATED   = $row['DATECREATED'];  
	 $dnx[] = $row['REGISTRATIONNO']; 
	 $qtyx[]        = $row['LITRE'];
     $fcn[]       = $row['FUELCARDNAME'];
	 $fs[]        = $row['FUELSTATION'];  
     $INITIATORDEPARTRMENT=$row['INITIATORDEPARTRMENT'];  
     $INITIATORTITLE   = $row['INITIATORTITLE'];  
	 $INITIATEDBY=$row['INITIATEDBY'];  
     $INITIATIONDATE   = $row['INITIATIONDATE']; 
     $SENDTO=$row['SENDTO'];    
     $ORDERNO=$row['ORDERNO'];  
     $ARBY   = $row['ARBY']; 
	 $ARNAME=$row['ARNAME'];  
     $ARDATE   = $row['ARDATE']; 
	 $RVDDATE   = $row['RVDDATE']; 
      }

  ?>
     
 
   <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stddx ="";
if( $result = $connect->query("SELECT * FROM fuelcards WHERE Fuelcardstatus = 'ACTIVE' "))
{ while ($row = $result->fetch_assoc() ) { $stddx=$stddx. "<option> " . $row['Fuelcardname'] ." </option>";   }
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
             	 font-size: 11px;
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
<script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#fcn[]"+num).val(data[2]);
  $("#fs[]").val(data[2]); 


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "searchcard.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>


 <form id="form1" class="form-horizontal" action="fuel_reviewupdate.php" method="POST" style="height:auto; font-weight:normal;">  
         <br>
       
<table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>  
    <th>*</th>
   <th  style="width:25%;">REG NUMBER</th>
   <th  style="width:10%;">LITRES</th>
   <th  style="width:32%;">FUEL CARD NAME</th> 
   <th  style="width:33%;">FUEL STATION </th>  
 
      </tr>
      </thead>
      <tbody>
       
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  style= "width:100%; background-color:#ecf0f5;;"/></td>
                                                    
                                                   <td> <input  name="qtyx[]" type="text" value="<?php echo $qtyx[$s]; ?>"  required="required"  
                                                  style= "width:100%; background-color:#ecf0f5; "/></td> 
                                                   
                                                   <td>  <input type="text" name="fcn[]" onKeyUp="domee(this)" value="<?php echo $fcn[$s]; ?>"   required="required"
                                                    style= "width:100%; background-color:#FFF;text-align:left;"/> 
                                                    
                                                    </td>  
                                                    
                                                    <td> <input  name="fs[]" type="numeric" value="<?php echo $fs[$s]; ?>"   required="required"
                                                    style= "width:100%; background-color:#FFF;text-align:left;"/></td> 
                                                     
                                              </tr>
                                              <?php } ?> 
                                              </tbody>
                                </table>  
                                  <div id="res"> </div>
                        
              <table class="table-responsive" style="margin-top:0px;">          
             <table class="table" style="border:0px;">
              <tr>  
                <th style="width:40%;border:1px solid #ECF0F5;">Requisition No. </th>
				<th style="width:60%;border:1px solid #ECF0F5;"> <input type="text"  id="ORDERNO" name="ORDERNO" value="<?php echo $ORDERNO; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                 
              </tr>
			  </table>              
                        
               <table class="table-responsive" style="margin-top:-23px;">          
             <table class="table" style="border:0px;">
              <tr>  
                <th style="width:40%;border:1px solid #ECF0F5;">Reviewed by </th>
				<th style="width:60%;border:1px solid #ECF0F5;"> <input type="text" id="RVDBY" name="RVDBY"  value="<?php echo $desc; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                 
              </tr>
			  </table>  
              
               <table class="table-responsive" style="margin-top:-23px;">          
             <table class="table" style="border:0px;">
              <tr>  
                <th style="width:40%;border:1px solid #ECF0F5;">Name </th>
				<th style="width:60%;border:1px solid #ECF0F5;"> <input type="text"  id="RVDNAME" name="RVDNAME"  value="<?php echo $nameofuser; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                 
              </tr>
			  </table>      
               
               
              <table class="table-responsive" style="margin-top:-23px;">          
             <table class="table" style="border:0px;">
                <tr>  
                <th style="width:40%;border:1px solid #ECF0F5;">Date</th>
				<th style="width:40%;border:1px solid #ECF0F5;"> <input type="date" id="RVDDATE" name="RVDDATE" value="<?php echo date('y-m-d'); ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                <th style="width:20%;border:1px solid #ECF0F5;"> <center> <input type="submit" name="buttonsend" id="button" value="Review" /> </center>    </th>
                 
              </tr>
			  </table>    
                        
     </form>
     
<script>
  
 
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1 = '<select onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">'+ 
                                        '<option></option>'+
                                        '<option><?php   echo $stdd; ?></option>'+ 
                                        '</select>';
				   
    var  s2 = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		  
	
	 var  s3 = '<input type="text" name="fcn[]" id="fcn'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';			  
				 
     var  s4 = '<input type="text" name="fs[]" id="fs'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1+' </td>'+
	                              '<td>'+s2+' </td>'+
								  '<td>'+s3+' </td>'+   
				                  '<td>'+s4+' </td>';
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
		  table.rows[x].cells[2].childNodes[0].id="qtyx"+x;
		  table.rows[x].cells[3].childNodes[0].id="fcn"+x;
		  table.rows[x].cells[4].childNodes[0].id="fs"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>                           
