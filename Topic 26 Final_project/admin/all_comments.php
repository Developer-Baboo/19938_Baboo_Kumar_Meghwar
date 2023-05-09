<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin']['role_type']) =='Admin') {
    header("location:../index_01.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- datab table  -->
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <!-- data table  -->
  <title> .::ONLINE BLOGGING APPLICATION::. </title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="row">
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
              <a href="#" class="nav-link text-white">
                <img src="../images/icons/category.svg" width="10%" height="10%">
                MANAGE CATEGORIES
              </a>
            </li>
            <li>
              <a href="./all_users.php" class="nav-link text-white">
                <img src="../images/icons/user.svg" width="10%" height="10%">
                MANAGE USERS
              </a>
            </li>
            <li>
              <i class="fas fa-comment"></i>
              <a href="./all_comments.php" class="nav-link text-white">
                <img src="../images/icons/comment.svg" width="10%" height="10%">
                MANAGE COMMENTS
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
    <!-- /END SIDE BAR/ -->
    <div class="col-lg-9 col-md-9">
      <center>
        <h1>ALL USERS COMMENTS</h1>
      </center>
      <div class="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Comment ID</th>
              <th>Post ID</th>
              <th>User ID</th>
              <th>Comment</th>
              <th>Status</th>
              <th>Created At</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>Your post content is awesome</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Active
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    InActive
                  </label>
                </div>
              </td>
              <td>2023-9-1</td>
            </tr>
            <tr>
              <td>2</td>
              <td>1</td>
              <td>2</td>
              <td>Thanks for sharing this information</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Active
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    InActive
                  </label>
                </div>
              </td>
              <td>2023-9-3</td>
            </tr>
            <tr>
              <td>3</td>
              <td>2</td>
              <td>1</td>
              <td>Great post!</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Active
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    InActive
                  </label>
                </div>
              </td>
              <td>2023-9-5</td>
            </tr>
            <tr>
              <td>4</td>
              <td>2</td>
              <td>3</td>
              <td>Very helpful article</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Active
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    InActive
                  </label>
                </div>
              </td>
              <td>2023-9-7</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Footer Start-->

  <?php require_once("../General/footer.php") ?>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        paging: true,
        lengthChange: true,
        lengthMenu: [10, 25, 50, 75, 100],
        searching: true,
      });
    });
  </script>
</body>

</html>