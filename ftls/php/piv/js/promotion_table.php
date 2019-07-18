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
                                <h4>PROMOTIONS</h4>
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
                                        <td class="hidden">ID</td>
                                        <td>Name</td>
										<td>Position / Rank</td>
										<td>Employee Status</td>
                                        <td width = "200px">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php
                                    include('connect.php');

                                    $display = $con->prepare("SELECT * FROM tbl_personnel a LEFT JOIN tbl_position b ON a.pos_id = b.pos_id LEFT JOIN tbl_academic_rank c ON a.rank_id = c.rank_id order by per_id");
                                    $display->execute();
                                    $fetch = $display->fetchAll();

                                    foreach($fetch as $key => $row) { 
									$per_id = $row['per_id'];?>
                              <td class="hidden" name="mainId"><?php echo $row['per_id']; ?></td>
                                        <td><?php echo $row['per_lastname']." ".$row['per_firstname']." ".$row['per_suffix']; ?></td>
										<td><?php echo $row['pos_name']." / ".$row['rank_name']; ?></td>
                                        <td><?php echo $row['per_designation']; ?></td>
										<td>
                                         <?php include('promote_modal.php'); ?>
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