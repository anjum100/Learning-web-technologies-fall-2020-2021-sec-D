<?php

	
	if(isset($_REQUEST['submit']) && !empty($_REQUEST['gender'])){

			echo "gender:".$_REQUEST['gender'];
		}

		
		else

        {
            echo "At least one of them has to be selected";
        }
?>