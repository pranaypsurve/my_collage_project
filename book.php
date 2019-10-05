<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");   //handle kartoy bg made
}
?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
 <link rel="shortcut icon" href="logofig.jpg" />
<link rel="stylesheet" href="bootstrap.min.css">
		  <style>
		  body {
	width: 100%;
	height: 100vh;
  background-image: url("bookonline.png");
  background-repeat: no-repeat, repeat;
  background-size:100% 100%;
  background-attachment: fixed;
  background-size: cover;
  background-color: green;
}
</style>
<title>Book Ticket</title>
</head>
<body style="background-color: F5F1F0;">
<center><img src="ticketbooking.png" width='35%'></center> 
<br>
<div class="container">
<form method='post' action ='book_action.php' >
<table align="center">
<tr><td>Source: </td> 
<td colspan="2"><input list="Stations" name="source" required="">
  <datalist id="Stations">
    <option value="Thane"></option>
    <option value="Airoli"></option>
    <option value="Rabale">
    <option value="Ghansoli">
    <option value="Kopar Khairane">
	<option value="Turbhe">
	<option value="Jui Nagar">
	<option value="Nerul">
  </datalist> </td>
  </tr>
<tr><td>Destination : </td> <td colspan="2"><input list="Stations" name="dest" required></td></td></tr>
<tr><td>Class :</td><td>&nbsp<input type="radio" name="class" value='1' required>I First Class</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="class" value='2'>II Second Class</td></tr>
<tr><td>Type :</td><td><input type="radio" name="type" value='1' required>Single</td><td><input type="radio" name="type" value='2'>Return</td></tr>&nbsp&nbsp&nbsp&nbsp&nbsp
<tr><td>Number of Tickets</td><td colspan="2"><input type="integer" name="number" required></td></tr>
<tr><td colspan='3'><br><center><button class="btn btn-primary btn-lg " type='Submit' name='login_submit'>Book</button></center></td></tr>

<tr></tr>

</table>
</form>
