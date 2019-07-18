function showForwardDaialog(){
  var jobNumber = document.getElementById('jobNumber').value;
  alert(jobNumber);
}
//this function is what i use for ajax calls in all pages
function downloadUrlData(str ,callback) {
    var request = window.ActiveXObject ?
                 new ActiveXObject('Microsoft.XMLHTTP') :
                 new XMLHttpRequest;

        request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
           }
           };

        request.open('GET',str, true);
       request.send(null);
     }

function doNothing() {}

function dateToString(date) {
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var dateOfString = date.getFullYear()+"-";
        dateOfString += (("" + month).length < 2 ? "0" : "") + month + "-";
        dateOfString += (("" + day).length < 2 ? "0" : "") + day;
    return dateOfString;
}

function PrintDiv(id) {
           var data=document.getElementById(id).innerHTML;
           var myWindow = window.open('', 'my div', 'height=1200,width=700');
           myWindow.document.write('<html><head><title>my div</title>');
           /*optional stylesheet*/ //myWindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
           myWindow.document.write('</head><body >');
           myWindow.document.write(data);
           myWindow.document.write('</body></html>');
           myWindow.document.close(); // necessary for IE >= 10
           myWindow.onload=function(){ // necessary if the div contain images
               myWindow.focus(); // necessary for IE >= 10
               myWindow.print();
               myWindow.close();
           };
       }

function populate(id3){
  var now = new Date();
  var datetime = dateToString(now);
  var time     = now.getHours()+':'+now.getMinutes()+':'+now.getSeconds();
  var p = id3.split(',');
    document.getElementById('searchdiv').innerHTML="";
    document.getElementById('lmgr').value=p[0];

/*  document.getElementById('datereported').value=datetime;
  document.getElementById('timereported').value=time;
  var p = id3.split(',');
  document.getElementById('searchdiv').innerHTML="";
  document.getElementById('regno').value=p[0];
  document.getElementById('regno').value=reg;
  document.getElementById('vehicletype').value=p[1];
  document.getElementById('vehicleage').value=(now.getFullYear()-parseInt( p[2]));
*/
}

function populateCircuit(id2){
/*  var p = id2.split('***');
  document.getElementById('Elocation').value=p[0];
  document.getElementById('Etype').value=p[1];
  document.getElementById('Edivision').value=p[2];
  document.getElementById('searchdiv1').innerHTML=""; */
}

//searchfor vehicle from a query an onkey up event
function searchmgr(q){
  if (q=='') {
    document.getElementById('searchdiv').innerHTML="";
  }

  else {
    downloadUrlData("php/search_mgr.php?query="+q, function(data){
    document.getElementById('searchdiv').innerHTML= data.responseText;
  });
  }
  }


  //searchfor acircuit from a query an onkey up event

//search for a circuit from a deep database
function searchcircuit(q){
    if (q=='') {
      document.getElementById('searchdiv1').innerHTML="";
    }

    else {
      downloadUrlData("php/search_circuit.php?query="+q, function(data){
      document.getElementById('searchdiv1').innerHTML= data.responseText;
    });
    }
    }

//redirect for mechanical materials eng
function redirect(url_path){
window.location.href="materialsengineer.php?q="+url_path;
}

//redirect for mechanical planning eng
function redirect1(url_path){
window.location.href="../planningengineermechanical.php?q="+url_path;
}

//redirect for electrical planning eng
function redirect2(url_path){
window.location.href="../planningengineerelectrical.php?q="+url_path;
}


//redirect for electrical planning eng
function redirect3(url_path){
window.location.href="../materialsengineerelectrical.php?q="+url_path;
}

//redirect for electrical planning eng
function redirect4(url_path){
window.location.href="../appraisal2.php?q="+url_path;
}


//redirect for electrical planning eng
function redirect5(url_path){
window.location.href="../appraisal3.php?q="+url_path;
}
