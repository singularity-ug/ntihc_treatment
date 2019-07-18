 <?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM newaccount"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['Accountnumber'] . "</option>";   }
  }
$connect->close();
?>

<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>NTIHC | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="assets/admin_bootstrap/css/bootstrap.css" />

    <link href="assets/admin_css/main.css" rel="stylesheet">
    <link href="assets/admin_css/font-style.css" rel="stylesheet">
    <link href="assets/admin_css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src=" assets/js/jquery.js"></script>    
    <script type="text/javascript" src=" assets/admin_bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src=" assets/js/lineandbars.js"></script>
    
	<script type="text/javascript" src=" assets/js/dash-charts.js"></script>
	<script type="text/javascript" src=" assets/js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src=" assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src=" assets/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src=" js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src=" js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 130px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>  
 
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php" style="margin-left: 237px; color: #fffaf9; font-size: 22px;">
           NAGURU TEENAGE INFORMATION AND HEALTH CENTRE</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <img src="assets/img/ntihclog2.png" width="40" height="50" style="margin-left: 204px; margin-top: -11px;">
              <li class="active"><a href="admin_dashboard.php"><i class="icon-home icon-white"></i> System dashboard</a></li>  
              <li><a href="#"><i class="icon-th icon-white"></i> Staff contacts</a></li>
              <li><a href="../php/logut.php"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container" style="height:1130px;">
  
	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<hr>
                <h1>Search Contract </h1> 
                <h1>(Status) </h1> 
				<div class="thumbnail" style="font-size:34px; font-weight:bold;">  
                  </p>
                   <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button" style=" margin-left: 3px;height: 31px;">
                                                                                              
                                            </span>                                        </div>
                                  </form>
                  
                 
                   
				</div><!-- /thumbnail -->  
        </div></div>
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
                    <hr>  
		     <h1>Search Contractor</h1> 
              <h1>(Progress)</h1>
				<div class="thumbnail" style="font-size:34px; font-weight:bold;"> 
                </p>
                   <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button" style=" margin-left: 3px;height: 31px;">
                                                                                              
                                            </span>                                        </div>
                                  </form>
                
                
				</div><!-- /thumbnail -->  
        </div></div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	        	 <hr>  
		  		   <h1>Search Project</h1>  
                   <h1>(Info)</h1>  
                <div class="thumbnail" style="font-size:34px; font-weight:bold;"> 
                  
                  </p>
                   <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button" style=" margin-left: 3px;height: 31px;">
                                                                                              
                                            </span>                                        </div>
                                  </form>    
                  
				</div><!-- /thumbnail -->  
			</div>
        </div> 
        
        <div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
      		<div class="dash-unit"> 
	      		<hr>  
		  		   <h1>Search Donors</h1>  
                   <h1>(Contributions and Funders)</h1>  
                    </p>
                   <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button" style=" margin-left: 3px;height: 31px;">
                                                                                              
                                            </span>                                        </div>
                                  </form>
                    <div class="clockcenter">
			      		<digiclock> 
                        
                        
                        </digiclock>
		      		</div>
			</div>
 
        
	  <!-- THIRD ROW OF BLOCKS -->      
      		<div class="dash-unit" style="width:1140px; margin-left:-877px;"> 
      			<div class="text" style="font-size:14px;">
      			<h2 class="demoHeaders">Projects and Contracts Management</h2>
<div id="accordion">
	<h3> Add-ins </h3>
	<div>
      
   <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:290px; margin-left:-46px; height:300px; "> 
         
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px;"/> 
	      		<hr>  
<form method="post" action="#" style="margin-left: -24px; width:345px;">

<h1>Project / contract identification</h1> 
                    <br>
       
   <table class='table table-bordered' style="margin-left: 33px;">
<td><h1>Activity name</h1></td>
</tr>
<td><textarea id="wysihtml5" name="Activityname" placeholder="" class="form-control" rows="2"></textarea> 
  </td>
</tr>

<tr>
<td> 
<div class="input-group">
                <span class="input-group-addon" style="width: 137px;background-color:#DDDDDD;">Activity type</span>
                <select class="form-control" id="Activitytype" input name="Activitytype" required="required" style="height:28px; width: 200px;"/>
                <option value="Contract"> Contract</option>
                                   <option>Project</option>  
                                   </select> 
              </div>        
</td>
</tr>

