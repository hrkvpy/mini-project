<?php
session_start();
include("connection.php");

?>
<form action="" method="post">
email: <input type="email" name="email" value=""/><br><br>
password:<input type="text" name="password" value=""/><br><br>
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
		$_SESSION['user_name'] = $user;
		header('location:index.php');
	}
	else{
		echo "login failed";
	}
}


?>







		  
		 