<?php
include('config.php');
$con = OpenCon();
echo "Connected Successfully";
CloseCon($con);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>RejuveNate : Home</title>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>
    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/green-theme.css" rel="stylesheet">   
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Photo Swipe Image Gallery -->     
    <link rel="stylesheet prefetch" href="css/photoswipe.css">
    <link rel="stylesheet prefetch" href="css/default-skin.css">   
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">  
    <link href="http://fonts.googleapis.com/css?family=Habibi" rel="stylesheet" type="text/css">   
    <link href="http://fonts.googleapis.com/css?family=Cinzel+Decorative:900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>  
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->
    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.php">STUTI TIWARI</a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <!--/.nav-collapse -->           
            <?php include("menu.php"); ?>
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper -->      
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/web.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>The <strong>Assignment created</strong> for Financepeer.</h2>
            <p><strong >By- Stuti Tiwari </strong>18BCE0950</p>
            
          </div>
        </div>
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->
    <!--=========== BEGIN Top Feature SECTION ================-->
    <?php 
    if(isset($_SESSION['log'])=="" or $_SESSION['log1']=="client")
    {
      ?>
        <section id="topFeature">
          <div class="row">
            <!-- Start Single Top Feature -->
            <div class="col-lg-4 col-md-4">
              <div class="row">
                <div class="single-top-feature">
                  <span class="fa fa-flask"></span>
                  <h3>Education Details</h3>
                 <p><b>B.Tech</b>- Computer Science and Engineering (<i>2018-22</i>)<p>
                 <p><b>CGPA</b> 8.78<p>
                </div>
              </div>
            </div>
            <!-- End Single Top Feature -->
            <!-- Start Single Top Feature -->
            <div class="col-lg-4 col-md-4">
              <div class="row">
                <div class="single-top-feature opening-hours">
                  <span class="fa fa-notebook-o"></span>
                  <h3>Skills</h3>
                  <ul class="opening-table">
                    <li>
                      <span>DSA</span>
                   <div> HTML</div>
                    </li>
                    <li>
                      <span>OOPS</span>
                      <div> CSS</div>
                    </li>
                    <li>
                      <span>DBMS</span>
                     <div>Software Engineering</div>
                    </li>
                    <li>
                      <span>OS</span>
                      <div>Javascript</div>
                    </li>
                    
                  </ul>              
                </div>
              </div>
            </div>
            <!-- End Single Top Feature -->
          
          </div>
        </section>
        <!--=========== END Top Feature SECTION ================-->
        <?php
    }
    ?>
    <!--=========== Start Footer SECTION ================-->
    <?php include('footer.php') ?>
    <!--=========== End Footer SECTION ================-->
    <!-- jQuery Library  -->
    <script src="js/jquery.js"></script>    
    <!-- Bootstrap default js -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>      
    <!-- counter -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Doctors hover effect -->
    <script src="js/snap.svg-min.js"></script>
    <script src="js/hovers.js"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>    
    <script src="js/photoswipe-gallery.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
  </body>
</html>