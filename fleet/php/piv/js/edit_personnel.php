<?php include("header.php") ?>
<?php
include ("connect.php");


$result=$con->prepare("SELECT * FROM tbl_personnel LEFT JOIN tbl_department ON tbl_personnel.dept_id = tbl_department.dept_id LEFT JOIN tbl_academic_rank ON tbl_personnel.rank_id = tbl_academic_rank.rank_id LEFT JOIN tbl_gass_rank ON tbl_personnel.gass_id = tbl_gass_rank.gass_id LEFT JOIN tbl_position ON tbl_personnel.pos_id = tbl_position.pos_id WHERE per_id='{$_GET['per_id']}'");
$result->execute();
$fetch = $result->fetchall(); 

foreach ($fetch as $key => $row) {
    $per_id = $row['per_id'];
    $pos_name = $row['pos_name'];
    $dept_id = $row['dept_id'];
    $dept_name = $row['dept_name'];
    $rank_name = $row['rank_name'];
    $gass_id = $row['gass_id'];
    $gass_name = $row['gass_name'];
    $per_designation = $row['per_designation'];
    $per_campus = $row['per_campus'];
    $per_date_of_original_appointment = $row['per_date_of_original_appointment'];
    $per_plantilla_no = $row['per_plantilla_no'];
    $per_contact_no = $row['per_contact_no'];
    $per_eligibility = $row['per_eligibility'];
    $per_tin_no = $row['per_tin_no'];
    $per_gsis_bp_no = $row['per_gsis_bp_no'];
    $per_pagibig_no = $row['per_pagibig_no'];
    $bs_name = $row['bs_name'];
    $bs_year = $row['bs_year'];
    $bs_school = $row['bs_school'];
    $ms_name = $row['ms_name'];
    $ms_with_unit = $row['ms_with_unit'];
    $ms_year = $row['ms_year'];
    $ms_school = $row['ms_school'];
    $dr_name = $row['ms_name'];
    $dr_with_unit = $row['dr_with_unit'];
    $dr_year = $row['dr_year'];
    $dr_school = $row['dr_school'];
    $other_degree = $row['other_degree'];
    $other_year = $row['other_year'];
    $other_school = $row['other_school'];

?>
    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
               <!-- Input Group -->
        <form action="edit_personnel_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>PERSONNEL INFORMATION</h4>
                            </div>
                        </div>
                        <div class="body">
                        <div  class="container-fluid" style="background-color: #ddd;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                FirstName:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_firstname" placeholder="First Name" value="<?php echo $row['per_firstname']; ?> " >
                                                <input type="hidden" class="form-control" name="per_id" placeholder="First Name" value="<?php echo $row['per_id']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                MiddleName:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_middlename" placeholder="Middle Name" value="<?php echo $row['per_middlename']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                LastName:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_lastname" placeholder="Last Name" value="<?php echo $row['per_lastname']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Suffix:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_suffix" placeholder="Sr/Jr" value="<?php echo $row['per_suffix']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Sex:
                                            </span>
                                            <select class="form-control show-tick" name="per_gender" value="<?php echo $row4['per_gender']; ?>" >
                                                <option><?php echo $row['per_gender']; ?></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Status:
                                            </span>
                                            <select class="form-control show-tick" name="per_status">
                                                <option><?php echo $row['per_status']; ?></option>
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Separated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Address:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_address" placeholder="Other Name" value="<?php echo $row['per_address']; ?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Place of Birth:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_place_of_birth" value="<?php echo $row['per_place_of_birth']; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Date of Birth:
                                            </span>
                                                <div class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_birth" value="<?php echo $row['per_date_of_birth']; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Designation:
                                            </span>
                                                <select class="form-control show-tick" name="pos_name">
                                                    <option value="<?php echo $row['pos_id'] ?>"><?php echo $row['pos_name']; ?></option>
                                                <?php
                                                include("connect.php"); 
                                               
                                                $gass1 = $con->prepare("SELECT * FROM tbl_position ORDER BY pos_id ");
                                                $gass1->execute();
                                                while($row9 = $gass1->fetch()) {
                                                ?>                  

                                                    <option value="<?php echo $row9['pos_id']; ?>"><?php echo $row9['pos_name']; ?></option>
                                                <?php }  ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Department:
                                            </span>
                                                <select class="form-control show-tick" name="dept_name">
                                                <option value="<?php echo $row['dept_id']; ?> "><?php echo $dept_name; ?></option>
                                                <?php
                                                include("connect.php"); 
                                               
                                                $department = $con->prepare("SELECT * FROM tbl_department ORDER BY dept_id");
                                                $department->execute();
                                                while($row4 = $department->fetch()) {
                                                ?>                  

                                                    <option value="<?php echo $row4['dept_id']; ?>"><?php echo $row4['dept_name']; ?></option>
                                                <?php }  ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon ">
                                                Academic Rank:
                                            </span>
                                                <select class="form-control show-tick " name="rank" >
                                                <option value="<?php echo $row['rank_id']; ?> "><?php echo $rank_name; ?></option>
                                                <?php
                                                include("connect.php"); 
                                               
                                                $rank = $con->prepare("SELECT * FROM tbl_academic_rank ORDER BY rank_id");
                                                $rank->execute();
                                                while($row20 = $rank->fetch()) {
                                                ?>                  

                                                    <option value="<?php echo $row20['rank_id']; ?>"><?php echo $row20['rank_name']; ?></option>
                                                <?php }  ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                GASS Position:
                                            </span>
                                                <select class="form-control show-tick " name="gass_name">
                                                <option value="<?php echo $row['gass_id'] ?>"><?php echo $row['gass_name']; ?></option>
                                                
                                                     <?php
                                                include("connect.php"); 
                                                $faculty_rank = $con->prepare("SELECT * FROM tbl_gass_rank ORDER BY gass_id");
                                                $faculty_rank ->execute();
                                                while($row102 = $faculty_rank->fetch()) {
                                                        $rank_name = $row102['gass_name'];
                                                ?>
                                                    <option value="<?php echo $row102['gass_id']; ?>"><?php echo $row102['gass_name']; ?></option>
                                                <?php } ?>
                                                </select>                   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Employee Status:
                                            </span>
                                                <select class="form-control show-tick main" id = "privileges" name="per_designation" value="<?php echo $row['per_designation'];?>">
                                                    <option><?php echo $per_designation; ?></option>
                                                    <option value='Permanent'>Permanent</option>
                                                    <option value='GASS'>GASS</option>
                                                    <option value='Part Time'>Part Time</option>
                                                    <option value='Job Order'>Job Order</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Campus:
                                            </span>
                                                <select class="form-control show-tick" name="per_campus" value="<?php echo $row['per_campus']; ?>">
                                                    <option><?php echo $per_campus; ?></option>
                                                    <option>Talisay</option>
                                                    <option>Fortune Towne</option>
                                                    <option>Alijis</option>
                                                    <option>Binalbagan</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                            Date of Appointment:
                                            </span>
                                                <div id="sandbox-container" class="form-line">
                                                    <input type="Date" class="form-control" name="per_date_of_original_appointment" value="<?php echo $per_date_of_original_appointment; ?>">
                                                </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">                                    
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    Plantilla Number
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control " name="per_plantilla_no" value="<?php echo $per_plantilla_no; ?>" >
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">                                    
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    Mobile No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_contact_no" id="contact_no" maxlength="22" value="<?php echo $per_contact_no; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Eligibility:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="per_eligibility" value="<?php echo $per_eligibility; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                TIN No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control key" name="per_tin_no" id="tin" value="<?php echo $per_tin_no; ?>" id = "tin">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                GSIS BP No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control key" name="per_gsis_bp_no" id="gsis" value="<?php echo $per_gsis_bp_no; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                PAG-IBIG No.:
                                            </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="per_pagibig_no" id="pagibig" maxlength="22" value="<?php echo $per_pagibig_no; ?>">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="page-header">Educational Attainment</h3> 
                                    </div>                
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Bachelor's Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="bs_name" value="<?php echo $bs_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="bs_year" value="<?php echo $bs_year; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="bs_school" value="<?php echo $bs_school; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Master's Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ms_name" value="<?php echo $ms_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                with:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ms_with_unit" value="<?php echo $ms_with_unit; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ms_year" value="<?php echo $ms_year; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ms_school" value="<?php echo $ms_school; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Doctorate Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="dr_name" value="<?php echo $dr_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                with:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="dr_with_unit" value="<?php echo $dr_with_unit; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="dr_year" value="<?php echo $dr_year; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="dr_school" value="<?php echo $dr_school; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Other Degree:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="other_degree" value="<?php echo $other_degree; ?>">
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                Year:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="other_year" value="<?php echo $other_year; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                School:
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="other_school" value="<?php echo $other_school; ?>">
                                            </div>
                                        </div>
                                    </div>                             
                                </div>  
                                    <input type="submit" name="update" value="SAVE" class="btn btn-success" style ="float:right; margin-top: -30px;">                   
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>

        </form>
            <!-- #END# Input Group -->           
        </div>
        <?php } ?>
    </section>
