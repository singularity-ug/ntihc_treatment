 <?php session_start(); 
$user  = "";
if(isset($_SESSION['user'])){
	$user = 'welcome : '.$_SESSION['user'];
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="../ntihc/assets/css/indexcss/bootstrap.css">
        <link rel="stylesheet" href="../ntihc/assets/css/indexcss/bootstrap-responsive.css">
        <link rel="stylesheet" href="../ntihc/assets/css/indexcss/custom-styles.css">
        <link rel="stylesheet" href="../ntihc/assets/css/indexcss/font-awesome.css">
        <link rel="stylesheet" href="../ntihc/assets/css/indexcss/component.css">
        <link rel="stylesheet" href="../ntihc/assets/css/indexcss/font-awesome-ie7.css">
 
        <script src="../ntihc/assets/js/indexjs/modernizr.custom.js"></script>
        <script src="../ntihc/assets/js/indexjs/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        
        <div class="wrapper-blue">
            <div class="site-header">
                <div class="logo">
                    <h1><span>NAGURU TEENAGE INFORMATION AND HEALTH CENTRE</span></h1>
                </div>
                <div class="menu-bar">
                    <div class="navbar">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <i class="fw-icon-th-list"></i>
                                </a>
                                <div class="nav-collapse collapse">
                                    <ul class="nav">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#services">Services</a></li>
                                        <li><a href="#work">work</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div><!--/.nav-collapse -->
                        </div>
                    </div>
                <div class="container">
                    <div class="ruler"></div>
                </div>
                <div class="container">
                <div class="menu">
                    <div class="navbar">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <i class="fw-icon-th-list"></i> NAVIGATION
                                </a>
                                <div class="nav-collapse collapse">
                                    <ul class="nav">
                                        <li class="active"><a href="../ntihc/CustomLoginFormStyling/Staff login"></a></li>
                                        <li class="active"><a href="../ntihc/dashboard.php">Home</a></li>
                                        <li><a href="../ntihc/admin/index.php">Staff login</a></li>
                                        <li><a href="#services"></a></li>
                                        <li><a href="#work"></a></li>
                                        <li><a href="#contact"></a></li>
                                       </ul> 
                                    </ul>
                        </div>
                    </div>
                    </div>
                    <div class="container">
                        <div class="banner">
                            <div id="myCarousel" class="carousel slide">
                
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="http://localhost/IMMS/img/ntihclog2.png" width="280" height="350" alt="">
                                    <div class="carousel-caption">
                                      <h1>N.T.I.H.C</h1><br>
                                    <h2>A fully-formed information and health centre and an organisation with a wider programme on adolescent sexual and reproductive health and rights</h2>  
                                    </div>
                                  </div>
                                  <div class="item">
                                      <img src="http://localhost/IMMS/img/ntihclog2.png" width="280" height="350" alt="">
                                    <div class="carousel-caption">
                                       <h1>N.T.I.H.C</h1><br>
                                    <h2>A fully-formed information and health centre and an organisation with a wider programme on adolescent sexual and reproductive health and rights</h2>  
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img src="http://localhost/IMMS/img/ntihclog2.png" width="280" height="350" alt=""> 
                                    <div class="carousel-caption">
                                      <h1>N.T.I.H.C</h1><br>
                                    <h2>A fully-formed information and health centre and an organisation with a wider programme on adolescent sexual and reproductive health and rights</h2>    
                                    </div>
                                  </div>

                                </div>
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                </ol>
                            </div>
              
                        </div>
                    </div>
                </div>
            </div>
               
           
           
           
            
                        </div> 
                    </div>
                </div> 
                </div>
              
         <!-- /container -->

    <script src="../ntihc/assets/js/indexjs/jquery-1.9.1.js"></script> 
    <script src="../ntihc/assets/js/indexjs/bootstrap.js"></script>
    <script src="../ntihc/assets/js/indexjs/masonry.pkgd.min.js"></script>
    <script src="../ntihc/assets/js/indexjs/imagesloaded.js"></script>
    <script src="../ntihc/assets/js/indexjs/classie.js"></script>
    <script src="../ntihc/assets/js/indexjs/AnimOnScroll.js"></script>
    
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>


    </body>
</html>
