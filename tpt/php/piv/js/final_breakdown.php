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
                                <a href="print_retirement_table.php">
                                    <input type="button" value="Print" class="print">
                                </a>
                            </div>
                        </div>
                              <div class="body">
                        <div class="scroll">
                            <table class="table table-bordered">
                            	<thead>
                                    <tr>
                                        <th colspan="2" class="text-center">
                                            TALISAY CAMPUS
                                        </th>
                                        <th colspan="18" class="text-center">
                                        Academic Rank
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                        <th>DEGREE</th>
                                        <th>Qty.</th>
                                        <th >Prof 1</th>
                                        <th >Prof 2</th>
                                        <th >Prof 3</th>
                                        <th >Prof 4</th>
                                        <th> Asso. Prof. 1</th>    
                                        <th> Asso. Prof. 2</th>    
                                        <th> Asso. Prof. 3</th>    
                                        <th> Asso. Prof. 4</th>
                                        <th> Asso. Prof. 5</th>
                                        <th>Assist. Prof 1</th>
                                        <th>Assist. Prof 2</th>
                                        <th>Assist. Prof 3</th>
                                        <th>Assist. Prof 4</th>
                                        <th>Inst. 1</th>
                                        <th>Inst. 2</th>
                                        <th>Inst. 3</th>
                                        <th>Inst. 4</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display = $con->prepare("SELECT count(bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' and bs_name <> ' '");
                                        $display->execute();
                                        $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { 
                                       $total = $row['count(bs_name)'];
                                        }?>
                                    <td>BS</td>
                                    <td><?php echo $total; ?></td>
                                    <!--Professor 1-->
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '18' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof1 = $row['COUNT(bs_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '19' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '20' AND bs_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '21' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '13' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '14' AND bs_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '15' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '16' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '17' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof5 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '9' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '10' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '11' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '12' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '1' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '2' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '3' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '4' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <td><?php echo $bsprof1; ?></td>
                                    <td><?php echo $bsprof2; ?></td>
                                    <td><?php echo $bsprof3; ?></td>
                                    <td><?php echo $bsprof4; ?></td>
                                    <td><?php echo $bsassoprof1; ?></td>
                                    <td><?php echo $bsassoprof2; ?></td>
                                    <td><?php echo $bsassoprof3; ?></td>
                                    <td><?php echo $bsassoprof4; ?></td>
                                    <td><?php echo $bsassoprof5; ?></td>
                                    <td><?php echo $bsassistprof1; ?></td>
                                    <td><?php echo $bsassistprof2; ?></td>
                                    <td><?php echo $bsassistprof3; ?></td>
                                    <td><?php echo $bsassistprof4; ?></td>
                                    <td><?php echo $bsinstructor1; ?></td>
                                    <td><?php echo $bsinstructor2; ?></td>
                                    <td><?php echo $bsinstructor3; ?></td>
                                    <td><?php echo $bsinstructor4; ?></td>
                                    <td><?php echo $total; ?>
                                    </td>
                                    </tr>
                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display2 = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND ms_name <> ' '");
                                        $display2->execute();
                                        $fetch2 = $display2->fetchAll();

                                    foreach($fetch2 as $key => $row2) { 
                                       $total2 = $row2['COUNT( ms_name)'];

                                        }?>
                                    <td>MA/MS</td>
                                    <td><?php echo $total2; ?></td>
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '18' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof1 = $row['COUNT(ms_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '19' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '20' AND ms_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '21' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '13' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '14' AND ms_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '15' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '16' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '17' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof5 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '9' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '10' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '11' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '12' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '1' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '2' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '3' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '4' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <td><?php echo $msprof1; ?></td>
                                    <td><?php echo $msprof2; ?></td>
                                    <td><?php echo $msprof3; ?></td>
                                    <td><?php echo $msprof4; ?></td>
                                    <td><?php echo $msassoprof1; ?></td>
                                    <td><?php echo $msassoprof2; ?></td>
                                    <td><?php echo $msassoprof3; ?></td>
                                    <td><?php echo $msassoprof4; ?></td>
                                    <td><?php echo $msassoprof5; ?></td>
                                    <td><?php echo $msassistprof1; ?></td>
                                    <td><?php echo $msassistprof2; ?></td>
                                    <td><?php echo $msassistprof3; ?></td>
                                    <td><?php echo $msassistprof4; ?></td>
                                    <td><?php echo $msinstructor1; ?></td>
                                    <td><?php echo $msinstructor2; ?></td>
                                    <td><?php echo $msinstructor3; ?></td>
                                    <td><?php echo $msinstructor4; ?></td>
                                    <td><?php echo $total2; ?>
                                    </td>
                                    </tr>

                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display3 = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND dr_name <> ' '");
                                        $display3->execute();
                                        $fetch3 = $display3->fetchAll();

                                    foreach($fetch3 as $key => $row3) { 
                                       $total3 = $row3['COUNT( dr_name)'];

                                        }?>
                                    <td>PhD/EdD</td>
                                    <td><?php echo $total3; ?></td>
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '18' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof1 = $row['COUNT(dr_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '19' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '20' AND dr_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '21' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '13' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '14' AND dr_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '15' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '16' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '17' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof5 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '9' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '10' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '11' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '12' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '1' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '2' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '3' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND rank_id = '4' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <td><?php echo $drprof1; ?></td>
                                    <td><?php echo $drprof2; ?></td>
                                    <td><?php echo $drprof3; ?></td>
                                    <td><?php echo $drprof4; ?></td>
                                    <td><?php echo $drassoprof1; ?></td>
                                    <td><?php echo $drassoprof2; ?></td>
                                    <td><?php echo $drassoprof3; ?></td>
                                    <td><?php echo $drassoprof4; ?></td>
                                    <td><?php echo $drassoprof5; ?></td>
                                    <td><?php echo $drassistprof1; ?></td>
                                    <td><?php echo $drassistprof2; ?></td>
                                    <td><?php echo $drassistprof3; ?></td>
                                    <td><?php echo $drassistprof4; ?></td>
                                    <td><?php echo $drinstructor1; ?></td>
                                    <td><?php echo $drinstructor2; ?></td>
                                    <td><?php echo $drinstructor3; ?></td>
                                    <td><?php echo $drinstructor4; ?></td>
                                    <td><?php echo $total3; ?></td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td><?php echo $total + $total2 + $total3; ?></td>
                                        <td><?php echo $bsprof1 + $msprof1 + $drprof1; ?></td>
                                        <td><?php echo $bsprof2 + $msprof2 + $drprof2; ?></td>
                                        <td><?php echo $bsprof3 + $msprof3 + $drprof3; ?></td>
                                        <td><?php echo $bsprof4 + $msprof4 + $drprof4; ?></td>
                                        <td><?php echo $bsassoprof1 + $msassoprof1 + $drassoprof1; ?></td>
                                        <td><?php echo $bsassoprof2 + $msassoprof2 + $drassoprof2; ?></td>
                                        <td><?php echo $bsassoprof3 + $msassoprof3 + $drassoprof3; ?></td>
                                        <td><?php echo $bsassoprof4 + $msassoprof4 + $drassoprof4; ?></td>
                                        <td><?php echo $bsassoprof5 + $msassoprof5 + $drassoprof5; ?></td>
                                        <td><?php echo $bsassistprof1 + $msassistprof1 + $drassistprof1; ?></td>
                                        <td><?php echo $bsassistprof2 + $msassistprof2 + $drassistprof2; ?></td>
                                        <td><?php echo $bsassistprof3 + $msassistprof3 + $drassistprof3; ?></td>
                                        <td><?php echo $bsassistprof4 + $msassistprof4 + $drassistprof4; ?></td>
                                        <td><?php echo $bsinstructor1 + $msinstructor1 + $drinstructor1; ?></td>
                                        <td><?php echo $bsinstructor2 + $msinstructor2 + $drinstructor2; ?></td>
                                        <td><?php echo $bsinstructor3 + $msinstructor3 + $drinstructor3; ?></td>
                                        <td><?php echo $bsinstructor4 + $msinstructor4 + $drinstructor4; ?></td>
                                        <td><?php echo $total + $total2 + $total3; ?></td>
                                    </tr> 
                            </table>
                        </div>
                        <br>
                        <br>
                        <div class="scroll">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center">
                                            ALIJIS CAMPUS
                                        </th>
                                        <th colspan="18" class="text-center">
                                        Academic Rank
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                        <th>DEGREE</th>
                                        <th>Qty.</th>
                                        <th >Prof 1</th>
                                        <th >Prof 2</th>
                                        <th >Prof 3</th>
                                        <th >Prof 4</th>
                                        <th> Asso. Prof. 1</th>    
                                        <th> Asso. Prof. 2</th>    
                                        <th> Asso. Prof. 3</th>    
                                        <th> Asso. Prof. 4</th>
                                        <th> Asso. Prof. 5</th>
                                        <th>Assist. Prof 1</th>
                                        <th>Assist. Prof 2</th>
                                        <th>Assist. Prof 3</th>
                                        <th>Assist. Prof 4</th>
                                        <th>Inst. 1</th>
                                        <th>Inst. 2</th>
                                        <th>Inst. 3</th>
                                        <th>Inst. 4</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display = $con->prepare("SELECT count(bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' and bs_name <> ' '");
                                        $display->execute();
                                        $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { 
                                       $total = $row['count(bs_name)'];
                                        }?>
                                    <td>BS</td>
                                    <td><?php echo $total; ?></td>
                                    <!--Professor 1-->
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '18' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof1 = $row['COUNT(bs_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '19' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '20' AND bs_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '21' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '13' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '14' AND bs_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '15' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '16' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '17' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof5 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '9' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '10' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '11' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '12' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '1' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '2' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '3' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '4' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <td><?php echo $bsprof1; ?></td>
                                    <td><?php echo $bsprof2; ?></td>
                                    <td><?php echo $bsprof3; ?></td>
                                    <td><?php echo $bsprof4; ?></td>
                                    <td><?php echo $bsassoprof1; ?></td>
                                    <td><?php echo $bsassoprof2; ?></td>
                                    <td><?php echo $bsassoprof3; ?></td>
                                    <td><?php echo $bsassoprof4; ?></td>
                                    <td><?php echo $bsassoprof5; ?></td>
                                    <td><?php echo $bsassistprof1; ?></td>
                                    <td><?php echo $bsassistprof2; ?></td>
                                    <td><?php echo $bsassistprof3; ?></td>
                                    <td><?php echo $bsassistprof4; ?></td>
                                    <td><?php echo $bsinstructor1; ?></td>
                                    <td><?php echo $bsinstructor2; ?></td>
                                    <td><?php echo $bsinstructor3; ?></td>
                                    <td><?php echo $bsinstructor4; ?></td>
                                    <td><?php echo $total; ?>
                                    </td>
                                    </tr>
                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display2 = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND ms_name <> ' '");
                                        $display2->execute();
                                        $fetch2 = $display2->fetchAll();

                                    foreach($fetch2 as $key => $row2) { 
                                       $total2 = $row2['COUNT( ms_name)'];

                                        }?>
                                    <td>MA/MS</td>
                                    <td><?php echo $total2; ?></td>
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '18' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof1 = $row['COUNT(ms_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '19' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '20' AND ms_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '21' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '13' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '14' AND ms_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '15' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '16' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '17' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof5 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '9' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '10' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '11' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '12' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '1' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '2' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '3' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '4' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <td><?php echo $msprof1; ?></td>
                                    <td><?php echo $msprof2; ?></td>
                                    <td><?php echo $msprof3; ?></td>
                                    <td><?php echo $msprof4; ?></td>
                                    <td><?php echo $msassoprof1; ?></td>
                                    <td><?php echo $msassoprof2; ?></td>
                                    <td><?php echo $msassoprof3; ?></td>
                                    <td><?php echo $msassoprof4; ?></td>
                                    <td><?php echo $msassoprof5; ?></td>
                                    <td><?php echo $msassistprof1; ?></td>
                                    <td><?php echo $msassistprof2; ?></td>
                                    <td><?php echo $msassistprof3; ?></td>
                                    <td><?php echo $msassistprof4; ?></td>
                                    <td><?php echo $msinstructor1; ?></td>
                                    <td><?php echo $msinstructor2; ?></td>
                                    <td><?php echo $msinstructor3; ?></td>
                                    <td><?php echo $msinstructor4; ?></td>
                                    <td><?php echo $total2; ?>
                                    </td>
                                    </tr>

                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display3 = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND dr_name <> ' '");
                                        $display3->execute();
                                        $fetch3 = $display3->fetchAll();

                                    foreach($fetch3 as $key => $row3) { 
                                       $total3 = $row3['COUNT( dr_name)'];

                                        }?>
                                    <td>PhD/EdD</td>
                                    <td><?php echo $total3; ?></td>
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '18' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof1 = $row['COUNT(dr_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '19' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '20' AND dr_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '21' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '13' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '14' AND dr_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '15' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '16' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '17' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof5 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '9' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '10' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '11' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '12' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '1' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '2' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '3' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND rank_id = '4' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <td><?php echo $drprof1; ?></td>
                                    <td><?php echo $drprof2; ?></td>
                                    <td><?php echo $drprof3; ?></td>
                                    <td><?php echo $drprof4; ?></td>
                                    <td><?php echo $drassoprof1; ?></td>
                                    <td><?php echo $drassoprof2; ?></td>
                                    <td><?php echo $drassoprof3; ?></td>
                                    <td><?php echo $drassoprof4; ?></td>
                                    <td><?php echo $drassoprof5; ?></td>
                                    <td><?php echo $drassistprof1; ?></td>
                                    <td><?php echo $drassistprof2; ?></td>
                                    <td><?php echo $drassistprof3; ?></td>
                                    <td><?php echo $drassistprof4; ?></td>
                                    <td><?php echo $drinstructor1; ?></td>
                                    <td><?php echo $drinstructor2; ?></td>
                                    <td><?php echo $drinstructor3; ?></td>
                                    <td><?php echo $drinstructor4; ?></td>
                                    <td><?php echo $total3; ?></td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td><?php echo $total + $total2 + $total3; ?></td>
                                        <td><?php echo $bsprof1 + $msprof1 + $drprof1; ?></td>
                                        <td><?php echo $bsprof2 + $msprof2 + $drprof2; ?></td>
                                        <td><?php echo $bsprof3 + $msprof3 + $drprof3; ?></td>
                                        <td><?php echo $bsprof4 + $msprof4 + $drprof4; ?></td>
                                        <td><?php echo $bsassoprof1 + $msassoprof1 + $drassoprof1; ?></td>
                                        <td><?php echo $bsassoprof2 + $msassoprof2 + $drassoprof2; ?></td>
                                        <td><?php echo $bsassoprof3 + $msassoprof3 + $drassoprof3; ?></td>
                                        <td><?php echo $bsassoprof4 + $msassoprof4 + $drassoprof4; ?></td>
                                        <td><?php echo $bsassoprof5 + $msassoprof5 + $drassoprof5; ?></td>
                                        <td><?php echo $bsassistprof1 + $msassistprof1 + $drassistprof1; ?></td>
                                        <td><?php echo $bsassistprof2 + $msassistprof2 + $drassistprof2; ?></td>
                                        <td><?php echo $bsassistprof3 + $msassistprof3 + $drassistprof3; ?></td>
                                        <td><?php echo $bsassistprof4 + $msassistprof4 + $drassistprof4; ?></td>
                                        <td><?php echo $bsinstructor1 + $msinstructor1 + $drinstructor1; ?></td>
                                        <td><?php echo $bsinstructor2 + $msinstructor2 + $drinstructor2; ?></td>
                                        <td><?php echo $bsinstructor3 + $msinstructor3 + $drinstructor3; ?></td>
                                        <td><?php echo $bsinstructor4 + $msinstructor4 + $drinstructor4; ?></td>
                                        <td><?php echo $total + $total2 + $total3; ?></td>
                                    </tr> 
                            </table>
                        </div>
                        <br>
                        <br>
                        <div class="scroll">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center">
                                            FORTUNE TOWNE CAMPUS
                                        </th>
                                        <th colspan="18" class="text-center">
                                        Academic Rank
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                        <th>DEGREE</th>
                                        <th>Qty.</th>
                                        <th >Prof 1</th>
                                        <th >Prof 2</th>
                                        <th >Prof 3</th>
                                        <th >Prof 4</th>
                                        <th> Asso. Prof. 1</th>    
                                        <th> Asso. Prof. 2</th>    
                                        <th> Asso. Prof. 3</th>    
                                        <th> Asso. Prof. 4</th>
                                        <th> Asso. Prof. 5</th>
                                        <th>Assist. Prof 1</th>
                                        <th>Assist. Prof 2</th>
                                        <th>Assist. Prof 3</th>
                                        <th>Assist. Prof 4</th>
                                        <th>Inst. 1</th>
                                        <th>Inst. 2</th>
                                        <th>Inst. 3</th>
                                        <th>Inst. 4</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display = $con->prepare("SELECT count(bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' and bs_name <> ' '");
                                        $display->execute();
                                        $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { 
                                       $total = $row['count(bs_name)'];
                                        }?>
                                    <td>BS</td>
                                    <td><?php echo $total; ?></td>
                                    <!--Professor 1-->
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '18' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof1 = $row['COUNT(bs_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '19' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '20' AND bs_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '21' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '13' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '14' AND bs_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '15' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '16' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '17' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof5 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '9' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '10' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '11' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '12' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '1' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '2' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '3' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '4' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <td><?php echo $bsprof1; ?></td>
                                    <td><?php echo $bsprof2; ?></td>
                                    <td><?php echo $bsprof3; ?></td>
                                    <td><?php echo $bsprof4; ?></td>
                                    <td><?php echo $bsassoprof1; ?></td>
                                    <td><?php echo $bsassoprof2; ?></td>
                                    <td><?php echo $bsassoprof3; ?></td>
                                    <td><?php echo $bsassoprof4; ?></td>
                                    <td><?php echo $bsassoprof5; ?></td>
                                    <td><?php echo $bsassistprof1; ?></td>
                                    <td><?php echo $bsassistprof2; ?></td>
                                    <td><?php echo $bsassistprof3; ?></td>
                                    <td><?php echo $bsassistprof4; ?></td>
                                    <td><?php echo $bsinstructor1; ?></td>
                                    <td><?php echo $bsinstructor2; ?></td>
                                    <td><?php echo $bsinstructor3; ?></td>
                                    <td><?php echo $bsinstructor4; ?></td>
                                    <td><?php echo $total; ?>
                                    </td>
                                    </tr>
                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display2 = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND ms_name <> ' '");
                                        $display2->execute();
                                        $fetch2 = $display2->fetchAll();

                                    foreach($fetch2 as $key => $row2) { 
                                       $total2 = $row2['COUNT( ms_name)'];

                                        }?>
                                    <td>MA/MS</td>
                                    <td><?php echo $total2; ?></td>
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '18' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof1 = $row['COUNT(ms_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '19' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '20' AND ms_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '21' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '13' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '14' AND ms_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '15' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '16' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '17' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof5 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '9' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '10' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '11' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '12' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '1' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '2' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '3' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '4' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <td><?php echo $msprof1; ?></td>
                                    <td><?php echo $msprof2; ?></td>
                                    <td><?php echo $msprof3; ?></td>
                                    <td><?php echo $msprof4; ?></td>
                                    <td><?php echo $msassoprof1; ?></td>
                                    <td><?php echo $msassoprof2; ?></td>
                                    <td><?php echo $msassoprof3; ?></td>
                                    <td><?php echo $msassoprof4; ?></td>
                                    <td><?php echo $msassoprof5; ?></td>
                                    <td><?php echo $msassistprof1; ?></td>
                                    <td><?php echo $msassistprof2; ?></td>
                                    <td><?php echo $msassistprof3; ?></td>
                                    <td><?php echo $msassistprof4; ?></td>
                                    <td><?php echo $msinstructor1; ?></td>
                                    <td><?php echo $msinstructor2; ?></td>
                                    <td><?php echo $msinstructor3; ?></td>
                                    <td><?php echo $msinstructor4; ?></td>
                                    <td><?php echo $total2; ?>
                                    </td>
                                    </tr>

                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display3 = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND dr_name <> ' '");
                                        $display3->execute();
                                        $fetch3 = $display3->fetchAll();

                                    foreach($fetch3 as $key => $row3) { 
                                       $total3 = $row3['COUNT( dr_name)'];

                                        }?>
                                    <td>PhD/EdD</td>
                                    <td><?php echo $total3; ?></td>
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '18' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof1 = $row['COUNT(dr_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '19' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '20' AND dr_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '21' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '13' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '14' AND dr_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '15' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '16' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '17' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof5 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '9' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '10' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '11' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '12' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '1' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '2' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '3' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND rank_id = '4' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <td><?php echo $drprof1; ?></td>
                                    <td><?php echo $drprof2; ?></td>
                                    <td><?php echo $drprof3; ?></td>
                                    <td><?php echo $drprof4; ?></td>
                                    <td><?php echo $drassoprof1; ?></td>
                                    <td><?php echo $drassoprof2; ?></td>
                                    <td><?php echo $drassoprof3; ?></td>
                                    <td><?php echo $drassoprof4; ?></td>
                                    <td><?php echo $drassoprof5; ?></td>
                                    <td><?php echo $drassistprof1; ?></td>
                                    <td><?php echo $drassistprof2; ?></td>
                                    <td><?php echo $drassistprof3; ?></td>
                                    <td><?php echo $drassistprof4; ?></td>
                                    <td><?php echo $drinstructor1; ?></td>
                                    <td><?php echo $drinstructor2; ?></td>
                                    <td><?php echo $drinstructor3; ?></td>
                                    <td><?php echo $drinstructor4; ?></td>
                                    <td><?php echo $total3; ?></td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td><?php echo $total + $total2 + $total3; ?></td>
                                        <td><?php echo $bsprof1 + $msprof1 + $drprof1; ?></td>
                                        <td><?php echo $bsprof2 + $msprof2 + $drprof2; ?></td>
                                        <td><?php echo $bsprof3 + $msprof3 + $drprof3; ?></td>
                                        <td><?php echo $bsprof4 + $msprof4 + $drprof4; ?></td>
                                        <td><?php echo $bsassoprof1 + $msassoprof1 + $drassoprof1; ?></td>
                                        <td><?php echo $bsassoprof2 + $msassoprof2 + $drassoprof2; ?></td>
                                        <td><?php echo $bsassoprof3 + $msassoprof3 + $drassoprof3; ?></td>
                                        <td><?php echo $bsassoprof4 + $msassoprof4 + $drassoprof4; ?></td>
                                        <td><?php echo $bsassoprof5 + $msassoprof5 + $drassoprof5; ?></td>
                                        <td><?php echo $bsassistprof1 + $msassistprof1 + $drassistprof1; ?></td>
                                        <td><?php echo $bsassistprof2 + $msassistprof2 + $drassistprof2; ?></td>
                                        <td><?php echo $bsassistprof3 + $msassistprof3 + $drassistprof3; ?></td>
                                        <td><?php echo $bsassistprof4 + $msassistprof4 + $drassistprof4; ?></td>
                                        <td><?php echo $bsinstructor1 + $msinstructor1 + $drinstructor1; ?></td>
                                        <td><?php echo $bsinstructor2 + $msinstructor2 + $drinstructor2; ?></td>
                                        <td><?php echo $bsinstructor3 + $msinstructor3 + $drinstructor3; ?></td>
                                        <td><?php echo $bsinstructor4 + $msinstructor4 + $drinstructor4; ?></td>
                                        <td><?php echo $total + $total2 + $total3; ?></td>
                                    </tr> 
                            </table>
                        </div>
                        <br>
                        <br>
                        <div class="scroll">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center">
                                            BINALBAGAN CAMPUS
                                        </th>
                                        <th colspan="18" class="text-center">
                                        Academic Rank
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                        <th>DEGREE</th>
                                        <th>Qty.</th>
                                        <th >Prof 1</th>
                                        <th >Prof 2</th>
                                        <th >Prof 3</th>
                                        <th >Prof 4</th>
                                        <th> Asso. Prof. 1</th>    
                                        <th> Asso. Prof. 2</th>    
                                        <th> Asso. Prof. 3</th>    
                                        <th> Asso. Prof. 4</th>
                                        <th> Asso. Prof. 5</th>
                                        <th>Assist. Prof 1</th>
                                        <th>Assist. Prof 2</th>
                                        <th>Assist. Prof 3</th>
                                        <th>Assist. Prof 4</th>
                                        <th>Inst. 1</th>
                                        <th>Inst. 2</th>
                                        <th>Inst. 3</th>
                                        <th>Inst. 4</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display = $con->prepare("SELECT count(bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' and bs_name <> ' '");
                                        $display->execute();
                                        $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { 
                                       $total = $row['count(bs_name)'];
                                        }?>
                                    <td>BS</td>
                                    <td><?php echo $total; ?></td>
                                    <!--Professor 1-->
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '18' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof1 = $row['COUNT(bs_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '19' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '20' AND bs_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '21' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '13' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '14' AND bs_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '15' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '16' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '17' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassoprof5 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '9' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof1 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '10' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '11' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '12' AND bs_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsassistprof4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '1' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor1 = $row['COUNT(bs_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '2' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor2 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '3' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor3 = $row['COUNT( bs_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '4' AND bs_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $bsinstructor4 = $row['COUNT( bs_name)'];
                                    }?>
                                    <td><?php echo $bsprof1; ?></td>
                                    <td><?php echo $bsprof2; ?></td>
                                    <td><?php echo $bsprof3; ?></td>
                                    <td><?php echo $bsprof4; ?></td>
                                    <td><?php echo $bsassoprof1; ?></td>
                                    <td><?php echo $bsassoprof2; ?></td>
                                    <td><?php echo $bsassoprof3; ?></td>
                                    <td><?php echo $bsassoprof4; ?></td>
                                    <td><?php echo $bsassoprof5; ?></td>
                                    <td><?php echo $bsassistprof1; ?></td>
                                    <td><?php echo $bsassistprof2; ?></td>
                                    <td><?php echo $bsassistprof3; ?></td>
                                    <td><?php echo $bsassistprof4; ?></td>
                                    <td><?php echo $bsinstructor1; ?></td>
                                    <td><?php echo $bsinstructor2; ?></td>
                                    <td><?php echo $bsinstructor3; ?></td>
                                    <td><?php echo $bsinstructor4; ?></td>
                                    <td><?php echo $total; ?>
                                    </td>
                                    </tr>
                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display2 = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND ms_name <> ' '");
                                        $display2->execute();
                                        $fetch2 = $display2->fetchAll();

                                    foreach($fetch2 as $key => $row2) { 
                                       $total2 = $row2['COUNT( ms_name)'];

                                        }?>
                                    <td>MA/MS</td>
                                    <td><?php echo $total2; ?></td>
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '18' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof1 = $row['COUNT(ms_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '19' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '20' AND ms_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '21' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '13' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '14' AND ms_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '15' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '16' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '17' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassoprof5 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '9' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '10' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '11' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '12' AND ms_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msassistprof4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '1' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor1 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '2' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor2 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '3' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor3 = $row['COUNT( ms_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '4' AND ms_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $msinstructor4 = $row['COUNT( ms_name)'];
                                    }?>
                                    <td><?php echo $msprof1; ?></td>
                                    <td><?php echo $msprof2; ?></td>
                                    <td><?php echo $msprof3; ?></td>
                                    <td><?php echo $msprof4; ?></td>
                                    <td><?php echo $msassoprof1; ?></td>
                                    <td><?php echo $msassoprof2; ?></td>
                                    <td><?php echo $msassoprof3; ?></td>
                                    <td><?php echo $msassoprof4; ?></td>
                                    <td><?php echo $msassoprof5; ?></td>
                                    <td><?php echo $msassistprof1; ?></td>
                                    <td><?php echo $msassistprof2; ?></td>
                                    <td><?php echo $msassistprof3; ?></td>
                                    <td><?php echo $msassistprof4; ?></td>
                                    <td><?php echo $msinstructor1; ?></td>
                                    <td><?php echo $msinstructor2; ?></td>
                                    <td><?php echo $msinstructor3; ?></td>
                                    <td><?php echo $msinstructor4; ?></td>
                                    <td><?php echo $total2; ?>
                                    </td>
                                    </tr>

                                    <tr>
                                    <?php
                                    include('connect.php');
                                     $display3 = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND dr_name <> ' '");
                                        $display3->execute();
                                        $fetch3 = $display3->fetchAll();

                                    foreach($fetch3 as $key => $row3) { 
                                       $total3 = $row3['COUNT( dr_name)'];

                                        }?>
                                    <td>PhD/EdD</td>
                                    <td><?php echo $total3; ?></td>
                                    <?php
                                        include('connect.php');
                                         $display = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '18' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof1 = $row['COUNT(dr_name)'];
                                    }?>
                                    <!--Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '19' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Professor 3-->
                                    <?php
                                         include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '20' AND dr_name<> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '21' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '13' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '14' AND dr_name <> 0 ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '15' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '16' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Asso. Professor 5-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '17' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassoprof5 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '9' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '10' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '11' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Assist. Professor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '12' AND dr_name <> ' ' ");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drassistprof4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 1-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '1' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor1 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 2-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '2' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor2 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 3-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '3' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor3 = $row['COUNT( dr_name)'];
                                    }?>
                                    <!--Instructor 4-->
                                    <?php
                                        include('connect.php');
                                            $display = $con->prepare("SELECT COUNT( dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND rank_id = '4' AND dr_name <> ' '");
                                            $display->execute();
                                            $fetch = $display->fetchAll();

                                        foreach($fetch as $key => $row) { 
                                           $drinstructor4 = $row['COUNT( dr_name)'];
                                    }?>
                                    <td><?php echo $drprof1; ?></td>
                                    <td><?php echo $drprof2; ?></td>
                                    <td><?php echo $drprof3; ?></td>
                                    <td><?php echo $drprof4; ?></td>
                                    <td><?php echo $drassoprof1; ?></td>
                                    <td><?php echo $drassoprof2; ?></td>
                                    <td><?php echo $drassoprof3; ?></td>
                                    <td><?php echo $drassoprof4; ?></td>
                                    <td><?php echo $drassoprof5; ?></td>
                                    <td><?php echo $drassistprof1; ?></td>
                                    <td><?php echo $drassistprof2; ?></td>
                                    <td><?php echo $drassistprof3; ?></td>
                                    <td><?php echo $drassistprof4; ?></td>
                                    <td><?php echo $drinstructor1; ?></td>
                                    <td><?php echo $drinstructor2; ?></td>
                                    <td><?php echo $drinstructor3; ?></td>
                                    <td><?php echo $drinstructor4; ?></td>
                                    <td><?php echo $total3; ?></td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td><?php echo $total + $total2 + $total3; ?></td>
                                        <td><?php echo $bsprof1 + $msprof1 + $drprof1; ?></td>
                                        <td><?php echo $bsprof2 + $msprof2 + $drprof2; ?></td>
                                        <td><?php echo $bsprof3 + $msprof3 + $drprof3; ?></td>
                                        <td><?php echo $bsprof4 + $msprof4 + $drprof4; ?></td>
                                        <td><?php echo $bsassoprof1 + $msassoprof1 + $drassoprof1; ?></td>
                                        <td><?php echo $bsassoprof2 + $msassoprof2 + $drassoprof2; ?></td>
                                        <td><?php echo $bsassoprof3 + $msassoprof3 + $drassoprof3; ?></td>
                                        <td><?php echo $bsassoprof4 + $msassoprof4 + $drassoprof4; ?></td>
                                        <td><?php echo $bsassoprof5 + $msassoprof5 + $drassoprof5; ?></td>
                                        <td><?php echo $bsassistprof1 + $msassistprof1 + $drassistprof1; ?></td>
                                        <td><?php echo $bsassistprof2 + $msassistprof2 + $drassistprof2; ?></td>
                                        <td><?php echo $bsassistprof3 + $msassistprof3 + $drassistprof3; ?></td>
                                        <td><?php echo $bsassistprof4 + $msassistprof4 + $drassistprof4; ?></td>
                                        <td><?php echo $bsinstructor1 + $msinstructor1 + $drinstructor1; ?></td>
                                        <td><?php echo $bsinstructor2 + $msinstructor2 + $drinstructor2; ?></td>
                                        <td><?php echo $bsinstructor3 + $msinstructor3 + $drinstructor3; ?></td>
                                        <td><?php echo $bsinstructor4 + $msinstructor4 + $drinstructor4; ?></td>
                                        <td><?php echo $total + $total2 + $total3; ?></td>
                                    </tr> 
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