<section>
    <div class="modal fade" id="add_department" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class = "panel panel-primary">
                    <div class = "panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>ADD DEPARTMENT</h4>
                    </div>
                </div>
                <form action="add_department_query.php" method="POST">
                    <div class="modal-body">
                        <div class="input-group">
                            <span class="input-group-addon">
                            Department Name:
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="dept_name" placeholder="Department Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-lg" name = "save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
