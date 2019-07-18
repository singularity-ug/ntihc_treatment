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
  $id =  $_GET['PID'];  
  $DATECREATED = '';
  $FIRSTNAME = '';
  $LASTNAME  = '';
  $OTHERNAME = '';
  $SEX = '';
  $AGE = '';
  $AGE1 = ''; 
  $SCHOOLINGSTATUS = '';
  $HIGHESTLEVELOFEDUCATION = '';
  $MARITALSTATUS = '';
  $EMPLOYMENTSTATUS = '';
  $DISTRICT = '';
  $DIVISION = '';
  $PLACEOFRESIDENCE = '';
  $PHONECONTACT = '';
  $MOTHERFIRSTNAME = '';
  $MOTHERLASTNAME='';
  $FATHERFIRSTNAME='';
  $FATHERLASTNAME='';
  $LIVINGWITH='';
  $HEAREDABOUTNTIHC='';
  $REGISTEREDBY='';
  $REGISTERACCOUNT=''; 
  $NTIHCNO=''; 
  $PID = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE PID = '$id' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	  
	 $NTIHCNO          = $row['NTIHCNO'];  
	 $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME = $row['FIRSTNAME'];
     $LASTNAME  = $row['LASTNAME'];
     $OTHERNAME = $row['OTHERNAME'];
     $SEX = $row['SEX'];
     $AGE = $row['AGE'];
	 $AGE1 = $row['AGE1'];
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS'];
     $HIGHESTLEVELOFEDUCATION = $row['HIGHESTLEVELOFEDUCATION'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $DIVISION = $row['DIVISION'];
     $PLACEOFRESIDENCE = $row['PLACEOFRESIDENCE'];
     $PHONECONTACT = $row['PHONECONTACT'];
     $MOTHERFIRSTNAME  = $row['MOTHERFIRSTNAME'];
     $MOTHERLASTNAME=$row['MOTHERLASTNAME'];
     $FATHERFIRSTNAME=$row['FATHERFIRSTNAME'];
     $FATHERLASTNAME=$row['FATHERLASTNAME'];
     $LIVINGWITH =$row['LIVINGWITH'];
     $HEAREDABOUTNTIHC=$row['HEAREDABOUTNTIHC'];
     $REGISTEREDBY=$row['REGISTEREDBY'];
     $PID = $row['PID'];
      } 
     ?>
    
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
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
             	 font-size: 11px;
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
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
        <!-- title row -->
        <div class="row">
        <div class="col-xs-12"> 
        <div class="modal-body">   
 
 <div class="col-sm-3"></div>
 <div class="col-sm-6">
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
 
 
  <center> <legend style="color:#000; font-weight:bold;font-size:10px;"> CLIENT DEMOGRAPHY <?php echo $NTIHCNO;?> </legend> </center>

          <form id="form1" class="form-horizontal" action="dem_update.php" method="POST" style="height:auto; font-weight:normal;"> 
              
              
              <input type="hidden" class="form-control"  name="NTIHCNO"  value="<?php echo $SCHOOLINGSTATUS;?>/<?php echo $PID;?>" /> 
              
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
                    <label for="pass1" class="control-label col-sm-4">Other name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" />
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
                
                 <?php
$connect = new mysqli("localhost", "root", "", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT AGE,   
			 CURDATE(), TIMESTAMPDIFF(YEAR,AGE,CURDATE()) AS age 
			 FROM cmpatientsnewregistration WHERE `PID` = '$PID'"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "  " . $row['age'] ." ";   }
  }
$connect->close();
?>   

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Age</label>
                    <div class="col-sm-8">
                    <input type="text" name="AGE1" id="AGE1" class="form-control" value="<?php echo $stss; ?>"  readonly="" />
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
                    <label for="pass1" class="control-label col-sm-4">Mother name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control" value="<?php echo $MOTHERFIRSTNAME;?>"  required="required" />
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control" value="<?php echo $MOTHERLASTNAME;?>" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control" value="<?php echo $FATHERFIRSTNAME;?>"  />
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control" value="<?php echo $FATHERLASTNAME;?>"  />
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
        <input type="hidden" class="form-control"  name="REGISTERACCOUNT"  id="REGISTERACCOUNT" value="<?php echo $REGISTERACCOUNT; ?>">
    </tbody>
    </table>
 
              <input type="hidden" name="PID" value=<?php echo $_GET['PID'];?>> 
         <center> <input type="submit" name="buttonsendct" id="button" value="Update"  style="border-radius:11px;"/> 
                 &nbsp;&nbsp;&nbsp
				   
                    <a rel="facebox" title="" href="../registration_desk.php"><button class="" style="border-radius:11px;"> <i class="icon-edit">  
                    </i>  <strong>Back</strong></button> </a> 
                 </center>   
      <br>
        </form> 
  
</body>
</html>
