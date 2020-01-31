<!--navigation-->
<?php
require "pages/Login&register/includes/dbh.inc.php";
 ?>

<head>
    <link rel="stylesheet" href="/CMS/css/UniStyle.css">
  <link rel="stylesheet" href="/CMS/css/nav.css">

</head>

 <nav id="idNav">

  <ul class="nav-links">
<?php
// WARNING: nog afmaken, dashboard based on logged in or not
//if () {
        //echo '<b><a href="/CMS/pages/homepage/userDashboard.php"><li>Dashboard</li></a></b>';
//      }

     echo '<a href="/CMS/index.php"><li>Dashboard</li></a>';
?>

    <a href="/CMS/pages/createpages/list.php"><li>Posts</li></a>
  </ul>
<a href="/CMS/pages/Login&register/login.php" class="login_Button">Login</a>
</nav>

<a href="#idNav"><div class="topbutton">
<img src="/CMS/img/upArrow.png" alt="arrow">
</div></a>
