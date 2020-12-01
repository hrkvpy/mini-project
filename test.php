
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
$query = "SELECT * FROM USERS WHERE u_id='$userid' ";
$data = mysqli_query($conn,$query);
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
	
	
	

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



	
	

    <script src="js/modernizr.custom.js"></script>
	
	
	<style>
	
	
	
	
	
	
	
	</style>
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
              <li style="display:none">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li class="active">
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">Customers</span>
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
            <div class=""><i class="lnr lnr-chevron-right"></i></div>
            <div class=""><i class="lnr lnr-chevron-left"></i></div>
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
                          <h2>Alex Smith</h2>
                          <div class="owl-carousel text-rotation">                                    
                            <div class="item">
                              <div class="sp-subtitle">Web Designer</div>
                            </div>
                            
                            <div class="item">
                              <div class="sp-subtitle">Frontend-developer</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2>ALL <span>Customers<span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  
                  <!-- End of Personal Information -->

                  

                  <!-- Services -->
                  
                  <!-- End of Services -->

                  <div class="white-space-30"></div>
					
					<!-- Testimonials -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Users</h3>
                      </div>
                    </div>
                  </div>
                  
				  
				  
				  <?php
				  
				    $query2 = "SELECT * FROM USERS";
					$data2 = mysqli_query($conn,$query2);
					$total2 = mysqli_num_rows($data2);
					$i = $total2;
					$time = time();
					
				  ?>
				  
				  
					<div class="row" >
                    <div class="col-xs-12 col-sm-12" >
                      <div class="testimonials owl-carousel" id="user_grid"  >
                        <!-- Testimonial 1 -->
						
                  <?php
                       
					if($total2 != 0){
							
						while($result2 = mysqli_fetch_array($data2)){
						
						//$status = 'Offline';
						//$col = '#444';
						
						//if($result2['last_login']>$time){
							//$status='Online';
							//$col = '#04b4e0';
							//$j++;
						//}
					
					
						echo 	'<div class="testimonial" >
									<div class="img">
										<img src="img/testimonials/testimonial-1.jpg" alt="Alex Smith">
									</div>
									<div class="text">
										<p> 	</p>
									</div>

									<div class="author-info " >
										<h4 class="author" >'.$result2["f_name"].' '.$result2["l_name"].'</h4>
										<h5 class="company" style="color:'.$col.'">'.$status.'</h5>
										<div class="icon">
											<i class="fas fa-quote-right"></i>
										</div>
									</div>
								</div> ';
							
					
						} 
						
					}else{
						echo "no records";
					}
					?>	
						
                        
						
						
						<!-- End of Testimonial 1 -->

                        <!-- Testimonial 2 -->
                       
                        <!-- End of Testimonial 2 -->

                        <!-- Testimonial 3 -->
                       
                        <!-- End of Testimonial 3 -->
                      </div>
                    </div>
                  </div>
				  
                  <!-- End of Testimonials -->

                  <script>
				  
				  function updateUserStatus(){
					  jQuery.ajax({
						  url:'update_user_status.php',
						  success:function(){

						  }
					  });
				  }
				  
				  function getUserStatus(){
					  jQuery.ajax({
						  url:'get_user_status.php',
						  success:function(result){
							  jQuery('#user_grid').html(result);
						  }
					  });
				  }
				  
				 
				  
				  setInterval(function(){
					  updateUserStatus();
				  },10);
				  
				  
				 
				  
				  
				  </script>

                  <!-- Clients -->
                 
                  <!-- End of Clients -->

                 

                  <!-- Pricing -->
                  
                  <!-- End of Pricing -->

                  <div class="white-space-50"></div>

                  <!-- Fun Facts -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>User <span>Status</span></h3>
                      </div>
                    </div>
                  </div>
					
                   <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Education</h3>
                      </div>
                      
                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2008</h5>
                            <span class="item-company">University of Studies</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Frontend Development</h4>
                            <p>Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis ante.</p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2007</h5>
                            <span class="item-company">University of Studies</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Graphic Design</h4>
                            <p>Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>
                          </div>
                        </div>
                      </div>

                      <div class="white-space-50"></div>

                      <div class="block-title">
                        <h3>Experience</h3>
                      </div>

                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2016 - Current</h5>
                            <span class="item-company">Google</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Lead Ui/Ux Designer</h4>
                            <p>Praesent dignissim sollicitudin justo, sed elementum quam lacinia quis. Phasellus eleifend tristique posuere. Sed vitae dui nec magna.</p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2013 - 2016</h5>
                            <span class="item-company">Adobe</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Senior Ui/Ux Designer</h4>
                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla tristique, ornare felis id, congue libero. Nam volutpat euismod quam.</p>
                          </div>
                        </div>
                        
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2011 - 2013</h5>
                            <span class="item-company">Google</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Junior Ui/Ux Designer</h4>
                            <p>Duis mollis nunc quis quam viverra venenatis. Nulla nulla arcu, congue vitae nunc ac, sodales ultricies diam. Nullam justo leo, tincidunt sit amet.</p>
                          </div>
                        </div>
                      </div>

                    </div>
                  <!-- End of Fun Facts -->

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Resume</h2>
                </div>

                <div class="section-content">

                 
                  
                </div>
              </section>
              <!-- End of Resume Subpage -->
			  
			  
			  <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Resume</h2>
                </div>

                <div class="section-content">

                 
                  
                </div>
              </section>
              <!-- End of Resume Subpage -->
			  
			  

              <!-- Portfolio Subpage -->
              <section data-id="portfolio" class="animated-section">
                <div class="page-title">
                  <h2>Portfolio</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              <!-- Blog Subpage -->
              <section data-id="blog" class="animated-section">
                <div class="page-title">
                  <h2>All Records</h2>
                </div>

                <div class="section-content container-xl " >
                  
                    
                      
                        

    
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Test Applications</h2>
                    </div>
                    <div class="col-sm-8">						
                        <a href="#blog" class="btn btn-primary"><i class="material-icons">&#xE863;</i> <span>Refresh List</span></a>
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>
                    </div>
                </div>
            </div>
			
			<?php
			
				$queryd = "SELECT * FROM VEHICLES";
				
				$datad = mysqli_query($conn,$queryd);
				
				$totald = mysqli_num_rows($datad);
				

				if($totald != 0){
			?>

			<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>Customer</th>
                        <th>Manufacturer</th>
                        <th>Status</th>	
						<th>Model</th>											
                        <th>Category</th>
                        <th>Registration Year</th>
						 <th>Insurance Id</th>						
                        <th>Documents</th>
                        <th>Action</th>
                    </tr>
                </thead>

			<?php
					while($resultd = mysqli_fetch_array($datad)){
						
						echo '<tbody>
                    <tr>
							
                        <td><a href="#"><img src="img/main_photo.jpg" class="avatar" alt="Avatar">'.$resultd['v_custo'].'</a></td>
                        <td>'.$resultd['v_manufacture'].'</td>
                        <td><span class="status text-success">&bull;</span> '.$resultd['v_status'].'</td>
						<td>'.$resultd['v_model'].'</td>                        
                        <td>'.$resultd['v_category'].'</td>
						<td>'.$resultd['v_registration_year'].'</td>
						<td>'.$resultd['v_insurance'].'</td>
						<td><img src="'.$resultd['v_pic'].'"/></td>
                        <td><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE5C8;</i></a><br><a href="delete.php?vid=$resultd[v_id]" class="view" title="View Details" style="color:red" data-toggle="tooltip"><i class="material-icons" style="color:red">&#xE5C8;</i></a></td>
                    </tr>
                    
                </tbody>';
						
					} 
					
				}else{
					echo "no records";
				}
							
			?>
            
           
                
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b><?php echo $totald; ?></b> out of <b><?php echo $totald; ?></b> entries</div>
                <ul class="pagination" style="display:flex">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">6</a></li>
                    <li class="page-item"><a href="#" class="page-link">7</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
          

								
                        
                      
                    
                  
                </div>


              </section>
              <!-- End of Blog Subpage -->

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
                        <h4>San Francisco</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>415-832-2000</h4>
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
                        <h4>Freelance Available</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      <div id="map" class="map"></div>
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
