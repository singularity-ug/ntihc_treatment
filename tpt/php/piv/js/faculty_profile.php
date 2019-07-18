<?php 
include("header.php");
?>

 <section class="content">
    <?php include('faculty_profile_modal_report.php'); ?>
    <div id="target"> 
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>FACULTY PROFILE BY UNIT</h4>
                                <link rel="stylesheet" type="text/css" href="plugins/cal/tcal.css" />
                                <form action="" method="POST">
                                    From : <input type="date" name="d1" style="color: #000;"> 
                                    To: <input type="date" name="d2" style="color: #000;"> 
                                    <input type="submit" value="Search" name="filter" style="color: #000;">
                                <a href="print_faculty_profile.php">
                                    <input type="button" value="Print" class="print">
                                </a> 
                            </div>
                        </div>
                        <div id="print">
                            <div class="body">
                            <?php
                                include('connect.php');
                                if (isset($_POST['filter'])) {
                                $d1 = $_POST['d1'];
                                $d2 = $_POST['d2'];
                            ?>

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
                        </div>
                    </div>
                    </div>
                        </form>
                </div>
             </div>
         </div>
    </div>
</section>
   <script>
    function printDiv() {
        //Get the HTML of div
        var divElements = document.getElementById("print").innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = "<table></table>" + divElements;
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }
    </script>
<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
<?php 
include("script.php");
?>