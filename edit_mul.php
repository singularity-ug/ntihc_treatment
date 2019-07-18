<?php
	
	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='index.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?> 
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>
 

<div class="container">
<form method="post" action="update_mul.php">
<table class='table table-bordered'>
<tr>
<th>CHECKIN</th>
<th>NTIHCNO</th>
<th>CLIENT NAME</th>
<th>SERVICE TYPE</th>
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLiconn->query("SELECT * FROM cmpatientsregistration WHERE RID=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
        <td> 
		<input type="text" name="ts[]" value="<?php echo $row['TIMESTAMP'];?>" class="form-control" />
        </td>
        
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
		<input type="text" name="fn[]" value="<?php echo $row['NTIHCNO'];?>" class="form-control" />
        </td>
        
        <td>
		<input type="text" name="ln[]" value="<?php echo $row['CLIENTNAME'];?>" class="form-control" />
		</td>
        
        <td>
		<select class="form-control"  name="st[]" value="<?php echo $row['SERVICETYPE'];?>"  /> 
                           <option value="-1">-- select referral option --</option>  
								<option   <?php if($SERVICETYPE=='MEDICAL SERVICES') echo 'selected="selected"';?> >MEDICAL SERVICES</option>
								<option    <?php if($SERVICETYPE=='COUNSELLING SERVICES') echo 'selected="selected"';?>>COUNSELLING SERVICES</option>   
                                <option    <?php if($SERVICETYPE=='PREGNANCY RELATED SERVICES') echo 'selected="selected"';?>>PREGNANCY RELATED SERVICES</option>        
                                </select>
		</td>
		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
</td>
</tr>
</table>
</form>
 