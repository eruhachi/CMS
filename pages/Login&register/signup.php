<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<form action="includes/signup.inc.php" method="post">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Sign up
					</span>

					<?php
						if (isset($_GET['error'])) {
 						 if($_GET['error'] == "emptyfields") {
							 echo '<h2 class="signuperror">Vul alle velden in</h2>';
								}
								else if($_GET["error"] == "invaliduidmail") {
								  echo '<h2 class="signuperror">Verkeerde gebruikersnaam en e-mail</h2>';
								}
								else if($_GET["error"] == "invaliduid") {
									echo '<h2 class="signuperror">Verkeerde gebruikersnaam</h2>';
								}
								else if($_GET["error"] == "invalidmail") {
									echo '<h2 class="signuperror">Verkeerde e-mail</h2>';
								}
								else if($_GET["error"] == "passwordcheck") {
									echo '<h2 class="signuperror">De wachtwoorden komen niet overeen</h2>';
								}
								else if($_GET["error"] == "usertaken") {
									echo '<h2 class="signuperror">Gebruikersnaam is al in gebruik</h2>';
								}
							}

						  ?>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="uid" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="E-mail is required">
						<span class="label-input100">E-mail</E-mail></span>
						<input class="input100" type="text" name="mail" placeholder="Type your e-mail">

						<span class="focus-input100" data-symbol="&#x2709;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pwd" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Passwords are not equal">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pwd-repeat" placeholder="Re-Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="signup-submit" type="submit">
								Register
							</button>
						</div>
					</div>
					<br>
					<div class="text-center p-t-8 p-b-31">
					<h3> Heb je al een account? </h3>
						<a href="login.php">
							Login
						</a>
					</div>
					</form>
					</div>
					</div>
					</div>
		</div>
	</div>
</body>
</html>
