<?php

include("connection.php");

$vid = $_GET['vid'];

$query = "DELETE FROM VEHICLES WHERE v_id='$vid'";
$data = mysqli_query($conn,$query);

if($data){
	
	echo "<font color='green'>Record Deleted From Table";
	
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/1/index.php?vuid=135#blog">
	<?php
	
}else{
	echo "<font color='red'>Sorry, Delete process failed";
}