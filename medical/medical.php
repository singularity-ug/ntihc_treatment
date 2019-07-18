  <table class="table table-bordered">
    <thead>
      <tr  class="  ">
      <tr  class="  ">
        <th style="border-bottom-color:white; ">Client number.</th>
        <th style="border-bottom-color:white; text-align:center;">Age</th>
		  <th style="border-bottom-color:white; text-align:center;">Vist date</th>
		   <th style="border-bottom-color:white; text-align:center;">Vist by</th> 
        <th style="border-bottom-color:white; text-align:center;">Urgency type</th>
        <th style="border-bottom-color:white; text-align:center;">Check out</th>  
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td><input type="text"  name="NTIHCNO"   id="myNTIHCNO" value="" readonly = "readonly" style=" text-align:center; background-color:#fff;width:100%;"></td>
		<input type="hidden" id="myID" name="RID">
		<td><input type="text"  name="AGE" id="myAGE1"  readonly  style="text-align:center; background-color:#fff; width:100%;"></td>
		
		<input type="hidden" id="myAGEGP" name="AGE_GROUP">
		
		<td><input type="text"  name="DATECREATED"  id="DATECREATED"  value="<?php echo date('Y-m-d'); ?>"  style="text-align:center; background-color:#fff; width:100%;"></td>
		
        <td><select  name="VISTBY" id="VISTBY" style="text-align:center; background-color:#fff; width:100%;">
		 <option value="YOUTH">YOUTH</option>
                                                   <option>PARENT</option>
                                                   <option>YOUTH AND PARENT</option>
                                                   <option>COUPLE</option>
                                                   </select></td>
												   
        <td><select  name="URGENCYTYPE" id="URGENCYTYPE"  style="text-align:center; background-color:#fff; width:100%;">
		   <option value="NORMAL"> NORMAL</option>
                                                    <option>NORMAL</option>
                                                    <option>EMERGENCY</option>
                                                    <option>CRITICAL</option>
                                                    </select>
		</td>
		
        <td><input type="numeric"  name="TIMEOUT" id="CHECKIN"   readonly = "readonly" style="text-align:center; background-color:#fff; width:100%;"></td>
		
		<input type="hidden"  id="REGISTERACCOUNT" name="REGISTERACCOUNT"  value="<?php echo $rm; ?>" >
      </tr>
    </tbody>
  </table>  
             