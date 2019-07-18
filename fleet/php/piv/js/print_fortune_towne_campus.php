<link rel="stylesheet" type="text/css" href="css/style1.css">

<center>
  <div class="backk" style="float: left; margin-left: 120px;">
    <button><a href="fortune_towne_campus.php">Back</a></button>
  </div>
  <div class="filterss" style="float: right; margin-right: 120px;">
    <button onclick="printContent('print')" id = "hit" style="float: right;">Print Report</button>
    <input id="btnExport" type="button" value="Export to Excel" style="float: right; margin-top: 30px; margin-right: -86px;">
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter">
    &nbsp;&nbsp;
  </div>
  <div ng-app="myApp" ng-controller="myCtrl">
    <div class="prepared-form" style="border: 1px solid; width: 30%; margin-right: 300px;">
      <i>Note: Please Fill up this form.</i>
      <br><br>
      <table>
        <tr>
          <td>Prepared by :</td>
          <td><input ng-model="firstname" placeholder="Name" class="form-control" required=""></td>
        </tr>
        <tr>
          <td>Position :</td>
          <td><input ng-model="position" placeholder="Position" class="form-control" required=""></td>
        </tr>
        <tr>
          <td>Certified Correct :</td>
          <td><input ng-model="certified" placeholder="Name" class="form-control" required=""></td>
        </tr>
        <tr>
          <td>Position :</td>
          <td><input ng-model="position1" placeholder="Position" class="form-control" required=""></td>
        </tr>
       </table>
      </div>
  <br><br>
  <div id="print" style="border: 1px solid; width: 80%; height: auto;">
    <div class="report-title" style = "margin:10px;"><br/>
      <div class="print-logo">
        <img src="images/CHMSC_logo.png" width="120px" height="120px" style="margin-left: -330px; position: absolute;">
      </div>
      <center>Republic of the Philippines</center>
      <center><strong>CARLOS HILADO MEMORIAL STATE COLLEGE</strong></center>
      <center>Talisay City, Negros Occidental</center>
      <center>Tel. No. (034) 4954996</center>
      <br />
      <center><strong>SUMMARY OF RETIREES</strong></center>
      <center><strong>As of <?php echo date('F Y'); ?></strong></center>
    </div>
      <br />
      <br />
      <br />
      <br />
      <table id = "example" class = "stripe order-table" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Name</td>
                                        <td>Position/Title</td>
                                        <td>Age</td>
                                        <td>Gender</td>
                                        <td>Status</td>
                                        <td>Address</td>
                                        <td>Birthdate</td>
                                        <td>Birthplace</td>
                                        <td>Contact Number</td>
                                        <td>Date of Original Appointment</td>
                                        <td>Bachelor's Degree</td>
                                        <td>Master's Degree</td>
                                        <td>Doctorate Degree</td>
                                        <td>Others</td>
                                        <td>No. of Years in CHMSC</td>
                                        <td>Eligibility</td>
                                        <td>Plantilla Number</td>
                                        <td>Employee Status</td>
                                        <td>Tin Number</td>
                                        <td>Pag-ibig Number</td>
                                        <td>GSIS Number</td>
                                        <td>Campus</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_position ON tbl_personnel.pos_id=tbl_position.pos_id WHERE per_campus = 'Binalbagan' ORDER BY per_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                        $pos_id = $row['pos_id'];
                                        $bday = $row["per_date_of_birth"];
                                        $dooa = $row["per_date_of_original_appointment"];
                                        $date = new DateTime($bday);
                                        $date1 = new DateTime($dooa);
                                        $now = new DateTime();


                                        $difference = $date->diff($now)->format('%y');
                                        $length = $date->diff($now)->format('%y');


                                  ?>
                                  <td class="hidden"><?php echo $row['per_id']; ?></td>
                                  <td><?php echo $row['per_lastname'].", ".$row['per_firstname']." ".$row['per_middlename']; ?></td>
                                  <td values="<?php echo $row['pos_id'];?>"><?php echo $row['pos_name']; ?></td>
                                  <td><?php echo $difference;?></td>
                                  <td><?php echo $row['per_gender']; ?></td>
                                  <td><?php echo $row['per_status']; ?></td>
                                  <td><?php echo $row['per_address']; ?></td>
                                  <td><?php echo $row['per_date_of_birth']; ?></td>
                                  <td><?php echo $row['per_place_of_birth']; ?></td>
                                  <td><?php echo $row['per_contact_no']; ?></td>
                                  <td><?php echo $row['per_date_of_original_appointment']; ?></td>
                                  <td><?php echo $row['bs_name']; ?></td>
                                  <td><?php echo $row['ms_name']; ?></td>
                                  <td><?php echo $row['dr_name']; ?></td>
                                  <td><?php echo $length?></td>
                                  <td><?php echo $row['other_degree']; ?></td>
                                  <td><?php echo $row['per_eligibility']; ?></td>
                                  <td><?php echo $row['per_plantilla_no']; ?></td>
                                  <td><?php echo $row['per_designation']; ?></td>
                                  <td><?php echo $row['per_tin_no']; ?></td>
                                  <td><?php echo $row['per_pagibig_no']; ?></td>
                                  <td><?php echo $row['per_gsis_bp_no']; ?></td>
                                  <td><?php echo $row['per_campus'];?></td>
                                  
                                </tr>                           
                                     <?php 
                                     } ?>
                                </tbody>
                </table>
      <br><br><br>
      <div class="noted">
        <label>Prepared by:</label>
        <br>
        <br>
        <label style="text-transform: uppercase;"><strong>{{firstname}}</strong></label>
        <br>
        <label style="text-transform: capitalize;">{{position}}</label>
        <br><br><br>
        <label>Certified Correct:</label>
        <br>
        <br>
        <label style="text-transform: uppercase;"><strong>{{certified}}</strong></label>
        <br>
        <label style="text-transform: capitalize;">{{position1}}</label>
        <br><br><br>
      </div>
    </div>
  </div>
  </center>

<script src="plugins/js/jquery-1.js"></script>

<script type="text/javascript">
$("#btnExport").click(function (e) {
    //getting values of current time for generating the file name
    var dt = new Date();
    var day = dt.getDate();
    var month = dt.getMonth() + 1;
    var year = dt.getFullYear();
    var hour = dt.getHours();
    var mins = dt.getMinutes();
    var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
    //creating a temporary HTML link element (they support setting file names)
    var a = document.createElement('a');
    //getting data from our div that contains the HTML table
    var data_type = 'data:application/vnd.ms-excel;charset=utf-8';
    
    var table_html = $('#print')[0].outerHTML;
//    table_html = table_html.replace(/ /g, '%20');
    table_html = table_html.replace(/<tfoot[\s\S.]*tfoot>/gmi, '');
    
    var css_html = '<style>td {border: 0.5pt solid #c0c0c0} .tRight { text-align:right} .tLeft { text-align:left} </style>';
//    css_html = css_html.replace(/ /g, '%20');
    
    a.href = data_type + ',' + encodeURIComponent('<html><head>' + css_html + '</' + 'head><body>' + table_html + '</body></html>');
    
    //setting the file name
    a.download = 'Fortune Towne Personnel_' + postfix + '.xls';
    //triggering the function
    a.click();
    //just in case, prevent default behaviour
    e.preventDefault();
});
</script>
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
<script type="text/javascript">
  (function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.name = " ";
});
app.filter('capitalize', function() {
    return function(input) {
      return (!!input) ? input.charAt(0).toUpperCase() + input.substr(1).toLowerCase() : '';
    }
});
</script>
