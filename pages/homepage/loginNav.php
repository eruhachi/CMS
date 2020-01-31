<!--navigation-->
<?php
require "../Login&register/includes/dbh.inc.php";
 ?>

<head>
    <link rel="stylesheet" href="/CMS/css/UniStyle.css">
  <link rel="stylesheet" href="/CMS/css/nav.css">

</head>

 <nav id="idNav">

  <ul class="nav-links">
    <?php
    require "../Login&register/includes/login.inc.php";

    if ($pwdCheck == true) {
            echo '<b><a href="/CMS/pages/homepage/userDashboard.php"><li>Dashboard</li></a></b>';
          }else{
                     echo '<a href="/CMS/index.php"><li>Dashboard</li></a>';
          }
    ?>
    <a href="/CMS/pages/createpages/list.php"><li>Posts</li></a>
  </ul>

</nav>
