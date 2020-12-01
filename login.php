<?php
session_start();

error_reporting(0);
include("connection.php");

?>



<!DOCTYPE html>
<html lang="en" class="no-js">
  
<!-- Mirrored from lmpixels.com/demo/breezycv/dark/1/blog-post-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2020 16:25:02 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>BreezyCV - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio" />
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
                
              </div>
            </div>


				
            <div class="social-links">
               
            </div>

            <div class="header-buttons">
              <a href="login.php" target="_parent" action="active" class="btn btn-primary  ">SIGNIN</a>
            </div>
			
			<div class="header-buttons">
              <a href="register.php" target="_parent" class="btn btn-primary ">SIGNUP</a>
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

          <div class="content-area single-page-area">
            <div class="single-page-content">

              
                <div class="page-title">
                  <h2>SIGNIN</h2>
                </div>
				
				<br>
				 <div class="block-title">
                        <h3>Please enter <span> the values</span></h3>
                      </div>
				
					<form action="" method="post">

					<input type="text" name="email" placeholder="Email"  /><br><br>
					<input type="text" name="password" placeholder="Password"/><br><br>
					<input type="submit" name="submit" value="Login"/>
					</form>
					

						<?php
						if(isset($_POST['submit'])){
							$user = $_POST['email'];
							$pwd = $_POST['password'];
							$query = "SELECT * FROM USERS WHERE u_email='$user' && password='$pwd' ";
							$data = mysqli_query($conn,$query);
							$total = mysqli_num_rows($data);
							if($total==1){
								
								
								$query = "SELECT * FROM USERS WHERE u_email='$user' ";
								$data = mysqli_query($conn,$query);
								$result = mysqli_fetch_assoc($data);
								$_SESSION['UID'] = $result['u_id'];
								 if($result['u_type']== "Admin"){
								header('location:index.php');
								 }else{
								header('location:user.php');	 
								 }
							}
							else{
								echo "<br><div class='block-title'> <h3>the values <span> are incorrect</span></h3></div>";
									
									
							}
						}
						
						
						


						?>
				
				
				

            </div>
          </div>

      </div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
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

<!-- Mirrored from lmpixels.com/demo/breezycv/dark/1/blog-post-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2020 16:25:03 GMT -->
</html>
