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
	
<form action="includes/login.inc.php" method="post">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>
					<?php
	   				if (isset($_GET['signup'])) { 
					if($_GET['signup'] == "success") { 
		        	echo '<h2 class="signupsuccess">Je kunt nu inloggen</h2>';
			         }
			        }
				    if (isset($_GET['error'])) { 
 				    if($_GET['error'] == "emptyfields") { 
					echo '<h2 class="signuperror">Vul alle velden in</h2>';
					 }
					else if($_GET["error"] == "nouser") {
					echo '<h2 class="signuperror">Verkeerde gebruikersnaam</h2>';
					}
					else if($_GET["error"] == "wrongpwd") {
						echo '<h2 class="signuperror">Verkeerde wachtwoord</h2>';
					}
					}
				    ?>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="mailuid" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pwd" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login-submit" type="submit">
								Login
							</button>
						</div>
					</div>
					<br>
					<center><h3>Nog geen account?</h3></center>
					<div class="text-center p-t-8 p-b-31">
						<a href="signup.php">
							Signup
						</a>
					</div>
					<center><h3>Wachtwoord vergeten?</h3></center>		
					<div class="text-center p-t-8 p-b-31">
						<a href="reset.php">
							Wachtwoord herstellen
						</a>
					</div>


</form>
					</div>

					<div class="flex-c-m">
					</div>
					</div>	
					</div>
		</div>
	</div>
</body>
</html>