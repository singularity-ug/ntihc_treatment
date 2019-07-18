<?php
include('connect.php');
if(isset($_POST['update'])) {
	$per_id = $_POST['per_id']; 
	$per_firstname = $_POST['per_firstname'];
	$per_middlename = $_POST['per_middlename'];
	$per_lastname = $_POST['per_lastname'];
	$per_others = $_POST['per_suffix'];
	$per_gender = $_POST['per_gender'];
	$per_status = $_POST['per_status'];
	$per_address = $_POST['per_address'];
	$pos_id = $_POST['pos_name'];
	$per_designation = $_POST['per_designation'];
	$per_date_of_birth = $_POST['per_date_of_birth'];
	$per_place_of_birth = $_POST['per_place_of_birth'];
	$per_date_of_original_appointment = $_POST['per_date_of_original_appointment'];
	$per_tin_no = $_POST['per_tin_no'];
	$per_gsis_bp_no = $_POST['per_gsis_bp_no'];
	$per_pagibig_no = $_POST['per_pagibig_no'];
	$per_contact = $_POST['per_contact_no'];
	$per_plantilla_no = $_POST['per_plantilla_no'];
	$per_campus = $_POST['per_campus'];
	$dept_id = $_POST['dept_name'];
	$per_eligibility = $_POST['per_eligibility'];
	$bs_name = $_POST['bs_name'];
	$bs_year = $_POST['bs_year'];
	$bs_school = $_POST['bs_school'];
	$ms_name = $_POST['ms_name'];
	$ms_year = $_POST['ms_year'];
	$ms_with_unit = $_POST['ms_with_unit'];
	$ms_school = $_POST['ms_school'];
	$dr_name = $_POST['dr_name'];
	$dr_with_unit = $_POST['dr_with_unit'];
	$dr_year = $_POST['dr_year'];
	$dr_school = $_POST['dr_school'];
	$other_degree = $_POST['other_degree'];
	$other_year = $_POST['other_year'];
	$other_school = $_POST['other_school'];
	$rank = $_POST['rank'];
	$gass_id = $_POST['gass_name'];


    $query = $con->prepare("INSERT INTO tbl_personnel_master_file SELECT * FROM tbl_personnel where per_id = $per_id");
    $query->execute();


	$add_personnel = $con->prepare("UPDATE tbl_personnel SET per_firstname = ?, per_middlename = ?, per_lastname = ?, per_suffix = ?, per_gender = ?, per_status = ?, per_address = ?, pos_id = ?, per_designation = ?, per_date_of_birth = ?, per_place_of_birth = ?, per_date_of_original_appointment = ? , per_tin_no = ?, per_gsis_bp_no= ?, per_pagibig_no = ?, per_contact_no = ?, rank_id = ?, per_plantilla_no= ? , per_campus = ?, dept_id = ?, per_eligibility = ?, bs_name = ?, bs_year = ?, bs_school = ?, ms_name = ?, ms_with_unit = ?, ms_year = ?, ms_school = ?, dr_name = ?, dr_with_unit = ?, dr_year = ?, dr_school = ?, other_degree = ?, other_year = ?, other_school = ?, date_modified = NOW(), gass_id = ? WHERE per_id = ?");
	$add_personnel->execute(array($per_firstname, $per_middlename, $per_lastname, $per_others, $per_gender, $per_status, $per_address, $pos_id, $per_designation, $per_date_of_birth, $per_place_of_birth, $per_date_of_original_appointment, $per_tin_no, $per_gsis_bp_no, $per_pagibig_no, $per_contact, $rank, $per_plantilla_no, $per_campus, $dept_id, $per_eligibility, $bs_name, $bs_year, $bs_school, $ms_name, $ms_with_unit, $ms_year, $ms_school, $dr_name, $dr_with_unit, $dr_year, $dr_school, $other_degree, $other_year, $other_school, $gass_id, $per_id));
	header('location:all_personnel.php');

}

?>