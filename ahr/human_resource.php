<!DOCTYPE html>
//<?php
//////session_start();
//session_regenerate_id();
//$nameofuser = '';
//$name       = "";
//$desc       = "";
//$dept       = "";
//if(isset($_SESSION['USERID'])){
//$nameofuser = $_SESSION['USERID'];
////$name = $_SESSION['NAME'];
//$desc = $_SESSION['DESC'];
//$dept = $_SESSION['DEPT'];
//}
//DESTROY THE SESSION IF SOMEONE IS NOT AUTHORISED
//else{
//  $_SESSION = array();
 // session_destroy();
 // header('location:../index.php');
 // exit();
//}
 
 ?>
  

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="stylesheet" href="datatable/bootstrap/css/bootstrap.css"> 
  <link rel="stylesheet" href="datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="datatable/css/buttons.dataTables.min.css">

  <script src="datatable/js/jquery-1.12.3.js"></script>
  <script src="datatable/js/jquery.dataTables.min.js"></script>
  <script src="datatable/js/bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.buttons.min.js"></script>
  <script src="datatable/js/buttons.flash.min.js"></script>
  <script src="datatable/js/jszip.min.js"></script>
  <script src="datatable/js/pdfmake.min.js"></script>
  <script src="datatable/js/vfs_fonts.js"></script>
  <script src="datatable/js/buttons.html5.min.js"></script>
  <script src="datatable/js/buttons.print.min.js"></script>
  <script src="../js/custom.js"></script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 11,
        dom: 'Bfrtip',
        buttons: [
		 
		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
 <script src="../assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
 <script src="../assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
 
<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}


	  {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 10px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
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
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 

</style> 

<!--  <meta http-equiv="refresh" content="10" > -->
</head>
<body style=""> 
<?php include('datatable/headerhr.php'); ?>
<center>
  <br /><br /><br /><br />
  
  <!--PAGE CONTENT --> 
             
                     <div class="row">
                <div class="col-lg-12">  
                <div class="col-lg-5"> 
               
  <div id="work" style="width:95%;">

    <table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
             <th>No</th>
              <th>NAME</th>
              <th>GENDER</th>
              <th>NATIONALITY</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>
              <th>NAME</th>
              <th>GENDER</th>
              <th>NATIONALITY</th> 
            </tr>
        </tfoot>
        <tbody>
<?php
require('php/confighr.php');
$sql = "SELECT * FROM humanresource ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td><input type="button" class="btn-success"  id="'.$row['id'].'" onclick="redirect5(this.id)" value="[]">'.$x.'</td>'.
       '<td>'.$row['FIRSTNAME'].'  '.$row['LASTNAME'].'</td>'.
       '<td>'.$row['GENDER'].'</td>'.
       '<td>'.$row['NATIONALITY'].'</td>'. 
   '</tr>';
$x=$x+1;

 }
 ?>
	  </tbody>
  </table> 
      </div> 
   
                </div>
                
                <div class="col-lg-7" style="text-align:left;">  
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">General</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Profile</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Messages</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Personal info</h4>
                           
                           
                           
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Profile Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
                
       <div class="col-lg-12" style="background-color:#f5f7f8;"> 
       <div class="col-lg-5"> 
       <div class="panel-body" style="background-color:;">
   <div class="col-lg-3"> 
                            <button class="btn btn-warning" data-toggle="modal"  data-target="#newReg" style="background-color: #f5f7f8;
height: 80px; border: #f5f7f8;color: #000;border-radius: 10px;margin-left: -74px;">
                             Add <p style="font-weight:bold; font-size:70px; color:green; margin-top:-20px;"> + </p>  
                            </button>
                               
                    </div>

   <div class="col-lg-3" >
   <div class="panel-body" style="height:auto; border-radius:11px;  border: 2px solid;">
    <p style="text-align:center;">xxxx</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">

       00
</div></div>

   <div class="col-lg-3" >
   <div class="panel-body" style="height:auto;  border-radius:11px; border: 2px solid;">
    <p style="text-align:center;">xxxx</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
       00
   </p>
   </div></div>

   <div class="col-lg-3" style="margin-left: -8px;">
   <div class="panel-body" style="height:auto; border-radius:11px; border: 2px solid;">
   <p style="text-align:center;">xxxx</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
   00
   </p>
   </div></div>
   </div>
   </fieldset>    </div>  
   
   <div class="col-lg-7" style="height:100px; background-color:#f5f7f8;">    
      
   </div>
   
     <div class="col-lg-12">
                        <div class="modal fade" id="newReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: 966px; height:auto;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4"> Add employee</h4>
                                        </div>
                                        <div class="modal-body" style="text-align:left;height: 600px; background-color: #f5f7f8;">
                                        
                                       <form action="human_resourceprocess.php" method="POST">
