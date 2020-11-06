<?php
	

	if(isset($_REQUEST['submit'])){

		$email 	= $_REQUEST['email'];

		
		if(empty($email))
        {
        
        if(strpos($email, '@')==true && strpos($email, '.')==true )
        

        {
            echo "valid email";
        }
        else
        {
			
			header('location: email.html?msg=invalid');

		}
}
        else
        {
			

				$_SESSION['email'] =$email;
				header('location: email.html?msg=null');

		}
	}
    else
    {
		header('location: email.html? msg=error');
	}
?>