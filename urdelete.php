<?php

include("connection.php");

$vid = $_GET['vid'];
$data2 = mysqli_query($conn,"select * from vehicles where v_id='$vid'");
$result2 = mysqli_fetch_array($data2);
$query = "DELETE FROM VEHICLES WHERE v_id='$vid'";
$data = mysqli_query($conn,$query);

if($data){
	
	echo "<font color='green'>Record Deleted From Table";
	
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/1/index.php?vuid=<?php echo $result2['v_uid']; ?>#resume">
	<?php
	
}else{
	echo "<font color='red'>Sorry, Delete process failed";
}