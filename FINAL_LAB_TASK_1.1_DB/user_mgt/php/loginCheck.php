<?php
	//session_start();
	require_once('../models/db.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if(empty($username) || empty($password)){
			//echo "null submission";
			header('location: ../view/login.php?msg=null');
		}else{

			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			//$sql = "select * from users where username='".$username."' and password='".$password."'";
			//$sql = "select * from users where username='{$username}' and password='{$password}'";
			$sql = "select * from users where username='$username' and password='$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){
				setcookie('flag', 'Mishu', time()+3600, '/');
				header('location: ../view/home.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	

?>