$(document).ready(function(){

$("#chkcallerAvailability").click(function(){
var ct = $("#PHONECONTACT").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'PHONECONTACT='+ ct;

if(ct=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "getdetails.php",
data: dataString,
cache: false,
success: function(result){
alert(result);

var data = result.split(',');
// clear values
//$("#Firstname").val('');
$("#FIRSTNAME").val(data[0]);
$("#LASTNAME").val(data[1]);
$("#SEX").val(data[2]);
$("#AGE").val(data[3]);
$("#SCHOOLINGSTATUS").val(data[4]);
$("#MARITALSTATUS").val(data[5]);
$("#EMPLOYMENTSTATUS").val(data[6]);
$("#DISTRICT").val(data[7]);
$("#DIVISION").val(data[8]);
$("#PLACEOFRESIDENCE").val(data[9]);
$("#HEAREDABOUTNTIHC").val(data[11]);
$("#'HOWDIDYOUKNOABOUTTHISNO").val(data[12]);

}
});
}
return false;
});
});
