<?php 
include("header.php")
?>
<body>
<style type="text/css">
    table {
        width: 100%;
        text-align: center;
    }
    td {
        border: 1px solid;
    }
     th {
        font-size: 15px;   
        border: 1px solid;
    }
</style> 
 <section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="">
                    <div class = "panel panel-primary">
                        <div class = "panel-heading">
                            <button class = "btn btn-default" href="#" data-toggle="modal" data-target="#add_file" style = "float:right; width:150px;">Add File</button>
                            <h4>PERSONNEL FILES</h4>
                        </div>
                    </div>
                    <?php include("add_file_modal.php"); ?>
                    <div id="print">
                        <div class="card" style="width: 49%; display: inline-block;">
                            <div class="per-files">
                                <div class = "panel panel-primary">
                                    <div class = "panel-heading">
                                        <h5>201 FILES</h5>
                                    </div>
                                </div>
                                <?php 
                                    include('connect.php');

                                    $stmt=$con->prepare("SELECT * FROM tbl_files INNER JOIN tbl_personnel ON tbl_files.per_id = tbl_personnel.per_id group by tbl_files.per_id");
                                    $stmt->execute();
                                    if($stmt->rowCount() > 0) {

                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

                                    extract($row);
                                ?>
                                <div class="files">
                                <form method="POST" action="" >
                                    <a href="file_table.php?per_id=<?php echo $per_id; ?>"><img src="img/folder.png" style="width: 100px; height: 80px; padding: 5px;"><br>
                                    <p><?php echo $per_firstname . " " . $per_lastname; ?></p></a>
                                </div>
                                </form>
                                <?php } } ?>
                            </div>
                        </div>
                        <div class="card pull-right" style="width: 50%;">
                            <div class="per-files">
                                <div class = "panel panel-primary">

                                    <div class = "panel-heading">
                                        <h5>Files</h5>
                                    </div>
                                
                                    <table cellspacing="0">
                                        <thead>
                                            <th>File Name</th>
                                            <th>Date Uploaded</th>
                                            <th>Download</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                if (isset($_GET['per_id'])){
                                $stmt=$con->prepare("SELECT * FROM tbl_files INNER JOIN tbl_personnel ON tbl_files.per_id = tbl_personnel.per_id where tbl_personnel.per_id = '{$_GET['per_id']}'");
                                    $stmt->execute();
                                    if($stmt->rowCount() > 0) {

                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

                                    extract($row);
                                ?>
                                            <tr>

                                            <td><?php echo $file_name; ?></td>
                                            <td><?php echo $date_uploaded; ?></td>
                                            <td><a href="download.php?download_file=<?php echo $file_name ;?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     <?php } } ?>
                                     <?php } else { ?>

                                    <div class = "panel-heading">
                                        <h5>Nothing Selected</h5>
                                    </div>
                                     <?php }
                                     ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>
</body>
<script src="plugins/js/jquery-1.js"></script>
<?php include("script.php"); ?>
