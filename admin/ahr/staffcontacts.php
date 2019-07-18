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
  $id =  $_GET['q'];  
  $Serial = '';  
  $FIRSTNAME = ''; 
  $LASTNAME = '';   
  $OTHERNAME = '';    
  $PFNUMBER = '';  
  $GENDER = '';  
  $MARITALSTATUS = '';  
  $PFNUMBER = '';   
  $OTHERNAME = '';    
  $GENDER = '';  
  $MARITALSTATUS = '';    
  $PLACEOFBIRTH = '';   
  $BIRTHDATE = '';    
  $NATIONALITY = '';  
  $RELIGION = '';   
  $MOBILEPHONE = '';   
  $HOMEPHONE = '';    
  $EMAIL = '';  
  $EMAIL2 = '';     
  $RESIDENTIALADDRESS = '';  
  $VILLAGELC1 = '';    
  $PARISHLC11 = '';   
  $SUBCOUNTYDIVISIONLC3 = '';    
  $DISTRICT = '';  
  $RESIDENTIALADDRESSAA = '';   
  $VILLAGELC1AA = '';   
  $PARISHLC11AA = '';    
  $SUBCOUNTYDIVISIONLC3AA = '';  
  $DISTRICTAA = '';   
  $ENTITYLOGO = '';    
  $FISCALYEAR = '';  
  $FISCALMONTH = ''; 	 
  $NUMBEROFCHILDREN = '';  
  $FULLNAMEOFSPOUSE = ''; 	 
  $BANKNAME = '';    
  $BANKBRANCH = '';  
  $ACCOUNTNUMBER = ''; 	 
  $PHYSICALDEFECTS = '';  
  $ANYOTHERINFORECARDINGHEALTH = ''; 	
   
  $NEXTOFKINPHONEONE = ''; 	 
  $NEXTOFKINPHONETWO = '';    
  $NEXTOFKINPHYSICALADDRESS = '';  
  $NEXTOFKINPOSTALADDRESS = ''; 	 
  $NEXTOFKINRELATIONSHIP = '';   
  $FULLNAMEOFFATHER = ''; 	 
  $FATHERPHYSICALADDRESS = '';    
  $FULLNAMEOFMOTHER = '';  
  $MOTHERPHYSICALADDRESS = ''; 	 
  $NEXTOFKINFIRSTNAME = '';  
  $NEXTOFKINSURNAME = ''; 	 
       		  
      
  $ALTNEXTOFKINFIRSTNAME = '';  
  $ALTNEXTOFKINSURNAME = ''; 	 
  $ALTNEXTOFKINPHONEONE = '';  
  $ALTNEXTOFKINPHONETWO = ''; 	
                           
  $ALTNEXTOFKINPHYSICALADDRESS = '';  
  $ALTNEXTOFKINPOSTALADDRESS = ''; 	 
  $ALTNEXTOFKINRELATIONSHIP = '';  
  $SUBMISSIONLEVEL = ''; 	             
			   		  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ahr";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM staffcontacts WHERE `Serial` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $id = $row['id']; 
     $Serial  = $row['Serial'];
     $FIRSTNAME  = $row['FIRSTNAME'];
     $LASTNAME = $row['LASTNAME'];   
	 $OTHERNAME = $row['OTHERNAME']; 
	 $PFNUMBER = $row['PFNUMBER'];  
	 $GENDER = $row['GENDER'];  
	 $MARITALSTATUS = $row['MARITALSTATUS'];  
	 $PFNUMBER = $row['PFNUMBER'];    
	 $BIRTHDATE = $row['BIRTHDATE'];    
	 $PLACEOFBIRTH = $row['PLACEOFBIRTH'];   
	 $NATIONALITY = $row['NATIONALITY']; 
	 $RELIGION = $row['RELIGION'];  
	 $MOBILEPHONE = $row['MOBILEPHONE'];  
	 $HOMEPHONE = $row['HOMEPHONE'];  
	 $EMAIL = $row['EMAIL'];  
	 $EMAIL2 = $row['EMAIL2'];   
     $RESIDENTIALADDRESS = $row['RESIDENTIALADDRESS'];    
	 $VILLAGELC1 = $row['VILLAGELC1'];   
	 $PARISHLC11 = $row['PARISHLC11']; 
	 $SUBCOUNTYDIVISIONLC3 = $row['SUBCOUNTYDIVISIONLC3'];  
	 $DISTRICT = $row['DISTRICT'];  
	 $RESIDENTIALADDRESSAA = $row['RESIDENTIALADDRESSAA'];  
	 $VILLAGELC1AA = $row['VILLAGELC1AA'];  
	 $PARISHLC11AA = $row['PARISHLC11AA'];  
	 $SUBCOUNTYDIVISIONLC3AA = $row['SUBCOUNTYDIVISIONLC3AA'];  
	 $DISTRICTAA = $row['DISTRICTAA'];   
	 $ENTITYLOGO = $row['ENTITYLOGO'];  
	 $FISCALYEAR = $row['FISCALYEAR'];  
	 $FISCALMONTH = $row['FISCALMONTH'];  
	 $NUMBEROFCHILDREN = $row['NUMBEROFCHILDREN'];  
	 $FULLNAMEOFSPOUSE = $row['FULLNAMEOFSPOUSE'];  
	       
	 $BANKNAME = $row['BANKNAME'];  
	 $BANKBRANCH = $row['BANKBRANCH'];  
	 $ACCOUNTNUMBER = $row['ACCOUNTNUMBER'];  
	 $PHYSICALDEFECTS = $row['PHYSICALDEFECTS'];  
	 $ANYOTHERINFORECARDINGHEALTH = $row['ANYOTHERINFORECARDINGHEALTH'];  
	 
	 $NEXTOFKINPHONEONE = $row['NEXTOFKINPHONEONE'];  
	 $NEXTOFKINPHONETWO = $row['NEXTOFKINPHONETWO'];  
	 $NEXTOFKINPHYSICALADDRESS = $row['NEXTOFKINPHYSICALADDRESS'];  
	 $NEXTOFKINPOSTALADDRESS = $row['NEXTOFKINPOSTALADDRESS'];  
	 $NEXTOFKINRELATIONSHIP = $row['NEXTOFKINRELATIONSHIP'];  
          
	 $FULLNAMEOFFATHER = $row['FULLNAMEOFFATHER']; 
	 $FATHERPHYSICALADDRESS = $row['FATHERPHYSICALADDRESS'];  
	 $FULLNAMEOFMOTHER = $row['FULLNAMEOFMOTHER'];  
	 $MOTHERPHYSICALADDRESS = $row['MOTHERPHYSICALADDRESS'];  
	 $NEXTOFKINFIRSTNAME = $row['NEXTOFKINFIRSTNAME'];  
	 $NEXTOFKINSURNAME = $row['NEXTOFKINSURNAME']; 
        
	 $ALTNEXTOFKINFIRSTNAME = $row['ALTNEXTOFKINFIRSTNAME'];  
	 $ALTNEXTOFKINSURNAME = $row['ALTNEXTOFKINSURNAME'];  
	 $ALTNEXTOFKINPHONEONE = $row['ALTNEXTOFKINPHONEONE'];  
	 $ALTNEXTOFKINPHONETWO = $row['ALTNEXTOFKINPHONETWO']; 
                           
	 $ALTNEXTOFKINPHYSICALADDRESS = $row['ALTNEXTOFKINPHYSICALADDRESS'];  
	 $ALTNEXTOFKINPOSTALADDRESS = $row['ALTNEXTOFKINPOSTALADDRESS'];  
	 $ALTNEXTOFKINRELATIONSHIP = $row['ALTNEXTOFKINRELATIONSHIP'];  
	 $SUBMISSIONLEVEL = $row['SUBMISSIONLEVEL']; 					
               
      } 
  ?>
      
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
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
   
 
   <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #fff;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #fff;
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
  
 </head> 
 
