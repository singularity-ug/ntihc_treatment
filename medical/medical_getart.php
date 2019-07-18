 
<?php 
 $id =  $_POST['bb']; 
 $NTIHCNO='';    
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt"; 
 $conn = new mysqli($servername, $username, $password, $dbname); 
 $sql  = "SELECT * FROM artmgr  WHERE NTIHCNO = '$id'"; 
 $res = $conn->query($sql); 
 if($res){}
 else{echo $conn->error; exit();} 
     while($row=$res->fetch_assoc()){ 
	 $NTIHCNO     = $row['NTIHCNO'];   
      }  
     ?>
	  
    <form id="form1" class="form-horizontal" action=" " method="POST" style="height:auto; font-weight:normal;"> 
           
          
<table class="table table-tabled" style="background-color:#ecf0f5; margin-top:0px; ">
   <thead>
   <tr> 
   <th style=""><b>Date</b>  </th>
   <th style="">Next appointment </th> 
   <th style="">Duration in months since first starting ART </th>
   <th style="">Wt</th>
   <th style="">If pregnant EDD/<B>em</B> TCT? write gestation in weeks and ANC # </th> 
   <th style="">TB status </th>
   <th style="">Potential SIDE EFFECTS</th>
   <th style="">New Ols, other problems  </th> 
   <th style="">Functional status  </th>
   <th style="">WHO clinical stage</th>
   <th style="">CPT/Dapsone </th> 
   
   <th colspan="2" style="">ARV drugs </th>
   
   <th  colspan="2" style="">Investigations</th>
   
   <th style="">Refer or consult or link/provide (including nutritional support and infant feeding)  </th>
  <th style="">Pill counting</th>
   </tr>
   
   <tr> 
   <th style="">Tick small box if scheduled</th>
   <th style=""> <b>Date</b></th> 
   <th style=""> / since starting current regimen</th>
   <th style=""><br> Ht.<b> </th>
   <th style="">FP/no FP if FP write method(s)</th> 
   <th style=""> If TB, Start/Stop (mm/yyyy) </th>
   <th style=""> </th>
   <th style="">   </th> 
   <th style=""> Work/playing Amb Bed</th>
   <th style="">WHO clinical stage</th>
   
   <th style=""> Adhere </th> 
    
   <th colspan="2" style="">  </th> 
   <th  style="">If CD4 <15% write (-) If CD4 >15 write(+)</th>
   <th style="">Hgb, RPR,CXR,TB sputums, infant Ab/PCR, other </th> 
   <th style="">If Hospitalized # of days</th> 
   <th> </th>
   </tr> 
   
   <tr> 
   <th style=""> </th>
   <th style=""> </th> 
   <th style="">  </th>
   <th style=""> Muac/oEDEMA +/-</th>
   <th style="">  Age in months if <=2 yrs</th> 
   <th style=""> </th>
   <th style=""> </th>
   <th style=""> </th> 
   <th style="">  </th>
 
   <th style=""> </th> 
   <th style=""> </th>
   
   <th  style=""> Adhere  </th>
   <th  style="">/why </th> 
    <th style=""> </th>
   <th  style=""> </th>
   <th style="">  </th> 
   <th style=""> </th> 
   </tr>
   </thead>
   <tbody>
   <?php
										$total=0;
									    $total1=0; 
										$s=mysqli_query($conn,"select *from artmgr  WHERE NTIHCNO= '$id' order by artid ASC");
										while($srow=mysqli_fetch_array($s)){
											?>
											<tr> 
                                    
    <td><?php echo $srow['DATECREATED']; ?>
    <?php echo $row['art2']; ?></td> 
          
    <td><?php echo $row['art3']; ?></td>  
     
	<td><?php echo $row['art4']; ?>
	<?php echo $row['art5']; ?>
	</td>   
			     
    <td>
	<?php echo $row1['art6']; ?>
	<?php echo $row1['art7']; ?>
	<?php echo $row1['art8']; ?> 
	</td> 
     
	 		     
    
	<td>
	<?php echo $row1['art9']; ?>
	<?php echo $row1['art10']; ?>
	<?php echo $row1['art11']; ?>  
	</td> 
     
	<td>
    <?php echo $row1['art12']; ?>
	<?php echo $row1['art13']; ?>
	<?php echo $row1['art14']; ?>  
   </td>   
			     
    
	<td> 
	<textarea name="art15" id="art15" 
	style="width:100%; text-align:left;background-color:#fff;height:20px;"><?php echo $row1['art15']; ?> </textarea></td> 
    <td>
	
   <textarea name="art16" id="art16"  
   style="width:100%; text-align:left;background-color:#fff; height:20px;"><?php echo $row1['art16']; ?> </textarea>
   
   </td>   
			     
    
    <td><?php echo $row1['art17']; ?> </td> 
     
    <td><?php echo $row1['art18']; ?> </td>   
			      
	<td><?php echo $row1['art19']; ?> </td>  
    
	<td><?php echo $row1['art20']; ?> </td> 
     
	<td><?php echo $row1['art21']; ?> </td>   
			     
    <td><?php echo $row1['art22']; ?> </td>   
			      
	<td><?php echo $row1['art23']; ?> </td>  
    
	<td><?php echo $row1['art24']; ?> </td> 
     
	<td><?php echo $row1['art25']; ?> </td>  
	 
    	
								</tr>
							<?php
							}
						?>
                    </tbody>
                </table>	 
                
     
	 
    </form>