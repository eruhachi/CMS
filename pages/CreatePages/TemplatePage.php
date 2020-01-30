<?php
require "dbh.php";



if(isset($_GET['id']) && is_numeric($_GET['id'])) {
  $sql = "SELECT * FROM `pages`.`cms_pages` WHERE `page_ID` = " . $_GET['id'];
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $page_id = $row['page_ID'];
    $page_title = $row['page_title'];
    $page_content = $row['page_content'];
  }
}
 ?>

<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php print($page_title); ?></title>
        <link rel="stylesheet" href="/CMS/css/UniStyle.css">
        <link rel="stylesheet" href="/CMS/css/templatepage.css">
  </head>


  <body>
<!--navbar-->
    <?php
     include "../homepage/nav.php";
     ?>

<!--navbar-->
    <?php
     include "../homepage/nav.php";
     ?>

<div class="wrapper">


<h1><?php print($page_title) ?></h1>
<div class="linedeco"></div>

<div class="textbox">
<p><?php print($page_content) ?></p>
</div>

</div>


  </body>
</html>
