 
<?php
  $id = $_GET['q'];  
  
  $DESCRIPTION = '';  
  $dnx = array();
  $fqx = array(); 
  $variance = array();  
  $remdrt = array();
  $lcn = array();
  $exp = array();
  $pdx = array();  
  $qtyx = array(); 
    
  	
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT ORDERSERIALID, GOODSRECIEVEDDATE, DESCRIPTION, UNITOFMEASURE, QTYRECIEVED, UNITCOST, QTYISSUED,BATCHNO,EXPIRYDATE,
			     BALANCEINSTOCK, (QTYRECIEVED-QTYISSUED) AS bal FROM recievables  WHERE `DESCRIPTION` = '$id'";
 
  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){ 
     $DESCRIPTION = $row['DESCRIPTION'];  
	 
	 $dnx[] = $row['GOODSRECIEVEDDATE'];
     $fqx[]    = $row['ORDERSERIALID']; 
	 $variance[]    = $row['UNITOFMEASURE'];  
	 $remdrt[]        = $row['QTYRECIEVED']; 
	 $lcn[]        = $row['UNITCOST'];
	 $exp[]        = $row['EXPIRYDATE'];
     $pdx[]       = $row['QTYISSUED'];
	 $qtyx[]        = $row['BATCHNO'];  
	 $bx[]        = $row['bal'];  
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
 
        
        
        </head> 
      
  <!-- Main content --> 
      <!-- title row -->
      <div class="row"> 
         <div class="panel-body">
         
    <p style="color:#000; font-size:11px; background-color:#fff; text-transform:uppercase;">
         Summary of <b style="color:orange;"><?php echo $DESCRIPTION; ?> </b> received against issued  </p>  
  
             
              <br>
    <table border="1" cellpadding="4"  id="mytable1" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
    <th>RECIEVED DATE</th>
                     <th>ORDER S/NO.</th> 
                     <th>UOM</th> 
                     <th style="text-align:center;">QTY RECEIEVED</th> 
                     <th style="text-align:center;">UNIT COST</th> 
					 <th style="text-align:center;">EXPIRY DATE</th> 
					 <th style="text-align:center;">BATCH NO.</th> 
                     <th style="text-align:center;">QTY ISSUED</th> 
                     <th style="text-align:center;">BAL IN STOCK</th>   
     
      </tr>
      </thead>
      <tbody>

     
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr > 
                                                  
                                                  <td>  <?php  echo $dnx[$s]; ?> </td>
                                                   
                                                  <td>  <?php  echo $fqx[$s]; ?> </td> 
                                              
                                                  <td>  <?php echo $variance[$s]; ?> </td> 
                                                   
                                                  <td style="text-align:center;">  <?php echo $remdrt[$s]; ?> </td> 
                                                  
                                                  <td style="text-align:right;">  <?php echo $lcn[$s]; ?> </td> 
												  
												  <td style="text-align:center;">  <?php echo $exp[$s]; ?> </td> 
												  
                                                   <td style="text-align:center;"> <?php echo $qtyx[$s]; ?> </td>  
												   
                                                  <td style="text-align:center;">  <?php echo $pdx[$s]; ?> </td>  
                                                    
                                                  <td style="text-align:center;"> <?php echo $bx[$s]; ?> </td>  
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
       
     
       
              
        </form>
       
   
 