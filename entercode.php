<?php include('allfunctions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Verification Code</title>
	<link rel="stylesheet" type="text/css" href="css/enterdesigncode.css">
</head>
<body>

	<div class="entercode">

		<img src= "pics/avatarlogo.png" class="avatar">

		<h1>ENTER CODE</h1>

			<form method="post" action="">

					<input type="text" name="codes" placeholder="Enter Authentication Code" required oninvalid = "this.setCustomValidity('Enter Authentication Code')"
 						 oninput="this.setCustomValidity('')"/><br><br>

					<input type="submit" name="verify" value="Verify">
					 <br>


			</form>

	</div>

</body>
</html>

