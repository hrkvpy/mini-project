
<?php
session_start();

include("connection.php");
$userprofile = $_SESSION['user_name'];
if($userprofile==true){
	
}
else{
	header('location:login.php');
}
$quer = "SELECT * FROM USERS WHERE u_email='$userprofile' ";
$data = mysqli_query($conn,$quer);
$result = mysqli_fetch_assoc($data);


?>



<!DOCTYPE html>
<html lang="en" class="no-js">
  
<!-- Mirrored from lmpixels.com/demo/breezycv/dark/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2020 16:24:12 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>BreezyCV - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/modernizr.custom.js"></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="img/main_photo.jpg" alt="Alex Smith">
              </div>
              <div class="header-titles">
                <?php echo "<h2>".$result['f_name']."</h2>";
                 echo "<h4>".$result['u_type']."</h4>"; ?>
              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="http://localhost:8080/1/user.php#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="http://localhost:8080/1/user.php#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">Fitness Test</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim" style="display:none">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim" style="display:none">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <li>
                <a href="#blog" class="nav-anim" style="display:none">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>
              <li>
                <a href="http://localhost:8080/1/user.php#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact Us</span>
                </a>
              </li>
			  
            </ul>
				
            <div class="social-links">
              <ul>
                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>

            <div class="header-buttons">
              <a href="logout.php" target="_self" class="btn btn-primary">LOGOUT</a>
            </div>

            <div class="copyrights">Designed by Hrishikesh Rathod</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
             <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Fitness <span>Test</span></h2>
                </div>

                <div class="section-content">
					
                  <br><br>
				   <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2>Thank you </h2><br>
						  <p style="font-size:35px">You will be informed via sms</p>
                         <a href="#about-me"> <div class="owl-carousel text-rotation">                                    
                            <div class="item">
                              <div class="sp-subtitle">Click here to apply again</div>
                            </div>
                           
                          </div>
						  </a>
                        </div>
                      </div>
                    </div>
				  
                </div>
              </section>
              <!-- End of Contact Subpage -->
            </div>
          </div>

      </div>
    </div>
	
	
	

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/animating.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src='../../../../../www.google.com/recaptcha/api.js'></script>

    <script src='js/perfect-scrollbar.min.js'></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/main.js"></script>
  </body>


</html>
