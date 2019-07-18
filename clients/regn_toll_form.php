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
  $id =  $_GET['CID'];  
  $DATECREATED = '';
  $FIRSTNAME = '';
  $LASTNAME  = ''; 
  $SEX = '';
  $AGE = ''; 
  $SCHOOLINGSTATUS = '';
  $HIGHESTLEVELOFEDUCATION = '';
  $MARITALSTATUS = '';
  $EMPLOYMENTSTATUS = '';
  $DISTRICT = '';
  $DIVISION = '';
  $PLACEOFRESIDENCE = '';
  $PHONECONTACT = '';
  
  $LIVINGWITH='';
  $HEAREDABOUTNTIHC=''; 
  $REGISTERACCOUNT=''; 
  $CALLSERIALNO=''; 
  $CID = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM tollfree  WHERE CID = '$id' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
    
   $CALLSERIALNO          = $row['CALLSERIALNO'];  
   $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME = $row['FIRSTNAME'];
     $LASTNAME  = $row['LASTNAME']; 
     $SEX = $row['SEX'];
     $AGE = $row['AGE']; 
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS'];
     $HIGHESTLEVELOFEDUCATION = $row['HIGHESTLEVELOFEDUCATION'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $DIVISION = $row['DIVISION'];
     $PLACEOFRESIDENCE = $row['PLACEOFRESIDENCE'];
     $PHONECONTACT = $row['PHONECONTACT'];
      
     $LIVINGWITH =$row['LIVINGWITH'];
     $HEAREDABOUTNTIHC=$row['HEAREDABOUTNTIHC']; 
     $CID = $row['CID'];
      } 
     ?>
    
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tollfree</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../admin/assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../admin/assets/notifier.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../admin/datatable/css/buttons.dataTables.min.css">

  <script src="../admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="../admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="../admin/datatable/js/bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="../admin/datatable/js/buttons.flash.min.js"></script>
  <script src="../admin/datatable/js/jszip.min.js"></script>
  <script src="../admin/datatable/js/pdfmake.min.js"></script>
  <script src="../admin/datatable/js/vfs_fonts.js"></script>
  <script src="../admin/datatable/js/buttons.html5.min.js"></script>
  <script src="../admin/datatable/js/buttons.print.min.js"></script>
  

   <script>
  $(document).ready(function() {
     $('#hagy').DataTable( {
    "iDisplayLength": 25,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' TollFree Data'
    },
    {extend :'pdf',
     title:'TollFree Data '
    },
    {extend :'print',
     title:'TollFree Data'
    }
        ]
    } );
  } );
  </script>
  
   
  
<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
  font-weight: normal;
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
         font-weight: normal;
             }
             table tr:nth-child(odd) {
              background-color:transparent;
             }
             table tr:nth-child(even) {
              background-color:transparent;
             } 
 </style>
 

