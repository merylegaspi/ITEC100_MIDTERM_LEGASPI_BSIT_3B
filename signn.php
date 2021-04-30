<?php include('allfunctions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="css/DesignSignIn.css">
</head>
<body>

	<div class="siginform">

		<img src= "pics/avatarlogo.png" class="avatarlogo">

			<h1>Sign In</h1>

				<form method="post" action="">

					  <p>Username</p>
						<input type="text" name="username" placeholder="Input Username" required oninvalid = "this.setCustomValidity('Please Input Username')"
 						 oninput="this.setCustomValidity('')"/>

					  <p>Password</p>
						<input type="password" name="password" placeholder="Input Password" required oninvalid = "this.setCustomValidity('Please Input Password')"
 						 oninput="this.setCustomValidity('')"/ id="showpassword" >

 						 	<label> <input type="checkbox" onclick="myFunction()"> Show Password </label>

						<br><input type="submit" name="confirm" value="Login" class="submit"><br><br><br>

						<a href="CreateAccount.php" class="createacct"><center>Create an Account</center> </a>


				</form>
	</div>


</body>
</html>



