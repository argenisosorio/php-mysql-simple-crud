<!doctype html>
<html lang="en">
    <head>
        <title>Add</title>
        <meta charset="UTF-8">
    </head>
<body>
<?php
include('../db/settings.php');
include('includes/menu.php');

if (isset($_POST['submitted'])) {
    $sql = sprintf("INSERT INTO `records` ( `title`,`content`) VALUES ('%s','%s') ",$_POST['title'],$_POST['content']);
    $exec = mysqli_query($con,$sql) or die(mysqli_error());

    if ($exec) {
        echo "Added <br />";
    }
} 
?>
<h2>Add record</h2>
<form method='POST'> 
    Title:<br /><input type='text' name='title'/>
    <p />
    Content:<br /><textarea name='content'></textarea>
    <p />
    <input type='submit' value='Save' /><input type='hidden' value='1' name='submitted' />
    <input type='reset' value='Reset' />
</form>
</body>
</html>