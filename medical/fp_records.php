  
  <?php
  $id =  $_GET['q'];
  $NTIHCNO = '';
  $DATECREATED = ''; 
  $LNMP = '';
  $BP = '';  
  $WT = '';
  $GSPGSN = '';
  $FPCOMMENTS = '';
  $FAMILYPLANNINGMETHOD='';
  $QUANTITY=''; 
  $RETURNDATE=''; 
  $USERINITIAL=''; 
   
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname); 
 $sql  = "SELECT * FROM family_planning WHERE `id` = '$id'"; 
 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){ 
     $NTIHCNO = $row['NTIHCNO'];
     $DATECREATED = $row['DATECREATED'];
	 $LNMP  = $row['LNMP'];
	 $BP  = $row['BP']; 
	 $WT  = $row['WT']; 
	 $GSPGSN  = $row['GSPGSN'];  
	 
	 $FPCOMMENTS       = $row['FPCOMMENTS'];
	 $FAMILYPLANNINGMETHOD        = $row['FAMILYPLANNINGMETHOD'];
	 $QUANTITY       = $row['QUANTITY'];
	 $RETURNDATE       = $row['RETURNDATE'];
	 $USERINITIAL       = $row['USERINITIAL']; 
	 $id=$row['id'];  
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
             background:transparent;
             }
             table tr:nth-child(even) {
             background:transparent;
             } 
             </style>

   <form class="form-horizontal" action="fp_update.php" method="POST" style="height:auto; font-weight:normal;">
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
   <thead> <tr> 
  <th style="">S/NO. </th>
   <th>DATE</th>
   <th>L.N.M.P</th>
   <th>BP</th>
   <th>WT</th>
   <th>GSP/GSN</th>
   <th>COMMENTS</th>
   <th>TYPE OF METHOD</th>
   <th>QTY</th>
   <th>RETURN DATE</th> 
   <th style="">SERVICE PROVIDER</th>
   <th style="text-align:center;border:1px solid;">ACTION</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	
	<input type="hidden" name="NTIHCNO" id="NTIHCNO" value=" <?php  echo $NTIHCNO; ?>" />
	
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="id" id="id" readonly="" value="<?php  echo $id; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td> 
	
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="DATECREATED" id="DATECREATED" required="required" value=" <?php  echo $DATECREATED; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>    
			     
    <td style="border:2px solid #ecf0f5;">
    <input type="text" name="LNMP" id="LNMP" required="required" value=" <?php  echo $LNMP; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
	
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="BP" id="BP" required="required" value=" <?php  echo $BP; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
	
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="WT" id="WT" required="required" value=" <?php  echo $WT; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
	
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="GSPGSN" id="GSPGSN" required="required" value=" <?php  echo $GSPGSN; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>
	
	 <td style="border:2px solid #ecf0f5;">
    <textarea name="FPCOMMENTS" id="FPCOMMENTS" required="required"  
    style="width:100%; text-align:left;background-color:transparent; height:22px;"><?php  echo $FPCOMMENTS; ?></textarea>
    </td>   
			     
    <td style="border:2px solid #ecf0f5;">
    <select name="FAMILYPLANNINGMETHOD" id="FAMILYPLANNINGMETHOD" required="required" value=" <?php  echo $FAMILYPLANNINGMETHOD; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
	                                        <option value=" <?php  echo $FAMILYPLANNINGMETHOD; ?>"> <?php  echo $FAMILYPLANNINGMETHOD; ?></option> 
                                            <option>IMPLANON</option> 
                                            <option>JADELA</option>  
											<option>PILLS</option>  
                                            <option>CONDOMS</option>   
											<option>DEPO PROVERA</option>  
                                            <option>IUD</option>  
										    <option>NORISTERAT</option>  
                                            <option>NORIGYNON</option>  
                                            </Select> 
	
    </td>  
	
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="QUANTITY" id="QUANTITY" required="required" value=" <?php  echo $QUANTITY; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
	
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="RETURNDATE" id="RETURNDATE" required="required" value=" <?php  echo $RETURNDATE; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
	
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="USERINITIAL" id="USERINITIAL" required="required" value=" <?php  echo $USERINITIAL; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
	  
	
   <td style="border:2px solid #fff;">
   <center><input type="submit" name="button" id="button" value="Update" /></center> </td>  
   </tr>
   <tr>  </tbody> </table> 
 
   </form>