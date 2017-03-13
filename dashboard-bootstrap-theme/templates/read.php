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
                    <h1 class="page-header">Detail</h1>
                </div>
            </div>

			<?php
			if (isset($_GET['id']) ) {
			    $id = (int) $_GET['id'];
			    $row = mysqli_fetch_array (mysqli_query($con,"SELECT * FROM `records` WHERE `id` = '$id' "));
			    echo "<p><b>id</b> : ".$row['id']."</p>";
			    echo "<p><b>Title</b> : ".$row['title']."</p>";
			    echo "<p><b>Content</b> : ".$row['content']."</p>";
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