</head> 
<div class="wrapper" style="background-color:#fff;">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">   
          <script>
function myFunction() {
    window.print();
}
</script>

 
        
                  <!-- Info boxes --> 
                <img src="../assets/img/logsbig.PNG" width="100%" height="100%" style="height:90px;"> 
                <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b>STAFF CONTACT FORM</b> </p> </center> 
                   
     <form class="form-horizontal" action="ahr/staff_contactsprocess.php" method="POST" style="height:auto; font-weight:normal; background-color:#fff;"> 
      
   
     <input type="hidden"  id="Serial" name="Serial"  value="<?php  echo $Serial; ?>"  />
     
     <input type="hidden"  id="id" name="id"  value="<?php  echo $id; ?>"  />
    
     <input type="hidden"  id="PFNUMBER" name="PFNUMBER"  
     value="<?php  echo $ENTITYLOGO; ?>/<?php  echo $FISCALYEAR; ?>/<?php  echo $FISCALMONTH; ?>/<?php  echo $id; ?>"  />  
     
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Personal information
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body"> 
           
           <div class="col-sm-6" >
              <table class="table-responsive" style="margin-top:-3px;">
              <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> First name  </th>  
                <th style="width:60%;border:0px ;"> <input type="text"  name="FIRSTNAME"  id="FIRSTNAME" value="<?php  echo $FIRSTNAME; ?>"
                required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
              </div>
              
               <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-3px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Last name </th>  
                <th style="width:60%;border:0px ;"> <input type="text"   name="LASTNAME"  id="LASTNAME" value="<?php  echo $LASTNAME; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
            </div>
            
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Other names </th>  
                <th style="width:60%;border:0px ;"> <input type="text"   name="OTHERNAME"  id="OTHERNAME" value="<?php  echo $OTHERNAME; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table> 
           </div>
                

           <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Gender </th>  
                <th style="width:60%;border:0px ;"> <select id="GENDER" name="GENDER" value="<?php  echo $GENDER; ?>"
                 class="form-control" style="width:100%;background-color:#fff;"> 
                  <option value="<?php  echo $GENDER; ?>"><?php  echo $GENDER; ?> </option>
                                <option>Male</option>
                                <option>Female</option>
            </select> </th>  
              </tr>
			  </table> 
           </div>
                
         <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Marital status </th>  
                <th style="width:60%;border:0px ;"> <select id="MARITALSTATUS" name="MARITALSTATUS" value="<?php  echo $MARITALSTATUS; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                                <option value="<?php  echo $MARITALSTATUS; ?>"> <?php  echo $MARITALSTATUS; ?></option>
                                <option>Married</option>
                                <option>Single</option>
                                <option>Separated</option>
								<option>Widowed</option>
                                <option>Divorced</option> 
            </select> </th>  
              </tr>
			  </table>  
            </div>
            
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Date of birth</th>  
                <th style="width:60%;border:0px ;"> <input type="date" name="BIRTHDATE"  value="<?php  echo $BIRTHDATE; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table> 
           </div>
                  
           <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Place of birth</th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="PLACEOFBIRTH" id="PLACEOFBIRTH" value="<?php  echo $PLACEOFBIRTH; ?>"  
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table> 
           </div>
           
          
           
            <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;">Citizenship </th>  
                <th style="width:60%;border:0px ;"> <select  id="NATIONALITY" name="NATIONALITY" value="<?php  echo $NATIONALITY; ?>"
                class="form-control" style="width:100%;background-color:#fff;"> 
                                <option value="<?php  echo $NATIONALITY; ?>">Uganda</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>

