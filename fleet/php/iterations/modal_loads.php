<!-- Product Purchase -->
    <div class="modal fade" id="show<?php echo $row1['purchaseid']; ?>"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title" id="myModalLabel"> </h4></center>
                </div>
                <div class="modal-body">
                
                 <img src="../../img/logsbig.png" width="100%" height="30%"> 
                 <center><p style="font-weight:bold; font-size:11px;"> REQUISITION FOR FUEL RE-LOADING </p></center>
        
				<?php
					$a=mysqli_query($conn,"select * from details where purchaseid='".$row1['purchaseid']."'");
					$arow=mysqli_fetch_array($a);
					
					$b=mysqli_query($conn,"select * from purchase where purchaseid='".$row1['purchaseid']."'");
					$brow=mysqli_fetch_array($b);
				?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
                         
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:70%; text-align:left; border:0px;"> 
               <span>Ref:</span>&nbsp;KCCA/AHR/FTL/<?php echo $brow['purchaseid']; ?>/<?php echo $brow['Yearval']; ?>/<?php echo $brow['Monthno']; ?> </th>
                 <th style="width:11%; text-align:left;border:0px;font-weight:normal:">Requisition date</th>
                <td style="width:18%;border:0px;"> &nbsp; &nbsp;<?php echo $brow['date']; ?>  </td>   
			 </tr>             
            </table> 
            
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:70%; text-align:left; border:0px;">    </th>
                 <th style="width:11%; text-align:left;border:0px; font-weight:normal:">Requisition ID.</th>
                <td style="width:18%;border:0px;">  &nbsp; &nbsp;<?php echo $brow['purchaseid']; ?>  </td>   
			 </tr>             
            </table>  
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:70%; text-align:left; border:0px;">    </th>
                 <th style="width:11%; text-align:left;border:0px;font-weight:normal:">Serial No.</th>
                <td style="width:18%;border:0px;">  &nbsp; &nbsp;<?php echo $brow['Serial']; ?>  </td>   
			 </tr>             
            </table>     
            <br>   
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
                        <p>Summary of cards and fuel required as by the reference above.</p>
                        
							<table width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>Fuel Card Name</th>
										<th>Current Fuel Available</th>
										<th>Fuel Required</th>
										<th>Fuel available after Approval</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$total=0;
										$total2=0;
										$s=mysqli_query($conn,"select * from details left join fuelcards on fuelcards.productid=details.productid 
										where purchaseid='".$row1['purchaseid']."'");
										while($srow=mysqli_fetch_array($s)){
											?>
											<tr>
                                            
												<td><?php echo $srow['Fuelcardname']; ?></td>
                                                
												<td><?php echo number_format($srow['fuelvailable'],2); ?></td>
                                                 
                                                
                                                <td>
													<?php 
														$sub=$srow['quantity'];
														echo number_format($sub,2);
														$total+=$sub;
													?>
												</td> 
                                                
												<td>
													<?php 
														$sub=$srow['fuelvailable']+$srow['quantity'];
														echo number_format($sub,2);
														$total2+=$sub;
													?>
												</td> 
											</tr>
											<?php
										}
									?>
									<tr>
										<td colspan="2" align="right"><strong>Grand Total</strong></td>
                                        <td><strong><?php echo number_format($total,2); ?></strong></td>
										<td><strong><?php echo number_format($total2,2); ?></strong></td>
									</tr>
								</tbody>
							</table>
                            <br>
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
               <th style="width:100%; text-align:left;border:0px; font-weight:normal:"> <?php echo $brow['Description']; ?>  </th>   
			 </tr>             
            </table>  
        <br>
                            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:12%; text-align:left; border:0px;"> Prepared by   </th>
               <th style="width:30.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['name']; ?>  </th> 
               <th style="width:8%; text-align:left; border:0px;"> Title   </th>
               <th style="width:32.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['Title']; ?>  </th> 
               <th style="width:7%; text-align:left; border:0px;"> Date   </th>
               <th style="width:10.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['Createddate']; ?>  </th> 
                
			 </tr>             
            </table>  
      
       <br>
                            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:12%; text-align:left; border:0px;"> Reviewed by   </th>
               <th style="width:30.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['Throughone']; ?>  </th> 
               <th style="width:8%; text-align:left; border:0px;"> Title   </th>
               <th style="width:32.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['Throughonetitle']; ?>  </th> 
               <th style="width:7%; text-align:left; border:0px;"> Date   </th>
               <th style="width:10.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['Throughoneaccountdate']; ?>  </th> 
                
			 </tr>             
            </table>  
                                            
          <br>
                            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:12%; text-align:left; border:0px;"> Approved by   </th>
               <th style="width:30.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['Toname']; ?>  </th> 
               <th style="width:8%; text-align:left; border:0px;"> Title   </th>
               <th style="width:32.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['Toapprover']; ?>  </th> 
               <th style="width:7%; text-align:left; border:0px;"> Date   </th>
               <th style="width:10.33333333%; text-align:left;border:0px; font-weight:normal:">&nbsp;<?php echo $brow['Toaccountdate']; ?>  </th> 
                
			 </tr>             
            </table>  
                                            
                                         
                            
						</div>
					</div>      
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="btn btn-danger"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->