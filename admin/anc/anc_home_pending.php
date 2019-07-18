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
 
    

 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>anc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#DRUGNAME"+num).val(data[2]);
  $("#INSTOCK").val(data[2]);
  $("#UNITOFMEASURE").val(data[3]);
  $("#ESTIMATEDUNITCOST").val(data[4]); 
}

function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "anc_searchdrug.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>
  
  
  <?php
  $fz ='';
  if(isset($_GET['q'])) { $fz=$_GET['q']; }
  ?>
  <script>
  $(document).ready(function() {
     var ttt = "<?php echo $fz;  ?>";

   if(ttt==""){}  else{ $("#notificationModal").modal("show"); }
     $('#example').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
    "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#exdynam').DataTable( {
    "iDisplayLength": 15,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

    {extend :'pdf',
     title:' file'
    }
        ]
    } );
  } );
  </script>




 <script>
  $(document).ready(function() {
     $('#app1').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' '
    },
    {extend :'pdf',
     title:' '
    },
    {extend :'print',
     title:' '
    }
        ]
    } );
  } );
  </script>

 <script>
  $(document).ready(function() {
     $('#app2').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' '
    },
    {extend :'pdf',
     title:' '
    },
    {extend :'print',
     title:' '
    }
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#app3').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' '
    },
    {extend :'pdf',
     title:' '
    },
    {extend :'print',
     title:' '
    }
        ]
    } );
  } );
  </script>

 <script>
  $(document).ready(function() {
     $('#app4').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' '
    },
    {extend :'pdf',
     title:' '
    },
    {extend :'print',
     title:' '
    }
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#exdrug').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' Ntihc imms'
    },
    {extend :'pdf',
     title:'Ntihc imms '
    },
    {extend :'print',
     title:' Ntihc imms'
    }
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' '
    },
    {extend :'pdf',
     title:' '
    },
    {extend :'print',
     title:' '
    }
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable();
  } );
  </script>

  

    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
               padding-bottom: 0px;
              font-size: 11px;
              color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header" style="margin-top: -1px;">
 <?php
  require('config.php');
  ?>
     
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="../../client_management.php" class="" > Client management<span class="sr-only">(current)</span></a></li>  
           <li class="active"><a href="anc_home.php" class="" > 
           <marquee id="ticker" direction="right" loop="20"> Welcome &nbsp; <?php echo $nameofuser; ?>  </marquee>  <span class="sr-only">(current)</span></a></li>  
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      
      
       <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../../index.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button --> 
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color:#000;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        . 
        <div class="pull-left image"> 
        </div> 
        <div class="pull-left info">
           
        </div>
      </div>
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" style="margin-top: -90px;">
        <li class="header" font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;background-color:#f44336;">ANTENATAL CARE</li> 
          <li>
          <a href="anc_home.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="  color:#fff;">Real time services</span>
            <span class="pull-right-container">
              <small class="  ">   </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="anc_home_pending.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Pending entries</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
        
         
          <li>
          <a href="anc_home_history.php"  style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">View clients history</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
         <li> 
         <a href="anc_tally_tool.php?d1=0&d2=0"  style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">User daily tally tool</span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>
        
         
          
       <br> 
       
         <div id="reviews" class="carousel slide" data-ride="carousel" style="border:0px; border-radius:11px;">

                                    <div class="carousel-inner" style="background-color: #FFFFFF;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">
                                             <p> <center>Number of clients due for </center> </p>
                                             <p> <center>Pregnancy related services </center></p>
                                              <center> <span style="font-size:30px;"> 
                                               
                                                  <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error()); 
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID,NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ")) {   
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
                                               
                                               </span> </center><br>
                                                <div class="user-img pull-right">

                                                </div> 
                                                <h5 class="pull-right"> <strong class="c-black"> </strong></h5></center>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Total number of clients</center></p> 
                                            <p><center>waiting for data entry</center></p>
                                             <center>  <span style="font-size:30px;">
                                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT RID,NTIHCNO FROM cmpatientsregistration WHERE SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                                                </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>

                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Total number of clients</center></p> 
                                            <p><center>examined</center></p>
                                             <center>  <span style="font-size:30px;">
                                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id,NTIHCNO FROM anteprogress WHERE TIMESTAMP >='$date' 
                                                                       GROUP BY NTIHCNO ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
                                                </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Total number of  </center></p> 
                                            <p><center>prescriptions made</center></p>
                                             <center>  <span style="font-size:30px;">
                                               <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERVICE_EPISODE FROM prescription WHERE TIMESTAMP >='$date' AND  REQUESTINGUNIT='ANTENATAL CARE'
                                                                       GROUP BY SERVICE_EPISODE ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
                                                </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Total number of orders</center></p> 
                                            <p><center>dispensed</center></p>
                                             <center>  <span style="font-size:30px;">
                                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERVICE_EPISODE FROM prescription WHERE TIMESTAMP >='$date' AND  REQUESTINGUNIT='ANTENATAL CARE' AND  CHECKAVAILABILITY='YES'
                                                                       GROUP BY SERVICE_EPISODE ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
                                                </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>  
                                        
                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Total number of orders</center></p> 
                                            <p><center>waiting for dispensing</center></p>
                                             <center>  <span style="font-size:30px;">
                                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERVICE_EPISODE FROM prescription WHERE TIMESTAMP >='$date' AND  REQUESTINGUNIT='ANTENATAL CARE' AND  CHECKAVAILABILITY='YES'
                                                                       GROUP BY SERVICE_EPISODE ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
                                                </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>    
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:yellow;"></li> 
                                         <li data-target="#reviews" data-slide-to="2" style="background-color:red;"></li> 
                                         <li data-target="#reviews" data-slide-to="3" style="background-color:blue;"></li> 
                                         <li data-target="#reviews" data-slide-to="4" style="background-color:green;"></li> 
                                         <li data-target="#reviews" data-slide-to="5" style="background-color:red;"></li> 
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->
                                    
                                    </div></ul>
                                     
       <a href="anc_home.php" style="margin-top: 10px; color:#fff;">
         <canvas id="canvas" width="400" height="400" style="height: 100%; width:100%;background-color:#f44336;">
      </canvas> </a></li>
            
           
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #dddddd; height:auto;"> 
    <section class="content-header">  
    </section>

    <!-- Main content -->
    <section class="content"> 
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">

             
                  <div class="table-responsive mailbox-messages">  
       
 
       <img src="../../assets/img/logsbig.PNG" width="100%" height="30%" style="height:90px;">

             <p style="text-transform:uppercase; font-weight:bold; text-align:center; font-family:algeria; font-size:14px;">antenatal care</p>
          <div class="box box-primary" style="border:0px;"> 
               <a href="anc_home.php" class="btn btn-primary btn-block margin-bottom" style="color:trensparent; text-transform:uppercase; font-size:11px;"> 
               pending entries || CLIENTS processed for pregnancy related services</a> 

              <div class="box-tools pull-right">
                <div class="has-feedback"> 
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
             <!-- /.box-header -->
             <div class="box-body no-padding">
             <div class="mailbox-controls">
             <!-- Check all button -->

              </div>
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">

                  <!-- Info boxes -->
                  
                   <div class=""  id="demog" >  </div>
                     <script> 
               function demog(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_select.php?q='+odno,
                            success : function(data){
                                     $('#demog').html(data);
                    $("#provoo").modal("show");
                                      }
                    });
                    } 
               </script>
               
               
          
          
           <div class=""  id="newclient" >  </div>
                     <script>

               function newclient(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_newrecord.php?q='+odno,
                            success : function(data){
                                     $('#newclient').html(data);
                    $("#provoo").modal("show");
                                      }
                    });
                    }

               </script>     
               
               <div class=""  id="progress" >  </div>
                     <script>

               function progress(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_progress.php?q='+odno,
                            success : function(data){
                                     $('#progress').html(data);
                    $("#provoo").modal("show");
                                      }
                    });
                    }

               </script>   
   
       
     <div class=""  id="obstetric" >  </div>
                     <script>

               function obstetric(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_obstetric.php?q='+odno,
                            success : function(data){
                                     $('#obstetric').html(data);
                    $("#proviewx").modal("show");
                                      }
                    });
                    }

               </script>
               
           
        <div class=""  id="medix" >  </div>
                     <script>

               function medix(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_medical.php?q='+odno,
                            success : function(data){
                                     $('#medix').html(data);
                    $("#provoomef").modal("show");
                                      }
                    });
                    }

               </script>  
               
       
           
           <table id="exdynam" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;margin-top: -18px; ">  
                 <thead>
                 <tr>
                     <th>DATE</th>
           <th>NTIHC.NO.</th>
                     <th>NAME</th>
                     <th>AGE</th>
           <th>VIST</th> 
                     <th>ANC.DEMOGRAPHY</th>
           <th>OBSTETRIC.HISTORY</th>
                     <th>PROGRESS.EXAMINATION</th>
                     <th>TREATMENT</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
                 <th>DATE</th>
           <th>NTIHC.NO</th>
                     <th>NAME</th>
                     <th>AGE</th>
           <th>VIST</th> 
                     <th>ANC DEMOGRAPHY</th>
           <th>OBSTETRIC HISTORY</th>
                     <th>PROGRESS EXAMINATION</th>
                     <th>TREATMENT</th>
        </tr>
        </tfoot>
        <tbody>

    <script>
