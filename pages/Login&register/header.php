<?php
 session_start();
?>

<!DOCTYPE HTML>
<html>
    <Head>
        <meta ccharset="utf-8">
        <meta name="description" contect="This is an example of a meta description. This will often show up in search restults.">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>

    </head>
    <body>

        <header>
        <div class="header">
		    <h2>Home Page</h2>
            <?php
             if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                <Button class="btn" type="submit" name="logout-submit">Logout</Button>
                </form>';
            }
            else {
                echo '<form action="includes/login.inc.php" method="post">
                <input class="input-group" type="text" name="mailuid" placeholder="Username/E-mail...">
                <input class="input-group" type="password" name="pwd" placeholder="Password...">
                <Button class="btn" type="submit" name="login-submit">Login</Button>
                </form>
                <a href="signup.php">Registreer</a>';
            }
            ?>
            </div>
            </div>
    </header>