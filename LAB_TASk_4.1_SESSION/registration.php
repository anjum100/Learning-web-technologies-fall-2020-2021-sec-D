<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	
		<table border ="1" width=70% align="center">

			
<tr>
	<th colspan="3"><img width="70" align="left"   height="50" src="image/x.jpg">
	 <a href="PublicHome.php" >Home| </a>
	 <a href="login.php" >Login|</a>
	 <a href="registration.php" >Registration</a>

</th>
</tr>


			<tr>
				<td>


					<form method="post" action="registration.php" style=" width:300px"  >
        <fieldset >
            <legend><h3>REGISTRATION</h3></legend><br>
            <b>Name:</b>
            <input type="text" name="name" value=""><br>
            <hr>
            <b>Email:</b>
             <input type="email" name="email" value="">
             <button title="hint:sample@example.com" > <b>i</b></button> <br>
             <hr>
             <b>User Name:</b>
            <input type="text" name=" user name" value=""><br>
            <hr>
            <b>Password:</b>
             <input type="password" name=" password" value="">
             
             <hr>
             <b>Confirm Password:</b>
             <input type="password" name=" confirm password" value="">
             
             <hr>
 
     
           
           <fieldset style=" width:300px">
			<legend> <b>Gender </b> </legend>
			


			 <input type="radio" name="gender"  > <b>Male </b>
				<input type="radio" name="gender"  > <b> Female </b>
				<input type="radio" name="gender"  > <b> Other </b> <br> <br>
           <hr>
             </fieldset><br>

             <hr>

             <fieldset style=" width:300px">
			<legend> <b>Date of Birth </b>  </legend>
			

           <pre> <b>dd      mm     yyyy </b></pre>
			    
			    <input type="tel" name="dob"size="1"> <b>/</b>
				<input type="tel" name="dob"size="1"><b>/</b>
				<input type="tel" name="dob"size="3"><b>/</b><br>
				
			</fieldset>
			<hr>


            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="submit" value="Reset">
       
    </form>
</fieldset>
			</tr>
			<tr>
				<td align ="center" colspan="4">Copyright @ 2017</td>
			</tr>
		</table>

</body>
</html>

	