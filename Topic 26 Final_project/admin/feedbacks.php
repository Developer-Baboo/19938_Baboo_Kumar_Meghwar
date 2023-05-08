<!DOCTYPE html>
<html>

<head>
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
                <a class="dropdown-item" href="#"><img src="../images/icons/logout.svg" width="10%" height="10%"> Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </main>
    </div>
    <!-- /END SIDE BAR/ -->
    <div class="col-lg-9 col-md-9">
      <center>
        <h1 class="text-primary font-weight-bold animated fadeInDown" style="font-family: 'Courier New', Courier, monospace; font-size: 48px;">ALL USERS FEEDBACKS</h1>
      </center>
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">FEEDBACK ID</th>
              <th scope="col">USER ID</th>
              <th scope="col">USER EMAIL</th>
              <th scope="col">FEEDBACK</th>
              <th scope="col">CREATED AT</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>1</td>
              <td>baboo@gmail.com</td>
              <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
              <td>2023-9-1</td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>1</td>
              <td>baboo@gmail.com</td>
              <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
              <td>2023-9-1</td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>1</td>
              <td>baboo@gmail.com</td>
              <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
              <td>2023-9-1</td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>1</td>
              <td>baboo@gmail.com</td>
              <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</td>
              <td>2023-9-1</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Footer Start-->
  <footer class="footer-main bg-dark text-light">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-8">
          <h5 class="mb-3">About Us</h5>
          <center>
            <p class="text-white" style="text-align:justify;">We are an online blogging application developed by Developer Baboo Kumar 19938 Intern @ HIST Jamshoro. Our goal is to provide a platform for people to share their thoughts and ideas with the world.</p>
          </center>
        </div>
        <div class="col-md-4">
          <h5 class="mb-3">Contact Us</h5>
          <ul class="list-unstyled">
            <li>Address: 123 Main St, Anytown USA</li>
            <li>Phone: (555) 555-5555</li>
            <li>Email: info@onlineblogging.com</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bg-secondary text-light py-3">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 text-center text-md-start">
            <p class="mb-0">&copy; <script>
                document.write(new Date().getFullYear())
              </script> All rights reserved | Online Blogging Application</p>
          </div>
          <div class="col-md-6 text-center text-md-end text-white">
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="#" style="color:white; text-decoration: none;">Privacy Policy</a></li>
              <li class="list-inline-item">·</li>
              <li class="list-inline-item"><a href="#" style="color:white; text-decoration: none; ">Terms &amp; Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>