<!DOCTYPE html>
<?php
session_start();
session_regenerate_id();
$nameofuser = '';
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID'];
}

/*else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}*/
 ?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
     $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
		{extend :'copy',
		 title:'myfile'
		},
		{extend :'csv',
		 title:'myfile'
		},
		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
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

</style>

<!--  <meta http-equiv="refresh" content="10" > -->
</head>
<body style=" background-color:#ccdccf;">
<?php include('../php/header.php'); ?>
<center>
  <br /><br /><br /><br />
  <div id="work" style="width:95%;">

    <table id="example" class="table table-striped table-bordered"  style="font-size:80%; font-weight: bold;" cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>Req Number</th>
              <th>Subject (Brief Desc)</th>
              <th>Year</th>
              <th>Amount</th>
              <th>Status Of Request(current level)</th>
              <th> Date</th>
              <th>Comment about Req</th>
              <th>Send To</th>
              <th>Actions</th>
        </thead>
        <tfoot>
          <tr>
              <th>Req Number</th>
              <th>Subject (Brief Desc)</th>
              <th>Year</th>
              <th>Amount</th>
              <th>Status Of Request(current level)</th>
              <th> Date</th>
              <th>Comment about Req</th>
              <th>Send To</th>
              <th>Actions</th>
          </tr>
        </tfoot>
        <tbody>
        <!--<td><input type="button" style=""  id="" onclick="redirect4(this.id)" value=""></td> -->
        <tr>
            <td><input type="button" style=""  id="" onclick="redirect4(this.id)" value=">>">M/345113</td>
            <td>Transport</td>
            <td>2017</td>
            <td>2000000</td>
            <td><div class="progress">
                   <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"  aria-valuenow="90"
                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                     90% M.D
                   </div>
                </div>
            </td>
            <td> 02-08-2017</td>
            <td>OK</td>
            <td><select name="CURRENCY"  required="required" style= ''/>
                     <option>G.M</option>
                     <option>M.D</option>
                     <option>CASHIER</option>
               </select></td>
            <td><input type="button" class="btn btn-danger"  style="font-size:13px;"value=" - Reject">
                <input type="button" class="btn btn-success" value=" + Accept">
            </td>
        </tr>
        <tr>
            <td><input type="button" style=""  id="" onclick="redirect4(this.id)" value="[]">M/345111</td>
            <td>Gys am out of dummy Data</td>
            <td>2016</td>
            <td>Amount</td>
            <td><div class="progress">
                   <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                     70% CHIEF. A/C
                   </div>
                </div>
            </td>
            <td> Date</td>
            <td>Comment about Req</td>
            <td><select name="CURRENCY"  required="required" style= ''/>
                     <option>G.M</option>
                     <option>M.D</option>
                     <option>CASHIER</option>
               </select></td>
            <td><input type="button" class="btn btn-danger"  style="font-size:13px;"value=" - Reject">
                <input type="button" class="btn btn-success" value=" + Accept">
            </td>
        </tr>
        <tr>
            <td><input type="button" style=""  id="" onclick="redirect4(this.id)" value="[]">M/345115</td>
            <td> Development Costs</td>
            <td>2012</td>
            <td>Amount</td>
            <td><div class="progress">
                   <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                     70% F.C
                   </div>
                </div>
            </td>
            <td> 02-08-2017</td>
            <td>Comment about Req</td>
            <td><select name="CURRENCY"  required="required" style= ''/>
                     <option>G.M</option>
                     <option>M.D</option>
                     <option>CASHIER</option>
               </select></td>
            <td><input type="button" class="btn btn-danger"  style="font-size:13px;"value=" - Reject">
                <input type="button" class="btn btn-success" value=" + Accept">
            </td>
        </tr>
        <tr>
            <td><input type="button" style=""  id="" onclick="redirect4(this.id)" value="(@)">M/345114</td>
            <td>Refreshments for refresher cousre</td>
            <td>2015</td>
            <td>Amount</td>
            <td><div class="progress">
                   <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"  aria-valuenow="90"
                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                     90% G.M
                   </div>
                </div>
            </td>
            </td>
            <td> 02-08-2017</td>
            <td>Comment about Req</td>
            <td><select name="CURRENCY"  required="required" style= ''/>
                     <option>G.M</option>
                     <option>M.D</option>
                     <option>CASHIER</option>
               </select></td>
            <td><input type="button" class="btn btn-danger"  style="font-size:13px;"value=" - Reject">
                <input type="button" class="btn btn-success" value=" + Accept">
            </td>
        </tr>

        <tr>
            <td><input type="button" style=""  id="" onclick="redirect4(this.id)" value="{}">M/345111</td>
            <td> Office  Stationary</td>
            <td>2014</td>
            <td>Amount</td>
            <td><div class="progress">
                   <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"  aria-valuenow="90"
                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                     90% M.D
                   </div>
                </div>
            </td>
            <td> 02-08-2017</td>
            <td>Comment about Req</td>
            <td><select name="CURRENCY"  required="required" style= ''/>
                     <option>G.M</option>
                     <option>M.D</option>
                     <option>CASHIER</option>
               </select></td>
            <td><input type="button" class="btn btn-danger"  style="font-size:13px;"value=" - Reject">
                <input type="button" class="btn btn-success" value=" + Accept">
            </td>
        </tr>

        <tr>
            <td><input type="button" style=""  id="" onclick="redirect4(this.id)" value="[]">M/423456</td>
            <td>Router and switches</td>
            <td>2016</td>
            <td>Amount</td>
            <td><div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 45%">
                        <span class="sr-only">40% Complete (success)</span>H.O.D <!-- Text  -->
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 10%">
                        <span class="sr-only">10% Complete (warning)</span>M.D
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 30%">
                        <span class="sr-only">30% Complete (danger)</span>C/A
                      </div>
                 </div>
            </td>
            <td> 02-08-2017</td>
            <td>Comment about Req</td>
            <td><select name="CURRENCY"  required="required" style= ''/>
                     <option>G.M</option>
                     <option>M.D</option>
                     <option>CASHIER</option>
               </select></td>
            <td><input type="button" class="btn btn-danger"  style="font-size:13px;"value=" - Reject">
                <input type="button" class="btn btn-success" value=" + Accept">
            </td>
        </tr>

	  </tbody>
  </table>
      </div>
	  </center>
    </body>
  </html>
