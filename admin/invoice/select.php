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
  $DOCDATE = '';
  $ATTENTIONTO = '';
  $AMOUNTINWORDS  = '';
  $PARTICULARS = '';
  $PAYMENTTYPE = '';
  $CHEQUENUMBER = '';
  $CURRENCYTYPE = '';
  $TOTALSUM = '';
  $ORDERNO = '';
  $id = '';

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "dbmultiple";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM receiptinvoices  WHERE ORDERNO = '$id' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
 
	 $DOCDATE = $row['DOCDATE'];
     $ATTENTIONTO = $row['ATTENTIONTO'];
     $AMOUNTINWORDS  = $row['AMOUNTINWORDS'];
     $PARTICULARS = $row['PARTICULARS'];
     $PAYMENTTYPE = $row['PAYMENTTYPE'];
     $CHEQUENUMBER = $row['CHEQUENUMBER'];
	 $CURRENCYTYPE = $row['CURRENCYTYPE'];
     $TOTALSUM = $row['TOTALSUM'];
     $ORDERNO = $row['ORDERNO'];
     $id = $row['id'];
      }
     ?>

	  <form id="form1" class="form-horizontal" action="invoice_update.php" method="POST" style="height:auto; font-weight:normal;"> 
           
<img src="../../assets/img/logsbig.PNG" width="100%" height="100%">

   <center> <p style="color:#000; font-weight:bold; font-size:15px; border:0px;">RECIEPT </p> </center>
          <hr style="height:2px; background-color:red;margin-top:-10px;">
          <hr style="height:2px; background-color:green; margin-top:-19px;">
          <hr style="height:2px; background-color:yellow; margin-top:-19px;">
          
		   <input type="hidden"  id="myORDERNO" name="ORDERNO"  value=" ">    
		  
      <table class="table table-bordered" style="margin-top:-10px;">
      <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:60%;"> </th>
        <th style="border-bottom-color:white; width:40%; "> </th>  
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td> </td>
        <td> <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Receipt No.</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="numeric" id="myID" name="id" data-placement="top" 
                        style=" font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group" style="margin-top:-8px;">
                    <label for="pass1" class="control-label col-sm-5">Date.</label>
                    <div class="col-sm-7">
                        <input class="form-control"   id="myTIMESTAMP" name="TIMESTAMP"  value=" " data-placement="top" 
                        style="font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->
				
        
        </td> 
      
      </tr>
    </tbody>
  </table>     
                      
                
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.333333333%;"></th>
        <th style="border-bottom-color:white; width:66.666666666%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>Recieved with thanks from</B></td>
        <td>  <input type="text" name="ATTENTIONTO" id="myATTENTIONTO" value="" style="background-color:#fff; width:100%;"></td> 
      </tr>
      <tr>
        <td><b>The sum of shillings</b></td>
        <td><input type="text"  name="AMOUNTINWORDS" id="myAMOUNTINWORDS" value="" style="background-color:#fff; width:100%;">  </td> 
      </tr>
      <tr>
        <td><b>Being payment for</b></td>
        <td><textarea name="PARTICULARS"  id="myPARTICULARS"  value="" style="background-color:#fff; width:100%; height:auto;"></textarea>  </td> 
      </tr> 
    </tbody>
  </table> 
      
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; ">Payment type</th>
        <th style="border-bottom-color:white; text-align:center;">Cheque No.</th>
        <th style="border-bottom-color:white; text-align:center;">Currency type</th>
        <th style="border-bottom-color:white; text-align:center;">Sum</th>  
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td><input type="text"  name="PAYMENTTYPE" id="myPAYMENTTYPE" value="" readonly style=" text-align:center; background-color:#fff;width:100%;"></td>
        <td><input type="text"  name="CHEQUENUMBER" id="myCHEQUENUMBER" value="" readonly  style="text-align:center; background-color:#fff; width:100%;"></td>  
        <td><input type="text"  name="CURRENCYTYPE" id="myCURRENCYTYPE"   value="" readonly style="text-align:center; background-color:#fff; width:100%;"></td>
         <td><input type="numeric"  name="TOTALSUM" id="myTOTALSUM"  value="" readonly style="text-align:center; background-color:#fff; width:100%;"></td>
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
        <td> </td>
        <td> <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Sign</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" type="text" id="mySIGNATURE"  data-placement="top" style="height:20px;"/></textarea> 
                    </div>
                </div>
                <!-- /.form-group --> 
        <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12">For. <b>Naguru Teenage Informations Health Center</b></label> 
                    </div> 
                <!-- /.form-group --> 
        </td>  
      </tr>
    </tbody>
  </table>     
    
     <input type="hidden" name="UPDATEDBY" id="UPDATEDBY"  value="<?php echo $nameofuser; ?>   <?php echo $desc; ?>   <?php echo $dept; ?>   <?php echo $pf; ?> &nbsp   <?php echo date('d-m-y'); ?>"  > 
        
     <center>
	 <input type="submit" name="buttonsendct" id="button" value="Update"  style="border-radius:11px;"/> 
                 &nbsp;&nbsp;&nbsp
	 <input type="image" name="submit" id="button" value="Update" src="../imgg/update3.jpg" width="60" height="60" /></center>   
      
     </form> 
 