<?php
include "dbh.inc";


$sql = "SELECT * FROM cms_pages";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["page_title"]. "<br>" . $row["page_content"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

 ?>
