<!doctype html>
<html lang="en">
    <head>
        <title>Delete</title>
        <meta charset="UTF-8">
    </head>
<body>
<?php
include('../db/settings.php');
include('includes/menu.php'); 
$id = (int) $_GET['id'];
$query = sprintf("DELETE FROM `records` WHERE `id` = '%s' ", $id);
$exec = mysqli_query($con, $query);
if($exec) {
    echo "Record id=".$id ." is deleted!<br /> ";
}
else {
    "Nothing deleted";
}
?>
</body>
</html>