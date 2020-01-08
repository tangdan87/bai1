<?php

if(isset($_GET['name'])){
	echo "name";
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>hocWebBai1</title>
</head>
<body>
	<p>chuong trinh test</p>
	<form action="index.php" method="get">
		name: <input type="text" name="name"> <br>
		<input type="submit">
	</form>
</body>
</html>