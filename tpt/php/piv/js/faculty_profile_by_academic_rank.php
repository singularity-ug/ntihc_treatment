<?php 
include("header.php");
?>
 <section class="content">

        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>FACULTY PROFILE BY ACADEMIC RANK</h4>
                                 <form action="" method="POST">
                                    From : <input type="date" name="d1" style="color: #000;"> 
                                    To: <input type="date" name="d2" style="color: #000;"> 
                                    <input type="submit" value="Search" name="filter" style="color: #000;">
                                </form>
                                <a href="print_faculty_profile_by_academic_rank.php">
                                    <input type="button" value="Print" class="print">
                                </a>
                            </div>
                        </div>
                        <div id="print">
                            <div class = "scroll">
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
                                        <th >Academic Rank</th>
                                        <th >Talisay</th>
                                        <th >Alijis</th>
                                        <th >Binalbagan</th>
                                        <th >Fortune Towne</th>                                  
                                        <th >Total</th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];


                                            $tbs = $con->prepare("SELECT ttotal1.ttotal2 + ttotal3.ttotal4 as ttotal FROM (
                                        SELECT COUNT(*) as ttotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Talisay' AND rank_id = '$rank_id' AND per_designation in ('Permanent' , 'Part Time') 
                                        ) as ttotal1,
                                        (
                                        SELECT COUNT(*) as ttotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Talisay' AND rank_id = '$rank_id' AND per_designation in ('Permanent' , 'Part Time')
                                        ) as ttotal3 ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                                foreach($ftbs as $key => $row1) { 
                                            $ttotal = $row1['COUNT(*)' + 'COUNT(ttotal)'];

                                            
                                            $abs = $con->prepare("SELECT atotal1.atotal2 + atotal3.atotal4 as atotal FROM (
                                        SELECT COUNT(*) as atotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Alijis' AND rank_id = '$rank_id' AND per_designation in ('Permanent' , 'Part Time') 
                                        ) as atotal1,
                                        (
                                        SELECT COUNT(*) as atotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Alijis' AND rank_id = '$rank_id' AND per_designation in ('Permanent' , 'Part Time')
                                        ) as atotal3 ");
                                                $abs->execute();
                                                $fabs = $abs->fetchAll();

                                                foreach($fabs as $key => $row2) { 
                                               $atotal = $row2['COUNT(*)' + 'COUNT(atotal)'];


                                            
                                            $bbs = $con->prepare("SELECT btotal1.btotal2 + btotal3.btotal4 as btotal FROM (
                                        SELECT COUNT(*) as btotal2
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Binalbagan' AND rank_id = '$rank_id' AND per_designation in ('Permanent' , 'Part Time') 
                                        ) as btotal1,
                                        (
                                        SELECT COUNT(*) as btotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Binalbagan' AND rank_id = '$rank_id' AND per_designation in ('Permanent' , 'Part Time')
                                        ) as btotal3");
                                                $bbs->execute();
                                                $fbbs = $bbs->fetchAll();

                                                foreach($fbbs as $key => $row3) { 
                                               $btotal = $row3['COUNT(*)' + 'COUNT(btotal)'];


                                            
                                            $fbs = $con->prepare("SELECT fttotal1.fttotal2 + fttotal3.fttotal4 as fttotal FROM (
                                        SELECT COUNT(*) as fttotal2
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Fortune Towne' AND rank_id = '$rank_id' AND per_designation in ('Permanent' , 'Part Time') 
                                        ) as fttotal1,
                                        (
                                        SELECT COUNT(*) as fttotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND per_campus = 'Fortune Towne' AND rank_id = '$rank_id' AND per_designation in ('Permanent' , 'Part Time')
                                        ) as fttotal3 ");
                                                $fbs->execute();
                                                $ffbs = $fbs->fetchAll();

                                                foreach($ffbs as $key => $row4) { 
                                                $fttotal = $row4['COUNT(*)' + 'COUNT(fttotal)'];

                                            //TOTAL
                                            $tbss = $con->prepare("SELECT COUNT(rank_id) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id<>0 ");
                                                $tbss->execute();
                                                $ftbss = $tbss->fetchAll();

                                                foreach($ftbss as $key => $row5) {
                                                $sum1 = $row5['COUNT(rank_id)'];

                                            $fttbss = $con->prepare("SELECT COUNT(rank_id) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id<>0 ");
                                                $fttbss->execute();
                                                $fftbss = $fttbss->fetchAll();

                                                foreach($fftbss as $key => $row6) {
                                                $sum2 = $row6['COUNT(rank_id)'];

                                            $abss = $con->prepare("SELECT COUNT(rank_id) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id<>0 ");
                                                $abss->execute();
                                                $fabss = $abss->fetchAll();

                                                foreach($fabss as $key => $row7) {
                                                $sum3 = $row7['COUNT(rank_id)'];

                                            $bbss = $con->prepare("SELECT COUNT(rank_id) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id<>0 ");
                                                $bbss->execute();
                                                $fbbss = $bbss->fetchAll();

                                                foreach($fbbss as $key => $row8) {
                                                $sum4 = $row8['COUNT(rank_id)'];
                                        ?>
                                        
                                    <tr>
                                       <td><?php echo $row['rank_name']; ?></td>
                                       <td><?php echo $ttotal; ?></td>
                                       <td><?php echo $atotal; ?></td>
                                       <td><?php echo $btotal; ?></td>
                                       <td><?php echo $fttotal; ?></td>
                                       <td><?php echo $ttotal + $atotal + $btotal + $fttotal; ?></td>
                                    </tr>
                                    <?php } } } } } } } } }?>
                                 <tr>
                                     <td>Total</td>
                                     <td><?php echo $sum1; ?></td>
                                     <td><?php echo $sum2; ?></td>
                                     <td><?php echo $sum3; ?></td>
                                     <td><?php echo $sum4; ?></td>
                                     <td><?php echo $sum1 + $sum2 + $sum3 + $sum4; ?></td>
                                 </tr>
                                </tbody>
                                </table>

                            <?php } else { ?>
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <th >Academic Rank</th>
                                        <th >Talisay</th>
                                        <th >Alijis</th>
                                        <th >Binalbagan</th>
                                        <th >Fortune Towne</th>                                  
                                        <th >Total</th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                            $tbs = $con->prepare("SELECT COUNT(*) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '$rank_id' ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                                foreach($ftbs as $key => $row1) { 
                                               $total = $row1['COUNT(*)'];


                                            $abs = $con->prepare("SELECT COUNT(*) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '$rank_id' ");
                                                $abs->execute();
                                                $fabs = $abs->fetchAll();

                                                foreach($fabs as $key => $row2) { 
                                               $total1 = $row2['COUNT(*)'];


                                            $bbs = $con->prepare("SELECT COUNT(*) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '$rank_id' ");
                                                $bbs->execute();
                                                $fbbs = $bbs->fetchAll();

                                                foreach($fbbs as $key => $row3) { 
                                               $total2 = $row3['COUNT(*)'];


                                            $fbs = $con->prepare("SELECT COUNT(*) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '$rank_id' ");
                                                $fbs->execute();
                                                $ffbs = $fbs->fetchAll();

                                                foreach($ffbs as $key => $row4) { 
                                                $total3 = $row4['COUNT(*)'];

                                            //TOTAL
                                            $tbss = $con->prepare("SELECT COUNT(rank_id) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id<>0 ");
                                                $tbss->execute();
                                                $ftbss = $tbss->fetchAll();

                                                foreach($ftbss as $key => $row5) {
                                                $sum1 = $row5['COUNT(rank_id)'];

                                            $fttbss = $con->prepare("SELECT COUNT(rank_id) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id<>0 ");
                                                $fttbss->execute();
                                                $fftbss = $fttbss->fetchAll();

                                                foreach($fftbss as $key => $row6) {
                                                $sum2 = $row6['COUNT(rank_id)'];

                                            $abss = $con->prepare("SELECT COUNT(rank_id) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id<>0 ");
                                                $abss->execute();
                                                $fabss = $abss->fetchAll();

                                                foreach($fabss as $key => $row7) {
                                                $sum3 = $row7['COUNT(rank_id)'];

                                            $bbss = $con->prepare("SELECT COUNT(rank_id) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id<>0 ");
                                                $bbss->execute();
                                                $fbbss = $bbss->fetchAll();

                                                foreach($fbbss as $key => $row8) {
                                                $sum4 = $row8['COUNT(rank_id)'];
                                        ?>
                                        
                                    <tr>
                                       <td><?php echo $row['rank_name']; ?></td>
                                       <td><?php echo $total; ?></td>
                                       <td><?php echo $total1; ?></td>
                                       <td><?php echo $total2; ?></td>
                                       <td><?php echo $total3; ?></td>
                                       <td><?php echo $total + $total1 + $total2 + $total3; ?></td>
                                    </tr>
                                    <?php } } } } } } } } }?>
                                 <tr>
                                     <td>Total</td>
                                     <td><?php echo $sum1; ?></td>
                                     <td><?php echo $sum2; ?></td>
                                     <td><?php echo $sum3; ?></td>
                                     <td><?php echo $sum4; ?></td>
                                     <td><?php echo $sum1 + $sum2 + $sum3 + $sum4; ?></td>
                                 </tr>

                                </tbody>
                            </table>
                            <?php  } ?>
                        </div>
                      </div>
                    </div>
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