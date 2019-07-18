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
 
  <style media="screen">
  .btn {padding : 0px 3px;}
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
 <form class="form-horizontal" method="post" action="update_dispenser.php" style="height:auto;">  
   
   
        <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
		<th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
		<th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
 <div class="col-sm-12">
        <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
		<th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
		<th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
		
		 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Client.No.</label>
                    <div class="col-sm-8">
                     <input type="text" name="NTIHCNO"  class="form-control" 
					 readonly="readonly" style="font-weight:normal; background-color:#fff;">
                </div>
                </div>
                <!-- /.form-group -->
				
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Vist.date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"   class="form-control"
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                </div>
                </div>
                <!-- /.form-group --> 

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First.name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  
				   readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"   
				   readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->
 

        </th>
		
         <td>
		 
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Age</label>
                    <div class="col-sm-7">
                    <input type="numeric" name="AGE1" id="AGE1" class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group --> 
		 
		  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Gender</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="SEX"  
						readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    </div>
                </div>
                <!-- /.form-group -->

                  

               

 
			  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Schooling</label>
                    <div class="col-sm-7"> 
                    <input type="text"  class="form-control" name="SCHOOLINGSTATUS"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Education.level</label>
                    <div class="col-sm-7">
                      <input type="text"  class="form-control" name="HIGHESTLEVELOFEDUCATION"  
					   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Marital.status</label>
                    <div class="col-sm-7"> 
                              <input type="text"  class="form-control" name="MARITALSTATUS"  
							  readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
		 </th>
		 
        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment</label>
                    <div class="col-sm-8"> 
                   <input type="text"  class="form-control" name="EMPLOYMENTSTATUS"  
				   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <input type="text" class="form-control" name="DISTRICT"  
				   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
			      <input type="text" class="form-control" name="DIVISION"   readonly="readonly" 
				  style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone.No.</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->
 
             </td>
			 
			 <td>
			 
			 
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->
		 
		
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control"  
					style="font-weight:normal; background-color:#ecf0f5;"> 
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control"  
					style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
        <br>
		 <div class="form-group" style="margin-top:-15px;">
                    <label for="pass1" class="control-label col-sm-4">Living.with</label>
                    <div class="col-sm-8"> 
			      <input type="text"  class="form-control" name="LIVINGWITH"  
				 readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
			 
			 </td>
    </tbody>
    </table>
            </div>
        <div class="col-sm-5">       
       <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:0px;">Service date </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th> 
</tr>
			  </table>
			 
			  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr>
	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="VISTBY" id="VISTBY"   readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
              </tr>
			  </table>
               
	 <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			   <th style="width:50%;border:0px;">Bief </th>
				<th style="width:50%;border:0px;"> <input type="text"  name="BRIEF" id="BRIEF"    readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th> 
				  </tr>
			  </table>
				
				 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Counselling</td>  
              </tr>
			  </table>
			  
			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>  
				<td style="width:100%;border:0px;"> <input type="text"  name="COUNSELLING" id="COUNSELLING"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>  
              </tr>
			  </table>
                             
<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
 
$id   = trim($_POST['id']);
$sql="SELECT * FROM counsellingservices WHERE NTIHCNO='$id' ";

$result = $conn->query($sql);
$st ='<table id="dataTable1" class="table table-bordered">
      <thead>
      <tr>
       <th>  *  </th>
          <th style="width:40%;"> COURSE OF ACTION </th> 
          <th style="width:60%;"> PROBLEM DESCRIPTION </th>
     </tr>
     </thead>
    <tbody id="tablebody">';


