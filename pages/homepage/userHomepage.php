<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/CMS/css/UniStyle.css">
    <link rel="stylesheet" href="/CMS/css/userHomepage.css">
  </head>
  <body>
 <?php
include "nav.php";
  ?>

  <div class="wrapper">
<h1>Create a post!</h1>


<div class="formbox">
<form class="PageCreateTitle" action="/CMS/createpage/"  method="post"><input type="text" name="title" value="" placeholder="Enter your title!"></form>
<form class="PageCreateContent" method="post"><textarea name="page_content" placeholder="Enter your text!" rows="8" cols="80"></textarea></form>
</div>
<div name="Submit"><input type="button" value="Create!" class="Submit"></input></div>






  </div>


  </body>
</html>
