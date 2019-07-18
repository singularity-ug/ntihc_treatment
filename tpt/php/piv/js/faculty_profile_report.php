<div class="modal fade" id="profile_report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td colspan="5" style="border:0px; margin-left: 100%;">
                                <center>FACULTY PROFILE</center>
                            </td>
                        </tr>
                        <tr>
                            <th>Program</th>
                            <th>BACHELOR DEGREE</th>
                            <th>MASTERAL DEGREE</th>
                            <th>DOCTORAL DEGREE</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include('connect.php'); $display=$con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '2'"); $display->execute(); $fetch = $display->fetchAll(); foreach ($fetch as $key => $row) { $total = $row['COUNT(DISTINCT bs_name)']; $display2 = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE dept_id = '2'"); $display2->execute(); $fetch2 = $display2->fetchall(); foreach ($fetch2 as $key => $row2) { $total1 = $row2['COUNT(DISTINCT ms_name)']; $display3 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE dept_id = '2'"); $display3->execute(); $fetch3 = $display3->fetchall(); foreach ($fetch3 as $key => $row3) { $total2 = $row3['COUNT(DISTINCT dr_name)']; ?>
                        <tr>
                            <td>COLLEGE OF EDUCATION</td>
                            <td>
                                <?php echo $total; ?>
                            </td>
                            <td>
                                <?php echo $total1; ?>
                            </td>
                            <td>
                                <?php echo $total2; ?>
                            </td>
                            <td>
                                <?php echo $total + $total1 + $total2; ?>
                            </td>
                        </tr>
                        <?php } } } ?>
                        <?php include( 'connect.php'); $display4=$con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '3'"); $display4->execute(); $fetch4 = $display4->fetchAll(); foreach ($fetch4 as $key => $row4) { $total4 = $row4['COUNT(DISTINCT bs_name)']; $display5 = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '3'"); $display5->execute(); $fetch5 = $display5->fetchall(); foreach ($fetch5 as $key => $row5) { $total5 = $row5['COUNT(DISTINCT bs_name)']; $display6 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE dept_id = '3'"); $display6->execute(); $fetch6 = $display6->fetchall(); foreach ($fetch6 as $key => $row6) { $total6 = $row6['COUNT(DISTINCT dr_name)']; ?>
                        <tr>
                            <td>SCHOOL OF ARTS AND SCIENCE</td>
                            <td>
                                <?php echo $total4; ?>
                            </td>
                            <td>
                                <?php echo $total5; ?>
                            </td>
                            <td>
                                <?php echo $total6; ?>
                            </td>
                            <td>
                                <?php echo $total4 + $total5 + $total6; ?>
                            </td>
                        </tr>
                        <?php } } } ?>
                        <?php include( 'connect.php'); $display7=$con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '4'"); $display7->execute(); $fetch7 = $display7->fetchAll(); foreach ($fetch7 as $key => $row7) { $total7 = $row7['COUNT(DISTINCT bs_name)']; $display8 = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '4'"); $display8->execute(); $fetch8 = $display8->fetchall(); foreach ($fetch8 as $key => $row8) { $total8 = $row8['COUNT(DISTINCT bs_name)']; $display9 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE dept_id = '4'"); $display9->execute(); $fetch9 = $display9->fetchall(); foreach ($fetch9 as $key => $row9) { $total9 = $row9['COUNT(DISTINCT dr_name)']; ?>
                        <tr>
                            <td>COLLEGE OF INDUSTRIAL TECHNOLOGY</td>
                            <td>
                                <?php echo $total7; ?>
                            </td>
                            <td>
                                <?php echo $total8; ?>
                            </td>
                            <td>
                                <?php echo $total9; ?>
                            </td>
                            <td>
                                <?php echo $total9 + $total8 + $total9; ?>
                            </td>
                        </tr>
                        <?php } } } ?>
                        <?php include( 'connect.php'); $display10=$con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '5'"); $display10->execute(); $fetch10 = $display10->fetchAll(); foreach ($fetch10 as $key => $row10) { $total10 = $row10['COUNT(DISTINCT bs_name)']; $display11 = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '5'"); $display11->execute(); $fetch11 = $display11->fetchall(); foreach ($fetch11 as $key => $row11) { $total11 = $row11['COUNT(DISTINCT bs_name)']; $display12 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE dept_id = '5'"); $display12->execute(); $fetch12 = $display12->fetchall(); foreach ($fetch12 as $key => $row12) { $total12 = $row12['COUNT(DISTINCT dr_name)']; ?>
                        <tr>
                            <td>INSTITUTE OF INDUSTRIAL TECHNOLOGY</td>
                            <td>
                                <?php echo $total10; ?>
                            </td>
                            <td>
                                <?php echo $total11; ?>
                            </td>
                            <td>
                                <?php echo $total12; ?>
                            </td>
                            <td>
                                <?php echo $total10 + $total11 + $total12; ?>
                            </td>
                        </tr>
                        <?php } } } ?>
                        <?php include( 'connect.php'); $display13=$con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '6'"); $display13->execute(); $fetch13 = $display13->fetchAll(); foreach ($fetch13 as $key => $row13) { $total13 = $row13['COUNT(DISTINCT bs_name)']; $display14 = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '6'"); $display14->execute(); $fetch14 = $display14->fetchall(); foreach ($fetch14 as $key => $row14) { $total14 = $row14['COUNT(DISTINCT bs_name)']; $display15 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE dept_id = '6'"); $display15->execute(); $fetch15 = $display15->fetchall(); foreach ($fetch15 as $key => $row15) { $total15 = $row15['COUNT(DISTINCT dr_name)']; ?>
                        <tr>
                            <td>COLLEGE OF BUSINESS MANAGEMENT AND ACCOUNTANCY</td>
                            <td>
                                <?php echo $total13; ?>
                            </td>
                            <td>
                                <?php echo $total14; ?>
                            </td>
                            <td>
                                <?php echo $total15; ?>
                            </td>
                            <td>
                                <?php echo $total13 + $total14 + $total15; ?>
                            </td>
                        </tr>
                        <?php } } } ?>
                        <?php include( 'connect.php'); $display16=$con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '7'"); $display16->execute(); $fetch16 = $display16->fetchAll(); foreach ($fetch16 as $key => $row16) { $total16 = $row16['COUNT(DISTINCT bs_name)']; $display17 = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE dept_id = '7'"); $display17->execute(); $fetch17 = $display17->fetchall(); foreach ($fetch17 as $key => $row17) { $total17 = $row17['COUNT(DISTINCT bs_name)']; $display18 = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE dept_id = '7'"); $display18->execute(); $fetch18 = $display18->fetchall(); foreach ($fetch18 as $key => $row18) { $total18 = $row18['COUNT(DISTINCT dr_name)']; ?>
                        <tr>
                            <td>COLLEGE OF BUSINESS MANAGEMENT AND ACCOUNTANCY</td>
                            <td>
                                <?php echo $total16; ?>
                            </td>
                            <td>
                                <?php echo $total17; ?>
                            </td>
                            <td>
                                <?php echo $total18; ?>
                            </td>
                            <td>
                                <?php echo $total16 + $total17 + $total18; ?>
                            </td>
                        </tr>
                        <?php } } } ?>
                        <tr>
                            <?php $sum=$total + $total4 + $total7 + $total10 + $total13 + $total16; $sum1=$total1 + $total5 + $total8 + $total11 + $total14 + $total17; $sum2=$total2 + $total6 + $total9 + $total12 + $total15 + $total18; ?>
                            <td>TOTAL</td>
                            <td>
                                <?php echo $sum; ?>
                            </td>
                            <td>
                                <?php echo $sum1 ?>
                            </td>
                            <td>
                                <?php echo $sum2 ?>
                            </td>
                            <td>
                                <?php echo $sum + $sum1 + $sum2; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <br>
                <br>
                <br>
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                                                Address:
                                            </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="per_address" placeholder="Adrress">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close-modal" data-dismiss="modal">Close
                    </button>
                    <button onclick="myFunction()" class="btn btn-primary">Print Receipt</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        window.print();
    }
</script>