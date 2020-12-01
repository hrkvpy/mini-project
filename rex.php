<?php

include("connection.php");

?>




<form action="" method="post">

					<input type="text" name="u_email" placeholder="Email"  /><br><br>
					<input type="text" name="f_name" placeholder="First name"  /><br><br>
					<input type="text" name="l_name" placeholder="Last name"  /><br><br>
					<input type="text" name="u_bday" placeholder="Birth date"  /><br><br>
					<input type="text" name="u_mobile" placeholder="Mobile number"  /><br><br>
					<input type="text" name="password" placeholder="Password"/><br><br>
					<input type="submit" name="submit"  value="Register"/>
					</form>
				
				
					<?php
					$eml = $_POST['u_email'];
					$fn =  $_POST['f_name'];
					$ln =  $_POST['l_name'];
					$bd =  $_POST['u_bday'];
					$mb =  $_POST['u_mobile'];
					$pwd = $_POST['password'];
					
					
					
					
				
					$query = "INSERT INTO `hrishi`.`vehicles` (`v_no`, `v_manufacture`, `v_status`, `v_1`, `v_2`, `v_3`) VALUES ('$eml', '$fn', '$ln', '$bd', '$mb', '$pwd')";
					$data = mysqli_query($conn,$query);

					if($data){
						
							echo "data inserted";
					}
					
					?>