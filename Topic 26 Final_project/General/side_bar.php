<?php
// session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin'])) {
  header("location:../index_01.php?msg=Sorry! Only Admin can Access It !...&color=red");
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>.::Online Blogging Application::.</title>
</head>

<body>
  <?php
  // include("../require/connection.php");
  ?>
  <!-- SIDE BAR START -->
  <div class="col-lg-3 col-md-3">
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

            <a href="./admin_dashboard.php" class="nav-link text-white">
              <img src="../images/icons/dashboard.svg" width="10%" height="10%">
              Admin Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a href="./posts.php" class="nav-link active" aria-current="page">
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
              Manage Users
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="background-color: #5DADE2;">
              <li><a class="dropdown-item" href="./approved_users.php"> <img src="../images/icons/approvevd_users.svg" width="10%" height="10%"> Approved Users</a></li>
              <li><a class="dropdown-item" href="pending_users.php"> <img src="../images/icons/pending.svg" width="10%" height="10%">Pending Users</a></li>
              <li>
                <i class="fas fa-angle-right"></i>
                <a class="dropdown-item" href="rejected_users.php"><img src="../images/icons/rejected_users.svg" width="10%" height="10%">Rejected Users</a>
              </li>
            </ul>
          </div>
          <li>
            <i class="fas fa-comment"></i>
            <a href="./all_comments.php" class="nav-link text-white">
              <img src="../images/icons/comment.svg" width="10%" height="10%">
              MANAGE Comment
            </a>
          </li>
          <li>
            <a href="./feedbacks.php" class="nav-link text-white">
              <img src="../images/icons/feedback.svg" width="10%" height="10%">
              MANAGE FEEDBACKS
            </a>
          </li>
          <li>
            <a href="./follower.php" class="nav-link text-white">
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
            <img src="../images/<?php echo $_SESSION['Admin']['user_image']; ?>" width="32px" height="32" class="rounded-circle me-2">
            <strong><?php echo $_SESSION['Admin']['first_name'] . ' ' . $_SESSION['Admin']['last_name'] ?></strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="background-color: #5DADE2;">
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
  <!-- /END SIDE BAR/ -->

  <script src="../bootstrap-5.0.2-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../bootstrap-5.0.2-examples/sidebars/sidebars.js"></script>
</body>

</html>