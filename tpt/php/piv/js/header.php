<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="refresh" content="1"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Personnel Profiling</title>
 <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="plugins/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <style type="text/css">
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
        border-radius: 30%;
        margin-left: -178px;
        margin-top: 153px;
        width: 21%;
    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    .navbar-right {
        margin-left: 850px;

    }
    .notif {
        padding-top: 15px;
        margin-left: 20px;
        margin-right: 20px;
        border: 1px solid;
        height: auto;
        text-align: center;
    }
    .notif i {
        border-bottom: 2px solid;

    }
    .celeb {
        text-align: left;
        margin: 10px;
    }
    a:hover {
    text-decoration: none;
    }
    .files {
        width: 100px;
        display: inline-flex;
        margin: 5px;
        text-align: center;
    }
    </style>
</head>
<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid" style="background-color:#f44336;">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home.php" style="color: #fff;">PERSONNEL PROFILING</a>
                <ul class = "nav navbar-right"> 
                <li class = "dropdown">
                    <a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#" style="color: #fff;">
                        <span class = "glyphicon glyphicon-user" style="color: #fff;"></span>
                        <b class = "caret"></b>
                    </a>
                <ul class = "dropdown-menu">
                    <li>
                        <a class = "me" href = "logout.php" onclick="if(confirm('Logging out, Thank you and see you soon Admin!') == 0){return false;}"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
                    </li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">DASHBOARD</li>
                    <li>
                        <a href="home.php">
                            <i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Home
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="glyphicon glyphicon-th-large"></i>&nbsp;&nbsp;Manage
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="all_personnel.php">Personnel</a>
                            </li>
                            <li>
                                <a href="position_table.php">Designation</a>
                            </li>
                            <li>
                                <a href="gass_rank_table.php">GASS Position</a>
                            </li>
                            <li>
                                <a href="rank_table.php">Academic Rank</a>
                            </li>
                            <li>
                                <a href="department_table.php">Department</a>
                            </li>
                            <li>
                                <a href="file_table.php">
                                    Files
                                </a>
                            </li>
                        </ul> 
                    </li>                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-education"></i>&nbsp;&nbsp;Campuses
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="all_campus.php">ALL CAMPUSES</a>
                            </li>
                            <li>
                                <a href="talisay_campus.php">TALISAY</a>
                            </li>
                            <li>
                                <a href="fortune_towne_campus.php">FORTUNE TOWNE</a>
                            </li>
                            <li>
                                <a href="alijis_campus.php">ALIJIS</a>
                            </li>
                            <li>
                                <a href="binalbagan_campus.php">BINALBAGAN</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            
                            <i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;Reports
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="individual_report.php">Individual Reports</a>
                            </li>
                            <li>
                                <a href="retirement_table.php">Retirement</a>
                            </li>
                            <li>
                                <a href="faculty_profile.php">Faculty Profile by Unit</a>
                            </li>
                            <li>
                                <a href="educational_qualification.php">Educational Qualifications</a>
                            </li>
                            <li>
                                <a href="faculty_per_campus.php">Number of Faculty / Campus</a>
                            </li>
                            <li>
                                <a href="Faculty_profile_by_degree.php">Faculty Profile by Degree</a>
                            </li>
                            <li>
                                <a href="faculty_profile_by_academic_rank.php">Faculty Profile by Academic Rank</a>
                            </li>
                            <li>
                                <a href="breakdown_of_faculty_profile.php">Breakdown Of Faculty</a>
                            </li>
                            <li>
                                <a href="gass_profile_by_degree.php">Gass Profile By Degree</a>
                            </li>
                            <li>
                                <a href="gass_per_campus.php">Number of Gass Personnel per Campus</a>
                            </li>
                            <li>
                                <a href="job_order_per_campus.php">Number of Job Order Personnel per Campus</a>
                            </li>
                            <li>
                                <a href="gass_personnel.php">GASS Personnel with Completed Master's and Doctoral Degree</a>
                            </li>
                        </ul>
                    </li>
                </ul><br><br><br>
                <div class="dtime">
                    <div class="alert alert-info">
                        <i class="icon-calendar"></i>
                        <?php
                        $today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($today));
                        echo $new;
                        ?>
                    </div>
                 </div>
                <div class="notif">
                <span><i>TODAY'S BIRTHDAYS</i></span><br><br>
                <div class="celeb">
                <?php
                  include("connect.php"); 
                    $date = date('-m-d');
                    $bquery = $con->prepare("SELECT * FROM tbl_personnel WHERE per_date_of_birth LIKE '%$date%' ");
                    $bquery->execute();
                    while($row = $bquery->fetch()) {
                        $bday = $row["per_date_of_birth"];
                        $date = new DateTime($bday);
                        $now = new DateTime();
                        $difference = $date->diff($now)->format('%y');
                        $gender = $row['per_gender'];

                    if ($gender == 'Male') { ?>
                    
                        <span>Age: <?php echo $difference; ?></span><br>
                        <span">Name: Mr. <?php echo $row['per_firstname']. " " . $row['per_middlename']. ". " . $row['per_lastname']; ?></span><br>
                        <span>Contact No.: <?php echo $row['per_contact_no']; ?></span><br>
                        <span>Campus: <?php echo $row['per_campus']; ?></span><br><br>
                   <?php } else { ?>
                        <span>Age: <?php echo $difference; ?></span><br>
                        <span>Name: Ms/Mrs. <?php echo $row['per_firstname']. " " . $row['per_middlename']. ". " . $row['per_lastname']; ?></span><br>
                        <span>Contact No.: <?php echo $row['per_contact_no']; ?></span><br>
                        <span>Campus: <?php echo $row['per_campus']; ?></span><br>
                  <?php  }
                  }
                ?>
                    </div>
                </div>
            </div>

        </aside>
    </section>

            <?php include("add_position_modal.php"); ?>
            <?php include("add_rank_modal.php"); ?>
            <?php include("add_department_modal.php"); ?>



