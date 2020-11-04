<?php

echo"";
	if(isset($_REQUEST['submit']))
	{
		echo $_REQUEST['bloodGroup'];

	}
	else{
		echo"";
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>BLOOD GROUP</title>
</head>
<body>

	<form method="post" style=" width:300px">
		<fieldset>
			<legend> <h3><b>BLOOD GROUP </b></h3> </legend>
			

	   	
	            <select name="Blood Group" >
	            <option value="">A+</option>
	            <option value="" selected ></option>
				<option value="">A-</option>
				<option value="">B+</option>
				<option value="">B-</option>
				<option value="">AB+</option>
				<option value="">AB-</option>
				<option value="">O+</option>
				<option value="">O-</option>
			</select> <br>
			<hr>
			<input type="submit" name="" value="Submit"> 
             </fieldset><br>
		</fieldset>
	</form>
</body>
</html>