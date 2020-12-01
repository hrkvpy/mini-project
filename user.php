
<?php
session_start();
error_reporting(0);
include("connection.php");
$userid = $_SESSION['UID'];
if($userid==true){
	
}
else{
	header('location:login.php');
}
$time = time();
$quer = "SELECT * FROM USERS WHERE u_id='$userid' ";
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
	
	
	<style>
	
	[type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #04b4e0;
  border: none;
  border-radius: 5px;
  line-height: 1;
  color: #fff;
  cursor: pointer;
  display: inline-block;
	font-family: 'Rubik', sans-serif;
	font-size: inherit;
  font-weight: 500;
  margin-bottom: 1rem;
  outline: none;
  padding: 1rem 50px;
  position: relative;
  transition: all 0.3s;
  vertical-align: middle;
  
 
  
  
}


	</style>

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
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">Fitness Test</span>
                </a>
              </li>
			  <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Test Certificate</span>
                </a>
              </li>
			  <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact Us</span>
                </a>
              </li>
              <li>
                <a href="#resume"  style="display:none">
                  
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
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <?php echo "<h2>Welcome ".$result['f_name']."</h2>"; ?>
                         <a href="#about-me"> <div class="owl-carousel text-rotation">                                    
                            <div class="item">
                              <div class="sp-subtitle">Click here to apply for fitness test</div>
                            </div>
                            
                            <div class="item">
                              <div class="sp-subtitle">Click here to schedule fitness test</div>
                            </div>
                          </div>
						  </a>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2>Fitness <span>Test</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  
				 
				
				<br>
				 <div class="block-title">
                        <h3>Please fill <span> the form</span></h3>
                      </div>
				
					<form action="" method="post" enctype="multipart/form-data">

					<input type="text" name="v_1" placeholder="vehical number"  required="required"  /><br><br>
					<input type="text" name="v_2" placeholder="manufacturer name"  /><br><br>
					<input type="text" name="v_6" placeholder="status"/><br><br>
					<input type="text" name="v_3" placeholder="model name"  /><br><br>
					<input type="text" name="v_4" placeholder="category"  /><br><br>
					<input type="text" name="v_5" placeholder="mileage"  /><br><br>		
					<input type="text" name="v_7" placeholder="registration year"/><br><br>
					<input type="text" name="v_8" placeholder="insurance id" required="required"/><br><br>
					<input type="file" name="uploadfile" value="" id="file" required="required"/>
					<label for="file" class="btn-2">UPLOAD DOCUMENTS</label><br><br>
					
					
					<input  type="submit"  name="submit"  value="Submit"/>
					</form>
				
				
					<?php
					if (isset($_POST['submit'])) {
					$v1 =  $_POST['v_1'];
					$v2 =  $_POST['v_2'];
					$v3 =  $_POST['v_3'];
					$v4 =  $_POST['v_4'];
					$v5 =  $_POST['v_5'];
					$v6 =  $_POST['v_6'];
					$v7 =  $_POST['v_7'];
					$v8 =  $_POST['v_8'];
					$filename=$_FILES["uploadfile"]["name"];
					$tempname=$_FILES["uploadfile"]["tmp_name"];
					$folder = "docs/".$filename;
					move_uploaded_file($tempname,$folder);
					
					$v9 = "SELECT * FROM USERS WHERE u_id='$userid'";
					$vdata = mysqli_query($conn,$v9);
					$v10 = mysqli_fetch_array($vdata);
					$v11 = $v10['f_name'];
					$v12 = $v10['u_id'];
					$query2 = "INSERT INTO `hrishi`.`vehicles` (`v_no`, `v_manufacture`, `v_status`, `v_model`, `v_category`, `v_mileage`, `v_registration_year`, `v_insurance`, `v_pic`, `v_custo`, `v_uid`) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6', '$v7', '$v8', '$folder', '$v11', '$v12')";
					$data2 = mysqli_query($conn,$query2);

					if($data2){
						
						unset($_POST['submit']);
						echo '<script type="text/javascript">
										 window.location.href = "#resume";
										 if ( window.history.replaceState ) {
									window.history.replaceState( null, null, window.location.href );
																			}
										 </script>'
										 ;
								
						
							
					}
					}
					
					?>

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <section data-id="portfolio" class="animated-section">
                <div class="page-title">
                  <h2>Dashboard</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <?php 
						  
							$query7 = "SELECT * FROM TESTS WHERE v_uid='$userid'";
							$data7 = mysqli_query($conn,$query7);
							$result7 = mysqli_fetch_array($data7);
							
							
							$quer8 = "SELECT * FROM USERS WHERE u_id='$userid' ";
							$data8 = mysqli_query($conn,$quer8);
							$result8 = mysqli_fetch_assoc($data8);
						  
							if($result8['t_result']==1){
								
								 echo "<h2 style='color:red'>Test Disqualified!</h2><br><h4>Failed Areas:</h4><br>";
								 
								 foreach($result7 as $x => $x_value) {
									  if(!$x_value){
				                          	echo "<h5>".$x."</h5>";					  
										  
									  }
									  
									}
								
							}elseif($result8['t_result']==2){
								  echo "<h2 style='color:green'>Test qualified!</h2>";
							}
							else{
								echo "<h2>Desigion Pending</h2>";
							}
						  

							
						  
						  
						  
						  
						  ?>
                        
                        </div>
                      </div>
                  </div>
                </div>
              </section>
				
				
				 <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>Contact</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>Pune</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>+91-815-832-2000</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4><a href="https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="67060b021f27021f060a170b024904080a">[email&#160;protected]</a></h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>Kirti Gupta</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      
                      <div class="block-title">
                        <h3>How Can I <span>Help You?</span></h3>
                      </div>

                      <form id="contact_form" class="contact-form" action="https://lmpixels.com/demo/breezycv/dark/1/contact_form/contact_form.php" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Full Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                <label>Email Address</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                                <label>Subject</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <label>Message</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-theme="dark"></div>
      
                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                    <!-- End of Contact Form -->
                  </div>

                </div>
              </section>
				<!-- Resume Subpage -->
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
              <!-- End of Resume Subpage -->
				
              <!-- Portfolio Subpage -->
              
              <!-- End of Blog Subpage -->

             
              <!-- End of Contact Subpage -->
            </div>
          </div>

      </div>
    </div>
	
	<script>
	
	function updateUserStatus(){
					  jQuery.ajax({
						  url:'update_user_status.php',
						  success:function(){
							  
						  }
					  });
				  }
				  
	setInterval(function(){
					  updateUserStatus();
				  },10);
	
	</script>
	

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
