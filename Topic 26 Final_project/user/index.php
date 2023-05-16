<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['User']['role_type']) == 'User') {
    header("location:../index_01.php?msg=Sorry! Only Registered User can Access It !...&color=red");
}
?>
<?php
include("../require/connection.php");
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>.::Online Blogging Application::.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link rel="stylesheet" href="../bootstrap-5.0.2-examples/assets/dist/css/bootstrap.min.css">
    <link href="sidebars.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap-5.0.2-examples/sidebars/sidebars.css">
</head>

<body>
    <?php
        if (isset($_GET["user_id"])) {
        $user_id = $_GET["user_id"];
        $query = "SELECT * FROM user WHERE user_id = $user_id";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
    ?>
    <div>
        <?php
             echo $row['first_name'] . " " . $row['last_name'];
        ?>
    </div>
    <a href="edit_profile.php?user_id=<?php echo $row['user_id']?>">Edit Profile</a></li>
    <a href="../logout.php"> Logout</a>
    <img src="../images/<?php echo $row['user_image'] ?>" width="50px" style="border-radius: 50px">
    <?php 
} 

?>
</div>

</nav>


</body>
</html>