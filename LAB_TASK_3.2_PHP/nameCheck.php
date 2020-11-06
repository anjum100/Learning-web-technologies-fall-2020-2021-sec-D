<?php
	

	if(isset($_REQUEST['submit'])){

		$name 	= $_POST['name'];

		if($name == ""){
			
			header('location: Name.html?msg=null_name');

		}else if(empty($pass)){
			
			header('location: name.html?msg=invalid_name');

		}else{
			if($name == $name){
				
				$_SESSION['isValid'] = "true";
				header('location: name.html?msg=null_name');

			}else{
	
				header('location: name.html?msg=error_name');
			}
		}
	}else{
		header('location: name.html');
	}
?>