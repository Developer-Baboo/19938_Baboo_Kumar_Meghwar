<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin']['role_type']) == 'Admin') {
    header("location:../index_01.php?msg=Sorry! Only Admin can Access It !...&color=red");
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

</body>

</html>


<div class="dropdown">
    <a class="btn btn dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
        echo $row['first_name'] . " " . $row['last_name'];
        ?>
    </a>

    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item bg-dark" href="edit_profile.php"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
        <li><a class="dropdown-item bg-dark" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>
&nbsp;
<img src="../General/picture/<?php echo $row['image'] ?>" width="50px">
</div>

</nav>