<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select> </th>  
              </tr>
			  </table>  
            </div>
            
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Religion</th>  
                <th style="width:60%;border:0px ;"> <input type="text"id="RELIGION" name="RELIGION" value="<?php  echo $RELIGION; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Phone contact(2) </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="MOBILEPHONE"  id="MOBILEPHONE" value="<?php  echo $MOBILEPHONE; ?>"
                class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Phone contact(1) </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="HOMEPHONE"  id="HOMEPHONE" value="<?php  echo $HOMEPHONE; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Email addres </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="EMAIL"  id="EMAIL" value="<?php  echo $EMAIL; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Entity email </th>  
                <th style="width:60%;border:0px ;"> <input type="text"name="EMAIL2"  id="EMAIL2" value="<?php  echo $rm; ?>" readonly=""
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div> 
               
                <div class="col-sm-12"> 
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   <th style="border:0px;">Residential address</th>
               </tr> </table>  
			   </div>  
			   
                <div class="col-sm-12"> 
             <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr>  
                <th style="width:100%;border:0px ;"> <input type="text" name="RESIDENTIALADDRESS"  id="RESIDENTIALADDRESS" value="<?php  echo $RESIDENTIALADDRESS; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
             </div>
             
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Village / LC1 </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="VILLAGELC1"  id="VILLAGELC1" value="<?php  echo $VILLAGELC1; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Parish LC II </th>  
                <th style="width:60%;border:0px ;"> <input type="text"name="PARISHLC11"  id="PARISHLC11" value="<?php  echo $PARISHLC11; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table>  </div>
              
               <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Sub county/ Division/LC 111 </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="SUBCOUNTYDIVISIONLC3"  id="SUBCOUNTYDIVISIONLC3" value="<?php  echo $SUBCOUNTYDIVISIONLC3; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> District </th>  
                <th style="width:60%;border:0px ;"> <input type="text"name="DISTRICT"  id="DISTRICT" value="<?php  echo $DISTRICT; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
           
             <br>
			 
			 
			 <div class="col-sm-12"> 
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   <th style="border:0px;">Permanent Home Address</th>
               </tr> </table>  
			   </div>  
            <div class="col-sm-12">
			  
			
             <table class="table-responsive" style="margin-top:-13px;">
            <table class="table" style="border:0px;">
              <tr>  
                <th style="width:100%;border:0px ;"> <input type="text" name="RESIDENTIALADDRESSAA"  id="RESIDENTIALADDRESSAA" value="<?php  echo $RESIDENTIALADDRESSAA; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
            
                
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Village / LC1 </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="VILLAGELC1AA"  id="VILLAGELC1AA" value="<?php  echo $VILLAGELC1AA; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
         
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Parish LC II </th>  
                <th style="width:60%;border:0px ;"> <input type="text"name="PARISHLC11AA"  id="PARISHLC11AA" value="<?php  echo $PARISHLC11AA; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table>  </div>
              
               <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Sub county/ Division/LC 111 </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="SUBCOUNTYDIVISIONLC3AA"  id="SUBCOUNTYDIVISIONLC3AA" value="<?php  echo $SUBCOUNTYDIVISIONLC3AA; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> District </th>  
                <th style="width:60%;border:0px ;"> <input type="text"name="DISTRICTAA"  id="DISTRICTAA" value="<?php  echo $DISTRICTAA; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
              </div>
           
               <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;">Full Names of Spouse  </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="FULLNAMEOFSPOUSE"  id="FULLNAMEOFSPOUSE" value="<?php  echo $FULLNAMEOFSPOUSE; ?>" 
                 placeholder="(Husband or Wife if applicable)" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
			 
			 
               <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;">Number of children </th>  
                <th style="width:60%;border:0px ;"> <input type="numeric" name="NUMBEROFCHILDREN"  id="NUMBEROFCHILDREN" value="<?php  echo $NUMBEROFCHILDREN; ?>"   
                class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
			 
          <div class="col-sm-12">
	 
     </div>                        
                                
              <input type="hidden"  id="PFNUMBER" name="PFNUMBER"  
              value="<?php  echo $ENTITYLOGO; ?>/<?php  echo $FISCALYEAR; ?>/<?php  echo $FISCALMONTH; ?>/<?php  echo $id; ?>"  />  
       
 
              
             <div class="col-sm-12"> 
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   <th>Bank details</th>
               </tr> </table>  
			   </div>  
			   
            <div class="col-sm-6">
            <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Bank name </th>  
                <th style="width:60%;border:0px ;"> <input type="text"name="BANKNAME"  id="BANKNAME" value="<?php  echo $BANKNAME; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table>  </div>
              
               <div class="col-sm-6">
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>
				<th style="width:40%;border:0px ;"> Branch </th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="BANKBRANCH"  id="BANKBRANCH" value="<?php  echo $BANKBRANCH; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
        
		 <div class="col-sm-6">
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>
				<th style="width:40%;border:0px ;">  Account Number </th>  
                <th style="width:60%;border:0px ;">  <input type="text" name="ACCOUNTNUMBER"  id="ACCOUNTNUMBER" value="<?php  echo $ACCOUNTNUMBER; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
		 
        
           <br><br>
                 <div class="col-sm-12"> 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   <th>Physical Defects  / relevant information regarding your health</th>
               </tr> </table> 
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>    
                <th style="width:100%;border:0px ;"> <textarea name="PHYSICALDEFECTS"  id="PHYSICALDEFECTS" 
                 class="form-control" style="width:100%;background-color:#fff;"> <?php  echo $PHYSICALDEFECTS; ?></textarea> 
                  </th>  
              </tr> </table> 
              
           
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
		<th>Any other relevant information regarding your health</th>
		 </tr> </table> 
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
              <th style="width:100%;border:0px ;"> <textarea name="ANYOTHERINFORECARDINGHEALTH"  id="ANYOTHERINFORECARDINGHEALTH" 
                class="form-control" style="width:100%;background-color:#fff;"><?php  echo $ANYOTHERINFORECARDINGHEALTH; ?></textarea>  
                  </th>  
             </tr> </table>
             </div> 
             <br>
               <div class="col-sm-12"> <br>
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
				<th style="width:20%;border:0px ;"> Full Name of Father </th>  
                <th style="width:80%;border:0px ;"> <input type="text" name="FULLNAMEOFFATHER"  id="FULLNAMEOFFATHER" value="<?php  echo $FULLNAMEOFFATHER; ?>"
                class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           
             
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
              <th style="width:20%;border:0px ;"> Physical Address </th>
                <th style="width:80%;border:0px ;"> <input type="text" name="FATHERPHYSICALADDRESS"  id="FATHERPHYSICALADDRESS" value="<?php  echo $FATHERPHYSICALADDRESS; ?>"
              class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
              
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
				<th style="width:20%;border:0px ;"> Full Name of Mother </th>  
                <th style="width:80%;border:0px ;"> <input type="text" name="FULLNAMEOFMOTHER"  id="FULLNAMEOFMOTHER" value="<?php  echo $FULLNAMEOFMOTHER; ?>"
                class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
              <th style="width:20%;border:0px ;"> Physical Address </th>
                <th style="width:80%;border:0px ;"> <input type="text" name="MOTHERPHYSICALADDRESS"  id="MOTHERPHYSICALADDRESS" value="<?php  echo $MOTHERPHYSICALADDRESS; ?>"
              class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
             <br>
               <div class="col-sm-12">
               <p style="text-align:left; font-size:11px;">CONTACT OF NEXT OF KIN</p>
               
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
				<th style="width:20%;border:0px ;"> First Name </th>  
                <th style="width:30%;border:0px ;"> <input type="text"name="NEXTOFKINFIRSTNAME"  id="NEXTOFKINFIRSTNAME" value="<?php  echo $NEXTOFKINFIRSTNAME; ?>"
                class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>
                  
                  <th style="width:20%;border:0px ;"> Surname </th>  
                <th style="width:30%;border:0px ;"> <input type="text" name="NEXTOFKINSURNAME"  id="NEXTOFKINSURNAME" value="<?php  echo $NEXTOFKINSURNAME; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>   
                
               
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
				<th style="width:20%;border:0px ;"> Personal phone.1</th>  
                <th style="width:30%;border:0px ;"> <input type="text"name="NEXTOFKINPHONEONE"  id="NEXTOFKINPHONEONE" value="<?php  echo $NEXTOFKINPHONEONE; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
                  
                <th style="width:20%;border:0px ;"> Personal phone.2 </th>  
                <th style="width:30%;border:0px ;"> <input type="text" name="NEXTOFKINPHONETWO"  id="NEXTOFKINPHONETWO" value="<?php  echo $NEXTOFKINPHONETWO; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>   
              </tr>
			  </table>   
              
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
				<th style="width:20%;border:0px ;"> Physical Address</th>  
                <th style="width:30%;border:0px ;"> <input type="text"name="NEXTOFKINPHYSICALADDRESS"  id="NEXTOFKINPHYSICALADDRESS" 
                value="<?php  echo $NEXTOFKINPHYSICALADDRESS; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
                  
                <th style="width:20%;border:0px ;"> Postal Address </th>  
                <th style="width:30%;border:0px ;"> <input type="text" name="NEXTOFKINPOSTALADDRESS"  id="NEXTOFKINPOSTALADDRESS" value="<?php  echo $NEXTOFKINPOSTALADDRESS; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>   
              </tr>
			  </table>   
               
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
				<th style="width:20%;border:0px ;"> Relationship with next of kin</th>  
                <th style="width:80%;border:0px ;"> <input type="text"name="NEXTOFKINRELATIONSHIP"  id="NEXTOFKINRELATIONSHIP" value="<?php  echo $NEXTOFKINRELATIONSHIP; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>   
              </tr>
			  </table>  
                </div>
              
              <br>
               <div class="col-sm-12">
                <p style="text-align:left; font-size:11px;">CONTACT OF ALTERNATE NEXT OF KIN</p>
               
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
				<th style="width:20%;border:0px ;"> First Name </th>  
                <th style="width:30%;border:0px ;"> <input type="text"name="ALTNEXTOFKINFIRSTNAME"  id="ALTNEXTOFKINFIRSTNAME" value="<?php echo $ALTNEXTOFKINFIRSTNAME; ?>" 
                class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>
                  
                  <th style="width:20%;border:0px ;"> Surname </th>  
                <th style="width:30%;border:0px ;"> <input type="text" name="ALTNEXTOFKINSURNAME"  id="ALTNEXTOFKINSURNAME" value="<?php echo $nameofuser; ?>" 
                 class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>   
                
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
				<th style="width:20%;border:0px ;"> Personal phone.1</th>  
                <th style="width:30%;border:0px ;"> <input type="text"name="ALTNEXTOFKINPHONEONE"  id="ALTNEXTOFKINPHONEONE" value="<?php echo $ALTNEXTOFKINPHONEONE; ?>" 
                class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
                  
                <th style="width:20%;border:0px ;"> Personal phone.2 </th>  
                <th style="width:30%;border:0px ;"> <input type="text" name="ALTNEXTOFKINPHONETWO"  id="ALTNEXTOFKINPHONETWO" value="<?php echo $ALTNEXTOFKINPHONETWO; ?>" 
                class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>   
              </tr>
			  </table>   
              
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
				<th style="width:20%;border:0px ;"> Physical Address</th>  
                <th style="width:30%;border:0px ;"> <input type="text"name="ALTNEXTOFKINPHYSICALADDRESS"  id="ALTNEXTOFKINPHYSICALADDRESS" 
                value="<?php echo $ALTNEXTOFKINPHYSICALADDRESS; ?>" 
                  class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
                  
                <th style="width:20%;border:0px ;"> Postal Address </th>  
                <th style="width:30%;border:0px ;"> <input type="text" name="ALTNEXTOFKINPOSTALADDRESS"  id="ALTNEXTOFKINPOSTALADDRESS" 
                value="<?php echo $ALTNEXTOFKINPOSTALADDRESS; ?>" 
                 class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>   
              </tr>
			  </table>  
              
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
				<th style="width:20%;border:0px ;"> Relationship with next of kin</th>  
                <th style="width:80%;border:0px ;"> <input type="text"name="ALTNEXTOFKINRELATIONSHIP"  id="ALTNEXTOFKINRELATIONSHIP" 
                value="<?php echo $ALTNEXTOFKINRELATIONSHIP; ?>" 
                 class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>   
              </tr>
			  </table> 
              <br>
              <P>I, <B style="font-size:11px;"> <?php echo $nameofuser; ?></B>, 
			  <b style="font-size:12px;" >do hereby declare that the above information is true and correct</b></P>
              
              <input type="radio"name="SUBMISSIONLEVEL"  id="SUBMISSIONLEVEL" value="Pending" checked />
              <label>Disagree</label>
              <input type="radio"name="SUBMISSIONLEVEL"  id="SUBMISSIONLEVEL" value="Completed" />
              <label>Agree (please check this radio to confirm)</label>
               
              
              
            </div>
            <!-- /.tab-content -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      <!-- START PROGRESS BARS -->
                      
                      
                    </div>
                  </div>
              
              </div>
            </div>
            <!-- /.box-body -->
           
                  
              
                   <center>
                   <input type="submit" name="update" value="Update">  </center>
       
              </form> 
              </div>         
              
              
       <div class="col-sm-1">
       
       </div>
       
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
<script src="../dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS -->  
</body>
</html>   