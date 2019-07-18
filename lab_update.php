  <?php
  $id = $_GET['id'];
   
  $DATECREATED = ''; 
    
  $sp = array();
  $hea = array();
  $ma = array();
  $sto = array();
  $ur = array();
  $sw = array();
  
  $REQUESTINGUNIT = '';  

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laboratory  WHERE `id` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
 
     $DATECREATED = $row['DATECREATED'];
     $USERINITIAL = $row['USERINITIAL'];
     
	 $sp = json_decode($row['SPECIMEN']);
     $hea = json_decode($row['HEAMATOLOGY_SCROLOGY']);
     $ma = json_decode($row['MALARIA']);
     $sto = json_decode($row['STOOL_MICROSCOPY']);
     $ur = json_decode($row['URINE_MICROSCOPY']);
     $sw = json_decode($row['SWABS_TYPE']);
     $sww = json_decode($row['SWABS_WETPREP']);
     $swb = json_decode($row['SWABS_GRAMSTAIN']);

     
	 
     $REQUESTINGUNIT = $row['REQUESTINGUNIT'];  
      }

  ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | procurement</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
 <style>
h9 {
    border-bottom: 2px solid #cc9900;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 2px solid black;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #ecf0f5;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 2px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
				 background-color: #fff;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
             }
             table tr:nth-child(even) {
             background:#ffffff;
             }

</style>
 
  
  
</head>
<body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">   

<div class="col-sm-2" style="text-align:left;">

</div>

<div class="col-sm-8">
  

 <br> <br> <br> <br>  
 
            <form class="form-horizontal" style="height:auto;">
 

            <th style="text-align:left;"> </th>
            <th style="text-align:left;"> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
               <td><input type="text" name="DATECREATED" value="<?php  echo $DATECREATED; ?>"  style="width:100%; text-align:left;"></td>

                <td><input type="text" name="USERINITIAL" value="<?php  echo $USERINITIAL; ?>"  style="width:100%; text-align:left;"></td>

                  
               <td><input type="date" name="REQUESTINGUNIT" value="<?php  echo $REQUESTINGUNIT; ?>" style="width:100%; text-align:left;"></td>
               </tr>
        <tr>
        </tr>
     </tbody>
  </table>
  </div>

  <br><br><br> 

   

          <table class="table table-striped">
 <table class="table table-striped" id="mytable1">
    <thead>
      <tr>
      <th>*</th>
                    <th>SPECIMEN</th>
                    <th>HEAMATOLOGY/SEROLOGY</th>
                    <th>MALARIA</th>
                    <th>STOOL MICROSCOPY</th>
                    <th>URINE MICROSCOPY</th>
                    <th>SWABS.TYPE</th>
                    <th>WET.PREP</th>
                    <th>GRAM STAIN</th>
      </tr>
      </thead>
             <tbody >
                                                <?php  $tot = count($sp); $s=0;
                                                 for($s=0;$s<$tot;$s++){ ?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="sp[]" disabled="" type="text" value="<?php  echo $sp[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="hea[]" disabled="" type="numeric" value="<?php  echo $hea[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="ma[]" disabled="" type="text" value="<?php  echo $ma[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="sto[]" disabled="" type="numeric" value="<?php echo $sto[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="ur[]" disabled="" type="numeric" value="<?php echo $ur[$s]; ?>"  class="form-control input-md" style= "width:100%; "/></td>
												  <td> <input  name="sw[]" disabled="" type="numeric" value="<?php echo $sw[$s]; ?>"  class="form-control input-md" style= "width:100%; "/></td>

                          input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="sww[]" disabled="" type="numeric" value="<?php echo $sww[$s]; ?>"  class="form-control input-md" style= "width:100%; "/></td>

                          <td> <input  name="swb[]" disabled="" type="numeric" value="<?php echo $swb[$s]; ?>"  class="form-control input-md" style= "width:100%; "/></td>
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
        <!-- /.col -->
        </div>
      <div class="col-sm-12">
        
        </div>
         <div class="col-xs-12"> 
      </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>
