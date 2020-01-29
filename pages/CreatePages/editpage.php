<?php


require "dbh.php";
require "../Login&register/includes/dbh.inc.php";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('', '', '')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


$result = mysql_query("SELECT * FROM replies WHERE rid = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
        {
        die("Error: Data not found..");
        }
                $trigger1=$test['trigger1'] ;
                $reply2= $test['reply2'] ;              

if (isset($_POST['save']))
{   
    $triggera = $_POST['trigger1'];
    $replyb = $_POST['reply2'];

    mysql_query("UPDATE `replies`(trigger,reply) VALUES ('$triggera','$replyb') WHERE rid = '$id'");  
    echo "Saved!";

}
mysql_close($conn);

?>