<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/CMS/css/UniStyle.css">
    <link rel="stylesheet" href="/CMS/css/userDashboard.css">
  </head>
  <body>
 <?php
include "nav.php";
require "../CreatePages/pageCreate.php";
  ?>

  <div class="wrapper">
<h1>Create a post!</h1>


<div class="formbox">

<form  method="POST">
  <div class="PageCreateTitle">
      <input type="text" name="title"  placeholder="Enter your title!">
</div>
<div class="PageCreateContent">
    <textarea name="content" placeholder="Enter your text!" rows="8" cols="80"></textarea>
</div>

<div>
<input type="submit" value="Create!" name="create" class="Submit"></input>
</div>

</form>

</div>








  </div>


  </body>
</html>
