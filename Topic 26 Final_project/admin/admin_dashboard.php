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
  <!-- Bootstrap core CSS -->
  <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

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
  <?php
  if (isset($_GET["user_id"])) {
    $user_id = $_GET["user_id"];
    $query = "SELECT * FROM user WHERE user_id = $user_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
  ?>
  <?php
  }
  ?>
  <div class="row">
    <!-- Sider bar  -->
    <?php require_once("../General/side_bar.php");?>
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

  <script>
    // Get all the navigation links
    var navLinks = document.querySelectorAll("#navList .nav-link");

    // Add a click event listener to each navigation link
    navLinks.forEach(function(navLink) {
      navLink.addEventListener("click", function(event) {
        // Remove the "active" class from all navigation links
        navLinks.forEach(function(link) {
          link.classList.remove("active");
        });

        // Assign the "active" class to the clicked navigation link
        this.classList.add("active");
      });
    });
  </script>
</body>

</html>