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
                    <h1 class="page-header">Delete</h1>
                </div>
            </div>
            <?php
            $id = (int) $_GET['id'];
            $query = sprintf("DELETE FROM `records` WHERE `id` = '%s' ", $id);
            $exec = mysqli_query($con, $query);
            if($exec) {
                echo "<h4>Record id=".$id ." is deleted</h4>";
            }
            else {
                "<h4>Nothing deleted</h4>";
            }
            ?>

        </div>
    </div>

</div>

<?php
include("includes/footer.php");
?>

</body>
</html>