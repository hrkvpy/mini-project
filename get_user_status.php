


<?php
session_start();
	

include("connection.php");

$userid = $_SESSION['UID'];
$time3 = time();
$data3 = mysqli_query($conn,"select * from users");
$html = '';

while($result3 = mysqli_fetch_array($data3)){
						
						$status3 = 'Offline';
						if($result3['last_login']>$time3){
							$status3='Online';
						}
					
						
						$html.= '<div class="testimonial" >
									<div class="img">
										<img src="img/testimonials/testimonial-1.jpg" alt="Alex Smith">
									</div>
									<div class="text">
										<p> 	</p>
									</div>

									<div class="author-info" >
										<h4 class="author" >'.$result3["f_name"].' '.$result3["l_name"].'</h4>
										<h5 class="company" id="user_grid">'.$status3.'</h5>
										<div class="icon">
											<i class="fas fa-quote-right"></i>
										</div>
									</div>
								</div> ';
							
					
} 
echo $html;

?>



