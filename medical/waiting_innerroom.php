 
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="">
  
 
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
               padding-bottom: 0px;
              font-size: 11px;
              color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
  
  
          
  
        
    <table id="" class="table table-tabled table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
          <th style="background-color:#d2d6de;">ID</th>
                <th style="background-color:#d2d6de;">DATE</th>
        <th style="background-color:#d2d6de;">DATA</th>
                <th style="background-color:#d2d6de;">VIST</th>  
                <th style="background-color:#d2d6de;">NTIHC.NO.</th>
        <th style="background-color:#d2d6de;">CLIENT NAME</th>
                <th style="background-color:#d2d6de;">SERVICE TYPE</th>
                <th style="background-color:#d2d6de;">CHECK&nbsp;IN</th>
                <th style="background-color:#d2d6de;">NOW</th>
        <th style="background-color:#d2d6de;">H</th>
        <th style="background-color:#d2d6de;">M</th>
                <th style="background-color:#d2d6de;">CHECK&nbsp;OUT</th>  
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th style="background-color:#d2d6de;">ID</th>
                <th style="background-color:#d2d6de;">DATE</th>
        <th style="background-color:#d2d6de;">DATA</th>
                <th style="background-color:#d2d6de;">VIST</th>  
                <th style="background-color:#d2d6de;">NTIHC.NO.</th>
        <th style="background-color:#d2d6de;">CLIENT NAME</th>
                <th style="background-color:#d2d6de;">SERVICE TYPE</th>
                <th style="background-color:#d2d6de;">CHECK&nbsp;IN</th>
                <th style="background-color:#d2d6de;">NOW</th>
        <th style="background-color:#d2d6de;">H</th>
        <th style="background-color:#d2d6de;">M</th>
                <th style="background-color:#d2d6de;">CHECK&nbsp;OUT</th>  
            </tr>
        </tfoot>
        <tbody>

<?php

//$level = trim($_GET['q']);



function getLevel(){
      $str123 = trim($str123);
      $tempstr = str_replace('__','_',$str123);

    if($str123==''){     return '<td style="background-color:blue;">'.$str123.'</td>';     }
    else
    {
        $str1234=array();
            $str1234=explode('_',$tempstr);
        $cnt = count( $str1234);
          if($str1234[$cnt-1]==''){      return '<td style="background-color:red;">'.$str123.'</td>';      }

                     else{     return '<td style="background-color:green;">'.$str123.'</td>';   }
    }

  return false;
}

function getIndicator($str123){
    $str123 = trim($str123);
    $tempstr = str_replace('__','_',$str123);

  if($str123==''){     return '<td style="background-color:#FFF;">'.$str123.'</td>';     }
  else
  {
      $str1234=array();
          $str1234=explode('_',$tempstr);
      $cnt = count( $str1234);
        if($str1234[$cnt-1]==''){      return '<td style="background-color:#FFF;">'.$str123.'</td>';       }

                   else{     return '<td style="background-color:#ffffff;">'.$str123.'</td>';   }
  }

} 
    
require('configdb.php');
 $date = date("Y-m-d").' 00:00:00'; 
$sql = "SELECT RID, DATECREATED, NTIHCNO, CLIENTNAME, VISTTYPE,SERVICETYPE,DATATYPE,AGE1, CHECKIN, CURRENT_TIME(),
                    HOUR(CURRENT_TIME()-CHECKIN) as ahour,
          MINUTE(CURRENT_TIME()-CHECKIN) as amins,
          TIMEOUT, CLIENTNAME, SERVICEPROVIDER, INSVCSTATUS, OUTSVSTATUS FROM cmpatientsregistration 
          WHERE   TIMESTAMP >='$date' AND INSVCSTATUS ='NO'
          GROUP BY NTIHCNO ORDER BY RID DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

   echo '<tr>'.
               '<td>'.$row["RID"].'</td>'.
                  getIndicator($row["DATECREATED"]).  
         getIndicator($row["DATATYPE"]). 
                 getIndicator($row["VISTTYPE"]).   
         getIndicator($row["NTIHCNO"]).
         getIndicator($row["CLIENTNAME"]).
         getIndicator($row["SERVICETYPE"]).   
           getIndicator($row["CHECKIN"]).
                 getIndicator($row["CURRENT_TIME()"]).
         getIndicator($row["ahour"]). 
         getIndicator($row["amins"]).   
                 '<td>'.$row["TIMEOUT"].'</td></tr>';

 }

?>

    </tbody>
  </table> 

  
  
  

</form>
              
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
        
           
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
     <b> </b> 
   

<!-- jQuery 2.2.3 --> 
 
<script src="../assets/lib/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<!-- Page script -->
  
</body>
</html>
  <script>