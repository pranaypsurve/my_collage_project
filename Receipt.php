<html>
<head>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />
<script>
function myFunction() {
    window.print();
}
</script>
<link rel="stylesheet" href="bootstrap.min.css">

</head>
<body style="background-color: F5F1F0;">

<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
$name = $_POST['name'];
$card = $_POST['cno'];
$EM  = $_POST['Em'];
$EY = $_POST['Ey'];
$Cvv = $_POST['Cvv'];
$Pin = $_POST['Pin'];
$sql_transactions="INSERT INTO transactions(email,source,dest,Name,Class,NoOfpass,card_no,expmonth,expyear,cvv,pin,Amt)VALUES ('".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','$name','".$_SESSION['Class']."' ,'".$_SESSION['number']."','$card', '$EM', '$EY', '$Cvv', '$Pin', '".$_SESSION['final']."')";

if(mysqli_query($connect, $sql_transactions) == true)
{
	echo "<h1><center>Your Ticket has been sucessfully booked<center></h1><br>";
$sql_transactions="SELECT * FROM `transactions` WHERE `source` LIKE '".$_SESSION['source']."' AND `dest` LIKE '".$_SESSION['dest']."' AND `Amt` = '".$_SESSION['final']."' AND `email`='".$_SESSION['email']."'";
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){
	echo "<center><h1>Ticket</h1></center>";
	echo "<center>Ticket No. :".$row["T_No."]."</center>";
	echo "<center>Name : ".$row["Name"]."</center>";
	echo "<center>Source:".$row["source"]."</center>";
	echo "<center>Destination:".$row["dest"]."</center>";
	echo "<center>Class:".$row["Class"]."</center>";
	echo "<center>Type( 1 = Single , 2 = Return):".$row["Class"]."</center>";
	echo "<center>No of Passengers : ".$row["NoOfpass"]."</center>";
	echo "<center>Amt Paid: ".$row["Amt"]."</center>";
}
}
else
{
	echo "<h1><center>Ticket Booking Unsucessful , Please Try Again<center></h1> <br>";
	echo "<h2><center><a href='Book.php'>Refill</a></center>";
}
?>
<table align = "Center">
<tr>
<td>
<button class="btn btn-secondary btn-lg" onclick="myFunction()">Print this page</button>
</td></tr>
<tr>
<td><a href="home.php"><button class="btn btn-secondary btn-lg">Home</button></a>
</td>
</tr>
</body style="background-color: F5F1F0;">
</html>