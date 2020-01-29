<?php


require "dbh.php";
require "../Login&register/includes/dbh.inc.php";

/*
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

*/

//Update Information
if(isset($_POST['btn-update'])){
 $title = $_POST['title'];
 $Text = $_POST['page_content'];
 $update = "UPDATE data SET title='$title', text='$page_content',WHERE empid=". $_GET['edit_id'];
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: disp.php");
 }
}
?>
<!--Create Edit form -->
<!doctype html>
<html>
<body>
<form method="post">
<h1>Update Content</h1>
<label>title:</label><input type="text" name="title" placeholder="title" value="<?php echo $row['title']; ?>"><br/><br/>
<label>Text:</label><input type="text" name="text" placeholder="text" value="<?php echo $row['text']; ?>"><br/><br/>
<button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
<a href="disp.php"><button type="button" value="button">Cancel</button></a>
</form>
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>