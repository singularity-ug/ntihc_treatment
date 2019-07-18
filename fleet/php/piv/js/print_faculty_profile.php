<link rel="stylesheet" type="text/css" href="css/style1.css">

<center>
    <div class="backk" style="float: left; margin-left: 120px;">
        <button><a href="faculty_profile.php">Back</a></button>
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
            
            <table id = "example" class = "stripe order-table" cellspacing = "0" style="margin: 10px;">
               <thead>
                                    <tr>
                                        <th >Program</th>
                                        <th >BACHELOR DEGREE</th>
                                        <th >MASTERAL DEGREE</th>
                                        <th >DOCTORAL DEGREE</th>
                                        <th >TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $display = $con->prepare("SELECT * FROM tbl_department ");
                                    $display->execute();
                                    $fetch = $display->fetchAll(); 
                                        foreach ($fetch as $key => $row) {
                                            $dept_id = $row['dept_id'];
                                            $dept_name = $row['dept_name'];

                                    //BS TOTAL
                                    //BS TOTAL
                                    //BS TOTAL
                                    $bsfilter = $con->prepare("SELECT bstotal1.bstotal2 + bstotal3.bstotal4 as bstotal FROM (
                                        SELECT COUNT(bs_name) as bstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dept_id = '$dept_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') 
                                        ) as bstotal1,
                                        (
                                        SELECT COUNT(bs_name) as bstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dept_id = '$dept_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time')
                                        ) as bstotal3 ");
                                        $bsfilter->execute();
                                        $bsfetch = $bsfilter->fetchAll();

                                        foreach ($bsfetch as $key => $row) {
                                            $bstotal = $row['COUNT(bs_name)' + 'COUNT(bstotal)'];


                                        //MS TOTAL
                                        //MS TOTAL
                                        //MS TOTAL
                                    $msfilter = $con->prepare("SELECT mstotal1.mstotal2 + mstotal3.mstotal4 as mstotal FROM (
                                        SELECT COUNT(ms_name) as mstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dept_id = '$dept_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') 
                                        ) as mstotal1,
                                        (
                                        SELECT COUNT(ms_name) as mstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dept_id = '$dept_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time')
                                        ) as mstotal3 ");
                                    $msfilter->execute();
                                    $msfetch = $msfilter->fetchAll();

                                        foreach ($msfetch as $key => $row) {
                                            $mstotal = $row['COUNT(ms_name)' + 'COUNT(mstotal)'];

                                            //DR QUERY
                                            //DR QUERY
                                            //DR QUERY
                                    $drfilter = $con->prepare("SELECT drtotal1.drtotal2 + drtotal3.drtotal4 as drtotal FROM (
                                        SELECT COUNT(dr_name) as drtotal2
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dept_id = '$dept_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') 
                                        ) as drtotal1,
                                        (
                                        SELECT COUNT(dr_name) as drtotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dept_id = '$dept_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time')
                                        ) as drtotal3 ");
                                    
                                        $drfilter->execute();
                                        $drfetch = $drfilter->fetchAll();

                                        foreach ($drfetch as $key => $row) {
                                            $drtotal = $row['COUNT(dr_name)' + 'COUNT(drtotal)'];
                                             ?>
                                            <tr>
                                             <td><?php echo $dept_name; ?></td>
                                             <td><?php echo $bstotal; ?></td>
                                             <td><?php echo $mstotal; ?></td>
                                             <td><?php echo $drtotal; ?></td>
                                             <td><?php echo $bstotal + $mstotal + $drtotal; ?></td>
                                            </tr>

                                <?php } } } } ?>
                                </tbody>
                                </table>
                                <?php }else { ?>

                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <th >Program</th>
                                        <th >BACHELOR DEGREE</th>
                                        <th >MASTERAL DEGREE</th>
                                        <th >DOCTORAL DEGREE</th>
                                        <th >TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $display = $con->prepare("SELECT * FROM tbl_department ");
                                    $display->execute();
                                    $fetch = $display->fetchAll(); 
                                        foreach ($fetch as $key => $row) {
                                            $dept_id = $row['dept_id'];
                                            $dept_name = $row['dept_name'];

                                    $bsfilter1 = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE dept_id = '$dept_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time')");
                                    $bsfilter1->execute();
                                    $bsfetch = $bsfilter1->fetchAll(); 
                                        foreach ($bsfetch as $key => $row11) {
                                        $bstotal1 = $row11['COUNT(bs_name)'];

                                    $msfilter1 = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE dept_id = '$dept_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time')");
                                    $msfilter1->execute();
                                    $msfetch = $msfilter1->fetchAll(); 
                                        foreach ($msfetch as $key => $row1) {
                                        $mstotal1 = $row1['COUNT(ms_name)'];

                                    $drfilter1 = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE dept_id = '$dept_id' AND dr_name <> ' '  AND per_designation in ('Permanent' , 'Part Time')");
                                    $drfilter1->execute();
                                    $drfetch = $drfilter1->fetchAll(); 
                                        foreach ($drfetch as $key => $row2) {
                                        $drtotal1 = $row2['COUNT(dr_name)'];
                                 ?>
                                 <td><?php echo $dept_name; ?></td>
                                 <td><?php echo $bstotal1; ?></td>
                                 <td><?php echo $mstotal1; ?></td>
                                 <td><?php echo $drtotal1; ?></td>
                                 <td><?php echo $bstotal1 + $mstotal1 + $drtotal1; ?></td>

                                </tbody>
                                 <?php } } } } }?>
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
    a.download = 'Summary of Faculty Profile_' + postfix + '.xls';
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
