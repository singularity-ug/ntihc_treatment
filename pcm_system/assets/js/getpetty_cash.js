$(document).ready(function(){
$("#chkNTIHCNOAvailability").click(function(){
var ct = $("#NTIHCNO").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'NTIHCNO='+ ct;

if(ct=='')
{
alert("Please Fill All Fields");
}
else
{

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "processNTIHCNO.php",
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
$("#HIGHESTLEVELOFEDUCATION").val(data[5]);
$("#MARITALSTATUS").val(data[6]);
$("#EMPLOYMENTSTATUS").val(data[7]);
$("#DISTRICT").val(data[8]);
$("#DIVISION").val(data[9]);
$("#PLACEOFRESIDENCE").val(data[10]);
$("#PHONECONTACT").val(data[11]);
$("#MOTHERFIRSTNAME").val(data[12]);
$("#MOTHERLASTNAME").val(data[13]);
$("#FATHERFIRSTNAME").val(data[14]);
$("#FATHERLASTNAME").val(data[15]);
$("#HEAREDABOUTNTIHC").val(data[16]);

}
});
}
return false;
});
});
 
