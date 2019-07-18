<?php
include('connect.php');
if(isset($_POST['save'])) {
	$per_firstname = $_POST['per_firstname'];
	$per_middlename = $_POST['per_middlename'];
	$per_lastname = $_POST['per_lastname'];
	$per_suffix = $_POST['per_suffix'];
	$per_gender = $_POST['per_gender'];
	$per_status = $_POST['per_status'];
	$per_address = $_POST['per_address'];
	$per_position = $_POST['per_position'];
	$per_rank = $_POST['rank_name'];
	$per_eligibility = $_POST['per_eligibility'];
	$dept_id = $_POST['dept_id'];
	$per_designation = $_POST['per_designation'];
	$per_date_of_birth  = $_POST['per_date_of_birth'];
	$per_place_of_birth = $_POST['per_place_of_birth'];
	$per_tin_no = $_POST['per_tin_no'];
	$per_gsis_bp_no = $_POST['per_gsis_bp_no'];
	$per_pagibig_no = $_POST['per_pagibig_no'];
	$per_contact_no = $_POST['per_contact_no'];
	$per_plantilla_no = $_POST['per_plantilla_no'];
	$per_date_of_original_appointment = $_POST['per_date_of_original_appointment'];
	$per_campus = $_POST['per_campus'];
	$bs_name = $_POST['bs_name'];
	$bs_year = $_POST['bs_year'];
	$bs_school = $_POST['bs_school'];
	$ms_name = $_POST['ms_name'];
	$ms_with_unit = $_POST['ms_with_unit'];
	$ms_year = $_POST['ms_year'];
	$ms_school = $_POST['ms_school'];
	$dr_name = $_POST['dr_name'];
	$dr_with_unit = $_POST['dr_with_unit'];
	$dr_year = $_POST['dr_year'];
	$dr_school = $_POST['dr_school'];
	$other_degree = $_POST['other_degree'];
	$other_year = $_POST['other_year'];
	$other_school = $_POST['other_school'];
	$gass_id = $_POST['gass_name'];


	$add_personnel = $con->prepare("INSERT INTO tbl_personnel (per_firstname, per_middlename, per_lastname,per_suffix, per_gender, per_status, per_address, pos_id, rank_id, dept_id,per_designation, per_date_of_birth, per_place_of_birth,per_date_of_original_appointment,per_eligibility, per_tin_no, per_gsis_bp_no, per_pagibig_no, per_contact_no, per_plantilla_no, per_campus ,bs_name, bs_year, bs_school, ms_name, ms_with_unit, ms_year, ms_school, dr_name, dr_with_unit, dr_year, dr_school, other_degree, other_year, other_school, date_modified , gass_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ? )");
	$add_personnel->execute(array($per_firstname, $per_middlename, $per_lastname,$per_suffix, $per_gender,$per_status,$per_address, $per_position, $per_rank, $dept_id, $per_designation, $per_date_of_birth, $per_place_of_birth,$per_date_of_original_appointment,$per_eligibility, $per_tin_no, $per_gsis_bp_no, $per_pagibig_no, $per_contact_no, $per_plantilla_no, $per_campus,$bs_name, $bs_year, $bs_school, $ms_name, $ms_with_unit, $ms_year, $ms_school, $dr_name, $dr_with_unit, $dr_year, $dr_school, $other_degree, $other_year, $other_school,$gass_id));

	header('location:home.php');
}
?>