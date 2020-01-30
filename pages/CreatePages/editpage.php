<?php


require "dbh.php";
//require "../Login&register/includes/dbh.inc.php";


$sql = "UPDATE cms_pages SET page_content='test', page_title='test' WHERE page_ID=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>