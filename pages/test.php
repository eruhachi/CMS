<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS TEAM BLUE SHELL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="test.php">Home</a></li>
				<li><a href="hoi.html">User</a></li>
			</ul>
		</nav>
	</header>

	<div class="wrapper">
		<div class="login">login</div>
		<div class="list">pages</div>
		<div class="content">
	
	<form action="">
	    <label for="title"></label>
		<br>
		<input type="text" placeholder="Title" id="title" maxlength="30" minlength="1">
		<br>
		<br>
		<input type="text" placeholder="Topic" id="invullen" maxlength="40">
		<br>
		<br>
		<textarea rows="25" placeholder="Text" id="text"></textarea>
	</form>


	</div>
	</div>

	<footer>
		<p class="copyright">made by: blue shell</p>
		<div class="button"><button onclick="topFunction()" class="btn" title="Go to top">Top</button></div>
	</footer>

</body>
</html>

<script>
var mybutton = document.getElementById("btn");

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
