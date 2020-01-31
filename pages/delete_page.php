<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<?php echo $_GET["id"]; ?>


</body>

</html>

<?php
$page_id = $_GET["id"];

include "dbh.inc";

$sql = "DELETE FROM cms_pages WHERE page_ID=$page_id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();
?> 