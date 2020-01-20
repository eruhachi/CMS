<?php
    require "header.php";
?>

<main>
<?php
if (isset($_SESSION['userId'])) {
    echo '<center> <p>Je bent nu ingelogd</p> </center>';
}
else {
    echo '<center> <p> Je bent niet ingelogd</p> </center>';
}
?>
</main>
