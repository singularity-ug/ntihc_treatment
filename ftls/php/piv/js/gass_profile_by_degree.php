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
                                <h4>GASS PROFILE BY DEGREE</h4>
                                <form method="POST" action=""> 
                                    <input type="text" name="year" placeholder="Generate From Year" class = "form-control" style="width:200px; display:  inline-block;">
                                    <input type="submit" class = "btn btn-danger bt-sm" name="submit">
                                </form>
                                <a href="print_gass_profile_by_degree.php">
                                    <input type="button" value="Print" class="print">
                                </a>
                            </div>
                        </div>
                        <div id="print">
                            <div class="body">
                            <?php
                            if (isset($_POST['submit'])){
                                $third = $_POST['year'];
                               
                         ?>
                         <?php
                            $second  = $third-1;
                            $first  = $third-2;
                         ?>
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td>Particulars</td>
                                        <td>AY <?php echo $first; ?></td>
                                        <td>AY <?php echo $second; ?></td>
                                        <td>AY <?php echo $third; ?></td>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>PhD/EdD</td>
                                    <?php 
                                    include('connect.php');
                                    $phd1 = $con->prepare("SELECT  (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$first%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drftotal1,
                (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$first%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drftotal2
        FROM    dual");
                                    $phd1->execute();
                                    $fphd1 = $phd1->fetchAll();
                                      foreach($fphd1 as $key => $row1) { 

                                        $tphd1 = $row1['drftotal1'] + $row1['drftotal2'];
                                        ?>
                                    <td><?php echo $tphd1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $phd2 = $con->prepare("SELECT  (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$second%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drstotal1,
                (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$second%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drstotal2
        FROM    dual");
                                    $phd2->execute();
                                    $fphd2 = $phd2->fetchAll();
                                      foreach($fphd2 as $key => $row2) { 

                                        $tphd2 = $row2['drstotal1'] + $row2['drstotal2'];
                                        ?>
                                    <td><?php echo $tphd2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $phd3 = $con->prepare("SELECT  (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$third%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drttotal1,
                (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$third%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drttotal2
        FROM    dual");
                                    $phd3->execute();
                                    $fphd3 = $phd3->fetchAll();
                                      foreach($fphd3 as $key => $row3) { 

                                        $tphd3 = $row3['drttotal1'] + $row3['drttotal2'];
                                        ?>
                                    <td><?php echo $tphd3 ; ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td>MA/MS</td>
                                    <?php 
                                    include('connect.php');
                                    $ms1 = $con->prepare("SELECT  (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$first%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as msftotal1,
                (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$first%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as msftotal2
        FROM    dual ");
                                    $ms1->execute();
                                    $fms1 = $ms1->fetchAll();
                                      foreach($fms1 as $key => $row4) { 

                                        $tms1 = $row4['msftotal1'] + $row4['msftotal2'];
                                        ?>
                                    <td><?php echo $tms1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $ms2 = $con->prepare("SELECT  (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$second%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as msstotal1,
                (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$second%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as msstotal2
        FROM    dual");
                                    $ms2->execute();
                                    $fms2 = $ms2->fetchAll();
                                      foreach($fms2 as $key => $row5) { 

                                        $tms2 = $row5['msstotal1'] + $row5['msstotal2'];
                                        ?>
                                    <td><?php echo $tms2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $ms3 = $con->prepare("SELECT  (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$third%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total9,
                (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$third%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total10
        FROM    dual");
                                    $ms3->execute();
                                    $fms3 = $ms3->fetchAll();
                                      foreach($fms3 as $key => $row6) { 

                                        $tms3 = $row6['total9'] + $row6['total10'];
                                        ?>
                                    <td><?php echo $tms3 ; ?></td>
                                    <?php } ?>

                                </tr>
                                <tr>
                                    <td>BS</td>
                                    <?php 
                                    include('connect.php');
                                    $bs1 = $con->prepare("SELECT  (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$first%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total11,
                (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$second%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total12
        FROM    dual");
                                    $bs1->execute();
                                    $fbs1 = $bs1->fetchAll();
                                      foreach($fbs1 as $key => $row7) { 

                                        $tbs1 = $row7['total11'] + $row7['total12'];
                                        ?>
                                    <td><?php echo $tbs1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $bs2 = $con->prepare("SELECT  (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$second%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total13,
                (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$second%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total14
        FROM    dual");
                                    $bs2->execute();
                                    $fbs2 = $bs2->fetchAll();
                                      foreach($fbs2 as $key => $row8) { 

                                        $tbs2= $row8['total13'] + $row8['total14'];
                                        ?>
                                    <td><?php echo $tbs2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $bs3 = $con->prepare("SELECT  (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$third%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as bsttotal1,
                (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$third%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as bsttotal2
        FROM    dual");
                                    $bs3->execute();
                                    $fbs3 = $bs3->fetchAll();
                                      foreach($fbs3 as $key => $row9) { 

                                        $tbs3 = $row9['bsttotal1'] + $row9['bsttotal2'];
                                        ?>
                                    <td><?php echo $tbs3 ; ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                <th>Total</th>

                                <th><?php echo $tphd1 + $tms1 + $tbs1; ?></th>
                                <th><?php echo $tphd2 + $tms2 + $tbs2; ?></th>
                                <th><?php echo $tphd3 + $tms3 + $tbs3; ?></th>
                                </tr>
                                </tbody>
                            </table>
                        
                            <?php } else { ?>
                            <?php
                            $time = new DateTime('now');
                            $third1 = $time->format('Y');
                            $time = new DateTime('now');
                            $second1 = $time->modify('-1 year')->format('Y');
                            $time = new DateTime('now');
                            $first1 = $time->modify('-2 year')->format('Y');
                         ?>
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td>Particulars</td>
                                        <td>AY <?php echo $first1; ?></td>
                                        <td>AY <?php echo $second1; ?></td>
                                        <td>AY <?php echo $third1; ?></td>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>PhD/EdD</td>
                                    <?php 
                                    include('connect.php');
                                    $phd1 = $con->prepare("SELECT  (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$first1%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drftotal1,
                (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$first1%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drftotal2
        FROM    dual");
                                    $phd1->execute();
                                    $fphd1 = $phd1->fetchAll();
                                      foreach($fphd1 as $key => $row1) { 

                                        $tphd1 = $row1['drftotal1'] + $row1['drftotal2'];
                                        ?>
                                    <td><?php echo $tphd1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $phd2 = $con->prepare("SELECT  (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$second1%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drstotal1,
                (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$second1%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drstotal2
        FROM    dual");
                                    $phd2->execute();
                                    $fphd2 = $phd2->fetchAll();
                                      foreach($fphd2 as $key => $row2) { 

                                        $tphd2 = $row2['drstotal1'] + $row2['drstotal2'];
                                        ?>
                                    <td><?php echo $tphd2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $phd3 = $con->prepare("SELECT  (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$third1%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drttotal1,
                (
                SELECT COUNT(dr_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$third1%' AND dr_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as drttotal2
        FROM    dual");
                                    $phd3->execute();
                                    $fphd3 = $phd3->fetchAll();
                                      foreach($fphd3 as $key => $row3) { 

                                        $tphd3 = $row3['drttotal1'] + $row3['drttotal2'];
                                        ?>
                                    <td><?php echo $tphd3 ; ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td>MA/MS</td>
                                    <?php 
                                    include('connect.php');
                                    $ms1 = $con->prepare("SELECT  (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$first1%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as msftotal1,
                (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$first1%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as msftotal2
        FROM    dual ");
                                    $ms1->execute();
                                    $fms1 = $ms1->fetchAll();
                                      foreach($fms1 as $key => $row4) { 

                                        $tms1 = $row4['msftotal1'] + $row4['msftotal2'];
                                        ?>
                                    <td><?php echo $tms1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $ms2 = $con->prepare("SELECT  (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$second1%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as msstotal1,
                (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$second1%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as msstotal2
        FROM    dual");
                                    $ms2->execute();
                                    $fms2 = $ms2->fetchAll();
                                      foreach($fms2 as $key => $row5) { 

                                        $tms2 = $row5['msstotal1'] + $row5['msstotal2'];
                                        ?>
                                    <td><?php echo $tms2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $ms3 = $con->prepare("SELECT  (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$third1%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total9,
                (
                SELECT COUNT(ms_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$third1%' AND ms_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total10
        FROM    dual");
                                    $ms3->execute();
                                    $fms3 = $ms3->fetchAll();
                                      foreach($fms3 as $key => $row6) { 

                                        $tms3 = $row6['total9'] + $row6['total10'];
                                        ?>
                                    <td><?php echo $tms3 ; ?></td>
                                    <?php } ?>

                                </tr>
                                <tr>
                                    <td>BS</td>
                                    <?php 
                                    include('connect.php');
                                    $bs1 = $con->prepare("SELECT  (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$first1%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total11,
                (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$second1%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total12
        FROM    dual");
                                    $bs1->execute();
                                    $fbs1 = $bs1->fetchAll();
                                      foreach($fbs1 as $key => $row7) { 

                                        $tbs1 = $row7['total11'] + $row7['total12'];
                                        ?>
                                    <td><?php echo $tbs1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $bs2 = $con->prepare("SELECT  (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$second1%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total13,
                (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$second1%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as total14
        FROM    dual");
                                    $bs2->execute();
                                    $fbs2 = $bs2->fetchAll();
                                      foreach($fbs2 as $key => $row8) { 

                                        $tbs2= $row8['total13'] + $row8['total14'];
                                        ?>
                                    <td><?php echo $tbs2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $bs3 = $con->prepare("SELECT  (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel WHERE date_modified LIKE '%$third1%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as bsttotal1,
                (
                SELECT COUNT(bs_name)
                FROM   tbl_personnel_master_file WHERE date_modified LIKE '%$third1%' AND bs_name<> ' ' AND per_designation in ('GASS' , 'Job Order')
                ) as bsttotal2
        FROM    dual");
                                    $bs3->execute();
                                    $fbs3 = $bs3->fetchAll();
                                      foreach($fbs3 as $key => $row9) { 

                                        $tbs3 = $row9['bsttotal1'] + $row9['bsttotal2'];
                                        ?>
                                    <td><?php echo $tbs3 ; ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                <th>Total</th>

                                <th><?php echo $tphd1 + $tms1 + $tbs1; ?></th>
                                <th><?php echo $tphd2 + $tms2 + $tbs2; ?></th>
                                <th><?php echo $tphd3 + $tms3 + $tbs3; ?></th>
                                </tr>
                                </tbody>
                            </table>
                            <?php } ?>
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