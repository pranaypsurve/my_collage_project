<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
?>

<html>
<head>
	<title></title>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />
		  <link rel="stylesheet" href="bootstrap.min.css">
		  
		  <style> 
body {
	width: 100%;
	height: 100vh;
  background-image: url("ind2.jpg");
  background-repeat: no-repeat, repeat;
  background-size:100% 100%;
  background-attachment: fixed;
  background-size: cover;
  background-color: green;
}
</style>
		  
</head>

<table align="right"><td></td></tr></table>
<!-- <div class="jumbotron jumbotron-fluid" style="height:35%;"> -->
 <center><img style="width: 735px; height: 170px;" alt="Project_Logo" src="home.png" ></center>
<br>
 <?php 
 echo '<center><h2><b><span style="color:yellow;">Welcome ' . $_SESSION['name'] .' </span></b></h2></center>';
 echo '<center><h3><b><span style="color:white;">What do you want to do ?</span></b></h3></center>';
 ?>
<div class="container">
	<table id="home" style="width: 50%; height: 100px; text-align: left; margin-left: auto; margin-right: auto;" cellpadding="3" cellspacing="3">
		<tbody>
<tr align="center"><td><br><a class="btn btn-info btn-lg btn-block" href="Book.php">Book Tickets</a></td>
</a></td></tr>
<tr align="center"><td><br><a class="btn btn-info btn-lg btn-block" href="Transac.php">Transactions</a></td>
</tr> 
<tr align="center"> <td><br><a class="btn btn-info btn-lg btn-block" href="logout.php">Logout</a></td></tbody></table>
</div>
</body>
</html>