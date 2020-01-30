<?php
require "dbh.php";

if(isset($_GET['id'])) {
  print($_GET['id']).PHP_EOL;
}

$sql = "SELECT * FROM `pages`.`cms_pages`";
$result = $conn->query($sql);


$url = "/CMS/pages/createpages/TemplatePage.php?id=";


$conn->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All posts</title>
    <link rel="stylesheet" href="/CMS/css/UniStyle.css">
    <link rel="stylesheet" href="/CMS/css/list.css">
  </head>
  <body>

<?php
include "../homepage/nav.php";
 ?>

<div class="dlibox">

<ul>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $_url = '<a href="' . $url . $row['page_ID'] . '"><li class="dli">' . $row['page_title'] . '</li></a><br>';
        echo $_url;
    }
    }else {
        echo "0 results";
}
 ?>
</ul>

</div>




  </body>
</html>
