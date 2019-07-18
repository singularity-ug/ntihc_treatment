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
  $id =  $_POST['bb'];  
  $DATECREATED = '';
  $FIRSTNAME = '';
  $LASTNAME  = '';
  $OTHERNAME = '';
  $SEX = '';
  $AGE = '';
  $AGE1 = ''; 
  $SCHOOLINGSTATUS = '';
  $HIGHESTLEVELOFEDUCATION = '';
  $MARITALSTATUS = '';
  $EMPLOYMENTSTATUS = '';
  $DISTRICT = '';
  $DIVISION = '';
  $PLACEOFRESIDENCE = '';
  $PHONECONTACT = '';
  $MOTHERFIRSTNAME = '';
  $MOTHERLASTNAME='';
  $FATHERFIRSTNAME='';
  $FATHERLASTNAME='';
  $LIVINGWITH='';
  $HEAREDABOUTNTIHC='';
  $REGISTEREDBY='';
  $REGISTERACCOUNT=''; 
  $NTIHCNO='';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE NTIHCNO = '$id' ";

 $res = $conn->query($sql);
 
 if($res){}
 else{echo $conn->error; exit();}

     while($row=$res->fetch_assoc()){
	  
	 $NTIHCNO     = $row['NTIHCNO'];  
	 $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME   = $row['FIRSTNAME'];
     $LASTNAME    = $row['LASTNAME'];
     $OTHERNAME   = $row['OTHERNAME'];
     $SEX         = $row['SEX'];
     $AGE         = $row['AGE'];
	 $AGE1        = $row['AGE1'];
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS'];
     $HIGHESTLEVELOFEDUCATION = $row['HIGHESTLEVELOFEDUCATION'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $DIVISION = $row['DIVISION'];
     $PLACEOFRESIDENCE = $row['PLACEOFRESIDENCE'];
     $PHONECONTACT = $row['PHONECONTACT'];
     $MOTHERFIRSTNAME  = $row['MOTHERFIRSTNAME'];
     $MOTHERLASTNAME=$row['MOTHERLASTNAME'];
     $FATHERFIRSTNAME=$row['FATHERFIRSTNAME'];
     $FATHERLASTNAME=$row['FATHERLASTNAME'];
     $LIVINGWITH =$row['LIVINGWITH'];
     $HEAREDABOUTNTIHC=$row['HEAREDABOUTNTIHC'];
     $REGISTEREDBY=$row['REGISTEREDBY']; 
      } 
	 
     ?>
	 
	
    
    <form id="form1" class="form-horizontal" action=" " method="POST" style="height:auto; font-weight:normal;"> 
          
         <div class="col-lg-12" style="text-align:left;">
<!-- <img src="assets/img/logsbig.PNG" width="100%" height="100%">   -->
</div>
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">MEDICAL EXAMINATION CLIENT CARD </legend> </center> 
          
       
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
                     <input type="text" name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" class="form-control">
                </div>
                </div>
                <!-- /.form-group -->
				
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Vist.date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" class="form-control">
                </div>
                </div>
                <!-- /.form-group --> 

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First.name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" required="required "/>
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  value="<?php echo $LASTNAME;?>" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" />
                   </div>
                </div>
                <!-- /.form-group -->
 

        </th>
		
         <td>
		 
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Age</label>
                    <div class="col-sm-7">
                    <input type="numeric" name="AGE1" id="AGE1" class="form-control" value="<?php echo $AGE1;?>"  />
                   </div>
                </div>
                <!-- /.form-group --> 
		 
		  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Gender</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="SEX" value="<?php echo $SEX;?>" required="required">
			                  <option value="<?php echo $SEX;?>"> <?php echo $SEX;?> </option> 
                        <option value="FEMALE">FEMALE</option>
                        <option value="MALE">MALE</option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                  

               

 
			  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Schooling</label>
                    <div class="col-sm-7"> 
                    <select class="form-control" name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" required="required">
			                  <option value="<?php echo $SCHOOLINGSTATUS;?>"> <?php echo $SCHOOLINGSTATUS;?> </option>
                              <option value="IS">IS</option>
                    <option value="OS">OS</option>
                        </select>
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Education.level</label>
                    <div class="col-sm-7">
                       <select class="form-control" name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" required="required">
			                  <option value="<?php echo $HIGHESTLEVELOFEDUCATION;?>"> <?php echo $HIGHESTLEVELOFEDUCATION;?> </option>
                                <option>PRIMARY</option>
								<option>SECONDARY</option>
                                <option>TERTIARY</option>
								<option>VOCATION</option>
                                <option>UNIVERSITY</option>
								<option>NONE</option>
                    			</select>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Marital.status</label>
                    <div class="col-sm-7"> 
                              <select class="form-control" name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" required="required">
			                  <option value="<?php echo $MARITALSTATUS;?>"> <?php echo $MARITALSTATUS;?> </option>
								<option>SINGLE</option>
								<option>MARRIED</option>
                                <option>SEPARATED</option>
								<option>WIDOWED</option>
                                <option>DIVORCED</option>
								<option>NO RESPONSE</option>
                    			</select>
                   </div>
                </div>
		 </th>
		 
        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment</label>
                    <div class="col-sm-8"> 
                   <select class="form-control" name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>" required="required">
			       <option value="<?php echo $EMPLOYMENTSTATUS;?>"> <?php echo $EMPLOYMENTSTATUS;?> </option>
                                <option value="UNEMPLOYED">UNEMPLOYED</option>
								<option value="TEMPORARY">TEMPORARY</option>
                                <option value="PERMANENT">PERMANENT</option>
							    </select>
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <select class="form-control" name="DISTRICT" value="<?php echo $DISTRICT;?>" required="required">
			       <option value="<?php echo $DISTRICT;?>"> <?php echo $DISTRICT;?> </option>
								<option>KAMPALA</option>
								<option>MUKONO</option>
                                <option>WAKISO</option>
                                <option>MPIGI</option>
								<option>KAYUNGA</option>
                                <option>ENTEBBE</option>
                                <option>NAKASEKE</option>
								<option>BUIKWE</option>
                                <option>GOMBA</option>
                                <option>OTHERS</option>
                   </select>
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
			      <select class="form-control" name="DIVISION" value="<?php echo $DIVISION;?>">
			       <option value="<?php echo $DIVISION;?>"> <?php echo $DIVISION;?> </option>
								<option>CENTRAL</option>
								<option>LUBAGA</option>
                                <option>NAKAWA</option>
                                <option>MAKINDYE</option>
                                <option>KAWEMPE</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control"  value="<?php echo $PLACEOFRESIDENCE;?>" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone.No.</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control"  value="<?php echo $PHONECONTACT;?>" />
                   </div>
                </div>
                <!-- /.form-group -->
 
             </td>
			 
			 <td>
			 
			 
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control" value="<?php echo $MOTHERFIRSTNAME;?>"  required="required" />
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control" value="<?php echo $MOTHERLASTNAME;?>" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->
		 
		
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control" value="<?php echo $FATHERFIRSTNAME;?>"  />
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control" value="<?php echo $FATHERLASTNAME;?>"  />
                   </div>
                </div>
                <!-- /.form-group -->
        
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Living.with</label>
                    <div class="col-sm-8"> 
			      <select class="form-control" name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>">
			       <option value="<?php echo $LIVINGWITH;?>"> <?php echo $LIVINGWITH;?> </option>
								<option>SINGLE PARENTS</option>
								<option>BOTH PARENTS</option>
                                <option>GRAND PARENTS</option>
                                <option>GUARDIAN</option>
								<option>ALONE/SELF</option>
                                <option>BROTHER</option>
                                <option>SISTER</option>
                                <option>B/FRIEND</option>
                                <option>WIFE</option>
                                <option>HUSBAND</option>
                                </select>
                   </div>
                </div>
			 
			 </td>
    </tbody>
    </table>

  <?php 
  $id = $id ;  
  $EID = ''; 
  $prob   = array();
  $top    = array();
  $catg   = array();  
  $CREATEDDATE = '';
  $NTIHCNO = '';  
  $COUNSELLINGDONE = '';   
  $URGENCYTYPE = ''; 
  $VISTBY = '';   
  $PROBLEMBRIEF = '';  
  $ACTIONTAKEN = ''; 
  $SERVICE_EPISODE = ''; 
  $USERINITIAL = '';  
  $REGISTERACCOUNT = ''; 
  $AGE = '';   
  $AGE_GROUP = '';
  $SEX = '';  
  $SCHOOLING = '';
  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM clientsexamination WHERE NTIHCNO = '$id' ";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $EID          = $row['EID'];  
	 $CREATEDDATE      = $row['CREATEDDATE'];  
     $prob[]    = $row['MEDICALPROBLEM']; 
	 $top[]    = $row['MEDICALTOPIC'];
     $catg[]       = $row['PROBLEMCATEGORY'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $COUNSELLINGDONE = $row['COUNSELLINGDONE'];
     $URGENCYTYPE    = $row['URGENCYTYPE'];
	 $VISTBY  = $row['VISTBY'];  
	 $PROBLEMBRIEF          = $row['PROBLEMBRIEF']; 
	 $ACTIONTAKEN          = $row['ACTIONTAKEN']; 
	 $SERVICE_EPISODE          = $row['SERVICE_EPISODE'];  
	 $USERINITIAL  = $row['USERINITIAL'];  
	 $REGISTERACCOUNT          = $row['REGISTERACCOUNT']; 
	 $AGE          = $row['AGE']; 
	 $AGE_GROUP          = $row['AGE_GROUP']; 
	 $SEX          = $row['SEX']; 
	 $SCHOOLING          = $row['SCHOOLING']; 
	 
      } 
     ?>
	   
      
       <table class="table table-bordered">
    <thead>
      <tr  class="">
        <th style="width:60%;"> </th> 
         <th  style="width:20%;">Date</th>
        <th style="width:20%;"> <input type="text" name="CREATEDDATE" id="CREATEDDATE" value="<?php  echo $CREATEDDATE; ?>"  readonly="readonly" 
        style="background-color:#fff; width:100%;"> </th>
        </tr>
    </thead> 
    </table> 
    
       
       
                
                 
  <table class="table table-striped" id="mytable11" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th>PROBLEM</th>
   <th>TYPE</th> 
   <th>CATEGORY</th> 
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($prob); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($catg[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="prob[]" readonly="" type="text" value="<?php  echo $prob[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  <td> <input  name="top[]" readonly="" type="text" value="<?php  echo $top[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td> 
                                                   
                                                  <td> <input  name="catg[]" readonly="" type="numeric" value="<?php echo $catg[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td> 
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                
     
  <br>
 
  
 
   
 <br>
       
      
        </form>   
                 
   <!-- /.START IMPREST REQUEST SCRIPT -->

     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="prob[]" id="prob'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';
 

	 var  s2b =  '<input type="numeric" name="top[]" id="top'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'; 

     var  s4c =  '<input type="numeric" name="catg[]" id="catg'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				
		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+ 
								  '<td>'+s4c+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="prob"+x;
          table.rows[x].cells[2].childNodes[0].id="top"+x;
		  table.rows[x].cells[3].childNodes[0].id="catg"+x;  
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
} 
  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->
             
                <div class="col-xs-12" >
                <br> 

        </div>
         <div class="col-xs-12"> 
      </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>
