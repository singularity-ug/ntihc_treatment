 <?php
  $id = $_GET['q']; 
  $Createddate = '';
  $applicantname = '';
  $title  = '';
  $applicantdept = '';
  $pfno = ''; 
  $senderaccount = ''; 
  $CORNAME='';
  $CORSIGNATURE='';
  $Phonecontact=''; 
  $booktype='';
  $Activity='';
  $journeypoint_start='';
  $Destination_to='';
  $Reservationdate_from='';
  $Reservationdate_to='';
  $Departuretime='';
  $Pickuptime_expected='';
  $Preferedvehicle='';
  $Passengers=''; 
                   
                      
			  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ftl";
             
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM ftlvehiclebooking  WHERE `id` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $Createddate = $row['Createddate'];
     $applicantname = $row['applicantname'];
     $title  = $row['title'];
     $applicantdept = $row['applicantdept'];
     $pfno = $row['pfno'];
     $senderaccount = $row['senderaccount'];
     $Phonecontact = $row['Phonecontact']; 
     $booktype=$row['booktype'];
     $Activity=$row['Activity'];
     $journeypoint_start=$row['journeypoint_start'];
     $Destination_to=$row['Destination_to'];
     $Reservationdate_from=$row['Reservationdate_from'];
     $Reservationdate_to=$row['Reservationdate_to'];
     $Departuretime=$row['Departuretime'];
     $Pickuptime_expected=$row['Pickuptime_expected'];
	 $Preferedvehicle=$row['Preferedvehicle'];
     $Passengers=$row['Passengers']; 
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
      <!-- title row -->
      <div class="row"> 
                                         <div class="modal-body">   
                                          
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>TRANSPORT RESERVATION</b> </p> </center> 
 
            <form class="form-horizontal" action="../../ftl_admin/process_ftlbookings.php" method="POST" style="height:auto;">
            
             <input type="hidden" id="id" name="id"  value="<?php  echo $id; ?>"   />

               <table class="table" style="border:0px;">
              <tr>  
                <th style="width:30%;border:0px;">Request date</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Createddate" name="Createddate"  value="<?php  echo $Createddate; ?>"   
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
              
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Applicant name</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="applicantname" name="applicantname"value="<?php  echo $applicantname; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
             
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Title</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="title" name="title" value="<?php  echo $title; ?>"    
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
 
           <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Department</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="applicantdept" name="applicantdept" value="<?php  echo $applicantdept; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>   
 
               <input type="hidden" id="pfno" name="pfno" value="<?php  echo $pfno; ?>" >
               <input type="hidden" id="senderaccount" name="senderaccount" value="<?php  echo $senderaccount; ?>" >
              
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Phone contact</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Phonecontact" name="Phonecontact" value="<?php  echo $Phonecontact; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
             
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Reservation type</th> 
				<th style="width:70%;border:0px;"> 
                <input type="text" id="booktype" name="booktype"  value="<?php  echo $booktype; ?>"   
                readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>                 
                </th>   
              </tr>
			  </table>
                 
               
                 <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Activity</th> 
				<th style="width:70%;border:0px;"> <textarea id="Activity" name="Activity" value="<?php  echo $Activity; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff; "></textarea> </th>   
              </tr>
			  </table> 
                
          <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">From</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="journeypoint_start" name="journeypoint_start"  value="<?php  echo $journeypoint_start; ?>" 
				readonly="readonly"style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
                
                  
              </tr>
			  </table> 
                
             <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Destination</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Destination_to" name="Destination_to"  value="<?php  echo $Destination_to; ?>" 
			readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>   
              </tr>
			  </table>     
            
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Travel date</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="Reservationdate_from" name="Reservationdate_from"  value="<?php  echo $Reservationdate_from; ?>"   
			readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;height:21px; ">  </th>  
                
                
                <th style="width:30%;border:0px; text-align:right;">Return date</th>   
				<th style="width:20%;border:0px;"> <input type="text" id="Reservationdate_to" name="Reservationdate_to"  value="<?php  echo $Reservationdate_to; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px; ">  </th>  
                
                 
              </tr>
			  </table>     
   
           
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Departure time</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="Departuretime" name="Departuretime"  value="<?php  echo $Departuretime; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>  
                
                
                <th style="width:30%;border:0px; text-align:right;">Expected return time</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="Pickuptime_expected" name="Pickuptime_expected"  value="<?php  echo $Pickuptime_expected; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>  
                
                 
              </tr>
			  </table>     
     
                 <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Prefered vehicle</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="Preferedvehicle" name="Preferedvehicle"  value="<?php  echo $Preferedvehicle; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
                
                <th style="width:20%;border:0px; text-align:right;">Passengers</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="Passengers" name="Passengers"  value="<?php  echo $Passengers; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; text-align:center; font-weight:bold; ">  </th>  
                 
              </tr>
			  </table> 
               <center><a href="ftl_module.php"></i>Close</a></center>  
               </form>