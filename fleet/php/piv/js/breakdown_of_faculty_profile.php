<?php include ('header.php'); ?>
 <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>BREAKDOWN OF FACULTY PROFILE</h4>
                                <a href="print_breakdown_of_faculty_profile.php">
                                    <input type="button" value="Print" class="print">
                                </a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="scroll">
                                <table class="table table-bordered" id="countit">
                                	<thead>
                                        <tr>
                                            <th colspan="2" class="text-center">
                                                TALISAY CAMPUS
                                            </th>
                                            <th colspan="23" class="text-center">
                                            Academic Rank
                                            </th>
                                        </tr>
                                        
                                        <tr>
                                            <th>DEGREE</th>
                                            <th>Qty.</th>
                                            <?php
                                            include('connect.php');
                                             $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];
                                                ?>
                                            <th value="<?php echo $rank_id; ?>"> <?php echo $row['rank_name']; ?></th>
                                        <?php }?>
                                            <th>Total</th>

                                        </tr>
                                        <!-- BS Name Talisay-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' and bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty1 = $row1['count(bs_name)'];
                                            }?>
                                        <td>BS</td>
                                        <td><?php echo $qty1; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tbs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '$rank_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND per_designation in ('Permanent' , 'Part Time')");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                            foreach($ftbs as $key => $row2) { 
                                               $total1 = $row2['COUNT(bs_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total1; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty1; ?></td>
                                        </tr>
                                        <!-- END BS Name Talisay-->
                                        <!-- MS Name Talisay-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' and ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty2 = $row1['count(ms_name)'];
                                            }?>
                                        <td>MS</td>
                                        <td><?php echo $qty2; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '$rank_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tms->execute();
                                                $ftms = $tms->fetchAll();

                                            foreach($ftms as $key => $row3) { 
                                               $total2 = $row3['COUNT(ms_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total2; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty2; ?></td>
                                        </tr>
                                        <!-- END MS Name Talisay-->
                                        <!-- DR Name Talisay-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' and dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty3 = $row1['count(dr_name)'];
                                            }?>
                                        <td>DR</td>
                                        <td><?php echo $qty3; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tdr = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '$rank_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tdr->execute();
                                                $ftdr = $tdr->fetchAll();

                                            foreach($ftdr as $key => $row4) { 
                                               $total3 = $row4['COUNT(dr_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total3; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty3; ?></td>
                                        </tr>
                                        <td>TOTAL</td>
                                        <!-- END DR Name Talisay-->
                                        <td><?php echo $qty1 + $qty2 + $qty3; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];


                                                $tbs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '$rank_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                            foreach($ftbs as $key => $row2) { 
                                               $total1 = $row2['COUNT(bs_name)'];

                                                $tms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '$rank_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tms->execute();
                                                $ftms = $tms->fetchAll();

                                            foreach($ftms as $key => $row3) { 
                                               $total2 = $row3['COUNT(ms_name)'];

                                                $tdr = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '$rank_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tdr->execute();
                                                $ftdr = $tdr->fetchAll();

                                            foreach($ftdr as $key => $row4) { 
                                               $total3 = $row4['COUNT(dr_name)'];
                                        ?>
                                        <td><?php echo $total1 + $total2 + $total3; ?></td>
                                        <?php } } } } ?>
                                        <td><?php echo $qty1 + $qty2 + $qty3; ?></td>
                                        <tr></tr>
                                </table>
                            </div>
                            <br>
                            <br>
                            <div class="scroll">
                                <table class="table table-bordered" id="countit">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="text-center">
                                                ALIJIS CAMPUS
                                            </th>
                                            <th colspan="23" class="text-center">
                                            Academic Rank
                                            </th>
                                        </tr>
                                        
                                        <tr>
                                            <th>DEGREE</th>
                                            <th>Qty.</th>
                                            <?php
                                            include('connect.php');
                                             $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];
                                                ?>
                                            <th value="<?php echo $rank_id; ?>"> <?php echo $row['rank_name']; ?></th>
                                        <?php }?>
                                            <th>Total</th>

                                        </tr>
                                        <!-- BS Name Alijis-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' and bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty1 = $row1['count(bs_name)'];
                                            }?>
                                        <td>BS</td>
                                        <td><?php echo $qty1; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tbs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '$rank_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                            foreach($ftbs as $key => $row2) { 
                                               $total1 = $row2['COUNT(bs_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total1; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty1; ?></td>
                                        </tr>
                                        <!-- END BS Name Alijis-->
                                        <!-- MS Name Alijis-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' and ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty2 = $row1['count(ms_name)'];
                                            }?>
                                        <td>MS</td>
                                        <td><?php echo $qty2; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '$rank_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tms->execute();
                                                $ftms = $tms->fetchAll();

                                            foreach($ftms as $key => $row3) { 
                                               $total2 = $row3['COUNT(ms_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total2; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty2; ?></td>
                                        </tr>
                                        <!-- END MS Name Alijis-->
                                        <!-- DR Name Alijis-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' and dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty3 = $row1['count(dr_name)'];
                                            }?>
                                        <td>DR</td>
                                        <td><?php echo $qty3; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tdr = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '$rank_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tdr->execute();
                                                $ftdr = $tdr->fetchAll();

                                            foreach($ftdr as $key => $row4) { 
                                               $total3 = $row4['COUNT(dr_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total3; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty3; ?></td>
                                        </tr>
                                        <td>TOTAL</td>
                                        <!-- END DR Name Alijis-->
                                        <td><?php echo $qty1 + $qty2 + $qty3; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];


                                                $tbs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '$rank_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                            foreach($ftbs as $key => $row2) { 
                                               $total1 = $row2['COUNT(bs_name)'];

                                                $tms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '$rank_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tms->execute();
                                                $ftms = $tms->fetchAll();

                                            foreach($ftms as $key => $row3) { 
                                               $total2 = $row3['COUNT(ms_name)'];

                                                $tdr = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '$rank_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tdr->execute();
                                                $ftdr = $tdr->fetchAll();

                                            foreach($ftdr as $key => $row4) { 
                                               $total3 = $row4['COUNT(dr_name)'];
                                        ?>
                                        <td><?php echo $total1 + $total2 + $total3; ?></td>
                                        <?php } } } } ?>
                                        <td><?php echo $qty1 + $qty2 + $qty3; ?></td>
                                        <tr></tr>
                                </table>
                            </div>
                            <br>
                            <br>
                            <div class="scroll">
                                <table class="table table-bordered" id="countit">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="text-center">
                                                Fortune Towne CAMPUS
                                            </th>
                                            <th colspan="23" class="text-center">
                                            Academic Rank
                                            </th>
                                        </tr>
                                        
                                        <tr>
                                            <th>DEGREE</th>
                                            <th>Qty.</th>
                                            <?php
                                            include('connect.php');
                                             $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];
                                                ?>
                                            <th value="<?php echo $rank_id; ?>"> <?php echo $row['rank_name']; ?></th>
                                        <?php }?>
                                            <th>Total</th>

                                        </tr>
                                        <!-- BS Name Fortune Towne-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' and bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty1 = $row1['count(bs_name)'];
                                            }?>
                                        <td>BS</td>
                                        <td><?php echo $qty1; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tbs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '$rank_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                            foreach($ftbs as $key => $row2) { 
                                               $total1 = $row2['COUNT(bs_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total1; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty1; ?></td>
                                        </tr>
                                        <!-- END BS Name Fortune Towne-->
                                        <!-- MS Name Fortune Towne-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' and ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty2 = $row1['count(ms_name)'];
                                            }?>
                                        <td>MS</td>
                                        <td><?php echo $qty2; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '$rank_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tms->execute();
                                                $ftms = $tms->fetchAll();

                                            foreach($ftms as $key => $row3) { 
                                               $total2 = $row3['COUNT(ms_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total2; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty2; ?></td>
                                        </tr>
                                        <!-- END MS Name Fortune Towne-->
                                        <!-- DR Name Fortune Towne-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' and dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty3 = $row1['count(dr_name)'];
                                            }?>
                                        <td>DR</td>
                                        <td><?php echo $qty3; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tdr = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '$rank_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tdr->execute();
                                                $ftdr = $tdr->fetchAll();

                                            foreach($ftdr as $key => $row4) { 
                                               $total3 = $row4['COUNT(dr_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total3; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty3; ?></td>
                                        </tr>
                                        <td>TOTAL</td>
                                        <!-- END DR Name Fortune Towne-->
                                        <td><?php echo $qty1 + $qty2 + $qty3; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];


                                                $tbs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '$rank_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                            foreach($ftbs as $key => $row2) { 
                                               $total1 = $row2['COUNT(bs_name)'];

                                                $tms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '$rank_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tms->execute();
                                                $ftms = $tms->fetchAll();

                                            foreach($ftms as $key => $row3) { 
                                               $total2 = $row3['COUNT(ms_name)'];

                                                $tdr = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '$rank_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tdr->execute();
                                                $ftdr = $tdr->fetchAll();

                                            foreach($ftdr as $key => $row4) { 
                                               $total3 = $row4['COUNT(dr_name)'];
                                        ?>
                                        <td><?php echo $total1 + $total2 + $total3; ?></td>
                                        <?php } } } } ?>
                                        <td><?php echo $qty1 + $qty2 + $qty3; ?></td>
                                        <tr></tr>
                                </table>
                            </div>
                            <br>
                            <br>
                            <div class="scroll">
                                <table class="table table-bordered" id="countit">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="text-center">
                                                Binalbagan CAMPUS
                                            </th>
                                            <th colspan="23" class="text-center">
                                            Academic Rank
                                            </th>
                                        </tr>
                                        
                                        <tr>
                                            <th>DEGREE</th>
                                            <th>Qty.</th>
                                            <?php
                                            include('connect.php');
                                             $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];
                                                ?>
                                            <th value="<?php echo $rank_id; ?>"> <?php echo $row['rank_name']; ?></th>
                                        <?php }?>
                                            <th>Total</th>

                                        </tr>
                                        <!-- BS Name Binalbagan-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' and bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty1 = $row1['count(bs_name)'];
                                            }?>
                                        <td>BS</td>
                                        <td><?php echo $qty1; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tbs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '$rank_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                            foreach($ftbs as $key => $row2) { 
                                               $total1 = $row2['COUNT(bs_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total1; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty1; ?></td>
                                        </tr>
                                        <!-- END BS Name Binalbagan-->
                                        <!-- MS Name Binalbagan-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' and ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty2 = $row1['count(ms_name)'];
                                            }?>
                                        <td>MS</td>
                                        <td><?php echo $qty2; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '$rank_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tms->execute();
                                                $ftms = $tms->fetchAll();

                                            foreach($ftms as $key => $row3) { 
                                               $total2 = $row3['COUNT(ms_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total2; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty2; ?></td>
                                        </tr>
                                        <!-- END MS Name Binalbagan-->
                                        <!-- DR Name Binalbagan-->
                                        <tr>
                                        <?php
                                        include('connect.php');
                                         $qty = $con->prepare("SELECT count(dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' and dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                            $qty->execute();
                                            $fqty = $qty->fetchAll();

                                        foreach($fqty as $key => $row1) { 
                                           $qty3 = $row1['count(dr_name)'];
                                            }?>
                                        <td>DR</td>
                                        <td><?php echo $qty3; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];

                                                $tdr = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '$rank_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tdr->execute();
                                                $ftdr = $tdr->fetchAll();

                                            foreach($ftdr as $key => $row4) { 
                                               $total3 = $row4['COUNT(dr_name)'];
                                        ?>
                                        <td class="count-me"><?php echo $total3; ?></td>
                                        <?php } } ?>
                                        <td><?php echo $qty3; ?></td>
                                        </tr>
                                        <td>TOTAL</td>
                                        <!-- END DR Name Binalbagan-->
                                        <td><?php echo $qty1 + $qty2 + $qty3; ?></td>
                                        <?php
                                            include('connect.php');
                                            $display = $con->prepare("SELECT * FROM tbl_academic_rank ");
                                                $display->execute();
                                                $fetch = $display->fetchAll(); 
                                                    foreach ($fetch as $key => $row) {
                                                        $rank_id = $row['rank_id'];


                                                $tbs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '$rank_id' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tbs->execute();
                                                $ftbs = $tbs->fetchAll();

                                            foreach($ftbs as $key => $row2) { 
                                               $total1 = $row2['COUNT(bs_name)'];

                                                $tms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '$rank_id' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tms->execute();
                                                $ftms = $tms->fetchAll();

                                            foreach($ftms as $key => $row3) { 
                                               $total2 = $row3['COUNT(ms_name)'];

                                                $tdr = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '$rank_id' AND dr_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') ");
                                                $tdr->execute();
                                                $ftdr = $tdr->fetchAll();

                                            foreach($ftdr as $key => $row4) { 
                                               $total3 = $row4['COUNT(dr_name)'];
                                        ?>
                                        <td><?php echo $total1 + $total2 + $total3; ?></td>
                                        <?php } } } } ?>
                                        <td><?php echo $qty1 + $qty2 + $qty3; ?></td>
                                        <tr></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script src = "js/jquery.min.js"></script>
<?php include('script.php'); ?>