

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<form>

		<table border ="1" width=70% align="center">

			
<tr>
	<th colspan="3"><img width="70" align="left"   height="50" src="image/x.jpg">
	 <a href="PublicHome.php" >Home| </a>
	 <a href="login.php" >Login|</a>
	 <a href="registration.php" >Registration</a>

</tr>
<tr height="250px">
	<td width="70"> 
	<form method="post" action="PublicHome.php">
		<fieldset>
			<legend><b>LOGIN</b></legend>
			<table>
				<tr>

					Username:
					<input type="text" name="username" ><br><br>
				</tr>
				<tr>
					Password:
					<input type="password" name="password">
					
					<hr>
           
             <input type="checkbox" name=" Remember Me" value="">Remember Me
             
             <hr>
             
             
			
					<input type="submit" name="submit" value="Submit"><a href="Forgot Password.html">Forgot Password?</a>
				</tr>
			</td>
			</table>
		</fieldset>
	</td>
		</th>
</tr>
	</form>


</body>
</html>