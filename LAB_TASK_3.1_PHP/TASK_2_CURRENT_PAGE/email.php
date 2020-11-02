<?php

if(isset($_REQUEST['submit'])){

    $email = $_REQUEST['email'];
    
    if($email ==""){
        
        echo "field required....";
        
    }
    
    else{
        echo $email;
    }
    
    
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	
	<form method="post" style=" width:300px">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="text" name="email" value="">
			<button title="hint:sample@example.com" style= "color:black;"> <b>i</b></button> <br><br>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>