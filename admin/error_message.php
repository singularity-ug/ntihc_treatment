 <script> 
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();  
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>



 <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 

             <form class="form-horizontal" style="height:auto; background-color:#000000">

            <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:40px; text-align:center;"> ACCESS DENIED</p>
            <p style="color:#ffffff; font-weight:bold;  font-size:20px; text-align:center;"> Dear: &nbsp<?php echo $nameofuser; ?>,  </p>
            <p style="color:#ffffff; font-weight:bold;  font-size:20px; text-align:center;"> Please contact the system admin for more information about
            authentication of user access levels</p>
            <p></p>
             <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p>
             <p style="color:red; font-weight:bold; font-size:20px; text-align:center;">   
            <input type="text"  id="CHECKIN" name="CHECKIN"  readonly style=" border-bottom-style:none; border-left-style:none; border-right-style:none; 
            border-top-style:none; font-family:lcd; font-size:36px; font-weight:bold; background-color:#000000; text-align:center;">
             </p>
           <p></p> 
           
           <div class="col-sm-12">
           <div class="panel-body">
         </form>  
         </div>

                                        </div>
                                        <div class="modal-footer" style="background-color: red; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>

                   <!----/-----start models---------->