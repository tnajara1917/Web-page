<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset = "utf-8">
		<link href = "hw4.css" rel = "stylesheet"/>
		<title>Lil Baby 4PF Sweepstakes</title>
	</head>
	<body>
	
		<?php
		$name=$_GET["name"];
		$email=$_GET["email"];
		?>
	
	<h1>You're signed up, Best of luck!</h1>
	<h2>Please review your information:</h2>
		<p> Name:
		<?php
		print $name;
		?>
		</p>
	
		<p> Email:
		<?php
		print $email;
		?>
		</p>
	
	<p> THE WINNER WILL BE EMAILED PERSONALLY FROM LIL BABY AND HIS TEAM!</p>
	
	</body>
</html>