<!DOCTYPE html>
<html>
<head>
	<title>Register Sucessfully</title>
	<style>
		h2   {
			color: red;
			background-color: powderblue;
			align-content: center;
			font-size: 40px;
		}
		h1{
			color: green;
			background-color: lightcyan;
			font-size: 40px;
		}
		h3{
			/* border: 2px solid powderblue; */
			font-size: 40px;

		}

	</style>

	 <link rel="shortcut icon" href="logofig.jpg" />
</head>
<body style="background-color: #cfff66;">            <!-- refer from w3 school color picker -->

<?php
include 'connect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$dob  = $_POST['dob'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];
$sql_userdatabase="Insert into userdatabase(Name ,Email , Gender, password ,dob) values ('$name' , '$email' , '$Gender', '$password', '$dob')";

if(mysqli_query($connect, $sql_userdatabase) == true)
{
	echo "<h1><center>You have been sucessfully registered<center></h1><br>";
	echo "<h3><center><a href='index.php'>Login</a></center></h3>";
}
else
{
	echo "<h2><center>Registration Unsucessful , Please try again<center></h2> <br>";
	echo "<h2><center><a href='register.php'>Register</a></center></h2>";
}

?>

</body>
</html>