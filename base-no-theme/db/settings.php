<?php
$con = mysqli_connect("localhost", "root", "","db") or die ("¡No cenection!");
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>