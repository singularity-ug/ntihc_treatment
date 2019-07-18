<link rel="stylesheet" type="text/css" href="css/style1.css">
<button onclick="printContent('print')">Print Content</button>
<a href="faculty_profile_by_degree.php">Back</a>
	<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter">
	<div id="print" style="border: 1px solid;">
		<div style = "margin:10px;">	<br />		
			<center>Republic of the Philippines</center>
			<center><strong>CARLOS HILADO MEMORIAL STATE COLLEGE</strong></center>
			<center>Talisay City, Negros Occidental</center>
			<center>Tel. No. (034) 4954996</center>
			<br />
			<center><strong>SUMMARY OF FACULTY PROFILE BY DEGREE</strong></center>
			<center><strong>As of <?php echo date('F Y'); ?></strong></center>
			<br />
			<br />
			<br />
			<br />
			<center>
                <?php
                    $time = new DateTime('now');
                    $first = $time->format('Y');
                    $time = new DateTime('now');
                    $second = $time->modify('-1 year')->format('Y');
                    $time = new DateTime('now');
                    $third = $time->modify('-2 year')->format('Y');
                 ?>
				<table id = "example" class = "stripe order-table" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td>Particulars</td>
                                        <td>AY <?php echo $third ?></td>
                                        <td>AY <?php echo $second ?></td>
                                        <td>AY <?php echo $first ?></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>PhD/EdD</td>
                                     <?php 
                                    include('connect.php');
                                    $phd = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE date_modified = '$second' AND per_designation in ('Permanent' , 'Part Time') AND dr_name <> ' '");
                                    $phd->execute();
                                    $fphd = $phd->fetchAll();
                                      foreach($fphd as $key => $row) { 

                                        $tphd1 = $row['COUNT(dr_name)'];
                                        ?>
                                    <td><?php echo $tphd1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $phd = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE   date_modified = '$second' AND per_designation in ('Permanent' , 'Part Time') AND dr_name <> ' '");
                                    $phd->execute();
                                    $fphd = $phd->fetchAll();
                                      foreach($fphd as $key => $row) { 

                                        $tphd2 = $row['COUNT(dr_name)'];
                                        ?>
                                    <td><?php echo $tphd2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $phd = $con->prepare("SELECT COUNT(dr_name) FROM tbl_personnel WHERE dr_name <> ' ' AND  date_modified = '$first' AND per_designation in ('Permanent' , 'Part Time') AND dr_name <> ' '");
                                    $phd->execute();
                                    $fphd = $phd->fetchAll();
                                      foreach($fphd as $key => $row) { 

                                        $tphd3 = $row['COUNT(dr_name)'];
                                        ?>
                                    <td><?php echo $tphd3 ; ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td>MA/MS</td>
                                    <?php 
                                    include('connect.php');
                                    $ms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE ms_name <> ' ' AND  date_modified = '$third' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND ms_name <> ' '");
                                    $ms->execute();
                                    $fms = $ms->fetchAll();
                                      foreach($fms as $key => $row1) { 

                                        $tms1 = $row1['COUNT(ms_name)'];
                                        ?>
                                    <td><?php echo $tms1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $ms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE ms_name <> ' ' AND  date_modified = '$second' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND ms_name <> ' '");
                                    $ms->execute();
                                    $fms = $ms->fetchAll();
                                      foreach($fms as $key => $row1) { 

                                        $tms2 = $row1['COUNT(ms_name)'];
                                        ?>
                                    <td><?php echo $tms2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $ms = $con->prepare("SELECT COUNT(ms_name) FROM tbl_personnel WHERE ms_name <> ' ' AND  date_modified = '$first' AND ms_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND ms_name <> ' '");
                                    $ms->execute();
                                    $fms = $ms->fetchAll();
                                      foreach($fms as $key => $row1) { 

                                        $tms3 = $row1['COUNT(ms_name)'];
                                        ?>
                                    <td><?php echo $tms3 ; ?></td>
                                    <?php } ?>

                                </tr>
                                <tr>
                                    <td>BS</td>
                                    <?php 
                                    include('connect.php');
                                    $bs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE bs_name <> ' ' AND  date_modified = '$third' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND bs_name <> ' ' ");
                                    $bs->execute();
                                    $fbs = $bs->fetchAll();
                                      foreach($fbs as $key => $row2) { 

                                        $tbs1 = $row2['COUNT(bs_name)'];
                                        ?>
                                    <td><?php echo $tbs1 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $bs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE bs_name <> ' ' AND  date_modified = '$second' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time') AND bs_name <> ' ' ");
                                    $bs->execute();
                                    $fbs = $bs->fetchAll();
                                      foreach($fbs as $key => $row2) { 

                                        $tbs2= $row2['COUNT(bs_name)'];
                                        ?>
                                    <td><?php echo $tbs2 ; ?></td>
                                    <?php } ?>
                                    <?php 
                                    include('connect.php');
                                    $bs = $con->prepare("SELECT COUNT(bs_name) FROM tbl_personnel WHERE bS_name <> ' ' AND  date_modified = '$first' AND bs_name <> ' ' AND per_designation in ('Permanent' , 'Part Time')AND bs_name <> ' ' ");
                                    $bs->execute();
                                    $fbs = $bs->fetchAll();
                                      foreach($fbs as $key => $row2) { 

                                        $tbs3 = $row2['COUNT(bs_name)'];
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

			</center>
            <br><br><br>
            <div class="noted">
            <label>Prepared by:</label>
            <br>
            <br>
            <label><strong>HERTZELL S. SIAN</strong></label>
            <br>
            <label>Admin Aide I</label>
            <br><br><br>
            </div>
        </div>
    </div>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
<script type="text/javascript">
	(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>