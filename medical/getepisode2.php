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
  $impdet    = array();  
  $impcode    = array();  
  $impline    = array();
  $impcom1    = array(); 
  $impcom2    = array();    
  $IMPAUTHORISEDBY = '';
  $IMPAUTHORISEDDATE = '';
  $IMPAPPROVEDBY = '';
  $IMPAPPROVEDDATE = ''; 
  $ORDERNO = '';  
  $CASHOUT = '';
  $RECIEVEDBY = '';
  $RECIEVEDDATE = ''; 
  $PAIDBY = '';  
  $IMPAPPROVERNAME = ''; 
  $IMPAUTHORISERNAME = ''; 
    
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "dbmultiple";
       
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM imprest WHERE AUTHACTION ='PENDING' AND SENDTO ='$rm' AND ORDERNO = '$id' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
 
     $REQUESTDATE      = $row['REQUESTDATE'];
	 $IDNUMBER         = $row['IDNUMBER'];
     $APPLICANTNAME    = $row['APPLICANTNAME'];
     $AP_DEPARTRMENT   = $row['AP_DEPARTRMENT'];
     $impdescription[] = $row['IMPREST_DESCRIPTION'];
     $impcurrency[]    = $row['IMP_CURRENCY'];
     $impdebit[]       = $row['IMP_DEBIT'];  
	 $impdet[]        = $row['BUDGETDETAILS'];
	 $impcode[]        = $row['CODE'];
	 $impline[]        = $row['BUDGETLINE'];
	 $impcom1[]  = $row['IMPAUTHCOMMENT']; 
	 $impcom2[]  = $row['IMPAPPROVERCOMMENT'];  
     $IMPAUTHORISEDBY  = $row['IMPAUTHORISEDBY'];
	 $IMPAUTHORISEDDATE = $row['IMPAUTHORISEDDATE'];
     $IMPAPPROVEDBY    = $row['IMPAPPROVEDBY'];
	 $IMPAPPROVEDDATE  = $row['IMPAPPROVEDDATE']; 
	 $ORDERNO          = $row['ORDERNO'];  
	 $CASHOUT          = $row['CASHOUT'];  
	 $RECIEVEDBY          = $row['RECIEVEDBY'];  
	 $RECIEVEDDATE          = $row['RECIEVEDDATE'];  
	 $PAIDBY          = $row['PAIDBY']; 
	 $IMPAPPROVERNAME          = $row['IMPAPPROVERNAME'];  
	 $IMPAUTHORISERNAME          = $row['IMPAUTHORISERNAME'];  
	   
      } 
     ?>
   
 <img src="assets/img/logsbig.PNG" width="100%" height="100%">    
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>
          <form class="form-horizontal" action="petty_cash" method="POST" style="height:auto; font-weight:normal;">
                 
      <table class="table table-bordered">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; width:50%;"> </th> 
        <th style="border-bottom-color:white; width:50%;"> </th>
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
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
                <!-- /.form-group -->  </td>
               
                <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Applicant</label>
                    <div class="col-sm-8">
                        <input type="text"  name="APPLICANTNAME" id="APPLICANTNAME" value="<?php  echo $APPLICANTNAME; ?>" class="form-control"  style=" font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                 <input type="text" class="form-control" name="AP_DEPARTRMENT"id="AP_DEPARTRMENT" value="<?php  echo $AP_DEPARTRMENT; ?>"  
                 style="font-size: 11px; text-align:left;"/>
                  
                </div>
                </div> 
                <!-- /.form-group -->
                 </td>
                </tr>
    </tbody>
  </table>             
                
              
                  
  <table class="table table-tabled" id="mytable11" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:25%;">DESCRIPTION FOR WHICH CASH IS REQUIRED</th>
   <th style="width:6%;">CURRENCY</th>
   <th style="width:7%;">AMOUNT</th>
   <th style="width:20%;">BUDGET EXTENSION</th>
   <th style="width:20%;">BUDGET LINE</th>
   <th style="width:5%;">CODE</th> 
   <th style="width:8%;">CONFIRMATION</th> 
   <th style="width:8%;">APPROVAL</th> 
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($impdescription); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($impdebit[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="impdescription[]" readonly=""  type="text" value="<?php  echo $impdescription[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%;background-color:#fff; "/></td>
                                                   
                                                  <td> <input  name="impcurrency[]" readonly=""  type="text" value="<?php  echo $impcurrency[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%;background-color:#fff; "/></td> 
                                                  
                                                  <td> <input  name="impdebit[]" readonly=""  type="numeric" value="<?php echo $impdebit[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%;background-color:#fff; "/></td> 
                                                  
                                                   <td> <input  name="impdet[]" readonly=""  type="text" value="<?php  echo $impdet[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%;background-color:#fff; "/></td> 
                                                   
                                                    <td> <input  name="impline[]" readonly="" type="text" value="<?php  echo $impline[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td> 
                                                   
                                                    <td> <input  name="impcode[]" readonly=""  type="text" value="<?php  echo $impcode[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; "/></td> 
                                                   
                                                   <td> <input  name="impcom1[]" readonly=""  type="text" value="<?php  echo $impcom1[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; "/></td> 
                                                   
                                                   <td> <input  name="impcom2[]" readonly=""  type="text" value="<?php  echo $impcom2[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; "/></td> 
                                                   
                                                   
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                                
  

    <table class="table table-bordered">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; width:70%;"> </th> 
        <th style="border-bottom-color:white; width:30%;"> </th>
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-3" style="text-align:left;"> Amount in words</label>
                    <div class="col-sm-9">
                        <?php /* $f = new NumberFormatter("en",NumberFormatter::SPELLOUT);*/ ?>
                        <input type="text"  name="AMOUNTINWORDS" id="AMOUNTINWORDS"  VALUE="<?php  /*$f->format($totals);*/ ?>"  class="form-control" readonly = "readonly" 
        style="width:100%; text-align:left; background-color:#fff;" />
                    </div>
                 </div>
               <!-- /.form-group -->  </td>
               
                <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-3" style="text-align:left;"> Total sum</label>
                    <div class="col-sm-9">
                        <input type="text"  name="TOTALSUM" id="TOTALSUM" value="<?php echo $totals;?>" readonly = "readonly" 
        style="width:100%; text-align:left;font-weight:bold; background-color:#fff;">
                    </div>
                 </div>
                 </td>
                </tr>
    </tbody>
  </table>       
           
           
    <table class="table table-bordered">
    <thead>
        <tr  class="  "> 
        <th style="border-bottom-color:white; width:50%;"> </th> 
        <th style="border-bottom-color:white; width:50%;"> </th>
    </tr>
    </thead>   
    <tbody>
        <tr> 
        <td>
          <div class="form-group">
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
                <!-- /.form-group -->
                
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Name</label>
                    <div class="col-sm-8"> 
                        <input class="form-control" type="text" name="IMPAUTHORISERNAME" id="IMPAUTHORISERNAME"  value="<?php  echo $IMPAUTHORISERNAME; ?>" 
                        data-placement="top" readonly 
                        style=" font-size: 11px; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group -->
                  
                </td>
               
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
                        style=" font-size: 11px; text-align:left; background-color:#fff;"/>
                </div> 
                </div> 
                <!-- /.form-group --> 
                
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Name</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="IMPAPPROVERNAME" id="IMPAPPROVERNAME"  value="<?php  echo $IMPAPPROVERNAME; ?>" data-placement="top" readonly 
                        style=" font-size: 11px; text-align:left; background-color:#fff;"/>
                </div> 
                </div> 
                <!-- /.form-group --> 
                 </td>
                </tr>
    </tbody>
  </table>  
  
            
    <p style="font-weight:bold; text-transform:uppercase;">Acknoledgement of receipt</p>         
   <table class="table table-bordered">
    <thead>
        <tr  class="  "> 
        <th style="border-bottom-color:white; width:15%; "> Transaction status</th> 
        <th style="border-bottom-color:white; width:20%;text-align:center;"> Requisition ID</th>
        <th style="border-bottom-color:white; width:26%;text-align:center;"> Recieved by</th> 
        <th style="border-bottom-color:white; width:14%;text-align:center;"> Payment date</th>
        <th style="border-bottom-color:white; width:25%;text-align:center;"> Paid by</th>
    </tr>
    </thead>   
    <tbody>
         <tr> 
         
         <td> <input class="form-control" type="text" name="CASHOUT" value="<?php  echo $CASHOUT; ?>" readonly="" 
              style=" font-size: 11px; text-align:center; background-color:#FFF; width:100%; "/>    </td>  
         
         <td> <input class="form-control" type="text" name="ORDERNO" value="<?php  echo $ORDERNO; ?>" readonly="" 
              style=" font-size: 11px; text-align:center; background-color:#FFF; width:100%; "/>  </td>
               
               
         <td> <input class="form-control" type="text" name="RECIEVEDBY" value="<?php  echo $RECIEVEDBY; ?>" readonly="" 
              style=" font-size: 11px; text-align:center; background-color:#FFF; width:100%; "/>    </td> 
              
         <td> <input class="form-control" type="text" name="RECIEVEDDATE" value="<?php  echo $RECIEVEDDATE; ?>" readonly="" 
              style=" font-size: 11px; text-align:center; background-color:#FFF; width:100%; "/>    </td>      
              
         <td>  <input class="form-control" type="text" name="PAIDBY" value="<?php  echo $PAIDBY; ?>" readonly="" 
              style=" font-size: 11px; text-align:center; background-color:#FFF; width:100%; "/>   </td>
         
       </tr>
    </tbody>
  </table>              
           
</form>
  
 
   <!-- /.START IMPREST REQUEST SCRIPT -->
        
     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[6].childNodes[0].value);
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

     var  s4c =  '<input type="numeric" name="impdet[]" id="impdet'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				
	 var  s5c =  '<input type="numeric" name="impline[]" id="impline'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				
	 var  s6c =  '<input type="numeric" name="impcode[]" id="impcode'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';	
				
		 var  s7c =  '<input type="text" name="impcom1[]" id="impcom1'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';	
				
		 var  s8c =  '<input type="text" name="impcom2[]" id="impcom2'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';										
				
		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>'+
								  '<td>'+s4c+' </td>'+
				                  '<td>'+s5c+' </td>'+ 
								  '<td>'+s6c+' </td>'+ 
								  '<td>'+s7c+' </td>'+ 
								  '<td>'+s8c+' </td>';
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
		  table.rows[x].cells[4].childNodes[0].id="impdet"+x;
		  table.rows[x].cells[5].childNodes[0].id="impline"+x;
		  table.rows[x].cells[6].childNodes[0].id="impcode"+x;
		  table.rows[x].cells[7].childNodes[0].id="impcom1"+x;
		  table.rows[x].cells[8].childNodes[0].id="impcom2"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>
  
 
  <!-- /.END IMPREST REQUEST SCRIPT -->
