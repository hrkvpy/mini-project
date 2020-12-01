
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




<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>



<style>
body {
	color: #766787;
	
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 940px;
	background: #fff;
	padding: 20px 25px;
	border-radius: 30px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-wrapper .btn {
	float: right;
	color: #333;
	background-color: #fff;
	border-radius: 30px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-wrapper .btn:hover {
	color: #333;
	background: #f2f2f2;
}
.table-wrapper .btn.btn-primary {
	color: #fff;
	background: #03A9F4;
}
.table-wrapper .btn.btn-primary:hover {
	background: #03a3e7;
}
.table-title .btn {		
	font-size: 13px;
	border: none;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
.table-title {
	color: #fff;
	background: #444;		
	padding: 16px 25px;
	margin: -2px -5px 30px;
	border-radius: 30px 30px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.show-entries select.form-control {        
	width: 60px;
	margin: 0 5px;
}
.table-filter .filter-group {
	float: right;
	margin-left: 15px;
}
.table-filter input, .table-filter select {
	height: 34px;
	border-radius: 3px;
	border-color: #ddd;
	box-shadow: none;
}
.table-filter {
	padding: 5px 0 15px;
	border-bottom: 1px solid #e9e9e9;
	margin-bottom: 5px;
}
.table-filter .btn {
	height: 34px;
}
.table-filter label {
	font-weight: normal;
	margin-left: 10px;
}
.table-filter select, .table-filter input {
	display: inline-block;
	margin-left: 5px;
}
.table-filter input {
	width: 200px;
	display: inline-block;
}
.filter-group select.form-control {
	width: 110px;
}
.filter-icon {
	float: right;
	margin-top: 7px;
}
.filter-icon i {
	font-size: 18px;
	opacity: 0.7;
}	
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 80px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.view {        
	width: 30px;
	height: 30px;
	color: #2196F3;
	border: 2px solid;
	border-radius: 30px;
	text-align: center;
}
table.table td a.view i {
	font-size: 22px;
	margin: 2px 0 0 1px;
}   
table.table .avatar {
	border-radius: 50%;
	width:50px;
	height:*;
	
	vertical-align: middle;
	margin-right: 10px;
}
.status {
	font-size: 30px;
	margin: 2px 2px 0 0;
	display: inline-block;
	vertical-align: middle;
	line-height: 10px;
}
.text-success {
	color: #10c469;
}
.text-info {
	color: #62c9e8;
}
.text-warning {
	color: #FFC107;
}
.text-danger {
	color: #ff5b5b;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
</style>


<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
	
	

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
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">Customers</span>
                </a>
              </li>
              
              <li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">All Records</span>
                </a>
              </li>
              <li>
                <a href="#contact" class="nav-anim" >
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
			  <li style="display:none">
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">User Vehicle Test</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim" style="display:none">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
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
                          <h2>Welcome to the Inspector Dashboard</h2>
                          <div class="owl-carousel text-rotation">                                    
                            <div class="item">
                            
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
                        <h3 >Users</h3>
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
                      <div class="testimonials owl-carousel" id="user_grid"   >
                        <!-- Testimonial 1 -->
						
                  <?php
                       
					if($total2 != 0){
						$j = 0;	
						while($result2 = mysqli_fetch_array($data2)){
						
						$status = 'Offline';
						$col = '#444';
						
						if($result2['last_login']>$time){
							$status='Online';
							$col = '#04b4e0';
							$j++;
						}
					   
					
						echo 	'<a href="index.php?vuid='.$result2["u_id"].'#resume"><div class="testimonial" >
									<div class="img">
										<img src="img/testimonials/testimonial-1.jpg" alt="Alex Smith" >
									</div>
									<div class="text">
										<p> 	</p>
									</div>

									<div class="author-info " >
										<h4 class="author"  >'.$result2["f_name"].' '.$result2["l_name"].'</h4>
										<h5 class="company" style="color:'.$col.'">'.$status.'</h5>
										<div class="icon">
											<i class="fas fa-quote-right"></i>
										</div>
									</div>
								</div></a>';
							  
							 
					
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
				  
				  
				  function getTest()
					{
					  location.href='test.php';
					}
				 
				 
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
				  },3);
				  
				  
				  
				 
				  
				  
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

                  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-heart"></i>
                        <h4>Accounts</h4>
                        <span class="fun-fact-block-value"><?php echo $total2; ?></span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-clock"></i>
                        <h4>Active</h4>
                        <span class="fun-fact-block-value"><?php echo $j; ?></span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 ">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-star"></i>
                        <h4>Inactive</h4>
                        <span class="fun-fact-block-value"><?php echo $total2-$j; ?></span>
                        <span class="fun-fact-block-text"></span>
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
                  <h2>Vehicle <span>Test<span></h2>
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
                        <h3 >User</h3>
                      </div>
                    </div>
                  </div>
                  
				  
				  
				  <?php
				    
					$uid = $_GET['vuid'];
					
				    $query3 = "SELECT * FROM USERS WHERE u_id ='$uid'";
					$data3 = mysqli_query($conn,$query3);
					$total3 = mysqli_num_rows($data3);
					
					$time = time();
					$result3 = mysqli_fetch_array($data3);
				  ?>
				  
				  
					<div class="row" >
                    <div class="col-xs-12 col-sm-12" >
                      <div class="testimonials owl-carousel" id="user_grid"   >
                        <!-- Testimonial 1 -->
						
                  <?php
                       
					if($total3 != 0){
						$j = 0;	
						if($total3 != 0){
						
						$status = 'Offline';
						$col = '#444';
						
						if($result3['last_login']>$time){
							$status='Online';
							$col = '#04b4e0';
							$j++;
						}
						
						$today = new DateTime();
						$birthdate = new DateTime($result3['u_bday']);
						$interval = $today->diff($birthdate);
						
						
					   
					
						echo 	'<div class="testimonial" >
									<div class="img">
										<img src="img/testimonials/testimonial-1.jpg" alt="Alex Smith" >
									</div>
									
										
											<div class="col-xs-12" align="left" >
											  <div class="info-list" style="font-size:15px; color:white;">
												<ul>
												  <li>
													<span class="title">Age</span>
													<span class="value">'.$interval->format("%y").'</span>
												  </li>

												  <li>
													<span class="title">Sex</span>
													<span class="value">'.$result3["u_gender"].'</span>
												  </li>

												  <li>
													<span class="title">Address</span>
													<span class="value">'.$result3["u_address"].'</span>
												  </li>

												  <li>
													<span class="title">e-mail</span>
													<span class="value">'.$result3["u_email"].'</span>
												  </li>

												  <li>
													<span class="title">Phone</span>
													<span class="value">'.$result3["u_mobile"].'</span>
												  </li>
												</ul>
											  </div>
											</div>	
										
									

									<div class="author-info " >
										<h4 class="author"  >'.$result3["f_name"].' '.$result3["l_name"].'</h4>
										<h5 class="company" style="color:'.$col.'">'.$status.'</h5>
										<div class="icon">
											<i class="fas fa-quote-right"></i>
										</div>
									</div>
								</div>';
							  
							 
					
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
				  
				  
				  
				  <div class="white-space-50"></div>

                  <!-- Fun Facts -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Test <span>Application</span></h3>
                      </div>
                    </div>
                  </div>
				  
				  <?php
				  
					
					$query4 = "SELECT * FROM VEHICLES WHERE v_uid ='$uid'";
					
					$data4 = mysqli_query($conn,$query4);
					$total4 = mysqli_num_rows($data4);
					
					
					$result4 = mysqli_fetch_array($data4);
				  
				  ?>
				  
					<?php
					
					if($result4['v_no']){
					
					echo '
					 
                  <div class="row" style="display:flex; border: 2px solid #444; padding: 25px 25px 15px; border-radius:30px; margin-left:5px;flex-wrap:wrap;justify-content:space-around; ">
                    
					<div class="col-xs-12" align="left" >
											  <div class="info-list" style="font-size:15px; color:white;">
												<ul>
												  <li>
													<span class="title">Vehicle No.</span>
													<span class="value">'.$result4["v_no"].'</span>
												  </li>

												  <li>
													<span class="title">Manufacturer</span>
													<span class="value">'.$result4["v_manufacture"].'</span>
												  </li>

												  <li>
													<span class="title">Model</span>
													<span class="value">'.$result4["v_model"].'</span>
												  </li>

												  <li>
													<span class="title">Category</span>
													<span class="value">'.$result4["v_category"].'</span>
												  </li>

												  <li>
													<span class="title">Registration Year</span>
													<span class="value">'.$result4["v_registration_year"].'</span>
												  </li>
												  <li>
													<span class="title">Insurance Id</span>
													<span class="value">'.$result4["v_insurance"].'</span>
												  </li>
												  
												</ul>
											  </div>
					</div>
					
					<div class="col-xs-12">
											  <div class="info-list" style="font-size:15px; color:white;">
												<img src="'.$result4["v_pic"].'" width="100px" height="*"/>
                  </div>
				  <div class="info-list" style="font-size:15px; color:white;" >
												<ul style="display:flex;justify-content:space-around;">
												  <li ><br>
														<a href="uadelete.php?vid='.$result4['v_id'].'" class="view" title="Approve" data-toggle="tooltip" >
															
															
															
															<i class="material-icons" style="width: 30px;
																	height: 30px;
																	color: #2196F3;
																	border: 2px solid;
																	border-radius: 30px;
																	text-align: center;">&#xE5C8;</i>
														</a>
														
												  </li>
												  <li ><br>
														<a href="uadelete.php?vid='.$result4['v_id'].'" class="view" title="Reject" data-toggle="tooltip" >
															<i class="material-icons" style="width: 30px;
																	height: 30px;
																	color: red;
																	border: 2px solid;
																	border-radius: 30px;
																	text-align: center;">&#xE5C8;</i>
														</a>
														
												  </li>
												</ul>
											  </div>
					</div>
					
                  </div>';
				  
					}else{
						echo "<h1 style='color:#444';>NOt Applied Yet</h1>";
					}
				  
				  
				  ?>
                  <!-- End of Fun Facts -->
				  <div class="white-space-30"></div>
				  <div class="white-space-30"></div>
				  
				  <!-- Fun Facts -->
                  <div class="row" style="justify-content:space-around" >
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Test <span>Records</span></h3>
                      </div>
                    </div>
					
					<?php
						
						if($result3['t_status']){
							$color="";
							$color2="rgb(34, 34, 34)";
						}else{
							$color="rgb(34, 34, 34)";
							$color2="";
						}
						
						if($result3['t_result']==2){
							$color3="";
							$color4="rgb(34, 34, 34)";
						}elseif($result3['t_result']==1){
							$color3="rgb(34, 34, 34)";
							$color4="";
						}else{
							$color3="rgb(34, 34, 34)";
							$color4="rgb(34, 34, 34)";
							
						}
						
						
					
					
					echo '
					
					<div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle" id="test_pending" style="color:'.$color.'"></i>
                        <h4>Test Pending</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle" id="test_completed" style="color:'.$color2.'"></i>
                        <h4>Test Completed</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle" id="test_qualified" style="color:'.$color3 .'"></i>
                        <h4>Test Qualified</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle" id="test_disqualified" style="color:'.$color4 .'"></i>
                        <h4>Test Disqualified</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>';
					?>
					<div class="timeline timeline-second-style clearfix" style="font-size:16px;color:white;width:400px">
                       
					<form action="" method="post">
			
					   <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Tyre</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="1" value="1">
							  <span class="slider round"></span>
							</label>
                            <p></p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Steering</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="2" value="1">
							  <span class="slider round"></span>
							</label>
                            <p>	</p>
                          </div>
                        </div>
						
						
						<div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Engine</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="3" value="1">
							  <span class="slider round"></span>
							</label>
                            <p>( Noise 585 db )</p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Suspension</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="4" value="1">
							  <span class="slider round"></span>
							</label>
                            <p>	</p>
                          </div>
                        </div>
						
						
						<div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Horn</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="5" value="1">
							  <span class="slider round"></span>
							</label>
                            <p></p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Brake</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="6" value="1">
							  <span class="slider round"></span>
							</label>
                            <p>( Distance 30km/h < 13m )	</p>
                          </div>
                        </div>
						
						<div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Headlight</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="7" value="1">
							  <span class="slider round"></span>
							</label>
                            <p></p>
                          </div>
                        </div>
						
						<div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Wiper</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="8" value="1">
							  <span class="slider round"></span>
							</label>
                            <p></p>
                          </div>
                        </div>
						
						<div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Body</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="9" value="1">
							  <span class="slider round"></span>
							</label>
                            <p></p>
                          </div>
                        </div>
						
						
						<div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Electricals</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="10" value="1">
							  <span class="slider round"></span>
							</label>
                            <p></p>
                          </div>
                        </div>
						
						
						<div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">Saftey belts</h5>
                            
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <label class="switch" >
							  <input type="checkbox" name="11" value="1">
							  <span class="slider round"></span>
							</label>
                            <p></p>
                          </div>
                        </div>
						<br>
						<input type="submit" name="submit" value="Submit" style="margin-left:70px" />
						
						</form>
                      </div>
					
					
					
					
                  </div>

                  <div class="col-xs-12 col-sm-7">

                      <div class="white-space-30"></div>
				  
				  
				  
				  
				  
						
				  
				  
				  
				  
                      
                      
	
                      <div class="white-space-50"></div>
						
						
						<?php
					if(isset($_POST['submit'])){
						
					   	
						
					  $uid = $_GET['vuid'];
					
						$aa=$_POST['1'];
						$ba=$_POST['2'];
						$ca=$_POST['3'];
						$da=$_POST['4'];
						$ea=$_POST['5'];
						$fa=$_POST['6'];
						$ga=$_POST['7'];
						$ha=$_POST['8'];
						$ia=$_POST['9'];
						$ja=$_POST['10'];
						$ka=$_POST['11'];
						
					$query6 = "update users set t_status='0' where u_id='$uid'";
					$data6= mysqli_query($conn,$query6);
					
				
					$query5 = "INSERT INTO `hrishi`.`tests` (`tyre`,`v_uid`,`steering`,`engine`,`suspension`,`horn`,`brake`,`headlight`,`wiper`,`body`,`electricals`,`safety_belts`) VALUES ('$aa','$uid','$ba','$ca','$da','$ea','$fa','$ga','$ha','$ia','$ja','$ka')";
					$data5 = mysqli_query($conn,$query5);
					
			

		  
							  if($aa=='1' && $ba=='1' && $ca=='1' && $da=='1' && $ea=='1' && $fa=='1' && $ga=='1' && $ha=='1' && $ia=='1' && $ja=='1' && $ka=='1' ){
			                        $query8= "update users set t_result='2' where u_id='$uid'";
									$data8= mysqli_query($conn,$query8);
									 
							  }else{
									$query9 = "update users set t_result='1' where u_id='$uid'";
									$data9= mysqli_query($conn,$query9);  
							  }
					


					if($data5){
						
							echo '
							<script type="text/javascript">
							window.location.href = "jump.php?uuid='.$uid.'";
							</script>
							';	
					}else{echo "data not submitted";}
					}	
					?>
                      

                    </div>
                  <!-- End of Fun Facts -->
				  
				  
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
                        <td><a href="adelete.php?vid='.$resultd['v_id'].'" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE5C8;</i></a><br><a href="rdelete.php?vid='.$resultd['v_id'].'" class="view" title="View Details" style="color:red" data-toggle="tooltip"><i class="material-icons" style="color:red">&#xE5C8;</i></a></td>
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