$sum=0;
while($row = $result->fetch_assoc())
{
  $sql1="SELECT * FROM counsellingservices WHERE NTIHCNO='".$row['NTIHCNO']."'";
  $result1 = $conn->query($sql1);
  $unit  =0;
while( $row1    = $result1->fetch_assoc()){
       $unit    = intval($row1['NTIHCNO']);}

  $st=$st.'<tr >
  <td><input type="checkbox" required="required" checked="checked" /></td>
  <td>
   <input type="text" name="PROBLEM_CATEGORY"  value="'.$row['PROBLEM_CATEGORY'].'"  id="" required="required" 
    style= " width:100%; background-color:#fff;"/>
  </td>
    
  <input type="text" name="PROBLEM"  value="'.$row['PROBLEM'].'"  id="" required="required" 
    style= " width:100%; background-color:#fff;"/>
  </td> 
 
</td>
</tr>';
$sum= $sum+(intval($row['NTIHCNO'])*$unit);
}

$st = $st.' </tbody>
</table> ';
$conn->close();
echo $sum."______".$st;
?>
	 
   
<?php
  $id = $_GET['NTIHCNO'];  
  
  $NTIHCNO = ''; 
  $dnx = array();  
  $lcn = array();   
  $DATECRETAED='';   
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM counsellingservices  WHERE `NTIHCNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     
     $NTIHCNO = $row['NTIHCNO']; 
	 $dnx[] = $row['PROBLEM_CATEGORY']; 
	 $lcn[]        = $row['PROBLEM'];
	 $DATECRETAED = $row['DATECRETAED'];   
      }

  ?>
                  
   <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
    <th style="background-color: #f9fafb;">*</th>
   <th style="width:25%;background-color: #f9fafb;">DESCRIPTION </th>  
   <th style="width:14%;background-color: #f9fafb;text-align:center;">LOCATION</th>    
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fcfdfe;;"/></td> 
                                                   
                                                    
                                                    <td> <input  name="lcn[]" type="text" value="<?php echo $lcn[$s]; ?>"  required="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff; "/></td> 
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>     </div> 
			  
			  <div class="col-sm-6" style="margin-top: 0px;"> 
              <table class="table-responsive" >
              <table class="table" style="margin-top:2px;">
              <tr>
			    <th style="width:70%;border:1px solid #ecf0f5;">Pre-Test Counselling done / information given </th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="PRE_TESTCOUSELLING_GIVEN" id="PRE_TESTCOUSELLING_GIVEN" 
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				
				  </tr>
			  </table>
			  
			  <table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">Counselled as </th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="COUNSELLED_AS" id="COUNSELLED_AS" 
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">HCT Entry Point</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="HCT_ENTRYPOINT" id="HCT_ENTRYPOINT" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">Have you ever Tested for HIV before?</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="EVERTESTEDBEFORE" id="EVERTESTEDBEFORE" 
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">How many times have you tested in the last 12 months</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="NUMBEROFTESTS" id="NUMBEROFTESTS" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">Number of sexual partners in the last 12 months</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="NUMBEROFSEXUALPARTNERS" id="NUMBEROFSEXUALPARTNERS" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">What was the test results last time you Tested?</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="LAST_TESTRESULTS" id="LAST_TESTRESULTS" 
				 readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">Has your Partner / Spouse been tested for HIV before?</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="SPOUSE_PARTNERTESTED_BEFORE" id="SPOUSE_PARTNERTESTED_BEFORE" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:70%;border:1px solid #ecf0f5;">If yes what were the results?</th>
				<th style="width:30%;border:1px solid #ecf0f5;"> <input type="text"  name="IFYES_RESULTS" id="IFYES_RESULTS" 
				  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
               </div> 
              </div> 
                        
               <center> <input type="submit" name="button" id="button" value="Update"/>
                <a href="client_counsellingroom.php" style="border: 1px solid #000; padding: 2px;border-radius: 3px; font-weight:bold;"> New service <span class="sr-only">(current)</span></a> 
               </center>
             
                    </form> 
  <script>
  
 
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[2].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" readonly="readonly" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				  
 
     var  s8lc = '<input type="text" name="lcn[]" id="lcn'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';
   
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+ 
								  '<td>'+s8lc+' </td>';
								  
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
          table.rows[x].cells[2].childNodes[0].id="lcn"+x; 
		   
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script> 