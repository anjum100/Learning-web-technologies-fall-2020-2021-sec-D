
<?php

	if(isset($_REQUEST['submit']))
	{
		foreach($_REQUEST['degree'] as $value)
		{
			echo $value."<br>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Degree</title>
</head>
<body>

	<form method="get" style=" width:300px">
		<fieldset>
			<legend> <h3><b>DEGREE </b></h3> </legend>
			

			<input type="checkbox" name="SSC"> <b> SSC </b>
			<input type="checkbox" name="HSC"> <b> HSC </b>
			<input type="checkbox" name="BSc"> <b> BSc </b>
			<input type="checkbox" name="MSc"> <b> MSc </b>
            <hr>
             <input type="submit" name="" value="Submit"> 
             </fieldset><br>
		</fieldset>
	</form>
</body>
</html>