<?php
 session_start();
 session_regenerate_id();
  $_SESSION = array();
  session_destroy();
  //header('location:index.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>pcms</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		 
         <link rel="stylesheet" type="text/css" href="datatable/logs/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="datatable/logs/bootstrap/css/bootstrap-theme.min.css">
<style>
/* =====Login=====*/
body[role="login"] {
    font-family: 'Roboto', sans-serif;
	background:red ;
	background-size: cover;
	color: #EFEFEF
}
[role="login"] .container {
	margin-top: 100px
}
[role="login"] .btn-success {
	background: #76B831;
	border: 1px solid #679F2C;
	float: right
}
[role="login"] label {
	font-weight: normal;
	color: #FFF
}
.panel-heading {
	padding: 5px 15px;
}
.form-inline {
	margin: 5px
}
.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}
hr {
	border: 0;
	height: 1px;
	background:linear-gradient(to right, rgba(0, 0, 0, 0), #FFF, rgba(0, 0, 0, 0));
	margin: 5px
}
.profile-img {
	margin: 0 auto 10px;
	display: block;
}
.panel-default {
    opacity: .9;
    -webkit-box-shadow: 0px 7px 24px 1px rgba(0,0,0,0.45);
    -moz-box-shadow: 0px 7px 24px 1px rgba(0,0,0,0.45);
    box-shadow: 0px 7px 24px 1px rgba(0,0,0,0.45);
    background: transparent url('bg-white.png') repeat scroll 0% 0%;
}
</style>
    <body role="login">
<div class="container" style="margin-top:30px">
<div class="row">
  <br />
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="panel panel-default">

      <div class="panel-body">
        <br /><br /><br />
        <form role="form" action="php/process_users.php" method="POST" style="font-size:17px;";>
          <fieldset>
            <div class="row">
            
            <font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center>PCM </center></font>
             <font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center> Application	</center></font>
              <br /><hr>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="form-group">
                <label style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 10px #000; color:#fff;"> User account: </label>
                  <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                    <input class="form-control" style="height:30px;" placeholder="Username"  name="username" type="text" required="" autocomplete="off" 
                    autofocus>
                  </div>
                </div>
                <div class="form-group">
                 <label style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 10px #000; color:#fff;"> Password: </label>
                  <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                    <input class="form-control" style="height:30px;" placeholder="Password" type="password" name="pwd" required=""  
                    value=""
                    >
                  </div>
                </div>

              
                <div class="form-group">
                 <label>
                  <input type="checkbox">
                  Remember Me </label> <input type="submit" class="btn btn-success" value="Log In">
                </div>

              </div>
            </div>

          </fieldset>
        </form>
        </div>
        
        <script src="php/js/jquery.min.js"></script>  
        <script src="php/js/matrix.login.js"></script> 
    </body>

</html>
