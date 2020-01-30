<?php


require "dbh.php";
//require "../Login&register/includes/dbh.inc.php";



$title = $_POST['titel'];
$page_content = $_POST['content'];

  if($page_content && $title){

    $sql = "UPDATE cms_pages SET page_content='$page_content', page_title='$title' WHERE page_ID=";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
      
  }else{
          print("error", "Provide Data in the Textbox");
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
	    <label for="title"></label>
		<br>
		<input type="text" placeholder="Title" id="title" maxlength="30" minlength="1">
		<br>
		<br>
		<textarea rows="25" placeholder="Text" id="text"></textarea>
		<br>
		<br>
		<button type="button" class="submitbutton">Submit</button>
	</form>  
</body>
</html>