<?php
error_reporting();
include("connection.php");

$query7 = "SELECT * FROM TESTS WHERE v_uid='135'";
$data7 = mysqli_query($conn,$query7);
$result7 = mysqli_fetch_array($data7);
$jump = 11;




	
  foreach($result7 as $x => $x_value) {
  
		  
		  if($x_value==null){
			  
			  echo  $x ;
			  echo "<br>";
		  }
}


	

?>

