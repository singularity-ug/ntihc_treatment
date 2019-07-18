<link rel="stylesheet" type="text/css" href="css/style1.css">

<center>
    <div class="backk" style="float: left; margin-left: 120px;">
        <button><a href="gass_profile_by_campus.php">Back</a></button>
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
            <center><strong>As of <?php echo $d11 ." to ". $d21; ?></strong></center>
        </div>
        <br />
        <br />
        <br />
        <br />
            <center>
            <table id = "example" class = "stripe order-table" cellspacing = "0" style="margin: 10px;">
               <thead>
                    <tr>
                        <th > Campus</th>
                        <th >No. of GASS Personnel</th>
                    </tr>
                </thead>
                    <tbody>
                                <?php
                                    $afilter = $con->prepare("SELECT atotal1.atotal2 + atotal3.atotal4 as atotal FROM (
                                        SELECT COUNT(*) as atotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Alijis' AND per_designation in ('GASS' , 'Job Order') 
                                        ) as atotal1,
                                        (
                                        SELECT COUNT(*) as atotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Alijis'AND per_designation in ('GASS' , 'Job Order')
                                        ) as atotal3 ");
                                        $afilter->execute();
                                        $afetch = $afilter->fetchAll();

                                        foreach ($afetch as $key => $row) {
                                            $atotal = $row['COUNT(*)' + 'COUNT(atotal)'];


                                        //MS TOTAL
                                        //MS TOTAL
                                        //MS TOTAL
                                    $tfilter = $con->prepare("SELECT ttotal1.ttotal2 + ttotal3.ttotal4 as ttotal FROM (
                                        SELECT COUNT(*) as ttotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Talisay' AND per_designation in ('GASS' , 'Job Order') 
                                        ) as ttotal1,
                                        (
                                        SELECT COUNT(*) as ttotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Talisay' AND per_designation in ('GASS' , 'Job Order')
                                        ) as ttotal3 ");
                                    $tfilter->execute();
                                    $tfetch = $tfilter->fetchAll();

                                        foreach ($tfetch as $key => $row1) {
                                            $ttotal = $row1['COUNT(*)' + 'COUNT(ttotal)'];

                                            //DR QUERY
                                            //DR QUERY
                                            //DR QUERY
                                    $bfilter = $con->prepare("SELECT btotal1.btotal2 + btotal3.btotal4 as btotal FROM (
                                        SELECT COUNT(*) as btotal2
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Binalbagan' AND per_designation in ('GASS' , 'Job Order') 
                                        ) as btotal1,
                                        (
                                        SELECT COUNT(*) as btotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Binalbagan' AND per_designation in ('GASS' , 'Job Order')
                                        ) as btotal3 ");
                                    
                                        $bfilter->execute();
                                        $bfetch = $bfilter->fetchAll();

                                        foreach ($bfetch as $key => $row2) {
                                            $btotal = $row2['COUNT(*)' + 'COUNT(btotal)'];


                                        $ftfilter = $con->prepare("SELECT fttotal1.fttotal2 + fttotal3.fttotal4 as fttotal FROM (
                                        SELECT COUNT(*) as fttotal2
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Fortune Towne' AND per_designation in ('GASS' , 'Job Order') 
                                        ) as fttotal1,
                                        (
                                        SELECT COUNT(*) as fttotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Fortune Towne' AND per_designation in ('GASS' , 'Job Order')
                                        ) as fttotal3 ");
                                    
                                        $ftfilter->execute();
                                        $ftfetch = $ftfilter->fetchAll();

                                        foreach ($ftfetch as $key => $row3) {
                                            $ftotal = $row3['COUNT(*)' + 'COUNT(fttotal)'];
                                             ?>
                                            <tr>
                                             <td>Alijis</td>
                                             <td><?php echo $atotal; ?></td>
                                             </tr>
                                            <tr>
                                             <td>Binalbagan</td>
                                             <td><?php echo $btotal; ?></td>
                                            </tr>
                                            <tr>
                                             <td>Fortune Towne</td>
                                             <td><?php echo $ftotal; ?></td>
                                            </tr>
                                            <tr>
                                            <tr>
                                             <td>Talisay</td>
                                             <td><?php echo $ttotal; ?></td>
                                             </tr>
                                            <td>TOTAL</td>
                                             <td><?php echo $atotal + $ttotal + $btotal + $ftotal; ?></td>
                                            </tr>
                                      </tbody>
                                </table>
                                <?php } } } }?>
                                <?php } else { ?>
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td>CAMPUS</td>
                                        <td>No. of GASS Personnel</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php
                                include('connect.php');
                                 $display = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_campus = 'Talisay' AND per_designation in ('GASS' , 'Job Order')");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];

                                    }?>
                                <td>Talisay</td>
                                <td><?php echo $total; ?></td>

                                </tr>
                                <tr>
                                <?php
                                
                                 $display1 = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_campus = 'Alijis' AND per_designation in ('GASS' , 'Job Order')");
                                    $display1->execute();
                                    $fetch1 = $display1->fetchAll();
                                    
                                foreach($fetch1 as $key => $row1) { 
                                   $total1 = $row1['COUNT(*)'];

                                    }?>
                                <td>Alijis</td>
                                <td><?php echo $total1; ?></td>
                                </tr>
                                <tr>
                                <?php
                                
                                 $display2 = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_campus = 'Fortune Towne' AND per_designation in ('GASS' , 'Job Order')");
                                    $display2->execute();
                                    $fetch2 = $display2->fetchAll();
                                    
                                foreach($fetch2 as $key => $row2) { 
                                   $total2 = $row2['COUNT(*)'];

                                    }?>
                                <td>Fortune Towne</td>
                                <td><?php echo $total2; ?> </td>
                                </tr>
                                <tr>
                                <?php
                                
                                 $display3 = $con->prepare("SELECT COUNT(*) FROM tbl_personnel where per_campus = 'Binalbagan' AND per_designation in ('GASS' , 'Job Order')");
                                    $display3->execute();
                                    $fetch3 = $display3->fetchAll();
                                    
                                foreach($fetch3 as $key => $row3) { 
                                   $total3 = $row3['COUNT(*)'];

                                    }?>
                                <td>Binalbagan</td>
                                <td><?php echo $total3; ?> </td>
                                </tr>
                                <tr>
                                <th>Total</th>
                                <td><?php echo $total + $total1 + $total2 + $total3; ?> </td>
                                </tr>
                                </tbody>
                            </table>
                            </center>
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
