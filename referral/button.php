<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['RID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Truncate client</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from referral where RID='".$row['RID']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Client&nbsp;No.: <strong><?php echo $drow['NTIHCNO']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['RID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Remove</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['RID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h5 class="modal-title" id="myModalLabel">REFERRALS / FOLLOW UP</h5></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from referral where RID='".$row['RID']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['RID']; ?>">
					
					<div class="row"> 
					<div class="col-lg-5">
							<label style="position:relative; top:7px;">Refferal date:</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="DATECREATED" class="form-control" readonly=""
							value="<?php echo $erow['DATECREATED']; ?>">
						</div>
					</div>
					
						<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Client name:</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="CLIENTNAME" class="form-control" readonly=""
							value="<?php echo $erow['CLIENTNAME']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">NTIHC&nbsp;No.:</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="NTIHCNO" class="form-control" readonly=""
							value="<?php echo $erow['NTIHCNO']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Age</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="AGE1" class="form-control" 
							value="<?php echo $erow['AGE1']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Sex</label>
						</div>
						<div class="col-lg-7">
							<select name="SEX" class="form-control" 
							value="<?php echo $erow['SEX']; ?>">
							<option value="<?php echo $erow['SEX']; ?>"><?php echo $erow['SEX']; ?></option>
							<option>MALE</option>
							<option>FEMALE</option>
							</select>
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Place of residence</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="PLACEOFRESIDENCE" class="form-control" required=""
							value="<?php echo $erow['PLACEOFRESIDENCE']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Client contact</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="CLIENTCONTACT" class="form-control"  
							value="<?php echo $erow['CLIENTCONTACT']; ?>">
						</div>
					</div>
					
					
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Referral center:</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="MEDICALREFERRAL" class="form-control" required=""
							value="<?php echo $erow['MEDICALREFERRAL']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Service referred to:</label>
						</div>
						<div class="col-lg-7">
						<input type="text" name="SERVICEREFERREDFOR" class="form-control" required=""
						 value="<?php echo $erow['SERVICEREFERREDFOR']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Contact person</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="CONTACTPERSON" class="form-control" required=""
							value="<?php echo $erow['CONTACTPERSON']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Contact address</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="CONTACTADDRESS" class="form-control" required=""
							value="<?php echo $erow['CONTACTADDRESS']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Follow up plan</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="FOLLOWUPLAN" class="form-control" required=""
							value="<?php echo $erow['FOLLOWUPLAN']; ?>">
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Was service recieved?.</label>
						</div>
						<div class="col-lg-7">
							<select name="SERVICERECIEVED" class="form-control" required=""
							value="<?php echo $erow['SERVICERECIEVED']; ?>">
						<option value="<?php echo $erow['SERVICERECIEVED']; ?>"><?php echo $erow['SERVICERECIEVED']; ?></option>
						<option>YES</option>
						<option>NO</option>
						</select>
						</div>
					</div>
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Follow up date</label>
						</div>
						<div class="col-lg-7">
							<input type="date" name="FOLLOWUPDATE" class="form-control" required=""
							value="<?php echo $erow['FOLLOWUPDATE']; ?>">
						</div>
					</div>
					
					
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-5">
							<label style="position:relative; top:7px;">Data entrant</label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="CAPTUREDBY" class="form-control" required=""
							value="<?php echo $erow['CAPTUREDBY']; ?>">
						</div>
					</div>
					
					<input type="hidden" name="REFTUNER" value="FOLLOWED UP" /> 
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->