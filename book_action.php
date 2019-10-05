<?php  
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}

$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];

if ($source == $dest)
{
	echo"<h1><center>Source and destination Selected are Same , Please refill the form </center></h1>";
}

$sql_price="SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `class` = $class";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final=$row["Price"] * $type ;
$final=$final*$no;
echo "<h1><center><b><span style=color:yellow;>You have to pay : ₹ ".$final." </span></b></center></h1>";
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['Class']=$class;
$_SESSION['Type']=$type;
$_SESSION['number']=$no;
?>
<html>
<head>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />

<style>
		  body {
	width: 95%;
	height: 90vh;
  background-image: url("bookact.jpg");
  background-repeat: no-repeat, repeat;
  background-size:100% 100%;
  background-attachment: fixed;
  background-size: cover;
 
}
</style>
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color: F5F1F0;">
<table align='center'>
<tr><td><a href='pay.php'><button class="btn btn-secondary btn-lg">Proceed</button></a></td>
&bnsp;<td><a href='book.php'><button class="btn btn-secondary btn-lg" >Refill Details</button></a></td></td>
</tr>
</table>
</body style="background-color: F5F1F0;">
</html>