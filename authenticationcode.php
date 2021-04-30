<?php include('allfunctions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Authentication Code</title>
	<link rel="stylesheet" type="text/css" href="css/authenticationdesign.css">
</head>
<body>

	<div class="code">

			<img src= "pics/avatarlogo.png" class="avatar">

			<h1>AUTHENTICATION CODE</h1>

				<form method="post" action="entercode.php">
					<input type="text" name="code" placeholder="Authentication Code" id="displaycode" disabled><br><br>
					<input type="submit" name="proceed" value="Proceed" class="verify"><br><br><br>
				</form>

	</div>

</body>
</html>



<?php

$x="";


$query = "SELECT code FROM code_table ";
$results = mysqli_query($db, $query);
while($row = mysqli_fetch_assoc($results)){
	$x = $row['code'];
}


echo "<script type='text/javascript'>document.getElementById('displaycode').setAttribute('value','".$x."'); </script>";


?>