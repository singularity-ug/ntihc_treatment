
  <div class="col-sm-12" style="background-color:transparent;"> 
  
     
 
    <?php
  $id=array();
  $id[] = $_POST['id'] ;
  $id[] = $_POST['dates'];
  $EID = ''; 
  $CREATEDDATE = '';
  $VISTBY = '';   
  $dnx   = array();
  $fqx    = array();   
  $NTIHCNO = '';    
  $COUNSELLINGDONE = '';
  $URGENCYTYPE = '';
  $VISTBY = '';
  $PROBLEMBRIEF = '';
  $ACTIONTAKEN = '';
  $SERVICE_EPISODE = '';
  $USERINITIAL = '';
  $REGISTERACCOUNT = '';
  $AGE1 = '';
  $AGE_GROUP = '';
  $SEX = '';
  $SCHOOLING = '';
  
 $servername = "localhost";
 $username = "root";
  $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM clientsexamination WHERE NTIHCNO = '$id[0]' AND DATECREATED='$id[1]'"; 
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
   
     $EID          = $row['EID'];    
   $VISTBY      = $row['VISTBY'];  
     $dnx[]    = $row['MEDICALTOPIC']; 
   $fqx[]    = $row['MEDICALPROBLEM'];    
   $RSVNID    = $row['RSVNID'];    
   $DATECREATED      = $row['DATECREATED']; 
     $NTIHCNO  = $row['NTIHCNO'];
   $COUNSELLINGDONE = $row['COUNSELLINGDONE'];
     $URGENCYTYPE    = $row['URGENCYTYPE'];
   $VISTBY  = $row['VISTBY'];
   $PROBLEMBRIEF          = $row['PROBLEMBRIEF'];
   $ACTIONTAKEN          = $row['ACTIONTAKEN'];
   $SERVICE_EPISODE          = $row['SERVICE_EPISODE'];
   $USERINITIAL  = $row['USERINITIAL'];
   $REGISTERACCOUNT          = $row['REGISTERACCOUNT'];
   $AGE1          = $row['AGE1'];
   $AGE_GROUP          = $row['AGE_GROUP'];
   $SEX          = $row['SEX'];
   $SCHOOLING          = $row['SCHOOLING'];  
      } 
     ?>
      

      <form class="form-horizontal" action="" method="post" style="height:auto;"/>
        
               <div class="col-sm-12" style="background-color:transparent;">   
  
 <div class="col-sm-4" style="background-color:transparent;"><hr>
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Service date </th>
        <th style="width:60%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" value="<?php echo $DATECREATED;?>" 
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>
 
              </tr></thead>
        </table>
        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr>  

              <th style="width:40%;border:0px;">Vist by </th>
        <th style="width:60%;border:0px;"> <select  name="VISTBY" id="VISTBY"  value="<?php echo $VISTBY;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                  <option value="<?php echo $VISTBY;?>"><?php echo $VISTBY;?></option>
                                           <option>YOUTH</option>
                                                   <option>PARENT</option>
                                                   <option>YOUTH AND PARENT</option>
                                                   <option>COUPLE</option>
                                                   </select>
        </th>
              </tr></thead>
        </table> 
        
        </div>
        
      
 <div class="col-sm-8" style="background-color:transparent;"><hr>  
    <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
      <legend style="color:#000; font-weight:bold; font-size:12px;">Examination</legend>  
      
     <table class="table table-tabled" id="mytable11" style="font-weight:normal;margin-top: -13px; ">
    <thead>
      <tr>
      <th>*</th> 
   <th>PROBLEM CATEGORY</th> 
   <th>DESCRIPTION</th>
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                          
                          <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>"  
                                                   style= "width:100%; background-color:transparent;"/></td>  
                                                   
                           
                                                  <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>"  
                                                   style= "width:100%; background-color:transparent;"/></td>
                                                   
                                                  
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                
            </div></div>
                   
       <div class="col-sm-4" style="background-color:transparent;">
       
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>
     <td style="width:100%;border:0px;">Problem brief</td>  
   
        </tr>
       </tbody>
      </table>  
          
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
            <td style="width:100%;border:0px;">  <textarea name="PROBLEMBRIEF" readonly="readonly" style="width:100%; background-color:transparent;" ><?php echo $PROBLEMBRIEF;?>  
        </textarea> </th> 
   
        </tr>
       </tbody>
      </table>  
    <p></p>       
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    
            <td style="width:40%;border:0px;">Urgency</td>
            <td style="width:60%;border:0px;"> <input type="text"  name="URGENCYTYPE" id="URGENCYTYPE" value="<?php  echo $URGENCYTYPE; ?>"  readonly="readonly"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
 
            </td>
      </tr> 
       </thead>
      </table>
      
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>
     <td style="width:40%;border:0px;"> Counselling done</td>
             <td style="width:60%;border:0px;">   <input type="text"  name="COUNSELLINGDONE" id="COUNSELLINGDONE" value="<?php  echo $COUNSELLINGDONE; ?>"  readonly="readonly"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>  
        </tr>
       </thead>
      </table>  
    
    
        
   </div> 
    
 <div class="col-sm-4"> 
   <?php
  $id=array();
  $id[] = $_POST['id'] ;
  $id[] = $_POST['dates'];  
  $CID = ''; 
  $CREATEDDATE = ''; 
  $NTIHCNO = '';      
  $HCGPOSITIVE = ''; 
  $HCGRESULTS = '';
  $HCGSTATUS = '';
  
 $servername = "localhost";
 $username = "root";
  $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM hcg WHERE  NTIHCNO = '$id[0]' AND DATECREATED='$id[1]'";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
   
     $CID          = $row['CID'];      
   $DATECREATED      = $row['DATECREATED']; 
     $NTIHCNO  = $row['NTIHCNO'];
   $HCGRESULTS = $row['HCGRESULTS'];
   $HCGSTATUS      = $row['HCGSTATUS'];  
   $HCGPOSITIVE          = $row['HCGPOSITIVE'];     
      } 
     ?>
      
 <p></p>  
 
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:100%;border:0px; font-weight:bold; color:blue;">Is HCG required ?</td> 
              </tr></thead>
        </table>
        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:100%;border:0px;">  <input type="text" name="HCGSTATUS" id="HCGSTATUS" 
        value="<?php  echo $HCGSTATUS; ?>"  readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> </td>
              </tr></thead>
        </table>
         
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:100%;border:0px; font-weight:bold; ">Results (if required)</td> 
              </tr></thead>
        </table>
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:100%;border:0px;">  <input type="text" name="HCGRESULTS" id="HCGRESULTS"
         value="<?php  echo $HCGRESULTS; ?>" readonly="" style="width:100%; font-weight:normal; background-color:transparent;"> </td>
              </tr></thead>
        </table>
        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:100%;border:0px; font-weight:bold;">Justification of results </td> 
              </tr></thead>
        </table>
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:100%;border:0px;">  <input type="text" name="HCGPOSITIVE" id="HCGPOSITIVE" 
         value="<?php  echo $HCGPOSITIVE; ?>" readonly="" style="width:100%; font-weight:normal; background-color:transparent;"> </td>
              </tr></thead>
        </table> 
        
     </div> 
    
 <div class="col-sm-4"> <p></p>    
  <?php
  $id=array();
  $id[] = $_POST['id'] ;
  $id[] = $_POST['dates'];  
  $RID = ''; 
  $CREATEDDATE = ''; 
  $NTIHCNO = '';       
  $HCGRESULTS = '';
  $FOLLOWUP = '';
  
 $servername = "localhost";
 $username = "root";
  $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsregistration WHERE NTIHCNO = '$id[0]' AND DATECREATED='$id[1]'";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
   
     $RID          = $row['RID'];      
   $DATECREATED      = $row['DATECREATED']; 
     $NTIHCNO  = $row['NTIHCNO'];
   $FOLLOWUP = $row['FOLLOWUP'];
   $FOLLOWUPDATE      = $row['FOLLOWUPDATE'];     
      } 
     ?>
         
            <hr>
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
          <td style="width:100%;border:0px; font-weight:bold;background-color:transparent;">Follow-up requirement</td> 
              </tr>
        </table>
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:100%;border:0px;">
        <input type="text"  name="FOLLOWUP" id="FOLLOWUP" required="required" 
         value="<?php  echo $FOLLOWUP; ?>" readonly="" 
        style="width:100%; font-weight:normal; background-color:transparent;">   </td>
              </tr>
        </table>

         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:100%;border:0px; font-weight:bold;background-color:transparent;">Follow up date if required</td> 
              </tr>
        </table>  
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:100%;border:0px;"> <input type="text" name="FOLLOWUPDATE" id="FOLLOWUPDATE" 
         value="<?php  echo $FOLLOWUPDATE; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
        </table>  
        
         
                
 </div> </div>
   <?php
  $id=array();
  $id[] = $_POST['id'] ;
  $id[] = $_POST['dates'];
  $RSVNID = ''; 
  $dnx    = array();
  $fqx    = array(); 
   $aa    = array(); 
  $DATECREATED = '';
  $NTIHCNO = '';   
  $TROOM_INITIATION = '';
  $TESTSTATUS = '';  
  
  $TESTEDBY = '';
  $LABTIMEOUT = '';   
  $LABTIMEIN = '';
  $USERINITIAL = '';   
  
 $servername = "localhost";
 $username = "root";
  $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laborders WHERE  NTIHCNO = '$id[0]' AND DATECREATED='$id[1]'";
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
   
     $RSVNID          = $row['RSVNID'];  
   $DATECREATED      = $row['DATECREATED'];  
   $dnx[]    = $row['TESTDESCRIPTION'];
     $fqx[]       = $row['LABRESULTS']; 
   $aa[]    = $row['DATECREATED'];  
     $NTIHCNO  = $row['NTIHCNO']; 
   $TROOM_INITIATION  = $row['TROOM_INITIATION']; 
   $TESTSTATUS  = $row['TESTSTATUS']; 
   
    $TESTEDBY  = $row['TESTEDBY']; 
    $LABTIMEOUT  = $row['LABTIMEOUT']; 
   $LABTIMEIN  = $row['LABTIMEIN']; 
   $USERINITIAL  = $row['USERINITIAL']; 
      
      } 
     ?>
   <div class="col-sm-12" style="background-color:transparent;"> 
  <div class="col-sm-4" style="background-color:transparent;">
  <p></p>
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:100%;border:0px;"><b>Lab order details</b></td> 
              </tr>
        </table>  
        <p></p>
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%;border:0px;">Test status</td>
        
        <td style="width:60%;border:0px;"> <input type="text" name="TESTSTATUS" id="TESTSTATUS" 
         value="<?php  echo $TESTSTATUS; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
        </table>  
        
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%;border:0px;">Time in</td>
        
        <td style="width:60%;border:0px;"> <input type="text" name="LABTIMEIN" id="LABTIMEIN" 
         value="<?php  echo $LABTIMEIN; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
        </table>  
         
        
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%;border:0px;">Time out</td>
        
        <td style="width:60%;border:0px;"> <input type="text" name="LABTIMEOUT" id="LABTIMEOUT" 
         value="<?php  echo $LABTIMEOUT; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
        </table>  
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%;border:0px;">Initiaded by</td>
        
        <td style="width:60%;border:0px;"> <input type="text" name="USERINITIAL" id="USERINITIAL" 
         value="<?php  echo $USERINITIAL; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
        </table> 
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%;border:0px;">Tested by</td>
        
        <td style="width:60%;border:0px;"> <input type="text" name="TESTEDBY" id="TESTEDBY" 
         value="<?php  echo $TESTEDBY; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
        </table>   
  
  </div>
 
  <div class="col-sm-8" style="background-color:transparent;">
  <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
      <legend style="color:#000; font-weight:bold; font-size:12px;">Lab results</legend> 
      
  
            
    <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
      <thead>
      <tr>  
       <th>*</th> 
       <th>TEST DESCRIPTION </th>  
       <th>LAB RESULTS</th> 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                            
             <td> <input name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" required="" 
                         style= "width:100%; background-color:transparent; "/>
                                                 </td> 
                         
             <td> <input  name="fqx[]" type="text" value="<?php echo $fqx[$s]; ?>"  required="" 
                          style= "width:100%; background-color:transparent; "/> 
                          </td> 
                          
         
                                                   
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
  </tbody>
  </table>  
    
  </div></div>
  
   <div class="col-sm-12" style="background-color:transparent;"><p></p>
  <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
      <legend style="color:#000; font-weight:bold; font-size:12px;">Prescription details</legend> 
      
     
     
    <?php
  $id=array();
  $id[] = $_POST['id'] ;
  $id[] = $_POST['dates'];
  $DID = '';
  $CREATEDDATE = '';
  $imp   = array();
  $cur    = array();
  $bix   = array();
  $max    = array();
  $mixy   = array();
  $NTIHCNO = '';
  $DISPENSEDBY = '';
  $REQUESTINGUNIT = '';
  $PRESCRIPTIONCOMMENT = '';
  $USERINITIAL = '';
