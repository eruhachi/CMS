<?php

require "dbh.php";


if(isset($_POST['create'])){
  $title = $_POST['title'];
  $content = $_POST['content'];

  $conn->query("INSERT INTO cms_pages (page_title, page_content) VALUES ('$title', '$content')") or
  die($mysqli->error);
}










 ?>
