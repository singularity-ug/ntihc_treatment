<link href="../../js/googleapis.js" rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />   
 <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">

  <script src="../../datatable/js/jquery-1.12.3.js"></script>
  <script src="../../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../datatable/js/bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../../datatable/js/buttons.flash.min.js"></script>
  <script src="../../datatable/js/jszip.min.js"></script>
  <script src="../../datatable/js/pdfmake.min.js"></script>
  <script src="../../datatable/js/vfs_fonts.js"></script>
  <script src="../../datatable/js/buttons.html5.min.js"></script>
  <script src="../../datatable/js/buttons.print.min.js"></script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
 
    
   <th style="background-color: #f9fafb;">
   
                  <input type="text"id="QTYINSTOCK" name="QTYINSTOCK" name1="QTYINSTOCK[]"  /> 
                 <input type="text"id="QTYNEEDED" name="QTYNEEDED"  >    
                 <input class="qty" type="text" name="QTYISSUED" name1="qty[]"  />
                   
                 <input type="text"id="STOCKBAL" name="STOCKBAL" name1="STOCKBAL[]"  />  
                    <input type="text"id="UNITVALUE" name="UNITVALUE" name1="UNITVALUE[]"  /> 
                 <input type="text"id="AMOUNT" name="AMOUNT" name1="AMOUNT[]" />                       </th> 
             

    </tbody>
  </table>  
<div id="grand">
<input type="hidden" name="gran" id="gran">
</div>

<script type="text/javascript">
$(document).ready(function() { 
	    $(".qty").keyup(function() {
        var grandTotal = 0;
        $("input[name1='qty[]']").each(function (index) {
            var qty = $("input[name1='qty[]']").eq(index).val();
            var UNITVALUE = $("input[name1='UNITVALUE[]']").eq(index).val();
            var AMOUNT = parseInt(qty) * parseInt(UNITVALUE);
		    var QTYINSTOCK = $("input[name1='QTYINSTOCK[]']").eq(index).val();
            var STOCKBAL = parseInt(QTYINSTOCK) - parseInt(qty);

            if (!isNaN(AMOUNT)) {
                $("input[name1='AMOUNT[]']").eq(index).val(AMOUNT);
                grandTotal = parseInt(grandTotal) + parseInt(AMOUNT);
                $('#gran').val(grandTotal);
            }
			
			 if (!isNaN(STOCKBAL)) {
                $("input[name1='STOCKBAL[]']").eq(index).val(STOCKBAL);
                grandTotal = parseInt(grandTotal) + parseInt(STOCKBAL);
                $('#granx').val(grandTotal);
            }
        });
    });
});
</script>






 <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">                
              <tr>       
<th>  <input name="qty[]" type="text" value="0" /><br /></th>
<th><input name="qty[]" type="text" value="0" /><br /></th>
<th><input name="qty[]" type="text" value="0" /><br /></th>
<th><input name="qty[]" type="text" value="0" /><br /></th>
<th><input name="qty[]" type="text" value="0" /><br /></th>
 </tr>             
            </table> 
            <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">                
              <tr>       
<th>  <input name="qty[]" type="text" value="0" /><br /></th>
<th><input name="qty[]" type="text" value="0" /><br /></th>
<th><input name="qty[]" type="text" value="0" /><br /></th>
<th><input name="qty[]" type="text" value="0" /><br /></th>
<th><input name="qty[]" type="text" value="0" /><br /></th>
 </tr>             
            </table> 

<input name="sum" type="text" value="0" />
      
      
      <script>
	  //Get a list of input fields to sum
var elements = document.getElementsByName("qty[]");
var element_array = Array.prototype.slice.call(elements);

//Assign the keyup event handler
for(var i=0; i < element_array.length; i++){
    element_array[i].addEventListener("keyup", sum_values);
}

//Function to sum the values and assign it to the last input field
function sum_values(){
    var sum = 0;
    for(var i=0; i < element_array.length; i++){
        sum += parseInt(element_array[i].value, 10);
    }
    document.getElementsByName("sum")[0].value = sum;
}</script>
	  

 <!--End-Footer-part-->  
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
PREVIOUSMILEAGE CURRENTMILEAGE DISTANCECOVERED RUNNINGMILEAGE UNITPRICE TOTALAMOUNT LITRE
<script src="../.../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plugins/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../plugins/flot/jquery.flot.categories.min.js"></script>
</body>
</html>