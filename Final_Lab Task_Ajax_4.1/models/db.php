<?php

function getConnection(){
	$conn=mysql_connect('localhost','root','','webtech');
	return $conn;
}

?>