function postclient(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[0];
document.getElementById("myID").value=dts[1];
document.getElementById("myAGE1").value=dts[2];
document.getElementById("myAGEGP").value=dts[3];
}
</script>


<?php
include_once("configpatientmgtdb.php");
$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ORDER BY TIMESTAMP");

  while($res = mysqli_fetch_array($result)) {
  $dts = $res['RID']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP'];
    echo "<tr>";
    echo "<td>".$res['TIMESTAMP']."</td>";
    echo "<td>".$res['NTIHCNO']."</td>";
    echo "<td>".$res['CLIENTNAME']."</td>";
    echo "<td>".$res['AGE1']."</td>";
    echo "<td>".$res['VISTTYPE']."</td>"; 
    
    echo '<td>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a id="1190__'.$dts.'" href="javascript:void(0)"  onclick="newclient(this.id)" data-toggle="tooltip" title="Start service" 
    style="color: #fff;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class="btn btn-primary"> Demography</span></a>
    </td>';
     
    echo '<td>  
    &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    <a id="200__'.$dts.'" href="javascript:void(0)"  onclick="obstetric(this.id)" data-toggle="tooltip" title="Start service" 
    style="color: #fff;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class="btn btn-warning"> Previous history</span></a> 
    </td>';
     
        
    echo '<td>
    &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
        <a id="230__'.$dts.'" href="javascript:void(0)"  onclick="progress(this.id)" data-toggle="tooltip" title="Start service"
    style="color: #fff;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class="btn btn-danger"> Check progress</span></a>  </td>';
    
    
    echo '<td>
    &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
              <a id="390__'.$dts.'" href="javascript:void(0)" onclick="medix(this.id)" data-toggle="tooltip" title="Drugs"
               style="color: #fff;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class="btn btn-success"> Prescription</span></a>  </td>';
        
     
             } 

    ?>
  </tbody>
  </table>  
            
         
          
             </div></div></div></div> 
     <!-- /. ROW  -->   
         
                

                </div> 
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <footer class="main-footerx" style="background-color: #000; color:#fff;text-align:center;">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
  </div> 


<script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
  <script type="text/javascript" src="../../assets/js/gauge.js"></script> 
</body>
</html> 