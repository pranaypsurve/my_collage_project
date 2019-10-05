<?php
session_start();
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
  background-image: url(".png");
  background-repeat: no-repeat, repeat;
  background-size:100% 100%;
  background-attachment: fixed;
  background-size: cover;
}
</style>
 
</head>
<body>

<?php
session_destroy();
echo '<center><h2>You have been sucessfully logged Out<h2></center><br>';
echo '<center><table><tr><td><A href="index.php"><button class="btn btn-secondary btn-lg">Start Again</button></a></td></tr></table></center>';
?>
</body>
</html>