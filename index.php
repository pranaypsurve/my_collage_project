<?php
include 'connect.php';
?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
 <link rel="shortcut icon" href="logofig.jpg">
<link rel="stylesheet" href="bootstrap.min.css">
<script>
function validateForm() {
  var email = document.forms["login_vaild"]["email"].value;
  if (email == "") {
    alert("Email is required");
    return false;
  }

  var x = document.forms["login_vaild"]["password"].value;
  if (x == "") {
    alert("Password Must be Enter");
    return false;
  }

}

</script>
<title>Ticket Booking</title>
<link rel="stylesheet" href="bootstrap.min.css">
<style> 
body {
	width: 100%;
	height: 100vh;
  background-image: url("ac.jpg");
  background-repeat: no-repeat, repeat;
  background-size:100% 100%;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<!--<body style="background-color: F5F1F0;">            refer from w3 school color picker -->
<body>
<div class="container">
<center><img src="site.png" width='40%'></center> 
<br>
<form method='post' action ='authenticate.php' name="login_vaild" onsubmit="return validateForm()">
<table align="center">
<tr><td colspan='1'><div class="form-group"><label for="email">Email : </label></div></td> <td colspan='2'><div class="form-group"><input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" maxlength='50'></div></td></tr>
<tr><td colspan='1'><div class="form-group"><label for="pass">Password : </label></div></td> <td colspan='2'><div class="form-group"><input type="password" class="form-control" name="password" placeholder="Enter Password" maxlength='15'></div></td></td></tr>
<tr><td colspan='3'><center><button class="btn btn-primary btn-lg" type='Submit' name='login_submit'>Login</button></center></td></tr>
<br>
<tr><td><br><a href='register.php' class="btn btn-light text-info">Register</a></td> <td><br><a href='aboutus.html' class="btn btn-light text-info">About Us</a></td>
<tr></tr>
</table>
</form>
</div>
</body>
</html>