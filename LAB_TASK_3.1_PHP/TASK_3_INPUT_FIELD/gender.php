<?php

echo "";

if(isset($_REQUEST['submit'])){
    
    if (isset($_REQUEST['gender'])){
    	echo $_REQUEST['gender'];
    }   
      
else{
	echo "nothing selected.";
}
      
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>GENDER</title>
</head>
<body>

	<form method="post"  style=" width:300px">
		<fieldset>
			<legend> <h3><b>GENDER </b></h3> </legend>
			


			 <input type="radio" name="gender"  > <b>Male </b>
				<input type="radio" name="gender"  > <b> Female </b>
				<input type="radio" name="gender"  > <b> Other </b> <br> <br>
              <hr>
             
             <input type="submit" name="" value="Submit"> 
             </fieldset><br>
		</fieldset>
	</form>
</body>
</html>