<?php
session_start();

include("connection.php");

$userid = $_SESSION['UID'];
$time = time()+10;
$data = mysqli_query($conn,"update users set last_login=$time where u_id=$userid");



?>