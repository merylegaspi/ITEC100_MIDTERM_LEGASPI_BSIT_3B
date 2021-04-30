<?php include('allfunctions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu Bar and Search Box</title>
	<link rel="stylesheet" href="css/designhomepage.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

<style>
    a{
        color:#fb9ec4;
    }
    a:hover{
        color:white;
    }
</style>


<div class="display">
<table align="center" class="category">
<br>
        <tr>
            <th><h2><u>CATEGORY</u></h2></th>
        </tr>

    <?php

        $conn = mysqli_connect("localhost", "root", "", "ecommerce");
            if ($conn-> connect_error){
                die("Connection failed:". $conn-> connect_error);
            }
        
        $sql = "SELECT cat_id, cat_title from category";
        $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()){

                    $cat_title = $row['cat_title'];
					    echo "<tr><td><a href>{$cat_title}</a></td></tr>";
                }
            }
            
            else {
                echo "0 result";
            }

            $conn-> close();
    ?>

</table> <br> <br>


<table align="center" class="brands">

        <tr>
            <th><h2><u>BRANDS</u></h2></th>
        </tr>

    <?php

        $conn = mysqli_connect("localhost", "root", "", "ecommerce");
            if ($conn-> connect_error){
                 die("Connection failed:". $conn-> connect_error);
             }

        $sql = "SELECT brand_id, brand_title from brands";
        $result = $conn-> query($sql);

              if ($result-> num_rows > 0){
                 while ($row = $result-> fetch_assoc()){

                 $brand_title = $row['brand_title'];
					echo "<tr><td><a href>{$brand_title}</a></td></tr>";
                  }
              }
    
             else {
                 echo "0 result";
             }

    $conn-> close();
?>
</table> 

<table class="logtable">

<tr>
    <th><h2><u>USERNAME</u></h2></th>
    <th><h2><u>ACTIVITY LOG</u></h2></th>
    <th><h2><u>TIME</u></h2></th>
    <th><h2><u>DATE</u></h2></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "loginform"); //Database name 
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

$sql = "SELECT Username, Activity, Time, Date from activity_log"; //Table Category Name
$result = $conn-> query($sql);

    if ($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){

                $Username = $row['Username']; 
                $Activity = $row['Activity'];
                $Time = $row['Time'];
                $Date = $row['Date'];
					echo "<tr><td>{$Username}</td>  <td>{$Activity}</td>  <td>{$Time}</td>  <td>{$Date}</td></tr>";
        }
    }
    
    else {
        echo "0 result";
    }

    $conn-> close();
    
?>
</table> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






<form method="POST" action="">

<table class="buttons" align="center">
    <tr>
        <td> <input type="submit" name="settings" value="Settings" class="settings" onclick="resetpass()"> </td>
        <td> &nbsp &nbsp &nbsp </td>
        <td> <input type="submit" name="logout" value="Logout" class="logout" onclick="signout()"> </td>
        </tr>
</table>

<div>

    <nav>       

		<div class="logo"><img src = "pics/MD.png" width="110" height="90"></div>
		
		<ul>
			<li class = "active"><a href="#">Home </a></li> &nbsp &nbsp
			<li><a href="#"> All Products </a></li> &nbsp &nbsp
			<li><a href="#"> My Account </a></li> &nbsp &nbsp
			<li><a href="#"> Shopping Cart </a></li> &nbsp &nbsp
			<li><a href="#"> Contact Us </a></li> &nbsp &nbsp
		</ul>


		<div class="searchbox">
			<input class="search" type="text" name="" placeholder="Search...">
			<a class="searchicon" href="#">
				<i class="fas fa-search"></i>
			</a>
		</div>
    

	</nav>

</form>



    <script>
		function signout() {
			alert("LOGGED OUT SUCCESSFULLY!");
		}
	</script>



</body>
</html>