<div class="col-lg-12"> 
<div class="row">
<div class="col-lg-4"> 
                 <div class="form-group">
                    <label class="control-label col-lg-5">First name </label>
                    <div class="col-lg-7">
                        <input type="text" onKeyUp="dome()" name="FIRSTNAME"  id="FIRSTNAME" required="required" class="form-control" style="text-transform:uppercase;">
                    </div>
                </div>
                <p></p>
                <!-- /.form-group -->
                  <div class="form-group">
                    <label class="control-label col-lg-5">Last name </label>
                    <div class="col-lg-7">
                        <input type="text" onKeyUp="dome()" name="FIRSTNAME"  id="FIRSTNAME" required="required" class="form-control" style="text-transform:uppercase;">
                    </div>
                </div>
                <p></p>
                <!-- /.form-group --> 
                 <div class="form-group">  
                    <label class="control-label col-lg-5">Other name </label>
                    <div class="col-lg-7">
                        <input type="text" onKeyUp="dome()" name="OTRHERNAME"  id="OTRHERNAME" class="form-control" style="text-transform:uppercase;">
                    </div>
                </div>
                <p></p>
                <!-- /.form-group --> 
                <div class="form-group">
                    <label class="control-label col-lg-5">Old PF number</label>
                    <div class="col-lg-7">
                        <input type="text" onKeyUp="dome()" name="OLDPFNUMBER"  id="OLDPFNUMBER" class="form-control" style="text-transform:uppercase;">
                    </div>
                </div>
                <p></p>
                <!-- /.form-group -->  
                <div class="form-group"> 
    <label class="control-label col-lg-5">Gender</label>
    <div class="col-lg-7">  
       <input type="radio" name="GENDER" id="MALE" value="MALE" checked>
        <label for="MALE">Male</label>
		<input name="GENDER" type="radio" id="FEMALE" value="FEMALE">
		<label for="FEMALE">Female</label> 
    </div>
    </div>
    <p></p>
    <!-- /.form-group -->  
<!-- /.form-group --> 
                <div class="form-group">
                    <label class="control-label col-lg-5">Birth date</label>
                    <div class="col-lg-7">
                        <input type="date"  name="BIRTHDATE"  id="datepicker" placeholder="dd/ mm/ yyyy" class="form-control">
                    </div>
                </div>
                <p></p> 
                <!-- /.form-group --> 
                 <!-- /.form-group --> 
                <div class="form-group">
    <label class="control-label col-lg-5">Religion</label>
    <div class="col-lg-7">
        <select class="form-control" id="RELIGION" name="RELIGION" >
            <option value="_1"> </option>
                                <option>CATHOLIC</option>
                                <option>MOSLEM</option>
                                <option>PROTESTANT</option>
								<option>ADVENTIST</option>
                                <option>BORN AGAIN</option> 
								<option>OTHERS</option>
            </select>
    </div>
    </div>
    <!-- /.form-group -->  
     
                <div class="form-group">
                    <label class="control-label col-lg-5">Tribe</label>
                    <div class="col-lg-7">
                        <input type="text"  name="TRIBE"  id="TRIBE" class="form-control" style="text-transform:uppercase;">
                    </div>
                </div>
                <p></p>
                <!-- /.form-group --> 
                <div class="form-group">
    <label class="control-label col-lg-5">Nationality</label>
    <div class="col-lg-7">
        <select class="form-control" id="NATIONALITY" name="NATIONALITY" style="text-transform:uppercase;"> 
<option value="UGANDA">UGANDA</option>  
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
</select>  
    </div>
    </div>
    <!-- /.form-group --> 
                
                 <div class="form-group">
    <label class="control-label col-lg-5">Marital status</label>
    <div class="col-lg-7">
        <select class="form-control" id="MARITALSTATUS" name="MARITALSTATUS" >
            <option value="_1"> </option>
                                <option>MARRIED</option>
                                 <option>SINGLE</option>
                                <option>SEPARATED</option>
								<option>WIDOWED</option>
                                <option>DIVORCED</option>
								<option>NO RESPONSE</option>
            </select>
    </div>
    </div>
    <!-- /.form-group --> 
     <div class="form-group">
                    <label class="control-label col-lg-5">Next of kin</label>
                    <div class="col-lg-7">
                        <input type="text"  name="NEXTOFKIN"  id="NEXTOFKIN" required="required" class="form-control" style="text-transform:uppercase;">
                    </div>
                </div>
                <br>
                <!-- /.form-group -->
    
    <div class="form-group">
                    <label class="control-label col-lg-5">Relationship</label>
                    <div class="col-lg-7"> 
                       <select class="form-control" id="RELATIONSHIP" name="RELATIONSHIP" >  
                       <option value="-1">Select</option> 
								<option>WIFE</option>
								<option>HUSBAND</option>
                                <option>MOTHER</option>
								<option>FATHER</option>
                                <option>"BROTHER</option>
                                <option>SISTER</option>
                                <option>SON</option>
								<option>DAUGHTER</option>
                                <option>"OTHERS</option>
                                <option>AUNT</option>
                                <option>"UNCLE</option>
                                 	</select>  
                    </div>
                </div>
                <p>
                <!-- /.form-group -->
    <!-- /.form-group --> 
     <div class="form-group">
                    <label class="control-label col-lg-5">Phone contact</label>
                    <div class="col-lg-7">
                        <input type="text"  name="NEXTOFKINCONTACT"  id="NEXTOFKINCONTACT" required="required" class="form-control">
                    </div>
                </div>
                <p></p>
                <!-- /.form-group -->
                </div>
                
                <div class="col-lg-2">
                <fieldset class="row" style="height:244px;">
            <legend>image</legend>  
            <!-- /.form-group -->  
                 <div class="form-group">
                    <label class="control-label col-lg-5"></label> 
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" id="PASSPORT"style="width: 180px;height:177px;"></div>
                            <div>
             <span class=""><span class="fileupload-new"> </span><span class="fileupload-exists"></span><input type="file" style="margin-top: -18px;margin-left: 0px;width: 180px;"/></span>
                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload" style="margin-left: 161px;
margin-top: -41px; height:20px;">x</a>  
      </fieldset>
            
            
            
            
            
            
            
            
            
            
                       
                                    </div> </div> </div> </div>
                                       
                                    </form>
                                        </div></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> </div></div>
                   
      
    </body>
  </html>
