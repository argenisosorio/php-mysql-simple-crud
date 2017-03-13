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
                    <h1 class="page-header">Add record</h1>
                </div>
            </div>

            <?php
            if (isset($_POST['submitted'])) {
                $sql = sprintf("INSERT INTO `records` ( `title`,`content`) VALUES ('%s','%s') ",$_POST['title'],$_POST['content']);
                $exec = mysqli_query($con,$sql) or die(mysqli_error());

                if ($exec) {
                    echo "<h4>Added</h4>";
                }
            }
            ?>

            <form method='POST'> 
                Title:<br /><input type='text' name='title'/>
                <br />
                <br />
                Content:<br /><textarea name='content'></textarea>
                <br />
                <br />
                <input type='submit' value='Save' /><input type='hidden' value='1' name='submitted' />
                <input type='reset' value='Reset' />
            </form>

        </div>
    </div>

</div>

<?php
include("includes/footer.php");
?>

</body>
</html>