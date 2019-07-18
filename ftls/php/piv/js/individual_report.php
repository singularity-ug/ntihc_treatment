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
                                <h4>Individual Reports</h4>
                            </div>
                        </div>
                        <div id="print">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td>Name</td>
                                        <td>Gender</td>
                                        <td>Status</td>
                                        <td>Age</td>
                                        <td>Campus</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT * FROM tbl_personnel ORDER BY per_id ASC");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                        $bday = $row["per_date_of_birth"];
                                        $date = new DateTime($bday);
                                        $now = new DateTime();

                                        $difference = $date->diff($now)->format('%y');
                                  ?>
                                   <td class="hidden"><?php echo $row['per_id']; ?></td>
                                  <td><?php echo $row['per_lastname'].", ".$row['per_firstname']." ".$row['per_middlename']; ?></td>
                                  <td><?php echo $row['per_gender']; ?></td>
                                  <td><?php echo $row['per_status']; ?></td>
                                  <td><?php echo $difference;?></td>
                                  <td><?php echo $row['per_campus'];?></td>
                                  <td>     
                                    <a class="btn btn-info btn-sm" href="print_personnel_report.php?per_id=<?php echo $row['per_id']?>">
                                      <span class = "glyphicon glyphicon-eye-open" aria-hidden = "true">View Details</span>
                                    </a>                                 
                                  </td>
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