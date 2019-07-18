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
  $REQUESTDATE = '';
  $IDNUMBER = '';
  $APPLICANTNAME  = '';
  $AP_DEPARTRMENT = '';  
  $impdescription = array();
  $impcurrency    = array();
  $impdebit       = array();   
  $IMPAUTHORISEDBY = '';
  $IMPAUTHORISEDDATE = '';
  $IMPAPPROVEDBY = '';
  $IMPAPPROVEDDATE = ''; 
  $ORDERNO = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "dbmultiple";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM imprest  WHERE `ORDERNO` = '$id' AND AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
 
     $REQUESTDATE      = $row['REQUESTDATE'];
	 $IDNUMBER         = $row['IDNUMBER'];
     $APPLICANTNAME    = $row['APPLICANTNAME'];
     $AP_DEPARTRMENT   = $row['AP_DEPARTRMENT'];
     $impdescription[] = $row['IMPREST_DESCRIPTION'];
     $impcurrency[]    = $row['IMP_CURRENCY'];
     $impdebit[]       = $row['IMP_DEBIT'];   
     $IMPAUTHORISEDBY  = $row['IMPAUTHORISEDBY'];
	 $IMPAUTHORISEDDATE = $row['IMPAUTHORISEDDATE'];
     $IMPAPPROVEDBY    = $row['IMPAPPROVEDBY'];
	 $IMPAPPROVEDDATE  = $row['IMPAPPROVEDDATE']; 
	 $ORDERNO          = $row['ORDERNO'];  
      } 
     ?>
   
  
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>
          <form class="form-horizontal" action="config/inline/pettyhome_update.php" method="POST" style="height:auto; font-weight:normal; font-size:11px;">
                <div class="col-xs-5">

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" name="REQUESTDATE" id="REQUESTDATE"  value="<?php  echo $REQUESTDATE; ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">PF No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="IDNUMBER"  id="IDNUMBER"  value="<?php  echo $IDNUMBER; ?>" data-placement="top" style=" font-size: 11px; text-align:left;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-7">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Applicant</label>
                    <div class="col-sm-8">
                        <input type="text"  name="APPLICANTNAME" id="APPLICANTNAME" value="<?php  echo $APPLICANTNAME; ?>" class="form-control"  style=" font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                 <input type="text" class="form-control" name="AP_DEPARTRMENT"id="AP_DEPARTRMENT" value="<?php  echo $AP_DEPARTRMENT; ?>"  style="font-size: 11px; text-align:left;"/>
                  
                    </div>
                </div>
                
                  
                <!-- /.form-group -->
                </div>
                 <div class="col-sm-12">
                  
  <table class="table table-tabled" id="mytable11" style="font-weight:normal; font-size:10px; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:60%;font-size:11px;">DESCRIPTION FOR WHICH CASH IS REQUIRED</th>
   <th style="width:10%;font-size:11px;">CURRENCY</th>
   <th style="width:15%;font-size:11px;">AMOUNT</th>  
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($impdescription); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($impdebit[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="impdescription[]"    type="text" value="<?php  echo $impdescription[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%;background-color:#fff; "/></td>
                                                   
                                                  <td> <input  name="impcurrency[]"    type="text" value="<?php  echo $impcurrency[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%;background-color:#fff; "/></td> 
                                                  
                                                  <td> <input  name="impdebit[]"    type="numeric" value="<?php echo $impdebit[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%;background-color:#fff; "/></td>  
                                                    
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table> 
                             </div>

<table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%; "> </th>  
      </tr>
    </thead>
    <tbody>
      <tr>   
        <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Request ID</label>
                    <div class="col-sm-8">
                        <input type="text" name="ORDERNO" value="<?php  echo $ORDERNO; ?>"  class="form-control" readonly
                        style=" font-size: 11px; background-color:#fff;"/> 
                    </div>
                </div>
                <!-- /.form-group --></td>

               <td> <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Total sum</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="TOTALSUM" id="TOTALSUM" value="<?php echo $totals;?>" data-placement="top" readonly 
                        style=" font-size: 11px; text-align:center; background-color:#fff;"/>
                </div>
                <!-- /.form-group -->
                </div> 
        </td> 
      
      </tr>
    </tbody>
  </table>      
  
    
<table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%; "> </th>  
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Authorised.by</label>
                    <div class="col-sm-8">
                        <input type="text" name="IMPAUTHORISEDBY" id="IMPAUTHORISEDBY"  value="<?php  echo $IMPAUTHORISEDBY; ?>" placeholder"Signature"  
                        class="form-control" readonly
                        style="font-size: 11px;  background-color:#fff;"/> 
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8"> 
                        <input class="form-control" type="text" name="IMPAUTHORISEDDATE" id="IMPAUTHORISEDDATE"  value="<?php  echo $IMPAUTHORISEDDATE; ?>" 
                        data-placement="top" readonly 
                        style=" font-size: 11px; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group --></td>
        <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Approved by</label>
                    <div class="col-sm-8">
                        <input type="text" name="IMPAPPROVEDBY" id="IMPAPPROVEDBY"  value="<?php  echo $IMPAPPROVEDBY; ?>" placeholder"Signature"  class="form-control" readonly
                        style=" font-size: 11px; background-color:#fff;"/> 
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="IMPAPPROVEDDATE" id="IMPAPPROVEDDATE"  value="<?php  echo $IMPAPPROVEDDATE; ?>" data-placement="top" readonly 
                        style=" font-size: 11px; text-align:center; background-color:#fff;"/>
                </div>
                <!-- /.form-group -->
                </div> 
        </td> 
      
      </tr>
    </tbody>
  </table> 
  
 <center> <input type="submit" name="buttonresend" id="button" value="Forward" />  </center>
         </form>
  
  
   <!-- /.START IMPREST REQUEST SCRIPT -->
        
     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="impdescription[]" id="impdescription_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s2b =  '<select name="impcurrency[]" required="required"  id="impcurrency_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="impdebit[]" id="impdebit_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'; 										
				
		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);
 
  }

  function deleteRow166(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="impdescription_"+x;
          table.rows[x].cells[2].childNodes[0].id="impcurrency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="impdebit_"+x;  
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>
  
 
  <!-- /.END IMPREST REQUEST SCRIPT -->     