<section>
    <div class="modal fade" id="add_file" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class = "panel panel-primary">
                    <div class = "panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add File</h4>
                        <form action="add_file_query.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body"></div>
                            </head>
                                <body>
                                    <div class="ui-widget">
                                    <select class="form-control" name="per_name">
                                    <?php
                                        include("connect.php"); 
                                        $personnel = $con->prepare("SELECT * FROM tbl_personnel ORDER BY per_id");
                                        $personnel->execute();
                                        while($row = $personnel->fetch()) {
                                            $per_id = $row['per_id'];
                                            $per_firstname = $row['per_firstname'];
                                            $per_lastname = $row['per_lastname'];
                                    ?>
                                    <option value="<?php echo $per_id ?>"><?php echo $per_firstname." ".$per_lastname; ?></option>
                                     
                                    <?php } ?>
                                    </select>
                                        <br>
                                        <br>
                                        <div class="form-line">
                                            <input class="form-control" name="per_file" type="file" id="ufile[]" size="50" multiple>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name ="upload">Save</button>
                                    </div>
                                </body>
                            </head>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
