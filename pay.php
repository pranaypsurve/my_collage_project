<!DOCTYPE html>
<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}

?>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />
<title>Payment Gateway</title>

<style>
		  body {
	width: 100%;
	height: 100vh;
  background-image: url("paybg.jpg");
  background-repeat: no-repeat, repeat;
  background-size:100% 100%;
  background-attachment: fixed;
  background-size: cover;
  background-color: green;
}
</style>
<link rel="stylesheet" href="bootstrap.min.css">

          <script>
function validateForm() {
  var name = document.forms["card_valid"]["cno"].value;
  if (name == "16") {
    alert("Enter Card Number");
    return false;
  }

  var x = document.forms["card_valid"]["name"].value;
  if (x == "") {
    alert("Enter Card Holder Name");
    return false;
  }

  var x = document.forms["card_valid"]["Em"].value;
  if (x == "") {
    alert("Enter Expiry Date of Card");
    return false;
  }

  var birthdate = document.forms["card_valid"]["Cvv"].value;
  if (birthdate == "") {
    alert("Enter Cvv No.");
    return false;
  }

  var pass = document.forms["card_valid"]["pin"].value;
  if (pass == "") {
    alert("Enter Password");
    return false;
  }

}
</script>

</head>
<body style="background-color: #ecffe6;">
<center><img src="paytit.png" width='35%'></center> 
<div class="container">
<form  method='post' action ='Receipt.php' name="card_valid" onsubmit="return validateForm()">
<table align="center">
<tr><th colspan='3'><label>Enter your Card details:</label></th></tr>
<tr><td><div class="form-group"><div class="form-group"><label>Card Number : </label></td> <td colspan='2'><input type="Number" name="cno" min="12" maxlength='16'></div></td></tr>
<tr><td><div class="form-group"><label>Name on Card: </label></td> <td colspan='2'><input type="text" name="name" max='10'> <!--pattern='[A-Za-z\\s]*'--> </div></td></tr>
<tr><td><div class="form-group"><label>Expiry Date : </label></td> <td><input type="Number" name="Em" placeholder='MM' maxlength='2'  min="1" maxlength="12" ></div></td> <td><input type="Number" name="Ey" placeholder='YY' maxlength='2' min="1" max=""></td></tr>
<tr><td><div class="form-group"><label>CVV No: </label></td> <td colspan='2'><input type="Password" name="Cvv" maxlength='3' ></div></td></tr>
<tr><td><div class="form-group"><label>PIN: </label></td> <td colspan='2'><input type="Password" name="Pin" type="numeric" maxlength='4'></div></td></tr>
<tr><td colspan='3'><center><button class="btn btn-warning btn-lg" type='Submit' name='register_submit' >Make Payment</Button></center></td></tr>
</table>
</form>
</body>
</html>