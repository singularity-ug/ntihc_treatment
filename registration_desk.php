<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
$rm         = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
$rm = $_SESSION['MREPEAT']; 
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.css">
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
    <link rel="stylesheet" href="admin/assets/notifier.css">
    <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
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


    <script>
    $(document).ready(function() {
        $('#example1').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [

            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('#example').DataTable({
            "iDisplayLength": 10,
            dom: 'Bfrtip',
            buttons: [

            ]
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#example13').DataTable();
    });
    </script>

    <script type="text/javascript">
    function pop(dat) {
        $("#res").html("");
        var data = dat.split("__");
        $("#" + data[0]).val(data[1]);

        var num = data[0].substring(3);

        $("#NTIHCNO" + num).val(data[2]);
        $("#CNAME").val(data[2]);
        $("#PID").val(data[3]);
        $("#AGE").val(data[4]);
        $("#REVEXT").val(data[5]);

    }

    function domee(ths) {

        var bd = ths.value;
        var idxx = ths.id;
        if (bd === '') {
            $("#res").html("");
        } else {
            var dataString = "bd=" + bd + "&id=" + idxx;
            $.ajax({
                type: "POST",
                url: "jquery_search/serch_client.php",
                data: dataString,
                cache: false,
                success: function(result) {

                    $("#res").html(result);
                }
            });
        }
    }
    </script>

    <script>
    function searchpro() {
        var dataString = document.getElementById('MOTHERLASTNAME').value;

        if (dataString == '') {
            document.getElementById('schrest').innerHTML = "";
        } else {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //alert(this.responseText);
                    document.getElementById('schrest').innerHTML = this.responseText; //
                }
            };
            xhttp.open("GET", "get_clientno.php?q=" + dataString, true);
            xhttp.send();

        }
    }

    function agecalc() {
        var pn = $("#datepicker1").val();
        var dataString = "d=" + pn;
        $.ajax({
            type: "POST",
            url: "time.php",
            data: dataString,
            cache: false,
            success: function(result) {
                $("#AGE1").val(result);
            }
        });
    }

    function upt(idxx) {
        var separatedDataArray = idxx.split("__");
        document.getElementById('MOTHERLASTNAME').value = separatedDataArray[0];
        document.getElementById('NTIHCNO').value = separatedDataArray[1];
        document.getElementById('CNAME').value = separatedDataArray[2];
        document.getElementById('AGE1').value = separatedDataArray[3];
        document.getElementById('schrest').innerHTML = "";
        document.getElementById('AGE').value = separatedDataArray[5];
    }
    </script>

    <script type="text/javascript">
    $(function() {
        $("#lava_menu").lavaLamp({
            fx: "backout",
            speed: 700
        });
    });
    </script>


    <script type="text/javascript">
    function ajaxFunction(str) {
        var httpxml;
        try {
            // Firefox, Opera 8.0+, Safari
            httpxml = new XMLHttpRequest();
        } catch (e) {
            // Internet Explorer
            try {
                httpxml = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    httpxml = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    alert("Your browser does not support AJAX!");
                    return false;
                }
            }
        }

        function stateChanged() {
            if (httpxml.readyState == 4) {
                document.getElementById("displayDiv").innerHTML = httpxml.responseText;
                document.getElementById("msg").style.display = 'none';

            }
        }
        var url = "registration_desk_oldpidsearch.php";
        url = url + "?txt=" + str;
        url = url + "&sid=" + Math.random();
        httpxml.onreadystatechange = stateChanged;
        httpxml.open("GET", url, true);
        httpxml.send(null);
        document.getElementById("msg").innerHTML = "Please Wait ...";
        document.getElementById("msg").style.display = 'inline';
    }
    </script>

    <script>
    var x = 0,
        y = 0;

    function postclient(vd) {

        var dta = vd.split("###");
        $("#NTIHCNO").val(dta[0]);
        $("#CNAME").val(dta[1]);
    }
    </script>

    <script>
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }

    var t = setInterval(function() {
        var today = new Date();
        document.getElementById('CHECKIN').value = today.getHours() + ":" + checkTime(today.getMinutes()) +
            ":" + checkTime(today.getSeconds());

    }, 1000);
    </script>

    <style media="screen">
    .btn {
        padding: 0px 5px;
    }

    .table>tbody>tr>td,
    .table>tbody>tr>th,
    .table>tfoot>tr>td,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>thead>tr>th {
        border-top: 1px solid #000000;
        line-height: 1.0;
        padding: 3px;
        vertical-align: center;
        font-weight: normal;
    }

    .progress {
        vertical-align: center;
        margin-bottom: 0px;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding-left: 0px;
        padding-bottom: 0px;
        font-size: 11px;
        color: #000000;
        font-weight: normal;
    }

    table tr:nth-child(odd) {
        background-color: transparent;
    }

    table tr:nth-child(even) {
        background-color: transparent;
    }
    </style>


</head>

