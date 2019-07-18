  <script>

          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'inpats.php',
                       success : function(data){
                                $('#inpats').html(data);
                                 }
               });
               }, 2000);

          </script>

		  
     <!-- /.START EXAM SCRIPT --> 
     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TO").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<select name="catx[]" required="required"  id="catx'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+ 
						'<option> </option>'+
                        '<option>GENERAL</option>'+
             			'<option>PREGNANCY</option>'+
             		    '<option>STI</option>'+
						'<option>SGBV</option>'+
                        '<option>BODY CHANGES</option>'+
             		    '<option>SEXUAL HEALTH</option>'+
                                        '</select>';


	 var  s2b =  '<select name="probx[]" required="required"  id="probx'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					    '<option> </option>'+
                            '<option>ABDOMINAL PAIN</option>'+
                                            '<option>ABNORMAL VAGINAL DISCHARGE</option>'+
                                            '<option>ANTE-NATAL CARE</option>'+
                                            '<option>BACKACHE</option>'+
                                            '<option>C-C SCREENING-INITIAL</option>'+
                                            '<option>C-C SCREENING-ROUTINE RESCREENING</option>'+
                                            '<option>C-C VIA NEGATIVE</option>'+
                                            '<option>C-C VIA POSITIVE</option>'+
                                            '<option>C-C VIA SUSPICIOUS FOR CANCER</option>'+
                                            '<option>CHEST PAIN</option>'+
                                            '<option>CONSTIPATION</option>'+
                                            '<option>CONTRACEPTIONS</option>'+
                                            '<option>COUGH</option>'+
                                            '<option>DENTAL PROBLEM</option>'+
                                            '<option>DIZZINESS</option>'+
                                            '<option>EYE PROBLEM</option>'+
                                            '<option>FAMILY PLANNING</option>'+
                                            '<option>FEVER</option>'+
                                            '+<option>FLU</option>'+
											'+<option>SKIN INFECTION</option>'+
                                            '+<option>GBV-COMMUNITY REDRESS/SUPPORT GROUP</option>'+
                                            '<option>GBV-EMERGENCY CONTRACEPTION</option>'+
                                            '<option>ABNORMAL VAGINAL DISCHARGE</option>'+
                                            '<option>GENITAL ULCER</option>'+
                                            '<option>GROWTHS IN GENITALS</option>'+
											'<option>GENITAL WARTS</option>'+
                                            '<option>HERPES SIMPLEX</option>'+
                                            '<option>HERPES ZOSTA</option>'+
                                            '<option> HIV/AIDS</option>'+
                                            '<option>ITCHING IN GENITAL</option>'+
                                            '<option>PAINFUL GENITALS</option>'+
                                            '<option>SWELLING IN GENITALS</option>'+
                                            '<option>SYPHILLIS</option>'+
                                            '<option>URETHRAL DISCHARGE</option>'+
                                            '<option>VAGINAL DISCHARGE</option>'+
                                            '<option>SEXUAL ABUSE</option>'+
                                            '<option>SEXUAL PROBLEMS</option>'+
                                            '<option>STDS-SEXUAL HEALTH</option>'+
                                           '<option> ACNE</option>'+
										   '<option>TRICHOMONIASIS</option>'+
										   '<option>PUBIC LICE</option>'+
										   '<option>CHLAMYDIA</option>'+
										   '<option>GONORRHEA</option>'+
                                           '<option>BODY ODOUR</option>'+
                                           '<option>BREAST CHANGES</option>'+
                                           '<option>MENSTRUAL RELATED PROBLEMS</option>'+
                                           '<option>MENSTRUATION</option>'+
                                           '<option>NORMAL VAGINAL DISCHARGE</option>'+
                                           '<option>SIZE OF SEX ORGANS</option>'+
                                           '<option>VIRGINITY</option>'+
                                           '<option>WET DREAMS</option>'+
                                        '</select>';

		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+ 
				                  '<td>'+s2b+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="catx_"+x;
          table.rows[x].cells[2].childNodes[0].id="probx_"+x; 
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END EXAM SCRIPT -->
  
  
   <!-- /.START DRUG SCRIPT -->
  <script>
    function  dostg(thisid){

     var val = thisid.split("_")[1];
	 var v1 = parseFloat(document.getElementById("pdx_"+val).value);
	 var v2 = parseFloat(document.getElementById("fqx_"+val).value);
	 var v3 = parseFloat(document.getElementById("tmx_"+val).value);

	 var v4 = v1*v2*v3;
	  document.getElementById("qtyx_"+val).value = v4;

}

  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;
      
	 var ttt     = "<?php   echo $stss; ?>"; 
										
     var  s1aa = '<select name="dnx_[]" onKeyUp="domee(this)"  id="dnx_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">'+   
                                        '<option></option>'+
                                        '<option><?php   echo $stss; ?></option>'+ 
                                        '</select>';
				 
	 var  s2bb = '<input type="text" name="fqx_[]" onkeyup="dostg(this.id)" onchange="dostg(this.id)" id="fqx_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; text-align:center; background-color:#fff;" >';	

     var  s3cc = '<select onchange="dostg(this.id)" name="tmx_[]" required="required"  id="tmx_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%;text-align:center; background-color:#fff;" >'+ 
						                '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
										'<option>4</option>'+
                                        '</select>';	
  
	 var  s4cc = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pdx_[]" id="pdx_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; text-align:center; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="qtyx_[]" id="qtyx_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; text-align:center; background-color:#fff;" >'; 

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+ 
								  '<td>'+s4cc+' </td>'+   
								  '<td>'+s6ff+' </td> ';
								  
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
  }

  function deleteRow16(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="dnx_"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx_"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx_"+x; 
		  table.rows[x].cells[5].childNodes[0].id="pdx_"+x;
		  table.rows[x].cells[6].childNodes[0].id="qtyx_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
   <!-- /.END DRUG  SCRIPT -->
<script>
