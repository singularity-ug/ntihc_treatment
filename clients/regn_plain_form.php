 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css"> 
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
 
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
 
 
  <center> <legend style="color:#000; font-weight:bold;font-size:15px;"> NEW CLIENT(S) REGISTRATION FORM </legend> </center>

          <form class="form-horizontal" style="height:auto;">

		  <table class="table table-bordered" style="border:0px;">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style=" background-color:white;font-weight:normal; width:50%;"> </th>
        <th style="background-color:white; font-weight:normal;  width:50%;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  id="DATECREATED" class="form-control">
                </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  id="FIRSTNAME" data-placement="top" required="required "/>
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  id="LASTNAME"  data-placement="top" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->


                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Gender</label>
                     <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date of birth</label>
                    <div class="col-sm-8">
                   <input type="date" name="AGE" onSelect="agecalc()" onChange="agecalc()"  id="datepicker1"   class="form-control"  data-placement="top" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="pass1" class="control-label col-sm-4">Age</label>
                    <div class="col-sm-8">
                    <input type="text" name="AGE1" id="AGE1" class="form-control" data-placement="top" placeholder="Auto" />
                   </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Schooling</label>
                    <div class="col-sm-8"> 
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->
                
                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Education</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->
                
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Marital status</label>
                    <div class="col-sm-8"> 
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->

        </td>

        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment status</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                     <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone contact</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control" placeholder="First name" required="required" />
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control" placeholder="Last name" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control" placeholder="First name"  />
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control" placeholder="Last name"  />
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Living with</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->
                
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Heard about us</label>
                     <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->
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
        <th>Registered by  </th>
        <td> <input type="text" class="form-control"  name="REGISTEREDBY"  id="REGISTEREDBY" 
		readonly="readonly" style="background-color:#fff;"/> </td> 
    </tbody>
    </table>
 
         </form>

 
 
                
                </div> 
                <div class="col-xs-12" >
                <br>
               <center> <p style="font-weight:normal;">Copy right @ NTIHC <b>Integrated Medical and Managerial System</b> .All rights reserved. </p> <center>

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
