<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}


$sql_transactions="SELECT * FROM `transactions` WHERE  `email`='".$_SESSION['email']."'";
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){
	echo "<center><h1>Ticket</h1></center>";
	echo "<center>Ticket No. :".$row["T_No."]."</center>";
	echo "<center>Name : ".$row["Name"]."</center>";
	echo "<center>Source:".$row["source"]."</center>";
	echo "<center>Destination:".$row["dest"]."</center>";
	echo "<center>Class:".$row["Class"]."</center>";
	echo "<center>Type( 1 = one Sided , 2 = Return):".$row["Class"]."</center>";
	echo "<center>No of Passengers : ".$row["NoOfpass"]."</center>";
	echo "<center>Amt Paid: ".$row["Amt"]."</center>";
}

?>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg">

<link rel="stylesheet" href="bootstrap.min.css">
<script>
function myFunction() {
    window.print();
}
</script>
</head>
<body style="background-color: F5F1F0;">

<table align = "Center">
<tr>
<td>
<br>
<button class="btn btn-secondary btn-lg" onclick="myFunction()">Print this page</button>
</td></tr>
<tr>
<td><br><a href="home.php"><button class="btn btn-secondary btn-lg">Home</button></a>
</td>
</tr>
</html>