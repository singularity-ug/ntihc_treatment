
 function postAjax(url, data, success) {
 	    var params = typeof data == 'string' ? data : Object.keys(data).map(
 	            function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
 	        ).join('&');

 	    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
 	    xhr.open('POST', url);
 	    xhr.onreadystatechange = function() {
 	        if (xhr.readyState>3 && xhr.status==200)
 					{
 						success(xhr.responseText);
 					}
 	    };
 	    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
 	    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
 	    xhr.send(params);
 	    return xhr;
 	}




function getvalues(elem){
	var  rowid = elem.parentNode.parentNode;
  var  str  =""+console.log(rowid.cells[1].childNodes[1].value);
			 str +=""+console.log(rowid.cells[2].childNodes[0].value);
			 str +=""+console.log(rowid.cells[3].childNodes[0].value);
			 str +=""+console.log(rowid.cells[4].childNodes[0].value);
			 str +=""+console.log(rowid.cells[5].childNodes[0].value);
			 str +=""+console.log(rowid.cells[6].childNodes[0].value);
			 str +=""+console.log(rowid.cells[7].childNodes[0].value);
			 str +=""+console.log(rowid.cells[8].childNodes[0].value);
			 str +=""+console.log(rowid.cells[9].childNodes[0].value);
postAjax('http://foo.bar/', { p1: 1, p2: 'Hello World' }, function(data){ console.log(data); });
				rowid.parentNode.removeChild(rowid);
			}


function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 100){							// limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		    row.id = (rowCount-1)+'_rowdata';
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[1].cells[i].innerHTML; //0
		}
	}else{
		 alert("Maximum is 100.");

	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=2; i<rowCount; i++) { //0
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) { 						// limit the user from removing all the fields
				alert("Cannot Remove all.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}


function addRow1(iftb){
var newrow = '<tr id="0_rowdata" >'+
'<td><input type="checkbox" required="required" checked="checked" /></td>'+
'<td>'+
 '<input type="alphanumeric" name="NTIHCNO" id="NTIHCNO" required="required" style="margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFFFAA;"/>'+
'</td>'+
'<td><select name="SWABS-TYPE" id="SPECIMEN" required="required" style="margin-left: 0px;margin-top: 5px;height:20px; width:82px; background-color:#FFFFAA;"/>'+
'				<option value="-1">Select</option>'+
'				<option>BLOOD</option>'+
'				<option>URINE</option>'+
'				<option>STOOL</option>'+
'				<option>CSF</option>'+
'				<option>SALIVA</option>'+
'	</select>'+
'</td>'+
'<td><select name="HEAMATOLOGY_SCROLOGY" id="HEAMATOLOGY_SCROLOGY" required="required" style="margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFFFAA;"/>'+
'				<option value="-1">Select</option>'+
'				<option>Hb</option>'+
'				<option>WBCT</option>'+
'				<option>VDRL/RPR</option>'+
'	</select>'+
'</td>'+
'<td><select name="MALARIA" id="MALARIA" required="required" style="margin-left: 0px;margin-top: 5px;height:20px; width:190px; background-color:#FFFFAA;"/>'+
'				<option value="-1">Select</option>'+
'				<option>MALARIA MICROSCOPY</option>'+
'				<option>MALARIA RDTs</option>'+
'				<option>OTHER HEAMOPATRASITES</option>'+
'	</select>'+
'</td>'+
'<td><select name="STOOL_MICROSCOPY" id="STOOL_MICROSCOPY" required="required" style="margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#FFFFAA;"/>'+
'				<option value="-1">Select</option>'+
'				<option>MACRO</option>'+
'				<option>MICRO</option>'+
'</select>'+
'</td>'+
'<td><select name="URINE_MICROSCOPY" id="URINE_MICROSCOPY" required="required" style="margin-left: 0px;margin-top: 5px;height:20px; width:130px; background-color:#FFFFAA;"/>'+
'				<option value="-1">Select</option>'+
'				<option>MACROSCOPY</option>'+
'				<option>MICROSCOPY</option>'+
'				<option>PROTEIN</option>'+
'				<option>SUGAR</option>'+
'				<option>PREGNANCY</option>'+
'</select>'+
'</td>'+
'<td><select name="SWABS-TYPE" id="SWABS-TYPE" required="required" style= "margin-left: 0px;margin-top: 5px;height:20px; width:90px; background-color:#FFFFAA;"/>'+
'				<option value="-1">Select</option>'+
'				<option>VIGINAL</option>'+
'				<option>ORAL</option>'+
'				<option>PENILE</option>'+
'</select>'+
'</td>'+
'<td><select name="SWABS-TYPE" id="SWABS-WETPREP" required="required" style= "margin-left: 0px;margin-top: 5px;height:20px; width:81px; background-color:#FFFFAA;"/>'+
'				<option value="-1">Select</option>'+
'				<option>VIGINAL</option>'+
'				<option>ORAL</option>'+
'				<option>PENILE</option>'+
'</select>'+
'</td>'+
'<td><select name="SWABS-TYPE" id="SWABS-GRAMSTAIN" required="required" style= "margin-left: 0px;margin-top: 5px;height:20px; width:91px; background-color:#FFFFAA;"/>'+
'				<option value="-1">Select</option>'+
'				<option>POSITIVE</option>'+
'				<option>NEGATIVE</option>'+
'</select>'+
'</td>'+
'<td>'+
'<div class="clear"></div>'+
'<input class="submit" type="button" onclick="getvalues(this)" value="Out &raquo;" style= "margin-left: 0px;margin-top: 18px;height:22px; width:50px;""/>'+
'<div class="clear"></div>'+
'</td>'+
'</tr>';
//document.getElementById('tablebody').innerHTML=document.getElementById('tablebody').innerHTML +newrow;
/*var table = document.getElementById(tableID);
var rowCount = table.rows.length;
for(var i=1; i<rowCount; i++) { //0
	var row = table.rows[i];
	var chkbox = row.cells[0].childNodes[0];
	if(null != chkbox && true == chkbox.checked) {
		if(rowCount <= 1) { 						// limit the user from removing all the fields
			alert("Cannot Remove all.");
			break;
		}
		table.deleteRow(i);
		rowCount--;
		i--;
	}
}*/


}
