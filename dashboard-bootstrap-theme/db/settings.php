<?php
/* Database
==================================================*/
$host = "localhost"; // Host name
$user = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "db"; // Database name

/* Connection
==================================================*/
$con = mysqli_connect($host, $user, $password, $db_name) or die ("¡No cenection!");
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>