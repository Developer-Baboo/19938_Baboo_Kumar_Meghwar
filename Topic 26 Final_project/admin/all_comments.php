<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin'])) {
  header("location:../index.php?msg=Sorry! Only Admin can Access It !...&color=red");
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
    <?php require_once("../General/side_bar.php");?>
    <!-- /END SIDE BAR/ -->

    <!-- Comment Details Table -->
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
    <!-- Comment Details Table End -->
  </div>
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