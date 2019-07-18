
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
  var  ntihc = rowid.cells[1].childNodes[1].value;
	var	 spec  = rowid.cells[2].childNodes[0].value;
	var	 heam  = rowid.cells[3].childNodes[0].value;
	var	 mal   = rowid.cells[4].childNodes[0].value;
	var	 stool = rowid.cells[5].childNodes[0].value;
	var	 urin  = rowid.cells[6].childNodes[0].value;
	var	 swabs = rowid.cells[7].childNodes[0].value;
	var  wetPre= rowid.cells[8].childNodes[0].value;
	var	 gramst= rowid.cells[9].childNodes[0].value;
postAjax('lab_hmis_insert.php', { p1: ntihc, p2: spec,p3:heam,p4:mal,p5:stool,p6:urin,p7:swabs,p8:wetPre, p9:gramst, p10:0 },
        function(data){ console.log(data);
                      	rowid.parentNode.removeChild(rowid);
				              });
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
