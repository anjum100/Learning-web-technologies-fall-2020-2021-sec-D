<?php
	//include('header.php');
	//include_once('header.php');

	//require('header.php');
	require_once('../php/header.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
</head>
<body>

	<h3>Profile Page</h3>
	
	<a href="home.php">Back</a> |
	<a href="logout.php">logout</a>
	<br><br>
	
	<img src="image/pic.png"  width="100px" height="100px">
	<br>
	
	<form>
		Update Image: <input type="file" name="mypic">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>