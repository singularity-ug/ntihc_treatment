<link rel="stylesheet" type="text/css" href="css/style1.css">

<center>
    <div class="backk" style="float: left; margin-left: 120px;">
        <button><a href="job_order_per_campus.php">Back</a></button>
    </div>
    <div class="filterss" style="float: right; margin-right: 120px;" onload="refresh();">
        <button onclick="printContent('print')" id = "hit" style="float: right;">Print Report</button>
        <input id="btnExport" type="button" value="Export to Excel" style="float: right; margin-top: 30px; margin-right: -86px;">
        <form action="" method="POST">
            <div class="filter-date" style="float: left; margin-top: -21px; margin-right: 108px">
            From : <input type="date" name="d1" style="color: #000;"> 
            To: <input type="date" name="d2" style="color: #000;"> 
            <input type="submit" value="Search" name="filter" style="color: #000;">
            </div>
        &nbsp;&nbsp;
        <?php
                include('connect.php');
                if (isset($_POST['filter'])) {
                $d1 = $_POST['d1'];
                $d2 = $_POST['d2'];

                $d11 = date("F j, Y", strtotime($d1));
                $d21 = date("F j, Y", strtotime($d2));
            ?>
    </div>
    <div ng-app="myApp" ng-controller="myCtrl">
        <div class="prepared-form" style="border: 1px solid; width: 30%; margin-right: 480px;">
            <i>Note: Please Fill up this form.</i>
            <br><br>
            <table>
            <tr>
                <td>Prepared by :</td>
                <td><input ng-model="firstname" placeholder="Name" class="form-control"></td>
            </tr>
            <tr>
                <td>Position :</td>
                <td><input ng-model="position" placeholder="Position" class="form-control"></td>
            </tr>
            <tr>
                <td>Certified Correct :</td>
                <td><input ng-model="certified" placeholder="Name" class="form-control"></td>
            </tr>
            <tr>
                <td>Position :</td>
                <td><input ng-model="position1" placeholder="Position" class="form-control"></td>
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
            <center><strong>SUMMARY OF FACULTY PROFILE</strong></center>
            <center><strong>As of <?php echo $d11 . " " . $d21; ?></strong></center>
        </div>
        <br />
        <br />
        <br />
        <br />
            <center>
            <h4 style="text-align: left; margin-left: 10px;">WITH COMPLETED MASTER'S DEGREE</h4>
            <table id = "example" class = "stripe order-table" cellspacing = "0" style="margin: 10px;">
                <thead>
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Name</td>
                                        <td>GASS Rank</td>
                                        <td>Bachelor's Degree</td>
                                        <td>Master's Degree</td>
                                        <td>Doctorate Degree</td>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php
                                    include('connect.php');        

                                        $display = $con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_position ON tbl_personnel.pos_id=tbl_position.pos_id WHERE ms_name <> ' '");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];
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
                                  <td values="<?php echo $row['pos_id']; ?>"><?php echo $row['pos_name']; ?></td>
                                  <td><?php echo $row['bs_name']; ?></td>
                                  <td><?php echo $row['ms_name']; ?></td>
                                  <td><?php echo $row['dr_name']; ?></td>
                                </tr>                           
                                     <?php 
                                      } ?>
                                </tbody>
                            </table>
                        <br><br>
                            <h4 style="text-align: left; margin-left: 10px;">WITH COMPLETED DOCTORAL DEGREE</h4>
                            <table id = "example" class = "stripe order-table" cellspacing = "0" style="margin: 10px;">
                                <thead>
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Name</td>
                                        <td>GASS Rank</td>
                                        <td>Bachelor's Degree</td>
                                        <td>Master's Degree</td>
                                        <td>Doctorate Degree</td>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php
                                    include('connect.php');        

                                        $display = $con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_position ON tbl_personnel.pos_id=tbl_position.pos_id WHERE dr_name <> ' ' ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];
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
                                  <td values="<?php echo $row['pos_id']; ?>"><?php echo $row['pos_name']; ?></td>
                                  <td><?php echo $row['bs_name']; ?></td>
                                  <td><?php echo $row['ms_name']; ?></td>
                                  <td><?php echo $row['dr_name']; ?></td>
                                </tr>                           
                                     <?php 
                                      } ?>
                                </tbody>
                            </table>
                            <?php } ?>
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
    </div>
    </center>
                        </form>

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
    a.download = 'Summary of GASS Profile by Campus_' + postfix + '.xls';
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
