<!doctype html>
<html lang="en">
    <head>
        <title>Read</title>
        <meta charset="UTF-8">
    </head>
<body>
<?php
include('../db/settings.php');
include('includes/menu.php');
?>
<h2>Detail</h2>
<?php
if (isset($_GET['id']) ) {
    $id = (int) $_GET['id'];
    $row = mysqli_fetch_array (mysqli_query($con,"SELECT * FROM `records` WHERE `id` = '$id' "));
    echo "<p>id : ".$row['id']."</p>";
    echo "<p>Title : ".$row['title']."</p>";
    echo "<p>Content : ".$row['content']."</p>";
}
?>
</body>
</html>