<td> 
 <div class="input-group">
                <span class="input-group-addon" style="width: 137px;background-color:#DDDDDD;">Provider name</span>
                 </div>
                 <input type="numeric" input name="Provider name"  id="Provider name" required="required" placeholder="contractor / funder name"class="form-control" style="height:28px;"/>
              </div> 
</tr> 
<tr>  

<td> 
 <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Source of funding</span>
                 </div>
                 <input type="numeric" input name="Sourceoffunding"  id="Sourceoffunding" required="required" placeholder="" class="form-control" style="height:28px;"/>
              </div> 
   
</td>
</tr>

</table> 	 
        </div></div> 
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px; margin-left:95px;"/>  
                    <hr> 
           <h1>Activity type identification</h1>  
              <h1>(performance)</h1>
                </p>
                <div class="input-group">  
                 <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">From</span>
                 <input type="date"  name="fromdate"id="datepicker" value="<?php echo date('d-m-y'); ?>" class="form-control" style="height:28px;width: 234px;"/> 
              </div>  
              <br>  
              
              <div class="input-group">  
                 <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">To</span>
                 <input type="date"  name="todate"id="datepicker" value="<?php echo date('d-m-y'); ?>" class="form-control" style="height:28px;width: 234px;"/> 
              </div>  
              <br>
              
              <div class="input-group"> 
              <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Period</span> 
          <input type="numeric" input name="maximumperiod"  id="maximumperiod" required="required" placeholder="Maximum authorised period"class="form-control" style="height:28px;width: 230px;"/>
              </div> 
               <br>
              
                <div class="input-group">
                 <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Country </span>
                <select class="form-control" id="Country" input name="Country" required="required" placeholder="Country of performance"style="height:28px; width: 234px;"/>
<option>(of performance)</option>                
<option value="Uganda">Uganda</option>  
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
              <br>
               
                <div class="input-group">  
                 <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Effective date</span>
               <input type="date"  name="effectivedate"id="datepicker" value="<?php echo date('d-m-y'); ?>" class="form-control" style="height:28px;width: 234px;"/> 
              </div>  
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Activity value</span>
                 <input type="numeric" input name="activityvalue"  id="Activityvalue" required="required" placeholder="Current" class="form-control" style="height:28px;width: 234px;"/>
              </div>  
              <br>
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Transaction type</span>
                 <select class="form-control" id="Transactiontype" input name="Transactiontype" required="required" style="height:28px; width: 227px;"/>
                <option value="_1"> </option>
                                <option>Full value</option> 
								<option>Installments</option>  
                 </select> 
              </div>   
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 130px;background-color:#DDDDDD;">Activity number</span>
                 <input type="numeric" input name="activitynumber"  id="activitynumber" required="required" disabled="disabled" class="form-control" style="height:28px;width: 227px;"/>
              </div>   
					</div>
				</div> 
           <!-- close messanger -->
           
            <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px; margin-left: 212px;"/>  
                <hr> 
                  <h1>Fill this side for only</h1> 
                   <h1>(Contract) as an activity type  </h1> 
                    <br>
              <div class="input-group"> 
                <textarea id="wysihtml5" name="Activityname" placeholder="Purpose of the activity type" class="form-control" rows="4"cols="45"></textarea> 
              </div>  
              <br> 
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">HCA:Name</span>
               <input type="numeric" input name="HCAname"  id="HCAname" placeholder="Head of Contracting Activity (HCA)" class="form-control" style="height:28px;width: 235px;"/>
              </div>  
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">HCA : Title</span>
                 <input type="numeric" input name="HCAtitle"  id="HCAtitle" placeholder="Head of Contracting Activity (HCA)" class="form-control" style="height:28px;width: 235px;"/>
              </div>
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Sign: date</span>
                <input type="date"  name="HCAsigndate"id="datepicker" value="<?php echo date('d-m-y'); ?>"  class="form-control" style="height:28px;width: 235px;width: 235px;"/>
              </div>
                 <br> 
                    
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">COR name</span>
                 <input type="numeric" input name="COname"  id="COname" placeholder="Signed in presence of (COR)" class="form-control" style="height:28px;width: 235px;"/>
                 </div>
              
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">COR: Title</span>
                 <input type="numeric" input name="COtitle"  id="COtitle" placeholder="Contracting officer representative(COR)" class="form-control" style="height:28px;width: 235px;"/>
                 </div>
                 
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Sign: date</span>
                 <input type="date"  name="COsigndate"id="datepicker" value="<?php echo date('d-m-y'); ?>"  class="form-control" style="height:28px;width: 235px;"/>
                 </div>  
               <br>