<body class="hold-transition skin-blue sidebar-mini"
    style="background:url(assets/img/pattern/4326703-white-background-wallpapero.jpg);">

    </header>

    <!-- Main content -->
    <section class="content">


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-1">
                </div>

                <?php
  $id ='';  
  $NTIHCNO = ''; 
  $FIRSTNAME  = '';
  $LASTNAME = '';
  $AGE = '';    
  $SCHOOLINGSTATUS='';  
  $SEX='';
  $PID='';
  $VISTTYPE='';
  $DATECREATED='';
     
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT NTIHCNO,FIRSTNAME,LASTNAME,SCHOOLINGSTATUS,SEX,VISTTYPE, DATECREATED,PID,AGE,CURDATE(), TIMESTAMPDIFF(YEAR,AGE,CURDATE()) AS age FROM cmpatientsnewregistration
                  Where REGISTERACCOUNT ='$rm'AND SERVICEPOSTS = 'POSTED' ORDER BY PID DESC LIMIT 1";

   $res = $conn->query($sql);

   while($row=$res->fetch_assoc()){
   $NTIHCNO = $row['NTIHCNO'];
   $FIRSTNAME = $row['FIRSTNAME'];  
   $LASTNAME=$row['LASTNAME'];  
   $AGE   = $row['age']; 
   $SCHOOLINGSTATUS=$row['SCHOOLINGSTATUS']; 
   $VISTTYPE=$row['VISTTYPE']; 
   $DATECREATED=$row['DATECREATED']; 
   $SEX   = $row['SEX']; 
   $id=$row['PID']; 
   $PID=$row['PID'];
   } 
   ?>

                <div class="col-md-11">

                    <div class="col-md-5">
                        <table border="1" cellpadding="4" cellspacing="0"
                            style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;"
                            width="100%">
                            <thead>
                                <tr>
                                    <td style="width:33.3333%; border: 1px;"> <a href="client_management.php">
                                            <img src="assets/imgx/index.png" width="100" height="100" class="img-circle"
                                                style="border: 6px solid #ecf0f5; height:50px; width:50px;">
                                            Dashboard </a>
                                        <div class="pull-right box-tools"> </div>
                    </div>
                    </td>

                    <td style="width:33.3333%; border: 1px;"> <a href="registration_desk.php">
                            <center><img src="assets/imgx/indexreewss.png" width="100" height="100" class="img-circle"
                                    style="border: 6px solid #ecf0f5; height:50px; width:50px;">
                                Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </center>
                        </a>
                        <div class="pull-right box-tools"> </div>
                </div>
                </td>

                <td style="width:33.3333%; border: 1px;"> <a href=<button data-toggle="modal" data-target="#uiModal3"
                        style="background-color:#00a65a;"> </button>
                        <center><img src="database icons/access-administrator-account.jpg" width="100" height="100"
                                class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;">
                            Register </center>
                    </a>
                    <div class="pull-right box-tools"> </div>
            </div>
            </td>
            </tbody>
            <br>
            </table>
            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
                <thead>
                    <tr>
                        <td style="width:33.3333%; border: 1px;"> <a href="regn_services.php">
                                <img src="database icons/exchange-512.png" width="100" height="100" class="img-circle"
                                    style="border: 6px solid #ecf0f5; height:50px; width:50px;">
                                Referal </a>
                            <div class="pull-right box-tools"> </div>
                            </div>
                        </td>

                        <td style="width:33.3333%; border: 1px;"> <a
                                href="admin/reports/med_daily_reception.php?d1=0&d2=0">
                                <center><img src="assets/imgx/kkk.png" width="100" height="100" class="img-circle"
                                        style="border: 6px solid #ecf0f5; height:50px; width:50px;">
                                    Reports&nbsp;&nbsp;&nbsp;</center>
                            </a>
                            <div class="pull-right box-tools"> </div>
                            </div>
                        </td>

                        <td style="width:33.3333%; border: 1px;"> <a href="medical/waiting_room.php">
                                <center><img src="assets/imgx/imagesffffffff.png" width="100" height="100"
                                        class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;">
                                    Waiting </center>
                            </a>
                            <div class="pull-right box-tools"> </div>
                            </div>
                        </td>
                        </tbody>
            </table>
            <br>

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
                <thead>
                    <tr>
                        <td style="width:10%; border: 0px;">
                            <img src="assets/img/ntihclog2.png" width="60" height="60" style="border: 0px; ">
                        </td>

                        <td style="width:80%; border: 0px;">
                            <center style="color:#000; font-weight:bold; font-size:12px;">NAGURU TEENAGE INFORMATION AND
                                HEALTH CENTER</center>
                            <p></p>
                            <center
                                style="color:#000; font-weight:bold; font-size:12px;font:bold 13px 'Aleo'; text-shadow:1px 1px 4px #000; color:#fff;">
                                REGISTRATION DESK</center><BR>

                        <td style="width:10%; border: 1px;">
                        </td>
                        </tbody>
            </table>

            <form class="form-horizontal" method="post" action="registration_reception_process.php"
                style="height: auto;background-color:transparent;">

                <div class="col-sm-6">
                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border:0px;text-align:left;background-color:transparent;"
                        width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%; border:0px;background-color:transparent; font-size:11px;">NTIHC
                                    No. </th>
                                <td style="width:60%;border:0px;background-color:transparent;">
                                    <input type="numeric" onKeyUp="domee(this)" name="NTIHCNO" id="NTIHCNO"
                                        value="<?php echo $NTIHCNO; ?>" required="required" autocomplete="off"
                                        placeholder="Search client "
                                        style="width:100%; background-color:transparent; text-transform:uppercase; font-size:10px;">
                                </td>

                            </tr>
                    </table>


                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border:0px;text-align:left;margin-top:5px;background-color:transparent;"
                        width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%;  border:0px;background-color:transparent;">Client name </th>
                                <td style="width:60%;border:0px;background-color:transparent;">
                                    <input type="text" name="CNAME" id="CNAME"
                                        value="<?php echo $LASTNAME; ?> <?php echo $FIRSTNAME; ?>" readonly="readonly"
                                        style="font-size:10px; width:100%; background-color:transparent; text-transform: uppercase;">
                                </td>
                                <input type="hidden" name="PID" id="myid" value="<?php echo $PID; ?>">
                            </tr>
                    </table>

                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;"
                        width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%;  border:0px;background-color:transparent;">Age</th>
                                <td style="width:60%;border:0px;background-color:transparent;">
                                    <input type="text" name="AGE1" id="AGE" value="<?php echo $AGE; ?>"
                                        readonly="readonly"
                                        style="width:100%; background-color:transparent; text-transform: uppercase;">
                            </tr>
                    </table>

                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;"
                        width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%; border:0px;background-color:transparent;">User initial</th>
                                <td
                                    style="width:60%;border:0px; background-color:transparent; text-transform: uppercase;">
                                    <input type="text" name="USERINITIAL" id="USERINITIAL"
                                        value="<?php echo $nameofuser; ?>" readonly="readonly"
                                        style="font-size:10px;width:100%; background-color:transparent; text-transform: uppercase;">
                            </tr>
                    </table>

                </div>

                <div class="col-sm-6">
                    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%; border:0px;background-color:transparent;">Visit Date</th>
                                <td style="width:60%;border:0px; background-color:transparent;">
                                    <input type="date" name="EXAMDATE" id="EXAMDATE" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" required="required"
                                        style="font-size:10px;width:100%; background-color:transparent;" /> </td>

                            </tr>
                    </table>
                </div>

                <div class="col-sm-6"> 

                    <script type="text/javascript">
                        function showDiv(prefix,chooser) 
                        {
                            for(var i=0; i<chooser.options.length; i++) 
                            {
                                var div = document.getElementById(prefix+chooser.options[i].value);
                                div.style.display = 'none';
                            }
                            
		                    var selectedOption = (chooser.options[chooser.selectedIndex].value);
 
                            if(selectedOption == "1")
                            {
                                displayDiv(prefix,"1");
                            }
                            else if(selectedOption == "PREGNANCY RELATED SERVICES")
                            {
                                displayDiv(prefix,"PREGNANCY RELATED SERVICES");
                            }
                            else if(selectedOption == "MEDICAL SERVICES")
                            {
                                displayDiv(prefix,"MEDICAL SERVICES");
                            }
                            else if(selectedOption == "COUNSELLING SERVICES")
                            {
                                displayDiv(prefix,"COUNSELLING SERVICES");
                            }
                            else if(selectedOption == "OUTREACH")
                            {
                                displayDiv(prefix,"OUTREACH");
                            }
                            else if(selectedOption == "OTHER SERVICES")
                            {
                                displayDiv(prefix,"OTHER SERVICES");
                            }
 
                        }
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>


