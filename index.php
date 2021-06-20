<?php
include 'config.php' 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Banking System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(img/background.jpg);">
		<div class="navbar">
			<img src="img/s.png" class="logo">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="">Contact</a></li>
				</ul>
		</div>
		<div class="content">
			<h1>Sparks Bank</h1>
			<p>Making Life Simple...</p>
			<div>
				<button type="button"><span></span><a href="users.php" style="text-decoration: none; color: white;">Customers</a></button><br>
				<button type="button"><span></span><a href="transactionhistory.php" style="text-decoration: none; color: white;">Transaction History</a></button>
			</div>
		</div>
	</div>
<footer class="text-center mt-5 py-2" style="position: absolute; bottom: 0px; left: 725px; text-align: center;">
            <p>&copy 2021. Made by <b>CHANDU GOWDA V</b> <br> Intern at Sparks Foundation</p>
</footer>
</body>
</html>