</form>  
              
				</div></div>
             </div>  
       <!-- DONUT CHART BLOCK -->  
             
	<h3>Scope of the work and key Contract Management Team Members</h3>
	<div> 
     <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:290px; margin-left:-46px; height:300px; "> 
         
      		<div class="dash-unit" style="height: 434px; margin-top: -13px; width:365px;"/> 
	      		<hr>  
<form method="post" action="#" style="margin-left: -24px; width:345px;">

<h1>Scope of Work</h1> 
                    <br>
       
   <table class='table table-bordered' style="margin-left: 33px;">
<td> 
<div class="input-group">
                <span class="input-group-addon" style="width: 63px;background-color:#DDDDDD;">Type</span>
<textarea id="wysihtml5" name="Activityname" placeholder="Type of work being performed" class="form-control" rows="7" cols="55"></textarea>  </td>
</tr>
<td>
<div class="input-group">
                <span class="input-group-addon" style="width: 50px;background-color:#DDDDDD;">Goals</span>
<textarea id="wysihtml5" name="Activityname" placeholder="The goals of the contract" class="form-control" rows="7"cols="55"></textarea>  
  </td>
</tr>  

</table> 	 
        </div></div> 
      <!-- DONUT CHART BLOCK -->
    
    
    
    
   <!-- USER PROFILE BLOCK -->  
      		<div class="dash-unit" style=" height: 434px;  margin-top: -13px;   width: 1131px;   background-color: #fff;"/> 
	      		<hr> 
    <script>

  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<select name="costdescription" id="p_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:310px; background-color:#fff" >'+             		                      	
                                         '<option value="-1"> </option>'+
                        '<option> ..</option>'+
						 
						'</select>'; 
 
     var select  =  '<select name="Financial year" required="required"  id="c_'+rowCount+'"'+
                    'style= "margin-left: 0px;margin-top: 5px;height:20px; width:143px; background-color:#fff;" >'+
             		    '<option value="-1"> </option>'+  
'<option>..</option>'+
 
                    '</select>'; 
					 
     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+select+' </td>'+
               '<td>'+s1+'</td>';

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

  function deleteRow12(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="p_"+x;
          table.rows[x].cells[2].childNodes[0].id="c_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}


  </script>
  
<div class="container" style="width:440px;"> 
  <p><input type="button" onClick="addRow12('mytable')" value="Add key contract mgt team members  " class="btn btn-success">
     <input type="button" onClick="deleteRow12('mytable')" value="Remove" class="btn btn-danger">
     <input type="hidden" id="mytable_rows" value="0">
  </p>
  <table class="table table-striped" id="mytable" style="width: 418px; color:#000000;">
    <thead>
      <tr>
        <th>*</th>
        <th>..</th>
        <th>..</th> 
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
  </div>  
</div> 
                
     </p>              
    </div>
	<h3>Financial details and, key performances metrics for determining contractor progress  
</h3>
	<div>
    Accordion tested successfully
      
     </p>              
    </div>
	<h3>Key Contract Performance Risk Areas (Risk/Vulnerabilities , Consequences, Mitigating Actions, Responsible
Individual)</h3>
	<div>
    Accordion tested successfully  
      
      </p>              
    </div>
	<h3>..</h3>
	<div>
    Accordion tested successfully   
      
     </p>              
    </div>
	<h3>....</h3>
	<div>
    Accordion tested successfully  
      
  </p>              
    </div>
	<h3>......</h3>
	<div>
     Accordion tested successfully
  </p>   
    </div>
</div>

	          </div>
      		</div>
      	</div>
      </div><!-- /row -->
      
	  <!-- FOURTH ROW OF BLOCKS -->     
	<div class="row"> 

				</div>
			</div>

		</div><!--/row -->
     
      
      
	</div> <!-- /container -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12"> 
      			<p>Naguru Teenage Information and Health Centre - Admin dashboard - Copyright 2016</p> 
                <p><img src="assets/img/ntihclog2.png" width="50" height="50"  style="margin-left: -671px;margin-top: -37px;">
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
    
    
            <link href="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src="assets/lib/jquery/jquery.js"></script>
<script src="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
		 
          
</body></html>