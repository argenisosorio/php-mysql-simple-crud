<?php
include("includes/header.php");
?>
<body>

<div id="wrapper">

    <?php
    include("includes/navbar.php");
    include('../db/settings.php');
    ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List of records</h1>
                </div>
            </div>

            <table border="1">
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
                echo "<td>" . $row['id']. "</td>";
                echo "<td>" . $row['title']. "</td>";
                echo "<td>" . $row['content']. "</td>";
                echo "<td><a href=edit.php?id={$row['id']}>Edit</a> | <a href=read.php?id={$row['id']}>Read</a> |  <a href=delete.php?id={$row['id']}>Delete</a></td> ";
                echo "</tr></tbody>";
            }
            ?>
            </table>

        </div>
    </div>

</div>

<?php
include("includes/footer.php");
?>

</body>
</html>