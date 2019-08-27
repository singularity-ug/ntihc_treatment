<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ntihc | reception</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap3.css">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/assets/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="admin/assets/ionicons.min.css">
    <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="admin/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="admin/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="admin/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="admin/assets/notifier.css">
    <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet" href="admin/datatable/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="admin/datatable/css/buttons.dataTables.min.css">

    <script src="admin/datatable/js/jquery-1.12.3.js"></script>
    <script src="admin/datatable/js/jquery.dataTables.min.js"></script>
    <script src="admin/datatable/js/bootstrap.min.js"></script>
    <script src="admin/datatable/js/dataTables.bootstrap.min.js"></script>
    <script src="admin/datatable/js/dataTables.buttons.min.js"></script>
    <script src="admin/datatable/js/buttons.flash.min.js"></script>
    <script src="admin/datatable/js/jszip.min.js"></script>
    <script src="admin/datatable/js/pdfmake.min.js"></script>
    <script src="admin/datatable/js/vfs_fonts.js"></script>
    <script src="admin/datatable/js/buttons.html5.min.js"></script>
    <script src="admin/datatable/js/buttons.print.min.js"></script>

    <style media="screen">
    .btn {
        padding: 0px 3px;
    }

    .table>tbody>tr>td,
    .table>tbody>tr>th,
    .table>tfoot>tr>td,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>thead>tr>th {
        border-top: 1px solid #ecf0f5;
        line-height: 1.0;
        padding: 3px;
        vertical-align: center;
    }

    .progress {
        vertical-align: center;
        margin-bottom: 0px;
    }

    table,
    th,
    td {
        border: 1px solid #ecf0f5;
        border-collapse: collapse;
        padding-left: 0px;
        padding-bottom: 0px;
        font-size: 12px;
        color: #000000;
    }

    table tr:nth-child(odd) {
        background: #fff;
    }

    table tr:nth-child(even) {
        background: #fff;
    }
    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <header class="main-header">
        <!-- Logo -->
        <a href="client_medical.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>RECEPTION</b> </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="client_management.php" class=""> Clients mgt<span
                                class="sr-only">(current)</span></a></li>
                    <li><a href="medical/waiting_room.php" class=""> Waiting room<span
                                class="sr-only">(current)</span></a></li>
                    <li><a href="admin/service_delivery/medical_tool_user.php" class=""> Tally tool
                            <span class="sr-only">(current)</span></a></li>

                    <li><a href="admin/reports/prescription.php?d1=0&d2=0" class="button 5" class="button 5"
                            style="height: 22px; border-radius: 7px; margin-top: 14px; padding: 1px 8px;">
                            Daily report<span class="sr-only">(current)</span></a></li>

                </ul>

            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"><b>Welcome:</b></i>

                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"> </li>
                            <li>

                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="assets/img/ntihclog2.png" width="100" height="100"
                                                    class="user-image" alt="User Image">
                                            </div>
                                            <h4>
                                                Ntihc M.E team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not use this awesome application?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- Notifications: style can be found in dropdown.less -->
                                    <li class="dropdown notifications-menu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="glyphicon glyphicon-user"></i>
                                            <span class="">&nbsp;<?php echo $nameofuser; ?> </span>
                                        </a>

                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="glyphicon glyphicon-th"></i>
                                            <span class="">&nbsp;<?php echo $desc; ?> </span>
                                        </a>

                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="glyphicon glyphicon-share"></i>
                                            <span class="">&nbsp;<?php echo $dept; ?> </span>
                                        </a>

            </div>
        </nav>
    </header>

    <div class="row">
        <div class="col-md-4">
            <br>
            <div class="box-header with-border" style="background-color: #ecf0f5;">
                <div class="nav-tabs-custom">

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1-1">
                            <div class="panel-body" style="margin-top: -25px;">

                                <div id="dialog-window">


                                </div>


                            </div>

                            <style>
                            #dialog-window {
                                height: 227px;
                                border: 0px black solid;
                                border-radius: 7px;
                                width: 100%;
                            }

                            #scrollable-content {
                                height: 227px;
                                overflow: auto;
                                background-color: transparent;
                                width: 100%;
                            }

                            #footer {
                                height: 0px;
                            }
                            </style>


                        </div>
                        <!-- /.tab-pane -->

                        <!-- /.tab-pane -->
                    </div>
                </div>

            </div>


            <!-- /.box-header -->
            <div class="box-body" style="background-color: #ecf0f5;">

                <div class="progress" style="margin-top: -19px;">
                    <div class="progress-bar progress-bar-success"
                        style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                        <b style="font-size:14px; text-align:center;"> </b> <span class="sr-only">35% Complete
                            (success)</span></div>
                    <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete
                            (warning)</span></div>
                    <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete
                            (warning)</span></div>
                    <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete
                            (danger)</span></div>
                </div>
                <p></p>

                <div class="col-sm-6">
                    <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;" <p
                        style="font-size:12px;">Off site data</p>
                        <br>
                        <p class="button 5"
                            style="font-size:30px; font-family:lcd; margin-top:-15px; text-align:center;">
                            // 4400
                        </p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;">
                        <p style="font-size:12px;"> Pending entries0</p>
                        <br>
                        <p class="button 5"
                            style="font-size:30px; font-family:lcd; margin-top:-15px; text-align:center;">
                            // 4400
                        </p>
                    </div>
                </div>


                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-8">

        </div>

    </div>
    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!-- /.col -->


    </div>
    <br>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
    <!-- START PROGRESS BARS -->

    </div>
    </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog4">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:red;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"> </h4>
                        </div>
                        <div class="modal-body">


                            <div class="" id="getvist"> </div>

                            <div class="col-sm-12">
                                <BR>


                                </form>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="modal" id="impres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog4">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:red;">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel"> </h4>
                            </div>
                            <div class="modal-body">


                                <div class="" id="pettyview"> </div>

                                <div class="col-sm-12">
                                    <BR>

                                    <p style="text-transform: ; text-align:left; font-weight:bold;"> </p>

                                    </form>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog4">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color:red;">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel"> </h4>
                                </div>
                                <div class="modal-body">


                                    <div class="" id="getresults"> </div>

                                    <div class="col-sm-12">
                                        <BR>

                                        <p style="text-transform: ; text-align:left; font-weight:bold;"> </p>

                                        </form>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b> </b>
        </div>
        <strong>Copyright &copy; <a href="admin/budget_config.php">Naguru Teenage Information and Health
                Center</a>.</strong> All rights
        reserved.
    </footer>
    <!-- Control Sidebar -->


    <!-- jQuery 2.2.3 -->

    <script src="assets/lib/moment/moment.min.js"></script>
    <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="admin/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="admin/plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="admin/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin/dist/js/demo.js"></script>
    <!-- Page script -->


</body>

</html>