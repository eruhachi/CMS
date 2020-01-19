<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registratie/inlog systeem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="includes/login.inc.php">


		<div class="input-group">
			<label>Gebruikersnaam</label>
			<input type="text" name="mailuid" >
		</div>
		<div class="input-group">
			<label>Wachtwoord</label>
			<input type="password" name="pwd">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login-submit">Login</button>
		</div>
		<p>
			Nog geen account? <a href="signup.php">Sign up</a>
		</p>
	</form>
</body>
</html>