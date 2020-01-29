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
}
 ?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM labtesttypes"))
{ 
    while ($row = $result->fetch_assoc() ) 
    {  
         $stss=$stss. "<option>" . $row['TESTTYPE'] . "</option>";  
    }
}
$connect->close();
?>

<!-- Return Other Medical Category-->
<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$stssb ="";
if( $result = $connect->query("SELECT DISTINCT MEDICALTOPIC FROM medicalproblems"))
{ 
  while ($row = $result->fetch_assoc() ) {  
       $stssb=$stssb. "<option>" . $row['MEDICALTOPIC'] . "</option>";   
    }
}
$connect->close();
?>

<!-- Return SIDE EFFECTS Medical Category Options-->
<?php
    $connect = new mysqli("localhost", "root", "toor2", "patientmgt");
    $art ="";
    if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='ART'"))
    { 
        while ($row = $result->fetch_assoc() ) 
        {   
            $art=$art. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   
        }
    }
    $connect->close();
?>

<!-- Return SIDE EFFECTS Medical Category Options-->
<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$bcs ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='BODY CHANGES'"))
{ while ($row = $result->fetch_assoc() ) {  
     $bcs=$bcs. "<option>" . $row['MEDICALPROBLEM'] . "</option>"; 
      }
  }
$connect->close();
?>

