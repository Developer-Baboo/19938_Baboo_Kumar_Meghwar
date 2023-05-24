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
  <title> .: Online Blogging Application :. </title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="row">
    <!-- SIDE BAR START -->
    <?php require_once("../General/side_bar.php");?>
    <!-- Side Bar End Here -->

    <!-- Follower Table Start -->
    <div class="col-lg-8 col-md-8">
      <center>

        <h1 class="text-primary font-weight-bold animated fadeInDown" style="font-family: 'Courier New', Courier, monospace; font-size: 48px;">ALL Followers</h1>
      </center>
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead class="thead-dark">
            <tr>
              <th>Follow ID</th>
              <th>Follower ID</th>
              <th scope="col">Blog Following ID</th>
              <th scope="col">STATUS</th>
              <th scope="col">Created At</th>
              <th scope="col">Updated At</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <td>1</td>
              <td>1</td>
              <td>Followed</td>
              <td>2023-9-1</td>
              <td>2023-9-8</td>
            </tr>
            <tr>
              <th>1</th>
              <td>1</td>
              <td>1</td>
              <td>Unfollowed</td>
              <td>2023-9-1</td>
              <td>2023-9-8</td>
            </tr>
            <tr>
              <th>1</th>
              <td>1</td>
              <td>1</td>
              <td>Unfollowed</td>
              <td>2023-9-1</td>
              <td>2023-9-8</td>
            </tr>
            <tr>
              <th>3</th>
              <td>2</td>
              <td>1</td>
              <td>Unfollowed</td>
              <td>2023-9-1</td>
              <td>2023-9-8</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Follower Table End Here -->
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
</body>

</html>