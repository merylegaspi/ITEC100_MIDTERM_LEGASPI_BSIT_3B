<?php include('allfunctions.php') ?>

<!DOCTYPE html>
<html>
<head>

	<title>CREATE AN ACCOUNT</title>
	<link rel="stylesheet" type="text/css" href="css/CreateAccountDesign.css">

</head>
<body>

	<div class="newaccform">

		<img src= "pics/avatarlogo.png" class="avatarlogo">

			<br><h1>CREATE AN ACCOUNT</h1>

				<form method="post" action="">

						<p>Username</p>
						<input type="text" name="username" placeholder="Enter Username" required oninvalid = "this.setCustomValidity('Please Input Username')"
 						 oninput="this.setCustomValidity('')"/>

						<p>Email Address</p>
						<input type="email" name="email" placeholder="Enter Email" required oninvalid = "this.setCustomValidity('Please Input Valid Email')"
 						 oninput="this.setCustomValidity('')"/> <br>

						<p>Create Password</p>
						<input type="password" name="password" placeholder="Create Password" required oninvalid = "this.setCustomValidity('Please Input Password')"
 						 oninput="this.setCustomValidity('')"/><br>

						<p>Confirm Password</p>
						<input type="password" name="confirmpword" placeholder="Confirm Password" required oninvalid = "this.setCustomValidity('Please Confirm Password')"
 						 oninput="this.setCustomValidity('')"/><br><br>

						<input type="submit" name="create" value="Confirm" ><br>

						<a href="signn.php"><center>Back</center></a><br>

				</form>


	</div>

</body>
</html>