<!--=========================================================================================================================-->

                    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left; margin-top:5px;" width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%; border:0px;background-color: transparent;">Service Type</th>
                                <td style="width:60%;border:0px; background-color:transparent;">
                                    <select name="SERVICETYPE" id="cboOptions" onChange="showDiv('div',this)" required="required" style="font-size:10px; width:100%; background-color:transparent;" />
                                        <option value=""></option>
                                        <option value="MEDICAL SERVICES">MEDICAL SERVICES</option>
                                        <option value="COUNSELLING SERVICES">COUNSELLING SERVICES</option>
                                        <option value="PREGNANCY RELATED SERVICES">MATERNAL HEALTH SERVICES </option>
                                        <option value="OUTREACH">OUTREACH</option>
                                        <option value="MOONLIGHT">MOONLIGHT</option>
                                        <option value="OTHER SERVICES">OTHER SERVICES</option>
                                    </select>
                                </td>
                            </tr>
                    </table>

                    <div id="div1" class="text" style="display:none;"> </div>
                    <div id="divMEDICAL SERVICES" class="text" style="display:none;"> </div>
                    <div id="divCOUNSELLING SERVICES" class="text" style="display:none;"> </div>
                    <div id="divOUTREACH" class="text" style="display:none;"> </div>
                    <div id="divMOONLIGHT" class="text" style="display:none;"> </div>
                    <div id="divOTHER SERVICES" class="text" style="display:none;"> </div>
                    <div id="divPREGNANCY RELATED SERVICES" class="text" style="display:none;">
                        <table border="1" cellpadding="4" cellspacing="0"
                            style="font-family: arial; font-size: 12px; border:0px;text-align:left;margin-top:5px;"
                            width="100%">
                            <thead>
                                <tr>
                                    <th style="width:40%; border:0px;background-color: transparent;color:#d70000;">
                                        Select MHS</th>
                                    <td style="width:60%;border:0px;background-color:transparent;">
                                        <select id="MATERNALHEALTHSERVICE" name="MATERNALHEALTHSERVICE"
                                            style="font-size:10px; width:100%; background-color:transparent; " />
                                        <option></option>
                                        <option>ANC</option>
                                        <option>PNC</option>
                                        <option>FP</option>
                                        <option>PAC</option>
                                        </td>
                                        </select>
                                </tr>
                        </table>
                    </div>
                </div>
                <!-- /.tab-pane -->


                <div class="col-sm-6">
                    <p></p>
                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border:0px;text-align:left;margin-top:5px;"
                        width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%; border:0px;background-color:transparent;">Vist type</th>
                                <td style="width:60%;border:0px;background-color:transparent;">
                                    <input type="text" name="VISTTYPE" id="REVEXT" value="<?php echo $VISTTYPE; ?>"
                                        readonly="readonly"
                                        style="font-size:10px; width:100%; background-color:transparent;" />
                                </td>
                            </tr>
                    </table>

                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border:0px;text-align:left;margin-top:5px;"
                        width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%;  border:0px;background-color:transparent;">Data type</th>
                                <td style="width:30%;border:0px;background-color:transparent;text-align:left;">
                                    <input type="radio" name="DATATYPE" id="DATATYPE" value="ON SITE" checked>
                                    <label for="ON SITE">ON SITE</label> </td>
                                <td style="width:30%;border:0px;background-color:transparent;text-align:left;">
                                    <input name="DATATYPE" type="radio" id="DATATYPE" value="OFF SITE">
                                    <label for="OFF SITE">OFF SITE</label>
                                </td>
                            </tr>
                    </table>
                </div>

                <div class="col-sm-12" style="margin-top:5px;">
                    <div id="res"> </div>
                </div>

                <input type="hidden" id="CHECKIN" name="CHECKIN" readonly style="text-align:center; border:0px;">

                <input type="hidden" id="REGISTERACCOUNT" name="REGISTERACCOUNT" value="<?php echo $rm; ?>">

                <input type="hidden" name="RSVNID" id="RSVNID" value=" <?php echo uniqid();?>">

                <input type="hidden" id="SCHOOLING" name="SCHOOLING" value="<?php echo $SCHOOLINGSTATUS; ?>">

                <div class="panel-body">
                    <center><input type="submit" name="button" id="button" value="Process client vist"
                            style=" font-weight:bold; border-radius:11px; width: 100%; height:29px;" /> </center>
            </form>

            </form>


            <br>
            </div>

            <div class="panel-body">
                <div class="panel-body"
                    style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">

                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
                        <thead>
                            <tr>
                                <th style="width:39%; text-align:left; border:0px;"> <strong>Clients&nbsp;due
                                        for&nbsp;Medical</strong></th>
                                <th style="width:10%; text-align:left; border:0px;">
                                    <b style="text-align:center; font-size:40px; color:#fff; font-size: 15px;border-radius: 11px;"
                                        class="button 5">
                                        <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
        AND SERVICETYPE ='MEDICAL SERVICES' 
                                     AND INSVCSTATUS ='NO'
                                ORDER BY NTIHCNO DESC");
        $result->execute();
        $rowcount11 = $result->rowcount(); 
       ?>
                                        <?php echo $rowcount11;?>
                                        </td>
                                <th style="width:2%; text-align:left; border:0px;"> </th>
                                <th style="width:39%; text-align:left; border:0px;"><strong>Pending for
                                        M.H.Services</strong> </th>
                                <th style="width:10%; text-align:left; border:0px;">
                                    <b style="text-align:center; color:#fff; font-size:40px;font-size: 15px;border-radius: 11px;"
                                        class="button 5">
                                        <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date'
 AND SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO'
                      GROUP BY NTIHCNO ORDER BY DATECREATED");
        $result->execute();
        $rowcount22 = $result->rowcount(); 
       ?>
                                        <?php echo $rowcount22;?>
                                    </b>
                                    </td>
                            </tr>
                    </table>
                </div>
            </div>

            <br>
            <div class="panel-body">
                <div class="panel-body"
                    style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">

                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
                        <thead>
                            <tr>
                                <th style="width:39%; text-align:left; border:0px;"> <strong>Due for counselling
                                        services</strong></th>
                                <th style="width:10%; text-align:left; border:0px;">
                                    <b style="text-align:center; color:#fff; font-size:40px;font-size: 15px;border-radius: 11px;"
                                        class="button 5">
                                        <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
                               GROUP BY NTIHCNO ORDER BY DATECREATED");
        $result->execute();
        $rowcount13 = $result->rowcount(); 
       ?>
                                        <?php echo $rowcount13;?>
                                        </td>
                                <th style="width:2%; text-align:left; border:0px;"> </th>
                                <th style="width:39%; text-align:left; border:0px;"><strong>Due for other
                                        services</strong> </th>
                                <th style="width:10%; text-align:left; border:0px;">
                                    <b style="text-align:center; color:#fff; font-size:40px;font-size: 15px;border-radius: 11px;"
                                        class="button 5">
                                        <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND
  SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO'
                      GROUP BY NTIHCNO ORDER BY DATECREATED");
        $result->execute();
        $rowcount24 = $result->rowcount(); 
       ?>
                                        <?php echo $rowcount24;?>
                                    </b>
                                    </td>
                            </tr>
                    </table>
                </div>
            </div>

            </div>
            <div class="col-sm-6">
                <P style="font-size:17px; text-align:center; font-family:lcd; ">Search client info</P>



                <table id="example" class="table table-tabled table-bordered"
                    style="font-weight:normal; font-size:9px; width:100%;">
                    <thead>
                        <tr>
                            <th style="font-size:10px;">NO</th>
                            <th style="font-size:10px;">NTIHC.NO.</th>
                            <th style="font-size:10px;">CLIENT.NAME</th>
                            <th style="font-size:10px;">AGE</th>
                            <th style="font-size:10px;">MOTHER.NAME.</th>
                            <th style="font-size:10px;">POST</th>
                            <th style="font-size:10px;">EDIT</th>

                        </tr>
                        </tfoot>
                    <tbody>

                        <script>
                        function postclientxx(myid) {
                            var dts = myid.split("***");
                            document.getElementById("NTIHCNO").value = dts[1];
                            document.getElementById("myid").value = dts[0];
                            document.getElementById("CNAME").value = dts[2];
                            document.getElementById("myAGE1").value = dts[3];

                        }
                        </script>


                        <?php 
