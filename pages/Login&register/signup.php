
<!DOCTYPE html>
<html>
<head>
	<title>Registratie/inlog systeem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form action="includes/signup.inc.php" method="post">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="uid">
		</div>
		<div class="input-group">
			<label>E-mail</label>
			<input type="text" name="mail">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pwd">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="pwd-repeat">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="signup-submit">Register</button>
		</div>
		<p>
			Heb je al een account? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>