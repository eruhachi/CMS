<!--navigation-->
<?php
 ?>

<head>
    <link rel="stylesheet" href="/CMS/css/UniStyle.css">
  <link rel="stylesheet" href="/CMS/css/nav.css">

</head>

 <nav id="idNav">

  <ul class="nav-links">
    <?php


    if (isset($_SESSION['userId']) && isset($_SESSION['userUid'])) {
            echo '<b><a href="/CMS/pages/homepage/userDashboard.php"><li>Dashboard</li></a></b>';
          }else{
                     echo '<a href="/CMS/index.php"><li>Dashboard</li></a>';
          }


    ?>

    <a href="/CMS/pages/createpages/list.php"><li>Posts</li></a>
  </ul>
<a href="/CMS/pages/Login&register/login.php" class="login_Button">Login</a>
</nav>

<a href="#idNav"><div class="topbutton">
<img src="/CMS/img/upArrow.png" alt="arrow">
</div></a>
