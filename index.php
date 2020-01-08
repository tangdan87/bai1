<!-- <?php

// echo "123";
if (isset($_GET['name'])) {
	$name = $_GET['name'];
	echo "your name is {$name}";
}

?> -->

<!DOCTYPE html>
<html>
<head>
	<title>hocWebBai1</title>
</head>
<body>
	<p>chuong trinh test1</p>
	<form action="index.php" method="get">
		name: <input type="text" name="name"> <br>
		<input type="submit">
	</form>
</body>
</html>