<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin'])) {
  header("location:../index_01.php?msg=Sorry! Only Admin can Access It !...&color=red");
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

    <!-- Users Feedback Table -->
    <div class="col-lg-9 col-md-9">
      <center>
        <h1 class="text-primary font-weight-bold animated fadeInDown" style="font-family: 'Courier New', Courier, monospace; font-size: 48px;">ALL USERS FEEDBACKS</h1>
      </center>
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
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
    <!-- User Feedback Table End Here -->
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