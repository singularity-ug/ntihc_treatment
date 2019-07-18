  <?php
   
  $DOCDATE = '';
  $ATTENTIONTO = '';
  $AMOUNTINWORDS  = '';
  $PARTICULARS = '';
  $PAYMENTTYPE = '';
  $CHEQUENUMBER = '';
  $CURRENCYTYPE = '';
  $TOTALSUM = ''; 
  $id = '4'; 
   
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "dbmultiple";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM receiptinvoices  WHERE `id` = '$id' ";

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

      }

  ?>
 
 
<div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div> 

 <center> <p style="color:#000; font-weight:bold; font-size:15px; border:0px;">RECIEPT </p> </center>
          <hr style="height:2px; background-color:red;margin-top:-10px;">
          <hr style="height:2px; background-color:green; margin-top:-19px;">
          <hr style="height:2px; background-color:yellow; margin-top:-19px;">
 
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
                    <label for="pass1" class="control-label col-sm-4">No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="numeric"  name="id" value="<?php  echo $id; ?>" data-placement="top" 
                        style=" font-size: 11px; text-align:left;"/>
                    </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date.</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="DOCDATE"  value="<?php  echo $DOCDATE; ?> " data-placement="top" 
                        style="font-size: 11px; text-align:left;"/>
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
        <td>  <?php  echo $ATTENTIONTO; ?> </td> 
      </tr>
      <tr>
        <td><b>The sum of shillings</b></td>
        <td> <?php  echo $AMOUNTINWORDS; ?> </td> 
      </tr>
      <tr>
        <td><b>Being payment for</b></td>
        <td> <?php  echo $PARTICULARS; ?>  </td> 
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
        <td > <?php  echo $PAYMENTTYPE; ?>   </td>
        
        <td style="text-align:center;"> <?php  echo $CHEQUENUMBER; ?> </td>  
        <td style="text-align:center;"> <?php  echo $CURRENCYTYPE; ?>   </td>
        
        <td style="text-align:center;"> <?php  echo $TOTALSUM; ?> </td>
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
                        <input type="text" class="form-control" type="text"   data-placement="top" style="height:20px;"/>  
                    </div>
                </div>
                <!-- /.form-group --> 
                <br><br>
        <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12">For. <b>Naguru Teenage Informations Health Center</b></label> 
                    </div> 
                <!-- /.form-group --> 
        </td> 
      
      </tr>
    </tbody>
  </table>     
     

</body>
</html>
