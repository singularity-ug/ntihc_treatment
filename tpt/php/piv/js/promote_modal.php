<a class="btn btn-success" href="#edit<?php echo $row['per_id']?>" data-toggle="modal">
    <span class="glyphicon glyphicon-edit">update</span>
</a> 
<?php
include ("connect.php");

$result=$con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_department ON tbl_personnel.dept_id = tbl_department.dept_id WHERE per_id=$per_id");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
    $per_id = $row['per_id'];
    $pos_id = $row['pos_id'];
	$rank_id = $row['rank_id'];
    $dept_id = $row['dept_id'];
    $dept_name = $row['dept_name'];


?>
<!-- Modal -->
<div class="modal fade" id="edit<?php echo $row['per_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
        <div class = "panel panel-primary">
            <div class = "panel-heading">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Promote Personnel</h4>
            </div>
        </div>
        <div class="modal-body">          
            <form action="promote_query.php" method="POST">
        </div>
        <div class="modal-body">
            <div class="input-group">
                <span class="input-group-addon">
				
                Name:
                </span>
                <div class="form-line">
                    <input class="form-control" name="per_name" value="<?php echo $row['per_lastname']." ".$row['per_firstname']." ".$row['per_suffix']; ?>" readOnly>
                </div>
            </div>
			<div class="input-group">
				<span class="input-group-addon">
					Position:
				</span>
					<select class="form-control show-tick" name="per_position"> 
					<?php
					include("connect.php"); 
					$position1 = $con->prepare("SELECT * FROM tbl_position WHERE pos_id = $pos_id");
					$position1->execute();
					while($row1 = $position1->fetch()) {
					$position = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id");
					$position->execute();
					while($row2 = $position->fetch()) {
							
					?>
						<option value="<?php echo $row2['pos_id']; ?>"><?php echo $row2['pos_name']; ?></option>
					<?php } } ?>
					</select>
			</div>
			<div class="input-group">
				<span class="input-group-addon">
					Rank:
				</span>
					<select class="form-control show-tick" name="per_rank"> 
					<?php
					include("connect.php"); 
					$position1 = $con->prepare("SELECT * FROM tbl_academic_rank WHERE rank_id = $rank_id");
					$position1->execute();
					while($row1 = $position1->fetch()) {
					$position = $con->prepare("SELECT * FROM tbl_academic_rank ORDER BY rank_id");
					$position->execute();
					while($row2 = $position->fetch()) {
							
					?>
						<option value="<?php echo $row2['rank_id']; ?>"><?php echo $row2['rank_name']; ?></option>
					<?php } } ?>
					</select>
			</div>
			
			<div class="input-group">
				<span class="input-group-addon">
					Employee Status:
				</span>
					<select class="form-control show-tick" name="per_designation">
					<option><?php echo $row['per_designation']; ?></option>
						<option>Permanent</option>
						<option>GASS</option>
						<option>Part Time</option>
						<option>Job Order</option>
					</select>
			</div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-lg" name = "update">Update</button>
        </div>
            </form>
        </div>
        </div>
    </div>
</div>
<?php } ?>


