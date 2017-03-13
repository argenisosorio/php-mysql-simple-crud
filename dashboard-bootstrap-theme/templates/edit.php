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
                    <h1 class="page-header">Edit</h1>
                </div>
            </div>

            <?php
            if (isset($_GET['id']) ) { 
                $id = (int) $_GET['id'];
                if (isset($_POST['submitted'])) {
                    $sql = sprintf("UPDATE `records` SET  `title` =  '%s', `content` = '%s' WHERE `id` = '%s' ",$_POST['title'],$_POST['content'],$id);
                    $exec = mysqli_query($con, $sql) or die(mysqli_error());
                    if($exec) {
                        echo "<h4>Edited register</h4>";
                    }
                    else {
                        echo "<h4>Nothing changed</h4>";
                    }
                }
            $row = mysqli_fetch_array (mysqli_query($con,"SELECT * FROM `records` WHERE `id` = '$id' "));
            ?>

            <form action='' method='POST'>
                <p><b>Title:</b><br /><input type='text' name='title' value='<?php echo stripslashes($row['title']); ?>' />
                <p><b>Content:</b><br /><textarea name='content'><?php echo stripslashes($row['content']); ?> </textarea>
                <p><input type='submit' value='Save' /><input type='hidden' value='1' name='submitted' />
                <input type='reset' value='Reset' />
            </form>

            <?php
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