<?php
 session_start();
 session_regenerate_id();
  $_SESSION = array();
  session_destroy();
  //header('location:index.php');
?>

<!DOCTYPE html>
<html style="background:url(../assets/img/blurred.jpg);">
<head>
    <title>NTIHC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <!-- CSS Libs -->

    <link rel="stylesheet" type="text/css" href="../ahr/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../ahr/bootstrap/css/bootstrap-theme.min.css">
  <!--  <link rel="stylesheet" type="text/css" href="bootstrap4alpha5/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="bootstrap4alpha5/css/custom.css"> -->

<style>
/* =====Login=====*/
body[role="login"] {
    font-family: 'Roboto', sans-serif;
	background:url(../imgs/blurred.jpg) ;
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
    background: transparent url('../bg-white.png') repeat scroll 0% 0%;
}
</style>

<script type="text/javascript">
  //http://3rwebtech.com/bg-white.png
  //http://3rwebtech.com/logo2.png
</script>

</head>
   <body role="login">
<div class="container" style="margin-top:70px">
<div class="row">
  <br /><br />
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="panel panel-default">

      <div class="panel-body">
        <br /><br /><br />
        <form role="form" action="authentication.php" method="POST" style="font-size:17px;";>
          <fieldset>
            <div class="row">
              <div class="center-block"> <img class="profile-img" src="assets/img/ntihclog2.png" width="154" height="160"class="img-responsive" alt=""> </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="form-group">
                <label>User account:</label>
                  <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                    <input class="form-control" style="height:30px;" placeholder="Username"  name="username"
                     type="text" required="" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                 <label>Password:</label>
                  <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                    <input class="form-control" style="height:30px;" placeholder="Password" 
                    type="password" name="pwd" required=""  value="" autocomplete="off">
                  </div>
                </div>

              
                <div class="form-group">  <input type="submit" class="btn btn-success" value="Log In">
                </div>

              </div>
            </div>

          </fieldset>
        </form>

      </div>
    </div>
  </div>
</div>


   <div class="container" style="float:bottom;">
    <center>   <div class="col-md-12">NTIHC © 2016 Copyright.</div>  </center>

   </div>

            <!-- Javascript Libs -->
            <script type="text/javascript" src="../bootstrap/js/jquery-3.1.1.min.js"></script>
            <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
