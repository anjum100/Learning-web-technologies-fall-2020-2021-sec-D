<?php

function getConnection(){
	$conn=mysql_connect('localhost','root','','employee');
	return $conn;
}

?>