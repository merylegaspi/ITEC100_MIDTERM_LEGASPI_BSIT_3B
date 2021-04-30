<?php include('allfunctions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="css/resetpassworddesign.css">
</head>
<body>

	<div class="resetpassword">

		<img src= "pics/avatarlogo.png" class="avatarlogo">

			<h1>Reset Password</h1>

				<form method="post" action="">

					<p> Username</p>
						<input type="text" name="username" placeholder="Input Username" required oninvalid = "this.setCustomValidity('Please Input Username')"
 						 oninput="this.setCustomValidity('')">

					<p> Old Password </p>
						<input type="text" name="oldpassword" placeholder="Input Old Password" required oninvalid = "this.setCustomValidity('Please Input Old Password')"
 						 oninput="this.setCustomValidity('')">

					<p> New Password </p>
						<input type="password" id="newpassword" name="newpassword"  placeholder="Input New Password" required oninvalid = "this.setCustomValidity('Please Input New Password')"
 						 oninput="this.setCustomValidity('')">

                    <p> Confirm Password </p>
						<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm New Password" required oninvalid = "this.setCustomValidity('Please Confirm New Password')"
 						 oninput="this.setCustomValidity('')"/ id="showpassword" > <br><br>

						<br><input type="submit" name="resetpassw" value="Confirm" class="submit"><br><br><br>

						<a href="homepage.php" class="back"><center>Cancel</center> </a>

				</form>
	</div>


</body>
</html>