include_once("updatecmgt/config.php");
   
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsnewregistration 
                                 ORDER BY PID DESC LIMIT 700");
  
  while($res = mysqli_fetch_array($result)) {
  $dts = $res['PID']."***".$res['NTIHCNO']."***".$res['FIRSTNAME']." ".$res['LASTNAME']."***".$res['AGE1'];
    echo "<tr>";
    echo "<td>".$res['PID']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']."</td>"; 
    echo "<td>".$res['AGE1']."</td>"; 
    echo "<td>".$res['MOTHERFIRSTNAME']." ".$res['MOTHERLASTNAME']."</td>";    
    echo '<td> &nbsp;&nbsp;&nbsp; 
    <a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="Post"   onclick="postclientxx(this.id)"> 
    <span class="glyphicon glyphicon-ok"> </span> </a> </td>';  
     
    echo "<td><a href=\"clients/regn_data_form.php?PID=$res[PID]\">Click</a> </td>";   
  }
     
    ?>
                    </tbody>
                </table>

            </div>



            <div class="col-sm-11" style="background-color:transparent;">
                <br><br>
                <div class="panel-body">
                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; text-align:left;background-color:transparent;"
                        width="100%">
                        <thead>
                            <tr>
                                <th>SERVICE DATE</th>
                                <th>SERVICE PROVIDER</th>
                                <th colspan="3" style="text-align:center;"> REGISTRATION DESK SERVICE TYPE </th>

                                <th style="text-align:center;">TOTAL</th>

                            </tr>

                            <tr>
                                <th colspan="1" style="border-top:1px solid #999999"> </th>
                                <th colspan="1" style="border-top:1px solid #999999"> </th>
                                <th style="text-align:center;">MEDICAL SERVICES</th>
                                <th style="text-align:center;">COUNSELLING SERVICES</th>
                                <th style="text-align:center;">PREGNANCY RELATED</th>
                                <th colspan="1" style="border-top:1px solid #999999"> </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include('admin/reports/connftl.php');
              $date = date("Y-m-d").' 00:00:00';
              $query1=mysqli_query($conn,"select DATECREATED,  SERVICETYPE, USERINITIAL, SUM(RECORDCOUNTER), 
                                               sum( if( SERVICETYPE = 'MEDICAL SERVICES', RECORDCOUNTER, 0 ) ) AS medic,  
                                               sum( if( SERVICETYPE = 'COUNSELLING SERVICES', RECORDCOUNTER, 0 ) ) AS counsel,  
                                               sum( if( SERVICETYPE = 'PREGNANCY RELATED SERVICES', RECORDCOUNTER, 0 ) ) AS preg 
                                               from cmpatientsregistration 
                                               WHERE TIMESTAMP >='$date' GROUP BY USERINITIAL ASC");
              while($row1=mysqli_fetch_array($query1)){
              ?>
                            <tr>
                                <td class="hidden"></td>
                                <td> <?php echo date('M d, Y', strtotime($row1['DATECREATED'])); ?> </td>
                                <td><?php echo $row1['USERINITIAL']; ?> </td>
                                <td style="text-align:center;"><?php echo $row1['medic']; ?></td>
                                <td style="text-align:center;"><?php echo $row1['counsel']; ?> </td>
                                <td style="text-align:center;"><?php echo $row1['preg']; ?></td>
                                <td style="text-align:center;"><?php echo $row1['SUM(RECORDCOUNTER)']; ?> </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>

                    <BR>

                    <center>
                        <script type="text/javascript" src="admin/cpane/js/gauge.js"></script> <a
                            href="admin/index.php">
                            <canvas id="canvas" width="300" height="300"
                                style="margin-left: 55px; margin-top:-20px; height:120px; width:100px;"
                                data-toggle="tooltip" title="Logout"> </canvas></a>
                    </center>

                </div>
            </div>
            <!-- /.box-body -->


            </div>
            <!-- /.box -->
            </div>
            <!-- ./col -->

            <div class="col-lg-12">
                <div class="modal fade" id="uiModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H3"> </h4>
                            </div>
                            <div class="modal-body">


                                <div class="col-lg-12" style="text-align:left;">
                                    <img src="assets/img/logs.PNG" width="100%" height="100%">
                                </div>
                                <center>
                                    <legend style="color:#000; font-weight:bold;font-size:10px;"> NEW CLIENT DEMOGRAPHY
                                    </legend>
                                </center>

                                <form class="form-horizontal" method="post" action="registration_desk_process.php"
                                    style="height:auto;">

                                    <input type="hidden" name="ISANC" id="ISANC"
                                        value="<?php  if(isset($_GET['anc'])){echo '123';} else{echo '0';}  ?>">

                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;">Date </th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="date" name="DATECREATED" id="DATECREATED"
                                                        value="<?php echo date('d-m-y'); ?>" required=""
                                                        style="text-transform: uppercase; width:100%; background-color:transparent;" />
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>

                                                <th style="width:18%; text-align:left; border:0px;">First name </th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="FIRSTNAME" id="FIRSTNAME"
                                                        required="required "
                                                        style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                </th>
                                            </tr>
                                    </table>

                                    <p></p>

                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px;  text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;">Last name </th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="LASTNAME" id="LASTNAME" required="required"
                                                        style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>

                                                <th style="width:20%; text-align:left; border:0px;">Other name </th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="OTHERNAME" id="OTHERNAME"
                                                        style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                </th>
                                            </tr>
                                    </table>
                                    <p></p>


                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;">Gender</th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <select id="SEX" name="SEX" required="required"
                                                        style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                    <option></option>
                                                    <option>FEMALE</option>
                                                    <option>MALE</option>
                                                    </select>
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>
                                                <?php include('tribe.js'); ?>
                                                <th style="width:18%; border:0px;background-color: transparent;">Tribe
                                                </th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <td style="width:28%;border:0px;background-color:transparent;">
                                                    <select name="TRIBE" required="required"
                                                        onChange="showDiv2('div',this)"
                                                        style="font-size:10px; width:100%; background-color:transparent;" />
                                                    <option value="2"> </option>
                                                    <option value="ACHOLI">ACHOLI</option>
                                                    <option value="ALUR">ALUR</option>
                                                    <option value="BAAMBA">BAAMBA </option>
                                                    <option value="BABUKUSU"> BABUKUSU</option>
                                                    <option value="BABWISI">BABWISI</option>
                                                    <option value="BAFUMBIRA">BAFUMBIRA </option>
                                                    <option value="BAGANDA"> BAGANDA</option>
                                                    <option value="BAGISU">BAGISU</option>
                                                    <option value="BAGUNGU">BAGUNGU </option>
                                                    <option value="BAGWE">BAGWE</option>
                                                    <option value="BAGWERE">BAGWERE</option>
                                                    <option value="BAHORORO">BAHORORO</option>
                                                    <option value="BAKENYI">BAKENYI </option>
                                                    <option value="BAKIGA"> BAKIGA</option>
                                                    <option value="BAKONZO">BAKONZO</option>
                                                    <option value="BANYABINDI">BANYABINDI </option>
                                                    <option value="BANYANKORE">BANYANKORE</option>
                                                    <option value="BANYARA">BANYARA</option>
                                                    <option value="BANYARWANDA">BANYARWANDA </option>
                                                    <option value="BANYOLE">BANYOLE</option>
                                                    <option value="BANYORO">BANYORO</option>
                                                    <option value="BARULI">BARULI</option>
                                                    <option value="BASAMIA">BASAMIA </option>
                                                    <option value="BASOGA"> BASOGA</option>
                                                    <option value="BASONGORA">BASONGORA</option>
                                                    <option value="BATAGWENDA">BATAGWENDA </option>
                                                    <option value="BATORO"> BATORO</option>
                                                    <option value="BATUKU">BATUKU</option>
                                                    <option value="BATWA">BATWA </option>
                                                    <option value="CHOPE"> CHOPE</option>
                                                    <option value="DODOTH">DODOTH </option>
                                                    <option value="ETHUR"> ETHUR</option>
                                                    <option value="IK(TEUSO)">IK(TEUSO)</option>
                                                    <option value="ITESO">ITESO </option>
                                                    <option value="JIE"> JIE</option>
                                                    <option value="JONAM">JONAM </option>
                                                    <option value="JOPADHOLA"> JOPADHOLA</option>
                                                    <option value="KAKWA">KAKWA</option>
                                                    <option value="KARIMOJONG">KARIMOJONG </option>
                                                    <option value="KEBU(OKEKU)"> KEBU(OKEKU)</option>
                                                    <option value="LUGBARA">LUGBARA</option>
                                                    <option value="LANGI">LANGI</option>
                                                    <option value="MADI"> MADI</option>
                                                    <option value="MENING">MENING</option>
                                                    <option value="MVUBA">MVUBA </option>
                                                    <option value="NAPORE">NAPORE</option>
                                                    <option value="NUBI">NUBI</option>
                                                    <option value="NYANGIA">NYANGIA</option>
                                                    <option value="POKOT">POKOT</option>
                                                    <option value="SABINY">SABINY</option>
                                                    <option value="SO(TEPETH)">SO(TEPETH)</option>
                                                    <option value="VONOMA">VONOMA</option>
                                                    <option value="OTHERTRIBES">OTHERS</option>
                                                    </select>
                                                </td>
                                            </tr>
                                    </table>
                                    <p></p>

                                    <div id="div2" class="text" style="display:none;"> </div>
                                    <div id="divACHOLI" class="text" style="display:none;"> </div>
                                    <div id="divALUR" class="text" style="display:none;"> </div>
                                    <div id="divBAAMBA" class="text" style="display:none;"> </div>
                                    <div id="divBABUKUSU" class="text" style="display:none;"> </div>
                                    <div id="divBABWISI" class="text" style="display:none;"> </div>
                                    <div id="divBAFUMBIRA" class="text" style="display:none;"> </div>
                                    <div id="divBAGANDA" class="text" style="display:none;"> </div>
                                    <div id="divBAGISU" class="text" style="display:none;"> </div>
                                    <div id="divBAGUNGU" class="text" style="display:none;"> </div>
                                    <div id="divBAGWE" class="text" style="display:none;"> </div>
                                    <div id="divBAGWERE" class="text" style="display:none;"> </div>
                                    <div id="divBAHORORO" class="text" style="display:none;"> </div>
                                    <div id="divBAKENYI" class="text" style="display:none;"> </div>
                                    <div id="divBAKIGA" class="text" style="display:none;"> </div>
                                    <div id="divBAKONZO" class="text" style="display:none;"> </div>
                                    <div id="divBANYABINDI" class="text" style="display:none;"> </div>
                                    <div id="divBANYANKORE" class="text" style="display:none;"> </div>
                                    <div id="divBANYARA" class="text" style="display:none;"> </div>
                                    <div id="divBANYARWANDA" class="text" style="display:none;"> </div>
                                    <div id="divBANYOLE" class="text" style="display:none;"> </div>
                                    <div id="divBANYORO" class="text" style="display:none;"> </div>
                                    <div id="divBARULI" class="text" style="display:none;"> </div>
                                    <div id="divBAGANDA" class="text" style="display:none;"> </div>
                                    <div id="divBASAMIA" class="text" style="display:none;"> </div>
                                    <div id="divBASOGA" class="text" style="display:none;"> </div>
                                    <div id="divBASONGORA" class="text" style="display:none;"> </div>
                                    <div id="divBASONGORA" class="text" style="display:none;"> </div>
                                    <div id="divBATAGWENDA" class="text" style="display:none;"> </div>
                                    <div id="divBATORO" class="text" style="display:none;"> </div>
                                    <div id="divBATUKU" class="text" style="display:none;"> </div>
                                    <div id="divBATWA" class="text" style="display:none;"> </div>
                                    <div id="divCHOPE" class="text" style="display:none;"> </div>
                                    <div id="divDODOTH" class="text" style="display:none;"> </div>
                                    <div id="divETHUR" class="text" style="display:none;"> </div>
                                    <div id="divIK(TEUSO)" class="text" style="display:none;"> </div>
                                    <div id="divITESO" class="text" style="display:none;"> </div>
                                    <div id="divJIE" class="text" style="display:none;"> </div>
                                    <div id="divJONAM" class="text" style="display:none;"> </div>
                                    <div id="divJOPADHOLA" class="text" style="display:none;"> </div>
                                    <div id="divKAKWA" class="text" style="display:none;"> </div>
                                    <div id="divKARIMOJONG" class="text" style="display:none;"> </div>
                                    <div id="divKEBU(OKEKU)" class="text" style="display:none;"> </div>

                                    <div id="divLUGBARA" class="text" style="display:none;"> </div>
                                    <div id="divLANGI" class="text" style="display:none;"> </div>
                                    <div id="divMADI" class="text" style="display:none;"> </div>
                                    <div id="divMENING" class="text" style="display:none;"> </div>
                                    <div id="divMVUBA" class="text" style="display:none;"> </div>
                                    <div id="divNAPORE" class="text" style="display:none;"> </div>

                                    <div id="divNUBI" class="text" style="display:none;"> </div>
                                    <div id="divNYANGIA" class="text" style="display:none;"> </div>
                                    <div id="divPOKOT" class="text" style="display:none;"> </div>
                                    <div id="divSABINY" class="text" style="display:none;"> </div>
                                    <div id="divSO(TEPETH)" class="text" style="display:none;"> </div>
                                    <div id="divVONOMA" class="text" style="display:none;"> </div>

                                    <div id="divOTHERTRIBES" class="text" style="display:none;">
                                        <table border="1" cellpadding="4" cellspacing="0"
                                            style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="width:20%; text-align:left; border:0px;"> </th>
                                                    <th style="width:28%; text-align:left;border:0px;"> </th>

                                                    <th style="width:2%; text-align:left; border:0px;"> </th>

                                                    <th style="width:20%; text-align:left; border:0px;color:#d70000;">
                                                        Specify</th>
                                                    <th style="width:28%; text-align:left;border:0px;">
                                                        <input type="text" name="TRIBE_OTHERS" id="TRIBE_OTHERS"
                                                            style="text-transform: uppercase; width:100%; background-color:transparent;width:100%;" />
                                                    </th>
                                                </tr>
                                        </table>
                                    </div>

                                    <p></p>
                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px;  text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;"> Date of birth </th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;"> <input type="date"
                                                        name="AGE" onSelect="agecalc()" onChange="agecalc()"
                                                        id="datepicker1" required="required"
                                                        style="background-color:transparent; width:100%;" />
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>

                                                <th style="width:20%; text-align:left; border:0px;">Age</th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="AGE1" id="AGE1" readonly=""
                                                        style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                </th>
                                            </tr>
                                    </table>

                                    <p></p>
                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;">Schooling </th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;"><select
                                                        id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" required=""
                                                        style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                    <option> </option>
                                                    <option value="IS">IS</option>
                                                    <option value="OS">OS</option>
                                                    </select>
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>

                                                <th style="width:18%; text-align:left; border:0px;">Education level</th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <select id="HIGHESTLEVELOFEDUCATION" name="HIGHESTLEVELOFEDUCATION"
                                                        required="required"
                                                        style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                    <option> </option>
                                                    <option>NONE</option>
                                                    <option>PRIMARY</option>
                                                    <option>O LEVEL</option>
                                                    <option>A LEVEL</option>
                                                    <option>TERTIARY</option>
                                                    </select>
                                                </th>
                                            </tr>
                                    </table>

                                    <p></p>
                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;">Marital status </th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <select id="MARITALSTATUS" name="MARITALSTATUS" required="required"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                    <option> </option>
                                                    <option>SINGLE</option>
                                                    <option>MARRIED</option>
                                                    <option>COHABITING</option>
                                                    <option>SEPARATED/DIVORCED</option>
                                                    <option>WIDOWED</option>
                                                    </select>
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>
                                                <?php include('religion.js'); ?>
                                                <th style="width:18%; text-align:left; border:0px;">Religion</th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <select name="RELIGION" required="" id="cboOptions"
                                                        onChange="showDiv3('div',this)"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                    <option value="3"></option>
                                                    <option value="PROTESTANT"> PROTESTANT</option>
                                                    <option value="CATHOLIC"> CATHOLIC</option>
                                                    <option value="MUSLIM"> MUSLIM</option>
                                                    <option value="BORN AGAIN"> BORN AGAIN</option>
                                                    <option value="OTHERS"> OTHERS</option>
                                                    </select>
                                                </th>
                                            </tr>
                                    </table>

                                    <p></p>

                                    <div id="div3" class="text" style="display:none;"> </div>
                                    <div id="divPROTESTANT" class="text" style="display:none;"> </div>
                                    <div id="divCATHOLIC" class="text" style="display:none;"> </div>
                                    <div id="divMUSLIM" class="text" style="display:none;"> </div>
                                    <div id="divBORN AGAIN" class="text" style="display:none;"> </div>
                                    <div id="divOTHERS" class="text" style="display:none;">
                                        <table border="1" cellpadding="4" cellspacing="0"
                                            style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="width:20%; text-align:left; border:0px;"> </th>
                                                    <th style="width:28%; text-align:left;border:0px;"> </th>
                                                    <th style="width:2%; text-align:left; border:0px;"> </th>

                                                    <th style="width:20%; text-align:left; border:0px;color:#d70000;">
                                                        Specify</th>
                                                    <th style="width:28%; text-align:left;border:0px;">
                                                        <input type="text" id="OTHERRELIGION" name="OTHERRELIGION"
                                                            style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                    </th>
                                                </tr>
                                        </table>
                                    </div>

                                    <p></p>

                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;">Employment status
                                                </th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <select id="EMPLOYMENTSTATUS" input name="EMPLOYMENTSTATUS"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                    <option> </option>
                                                    <option value="YES">YES</option>
                                                    <option>NO</option>
                                                    </select>
                                                </th>
                                                <?php include('districts.js'); ?>
                                                <th style="width:2%; text-align:left; border:0px;"> </th>
                                                <th style="width:18%; text-align:left; border:0px;">District</th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <select name="DISTRICT" required="required" id="cboOptions"
                                                        onChange="showDiv4('div',this)"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                    <option value="4"> </option>
                                                    <option value="KAMPALA"> KAMPALA</option>
                                                    <option value="MUKONO"> MUKONO</option>
                                                    <option value="WAKISO"> WAKISO</option>
                                                    <option value="MPIGI"> MPIGI</option>
                                                    <option value="KAYUNGA"> KAYUNGA</option>
                                                    <option value="LUWERO"> LUWERO</option>
                                                    <option value="BUTAMBALA"> BUTAMBALA</option>
                                                    <option value="NAKASEKE"> NAKASEKE</option>
                                                    <option value="GOMBA"> GOMBA</option>
                                                    <option value="OTHERDISTRICT"> OTHERS</option>
                                                    </select>
                                                </th>
                                            </tr>
                                    </table>

                                    <p></p>
                                    <div id="div4" class="text" style="display:none;"> </div>
                                    <div id="divKAMPALA" class="text" style="display:none;">

                                        <table border="1" cellpadding="4" cellspacing="0"
                                            style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="width:20%; text-align:left; border:0px;"> </th>
                                                    <th style="width:28%; text-align:left;border:0px;">
                                                    </th>

                                                    <th style="width:2%; text-align:left; border:0px;"> </th>

                                                    <th style="width:20%; text-align:left; border:0px;color:#d70000;">
                                                        Division</th>
                                                    <th style="width:28%; text-align:left;border:0px;">
                                                        <select id="DIVISION" name="DIVISION"
                                                            style="text-transform: uppercase; width:100%;width:100%;background-color:transparent;" />
                                                        <option> </option>
                                                        <option>CENTRAL</option>
                                                        <option>LUBAGA</option>
                                                        <option>NAKAWA</option>
                                                        <option>MAKINDYE</option>
                                                        <option>KAWEMPE</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                        </table>

                                    </div>
                                    <div id="divMUKONO" class="text" style="display:none;"> </div>
                                    <div id="divWAKISO" class="text" style="display:none;"> </div>
                                    <div id="divMPIGI" class="text" style="display:none;"> </div>
                                    <div id="divKAYUNGA" class="text" style="display:none;"> </div>
                                    <div id="divLUWERO" class="text" style="display:none;"> </div>
                                    <div id="divBUTAMBALA" class="text" style="display:none;"> </div>
                                    <div id="divNAKASEKE" class="text" style="display:none;"> </div>
                                    <div id="divGOMBA" class="text" style="display:none;"> </div>

                                    <div id="divOTHERDISTRICT" class="text" style="display:none;">
                                        <p></p>

                                        <table border="1" cellpadding="4" cellspacing="0"
                                            style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="width:20%; text-align:left; border:0px;"> </th>
                                                    <th style="width:28%; text-align:left;border:0px;">
                                                    </th>

                                                    <th style="width:2%; text-align:left; border:0px;"> </th>

                                                    <th style="width:20%; text-align:left; border:0px;color:#d70000;">
                                                        Specify</th>
                                                    <th style="width:28%; text-align:left;border:0px;">
                                                        <input type="text" id="OTHERDISTRICTS" name="OTHERDISTRICTS"
                                                            style="text-transform: uppercase;background-color:transparent; width:100%;width:100%;" />
                                                    </th>
                                                </tr>
                                        </table>
                                    </div>


                                    <p></p>
                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;"> Village</th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE"
                                                        required="required"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>

                                                <th style="width:20%; text-align:left; border:0px;">Phone contact</th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="PHONECONTACT" id="PHONECONTACT"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                </th>
                                            </tr>
                                    </table>

                                    <p></p>
                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;"> Mother's name</th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME"
                                                        required="required"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                    <input type="hidden" name="MOTHERLASTNAME" id="MOTHERLASTNAME"
                                                        style="text-transform: uppercase;background-color:transparent;" />
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>

                                                <th style="width:20%; text-align:left; border:0px;">Father's name</th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                    <input type="hidden" name="FATHERLASTNAME" id="FATHERLASTNAME"
                                                        style="text-transform: uppercase;" />
                                                </th>
                                            </tr>
                                    </table>

                                    <p></p>

                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:18%; text-align:left; border:0px;">Living with</th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <select id="LIVINGWITH" name="LIVINGWITH" required="required"
                                                        style="text-transform: uppercase;width:100%;background-color:transparent;" />
                                                    <option> </option>
                                                    <option>SINGLE PARENTS</option>
                                                    <option>BOTH PARENTS</option>
                                                    <option>GRAND PARENTS</option>
                                                    <option>GUARDIAN</option>
                                                    <option>ALONE/SELF</option>
                                                    <option>AUNT</option>
                                                    <option>UNCLE</option>
                                                    <option>BROTHER</option>
                                                    <option>SISTER</option>
                                                    <option>BOY FRIEND</option>
                                                    <option>GIRL FRIEND</option>
                                                    <option>FRIEND</option>
                                                    <option>WIFE</option>
                                                    <option>HUSBAND</option>
                                                    </select>
                                                </th>

                                                <th style="width:2%; text-align:left; border:0px;"> </th>
                                                <?php include('heard.js'); ?>
                                                <th style="width:18%; text-align:left; border:0px;">Heard about us</th>
                                                <th style="width:1%; text-align:right; border:0px;">*</th>
                                                <th style="width:1%; text-align:right; border:0px;"></th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <select name="HEAREDABOUTNTIHC" id="cboOptions"
                                                        onChange="showDiv5('div',this)" required="required"
                                                        style="text-transform: uppercase; width:100%;background-color:transparent;" />
                                                    <option value="5"> </option>
                                                    <option value="PEERS">PEERS</option>
                                                    <option value="PARENTS">PARENTS</option>
                                                    <option value="GUARDIAN">GUARDIAN</option>
                                                    <option value="HEALTH WORKER">HEALTH WORKER</option>
                                                    <option value="OUTREACH">OUTREACH</option>
                                                    <option value="EMPLOYER">EMPLOYER</option>
                                                    <option value="NEWS PAPER">NEWS PAPER</option>
                                                    <option value="RADIO">RADIO</option>
                                                    <option value="TV">TV</option>
                                                    <option value="FRIEND">FRIEND</option>
                                                    <option value="IEC METERIALS">ICE METERIALS</option>
                                                    <option value="OTHERHAU">OTHERS</option>
                                                    </select>
                                                </th>
                                            </tr>
                                    </table>
                                    <p></p>
                                    <div id="div5" class="text" style="display:none;"> </div>
                                    <div id="divPEERS" class="text" style="display:none;"> </div>
                                    <div id="divPARENTS" class="text" style="display:none;"> </div>
                                    <div id="divGUARDIAN" class="text" style="display:none;"> </div>
                                    <div id="divHEALTH WORKER" class="text" style="display:none;"> </div>
                                    <div id="divOUTREACH" class="text" style="display:none;"> </div>
                                    <div id="divEMPLOYER" class="text" style="display:none;"> </div>
                                    <div id="divNEWS PAPER" class="text" style="display:none;"> </div>
                                    <div id="divRADIO" class="text" style="display:none;"> </div>
                                    <div id="divTV" class="text" style="display:none;"> </div>
                                    <div id="divFRIEND" class="text" style="display:none;"> </div>
                                    <div id="divICE METERIALS" class="text" style="display:none;"> </div>

                                    <div id="divOTHERHAU" class="text" style="display:none;">
                                        <table border="1" cellpadding="4" cellspacing="0"
                                            style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="width:20%; text-align:left; border:0px;"> </th>
                                                    <th style="width:28%; text-align:left;border:0px;">
                                                    </th>

                                                    <th style="width:2%; text-align:left; border:0px;"> </th>

                                                    <th style="width:20%; text-align:left; border:0px; color:#d70000;">
                                                        Specify</th>
                                                    <th style="width:28%; text-align:left;border:0px;">
                                                        <input type="text" id="OTHERSOURCESOFINFO"
                                                            name="OTHERSOURCESOFINFO"
                                                            style="text-transform: uppercase; width:100%;" />
                                                    </th>
                                                </tr>
                                        </table>

                                    </div>

                                    <hr>
                                    <table border="1" cellpadding="4" cellspacing="0"
                                        style="font-family: arial; font-size: 12px; text-align:left;border: 0px;"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:20%; text-align:left; border:0px;"> Service provider
                                                </th>
                                                <th style="width:28%; text-align:left;border:0px;">
                                                    <input type="text" name="REGISTEREDBY" id="REGISTEREDBY"
                                                        value="<?php echo $nameofuser; ?>" readonly="readonly"
                                                        style="background-color:transparent; width:100%;" />
                                                </th>
                                                <input type="hidden" class="form-control" name="REGISTERACCOUNT"
                                                    id="REGISTERACCOUNT" value="<?php echo $rm; ?>">
                                                <th style="width:2%; text-align:left; border:0px;"> </th>

                                                <input type="hidden" name="VISTTYPE" value="NEW">

                                                <th style="width:28%; text-align:left; border:0px;"><input type="submit"
                                                        name="button" id="button" value="Save demography" /> </th>

                                                <th style="width:20%; text-align:left;border:0px;">
                                                    <a href="clients/regn_plain_form.php" class="btn btn success"
                                                        style="border: 1px solid;">Print</a>
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </th>
                                            </tr>
                                    </table>
                                </form>

                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                    setInterval(function() {
                        $.ajax({
                            type: 'POST',
                            url: 'medical/waiting_innerroom.php',
                            success: function(data) {
                                $('#waiting_innerroom').html(data);
                            }
                        });
                    }, 2000);
                    </script>

                </div>
                <!-- /.box -->
            </div>

            <!-- /.col -->
            </div>

            </footer>

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
            <!--END PAGE LEVEL SCRIPTS -->

            <script type="text/javascript" src="admin/ ../assets/js/gauge.js"></script>
</body>

</html>