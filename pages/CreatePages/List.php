<?php
include "dbh.inc";

if(isset($_GET['id'])) {
  print($_GET['id']).PHP_EOL;
}

$sql = "SELECT * FROM `pages`.`cms_pages`";
$result = $conn->query($sql);


$url = "/CMS/pages/createpages/TemplatePage.php?id=";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $_url = '<a href="' . $url . $row['page_ID'] . '">' . $row['page_title'] . '</a><br>';
        echo $_url;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
