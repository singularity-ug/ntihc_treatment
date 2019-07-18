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
                                <h4>GASS PERSONNEL WITH COMPLETED MASTER's AND DOCTORAL DEGREE</h4>
                                <a href="print_gass_personnel.php">
                                    <input type="button" value="Print" class="print">
                                </a>
                            </div>
                        </div>
                        <div id="print">
                                <table class="table table-bordered stripe">
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
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                                <table class="table table-bordered  stripe">
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