<!doctype html>
<html lang="en">
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
    </head>
<body>
<?php
include('../db/settings.php');
include('includes/menu.php');
?>
<h2>List of records</h2>
<table border="1" >
    <thead>
        <tr>
            <th><b>id</b></th>
            <th><b>Title</b></th>
            <th><b>Content</b></th>
            <th><b>Action</b></th>
            </tr>
    </thead>
<?php
$result = mysqli_query($con, "SELECT * FROM `records` ORDER BY id");
while($row = mysqli_fetch_array($result)) {
    echo "<tbody><tr>";
    echo "<td valign='top'>" . $row['id']. "</td>";
    echo "<td valign='top'>" . $row['title']. "</td>";
    echo "<td valign='top'>" . $row['content']. "</td>";
    echo "<td valign='top'><a href=edit.php?id={$row['id']}>Edit</a> | <a href=read.php?id={$row['id']}>Read</a> |  <a href=delete.php?id={$row['id']}>Delete</a></td> ";
    echo "</tr></tbody>";
}
?>
</table>
</body>
</html>