<script src="plugins/js/formatter.js"></script>
<script src="js/jquery.min.js"></script>
  <?php include("script.php"); ?>
    <script>
    var contanct_no = new Formatter (document.getElementById('contact_no'), {
  'pattern': '+639 {{999}}-{{999}}-{{999}}',
  'persistent': true
  });
    var pagibig = new Formatter (document.getElementById('pagibig'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
  });
     var tin = new Formatter (document.getElementById('tin'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
});
     var gsis = new Formatter (document.getElementById('gsis'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
});
</script>
    <script>
        function showImage(src,target) {
          var fr=new FileReader();
          // when image is loaded, set the src of the image where you want to display it
          fr.onload = function(e) { target.src = this.result; };
          src.addEventListener("change",function() {
            // fill fr with image data    
            fr.readAsDataURL(src.files[0]);
          });
        }

        var src = document.getElementById("src");
        var target = document.getElementById("target");
        showImage(src,target);
    </script>
    
<script type="">
    $(function(){
  
  $("select.main").on("change", function(){
    //remove active
    $("select.models.active").removeClass("active");
    //check if select vlass exists..if it does show it
    var subList = $("select.models."+$(this).val());
    if (subList.length){
      //it does! show it by adding active class to it
      subList.addClass("active");
    }
  });
  
});
</script>
<script type="">
    var Privileges = jQuery('#privileges');
    var select = this.value;
    Privileges.change(function () {
        if ($(this).val() == '') {
            $('.resources').enabled();
        }
        else $('.resources').disabled();
    });
</script>