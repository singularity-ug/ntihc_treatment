
<a href="#" data-toggle="modal" data-target="#add_gass_rank">
                                    <span class="print btn-default" style="width: auto;">Add GASS Rank<span>
                                </a><section>
    <div class="modal fade" id="add_gass_rank" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class = "panel panel-primary">
                    <div class = "panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>ADD GASS rank</h4>
                    </div>
                </div>
                <div class="modal-header">
                </div>
                <form action="add_gass_rank_query.php" method="POST">
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon">
                        GASS Rank Name:
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="gass_name" placeholder="GASS Rank Name" required>
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