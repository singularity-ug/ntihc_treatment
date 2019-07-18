<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="css/uniform.css" /> 
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body style="background: #eee;"> 

<!--Header-part-->
<div id="">
  <h1><a href="dashboard.html" style="font-size:12px;"> &nbsp;FTLMS</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" style="background: #eee;"> 
  <ul class="nav" style="background: #eee;"> 
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li> 
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-signal"></i> &nbsp;FTLM Dashboard</a>
  <ul>
    <li  class="submenu active"><a href="dashboard.php"><i class="icon icon-home"></i> <span>Fleet management menu</span></a> </li>
    
    <li><a href="dashboard.php"><i class="icon icon-signal"></i> <span>Fleet users dashboard</span></a> </li>
    
    <li><a href="error.php"><i class="icon icon-signal"></i> <span>Cordination tracker</span></a> </li>
    
      <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Fuel sub module</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error.php">My fuel requisitions</a></li>
        <li><a href="error.php">My fuel approvals</a></li>
        <li><a href="error.php">My fuel confirmations</a></li>
        <li><a href="error.php">My fuel issuance data</a></li>
        <li><a href="error.php">Fuel control | Administration</a></li>
      </ul>
    </li>
    
     <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Motor vehicle log books</span> </span></a>
      <ul> 
        <li><a href="error.php">My log book data</a></li>
        <li><a href="error.php">New log book requestion </a></li> 
      </ul>
    </li>
    
    
    <li><a href="error.php"><i class="icon icon-th"></i> <span>Fleet maintenance</span></a></li>
    
    <li><a href="error.php"><i class="icon icon-fullscreen"></i> <span>Accidents management</span></a></li>
    
     <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Insurance and compensation</span> </span></a>
      <ul> 
        <li><a href="error.php">Insurance</a></li>
        <li><a href="error.php">Compensation</a></li> 
      </ul>
    </li>
     
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>General fleet management</span> </span></a>
      <ul> 
        <li><a href="error.php">General information</a></li>
        <li><a href="error.php">Motorised equipments</a></li> 
      </ul>
    </li> 
    
     <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Verification and valuation</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error.php">Verify motorised equipments</a></li>
        <li><a href="error.php">Valuation of vehicles  </a></li> 
      </ul>
    </li>
    
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Drivers management</span> <span class="label label-important">0</span></a>
      <ul>
        <li><a href="error.php">Drivers demography</a></li>
        <li><a href="error.php">Contracts management</a></li>
        <li><a href="error.php">Appraisals</a></li>
        <li><a href="error.php">Driver interviews</a></li>
      </ul>
    </li>
    
    
     <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Reports module</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error.php">Under development</a></li> 
      </ul>
    </li>
    
     <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Quick data export</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error.php">Under development</a></li> 
      </ul>
    </li>
      
</div>

<div id="content" style="background: #fff;">
  <div id="content-header" style="margin-top: -21px;">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div> 
  </div>
  <div class="container-fluid"> 
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Form wizard &amp; validation</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post"  action="fuel_updateapproval.php" >
              <div id="form-wizard-1" class="step">
                
      <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Health unit</th>
				<th style="width:20%;border:0px;"> <input type="text" id="username" name="HEALTHUNIT"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Reg No. </th>
				<th style="width:20%;border:0px;"> <input type="text" id="REGNO" name="REGNO"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              <th style="width:33.33333333%;border:0px; font-weight:bold; text-align:center;font-weight:bold;">  <b>PREVIOUS ILLNESS</b>
              </tr>
			  </table>
 
                
                
                
              </div>
              <div id="form-wizard-2" class="step">
                <div class="control-group">
                  <label class="control-label">Email</label>
                  <div class="controls">
                    <input id="email" type="text" name="email" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">EULA</label>
                  <div class="controls">
                    <input id="eula" type="checkbox" name="eula" />
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" />
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.wizard.js"></script>
</body>
</html>
