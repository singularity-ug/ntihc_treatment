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
                                <h4>EDUCATIONAL QUALIFICATIONS</h4>
                                 <form action="" method="POST">
                                    From : <input type="date" name="d1" style="color: #000;"> 
                                    To: <input type="date" name="d2" style="color: #000;"> 
                                    <input type="submit" value="Search" name="filter" style="color: #000;">
                                </form>
                                <a href="print_education_qualification.php">
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
                                        <th >Educational Qualifications</th>
                                        <th >Talisay</th>
                                        <th >Alijis</th>
                                        <th >Binalbagan</th>
                                        <th >Fortune Towne</th>                                  
                                        <th >Total</th> 
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- TALISAY -->
                                    <!-- TALISAY -->
                                    <!-- TALISAY -->
                                <?php
                                    $bsfilter = $con->prepare("SELECT bstotal1.bstotal2 + bstotal3.bstotal4 as bstotal FROM (
                                        SELECT COUNT(bs_name) as bstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay'
                                        ) as bstotal1,
                                        (
                                        SELECT COUNT(bs_name) as bstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay'
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
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay'
                                        ) as mstotal1,
                                        (
                                        SELECT COUNT(ms_name) as mstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay'
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
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay'
                                        ) as drtotal1,
                                        (
                                        SELECT COUNT(dr_name) as drtotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay'
                                        ) as drtotal3 ");
                                    
                                        $drfilter->execute();
                                        $drfetch = $drfilter->fetchAll();

                                        foreach ($drfetch as $key => $row) {
                                            $drtotal = $row['COUNT(dr_name)' + 'COUNT(drtotal)'];
                                    ?>


                                    <!-- ALIJIS -->
                                    <!-- ALIJIS -->
                                    <!-- ALIJIS -->
                                    <?php
                                    $bsfilter = $con->prepare("SELECT bstotal1.bstotal2 + bstotal3.bstotal4 as bstotal FROM (
                                        SELECT COUNT(bs_name) as bstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis'
                                        ) as bstotal1,
                                        (
                                        SELECT COUNT(bs_name) as bstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis'
                                        ) as bstotal3 ");
                                        $bsfilter->execute();
                                        $bsfetch = $bsfilter->fetchAll();

                                        foreach ($bsfetch as $key => $row) {
                                            $abstotal = $row['COUNT(bs_name)' + 'COUNT(bstotal)'];


                                        //MS TOTAL
                                        //MS TOTAL
                                        //MS TOTAL
                                    $msfilter = $con->prepare("SELECT mstotal1.mstotal2 + mstotal3.mstotal4 as mstotal FROM (
                                        SELECT COUNT(ms_name) as mstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis'
                                        ) as mstotal1,
                                        (
                                        SELECT COUNT(ms_name) as mstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis'
                                        ) as mstotal3 ");
                                    $msfilter->execute();
                                    $msfetch = $msfilter->fetchAll();

                                        foreach ($msfetch as $key => $row) {
                                            $amstotal = $row['COUNT(ms_name)' + 'COUNT(mstotal)'];

                                            //DR QUERY
                                            //DR QUERY
                                            //DR QUERY
                                    $drfilter = $con->prepare("SELECT drtotal1.drtotal2 + drtotal3.drtotal4 as drtotal FROM (
                                        SELECT COUNT(dr_name) as drtotal2
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis'
                                        ) as drtotal1,
                                        (
                                        SELECT COUNT(dr_name) as drtotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis'
                                        ) as drtotal3 ");
                                    
                                        $drfilter->execute();
                                        $drfetch = $drfilter->fetchAll();

                                        foreach ($drfetch as $key => $row) {
                                            $adrtotal = $row['COUNT(dr_name)' + 'COUNT(drtotal)'];
                                    ?>



                                    <!-- BINALBAGAN -->
                                    <!-- BINALBAGAN -->
                                    <!-- BINALBAGAN -->
                                    <?php
                                    $bsfilter = $con->prepare("SELECT bstotal1.bstotal2 + bstotal3.bstotal4 as bstotal FROM (
                                        SELECT COUNT(bs_name) as bstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan'
                                        ) as bstotal1,
                                        (
                                        SELECT COUNT(bs_name) as bstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan'
                                        ) as bstotal3 ");
                                        $bsfilter->execute();
                                        $bsfetch = $bsfilter->fetchAll();

                                        foreach ($bsfetch as $key => $row) {
                                            $bbstotal = $row['COUNT(bs_name)' + 'COUNT(bstotal)'];


                                        //MS TOTAL
                                        //MS TOTAL
                                        //MS TOTAL
                                    $msfilter = $con->prepare("SELECT mstotal1.mstotal2 + mstotal3.mstotal4 as mstotal FROM (
                                        SELECT COUNT(ms_name) as mstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan'
                                        ) as mstotal1,
                                        (
                                        SELECT COUNT(ms_name) as mstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan'
                                        ) as mstotal3 ");
                                    $msfilter->execute();
                                    $msfetch = $msfilter->fetchAll();

                                        foreach ($msfetch as $key => $row) {
                                            $bmstotal = $row['COUNT(ms_name)' + 'COUNT(mstotal)'];

                                            //DR QUERY
                                            //DR QUERY
                                            //DR QUERY
                                    $drfilter = $con->prepare("SELECT drtotal1.drtotal2 + drtotal3.drtotal4 as drtotal FROM (
                                        SELECT COUNT(dr_name) as drtotal2
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan'
                                        ) as drtotal1,
                                        (
                                        SELECT COUNT(dr_name) as drtotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan'
                                        ) as drtotal3 ");
                                    
                                        $drfilter->execute();
                                        $drfetch = $drfilter->fetchAll();

                                        foreach ($drfetch as $key => $row) {
                                            $bdrtotal = $row['COUNT(dr_name)' + 'COUNT(drtotal)'];
                                    ?>




                                    <!-- FORTUNE TOWNE -->
                                    <!-- FORTUNE TOWNE -->
                                    <!-- FORTUNE TOWNE -->
                                    <?php
                                    $bsfilter = $con->prepare("SELECT bstotal1.bstotal2 + bstotal3.bstotal4 as bstotal FROM (
                                        SELECT COUNT(bs_name) as bstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne'
                                        ) as bstotal1,
                                        (
                                        SELECT COUNT(bs_name) as bstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne'
                                        ) as bstotal3 ");
                                        $bsfilter->execute();
                                        $bsfetch = $bsfilter->fetchAll();

                                        foreach ($bsfetch as $key => $row) {
                                            $fbstotal = $row['COUNT(bs_name)' + 'COUNT(bstotal)'];


                                        //MS TOTAL
                                        //MS TOTAL
                                        //MS TOTAL
                                    $msfilter = $con->prepare("SELECT mstotal1.mstotal2 + mstotal3.mstotal4 as mstotal FROM (
                                        SELECT COUNT(ms_name) as mstotal2
                                        FROM   tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne'
                                        ) as mstotal1,
                                        (
                                        SELECT COUNT(ms_name) as mstotal4
                                        FROM   tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne'
                                        ) as mstotal3 ");
                                    $msfilter->execute();
                                    $msfetch = $msfilter->fetchAll();

                                        foreach ($msfetch as $key => $row) {
                                            $fmstotal = $row['COUNT(ms_name)' + 'COUNT(mstotal)'];

                                            //DR QUERY
                                            //DR QUERY
                                            //DR QUERY
                                    $drfilter = $con->prepare("SELECT drtotal1.drtotal2 + drtotal3.drtotal4 as drtotal FROM (
                                        SELECT COUNT(dr_name) as drtotal2
                                        FROM tbl_personnel WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne'
                                        ) as drtotal1,
                                        (
                                        SELECT COUNT(dr_name) as drtotal4
                                        FROM tbl_personnel_master_file WHERE date_modified >= '$d1' AND date_modified <= '$d2' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne'
                                        ) as drtotal3 ");
                                    
                                        $drfilter->execute();
                                        $drfetch = $drfilter->fetchAll();

                                        foreach ($drfetch as $key => $row) {
                                            $fdrtotal = $row['COUNT(dr_name)' + 'COUNT(drtotal)'];
                                    ?>

                                            <tr>
                                                <td>Bachelors Degree</td>
                                                <td><?php echo $bstotal; ?></td>
                                                <td><?php echo $abstotal; ?></td>
                                                <td><?php echo $bbstotal; ?></td>
                                                <td><?php echo $fbstotal; ?></td>
                                                <td><?php echo $bstotal + $abstotal + $bbstotal + $fbstotal; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Masteral Degree</td>
                                                <td><?php echo $mstotal; ?></td>
                                                <td><?php echo $amstotal; ?></td>
                                                <td><?php echo $bmstotal; ?></td>
                                                <td><?php echo $fmstotal; ?></td>
                                                <td><?php echo $mstotal + $amstotal + $bmstotal + $fmstotal; ?></td>
                                            </tr>
                                            <tr>
                                                <td>with MA / MS units</td>
                                                <td><?php echo $mstotal; ?></td>
                                                <td><?php echo $amstotal; ?></td>
                                                <td><?php echo $bmstotal; ?></td>
                                                <td><?php echo $fmstotal; ?></td>
                                                <td><?php echo $mstotal + $amstotal + $bmstotal + $fmstotal; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Doctorate Degree</td>
                                                <td><?php echo $drtotal; ?></td>
                                                <td><?php echo $adrtotal; ?></td>
                                                <td><?php echo $bdrtotal; ?></td>
                                                <td><?php echo $fdrtotal; ?></td>
                                                <td><?php echo $drtotal + $adrtotal + $bdrtotal + $fdrtotal; ?></td>
                                            </tr>
                                            <tr>
                                                <td>with Ph.D. / Ed. D. units</td>
                                                <td><?php echo $mstotal; ?></td>
                                                <td><?php echo $amstotal; ?></td>
                                                <td><?php echo $bmstotal; ?></td>
                                                <td><?php echo $fmstotal; ?></td>
                                                <td><?php echo $mstotal + $amstotal + $bmstotal + $fmstotal; ?></td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL</td>
                                                <td><?php echo $bstotal + $mstotal + $drtotal; ?></td>
                                                <td><?php echo $abstotal + $amstotal + $adrtotal; ?></td>
                                                <td><?php echo $bbstotal + $bmstotal + $bdrtotal; ?></td>
                                                <td><?php echo $fbstotal + $fmstotal + $fdrtotal; ?></td>
                                                <td><?php echo $bstotal + $mstotal + $drtotal + $abstotal + $amstotal + $adrtotal + $bbstotal + $bmstotal + $bdrtotal + $fbstotal + $fmstotal + $fdrtotal; ?></td>
                                            </tr>

                                <?php } } } ?>
                                <?php } } } ?>
                                <?php } } } ?>
                                <?php } } } ?>
                                </tbody>
                                </table>
                                <?php } else { ?>
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <th >Educational Qualifications</th>
                                        <th >Talisay</th>
                                        <th >Alijis</th>
                                        <th >Binalbagan</th>
                                        <th >Fortune Towne</th>                                  
                                        <th >Total</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>

                                <!-- TALISAY -->
                                <!-- TALISAY -->
                                <!-- TALISAY -->
                                <?php
                                include('connect.php');

                                //BS COMPLETE
                                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay' ");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $ctotal = $row['COUNT(DISTINCT bs_name)'];


                                //MS WITH UNIT
                                $wdisplay = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay' AND ms_with_unit <> ' ' ");
                                    $wdisplay->execute();
                                    $wfetch = $wdisplay->fetchAll();

                                foreach($wfetch as $key => $row) { 
                                   $wtotal2 = $row['COUNT(DISTINCT ms_name)'];

                                   $total = $ctotal + $wtotal2;
                                
                                //MS COMPLETE
                                 $display2 = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_id<>0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay' ");
                                    $display2->execute();
                                    $fetch2 = $display2->fetchAll();

                                foreach($fetch2 as $key => $row2) { 
                                   $total2 = $row2['COUNT(DISTINCT ms_name)'];

                                   $mttotal2 = $total2 - $wtotal2;


                                //DR WITH UNIT
                                $ddisplay = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay' AND dr_with_unit <> ' ' ");
                                    $ddisplay->execute();
                                    $dfetch = $ddisplay->fetchAll();

                                foreach($dfetch as $key => $row) { 
                                   $dtotal2 = $row['COUNT(DISTINCT dr_name)'];


                                //DR COMPLETE
                                 $display3 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_id<>0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Talisay' ");
                                    $display3->execute();
                                    $fetch3 = $display3->fetchAll();

                                foreach($fetch3 as $key => $row3) { 
                                   $total3 = $row3['COUNT(DISTINCT dr_name)'];

                                   $dttotal2 = $total3 - $dtotal2;

                                ?>


                                <!-- Alijis -->
                                <!-- Alijis -->
                                <!-- Alijis -->
                                <?php
                                include('connect.php');

                                //BS COMPLETE
                                 $adisplay = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis' ");
                                    $adisplay->execute();
                                    $fetch = $adisplay->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $actotal = $row['COUNT(DISTINCT bs_name)'];

                                   

                                //MS WITH UNIT
                                $awdisplay = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis' AND ms_with_unit <> ' ' ");
                                    $awdisplay->execute();
                                    $awfetch = $awdisplay->fetchAll();

                                foreach($awfetch as $key => $row) { 
                                   $awtotal2 = $row['COUNT(DISTINCT ms_name)'];

                                    $atotal = $awtotal2 + $actotal;

                                //MS COMPLETE
                                 $adisplay2 = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_id<>0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis' ");
                                    $adisplay2->execute();
                                    $afetch2 = $adisplay2->fetchAll();

                                foreach($afetch2 as $key => $row2) { 
                                   $atotal2 = $row2['COUNT(DISTINCT ms_name)'];

                                   $amttotal2 = $atotal2 - $awtotal2;


                                //DR WITH UNIT
                                $addisplay = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis' AND dr_with_unit <> ' ' ");
                                    $addisplay->execute();
                                    $adfetch = $addisplay->fetchAll();

                                foreach($adfetch as $key => $row) { 
                                   $adtotal2 = $row['COUNT(DISTINCT dr_name)'];


                                //DR COMPLETE
                                 $adisplay3 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_id<>0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Alijis' ");
                                    $adisplay3->execute();
                                    $afetch3 = $adisplay3->fetchAll();

                                foreach($afetch3 as $key => $row3) { 
                                   $atotal3 = $row3['COUNT(DISTINCT dr_name)'];

                                   $adttotal2 = $atotal3 - $adtotal2;

                                ?>



                                <!-- Binalbagan -->
                                <!-- Binalbagan -->
                                <!-- Binalbagan -->
                                <?php
                                include('connect.php');

                                //BS COMPLETE
                                 $bdisplay = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan' ");
                                    $bdisplay->execute();
                                    $bfetch = $bdisplay->fetchAll();

                                foreach($bfetch as $key => $row) { 
                                   $btotal = $row['COUNT(DISTINCT bs_name)'];


                                //MS WITH UNIT
                                $bwdisplay = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan' AND ms_with_unit <> ' ' ");
                                    $bwdisplay->execute();
                                    $bwfetch = $bwdisplay->fetchAll();

                                foreach($bwfetch as $key => $row) { 
                                   $bwtotal2 = $row['COUNT(DISTINCT ms_name)'];

                                
                                //MS COMPLETE
                                 $bdisplay2 = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_id<>0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan' ");
                                    $bdisplay2->execute();
                                    $bfetch2 = $bdisplay2->fetchAll();

                                foreach($bfetch2 as $key => $row2) { 
                                   $btotal2 = $row2['COUNT(DISTINCT ms_name)'];

                                   $bmttotal2 = $btotal2 - $bwtotal2;


                                //DR WITH UNIT
                                $bddisplay = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan' AND dr_with_unit <> ' ' ");
                                    $bddisplay->execute();
                                    $bdfetch = $bddisplay->fetchAll();

                                foreach($bdfetch as $key => $row) { 
                                   $bdtotal2 = $row['COUNT(DISTINCT dr_name)'];


                                //DR COMPLETE
                                 $bdisplay3 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_id<>0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Binalbagan' ");
                                    $bdisplay3->execute();
                                    $bfetch3 = $bdisplay3->fetchAll();

                                foreach($bfetch3 as $key => $row3) { 
                                   $btotal3 = $row3['COUNT(DISTINCT dr_name)'];

                                   $bdttotal2 = $btotal3 - $bdtotal2;

                                ?>


                                <!-- Fortune Towne -->
                                <!-- Fortune Towne -->
                                <!-- Fortune Towne -->
                                <?php
                                include('connect.php');

                                //BS COMPLETE
                                 $fdisplay = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne' ");
                                    $fdisplay->execute();
                                    $ffetch = $fdisplay->fetchAll();

                                foreach($ffetch as $key => $row) { 
                                   $ftotal = $row['COUNT(DISTINCT bs_name)'];


                                //MS WITH UNIT
                                $fwdisplay = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne' AND ms_with_unit <> ' ' ");
                                    $fwdisplay->execute();
                                    $fwfetch = $fwdisplay->fetchAll();

                                foreach($fwfetch as $key => $row) { 
                                   $fwtotal2 = $row['COUNT(DISTINCT ms_name)'];

                                
                                //MS COMPLETE
                                 $fdisplay2 = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_id<>0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne' ");
                                    $fdisplay2->execute();
                                    $ffetch2 = $fdisplay2->fetchAll();

                                foreach($ffetch2 as $key => $row2) { 
                                   $ftotal2 = $row2['COUNT(DISTINCT ms_name)'];

                                   $fmttotal2 = $ftotal2 - $fwtotal2;


                                //DR WITH UNIT
                                $fddisplay = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_id <> 0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne' AND dr_with_unit <> ' ' ");
                                    $fddisplay->execute();
                                    $fdfetch = $fddisplay->fetchAll();

                                foreach($bdfetch as $key => $row) { 
                                   $fdtotal2 = $row['COUNT(DISTINCT dr_name)'];


                                //DR COMPLETE
                                 $fdisplay3 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_id<>0 AND per_designation in ('Permanent' , 'Part Time') AND per_campus = 'Fortune Towne' ");
                                    $fdisplay3->execute();
                                    $ffetch3 = $fdisplay3->fetchAll();

                                foreach($ffetch3 as $key => $row3) { 
                                   $ftotal3 = $row3['COUNT(DISTINCT dr_name)'];

                                   $fdttotal2 = $ftotal3 - $fdtotal2;

                                ?>
                                <td>Bachelors Degree</td>
                                    <td><?php echo $total; ?></td>
                                    <td><?php echo $atotal; ?></td>
                                    <td><?php echo $btotal; ?></td>
                                    <td><?php echo $ftotal; ?></td>
                                    <td><?php echo $total + $atotal + $btotal + $ftotal; ?></td>
                                </tr>
                                <tr>
                                    <td>Masterals Degree</td>
                                    <td><?php echo $mttotal2; ?></td>
                                    <td><?php echo $amttotal2; ?></td>
                                    <td><?php echo $btotal2; ?></td>
                                    <td><?php echo $ftotal2; ?></td>
                                    <td><?php echo $mttotal2 + $amttotal2 + $btotal2 + $ftotal2; ?></td>
                                </tr>
                                <tr>
                                    <td>with MA / MS units</td>
                                    <td><?php echo $wtotal2; ?></td>
                                    <td><?php echo $awtotal2; ?></td>
                                    <td><?php echo $bwtotal2; ?></td>
                                    <td><?php echo $fwtotal2; ?></td>
                                    <td><?php echo $wtotal2 + $awtotal2 + $bwtotal2 + $fwtotal2; ?></td>
                                </tr>
                                <tr>
                                    <td>Doctorals Degree</td>
                                    <td><?php echo $total3; ?></td>
                                    <td><?php echo $atotal3; ?></td>
                                    <td><?php echo $btotal3; ?></td>
                                    <td><?php echo $ftotal3; ?></td>
                                    <td><?php echo $total3 + $atotal3 + $btotal3 + $ftotal3; ?></td>
                                </tr>
                                <tr>
                                    <td>with Ph. D. / Ed. D. units</td>
                                    <td><?php echo $dtotal2; ?></td>
                                    <td><?php echo $adtotal2; ?></td>
                                    <td><?php echo $bdtotal2; ?></td>
                                    <td><?php echo $fdtotal2; ?></td>
                                    <td><?php echo $dtotal2 + $adtotal2 + $bdtotal2 + $fdtotal2; ?></td>
                                </tr>
                                <tr>
                                    <td>TOTAL</td>
                                    <td><?php echo $total + $mttotal2 + $total3; ?></td>
                                    <td><?php echo $atotal + $atotal2 + $atotal3; ?></td>
                                    <td><?php echo $btotal + $btotal2 + $btotal3; ?></td>
                                    <td><?php echo $ftotal + $ftotal2 + $ftotal3; ?></td>
                                    <td><?php echo $total + $total2 + $total3 + $atotal + $atotal2 + $atotal3 + $btotal + $btotal2 + $btotal3 + $ftotal + $ftotal2 + $ftotal3; ?></td>
                                </tr>   
                                </tbody>
                            </table>
                            <?php } } } } } ?>
                            <?php } } } } } ?>
                            <?php } } } } } ?>
                            <?php } } } } } }?>
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