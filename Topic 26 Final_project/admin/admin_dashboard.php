<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin']['role_type']) == 'Admin') {
  header("location:../index_01.php?msg=Sorry! Only Admin can Access It !...&color=red");
}
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
  <!-- Bootstrap core CSS -->
  <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="../bootstrap-5.0.2-examples/assets/dist/css/bootstrap.min.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="sidebars.css" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap-5.0.2-examples/sidebars/sidebars.css">
</head>

<body>
  <div class="row">
    <!-- Sider bar  -->
    <div class="col-lg-4 col-md-4">
      <main>
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px; background-color: #5DADE2">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="../images/logo.png" width="50px">
            <span class="fs-10">Online Blogging Application</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li>

              <a href="admin_dashboard.php" class="nav-link text-white">
                <img src="../images/icons/dashboard.svg" width="10%" height="10%">
                Admin Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a href="posts.php" class="nav-link active" aria-current="page">
                <img src="../images/icons/post.svg" width="10%" height="10%">
                MANAGE POSTS
              </a>
            </li>
            <li>
              <a href="category.php" class="nav-link text-white">
                <img src="../images/icons/category.svg" width="10%" height="10%">
                MANAGE CATEGORIES
              </a>
            </li>

            <div style="margin-left: 15px" class="dropdown">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../images/icons/user.svg" width="10%" height="10%">
                <strong>Manage Users</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="./approved_users.php"> <img src="../images/icons/setting.svg" width="10%" height="10%"> Approved Users</a></li>
                <li><a class="dropdown-item" href="pending_users.php"> <img src="../images/icons/user.svg" width="10%" height="10%">Pending Users</a></li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  <a class="dropdown-item" href="rejected_users.php"><img src="../images/icons/logout.svg" width="10%" height="10%">Rejected Users</a>
                </li>
              </ul>
            </div>



            <!-- <li>
              <a href="all_users.php" class="nav-link text-white">
                <img src="../images/icons/user.svg" width="10%" height="10%">
                MANAGE USERS
              </a>
            </li> -->
            <li>
              <a href="all_comments.php" class="nav-link text-white">
                <img src="../images/icons/comment.svg" width="10%" height="10%">
                MANAGE COMMENTS
              </a>
            </li>
            <li>
              <a href="feedbacks.php" class="nav-link text-white">
                <img src="../images/icons/feedback.svg" width="10%" height="10%">
                MANAGE FEEDBACKS
              </a>
            </li>
            <li>
              <a href="follower.php" class="nav-link text-white">
                <img src="../images/icons/thumb.png" width="10%" height="10%">
                MANAGE FOLLOWERS
              </a>
            </li>
            <li>
              <a href="./create_blog.php" class="nav-link text-white">
                <img src="../images/icons/blog.svg" width="10%" height="10%">
                MANAGE BLOGS
              </a>
            </li>
          </ul>
          <hr>
          <div style="padding-top: 100px;" class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../images/profile_image_1683396936.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Baboo Kumar</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#"> <img src="../images/icons/setting.svg" width="10%" height="10%"> Settings</a></li>
              <li><a class="dropdown-item" href="#"> <img src="../images/icons/user.svg" width="10%" height="10%"> Profile</a></li>
              <li>
                <i class="fas fa-angle-right"></i>
                <a class="dropdown-item" href="../logout.php"><img src="../images/icons/logout.svg" width="10%" height="10%"> Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </main>

    </div>
    <!-- Side bar End -->

    <!-- Dashboard body -->
    <div class="col-lg-8 col-md-8">
      <div class="row">
        <div style="margin-top: 10px" class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 border rounded shadow-lg my-5">
          Total Blogs
        </div>
        <div class="col-md-6 border rounded shadow-lg my-5">
          Total Posts
        </div>
      </div>
    </div>
    <!-- Dashboard body End -->
  </div>

  <?php require_once("../General/footer.php") ?>
  <script src="../bootstrap-5.0.2-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../bootstrap-5.0.2-examples/sidebars/sidebars.js"></script>
</body>

</html>