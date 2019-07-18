<!DOCTYPE html>
 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/buttons.dataTables.min.css">

  <script src="js/jquery-1.12.3.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/dataTables.buttons.min.js"></script>
  <script src="js/buttons.flash.min.js"></script>
  <script src="js/jszip.min.js"></script>
  <script src="js/pdfmake.min.js"></script>
  <script src="js/vfs_fonts.js"></script>
  <script src="js/buttons.html5.min.js"></script>
  <script src="js/buttons.print.min.js"></script>
  <script src="../js/custom.js"></script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable();
  } );
  </script>

  
<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}


	  {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 10px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
             }
    </style>
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
             	font-size: 12px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 

</style> 

<!--  <meta http-equiv="refresh" content="10" > -->
</head>
 
  <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
  
          <center> <legend style="color:#000; font-weight:bold;font-size:12px;font-family:lcd;"> MEDICAL DAILY TALLYING TOOL </legend> </center> 
   </script>     
               
                   <div class=""  id="gameofthrones" >  </div>
               <script> 
              function gameofthrones(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_procplan_get.php?q='+odno,
                            success : function(data){
                                     $('#gameofthrones').html(data);
     								$("#fucky").modal("show");
                                      }
                    });
                    } 
               </script> 
               
               
                          
                  <table id="example" class="table table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>DATE</th>
                     <th>ORDER.NO.</th> 
                     <th>ACTION</th>
			         <th>PRINT</th>
                     <th>ORDER.NO.</th> 
                     <th>ACTION</th> 
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT ITEMDESCRIPTION, CODE, OBJECTIVE, FINANCIALPERIOD, SUM(BUDGETAMOUNT)  
			                                         FROM procplanning  GROUP BY ITEMDESCRIPTION, FINANCIALPERIOD ORDER BY OBJECTIVE DESC ");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['FINANCIALPERIOD']."***".$res['ITEMDESCRIPTION']."***".$res['FINANCIALPERIOD'];
              echo "<tr>";
			   echo "<td>".$res['FINANCIALPERIOD']."</td>";
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['ITEMDESCRIPTION']."</td>"; 
			   echo "<td>".$res['SUM(BUDGETAMOUNT)']."</td>"; 
               echo '<td> &nbsp; 
              <a id="302__'.$dtsvv.'" href="javascript:void(0)" onclick="runclone(this.id)" data-toggle="tooltip" title="View"
              <span class="glyphicon glyphicon-th-list"> </span></a>
			  &nbsp;&nbsp;&nbsp;
			  <a id="322__'.$dtsvv.'" href="javascript:void(0)" onclick="gameofthrones(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-check"> </span></a> 
              </td>'; 
             }
              ?>
             </tbody>
             </table>
             
			          
	  </center>
    </body>
  </html>
