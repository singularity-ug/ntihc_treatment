  <?php
  $idx = $_GET['q']; 
  
  $OBJECTIVE = '';
  $CODE = '';
  $ITEMDESCRIPTION  = '';
  $FINANCIALPERIOD = ''; 
  $PLANDETAILS = '';
  $FIRSTQTR = '';
  $SECONDQTR  = '';
  $THIRDQTR = ''; 
  $FOURTHQTR='';
  $BUDGETAMOUNT = '';  

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM procplanning  WHERE id = '$idx' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
  
     $OBJECTIVE = $row['OBJECTIVE'];
     $CODE = $row['CODE'];
     $ITEMDESCRIPTION  = $row['ITEMDESCRIPTION'];
     $FINANCIALPERIOD = $row['FINANCIALPERIOD'];  
	 $PLANDETAILS = $row['PLANDETAILS'];
     $FIRSTQTR = $row['FIRSTQTR'];
     $SECONDQTR  = $row['SECONDQTR'];
     $THIRDQTR = $row['THIRDQTR']; 
	 $FOURTHQTR  = $row['FOURTHQTR'];
     $BUDGETAMOUNT = $row['BUDGETAMOUNT'];  
     $CODEDAMOUNT = $row['CODEDAMOUNT'];   
	  $id = $row['id'];
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
   <th>ID</th> <th>OBJECTIVE</th>
   <th style="text-align:center;">CODE</th>
   <th style="text-align:center;">ITEM DESCRIPTION</th>
   <th style="text-align:center;">FINANCIAL PERIOD</th>
   <th>DETAILS</th>
          <th> 1ST QUARTER  </th>
		  <th> 2ND QUARTER  </th>
		  <th> 3RD QUARTER  </th>
          <th> 4TH QUARTER </th>  
          <th> SUB.AMOUNT </th> 
   
   </tr>
   </thead>
   <tbody>
   <tr>
    <td style="width:3%;"><input type="text" name="id" id="id"  value="<?php  echo $id; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:10%;"><input type="text" name="OBJECTIVE" id="OBJECTIVE"  value="<?php  echo $OBJECTIVE; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:7%;"><input type="text" name="CODE" id="CODE"  value="<?php  echo $CODE; ?>"  required="required"  
                style="width:100%; text-align:left;background-color:#fff;"></td> 
                
   <td style="width:20%;"><input type="text" name="ITEMDESCRIPTION" id="ITEMDESCRIPTION"  value="<?php  echo $ITEMDESCRIPTION; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:17%;"><input type="text" name="FINANCIALPERIOD" id="FINANCIALPERIOD"  value="<?php  echo $FINANCIALPERIOD; ?>" required="required"  
                style="width:100%; text-align:left;background-color:#fff;"></td> 
                
   <td style="width:10%;"><input type="text" name="PLANDETAILS" id="PLANDETAILS"  value="<?php  echo $PLANDETAILS; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:8%;"><input type="text" name="FIRSTQTR" id="FIRSTQTR"  value="<?php  echo $FIRSTQTR; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:8%;"><input type="text" name="SECONDQTR" id="SECONDQTR"  value="<?php  echo $SECONDQTR; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
               
   <td style="width:8%;"><input type="text" name="THIRDQTR" id="THIRDQTR"  value="<?php  echo $THIRDQTR; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:8%;"><input type="text" name="FOURTHQTR" id="FOURTHQTR"  value="<?php  echo $FOURTHQTR; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:13%;"><input type="text" name="BUDGETAMOUNT" id="BUDGETAMOUNT"  value="<?php  echo $BUDGETAMOUNT; ?>"  required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
                                         
   </tr>
  <tr>
 </tbody>
 </table>
     
   

      <table class="table table-bordered" style="margin-top:-23px;border:0px;">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:85%;border:0px;"> </th> 
         <th style="border-bottom-color:white; width:8%;border:0px;"> </th> 
        <th style="border-bottom-color:white; width:7%;border:0px;"></th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td style="border:0px;"> </td> 
        <td style="border:0px;"> <center> <input type="submit" name="buttonsend" id="button" value="Update" /> </center>   </td>
        <td style="border:0px;">  <center>  
        <a href="budgeting.php"> Close <span class="sr-only">(current)</span></a> 
        </center></td>  
       
      </tr>
    </tbody>
  </table>                 
            </form>
			
			 
  