$date = date("Y-m-d").' 00:00:00';
 $sql  = "SELECT * FROM prescription WHERE  NTIHCNO = '$id[0]' AND DATECREATED='$id[1]'";
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){

     $DID          = $row['DID'];
   $DATECREATED      = $row['DATECREATED'];
     $imp[]    = $row['DRUGNAME'];
   $cur[]    = $row['FREQUENCY'];
     $bix[]       = $row['TIMES'];
   $max[]    = $row['PERIOD'];
     $mixy[]       = $row['QTYPRESCRIBED'];

     $NTIHCNO  = $row['NTIHCNO'];
   $DISPENSEDBY = $row['DISPENSEDBY'];
     $REQUESTINGUNIT    = $row['REQUESTINGUNIT'];
   $PRESCRIPTIONCOMMENT    = $row['PRESCRIPTIONCOMMENT'];
   $USERINITIAL    = $row['USERINITIAL'];
      }
     ?>

 <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
      <thead>
      <tr> 
      <th>*</th>
   <th style= "width:60%;" >DRUG</th> 
   <th style= "width:10%;" >QTY</th> 
   <th style= "width:10%;" >TIMES</th> 
   <th style= "width:10%;" >PERIOD</th> 
   <th style= "width:10%;" >TOTAL</th> 
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($imp); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($mixy[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="imp[]" readonly="" type="text" value="<?php  echo $imp[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  <td> <input  name="cur[]" readonly="" type="text" value="<?php  echo $cur[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
                           
                                                   <td> <input  name="bix[]" readonly="" type="text" value="<?php  echo $bix[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                                   
                                                  <td> <input  name="max[]" readonly="" type="text" value="<?php  echo $max[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                           
                           <td> <input  name="mixy[]" readonly="" type="text" value="<?php  echo $mixy[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                 
      
      
      
      </div>
  
   <p></p>
          
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
          <th style="width:100%;border:0px; background-color:transparent;">Prescription comment </th> 
              </tr>
        </table>
        
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <th style="width:100%;border:0px;"> <textarea name="PRESCRIPTIONCOMMENT" id ="PRESCRIPTIONCOMMENT"
        required="required"  style="width:100%; font-weight:normal; background-color:transparent;"> <?php  echo $PRESCRIPTIONCOMMENT; ?></textarea> </th>
              </tr>
        </table>
        
       </div> 
         
       <div class="col-sm-6" style="background-color:transparent;">  <p></p>
       
        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead>  
    <tr>  
        <td style="width:40%;border:0px;background-color:transparent;">Prescribed by </td>
        <td style="width:60%;border:0px;">  <input type="text"  name="USERINITIAL" id="USERINITIAL" value="<?php  echo $USERINITIAL; ?>"  readonly="readonly"
        style="width:100%; font-weight:normal; background-color:transparent;"> 
       </td>
       </tr>
       </table>  
    
     </div> 
         
     <div class="col-sm-6" style="background-color:transparent;"> <p></p>
          
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  
  border: 0px;text-align:left;" width="100%">
    <thead>  
    <tr>  
        <td style="width:40%;border:0px;background-color:transparent;">Prescription date </td>
        <td style="width:60%;border:0px;">  <input type="text"  name="DATECREATED" id="DATECREATED" 
    value="<?php  echo $DATECREATED; ?>"  readonly="readonly"
        style="width:100%; font-weight:normal; background-color:transparent;"> 
       </td>

       </tr>
       </table>  
     
     </div> 
      
   <?php
  $id=array();
  $id[] = $_POST['id'] ;
  $id[] = $_POST['dates'];  
  $NTIHCNO = ''; 
  $REFTUNER  = '';
  $MEDICALREFERRAL = '';
  $SERVICEREFERREDFOR = '';    
  $RID='';  
      
 $servername = "localhost";
 $username = "root";
  $password = "toor2";
 $dbname = "patientmgt";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM referral Where NTIHCNO = '$id[0]' AND DATECREATED='$id[1]'";

   $res = $conn->query($sql);

   while($row=$res->fetch_assoc()){
   $NTIHCNO = $row['NTIHCNO'];
   $REFTUNER = $row['REFTUNER'];  
   $MEDICALREFERRAL=$row['MEDICALREFERRAL'];   
   $SERVICEREFERREDFOR=$row['SERVICEREFERREDFOR'];   
   $id=$row['RID']; 
   $RID=$row['RID'];
   } 
   ?>
         
  <div class="col-sm-6" style="background-color:transparent;"> <p></p>  
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  <td style="width:40%;border:0px; font-weight:bold;">Is medical referal required? </td> </td>
               <td style="width:60%;border:0px;">  <input type="text" name="REFTUNER" id="REFTUNER" readonly=""  
        value="<?php  echo $REFTUNER; ?>" style="width:100%; font-weight:normal; background-color:transparent;"> </td>
              </tr>
        </table>  
     </div>
         
  <div class="col-sm-6" style="background-color:transparent;"> <p></p> 
          

         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:40%;border:0px; font-weight:bold;">Referral centre </td>  
       <td style="width:60%;border:0px;"> 
          <input type="text"  name="MEDICALREFERRAL" id="MEDICALREFERRAL" readonly=""  
     value="<?php  echo $MEDICALREFERRAL; ?>" style="width:100%; font-weight:normal; background-color:transparent;">
        </td>
              </tr>
        </table>
        
         </div>
         
  <div class="col-sm-6" style="background-color:transparent;"> <p></p> 
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:40%;border:0px; font-weight:bold;background-color:transparent;">Service referred </td> 
              
        <td style="width:60%;border:0px;"> 
              <input type="text" name="SERVICEREFERREDFOR" id="SERVICEREFERREDFOR" readonly=""  
       value="<?php  echo $SERVICEREFERREDFOR; ?>"  style="width:100%; font-weight:normal; background-color:transparent;">
        </td>
              </tr>
        </table>
   </div>
         
  <div class="col-sm-6" style="background-color:transparent;"> <p></p> 
     
   </div>
       
 
        <p></p>
          
     
        </div> </div>  
              <!-- /.tab-pane -->
              <div class="tab-pane" id="art">
        <div class="panel-body">
         <div class="table-responsive mailbox-messages">
         
   <table class="table table-tabled" style="background-color:transparent; margin-top:0px; ">
   <thead>
   <tr> 
   <th style="border:1px solid #000;"><b>Date</b>  </th>
   <th style="border:1px solid #000;">Next appointment </th> 
   <th style="border:1px solid #000;">Duration in months since first starting ART </th>
   <th style="border:1px solid #000;">Wt</th>
   <th style="border:1px solid #000;">If pregnant EDD/<B>em</B> TCT? write gestation in weeks and ANC # </th> 
   <th style="border:1px solid #000;">TB status </th>
   <th style="border:1px solid #000;">Potential SIDE EFFECTS</th>
   <th style="border:1px solid #000;">New Ols, other problems  </th> 
   <th style="border:1px solid #000;">Functional status  </th>
   <th style="border:1px solid #000;">WHO clinical stage</th>
   <th style="border:1px solid #000;">CPT/Dapsone </th> 
   
   <th colspan="2" style="border:1px solid #000;">ARV drugs </th>
   
   <th  colspan="2" style="border:1px solid #000;">Investigations</th>
   
   <th style="border:1px solid #000;">Refer or consult or link/provide (including nutritional support and infant feeding)  </th>
  <th style="border:1px solid #000;">Pill counting</th>
  <th style="border:1px solid #000;">Service provider</th>
   </tr>
   
   <tr> 
   <th style="border:1px solid #000;">Tick small box if scheduled</th>
   <th style="border:1px solid #000;"> <b>Date</b></th> 
   <th style="border:1px solid #000;"> / since starting current regimen</th>
   <th style="border:1px solid #000;"><br> Ht.<b> </th>
   <th style="border:1px solid #000;">FP/no FP if FP write method(s)</th> 
   <th style="border:1px solid #000;"> If TB, Start/Stop (mm/yyyy) </th>
   <th style="border:1px solid #000;"> </th>
   <th style="border:1px solid #000;">   </th> 
   <th style="border:1px solid #000;"> Work/playing Amb Bed</th>
   <th style="border:1px solid #000;">WHO clinical stage</th>
   
   <th style="border:1px solid #000;"> Adhere </th> 
    
   <th colspan="2" style="border:1px solid #000;">  </th> 
   <th  style="border:1px solid #000;">If CD4 <15% write (-) If CD4 >15 write(+)</th>
   <th style="border:1px solid #000;">Hgb, RPR,CXR,TB sputums, infant Ab/PCR, other </th> 
   <th style="border:1px solid #000;">If Hospitalized # of days</th> 
   <th  style="border:1px solid #000;">  </th>
   <th  style="border:1px solid #000;">  </th>
   </tr> 
   
   <tr> 
   <th style="border:1px solid #000;"> </th>
   <th style="border:1px solid #000;"> </th> 
   <th style="border:1px solid #000;">  </th>
   <th style="border:1px solid #000;"> Muac/oEDEMA +/-</th>
   <th style="border:1px solid #000;">  Age in months if <=2 yrs</th> 
   <th style="border:1px solid #000;"> </th>
   <th style="border:1px solid #000;"> </th>
   <th style="border:1px solid #000;"> </th> 
   <th style="border:1px solid #000;">  </th>
 
   <th style="border:1px solid #000;"> </th> 
   <th style="border:1px solid #000;"> </th>
   
   <th  style="border:1px solid #000;"> Adhere  </th>
   <th  style="border:1px solid #000;">/why </th> 
    <th style="border:1px solid #000;"> </th>
   <th  style="border:1px solid #000;"> </th>
   <th style="border:1px solid #000;">  </th> 
   <th style="border:1px solid #000;"> </th>
   <th  style="border:1px solid #000;">  </th>
   </tr>
   </thead>
   <tbody>
   
    <?php
                    $total=0;
                    $total2=0;
                    $s=mysqli_query($conn,"select * from artmgr  WHERE NTIHCNO = '$id[0]' AND DATECREATED='$id[1]'");
                    while($srow=mysqli_fetch_array($s)){
                      ?>
                      <tr>
                      <td class="hidden"><?php echo $srow['NTIHCNO']; ?></td>
                                           
                      <td style="border:1px solid #000;"><?php echo $srow['DATECREATED']; ?>  <LABEL>Art&nbsp;no.</LABEL> 
                       <?php echo $srow['ARTNUMBER']; ?> 
                      </td>

                      <td> <?php echo $srow['art3']; ?> </td> 
                      
                      <td><input type="text" name="" value="<?php echo $srow['art4']; ?>" style="width:100%; text-align:center;background-color:transparent;">  
                      <input type="text" name="" value="<?php echo $srow['art5']; ?>" style="width:100%; text-align:center;background-color:transparent;"> 
                      </td>
                      
                      <td><input type="text" name="" value="<?php echo $srow['art6']; ?>" style="width:100%; text-align:center;background-color:transparent;">  
                      <input type="text" name="" value="<?php echo $srow['art7']; ?>" style="width:100%; text-align:center;background-color:transparent;"> 
                      <input type="text" name="" value="<?php echo $srow['art8']; ?>" style="width:100%; text-align:center;background-color:transparent;">  
                      </td>
                       
                      <td><input type="text" name="" value="<?php echo $srow['art9']; ?>" style="width:100%; text-align:center;background-color:transparent;">  
                      <input type="text" name="" value="<?php echo $srow['art10']; ?>" style="width:100%; text-align:center;background-color:transparent;"> 
                      <input type="text" name="" value="<?php echo $srow['art11']; ?>" style="width:100%; text-align:center;background-color:transparent;">   
                      </td>
                       
                      <td><input type="text" name="" value="<?php echo $srow['art12']; ?>" style="width:100%; text-align:center;background-color:transparent;">  
                      <input type="text" name="" value="<?php echo $srow['art13']; ?>" style="width:100%; text-align:center;background-color:transparent;">  
                      <input type="text" name="" value="<?php echo $srow['art14']; ?>" style="width:100%; text-align:center;background-color:transparent;"> 
                      </td>
                      
                      <td>  <textarea name="art15" id="art15" 
    style="width:100%; text-align:left;background-color:#fff;height:52px;background-color:transparent;"><?php echo $srow['art15']; ?></textarea></td> 
    
    <td>  <textarea name="art16" id="art16"  
    style="width:100%; text-align:left;background-color:#fff; height:52px;background-color:transparent;"><?php echo $srow['art16']; ?></textarea>  </td>  
    
    <td><input type="text" name="" value="<?php echo $srow['art17']; ?> " style="width:100%; text-align:center;background-color:transparent;"> </td> 
     
    <td><input type="text" name="" value="<?php echo $srow['art18']; ?> " style="width:100%; text-align:center;background-color:transparent;"> </td>   
            
    <td><input type="text" name="" value="<?php echo $srow['art19']; ?> " style="width:100%; text-align:center;background-color:transparent;"> </td>  
    
    <td><input type="text" name="" value="<?php echo $srow['art20']; ?> " style="width:100%; text-align:center;background-color:transparent;"> </td> 
     
    <td><input type="text" name="" value="<?php echo $srow['art21']; ?> " style="width:100%; text-align:center;background-color:transparent;"> </td>   
           
    <td><input type="text" name="" value="<?php echo $srow['art22']; ?>" style="width:100%; text-align:center;background-color:transparent;">  </td>   
            
    <td><input type="text" name="" value="<?php echo $srow['art23']; ?> " style="width:100%; text-align:center;background-color:transparent;"> </td>  
    
    <td><input type="text" name="" value="<?php echo $srow['art24']; ?> " style="width:100%; text-align:center;background-color:transparent;"> </td> 
     
    <td ><input type="text" name="" value="<?php echo $srow['art25']; ?> " style="width:100%; text-align:center;background-color:transparent;"> </td>   
    
  <td style="border:1px solid #000;"> <?php echo $srow['USERINITIAL']; ?>   </td>        
    <td class="hidden" >
                          <?php 
                            $sub=$srow['RECORDCOUNTER'];
                            echo number_format($sub,2);
                            $total+=$sub;
                          ?>
                        </td> 
                      </tr>
                      <?php
                    }
                  ?>
                  <tr>
                    <td colspan="17" align="left" style="border:1px solid #000;"><strong>TOTAL VISTS</strong></td>
                    <td style="border:1px solid #000;"> <center><strong><?php echo number_format($total,2); ?></strong> </center></td> 
                  </tr>
                </tbody>
              </table>
     
        
        
        
        </div></div>
        </div> 


   