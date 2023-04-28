<?php
require_once("Include/connection.php");
$query = "SELECT * FROM `posts`";
$result = mysqli_query($connection, $query);
if ($result->num_rows > 0) {
    while ($post = mysqli_fetch_assoc($result)) {
?>


        <div class="card text-center " style="margin-top: 20px;" >
            <div class="card-header">
                <?php echo $post['post_title']; ?>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <?php echo $post['post_description']; ?>
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////// -->
    <?php
    }
} else {
    ?>
    <div id="post_div">
        <h5> No Posts Available </h5>
    </div>
<?php
}
?>
<!doctype html>
<html>

<head>
    <title>My POSTS</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>



    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>