</head> 
<body class="hold-transition skin-blue sidebar-mini"> 
<div class="wrapper" style="background:url(assets/images/tf1.jpg);">
       
  </header>
    
   
     
    <!-- Main content -->
    <section class="content">  
   

    <!-- Main content -->
    <section class="content" >
      <div class="row" > 
           <div class="col-md-1">  
            </div> 

          
     
         <div class="col-md-11">  
         
         
         <div class="panel-body">
         <div class="col-md-6">  
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:10%; border: 0px;">  
    <img src="../assets/img/ntihclog2.png"width="60" height="60" style="border: 0px; ">  
    </td>
   
     <td style="width:80%; border: 0px;">  
   <center style="color:#000; font-weight:bold; font-size:12px;">NAGURU&nbsp;TEENAGE&nbsp;INFORMATION AND&nbsp;HEALTH&nbsp;CENTER</center><p></p>
   <center style="color:#000; font-weight:bold; font-size:14px;font:bold 16px 'Aleo'; text-shadow:1px 1px 4px #000; color:#fff;">TOLL&nbsp;FREE</center><BR> 
    
    <td style="width:10%; border: 1px;">  
    </td>  
    </tbody>
    </table> 
    
    
      </div> 
      
                <div class="col-md-5">
                
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:25%; border: 1px;"> <a href="tollfree.php">  
      <img src="../assets/imgx/index.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Home  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
    <td style="width:25%; border: 1px;"> <a href="admin/reports/med_daily_reception.php?d1=0&d2=0"> 
       <center><img src="../assets/imgx/kkk.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Reports&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
     </td>  
     <td style="width:25%; border: 1px;"> <a href="tollfree_records.php"> 
         <center><img src="../assets/imgx/indexreewss.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
    <td style="width:25%; border: 1px;"> <a href="admin/index.php"> 
       <center><img src="../database icons/access-administrator-account.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
       Logout </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
   </td> 
   </tbody>
   </table> 
    
     </div> </div>
        
                      
       <div class="col-sm-11">      
 
  <center> <legend style="color:#000; font-weight:bold;font-size:10px;"> CLIENT DEMOGRAPHY <?php echo $CALLSERIALNO;?> </legend> </center>

          <form id="form1" class="form-horizontal" action="dem_update.php" method="POST" style="height:auto; font-weight:normal;"> 
              
              
              <input type="hidden" class="form-control"  name="CALLSERIALNO"  value="<?php echo $SCHOOLINGSTATUS;?>/<?php echo $CID;?>" /> 
              
     <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:50%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" class="form-control">
                </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" required="required "/>
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  value="<?php echo $LASTNAME;?>" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

                


                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Gender</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="SEX" value="<?php echo $SEX;?>" required="required">
                        <option value="<?php echo $SEX;?>"> <?php echo $SEX;?> </option> 
                        <option value="FEMALE">FEMALE</option>
                        <option value="MALE">MALE</option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date of birth</label>
                    <div class="col-sm-8">
                   <input type="text" name="AGE"  value="<?php echo $AGE;?>" class="form-control" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->
               

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Age</label>
                    <div class="col-sm-8">
                    <input type="text" name="AGE1" id="AGE1" class="form-control"  readonly="" />
                   </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Schooling</label>
                    <div class="col-sm-8"> 
                    <select class="form-control" name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" required="required">
                        <option value="<?php echo $SCHOOLINGSTATUS;?>"> <?php echo $SCHOOLINGSTATUS;?> </option>
                              <option value="IS">IS</option>
                    <option value="OS">OS</option>
                        </select>
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Education</label>
                    <div class="col-sm-8">
                       <select class="form-control" name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" required="required">
                        <option value="<?php echo $HIGHESTLEVELOFEDUCATION;?>"> <?php echo $HIGHESTLEVELOFEDUCATION;?> </option>
                                <option>PRIMARY</option>
                <option>SECONDARY</option>
                                <option>TERTIARY</option>
                <option>VOCATION</option>
                                <option>UNIVERSITY</option>
                <option>NONE</option>
                          </select>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Marital status</label>
                    <div class="col-sm-8"> 
                              <select class="form-control" name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" required="required">
                        <option value="<?php echo $MARITALSTATUS;?>"> <?php echo $MARITALSTATUS;?> </option>
                <option>SINGLE</option>
                <option>MARRIED</option>
                                <option>SEPARATED</option>
                <option>WIDOWED</option>
                                <option>DIVORCED</option>
                <option>NO RESPONSE</option>
                          </select>
                   </div>
                </div>
                <!-- /.form-group -->

        </td>

        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment status</label>
                    <div class="col-sm-8"> 
                   <select class="form-control" name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>" required="required">
             <option value="<?php echo $EMPLOYMENTSTATUS;?>"> <?php echo $EMPLOYMENTSTATUS;?> </option>
                                <option value="UNEMPLOYED">UNEMPLOYED</option>
                <option value="TEMPORARY">TEMPORARY</option>
                                <option value="PERMANENT">PERMANENT</option>
                  </select>
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <select class="form-control" name="DISTRICT" value="<?php echo $DISTRICT;?>" required="required">
             <option value="<?php echo $DISTRICT;?>"> <?php echo $DISTRICT;?> </option>
                <option>KAMPALA</option>
                <option>MUKONO</option>
                                <option>WAKISO</option>
                                <option>MPIGI</option>
                <option>KAYUNGA</option>
                                <option>ENTEBBE</option>
                                <option>NAKASEKE</option>
                <option>BUIKWE</option>
                                <option>GOMBA</option>
                                <option>OTHERS</option>
                   </select>
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
            <select class="form-control" name="DIVISION" value="<?php echo $DIVISION;?>">
             <option value="<?php echo $DIVISION;?>"> <?php echo $DIVISION;?> </option>
                <option>CENTRAL</option>
                <option>LUBAGA</option>
                                <option>NAKAWA</option>
                                <option>MAKINDYE</option>
                                <option>KAWEMPE</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control"  value="<?php echo $PLACEOFRESIDENCE;?>" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone contact</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control"  value="<?php echo $PHONECONTACT;?>" />
                   </div>
                </div>
                <!-- /.form-group -->

                 

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Living with</label>
                    <div class="col-sm-8"> 
            <select class="form-control" name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>">
             <option value="<?php echo $LIVINGWITH;?>"> <?php echo $LIVINGWITH;?> </option>
                <option>SINGLE PARENTS</option>
                <option>BOTH PARENTS</option>
                                <option>GRAND PARENTS</option>
                                <option>GUARDIAN</option>
                <option>ALONE/SELF</option>
                                <option>BROTHER</option>
                                <option>SISTER</option>
                                <option>B/FRIEND</option>
                                <option>WIFE</option>
                                <option>HUSBAND</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Heard about us</label>
                    <div class="col-sm-8">
                  <select class="form-control" name="HEAREDABOUTNTIHC" value="<?php echo $HEAREDABOUTNTIHC;?>">
             <option value="<?php echo $HEAREDABOUTNTIHC;?>"> <?php echo $HEAREDABOUTNTIHC;?> </option>
                <option value="PEERS">PEERS</option>
                <option value="PARENTS/GUARDIAN">PARENTS/GUARDIAN</option>
                                <option value="HEALTH WORKER">HEALTH WORKER</option>
                                <option value="OUTREACH">OUTREACH</option>
                <option value="EMPLOYER">EMPLOYER</option>
                                <option value="NEWS PAPER">NEWS PAPER</option>
                                <option value="RADIO">RADIO</option>
                                <option value="TV">TV</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->
            

             </td>
    </tbody>
    </table>



   <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;"></th>
        <th style="border-bottom-color:white;font-weight:bold; width:66.6666666666%;"></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td>Updated by </td>
        <td>  <input type="text" class="form-control"  name="REGISTEREDBY"  id="REGISTEREDBY" readonly="" value="<?php echo $nameofuser; ?>" /> </td> 
    </tbody>
    </table>
 
              <input type="hidden" name="CID" value=<?php echo $_GET['CID'];?>> 
         <center> <input type="submit" name="buttonsendct" id="button" value="Update"  style="border-radius:11px;"/> 
                 &nbsp;&nbsp;&nbsp
           
                    <a rel="facebox" title="" href="../registration_desk.php"><button class="" style="border-radius:11px;"> <i class="icon-edit">  
                    </i>  <strong>Back</strong></button> </a> 
                 </center>   
      <br>
        </form> 
  
</body>
</html>
