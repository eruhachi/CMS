<?php
    require "header.php";
?>

<main>
<center> <h1>Registratie</h1> </center>  
<form action="includes/signup.inc.php" method="post">
<center><input class="input-group" type= "text" name="uid" placeholder="Username"></center>
<center><input class="input-group" type= "text" name="mail" placeholder="Email"></center>
<center><input class="input-group" type= "password" name="pwd" placeholder="Password"></center>
<center><input class="input-group" type= "password" name="pwd-repeat" placeholder="Repeat password"></center>
<center><button class="btn" type="submit" name="signup-submit">Signup</button></center>
</form>
</main>