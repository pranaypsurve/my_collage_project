<?php
include 'connect.php'
?>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />

<link rel="stylesheet" href="bootstrap.min.css">
<!-- ///////////////////////////Javascript Start Here///////////////////////////////////////////// -->

<script>
function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }

  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }

  var x = document.forms["myForm"]["Gender"].value;
  if (x == "") {
    alert("Please Select Gender");
    return false;
  }

  var birthdate = document.forms["myForm"]["dob"].value;
  if (birthdate == "") {
    alert("Enter Date Of Birth");
    return false;
  }

  var pass = document.forms["myForm"]["password"].value;
  if (pass == "") {
    alert("Password Must be Filled");
    return false;
  }

}
</script>

<!-- ///////////////////////////////Javascript Ends Here///////////////////////////////////////// -->




<!-- /////////////////////////////////////Atached Links and Scripts////////////////////////////////////////////// -->



<title> Registration Page </title>
<style> 
body {
	width: 100%;
	height: 85vh;
  background-image: url("ac.jpg");
  background-repeat: no-repeat, repeat;
  background-size:80% 85%;
  background-attachment: fixed;
  background-size: cover;
 
}
</style>


</head>

<!-- /////////////////////////Body Section Starts/////////////////////////////////////// -->

<body>

	<!-- ///////////project header logo || Bellow || ///////////////// -->

<center><img src="reg.png" width='30%'></center> 

<div class="container">

	<!-- //////////////Registration Form//////////////////////// -->

<form name="myForm" method='post' action='register_insert.php' onsubmit="return validateForm()">
<table align="center">
<tr><td><div class="form-group"><label for="name">Name : </label></td> <td colspan='2'><input type="Text" name="name" maxlength='15'></td></t r>
<tr><td><div class="form-group"><label for="email">Email : </label></td> <td colspan='2'><input type="email" name="email" maxlength='20'></td></tr>
<tr><td><div class="form-group"><label for="gender">Gender :</label></td><td><div class="form-group"><input type="Radio" name="Gender" value="M"><label>Male</label></td><td><div class="form-group"><input type="Radio" name="Gender" value="F"><label>Female</label></td></tr>
<tr><td><div class="form-group"><label for="dob">DOB :</label></td><td colspan='2'><input type="text" name="dob" maxlength='10' placeholder='yyyy-mm-dd'></td></tr>
<tr><td><div class="form-group"><label>Password :</label> </td> <td  colspan='2'><input type="password" name="password" minlength="6" maxlength='8'></td></td></tr>
<tr><td colspan='3'><center><button class=" btn btn-primary btn-lg" type='Submit' name='register_submit' >Submit</Button></center></td></tr>
</table>
</form>

<!-- //////////////////////Form Ends/////////////////////////////////////// -->

</body>
</html>