

<?php

echo "";

if(isset($_REQUEST['submit'])){
    
    if (isset($_REQUEST['dob'])){
    	echo $_REQUEST['dob'];
    }   
      
else{
	echo "";
}
      
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>DATE OF BIRTH</title>
</head>
<body>

	<form method = "post" style=" width:300px">
		<fieldset>
			<legend> <h3><b>DATE OF BIRTH </b></h3> </legend>
			<pre> <b>dd   mm   yyyy </b></pre>
			    
			    <input type="tel" name="day"size="1" > <b>/</b>
				<input type="tel" name="month"size="1" ><b>/</b>
				<input type="tel" name="year"size="3" ><b>/</b><br>
				<hr>
				<input type="submit" name="submit" value="Submit">
		        
		</fieldset>
	</form>
</body>
</html>