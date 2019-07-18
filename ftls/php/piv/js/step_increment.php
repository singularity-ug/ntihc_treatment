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
                                <h4>STEP INCREMENT</h4>
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
                                        <th>Name</th>
                                        <th>Date of Appointment</th>
                                        <th>Loyalty </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tbl_personnel ORDER BY per_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();
                                    

                                    foreach($fetch as $key => $row) { 
                                    $appointment = $row["per_date_of_original_appointment"];
                                    $date = new DateTime($appointment);
                                    $now = new DateTime();

                                    $difference = $date->diff($now)->format('%y Year(s) ,%m month(s)');
                                    ?>

                                        <td><?php echo $row['per_lastname'] .", ". $row['per_firstname'] ." " .$row['per_middlename'] . " " .$row['per_suffix']  ?></td>
                                        <td><?php echo $row['per_date_of_original_appointment']; ?></td>
                                        <td><b>
                                        <?php 
                                         if($difference % 3 == 0)  {
                                                echo $difference;
                                            }
                                       elseif ($difference % 5 == 0) {
                                                echo "BY5";
                                            }
                                         ?>
                                         </b></td>
                                    </tr>                                     
                                     <?php 
                                     }?>
                                </tbody>
                            </table>
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