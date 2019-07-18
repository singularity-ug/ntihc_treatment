 <input type="text" name1="avgx[]" value="2">
                                 <input type="text" name1="nulsoft[]" >
                                 <input type="text" name1="tox[]" value="80">
                                 
     <script type="text/javascript">
$(document).ready(function() { 
	    $(".qty").keyup(function() {
        var grandTotal = 0;
        $("input[name1='qty[]']").each(function (index) { 
            var qty = $("input[name1='qty[]']").eq(index).val();
            var APPRAISEESCOREA = $("input[name1='APPRAISEESCOREA[]']").eq(index).val();
			var avgx = $("input[name1='avgx[]']").eq(index).val();
			
			var nulsoft = parseInt(qty) + parseInt(APPRAISEESCOREA);
			
            var AGREEDSCOREA = parseInt(nulsoft) / parseInt(avgx);
			
			  
            if (!isNaN(AGREEDSCOREA)) {
                $("input[name1='AGREEDSCOREA[]']").eq(index).val(AGREEDSCOREA);
                grandTotal = parseInt(grandTotal) + parseInt(AGREEDSCOREA);
                $('#gran').val(grandTotal);
            }
			
			 if (!isNaN(nulsoft)) {
                $("input[name1='nulsoft[]']").eq(index).val(nulsoft);
                grandTotal = parseInt(grandTotal) + parseInt(nulsoft);
                $('#granx').val(grandTotal);
            }
        });
    });
});
</script>
               <div id="grand">
               <input type="numeric" name="TOTALCOST"  name1="gran" id="gran"   readonly=""
			   style="width:100%; text-align:right;background-color:#f9f9f9; font-weight:bold;border:0px;"> 
              </div>