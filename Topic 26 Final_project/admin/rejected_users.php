<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin']['role_type']) == 'Admin') {
  header("location:../index_01.php");
}
?>
<?php
include("../require/connection.php");
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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <title> .: Online Blogging Application :. </title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="row">
    <!-- Side Bar -->
    <?php require_once("../General/side_bar.php");?>
    <!-- Side Bar End -->

    <!-- Rejected Use Table -->
    <div class="col-sm-8 mt-4">
      <?php
      $query = "SELECT * FROM user INNER JOIN role ON role.role_id = user.role_id WHERE user.is_approved = 'Rejected' ORDER BY `user`.`user_id` DESC ";
      $result = mysqli_query($connection, $query);
      if ($result->num_rows) {
      ?>
        <center>
          <h1>All Rejected Users </h1>
          <div style="margin-left: -100px; " class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <div id="response"></div>
              <thead>
                <th>Image</th>
                <th>User ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>HomeTown</th>
                <th>Rejected At</th>
                <!-- <th>Updated At</th> -->
              </thead>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <tbody>
                  <tr>
                    <td><img src="../images/<?php echo $row['user_image'] ?>" width="50px" style="border-radius: 50px"></td>
                    <td><?php echo $row['user_id'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                  </tr>
                </tbody>
              <?php
              }
              ?>
            </table>
          </div>
        </center>

      <?php
      }
      ?>
    </div>
    <!-- Rejected User Table End-->
  </div>
  <?php require_once("../General/footer.php") ?>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        paging: true,
        lengthChange: true,
        lengthMenu: [10, 25, 50, 75, 100],
        searching: true,
      });
    });
    var user_id = "";
    function is_approve(obj) {
      status = obj.value;
      user_id = obj.getAttribute("user_id");
    }
    function done() {
      var ajax;

      if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest();
      } else {
        ajax = new ActiveXObject('Microsoft.XMLHTTP')
      }
      ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
          var data = ajax.responseText;
          document.getElementById("response").innerHTML = data;
          location.reload();
        }
      }
      ajax.open('POST', 'users.php');
      ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      ajax.send('action=permission&status=' + status + '&user_id=' + user_id);
    }
  </script>
</body>

</html>