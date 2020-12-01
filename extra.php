<?php
session_start();
error_reporting(0);
include("connection.php");
$userprofile = $_SESSION['user_name'];
if($userprofile==true){
	
}
else{
	header('location:login.php');
}
$query = "SELECT * FROM USERS WHERE u_email='$userprofile' ";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
echo $result['l_name'];

?>



<a href="logout.php"> Logout</a>