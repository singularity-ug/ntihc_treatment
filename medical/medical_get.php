 


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
  $RELIGION=''; 
  $TRIBE='';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";

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
   $RELIGION=$row['RELIGION']; 
    $TRIBE=$row['TRIBE'];  
      } 
   
     ?>
   
  
    <form id="form1" class="form-horizontal" action="medical/pnc_updatedem.php" method="POST" style="height:auto; font-weight:normal; font-size:10px;"> 
            
       <div class="col-sm-4" style=" background-color:transparent; ">  
  
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; 
    font-size: 12px; text-align:left;border: 0px;" width="100%">
        <thead> <tr> 
          <th style="width:40%;border:0px;">Enroll date </th> 
        <th style="width:60%;border:0px;"> <input type="text"  name="DATECREATED"  value="<?php echo $DATECREATED;?>" 
          readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
        </th>  
                </tr>
          </table>
        
       
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">NTIHC&NO. </th>
       
        <th style="width:60%;border:0px;"> <input type="text"  name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" 
        required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">First name</th>
       
        <th style="width:60%;border:0px;"> <input type="text"   name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" 
          readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Last name</th>
       
        <th style="width:60%;border:0px;"> <input type="text"    name="LASTNAME"  value="<?php echo $LASTNAME;?>" 
           readonly="readonly"style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Other name</th>
       
        <th style="width:60%;border:0px;"> <input type="text"  name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" 
           readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Age</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="AGE1" id="AGE1"  value="<?php echo $AGE1;?>" 
          readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
        
 
 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Gender</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="SEX" value="<?php echo $SEX;?>" 
            readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
        </div>
        
        <div class="col-sm-4" style=" background-color:transparent; ">  
      
       
        
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Schooling</th>
       
        <th style="width:60%;border:0px;"> <input type="text"  name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
          readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
      
 
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Education</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
             readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
      
              
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Tribe</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="TRIBE" value="<?php echo $TRIBE;?>" 
                readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>  
                
                
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Religion</th>
       
        <th style="width:60%;border:0px;"> <input type="text"  name="RELIGION" value="<?php echo $RELIGION;?>" 
                readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>  
      
     
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Marital status</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
                readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>  
               
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Employment</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
           readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>  
                
         

 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">District</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="DISTRICT" value="<?php echo $DISTRICT;?>" 
           readonly="readonly"style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>  
                 
        
               </div>
        
        <div class="col-sm-4" style=" background-color:transparent; ">  
      
                  

               
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Division</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>  
                  
             
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Residence</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE"   value="<?php echo $PLACEOFRESIDENCE;?>" 
          readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>     

                  
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Phone&nbsp;No.</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="PHONECONTACT"  id="PHONECONTACT"   value="<?php echo $PHONECONTACT;?>" 
          readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>     
   
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Mother&nbsp;name</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME"  value="<?php echo $MOTHERFIRSTNAME;?>"  
          readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
             
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
          <th style="width:40%;border:0px;">Father&nbsp;name</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME"  value="<?php echo $FATHERFIRSTNAME;?>"  
          readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
    <th style="width:40%;border:0px;">Living&nbsp;with</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
         readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table> 
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
    <th style="width:40%;border:0px;">Enrolled&nbsp;by</th>
       
        <th style="width:60%;border:0px;"> <input type="text" name="REGISTEREDBY" value="<?php echo $REGISTEREDBY;?>"
         readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
         </th> 
                
              </tr>
        </table>  
                     
    </form>
  

  <?php 
  $id = $id ;  
  $EID = ''; 
  $prob   = array();
  $top    = array();
  $catg   = array();  
  $DATECREATED = '';
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

 $sql  = "SELECT * FROM clientsexamination WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
   
     $EID          = $row['EID'];  
   $DATECREATED      = $row['DATECREATED'];  
     $prob[]    = $row['MEDICALPROBLEM']; 
   $top[]    = $row['MEDICALTOPIC'];
     //$catg[]       = $row['PROBLEMCATEGORY'];   
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
     
       
     
     
 <?php
  $id = $id ;
  $EID = '';
  $prob   = array();
  $top    = array();
  $catg   = array();
  $DATECREATED = '';
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

 $sql  = "SELECT * FROM clientsexamination WHERE NTIHCNO = '$id[0]' AND DATECREATED='$id[1]'";

 $res = $conn->query($sql);
 //echo $sql;
 //echo $res->num_rows; exit();

     while($row=$res->fetch_assoc()){

     $EID          = $row['EID'];
   $DATECREATED      = $row['DATECREATED'];
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

       <div class="nav-tabs-custom" style="margin-left:-10px">
         <?php
        $rex   = array();  //results array for ids
      $dats  = array();  //results array for ids
         $xx    = 1; //array["1"]  begining index
        $re    = $conn->query("SELECT * FROM clientsexamination WHERE NTIHCNO= '$id[0]' GROUP BY DATECREATED");
        if($re){}
          else{echo 'Error : '.$conn->error; exit();}
         $tox   = $re->num_rows; //total results
         while ($row=$re->fetch_assoc()) {
               $rex["".$xx.""]   = $row['NTIHCNO'];
         $dats ["".$xx.""] = $row['DATECREATED'];
               $xx++;
         }

         ?>

         <script type="text/javascript">
     
         var total   =   parseInt("<?php echo $tox; ?>");
         var results1 = JSON.parse('<?php echo json_encode($rex); ?>');
     var results2 = JSON.parse('<?php echo json_encode($dats); ?>');
         var current = 0;
         //we conver res1 object to array
         var arr = []; var arr1= []; var r =1;
         
         for(var x in results1){  arr.push(results1[x]);   arr1.push(results2[x]); r++;}
      console.log(arr1.length);
          console.log(arr1);   
      console.log(arr);
      
      $(document).ready(function(){ document.getElementById("emma").value="0 out of "+arr.length;
                                    document.getElementById('Back').Enabled = false;});
      
           function paginate(btnselect){
             var btn = btnselect.id;
                       document.getElementById('Back').Enabled    = true;
                       document.getElementById('Forward').Enabled = true;
                   
                  if(btn=='Back'){if(current==1||current==0){document.getElementById('Back').Enabled = false;}
                                     else{ current= current-1;}
                                 }
           else if(btn=='Forward'){if(current==total){document.getElementById('Forward').Enabled = false;}
                                 else{current= current+1;}
                                 }                 
             else{return;}
           document.getElementById("emma").value= current +" out of "+arr.length;
        //alert(arr[""+current]);  alert(arr1[""+current]);
             // make a post request to the server to obtain the data
             $.post( "bringdata.php", { id: arr[current-1], dates: arr1[current-1],'choices[]': [ "item1", "item2" ] })
           .done(function( data ) {
              $("#contentdiv").html(data);
           });

         }
         </script>

           <!--div class="col-sm-12"> 
       
       <input type="button" onClick="paginate(this)" id="Back" value="<<">
       <input type="text"  id="emma"    readonly>
       <input type="button" onClick="paginate(this)" id="Forward" value=">>">
       
       
       </div>
    <div id="contentdiv" class="col-sm-12"  >
    
     </div>
   </div>
 
 
        </form>

   
     </div>
              
        </form>  

    
                 
   <!-- /.START MEDICAL SCRIPT -->

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
     
   var  s2b =  '<input type="numeric" name="top[]" id="top'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:transparent;" >'; 
        
     var  s1a = '<input type="text" name="prob[]" id="prob'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:transparent; width:100%;">';
 

     var  s4c =  '<input type="numeric" name="catg[]" id="catg'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:transparent;" >';
        
        var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
          var row      = table.insertRow(rowCount);
      var row2     = '<td><input type="checkbox" ></td>'+
                                '<td>'+s2b+' </td>'+
                                '<td>'+s1a+' </td>'+ 
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
      table.rows[x].cells[1].childNodes[0].id="top"+x;
          table.rows[x].cells[2].childNodes[0].id="prob"+x;
      table.rows[x].cells[3].childNodes[0].id="catg"+x;  
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
       calcmoney(tableId);
} 
  </script>

  <!-- /.END MEDICAL SCRIPT -->
  
  
  <!-- /.START DRUGS SCRIPT -->
   <script>
   
   
   function calcmoney(tableId){
       var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
      var sum = 0;
       for(var x=1; x<rowCount; x++) { //0
      // alert(table.rows[x].cells[2].childNodes[1].value);
         sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
       }
       document.getElementById("xero").value = ''+sum;
   
   }
   
   
  function addRow166(tableId){
     var  saa = '<input type="text" name="imp[]" id="imp_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
   'background-color:transparent; width:100%;">';
   
     var  sab = '<input type="text" name="cur[]" id="cur_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
   'background-color:transparent; width:100%;">'; 

   
   var  sac = '<input type="text" name="bix[]" id="bix_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
   'background-color:transparent; width:100%;">'; 

   
     var  sad = '<input type="text" name="max[]" id="max_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
   'background-color:transparent; width:100%;">'; 

   var  sae =  '<input type="numeric" name="mixy[]" id="mixy_'+rowCount+'" onkeyup="calcmoney(\'mytable12\')" value="0" required="required" '+
                'style= " margin-right:0px; width:100%; background-color:transparent;" >';
             
        
        var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
          var row      = table.insertRow(rowCount);
      var row2     = '<td><input type="checkbox" ></td>'+
                                '<td>'+saa+' </td>'+
                                '<td>'+sab+' </td>'+
                  '<td>'+sac+' </td>'+
                                '<td>'+sad+' </td>'+
                          '<td>'+sae+' </td>';
                  
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
      table.rows[x].cells[1].childNodes[0].id="imp_"+x;
          table.rows[x].cells[2].childNodes[0].id="cur_"+x;
      table.rows[x].cells[3].childNodes[0].id="bix_"+x;
      table.rows[x].cells[4].childNodes[0].id="max_"+x;
      table.rows[x].cells[5].childNodes[0].id="mixy_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
       calcmoney(tableId);
}

  </script>
         <!-- /.END DRUGS SCRIPT -->  


  <!-- /.START COUNSELLING SCRIPT -->

     <script>
   
   function calrec(tableId){
       var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
      var sum = 0;
       for(var x=1; x<rowCount; x++) { //0
      // alert(table.rows[x].cells[2].childNodes[1].value);
         sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
       }
       document.getElementById("TOTAz").value = ''+sum;
   
   }
    
  function addRow166(tableId){
     var  s1za = '<input type="text" name="reason[]" id="reason'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+ 'background-color:transparent; width:100%;">';
 

   var  s2zb =  '<input type="numeric" name="counsellingtopic[]" id="counsellingtopic'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:transparent;" >';
          

     var  s4zc =  '<input type="numeric" name="counsellingdesc[]" id="counsellingdesc'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:transparent;" >';
        
        var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
          var row      = table.insertRow(rowCount);
      var row2     = '<td><input type="checkbox" ></td>'+
                                '<td>'+s1za+' </td>'+
                                '<td>'+s2zb+' </td>'+ 
                  '<td>'+s4zc+' </td>';
            row.innerHTML = row2;
          //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1001').value=rowCount;
      
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
      table.rows[x].cells[1].childNodes[0].id="reason"+x;
          table.rows[x].cells[2].childNodes[0].id="counsellingtopic"+x;
      table.rows[x].cells[3].childNodes[0].id="counsellingdescs"+x;  
          }
           document.getElementById('mytable_rows1100').value=rowCount-1;
       calcmoney(tableId);
} 
  </script>

  <!-- /.END COUNSELLING SCRIPT -->  
       
