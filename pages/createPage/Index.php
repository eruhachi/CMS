
<head>
  <link rel="stylesheet" src="style.css">
</head>
<?php
require "dbh.php";

function createData(){
  $title = $_POST['titel'];
$page_content = $_POST['content']

  if($page_content && $title){

      $sql = "INSERT INTO pages (content, titel)
                      VALUES ('$page_content','$title')";

      if(mysqli_query($conn, $sql)){
         print("success", "Record Successfully Inserted...!");
      }else{
          echo "Error";
      }

  }else{
          print("error", "Provide Data in the Textbox");
  }
}
mysqli_close();
?>
