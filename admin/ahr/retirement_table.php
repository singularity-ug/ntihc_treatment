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
                                <h4>RETIREMENT</h4>
                                <a href="print_retirement_table.php">
                                    <input type="button" value="Print" class="print">
                                </a>
                            </div>
                        </div>
                        <div id="print">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                    <thead>
                                        <tr>
                                            <td>Name of Retirees</td>
                                            <td>GASS/Academic Rank</td>
                                            <td>Age</td>
                                            <td>Date of Birth</td>
                                            <td>Date of Original Appointment</td>
                                            <td>Year of Service</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                <tbody>
                                <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_academic_rank ON tbl_personnel.rank_id = tbl_academic_rank.rank_id LEFT JOIN tbl_gass_rank ON tbl_personnel.gass_id = tbl_gass_rank.gass_id");
                                    $display->execute();
                                    $fetch = $display->fetchAll();
                                    
                                    foreach($fetch as $key => $row){
                                    
                                        $bday = $row["per_date_of_birth"];
                                        $appointment = $row["per_date_of_original_appointment"];
                                        $date = new DateTime($bday);
                                        $date1 = new DateTime($appointment);
                                        $now = new DateTime();

                                        $difference = $date->diff($now)->format('%y');
                                        $service = $date1->diff($now)->format('%y');
                                        ?>

                                        <?php

                                        if ($difference >= 65) {
                                        ?>
                                    <tr>
                                        <td><?php echo $row['per_lastname'].", ".$row['per_firstname']." ".$row['per_middlename'];?></td>
                                        <td><?php echo $row['gass_name']." ".$row['rank_name'];?></td>
                                        <td><?php echo $difference; ?></td>
                                        <td><?php echo $row['per_date_of_birth']; ?></td>
                                        <td><?php echo $row['per_date_of_original_appointment']; ?></td>
                                        <td><?php echo $service; ?></td>
                                        <td>Force Retirement</td>
                                    </tr>                               
                                <?php } elseif ($difference >= 60) { ?>
                                    <tr>
                                        <td><?php echo $row['per_firstname'];?></td>
                                        <td><?php echo $row['gass_name']." ".$row['rank_name'];?></td>
                                        <td><?php echo $difference; ?></td>
                                        <td><?php echo $row['per_date_of_birth']; ?></td>
                                        <td><?php echo $row['per_date_of_original_appointment']; ?></td>
                                        <td><?php echo $service; ?></td>
                                        <td>Optional Retirement</td>
                                    </tr>            
                                <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>
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