<?php
error_reporting(0);
?>

<html>
<body>
	<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="uploadfile" value=""/>
	<input type="submit" name="submit" value="Upload File"/>
	
	</form>
</body>
</html>

<?php

$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder = "docs/".$filename;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' width='100px' height='*' />";
?>