<!-- Return SIDE EFFECTS Medical Category Options-->
<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$genn ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='GENERAL'"))
{ while ($row = $result->fetch_assoc() ) {   $genn=$genn. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<!-- Return SIDE EFFECTS Medical Category Options-->
<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$gyn ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='GYNAECOLOGICAL CONDITIONS'"))
{ while ($row = $result->fetch_assoc() ) {   $gyn=$gyn. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<!-- Return SIDE EFFECTS Medical Category Options-->
<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$pre ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='PREGNANCY'"))
{ while ($row = $result->fetch_assoc() ) {   $pre=$pre. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<!-- Return SIDE EFFECTS Medical Category Options-->
<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$sgb ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='SGBV CASES'"))
{ while ($row = $result->fetch_assoc() ) {   $sgb=$sgb. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<!-- Return SIDE EFFECTS Medical Category Options-->
<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$sed ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='SIDE EFFECTS DRUG TOXICITIES ON ART'"))
{ 
  while ($row = $result->fetch_assoc() ) { 
    $sed=$sed. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<!-- Return STI/STD Medical Category Options-->
<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$sti ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='STI/STD'"))
{ 
  while ($row = $result->fetch_assoc() ) {  
   $sti=$sti. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>treatment room</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="admin/assets/notifier2.css">
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

    <script type="text/javascript">
    function pop(dat) {
        $("#res").html("");
        var data = dat.split("__");
        $("#" + data[0]).val(data[1]);

        var num = data[0].substring(3);

        $("#dn" + num).val(data[2]);
        $("#instock").val(data[2]);
        $("#PROGRAMME").val(data[3]);


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
                url: "medical/drugsearch.php",
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
    $(document).ready(function() {
        $('#exaoffsite').DataTable({
            "iDisplayLength": 3,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#viewresults').DataTable({
            "iDisplayLength": 3,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>



    <script>
    $(document).ready(function() {
        $('#example1ot').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: []
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#exampleoutex').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#example01').DataTable({
            "iDisplayLength": 3,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example1').DataTable({
            "iDisplayLength": 3,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#exatable').DataTable({
            "iDisplayLength": 2,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#myhistory').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [

            ]
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#myserachhistory').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('#example2').DataTable({
            "iDisplayLength": 3,
            dom: 'Bfrtip',
            buttons: [

            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example3').DataTable({
            "iDisplayLength": 2,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>



    <script>
    $(document).ready(function() {
        $('#example4').DataTable({
            "iDisplayLength": 3,
            dom: 'Bfrtip',
            buttons: [

            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            "iDisplayLength": 4,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: '  '
                },
                {
                    extend: 'pdf',
                    title: '  '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example6').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' '
                },
                {
                    extend: 'pdf',
                    title: ' '
                },
                {
                    extend: 'print',
                    title: ' '
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example7').DataTable({
            "iDisplayLength": 10,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: 'NTIHC |IMMS USER CONTACTS '
                },
                {
                    extend: 'pdf',
                    title: 'NTIHC |IMMS USER CONTACTS '
                },
                {
                    extend: 'print',
                    title: 'NTIHC |IMMS USER CONTACTS '
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example8').DataTable({
            "iDisplayLength": 4,
            dom: 'Bfrtip',
            buttons: [

            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example9').DataTable({
            "iDisplayLength": 10,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: ' ntihc'
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#exampleoutreach').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: ' ntihc'
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#exampleout').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [

            ]
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#example10').DataTable({
            "iDisplayLength": 10,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: ' BUDGET DETAILS'
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example11').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: ' BUDGET DETAILS'
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example12').DataTable({
            "iDisplayLength": 5,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: ' BUDGET DETAILS'
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example13').DataTable({
            "iDisplayLength": 3,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: '  '
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example14').DataTable({
            "iDisplayLength": 10,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: ' BUDGET DETAILS'
                }
            ]
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('#example15').DataTable({
            "iDisplayLength": 10,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: ' BUDGET DETAILS'
                }
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example16').DataTable({
            "iDisplayLength": 7,
            dom: 'Bfrtip',
            buttons: [

                {
                    extend: 'excel',
                    title: ' file'
                },
                {
                    extend: 'pdf',
                    title: 'file '
                },
                {
                    extend: 'print',
                    title: ' BUDGET DETAILS'
                }
            ]
        });
    });
    </script>


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
        border-top: 0px solid transparent;
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
        border: 0px solid transparent;
        border-collapse: collapse;
        padding-left: 0px;
        padding-bottom: 0px;
        font-size: 12px;
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

    <script>
    function searchpro() {
        var dataString = document.getElementById('NTIHCNO').value;

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
            xhttp.open("GET", "get_clientNTIHCno_onregn.php?q=" + dataString, true);
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
        document.getElementById('NTIHCNO').value = separatedDataArray[0];
        document.getElementById('CNAME').value = separatedDataArray[1];
        document.getElementById('schrest').innerHTML = "";
        document.getElementById('myAGE1').value = separatedDataArray[3];
    }
    </script>

    <script type="text/javascript">

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

</head>

<body class="hold-transition skin-blue sidebar-mini"
    style="background:url(assets/img/pattern/4326703-white-background-wallpapero.jpg);">

    <?php
  require('admin/connect/config.php');
  ?>

    <!--?php
 require('v2/header_cm.php');
 ?-->

    <div class="panel-body">

        <div class="col-md-6" style="background-color:transparent;">

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
                <thead>
                    <tr>
                        <td style="width:16%; border: 0px;">
                            <img src="assets/img/ntihclog2.png" width="70" height="90" style="border: 0px; ">
                        </td>

                        <td style="width:28%; border: 0px;">
                            <a href="client_management.php">
                                <center><img src="database icons/Medical-54-512.png" width="100" height="100" class=" "
                                        style=" height:30px; width:30px; background-color:transparent">
                                    Dashboard&nbsp;&nbsp;&nbsp;</center>
                            </a>
                            <div class="pull-right box-tools"> </div>
        </div>
        <p></p>
        <a href="admin/reports/prescription.php?d1=0&d2=0">
            <center><img src="database icons/59449894425chart-512.png" width="100" height="100" class=" "
                    style=" height:30px; width:30px; background-color:transparent">
                Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>
        </a>
        <div class="pull-right box-tools"> </div>
    </div>
    </td>

    <td style="width:28%; border: 1px;"> <a href="abortioncare.php">
            <center><img src="database icons/social_network-512.png" width="100" height="100" class=" "
                    style=" height:30px; width:30px; background-color:transparent">
                PAC&nbsp;&nbsp; </center>
        </a>
        <div class="pull-right box-tools"> </div>
        </div>
        <p></p>
        <a href="postnatalcare.php">
            <center><img src="database icons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png"
                    width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">
                PNC&nbsp;&nbsp; </center>
        </a>
        <div class="pull-right box-tools"> </div>
        </div>
    </td>

    <td style="width:28%; border: 1px;"> <a href="index.php">
            <center><img src="database icons/icon-processmanagement.png" width="100" height="100" class=" "
                    style=" height:30px; width:40px; background-color:transparent">
                Enrollment </center>
        </a>
        <div class="pull-right box-tools"> </div>
        </div>
        <p></p>

        <a href="index.php">
            <center><img src="database icons/switchb1.png" width="100" height="100" class=" "
                    style=" height:30px; width:30px; background-color:transparent">
                Logout&nbsp;&nbsp; </center>
        </a>
        <div class="pull-right box-tools"> </div>
        </div>
    </td>

    <td style="width:10%; border: 1px;">
    </td>
    </tbody>
    </table>


    </div>

    <div class="col-md-6" style=" background-color:transparent;">


    </div>
    </div>

    <div class="col-md-5" style=" background-color:transparent;">
        <ul class="nav nav-tabs" style="border: 0px;">

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
                <thead>
                    <tr>
                        <td style="width:33.33333333%; border: 0px; background-color:transparent;"> <a data-toggle="tab"
                                href="#tab1">
                                <center><img src="database icons/queue-512.png" width="100" height="100" class=" "
                                        style=" height:30px; width:30px; background-color:transparent"> <br>
                                    <a href="client_management.php">Medical <b class="data-taggle" class="tooltip"
                                            title="No. of clients due for medical services">
                                            &nbsp;
                                            <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO
                                ORDER BY NTIHCNO DESC");
        $result->execute();
        $rowcount1 = $result->rowcount(); 
       ?>
                                            <?php echo $rowcount1;?>
                                    </a> </b></center>
                            </a>
                        </td>

                        <td style="width:33.33333333%;border:0px ; background-color:transparent;">
                            <a data-toggle="tab" href="#tab2">
                                <center><img src="database icons/icon-resources-staffing.png" width="100" height="100"
                                        class=" " style=" height:30px; width:30px; background-color:transparent"> <br>
                                    Others
                                    <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO
                                ORDER BY NTIHCNO DESC");
        $result->execute();
        $rowcount3 = $result->rowcount(); 
       ?>
                                    <?php echo $rowcount3;?>
                                    <center>
                            </a>

                        </td>

                        <td style="width:33.33333333%;border: 0px ; background-color:transparent;">
                            <a data-toggle="tab" href="#tab3">
                                <center><img src="database icons/press-nozbe.png" width="100" height="100" class=" "
                                        style=" height:30px; width:30px; background-color:transparent"> <br>
                                    Completed &nbsp;
                                    <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM clientsexamination WHERE TIMESTAMP >='$date' GROUP BY NTIHCNO ORDER BY DATECREATED");
        $result->execute();
        $rowcount2 = $result->rowcount(); 
       ?>
                                    <?php echo $rowcount2;?>
                                    <center>
                            </a>

                        </td>

                        </tbody>
            </table>
        </ul>
        <div class="panel-body">
            <div class="widget-content tab-content" style="border:0px;">
                <div id="tab1" class="tab-pane active">

                    <div id="dialog-window" style="background-color:transparent;">
                        <div id="scrollable-content" style="background-color:transparent;">
                            <ul>
                                <div class="" id="medicalvists" style="margin-left: -41px;"></div>
                        </div>
                        </ul>
                    </div>

                    <div id="footer" style="text-align:left; border:0px;">
                    </div>

                    <style>
                    #dialog-window {
                        height: 400px;
                        border: 0px black solid;
                        border-radius: 7px;
                        width: 100%;
                    }

                    #scrollable-content {
                        height: 400px;
                        overflow: auto;
                        background-color: transparent;
                        width: 100%;
                    }

                    #footer {
                        height: 0px;
                    }
                    </style>


                </div>
                <div id="tab2" class="tab-pane">
                    <table id="example1ot" class="table table-tabled table-bordered"
                        style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
                        <thead>
                            <tr>

                                <th style="background-color:transparent;">VIST DATE</th>
                                <th style="background-color:transparent;">NTIHC.NO</th>
                                <th style="background-color:transparent;">CLIENT&nbsp;NAME</th>
                                <th style="background-color:transparent;">ACTION</th>
                            </tr>
                            </tfoot>
                        <tbody>

                            <script>
                            function postclient(myid) {
                                var dtsxxc = myid.split("***");
                                document.getElementById("myNTIHCNO").value = dtsxxc[0];
                                document.getElementById("myID").value = dtsxxc[1];
                                document.getElementById("myAGE1").value = dtsxxc[2];
                                document.getElementById("myAGEGP").value = dtsxxc[3];
                                document.getElementById("mySEX").value = dtsxxc[4];
                                document.getElementById("myRSVNID").value = dtsxxc[5];
                            }
                            </script>

                            <?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
  while($res = mysqli_fetch_array($result)) {
  $dtsxxc = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']."***".$res['DATECREATED'];
    echo "<tr>"; 
    echo "<td>".$res['TIMESTAMP']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>";  
    
    echo '<td>   
    <a id="409__'.$dtsxxc.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
    <span class="glyphicon glyphicon-ok"> </span></a> &nbsp;    
    <a id="509__'.$dtsxxc.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a>  
    </td>'; 
          
  }
     
    ?>
                        </tbody>
                    </table>

                </div>
                <div id="tab3" class="tab-pane">

                    <table id="myhistory" class="table table-tabled table-bordered"
                        style="font-weight:normal; font-size:9px; width:100%; margin-top:10px;">
                        <thead>
                            <tr>
                                <th style="">DATE</th>
                                <th style="">NTIHC.NO.</th>
                                <th style="">NAME</th>
                                <th style="">VIEW</th>
                                <th style="text-align:center;">ACTION</th>

                            </tr>
                            </tfoot>
                        <tbody>

                            <?php
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';

$result = mysqli_query($mysqli, "SELECT * FROM  clientsexamination WHERE TIMESTAMP >='$date' GROUP BY NTIHCNO ORDER BY DATECREATED");

  while($res = mysqli_fetch_array($result)) {
  $dtsget = $res['NTIHCNO']."***".$res['DATECREATED']."***".$res['DATECREATED']."***".$res['EID'];
    echo "<tr>"; 
    echo "<td>".$res['DATECREATED']."</td>";
    echo "<td>".$res['NTIHCNO']."</td>";
    echo "<td>".$res['CLIENTNAME']."</td>";
    echo '<td> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a id="5__'.$dtsget.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a>
    </td>';
  echo "<td><a href=\"client_medical_hist.php?NTIHCNO=$res[NTIHCNO]\">Results</a>&nbsp;|  
    <a href=\"client_medical_disp.php?NTIHCNO=$res[NTIHCNO]\"><b>Prescribe</b></a>  </td>"; 
   
  }

    ?>
                        </tbody>
                    </table>

                </div>
                <br>

                <div class="panel-body"
                    style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
                        <thead>
                            <tr>
                                <th style="width:39%; text-align:left; border:0px;"> <strong>Clients&nbsp;due&nbsp;for
                                        medical&nbsp;services</strong></th>
                                <th style="width:10%; text-align:left; border:0px;">
                                    <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;"
                                        class="button 5">
                                        <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO
                                ORDER BY NTIHCNO DESC");
        $result->execute();
        $rowcount1 = $result->rowcount(); 
       ?>
                                        <?php echo $rowcount1;?>
                                        </td>
                                <th style="width:2%; text-align:left; border:0px;"> </th>
                                <th style="width:39%; text-align:left; border:0px;">
                                    <strong>No.&nbsp;clients&nbsp;served</strong> </th>
                                <th style="width:10%; text-align:left; border:0px;">
                                    <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;"
                                        class="button 5">
                                        <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM clientsexamination WHERE TIMESTAMP >='$date' 
                                AND REGISTERACCOUNT='$rm' GROUP BY NTIHCNO ORDER BY DATECREATED");
        $result->execute();
        $rowcount2 = $result->rowcount(); 
       ?>
                                        <?php echo $rowcount2;?>
                                    </b>
                                    </td>
                            </tr>
                    </table>
                </div>

            </div>

        </div>
    </div>

    <div class="col-md-7" style=" background-color:transparent;">

        <center
            style="color:#000; font-weight:bold; font-size:12px;font:bold 14px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">
            CLIENT MANAGEMENT - TREATMENT ROOM</center><br>

        <div class="" id="dem"> </div>
        <script>
        function getstuffclientel(jose) {
            var odno = ((jose.split("__")[1]).split("***"))[0];
            var ddt = jose.split("__")[1];
            postclient(ddt);
            $.ajax({
                type: 'POST',
                data: {
                    bb: odno
                },
                url: 'medical/medical_get.php?q=' + odno,
                success: function(data) {
                    $('#dem').html(data);
                    $("#demm").modal("show");
                }
            });
        }
        </script>

        <form class="form-horizontal" action="treatmentroom_process_backup.php" method="post" style="height:auto;" />

        <div class="col-sm-6" style=" background-color:transparent; ">

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
                <thead>
                    <tr>
                        <th style="width:40%;border:0px;">Service date </th>

                        <th style="width:60%;border:0px;"> <input type="date" name="DATECREATED" id="myDATECREATED"
                                value="<?php echo (new DateTime())->format('Y-m-d'); ?>" required="required"
                                style="width:100%; font-weight:normal; background-color:transparent;">
                        </th>

                    </tr>
            </table>
            <P></P>

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
                <thead>
                    <tr>
                        <th style="width:40%;border:0px;">Problem Type  </th>
                        <th style="width:60%;border:0px;"> <select name="EXAMPICKERDESC" id="cboOptions"
                                onChange="showDiv2('div',this)" required="required"
                                style="width:100%; font-weight:normal; background-color:transparent;">
                                <option value="2"> </option>
                                <option value="GENERAL">MEDICAL EXAMINATION</option>
                                <option value="ART">ART</option>
                                <!--option value="PREGNANCY">PREGNANCY</option-->
                                <!--option value="BODY CHANGES">BODY CHANGES</option-->
                                <!--option value="SEXUAL HEALTH">SEXUAL HEALTH</option-->
                                <!--option value="STI">STI</option-->
                                <!--option value="SGBV">SGBV</option-->
                            </select>
                        </th>
                        </th>
                    </tr>
            </table>

            <div id="div1" class="text" style="display:none;"> </div>
            <div id="divSELF" class="text" style="display:none;"> </div>
            <div id="divESCORTED" class="text" style="display:none;">
                <P></P>
                <table border="1" cellpadding="4" cellspacing="0"
                    style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
                    <thead>
                        <tr>

                            <th style="width:40%; text-align:left; border:0px;color:#d70000;">Specify</th>
                            <th style="width:60%; text-align:left;border:0px;">
                                <select name="ESCORTEDBY" id="ESCORTEDBY"
                                    style="text-transform: uppercase; width:100%; background-color:transparent;width:100%;" />
                                <option></option>
                                <option>MOTHER</option>
                                <option>FATHER</option>
                                <option>UNCLE</option>
                                <option>AUNT</option>
                                <option>GRAND PARENT</option>
                                <option>BROTHER</option>
                                <option>SISTER</option>
                                <option>GUARDIAN</option>
                                <option>TEACHER</option>
                                <option>SCHOOL MATRON</option>
                                <option>SENIOR MAN</option>
                                <option>SENIOR WOMAN TEACHER</option>
                                <option>FRIEND</option>
                                <option>HUSBAND</option>
                                <option>WIFE</option>
                                <option>BOY FRIEND</option>
                                <option>GIRL FRIEND</option>
                                </select>

                            </th>
                        </tr>
                </table>
            </div>
            <P></P>
        </div>

        <?php include('client_medical_dyn.js'); ?>
        <div class="col-sm-6" style=" background-color:transparent;">

            <?php include('client_medical_pro.js'); ?>

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
                <thead>
                    <tr>
                        <?php include('client_medical_vb.js'); ?>

                        <th style="width:40%;border:0px;">Visit By </th>
                        <th style="width:60%;border:0px;"> <select name="VISTBY" id="cboOptions"
                                onChange="showDiv('div',this)" required="required"
                                style="width:100%; font-weight:normal; background-color:transparent;">
                                <option value="1"> </option>
                                <option value="SELF">SELF</option>
                                <option value="ESCORTED">ESCORTED</option>
                            </select>
                        </th>
                    </tr>
            </table>

            <p></p>

            <div id="div2" class="text" style="display:none;"> </div>
            <div id="divPREGNANCY" class="text" style="display:none;">

            </div>

            <div id="divBODY CHANGES" class="text" style="display:none;">

            </div>

            <div id="divSEXUAL HEALTH" class="text" style="display:none;">

            </div>

            <div id="divSTI" class="text" style="display:none;">

            </div>

            <div id="divSGBV" class="text" style="display:none;">

            </div>
        </div>


        <div class="col-sm-12" style=" background-color:transparent;">

            <div id="divGENERAL" class="text" style="display:none;">

                <table class="table table-striped" id="mytable" style="font-weight:normal;">

                    <input type="button" onClick="addRow12('mytable')" value="Add" class=""
                        style="background-color:transparent; border-radius:8px;"> &nbsp;
                    <input type="button" onClick="deleteRow12('mytable')" value="Remove" class="r"
                        style="background-color:transparent; border-radius:8px;">
                    <br> <br>
                    <thead>
                        <tr>
                            <th>*</th>
                            <th>PROBLEM CATEGORY</th>
                            <th>DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="col-sm-6" style=" background-color:transparent;">

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <th style="width:40%;border:0px;background-color:transparent;">Problem brief</th>
                        <th style="width:60%;border:0px;">
                            <textarea name="PROBLEMBRIEF" required="required"
                                style="width:100%; font-weight:normal; background-color:transparent;">
          </textarea>
                        </th>
                    </tr>
            </table>
        </div>

        <div class="col-sm-6" style=" background-color:transparent;">

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                <thead>

                    <td style="border:0px;width:100%;background-color:transparent;">Urgency</td>
                    </tr>
                    </tbody>
            </table>

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                <thead>

                    <td style="border:0px;width:100%;"> <input type="radio" name="URGENCYTYPE" id="URGENCYTYPE"
                            value="NORMAL" checked>
                        <label for="NORMAL">NORMAL</label>
                        <input name="URGENCYTYPE" type="radio" id="URGENCYTYPE" value="EMERGENCY">
                        <label for="EMERGENCY">EMERGENCY</label>
                        <input name="URGENCYTYPE" type="radio" id="URGENCYTYPE" value="CRITICAL">
                        <label for="CRITICAL">CRITICAL</label>
                    </td>
                    </tr>
                    </tbody>
            </table>


            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <?php include('client_medical_cd.js'); ?>

                        <th style="width:40%;border:0px;">Counselling done</th>
                        <th style="width:60%;border:0px;"> <select name="COUNSELLINGDONE" id="cboOptions"
                                onChange="showDiv3('div',this)" required="required"
                                style="width:100%; font-weight:normal; background-color:transparent;">
                                <option value="3"> </option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                            </select>
                        </th>
                    </tr>
                    </tbody>
            </table>

            <div id="div3" class="text" style="display:none;"> </div>

            <div id="divYES" class="text" style="display:none;">
                <p></p>
                <table border="1" cellpadding="4" cellspacing="0"
                    style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
                    <thead>
                        <tr>
                            <th style="width:40%;border:0px; color:blue;">Specify</th>
                            <th style="width:60%;border:0px;"> <input type="text" name="COUNSELLINGGIVEN"
                                    style="width:100%; font-weight:normal; background-color:transparent;">

                            </th>
                        </tr>
                </table>
            </div>
            <div id="divNO" class="text" style="display:none;"> </div>
        </div>

        <input type="hidden" name="SERVICEPROVIDERACCOUNT" id="SERVICEPROVIDERACCOUNT" value="<?php echo $rm; ?>">
        <input type="hidden" name="NTIHCNO" id="myNTIHCNO" value="">
        <input type="hidden" id="myID" name="RID">
        <input type="hidden" name="AGE1" id="myAGE1">
        <input type="hidden" id="myAGEGP" name="AGE_GROUP">

        <input type="hidden" id="myRSVNID" name="RSVNID">
        <input type="hidden" id="REGISTERACCOUNT" name="REGISTERACCOUNT" value="<?php echo $rm; ?>">
        <input type="hidden" name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="TREATMENT ROOM">
        <input type="hidden" name="TIMEOUT" id="CHECKIN" readonly="readonly"
            style="text-align:center; background-color:transparent; width:100%;">
        <input type="hidden" id="mySEX" name="SEX">

        <div class="col-sm-6" style=" background-color:transparent;">
            <p></p>
            <div class="panel-body"
                style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
                <legend style="color:#000; font-weight:bold; font-size:12px;">HCG</legend>
                <table border="1" cellpadding="4" cellspacing="0"
                    style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                    <thead>
                        <tr>
                            <?php include('client_medical_hc.js'); ?>

                            <th style="width:40%;border:0px;">If required</th>
                            <th style="width:60%;border:0px;"> <select name="HCGSTATUS" id="cboOptions"
                                    onChange="showDiv4('div',this)" required="required"
                                    style="width:100%; font-weight:normal; background-color:transparent;">
                                    <option value="4"> </option>
                                    <option value="NO">NO </option>
                                    <option value="HCG REQUIRED">YES</option>
                                </select>
                            </th>
                        </tr>
                        </tbody>
                </table>

                <div id="div4" class="text" style="display:none;"> </div>
                <div id="divNO" class="text" style="display:none;"> </div>

                <div id="divHCG REQUIRED" class="text" style="display:none;">
                    <?php include('client_medical_hc2.js'); ?>

                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                        <thead>
                            <tr>
                                <th style="width:40%;border:0px;color:blue;">Add results?</th>
                                <th style="width:60%;border:0px;"> <select name="HCGRESULTS" id="cboOptions"
                                        onChange="showDiv5('div',this)"
                                        style="width:100%; font-weight:normal; background-color:transparent;">
                                        <option value="5"> </option>
                                        <option value="NEGATIVE">NEGATIVE</option>
                                        <option value="POSITIVE">POSITIVE</option>
                                    </select>
                                </th>
                            </tr>
                            </tbody>
                    </table>

                    <div id="div5" class="text" style="display:none;"> </div>
                    <div id="divNEGATIVE" class="text" style="display:none;"> </div>
                    <div id="divPOSITIVE" class="text" style="display:none;">

                        <table border="1" cellpadding="4" cellspacing="0"
                            style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                            <thead>
                                <tr>
                                    <th style="width:40%;border:0px;color:green;">Justify </th>
                                    <th style="width:60%;border:0px;"> <select name="HCGPOSITIVE" id="HCGPOSITIVE"
                                            style="width:100%; font-weight:normal; background-color:transparent;">
                                            <option> </option>
                                            <option value="WANTED">WANTED</option>
                                            <option value="UN WANTED">UN WANTED</option>
                                        </select>
                                    </th>
                                </tr>
                                </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6" style=" background-color:transparent;">
            <p></p>
            <div class="panel-body"
                style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
                <legend style="color:#000; font-weight:bold; font-size:12px;">Referral</legend>
                <table border="1" cellpadding="4" cellspacing="0"
                    style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
                    <thead>
                        <tr>
                            <?php include('client_medical_rf.js'); ?>

                            <th style="width:40%;border:0px;">Activate</th>
                            <th style="width:60%;border:0px;"> <select name="REFTUNER" id="cboOptions"
                                    onChange="showDiv6('div',this)"
                                    style="width:100%; font-weight:normal; background-color:transparent;">
                                    <option value="6"> </option>
                                    <option value="SWITCHED OFF">DEACTIVE</option>
                                    <option value="TURN ON">ACTIVATE</option>
                                </select>
                            </th>
                        </tr>
                        </tbody>
                </table>


                <div id="div6" class="text" style="display:none;"> </div>
                <div id="divSWITCHED OFF" class="text" style="display:none;"> </div>
                <div id="divTURN ON" class="text" style="display:none;">

                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
                        <thead>
                            <tr>
                                <td style="width:40%;border:0px;color:blue; ">Referral centre </td>
                                <td style="width:60%;border:0px;">
                                    <select name="MEDICALREFERRAL" id="MEDICALREFERRAL"
                                        style="width:100%; font-weight:normal; background-color:transparent;">
                                        <option> </option>
                                        <option value="NTIHC">NTIHC</option>
                                        <option value="AIC">AIC</option>
                                        <option value="BUTABIKA HOSPITAL">BUTABIKA HOSPITAL</option>
                                        <option value="CHINA-UG FRIENDSHIP HOSP">CHINA-UG FRIENDSHIP HOSP</option>
                                        <option value="KADIC CLINIC">KADIC CLINIC</option>
                                        <option value="KAMPALA DISPENSARY">KAMPALA DISPENSARY</option>
                                        <option value="KIBULI HOSPITAL">KIBULI HOSPITAL</option>
                                        <option value="KISWA HEALTH CENTRE">KISWA HEALTH CENTRE</option>
                                        <option value="KISWA TB CLINIC">KISWA TB CLINIC</option>
                                        <option value="LUBAGA HOSPITAL">LUBAGA HOSPITAL</option>
                                        <option value="MENGO HOSPITAL">MENGO HOSPITAL</option>
                                        <option value="MILDMAY">MILDMAY</option>
                                        <option value="MULAGO ASSESSMENT CENTRE">MULAGO ASSESSMENT CENTRE</option>
                                        <option value="MULAGO DENTAL CLINIC">MULAGO DENTAL CLINIC</option>
                                        <option value="MULAGO ENT CLINIC">MULAGO ENT CLINIC</option>
                                        <option value="MULAGO EYE CLINIC">MULAGO EYE CLINIC</option>
                                        <option value="MULAGO MAIN HOSPITAL">MULAGO MAIN HOSPITAL</option>
                                        <option value="MULAGO SICKLE CELL CLINIC">MULAGO SICKLE CELL CLINIC</option>
                                        <option value="MULAGO SKIN CLINIC">MULAGO SKIN CLINIC</option>
                                        <option value="MULAGO STD CLINIC">MULAGO STD CLINIC</option>
                                        <option value="MULAGO SURGICAL OPD">MULAGO SURGICAL OPD</option>
                                        <option value="MULAGO TB MANAGEMENT">MULAGO TB MANAGEMENT</option>
                                        <option value="MULAGO ULTRA SCAN">MULAGO ULTRA SCAN</option>
                                        <option value="NSAMBYA">NSAMBYA</option>
                                        <option value="REACHOUT MBUYA">REACHOUT MBUYA</option>
                                        <option value="TASO">TASO</option>
                                        <option value="POLICE">POLICE</option>
                                    </select>
                                </td>
                            </tr>
                    </table>

                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                        <thead>
                            <tr>
                                <td style="width:40%;border:0px; background-color:transparent;">Service referred </td>
                                <td style="width:60%;border:0px;">
                                    <select name="SERVICEREFERREDFOR" id="SERVICEREFERREDFOR"
                                        style="width:100%; font-weight:normal; background-color:transparent;">
                                        <option> </option>
                                        <option value="ART, SUPPORT AND CARE">ART, SUPPORT AND CARE</option>
                                        <option value="FURTHER MANAGEMENT">FURTHER MANAGEMENT</option>
                                    </select>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>



        <div class="col-sm-6" style=" background-color:transparent;">
            <p></p>
            <div class="panel-body"
                style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
                <legend style="color:#000; font-weight:bold; font-size:12px;">Follow up</legend>

                <table border="1" cellpadding="4" cellspacing="0"
                    style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                    <thead>
                        <tr> <?php include('client_medical_fu.js'); ?>
                            <td style="width:40%;border:0px; background-color:transparent;">If required</td>
                            <td style="width:60%;border:0px;">
                                <select name="FOLLOWUP" id="cboOptions" onChange="showDiv7('div',this)"
                                    style="width:100%; font-weight:normal; background-color:transparent;">
                                    <option value="7"> </option>
                                    <option value="REQUIRED">YES</option>
                                    <option value="NOT REQUIRED">NO</option>
                                </select> </td>
                        </tr>
                </table>

                <div id="div7" class="text" style="display:none;"> </div>
                <div id="divNOT REQUIRED" class="text" style="display:none;"> </div>

                <div id="divREQUIRED" class="text" style="display:none;">
                    <table border="1" cellpadding="4" cellspacing="0"
                        style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                        <thead>
                            <tr>
                                <td style="width:40%;border:0px; background-color:transparent;">Follow up date </td>
                                <td style="width:60%;border:0px;"> <input type="date" name="FOLLOWUPDATE"
                                        id="FOLLOWUPDATE" style="width:100%; background-color:transparent;"></td>
                            </tr>
                    </table>
                </div>
            </div>
            <p></p>

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <td style="width:40%;border:0px;">Action taken </td>
                        <td style="width:60%;border:0px;">
                            <Select name="ACTIONTAKEN" id="ACTIONTAKEN" required="required"
                                style="width:100%; font-weight:normal; background-color:transparent;">
                                <option value=""> </option>
                                <option> PENDING LAB REQUEST </option>
                                <option> TREATED </option>
                                <option> REFERRED </option>
                                <option> TREATED AND REFERRED </option>
                            </select>
                        </td>
                    </tr>
            </table>
            <p></p>
            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <td style="width:40%;border:0px; background-color:transparent;"><b>Other</b> services </td>
                        <td style="width:60%;border:0px;"> <select name="SERVICEEXTENTION" id="SERVICEEXTENTION"
                                required="" style="width:100%; font-weight:normal; background-color:transparent;">
                                <option> </option>
                                <option> NOT REQUIRED </option>
                                <option> COUNSELLING</option>
                                <option> PAC </option>
                                <option> ANC</option>
                                <option> FP </option>
                                <option> PNC</option>
                            </select>
                    </tr>
            </table>

        </div>


        <div class="col-sm-6" style=" background-color:transparent;">
            <hr style="margin-top:8px; margin-bottom:8px;">
            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <td style="width:40%;border:0px; ">Service status </td>
                        <td style="width:60%;border:0px;">
                            <input type="radio" name="OUTSVSTATUS" id="OUTSVSTATUS" value="IN SESSION" checked>
                            <label for="IN SESSION">IN SESSION</label>
                            <input type="radio" name="OUTSVSTATUS" id="OUTSVSTATUS" value="CHECKED OUT">
                            <label for="CHECKED OUT">CHECK OUT</label> </td>
                    </tr>
            </table>



            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <?php include('client_medical_lr.js'); ?>
                        <td style="color:blue;width:42%;"><b>Lab request</b> </td>
                        <td style="border:0px; width:58%;"> <select name="TROOM_INITIATION" id="cboOptions"
                                onChange="showDiv8('div',this)" required="required"
                                style="width:100%; font-weight:normal; background-color:transparent;height: 20px; border-radius: 8px;text-align:left; font-size:9px;">
                                <option value="8"></option>
                                <option value="OFF">DISABLE LAB REQUEST</option>
                                <option value="ON">GENERATE REQUEST</option>
                            </select> </td>
                    </tr>
                    </tbody>
            </table>

            <div id="div8" class="text" style="display:none;"> </div>
            <div id="divOFF" class="text" style="display:none;"> </div>
            <div id="divON" class="text" style="display:none;">
                <p></p>
                <table id="dataTable1" class="table table-striped" style="font-weight:normal; ">
                    <input type="button" value="Add test" onClick="addRow13('dataTable1')" class=""
                        style="background-color:transparent; border-radius:8px;"> &nbsp;
                    <input type="button" value="Remove" onClick="deleteRow13('dataTable1')" class=""
                        style="background-color:transparent;border-radius:8px;">
                    <input type="hidden" value="0" name="mytable_rows1" id="mytable_rows1">
                    <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">
                    <p></p>
                    <thead>
                        <tr>
                            <th style="width:5%;">*</th>
                            <th style="width:95%;">TEST DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <p></p>
                <table border="1" cellpadding="4" cellspacing="0"
                    style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
                    <thead>
                        <tr>
                            <td style="width:70%;border:0px;font-weight:bold;">Activate HCT urgency if HIV test is
                                orderd</td>
                            <td style="width:30%;border:0px;">
                                <select name="HCTURGENCY" id="HCTURGENCY"
                                    style="width:100%; font-weight:normal; background-color:transparent;">
                                    <option></option>
                                    <option value="HCT WANTED">ACTIVATE</option>
                                    <option value="NOT REQUIRED">DEACTIVATE</option>
                                </select>
                            </td>
                        </tr>
                </table>

            </div>



            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <td style="color:green;width:42%;"><b>User lab tracker</b> </td>
                        <td style="border:0px; width:29%;">
                            <b data-toggle="tooltip" title="Pending orders created by <?php echo $nameofuser; ?>"
                                style="text-align:center; font-size:30px; border-radius: 11px;" class="button5">
                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='NOT STARTED' AND MEDICAL ='1' AND LABVIST ='1' 
                   AND LABRESULTREVIEW ='NOTAPPLICABLE' AND USERINITIAL ='$nameofuser' GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?></b>

                        </td>
                        <td style="border:0px; width:29%;">
                            <b data-toggle="tooltip" title="Completed Lab results (sent by <?php echo $nameofuser; ?>)"
                                style="text-align:center; font-size:30px; border-radius: 11px;" class="button5">
                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='COMPLETED' AND MEDICAL ='1' AND LABVIST ='1' 
                   AND LABRESULTREVIEW ='NOTAPPLICABLE'
                                     AND USERINITIAL ='$nameofuser' GROUP BY NTIHCNO")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>

        <div class="col-sm-6" style=" background-color:transparent;">
            <hr style="margin-top:8px; margin-bottom:8px;">
            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <td style="width:40%;border:0px;background-color:transparent;">User initials </td>
                        <td style="width:60%;border:0px;"> <input type="text" name="USERINITIAL" id="USERINITIAL"
                                value="<?php echo $nameofuser; ?>" readonly=""
                                style="width:100%; font-weight:normal; background-color:transparent;">
                        </td>
                    </tr>
            </table>
        </div>

        <div class="col-sm-6" style=" background-color:transparent;">
            <hr style="margin-top:8px; margin-bottom:8px;">
            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
                <thead>
                    <tr>
                        <td style="width:40%;border:0px;background-color:transparent;">Service provider </td>
                        <td style="width:60%;border:0px;"> <Select id="SERVICEPROVIDER" name="SERVICEPROVIDER"
                                required="required"
                                style="width:100%; font-weight:normal; background-color:transparent;">
                                <option> <?php echo $nameofuser ?> </option>
                            </select>
                        </td>
                    </tr>
            </table>
        </div>
    </div>



    <div class="col-sm-12" style=" background-color:transparent;">
        <div class="panel-body">
            <br>
            <div id="divART" class="text" style="display:none;">

                <table class="table table-tabled table-bordered" style="background-color:transparent; margin-top:0px; ">
                    <thead>
                        <tr>
                            <td style="border:2px solid #ecf0f5;"><b>Date</b> </th>
                            <td style="border:2px solid #ecf0f5;">Next appointment </th>
                            <td style="border:2px solid #ecf0f5;">Duration in months since first starting ART </th>
                            <td style="border:2px solid #ecf0f5;">Wt</th>
                            <td style="border:2px solid #ecf0f5;">If pregnant EDD/<B>em</B> TCT? write gestation in
                                weeks and ANC # </th>
                            <td style="border:2px solid #ecf0f5;">TB status </th>
                            <td style="border:2px solid #ecf0f5;">Potential SIDE EFFECTS</th>
                            <td style="border:2px solid #ecf0f5;">New Ols, other problems </th>
                            <td style="border:2px solid #ecf0f5;">Functional status </th>
                            <td style="border:2px solid #ecf0f5;">WHO clinical stage</th>
                            <td style="border:2px solid #ecf0f5;">CPT/Dapsone </th>

                            <th colspan="2" style="border:2px solid #ecf0f5;">ARV drugs </th>

                            <th colspan="2" style="border:2px solid #ecf0f5;">Investigations</th>

                            <td style="border:2px solid #ecf0f5;">Refer or consult or link/provide (including
                                nutritional support and infant feeding) </th>
                            <td style="border:2px solid #ecf0f5;">Pill counting</th>
                        </tr>

                        <tr>
                            <td style="border:2px solid #ecf0f5;">Tick small box if scheduled</th>
                            <td style="border:2px solid #ecf0f5;"> <b>Date</b></th>
                            <td style="border:2px solid #ecf0f5;"> / since starting current regimen</th>
                            <td style="border:2px solid #ecf0f5;"><br> Ht.<b> </th>
                            <td style="border:2px solid #ecf0f5;">FP/no FP if FP write method(s)</th>
                            <td style="border:2px solid #ecf0f5;"> If TB, Start/Stop (mm/yyyy) </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;"> Work/playing Amb Bed</th>
                            <td style="border:2px solid #ecf0f5;">WHO clinical stage</th>

                            <td style="border:2px solid #ecf0f5;"> Adhere </th>

                            <th colspan="2" style=""> </th>
                            <td style="border:2px solid #ecf0f5;">If CD4 <15% write (-) If CD4>15 write(+)</th>
                            <td style="border:2px solid #ecf0f5;">Hgb, RPR,CXR,TB sputums, infant Ab/PCR, other </th>
                            <td style="border:2px solid #ecf0f5;">If Hospitalized # of days</th>
                            <th style="border:2px solid #ecf0f5;"> </th>
                        </tr>

                        <tr>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;"> Muac/oEDEMA +/-</th>
                            <td style="border:2px solid #ecf0f5;"> Age in months if <=2 yrs</th> <td
                                    style="border:2px solid #ecf0f5;">
                                    </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>

                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>

                            <td style="border:2px solid #ecf0f5;"> Adhere </th>
                            <td style="border:2px solid #ecf0f5;">/why </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                            <td style="border:2px solid #ecf0f5;">
                                </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border:2px solid #ecf0f5;">
                                <input type="text" name="DATECREATED" id="DATECREATED"
                                    value="<?php echo date('Y-m-d'); ?>"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                <input type="radio" name="art2" value="deactive" checked="checked">
                                <label>OFF</label>
                                <input type="radio" name="art2" value="Active">
                                <label>ON</label>
                            </td>

                            <td style="border:2px solid transparent;"><input type="date" name="art3" id="art3"
                                    style="width:100%; text-align:left;background-color:transparent;"></td>



                            <td style="border:2px solid transparent;">
                                <input type="text" name="art4" id="art4"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                <input type="text" name="art5" id="art5"
                                    style="width:100%; text-align:left;background-color:transparent; height:20px;">
                            </td>

                            <td style="border:2px solid transparent;">
                                <input type="numeric" name="art6" id="art6"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                <input type="text" name="art7" id="art7"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                <input type="text" name="art8" id="art8"
                                    style="width:100%; text-align:left;background-color:transparent;">
                            </td>



                            <td style="border:2px solid transparent;">
                                <input type="numeric" name="art9" id="art9"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                <input type="text" name="art10" id="art10"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                <input type="text" name="art11" id="art11"
                                    style="width:100%; text-align:left;background-color:transparent;">
                            </td>

                            <td style="border:2px solid transparent;">
                                <input type="text" name="art12" id="art12"
                                    style="width:100%; text-align:left;background-color:transparent; height:20px;">
                                <input type="text" name="art13" id="art13"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                <input type="text" name="art14" id="art14"
                                    style="width:100%; text-align:left;background-color:transparent;">
                            </td>


                            <td style="border:2px solid transparent;">
                                <textarea name="art15" id="art15"
                                    style="width:100%; text-align:left;background-color:transparent;height:20px;"></textarea>
                            </td>


                            <td style="border:2px solid transparent;">
                                <textarea name="art16" id="art16"
                                    style="width:100%; text-align:left;background-color:transparent; height:20px;"></textarea>

                            </td>


                            <td style="border:2px solid transparent;"><select name="art17" id="art17"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                    <option></option>
                                    <option>G</option>
                                    <option>F</option>
                                    <option>P</option>
                                </select>
                            </td>

                            <td style="border:2px solid transparent;">
                                <select name="art18" id="art18"
                                    style="width:100%; text-align:left;background-color:transparent; height:20px;">
                                    <option></option>
                                    <option>i</option>
                                    <option>ii</option>
                                    <option>iii</option>
                                    <option>iv</option>
                                    <option>Ti</option>
                                    <option>T2</option>
                                    <option>T3</option>
                                    <option>T4</option>
                                </select>
                            </td>


                            <td style="border:2px solid transparent;"><select name="art19" id="art19"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                    <option></option>
                                    <option>G</option>
                                    <option>F</option>
                                    <option>P</option>
                                </select>
                            </td>

                            <td style="border:2px solid transparent;"><select type="numeric" name="art20" id="art20"
                                    style="width:100%; text-align:left;background-color:transparent;">
                                    <option></option>
                                    <option>G</option>
                                    <option>F</option>
                                    <option>P</option>
                                </select>
                            </td>

                            <td style="border:2px solid transparent;">
                                <input type="number" name="art21" id="art21"
                                    style="width:100%; text-align:left;background-color:transparent; height:20px;">
                            </td>


                            <td style="border:2px solid transparent;">
                                <input type="numeric" name="art22" id="art22"
                                    style="width:100%; text-align:left;background-color:transparent;"></td>

                            <td style="border:2px solid transparent;">
                                <input type="text" name="art23" id="art23"
                                    style="width:100%; text-align:left;background-color:transparent; height:20px;">
                            </td>

                            <td style="border:2px solid transparent;">
                                <input type="numeric" name="art24" id="art24"
                                    style="width:100%; text-align:left;background-color:transparent;"></td>

                            <td style="border:2px solid transparent;">
                                <input type="numeric" name="art25" id="art25"
                                    style="width:100%; text-align:left;background-color:transparent;"></td>

                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>

            <table border="1" cellpadding="4" cellspacing="0"
                style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
                <thead>
                    <tr>
                        <td style="width:50%; border: 0px; background-color:transparent;"> </td>

                        <td style="width:50%; border: 0px; background-color:transparent;">
                            <center> <input type="submit" name="button" id="button" value="Save "
                                    style=" font-size:15px;  border-radius:11px;" /> </center>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-sm-5">
        <div class="panel-body">
            <ul class="nav nav-tabs" style="border:0px;">

                <table border="1" cellpadding="4" cellspacing="0"
                    style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
                    <thead>
                        <tr>
                            <td style="width:33.333333%; border: 0px; background-color:transparent;"> <a
                                    data-toggle="tab" href="#tab1a">
                                    <center><img src="database icons/queue-512.png" width="100" height="100" class=" "
                                            style=" height:30px; width:30px; background-color:transparent"> <br>
                                        <a href="client_management.php">Lab results <b class="data-taggle"
                                                class="tooltip" title="No. of clients due for medical services">
                                                &nbsp;
                                        </a> </b>

                                    </center>
                                </a>
                            </td>

                            <td style="width:33.333333%;border: 0px ; background-color:transparent;">
                                <a data-toggle="tab" href="#tab2a">

                                    <center><img src="database icons/press-nozbe.png" width="100" height="100" class=" "
                                            style=" height:30px; width:30px; background-color:transparent"> <br>
                                        In-referals &nbsp;
                                        <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                                                       AND SERVICEEXTENTIONSTATUS ='NULL'  
                                                                       AND SERVICEEXTENTION = 'MEDICAL'  GROUP BY NTIHCNO");
        $result->execute();
        $rowcount5Z = $result->rowcount(); 
       ?>
                                        <?php echo $rowcount5Z;?>


                                        <center>
                                </a>

                            </td>
                            <td style="width:33.333333%;border:0px ; background-color:transparent;">
                                <a data-toggle="tab" href="#tab3a">
                                    <center><img src="database icons/images.jpg" width="100" height="100" class=" "
                                            style=" height:30px; width:30px; background-color:transparent"> <br>
                                        Outreach&nbsp;
                                        <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' AND INSVCSTATUS ='NO'  GROUP BY NTIHCNO");
        $result->execute();
        $rowcount5Zaa = $result->rowcount(); 
      ?>
                                        <?php echo $rowcount5Zaa;?>

                                        <center>
                                </a>

                            </td>
                            </tbody>
                </table>
            </ul>

            <div class="panel-body"
                style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
                <table border="1" cellpadding="4" cellspacing="0"
                    style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
                    <thead>
                        <tr>
                            <th style="width:39%; text-align:left; border:0px;"> <strong>Pending&nbsp;lab
                                    requests</strong></th>
                            <th style="width:10%; text-align:left; border:0px;">
                                <b data-toggle="tooltip" title="All sent requests"
                                    style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;"
                                    class="button 5">
                                    <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration  WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='NOT STARTED' AND MEDICAL ='1' AND LABVIST ='1' 
                   AND LABRESULTREVIEW ='NOTAPPLICABLE' GROUP BY NTIHCNO");
        $result->execute();
        $rowcount5 = $result->rowcount(); 
       ?>
                                    <?php echo $rowcount5;?>
                                    </td>
                            <th style="width:2%; text-align:left; border:0px;"> </th>
                            <th style="width:39%; text-align:left; border:0px;"><strong>Completed&nbsp;lab orders
                                </strong> </th>
                            <th style="width:10%; text-align:left; border:0px;">
                                <b data-toggle="tooltip" title="All completed results"
                                    style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;"
                                    class="button 5">
                                    <?php 
      include('client_medical_conn.php');
      $date = date("Y-m-d").' 00:00:00';
        $result = $db->prepare("SELECT * FROM cmpatientsregistration  WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='COMPLETED' AND MEDICAL ='1' AND LABVIST ='1' 
                   AND LABRESULTREVIEW ='NOTAPPLICABLE' GROUP BY NTIHCNO");
        $result->execute();
        $rowcount6 = $result->rowcount(); 
       ?>
                                    <?php echo $rowcount6;?>
                                </b>
                                </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-7"></div>

    <div class="col-sm-12">


        <div class="panel-body">

            <div class="widget-content tab-content" style="border:0px;">
                <div id="tab1a" class="tab-pane active">


                    <p></p>

                    <div id="dialog-window" style="background-color:transparent;">
                        <div id="scrollable-content" style="background-color:transparent;">
                            <ul>
                                <div class="" id="labresultxt" style="margin-left: -30px;">


                                </div>

                        </div>
                        </ul>
                    </div>

                    <div id="footer" style="text-align:left; border:0px;">
                    </div>

                    <style>
                    #dialog-window {
                        height: 200px;
                        border: 0px black solid;
                        border-radius: 7px;
                        width: 100%;
                    }

                    #scrollable-content {
                        height: 200px;
                        overflow: auto;
                        background-color: transparent;
                        width: 100%;
                    }

                    #footer {
                        height: 0px;
                    }
                    </style>

                    <script>
                    setInterval(function() {
                        $.ajax({
                            type: 'POST',
                            url: 'medical/medical_labresults.php',
                            success: function(data) {
                                $('#labresultxt').html(data);
                            }
                        });
                    }, 2000);
                    </script>


                </div>
                <div id="tab2a" class="tab-pane">
                    <p>Internal referrals / Clients recommended for medical attention</p>
                    <table id="exampleoutex" class="table table-tabled table-bordered"
                        style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
                        <thead>
                            <tr>

                                <th style="background-color:transparent;">VIST DATE</th>
                                <th style="background-color:transparent;">NTIHC.NO</th>
                                <th style="background-color:transparent;">CLIENT&nbsp;NAME</th>
                                <th style="background-color:transparent;">REQUESTING&nbsp;UNIT</th>
                                <th style="background-color:transparent;">SENT&nbsp;BY</th>
                                <th style="background-color:transparent;">TIME&nbsp;IN</th>
                                <th style="background-color:transparent; text-align:center;">SERVICE</th>
                                <th style="background-color:transparent; text-align:center;">ACTION</th>
                            </tr>
                            </tfoot>
                        <tbody>

                            <script>
                            function postclient(myid) {
                                var dtexplosion = myid.split("***");
                                document.getElementById("myNTIHCNO").value = dtexplosion[0];
                                document.getElementById("myID").value = dtexplosion[1];
                                document.getElementById("myAGE1").value = dtexplosion[2];
                                document.getElementById("myAGEGP").value = dtexplosion[3];
                                document.getElementById("mySEX").value = dtexplosion[4];
                            }
                            </script>

                            <?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                                                       AND SERVICEEXTENTIONSTATUS ='NULL'  
                                                                       AND SERVICEEXTENTION = 'MEDICAL' 
                                     GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
  while($res = mysqli_fetch_array($result)) {
  $dtexplosion = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['DATECREATED'];
    echo "<tr>"; 
    echo "<td>".$res['DATECREATED']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>"; 
    echo "<td>".$res['INSVCSTATUS']."</td>"; 
    echo "<td>".$res['USERINITIAL']."</td>"; 
    echo "<td>".$res['TIMEOUT']."</td>";
    
    echo '<td> &nbsp; &nbsp; &nbsp;  
    <a id="114__'.$dtexplosion.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
    <span class="glyphicon glyphicon-ok"> </span></a> &nbsp; &nbsp; &nbsp; 
    <a id="115__'.$dtexplosion.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a>&nbsp;  
    </td>';    
  echo "<td><a href=\"client_medical_hist.php?NTIHCNO=$res[NTIHCNO]\">Results</a>&nbsp;|  
    <a href=\"client_medical_disp.php?NTIHCNO=$res[NTIHCNO]\"><b>Prescribe</b></a>  </td>";  
  }
     
    ?>
                        </tbody>
                    </table>


                </div>
                <div id="tab3a" class="tab-pane">
                    List of clients processed from outreach
                    <table id="exampleoutreach" class="table table-tabled table-bordered"
                        style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
                        <thead>
                            <tr>

                                <th style="background-color:transparent;">VIST DATE</th>
                                <th style="background-color:transparent;">NTIHC.NO</th>
                                <th style="background-color:transparent;">CLIENT&nbsp;NAME</th>

                                <th style="background-color:transparent;">SERVICE&nbsp;INFO</th>
                                <th style="background-color:transparent;">PROCESSED&nbsp;BY</th>
                                <th style="background-color:transparent;">TIME&nbsp;IN</th>
                                <th style="background-color:transparent;">ACTION</th>
                            </tr>
                            </tfoot>
                        <tbody>

                            <script>
                            function postclient(myid) {
                                var dtsxxcq = myid.split("***");
                                document.getElementById("myNTIHCNO").value = dtsxxcq[0];
                                document.getElementById("myID").value = dtsxxcq[1];
                                document.getElementById("myAGE1").value = dtsxxcq[2];
                                document.getElementById("myAGEGP").value = dtsxxcq[3];
                                document.getElementById("mySEX").value = dtsxxcq[4];
                                document.getElementById("myRSVNID").value = dtsxxcq[5];
                            }
                            </script>

                            <?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
  while($res = mysqli_fetch_array($result)) {
  $dtsxxcq = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']."***".$res['DATECREATED'];
    echo "<tr>"; 
    echo "<td>".$res['DATECREATED']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>";   
    echo "<td>".$res['SERVICETYPE']."</td>";
    echo "<td>".$res['USERINITIAL']."</td>";
    echo "<td>".$res['CHECKIN']."</td>";
       
    echo '<td>     
    <a id="4091__'.$dtsxxcq.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
    <span class="glyphicon glyphicon-ok"> </span></a> &nbsp;    
    <a id="5091__'.$dtsxxcq.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a>  
    </td>';       
  }
     
    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>



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
    <script>
    function getvistdata(jose) {
        var odno = ((jose.split("__")[1]).split("***"))[1];
        $.ajax({
            type: 'POST',
            url: 'medical/getepisode.php?q=' + odno,
            success: function(data) {
                $('#getvist').html(data);
                $("#impres2").modal("show");
            }
        });
    }


    function getstuff(jose) {
        var odno = ((jose.split("__")[1]).split("***"))[1];
        $.ajax({
            type: 'POST',
            url: 'medical/getepisode2.php?q=' + odno,
            success: function(data) {
                $('#pettyview').html(data);
                $("#impres").modal("show");
            }
        });
    }


    function gettestresults(jose) {
        var odno = ((jose.split("__")[1]).split("***"))[1];
        $.ajax({
            type: 'POST',
            url: 'medical/getresults2.php?q=' + odno,
            success: function(data) {
                $('#getresults').html(data);
                $("#impres4").modal("show");
            }
        });
    }
    </script>

    <script>
    setInterval(function() {
        $.ajax({
            type: 'POST',
            url: 'medical/medicalvists.php',
            success: function(data) {
                $('#medicalvists').html(data);
            }
        });
    }, 2000);
    </script>

<script>
    function filterProblemDescriptions(event){
        var desc = document.getElementById("p_art");
        var value = event.value;
        switch(value){
            case "ART":
                desc = document.getElementById("p_art");
                break;
            case "GYNAECOLOGICAL CONDITIONS":
                desc = document.getElementById("p_gyn");
                break;
            case "BODY CHANGES":
                desc = document.getElementById("p_bcs");
                break;
            case "SGBV CASES":
                desc = document.getElementById("p_sgb");
                break;
            case "GENERAL":
                desc = document.getElementById("p_genn");
                break;
            case "PREGNANCY":
                desc = document.getElementById("p_pre");
                break;
            case "STI/STD":
                desc = document.getElementById("p_sti");
                break;
            case "SIDE EFFECTS DRUG TOXICITIES ON ART":
                desc = document.getElementById("p_sed");
                break;
        }
        var dest_name = event.id;
        dest_name =  "p" + dest_name.substring(1);
        //var alt = document.getElementsByName(dest_name)[0];
        alert("'" + dest_name + "'");
        var nodes = document.getElementsByName(dest_name)[0].getElementsByTagName("optgroup");
       
        

        for(var i=0; i<nodes.length; i++){
            nodes[i].style.display = "none";
        }

        desc.style.display = "inline"; 

        document.getElementById("p_descs").value = ""
    }
</script>
    <script>
    function addRow12(tableId) {
        var table = document.getElementById(tableId);
        var rowCount = table.rows.length;

        var selects = '<select onchange="filterProblemDescriptions(this)" name="c_' + rowCount + '" id="c_' + rowCount + '" required="required" ' +
            'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:transparent;" >' +
            '<?php echo $stssb; ?>' +
            '</select>';

        var s1 = '<select id="p_descs" "name="p_' + rowCount + '" id="p_' + rowCount + '" required="required" ' +
            ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:transparent" >' +
            '<optgroup label="ART" id="p_art"> <?php echo $art; ?> </optgroup>' +
            '<optgroup label="BODY CHANGES" id="p_bcs"> <?php echo $bcs; ?> </optgroup>' +
            '<optgroup label="GENERAL" id="p_genn"> <?php echo $genn; ?> </optgroup>' +
            '<optgroup label="GYNAECOLOGICAL CONDITIONS" id="p_gyn"> <?php echo $gyn; ?> </optgroup>' +
            '<optgroup label="PREGNANCY" id="p_pre"> <?php echo $pre; ?> </optgroup>' +
            '<optgroup label="SGBV CASES" id="p_sgb"> <?php echo $sgb; ?> </optgroup>' +
            '<optgroup label="SIDE EFFECTS DRUG TOXICITIES ON ART"  id="p_sed"> <?php echo $sed; ?> </optgroup>' +
            '<optgroup label="STI/STD" id="p_sti"> <?php echo $sti; ?> </optgroup>' +
            '</Select>';

        var row1 = '<td><input type="checkbox" checked=""></td>' +
            '<td>' + selects + ' </td>' +
            '<td>' + s1 + '</td>';

        var row = table.insertRow(rowCount);
        row.innerHTML = row1;
        document.getElementById('mytable_rows').value = rowCount;
    }

    function dostg(thisid) {

        var val = thisid.split("_")[1];
        var v1 = parseFloat(document.getElementById("fq_" + val).value);

        var v4 = v1;
        document.getElementById("qty_" + val).value = v4;

    }

    function addRow13(tableId) {
        var table = document.getElementById(tableId);
        var rowCount = table.rows.length;
        var ttt = "<?php   echo $stss; ?>";

        var s1 = '<select name="dn_' + rowCount + '" onKeyUp="domee(this)" id="dn_' + rowCount +
            '" required="required" ' +
            ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:transparent" >' +
            '<option></option>' +
            '<option><?php   echo $stss; ?></option>' +
            '</select>';

        var fq = '<input type="hidden" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="fq_' + rowCount +
            '" id="fq_' + rowCount + '"  ' +
            'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';


        var qty = '<input type="hidden" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qty_' + rowCount +
            '" id="qty_' + rowCount + '" ' +
            'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';


        var row1 = '<td><input type="checkbox" checked=""></td>' +
            '<td>' + s1 + ' </td>' +
            '<td>' + fq + ' </td>' +
            '<td>' + qty + ' </td>';


        var row = table.insertRow(rowCount);
        row.innerHTML = row1;
        document.getElementById('mytable_rows1').value = rowCount;

    }

    function deleteRow12(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        for (var i = 1; i < rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if (null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
        rowCount = table.rows.length;
        for (var x = 4; x < rowCount; x++) {
            table.rows[x].cells[1].childNodes[0].id = "p_" + x;
            table.rows[x].cells[2].childNodes[0].id = "c_" + x;
        }
        document.getElementById('mytable_rows').value = rowCount - 1;
    }

    function deleteRow13(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        for (var i = 3; i < rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if (null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
        rowCount = table.rows.length;
        for (var x = 2; x < rowCount; x++) {
            table.rows[x].cells[1].childNodes[0].id = "dn_" + x;
            table.rows[x].cells[1].childNodes[0].name = "dn_" + x;
            table.rows[x].cells[2].childNodes[0].id = "fq_" + x;
            table.rows[x].cells[2].childNodes[0].name = "fq_" + x;

            table.rows[x].cells[3].childNodes[0].id = "qty_" + x;
            table.rows[x].cells[3].childNodes[0].name = "qty_" + x;

        }
        document.getElementById('mytable_rows1').value = rowCount - 1;
    }
    </script>


</body>

</html>