<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMMS</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href="../ntihc/assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../ntihc/assets/css/main.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/animate.css/animate.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
    <style>
	table{border:2px solid white;}
	td,th,tr{border:2px solid white;}
	select{width:64%;margin-left: -5px;float: right;font-size: 11px; height:24px;border: -1px solid #ccc;border-radius: 9px;} 
	</style> 
   
    <link rel="stylesheet" href=" assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href=" assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">


                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                                </button>
                            <a href="" class="navbar-brand"><img src="" alt=""></a>                            </header>



                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a href="logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>      
                                        <span class="glyphicon glyphicon-comment"></span>                                    </a>                                </div>
                            </div>




                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="human_resource.php">Dashboard</a></li>
                                    <li><a href="">HUMAN RESOURCE MANAGEMENT</a></li> 
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Quick links<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">.</a></li>
                                            <li><a href="">.</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                  </nav>
                    <!-- /.navbar -->               <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class=""></i>                                                </button>
                                            </span>                                        </div>
                                  </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-dashboard"></i>&nbsp;
             NAGURU TEENAGE INFORMATION AND HEALTH CENTRE : (I.M.M.SYSTEM)          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                   
      <div id="content"  >
      
                    <div class="outer"/>
                    
                        <div class="inner bg-light lter"/>
                        
                            <div class="text-center" >
    <ul class="stats_box">
	<li> 
    
	    <div class="stat_text">
		<strong></strong>No. of employees 
		<span class="percent down"> <i class=""></i>
         <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
        </span>	    </div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong>............
		<span class="percent up"> <i class=""></i>
                               <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
</span></div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong> ...............
		<span class="percent">  
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='YES' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
        </span>	    </div>
	</li>
	<li> 
    
    	    <div class="stat_text">
		<strong></strong>..............
		<span class="percent">  
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='LABORDERCOMPLETED' ORDER BY NTIHCNO")) { 

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
        </span>	    </div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong> .................
		<span class="percent down"> <i class=""></i> 
         <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
         </span>	    </div>
	</li>
    </ul>
</div> 
<div class="text-center" >
  <div class="form-inline">
   <div class="form-group"> 
        </div>  
<div class="row">
    <div class="col-lg-129" style="margin-left: 6px;">
	<div class="box">
 
        
                        <div class="panel panel-default">  
                        <div class="panel-body" style="height: 550px;   background-color: #d70000; color:#000000;"> 
                        Fill this form after registration
                            <button class="btn btn-info" data-toggle="modal" data-target="#uiModal">
                            Click here to add bank details  
                            </button>
                             
                        </div>
                    </div>
                    </div> 
                    <div class="col-lg-12">
                        <div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width: 295px;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3">Add / Change employee bank </h4>
                                        </div>
                                        <div class="modal-body" style="height:510px; background:#FFCB00;">
                                        
                                        <form action="suppliers_process.php"method="POST">
                                     
                  <div class="col-lg-117" style="width: 155px;">
      
                    </p>
                  
                 <p> FINANCIAL DETAILS </p> 
                 </p>
                 <label>PF No.</label> 
    <input type="numeric" name="PFNO" id="PFNO" placeholder="Personal file number"  style= "margin-left: 2px; margin-top: -7px; width:260px; height:29px; background-color:#E8E8E8;"/>
      </p>
      
    <label>Account type</label> 
    
		       </p>  
       <label>Bank account title</label> 
      <input type="text" name="BANKACCOUNTTITLE" id="BANKACCOUNTTITLE" placeholder="Enter Bank account title"   style="margin-left: 2px; margin-top: -7px; width:260px; height:29px; background-color:#E8E8E8;"/>  
      </p>               
      <p> 
      <label>Bank acccount No.</label> 
     <input type="numeric" name="BANKACCOUNTNO" id="BANKACCOUNTNO" placeholder="Enter Bank acccount No."   style= "margin-left: 2px; margin-top: -7px; width:260px; height:29px; background-color:#E8E8E8;"/>  
       
        </p>               
      <p>
      <label>Bank name</label> 
      <input type="text" name="BANKNAME" id="BANKNAME" placeholder="Enter Bank name"   style= "margin-left: 2px; margin-top: -7px; width:260px; height:29px; background-color:#E8E8E8;"/>  
      </p>                 
      <p>
      <label>Bank branch</label> 
      <input type="text" name="BRANCH" id="BRANCH" placeholder="Enter Branch "   style= "margin-left: 2px; margin-top: -7px; width:260px; height:29px; background-color:#E8E8E8;"/>   
        </p>               
      <p> 
   <textarea name="NOTES" placeholder="Enter notes" id="autosize" style= "margin-left: 0px;margin-top: 5px;height:50px; width:260px;background-color:#E8E8E8;" class="form-control"></textarea>   
      <p>  
	<p>
     <label>Discontinue</label> 
		<input type="radio" name="DISCONTINUE" id="NO" value="NO" checked>
        <label for="NO">No</label>
		<input name="DISCONTINUED" type="radio" id="YES" value="YES">
		<label for="YES">YES</label>
      </p>      
	</p>
   </fieldset>
</div>
	   	<div class="clear"></div>
			<input class="submit" type="submit" value="Save and New &raquo;"/> 
             <input class="reset" type="reset" value="Clear &raquo;"/>     
               
			<div class="clear"></div>
        </form>
		</div>    
                               
                    </div>
                </div>
 
            </div> 

        </div>     
                 
</div>	
      </div>    
      </div>
</div>
	  
	  <div class="col-lg-128" style="margin-top: -583px;" >
	<div class="box">
	   <div class="body" style="height: 592px; width: 261%; background-color:#dddddd; margin-left: 5px;">
   	
        <div class="col-md-22">
                                            
         <h2 class="demoHeaders">Employee registration form</h2>
<div id="accordion">
	<h3>Step 1 of 8: Add personal info</h3>
	<div>
      <fieldset class="row11" style= "margin-left: 1px; margin-top: -9px; width:260px;"/> 
        
    <label>Employee name</label> 
  <input type="text" id="FIRSTNAME" placeholder="First name" required="required" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
       </P>
       <P>
       
        <input type="text" id="LASTNAME" placeholder="Last name" required="required" class="form-control chzn-select" style= "background-color:#EFEFEF;"/>
       </P>
       <P>
        <input type="text" id="OTHERNAME" placeholder="Other name"  required="required" class="form-control chzn-select" style= "background-color:#EFEFEF;"/>
       </P>
       <P>
      </fieldset> 
       <fieldset class="row12" style= "margin-left: 1px; margin-top: -1px; width:260px;"/>
       <label>Gender</label>  
       <input type="radio" name="GENDER" id="MALE" value="MALE" checked>
        <label for="MALE">Male</label>
		<input name="GENDER" type="radio" id="FEMALE" value="FEMALE">
		<label for="FEMALE">Female</label>
		 </p> 
        
        <label>Date of birth</label> 
        <input type="text" id="datepicker"class="form-control chzn-select">
        </p> 

  </P>
  </fieldset>   
  <fieldset class="row13" style= "margin-left: 276px; margin-top: -226px; width:260px; height:200px;"/>  
            <label>Religion</label>
        <input type="text" placeholder="Enter religion" name="RELIGION" id="RELIGION" required="required"class="form-control chzn-select" style= "background-color:#fff;"/>
        </p> 
            <label>Nationality</label>
        <select name="NATIONALITY" id="NATIONALITY" required="required" placeholder="Choose a Country" class="form-control chzn-select" tabindex="2" >
<option value="-1">UGANDA</option>  
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
     </P>
       <P> 
        <label>Marital status</label>
        <select name="MARITALSTATUS" id="MARITALSTATUS" required="required" class="form-control chzn-select" tabindex="2" >
  	<option value="-1">Select</option>
								<option>SINGLE</option>
								<option>MARRIED</option>
                                <option>SEPARATED</option>
								<option>WIDOWED</option>
                                <option>"DIVORCED</option>
							   			</select> 
       </P>
       <P> 
         
       </fieldset> 
       <fieldset class="row14" style= "margin-left: 554px; margin-top: -200px; width:260px; height:200px;"/> 
            
        <label>Next of kin</label> 
  <input type="text" id="NEXTOFKIN" placeholder="Next of kin name" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>                  
   <label>Relationship</label>
   <select name="RELATIONSHIP" id="RELATIONSHIP" required="required" class="form-control chzn-select" tabindex="2" >
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
                                 	</select> 
               </P>  
                <p>
                <label>Next of kin contact</label> 
  <input type="text" id="NEXTOFKINCONTACT" placeholder="Next of kin contact" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P> 
           </fieldset>         
  </p>              
    </div>
	<h3>Step 2 of 8: Add contacts, residential info and other details</h3>
	<div>
    <fieldset class="row11" style= "margin-left: 1px; margin-top: -9px; width:260px;"/> 
           <P>Contacts</P>
    <label>Mobile phone</label> 
  <input type="text" id="MOBILEPHONE" placeholder="Mobile number" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>
       <label>Home phone</label>
        <input type="text" id="HOMEPHONE" placeholder="Home contact" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>
         <label>Emergency number</label>
        <input type="text" id="EMERGENCYCONTACT" placeholder="Emergency no."  required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>
        <label>E-mail</label>
        <input type="text" id="EMAIL" placeholder="Enter e-mail"  required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>
        
     </fieldset>   
  <fieldset class="row13" style= "margin-left: 276px; margin-top: -263px; width:260px; height:250px;"/>
       <P>Residential info</P>
            <label>Current district</label>
       <input type="text" placeholder="Current district of residence" name="DISTRICT" id="DISTRICT" required="required"class="form-control chzn-select" style= "background-color:#fff;"/>
        </p> 
  </p>   
  
  <label>Parish</label>
      <input type="text" placeholder="Current parish of residence" name="PARISH" id="PARISH" required="required"class="form-control chzn-select" style= "background-color:#fff;"/>
        </p> 
  </p>   
  
  <label>County</label>
      <input type="text" placeholder="Current county of residence" name="COUNTY" id="COUNTY" required="required"class="form-control chzn-select" style= "background-color:#fff;"/>
        </p> 
  </p>   
   <label>Area of residence</label>
      <input type="text" placeholder="Current village of residence" name="AREAOFRESIDENCE" id="AREAOFRESIDENCE" required="required"class="form-control chzn-select" style= "background-color:#fff;"/>
        </p> 
  </p>   
      </fieldset> 
       <fieldset class="row14" style= "margin-left: 554px; margin-top: -225px; width:260px; height:240px;"/> 
           
        <label>National ID number</label> 
  <input type="text" id="NATIONALIDNO" placeholder="Enter national ID" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>                  
   <label>NSSF number</label>
   <input type="text" id="NSSFNO" placeholder="Enter nssf number" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
           </P>  
                <p>
                <label>Tin number</label> 
  <input type="text" id="TINNO" placeholder="Enter tin number" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P> 
       
        <label>Old PF number</label> 
  <input type="text" id="OLDPF_NO" placeholder="Enter Old Personal File number" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P> 
           </fieldset>
             
    </div>
	<h3>Step 3 of 8: Upload Passport photo, National ID,  Cv and, Driving permint </h3>
	<div>   
       <fieldset class="row16" style= "margin-left: -3px; margin-top:-9px; width:210px; height:10px;"/>
        <label>Passport photo</label> 
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" id="PASSPORT"style="width: 160px; height: 170px;"></div>
                            <div>
                  <span class="btn btn-file btn-success"><span class="fileupload-new"> </span><span class="fileupload-exists"></span><input type="file" /></span>
                  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                  </p>   
              
      </fieldset>
       <fieldset class="row17" style= "margin-left: 176px;; margin-top:-11px; width:210px; height:10px;"/>
        <label>National ID </label> 
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" id="PASSPORT"style="width: 300px; height: 170px;"></div>
                            <div>
                  <span class="btn btn-file btn-success"><span class="fileupload-new"> </span><span class="fileupload-exists"></span><input type="file" /></span>
                  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                  </p>   
   </fieldset>
       <fieldset class="row18" style= "margin-left: 490px;; margin-top:-12px; width:210px; height:10px;"/>   
        <label>Attach C.V</label> 
        <input type="file" id="CV_upload" name="file_attach[]" >
        </p> 
        <label>Driving permit </label> 
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" id="PASSPORT"style="width: 300px; height: 115px;"></div>
                            <div>
                  <span class="btn btn-file btn-success"><span class="fileupload-new"> </span><span class="fileupload-exists"></span><input type="file" /></span>
                  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a> 
      </p> 
   </fieldset> 
   </div>
	<h3>Step 4 of 8: Education / high school and under graduate diploma qualifications attained</h3>
	<div>
       <fieldset class="row120" style= "margin-left: -3px; margin-top: -9px; width:140px;"/> 
           <P>High school</P>
    <label>UCE results</label> 
  <input type="text" id="UCE_RESULT" placeholder="Aggregates" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>
       <label>Year attained</label>
        <input type="text" id="UCE_YEAR" placeholder="UCE Year" required="required" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>
         <label>UACE results</label>
        <input type="text" id="UACE_RESULT" placeholder="Aggregates" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P>
        <label>Year attained</label>
        <input type="text" id="UACE_YEAR" placeholder="UACE Year" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P>
       <P> 
     </fieldset>   
      <fieldset class="row121" style= "margin-left: 145px; margin-top: -263px; width:465px; height:250px;"/>
       <P>Vocational / under graduate diploma</P>
            <label>Vocational course (if any)</label>
   <input type="text" placeholder=" (1) vocational course name" name="FIRSTVOCATIONALCOURSE" id="FIRSTVOCATIONALCOURSE" class="form-control chzn-select" style= " background-color:#EEEEEE;"/>
 
        </p>     
        <label>2nd Vocational courses (if any)</label> 
      <input type="text" placeholder=" (2) vocational course name" name="SECONDVOCATIONALCOURSE" id="SECONDVOCATIONALCOURSE" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
         
        </p>  
   
   <label>Under graduate diploma (if any) </label>
      <input type="text" placeholder="Ist Under graduate diploma" name="FIRSTUNDERGRADUATEDIPLOMACOURSE" id="FIRSTUNDERGRADUATEDIPLOMACOURSE" class="form-control chzn-select" style= "background-color:#fff;"/>
        </p>  
      <label>2nd Under graduate diploma (if any) </label>
   <input type="text" placeholder="2nd Under graduate diploma" name="SECONDUNDERGRADUATEDIPLOMACOURSE" id="SECONDUNDERGRADUATEDIPLOMACOURSE" class="form-control chzn-select" style= "background-color:#fff;"/>
        </p>     
      
      </fieldset>  
      <fieldset class="row123" style= "margin-left: 619px; margin-top: -227px; width:135px; "/>
 
      <label> Class</label>
         <select name="FIRSTVOCATIONALCOURSERESULTS" id="FIRSTVOCATIONALCOURSERESULTS" required="required" class="form-control chzn-select" tabindex="2" style= "margin-top:3px; font-size:10px; background-color:#EEEEEE;"/> 
  	<option value="-1">Select</option> 
                                <option>FIRST CLASS</option>
								<option>SECOND UPPER</option>
                                <option>SECOND LOWER</option>
								<option>PASS</option>
                                        </select>
                                        </p>
                                  <label> class</label>
         <select name="SECONDVOCATIONALCOURSERESULTS" id="SECONDVOCATIONALCOURSERESULTS" class="form-control chzn-select" tabindex="2" style= "margin-top:9px; font-size:10px; background-color:#EEEEEE;"/> 
  	<option value="-1">Select</option> 
                                <option>FIRST CLASS</option>
								<option>SECOND UPPER</option>
                                <option>SECOND LOWER</option>
								<option>PASS</option>
                                        </select>
                                        </p>       
                                        
                                         <label> class</label>
         <select name="FIRSTUNDERGRADUATEDIPLOMARESULTS" id="FIRSTUNDERGRADUATEDIPLOMARESULTS" class="form-control chzn-select" tabindex="2" style= "margin-top: 10px; font-size:10px; background-color:#fff;"/> 
  	<option value="-1">Select</option> 
                                <option>FIRST CLASS</option>
								<option>SECOND UPPER</option>
                                <option>SECOND LOWER</option>
								<option>PASS</option>
                                        </select>
                                        </p>
                                         <label> class</label>
         <select name="SECONDUNDERGRADUATEDIPLOMARESULTS" id="SECONDUNDERGRADUATEDIPLOMARESULTS" class="form-control chzn-select" tabindex="2" style= " margin-top:12px; font-size:10px; background-color:#fff;"/> 
  	<option value="-1">Select</option> 
                                <option>FIRST CLASS</option>
								<option>SECOND UPPER</option>
                                <option>SECOND LOWER</option>
								<option>PASS</option>
                                        </select>
                                        </p> 
       </fieldset>  
      <fieldset class="row124" style= "margin-left: 764px; margin-top: -228px; width:80px; "/>
       <label> Year</label>
  <input type="numeric" placeholder="1st-vcyr" name="FIRSTVOCATIONALCOURSEYEAR" id="FIRSTVOCATIONALCOURSEYEAR" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
  </p>
   <label> Year</label>
  <input type="numeric" placeholder="2nd-vcyr" name="SECONDVOCATIONALCOURSEYEAR" id="SECONDVOCATIONALCOURSEYEAR" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
  </p>
   <label> Year</label>
    <input type="numeric" placeholder="1st-udyr" name="FIRSTUNDERGRADUATEDIPLOMAYEAR" id="FIRSTUNDERGRADUATEDIPLOMAYEAR" class="form-control chzn-select" style= "background-color:#fff;"/> 
    </p>
      <label> Year</label> 
      <input type="numeric" placeholder="2nd-udyr" name="SECONDUNDERGRADUATEDIPLOMAYEAR" id="SECONDUNDERGRADUATEDIPLOMAYEAR" class="form-control chzn-select" style= "background-color:#fff;"/> 
  </p> 
  </fieldset> 
   </div>
	<h3>Step 5 of 8: Education / under graduate degrees and post graduate qualifications attained</h3>
	<div>
       <fieldset class="row120" style= "margin-left: -3px; margin-top: -9px; width:140px;"/> 
       <P>Verify</P>
       <label>Degree</label> 
       <input type="checkbox" id="DEGREE" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P> 
       <label>Post graduate dip</label>
        <input type="checkbox" id="POSTGRADUATEDIPLOMA" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P> 
         <label>Masters degree</label>
        <input type="checkbox" id="MASTERS"  class="form-control chzn-select" style= "background-color:#fff;"/>
       </P> 
        <label>Phd</label>
        <input type="checkbox" id="PHD" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P> 
     </fieldset>   
      <fieldset class="row121" style= "margin-left: 145px; margin-top: -263px; width:465px; height:250px;"/>
       <P>Under graduate degrees /post graduate qualifications</P>
            <label>Under graduate degree course </label>
   <input type="text" placeholder=" Degree course name" name="FIRSTDEGREECOURSE" id="FIRSTDEGREECOURSE" class="form-control chzn-select" style= " background-color:#EEEEEE;"/>
 
        </p>     
        <label>Post graduate diploma course</label> 
      <input type="text" placeholder=" Enter post grad dip course name" name="POSTGRADUATEDIPLOMACOURSE" id="POSTGRADUATEDIPLOMACOURSE" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
         
        </p>  
   
   <label>Masters degree </label>
      <input type="text" placeholder="Masters degree course name" name="MASTERSDEGREECOURSE" id="MASTERSDEGREECOURSE" class="form-control chzn-select" style= "background-color:#fff;"/>
        </p>  
      <label>PHD (Include field of specialization) </label>
   <input type="text" placeholder="2nd Under graduate diploma" name="PHDCOURSE" id="PHDCOURSE" class="form-control chzn-select" style= "background-color:#fff;"/>
        </p>     
      
      </fieldset>  
      <fieldset class="row123" style= "margin-left: 619px; margin-top: -227px; width:135px; "/>
 
      <label> Class</label>
         <select name="FIRSTDEGREERESULTS" id="FIRSTDEGREERESULTS" required="required" class="form-control chzn-select" tabindex="2" style= "margin-top:3px; font-size:10px; background-color:#EEEEEE;"/> 
  	<option value="-1">Select</option> 
                                <option>FIRST CLASS</option>
								<option>SECOND UPPER</option>
                                <option>SECOND LOWER</option>
								<option>PASS</option>
                                        </select>
                                        </p>
                                  <label> class</label>
         <select name="POSTGRADUATEDIPLOMARESULTS" id="POSTGRADUATEDIPLOMARESULTS" class="form-control chzn-select" tabindex="2" style= "margin-top:9px; font-size:10px; background-color:#EEEEEE;"/> 
  	<option value="-1">Select</option> 
                                <option>FIRST CLASS</option>
								<option>SECOND UPPER</option>
                                <option>SECOND LOWER</option>
								<option>PASS</option>
                                        </select>
                                        </p>       
                                        
                                         <label> class</label>
         <select name="MASTERSDEGREERESULTS" id="MASTERSDEGREERESULTS" class="form-control chzn-select" tabindex="2" style= "margin-top: 10px; font-size:10px; background-color:#fff;"/> 
  	<option value="-1">Select</option> 
                                <option>FIRST CLASS</option>
								<option>SECOND UPPER</option>
                                <option>SECOND LOWER</option>
								<option>PASS</option>
                                        </select>
                                        </p>
                                         <label> class</label>
         <select name="PHDRESULTS" id="PHDRESULTS" class="form-control chzn-select" tabindex="2" style= " margin-top:12px; font-size:10px; background-color:#fff;"/> 
  	<option value="-1">Select</option> 
                                <option>FIRST CLASS</option>
								<option>SECOND UPPER</option>
                                <option>SECOND LOWER</option>
								<option>PASS</option>
                                        </select>
                                        </p> 
       </fieldset>  
      <fieldset class="row124" style= "margin-left: 764px; margin-top: -228px; width:80px; "/>
       <label> Year</label>
  <input type="numeric" placeholder="ud yr" name="FIRSTDEGREEEYEAR" id="FIRSTDEGREEYEAR" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
  </p>
   <label> Year</label>
  <input type="numeric" placeholder="pgd yr" name="POSTGRADUATEDEGREEYEAR" id="POSTGRADUATEDEGREEYEAR" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
  </p>
   <label> Year</label>
    <input type="numeric" placeholder="md yr" name="MASTERSDEGREEYEAR" id="MASTERSDEGREEYEAR" class="form-control chzn-select" style= "background-color:#fff;"/> 
    </p>
      <label> Year</label> 
      <input type="numeric" placeholder="phd yr" name="PHDYEAR" id=" PHDYEAR" class="form-control chzn-select" style= "background-color:#fff;"/> 
  </p> 
  
  
  </fieldset> 
   </div>
	<h3>Step 6 of 8: Professional certificates attained</h3>
	<div>
       <fieldset class="row120" style= "margin-left: -3px; margin-top: -9px; width:140px;"/> 
       <P></P>
       <label>Certificate 1</label> 
       <input type="checkbox" id="PROFESSIONALCERT1" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P> 
       <label>Certificate 2</label>
        <input type="checkbox" id="PROFESSIONALCERT2" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P> 
         <label>Certificate 3</label>
        <input type="checkbox" id="PROFESSIONALCERT3"  class="form-control chzn-select" style= "background-color:#fff;"/>
       </P> 
        <label>Certificate 4</label>
        <input type="checkbox" id="PROFESSIONALCERT4" class="form-control chzn-select" style= "background-color:#fff;"/>
       </P> 
     </fieldset>   
      <fieldset class="row123" style= "margin-left: 145px; margin-top: -263px; width:465px; height:250px;"/>
       <P>Add professional certificates attained in a descending order</P>
            <label>Latest professional certificate </label>
   <input type="text" placeholder=" Latest certificate attained" name="PROFESSIONALCERT_COURSE1" id="PROFESSIONALCERT_COURSE1" class="form-control chzn-select" style= " background-color:#EEEEEE;"/>
 
        </p>     
        <label>professional certificate 2</label> 
      <input type="text" placeholder=" Enter certificate 2" name="PROFESSIONALCERT_COURSE2" id="PROFESSIONALCERT_COURSE2" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
         
        </p>  
   
   <label>professional certificate 3 </label>
      <input type="text" placeholder="Enter certificate 3" name="PROFESSIONALCERT_COURSE3" id="PROFESSIONALCERT_COURSE3" class="form-control chzn-select" style= "background-color:#fff;"/>
        </p>  
      <label>professional certificate 4</label>
   <input type="text" placeholder="Enter certificate 4" name="PROFESSIONALCERT_COURSE4" id="PROFESSIONALCERT_COURSE4" class="form-control chzn-select" style= "background-color:#fff;"/>
        </p>     
      
      </fieldset>  
      <fieldset class="row123" style= "margin-left: 619px; margin-top: -227px; width:135px; "/>
 
      <label> Period</label>
      <input name="PERIODCERT1" id="PERIODCERT1" placeholder="like: January - july" class="form-control chzn-select" tabindex="2" style= "margin-top:3px;  background-color:#EEEEEE;"/>  
                                         
                                  <label> Period</label>
         <input name="PERIODCERT2" id="PERIODCERT2" placeholder="like: January - july" class="form-control chzn-select" tabindex="2" style= "margin-top:9px;  background-color:#EEEEEE;"/>     
                                        
                                         <label> Period</label>
         <input name="PERIODCERT3" id="PERIODCERT3" class="form-control chzn-select" tabindex="2" style= "margin-top: 10px;  background-color:#fff;"/>  
                                 
                                         <label> Period</label>
         <input name="PERIODCERT4" id="PERIODCERT4" class="form-control chzn-select" tabindex="2" style= " margin-top:12px;  background-color:#fff;"/> 
   
                                        </p> 
       </fieldset>  
      <fieldset class="row129" style= "margin-left: 764px; margin-top: -237px; width:80px; "/>
       <label> Year</label>
  <input type="numeric" name="YEAROFCERT1" id="YEAROFCERT1" placeholder="like: 2017" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
  </p>
   <label> Year</label>
  <input type="numeric" name="YEAROFCERT2" id="YEAROFCERT2" placeholder="like: 2016" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
  </p>
   <label> Year</label>
    <input type="numeric" placeholder="2015" name="YEAROFCERT3" id="YEAROFCERT3" class="form-control chzn-select" style= "background-color:#fff;"/> 
    </p>
      <label> Year</label> 
      <input type="numeric" placeholder="2015" name="YEAROFCERT4" id=" YEAROFCERT4" class="form-control chzn-select" style= "background-color:#fff;"/> 
  </p> 
  </fieldset>
  
     </div>
	<h3>Step 7 of 8: Employee's Parents and guardian info</h3>
	<div>
      <fieldset class="row120" style= "margin-left: -3px; margin-top: -9px; width:140px;"/> 
       
       <label>Mother</label>  
       </P>    
       <input type="checkbox" name="MOTHERPRESENCE" id="ALIVE" value="LATE">
        <label for="ALIVE">Alive</label>
		<input name="MOTHERPRESENCE" type="checkbox" id="ALIVE" value="LATE">
		<label for="LATE">late</label> 
		 </p> 
         <label>Father</label>  
       </P>
         <input type="checkbox" name="FATHERPRESENCE" id="ALIVE" value="LATE">
        <label for="ALIVE">Alive</label>
		<input name="FATHERPRESENCE" type="checkbox" id="ALIVE" value="LATE">
			<label for="LATE">late</label> 
		 </p>
         <label>Guardian 1</label>  
       </P>
        <input type="radio" name="GUARDIAN_1_PRESENCE" id="ALIVE" value="LATE" checked >
        <label for="ALIVE">Alive</label> 
		 </p>
         <label>Guardian 2</label>  
       </P>
         <input type="radio" name="GUARDIAN_2_PRESENCE" id="ALIVE" value="LATE" checked >
       <label for="ALIVE">Alive</label>
       
		 </p>
         
     </fieldset>   
      <fieldset class="row121" style= "margin-left: 145px; margin-top: -263px; width:365px; height:250px;"/>
       <P>Parents and guadian info</P>
            <label>Mother name </label>
   <input type="text" placeholder="Enter surname, first and other name witb spaces" name="MOTHERNAME" id="MOTHERNAME" class="form-control chzn-select" style= " background-color:#EEEEEE;"/>
 
        </p>     
        <label>Father name</label> 
      <input type="text" placeholder="Enter surname, first and other name witb spaces" name="FATHERNAME" id="FATHERNAME" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
         
        </p>  
   
   <label>Guardian 1</label>
      <input type="text" placeholder="Enter surname, first and other name witb spaces" name="GUARDIAN1" id="GUARDIAN1" class="form-control chzn-select" style= "background-color:#fff;"/>
        </p>  
      <label>Guardian 2 </label>
   <input type="text" placeholder="Enter surname, first and other name witb spaces" name="GUARDIAN2" id="GUARDIAN1" class="form-control chzn-select" style= "background-color:#fff;"/>
        </p>     
      
      </fieldset>  
      <fieldset class="row135" style= "margin-left: 519px; margin-top: -227px; width:158px; "/>
 
      <label> Relationship</label>
         <select name="MOTHER_RTNSHIP " id="MOTHER_RTNSHIP" required="required" class="form-control chzn-select" tabindex="2" style= "margin-top:3px; font-size:10px; background-color:#EEEEEE;"/> 
  	<option value="-1">BIOLOGICAL MOTHER</option>  
                                        </select>
                                        </p>
                                  <label> Relationship</label>
         <select name="FATHER_RTNSHIP" id="FATHER_RTNSHIP" class="form-control chzn-select" tabindex="2" style= "margin-top:9px; font-size:10px; background-color:#EEEEEE;"/> 
  	<option value="-1">BIOLOGICAL FATHER</option>  
                                        </select>
                                        </p>       
                                        
                                         <label> Relationship</label>
         <select name="MASTERSDEGREERESULTS" id="MASTERSDEGREERESULTS" class="form-control chzn-select" tabindex="2" style= "margin-top: 10px; font-size:10px; background-color:#fff;"/> 
  	<option value="-1">Select</option> 
                                 <option>GRAND MOTHER</option>
								<option>GRAND FATHER</option>
                                <option>UNCLE</option>
								<option>UNTIE</option>
                                <option>"NEPHEW</option>
                                <option>"OTHERS</option>
                                        </select>
                                        </p>
                                         <label> Relationship</label>
         <select name="PHDRESULTS" id="PHDRESULTS" class="form-control chzn-select" tabindex="2" style= " margin-top:12px; font-size:10px; background-color:#fff;"/> 
  	<option value="-1">Select</option> 
                                <option>GRAND MOTHER</option>
								<option>GRAND FATHER</option>
                                <option>UNCLE</option>
								<option>UNTIE</option>
                                <option>"NEPHEW</option>
                                <option>"OTHERS</option>
                                 	</select> 
                                        </select>
                                        </p> 
                 
            </fieldset>  
      <fieldset class="row136" style= "margin-left: 692px; margin-top: -230px; width:155px; "/>
 
      <label> Mother contact</label>
         <input name="MOTHER_CONTACT " id="MOTHER_CONTACT" type="alphanumeric" placeholder="Like: 0772000222" class="form-control chzn-select" tabindex="2" style= "margin-top:3px; font-size:10px; background-color:#EEEEEE;"/>   
                                  <label>Father contact</label>
         <input name="FATHER_CONTACT" id="FATHER_CONTACT" type="alphanumeric" class="form-control chzn-select" tabindex="2" style= "margin-top:9px; font-size:10px; background-color:#EEEEEE;"/> 
          
                                        
                                         <label> Guardian 1</label>
         <input name="GUARDIAN_1_CONTACT" id="GUARDIAN_1_CONTACT" type="alphanumeric" class="form-control chzn-select" tabindex="2" style= "margin-top: 10px; font-size:10px; background-color:#fff;"/> 
  
                                         <label>Guardian 2</label>
         <input name="GUARDIAN_2_CONTACT" id="GUARDIAN_2_CONTACT" type="alphanumeric" class="form-control chzn-select" tabindex="2" style= " margin-top:12px; font-size:10px; background-color:#fff;"/> 
               
                                        
             </fieldset>   
             
      </div>
	<h3>Step 8 of 8: Submit</h3>
	<div>    
        
       </p>
	<p>            
		<input type="submit" name="button" id="button" value="Save and new"/>
        </p>
        <input type="reset" name="button" id="button" value="Clear"/> 
</form>                
    </div>
</div>
              
                       
                       
                       
                       
                </div> 
 </div> 
</div>  
<span > ...</span></div>
</div> 
  <!-- /.outer -->
                </div>
                <!-- /#content -->
                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger" style="margin-left:-14px;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>
               .....................
               
               
                       
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                           ....................  
                           
                           
                           
                           
                                <li><span class="inlinesparkline pull-right"></span></li>
                                <li><span class="dynamicsparkline pull-right"></span></li>
                                <li><span class="dynamicbar pull-right"></span></li>
                                <li><span class="inlinebar pull-right"></span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                        <span>
                       .....................   
                       
                       
                       
                       
                       
                        </span>
                         </div> 
                            </div>
                        </div>   </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap --> 
            <!-- /#footer -->
            <!-- #helpModal -->

            <script src="../ntihc/assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="../ntihc/assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="../ntihc/assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="../ntihc/assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="../ntihc/assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="../ntihc/assets/js/app.js"></script>
            
       <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
       <script src="assets/js/formsInit.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src=" assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
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
			    <!-- END PAGE LEVEL SCRIPTS -->
        </body>
</html>
