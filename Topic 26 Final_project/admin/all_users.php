<?php
include("../database/include/connection.php");

if (isset($_REQUEST['register'])) {

  if (isset($_FILES['upload'])) {
    $file = $_FILES['upload'];
    $file_name = "profile_image_" . time() . substr($file['name'], strpos($file['name'], "."));

    if (move_uploaded_file($file['tmp_name'], "../images/" . $file_name)) {
      $date = date('Y-m-d', strtotime($_REQUEST['dob']));
      date_default_timezone_set("Asia/Karachi");
      $current_time = date('Y-m-d h:i:s');

      $query1 = "INSERT into user (first_name, last_name, email, password, gender, date_of_birth, user_image, address, created_at) VALUES('" . $_REQUEST['first_name'] . "','" . $_REQUEST['last_name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['password'] . "','" . $_REQUEST['gender'] . "','" . $date . "', '" . $file_name . "', '" . $_REQUEST['address'] . "', '" . $current_time . "')";

      $result1 = mysqli_query($connection, $query1);
      if ($result1) {
?>
        <script type="text/javascript">
          alert('User Added Successfully!...');
        </script>

<?php
      }
    }
  }
}
?>
<!DOCTYPE html>
<html>
<a href="../images/"></a>

<head>
  <title> .: Online Blogging Application :. </title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

  <div class="col-sm-9 mt-4">
    <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD USERS</button>
      <a href="#"><button class="btn btn-secondary">User Excel Data</button></a>
    </div>
    <div class="text-center" style="color: red; font-family: times; font-size: 18px;">New Users</div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="width: 100%">
          <div class="modal-header">
            <h3 style="margin-top:40px;font-family: times;color: green"> Add User </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
              <div class="col-md-6">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="first_name" required placeholder="Enter Your Firstname">
              </div>
              <div class="col-md-6">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="last_name" required placeholder="Enter Your Lastname">
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Gender</label>
                <select id="inputState" class="form-select" name="gender">
                  <option selected>Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-md-6">

                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter Your Email">
              </div>

              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Enter Your Password">
              </div>

              <div class="col-md-6">
                <label for="date" class="form-label">Date-of-Birth</label>
                <input type="date" class="form-control" name="dob" id="date">
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Upload Profile</label>
                <input type="file" class="form-control" name="upload" id="image">
              </div>
              <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Address">
              </div>
              <div class="col-12">

              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="register">Add Users</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <?php
    $query = "SELECT * FROM user,role WHERE role.`role_id`= user.`role_id`";
    $result = mysqli_query($connection, $query);
    if ($result->num_rows) {
    ?>
      <center>
        <table style="border: 4px solid red;" style="width:100%">
          <div id="response"></div>
          <thead>
            <th>Image</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>HomeTown</th>
            <th>Role</th>
            <th>Is Appove</th>
            <th>Status</th>
            <th>Created At</th>
            <!-- <th>Updated At</th> -->
          </thead>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tbody>
              <tr>
                <td><img src="../images/<?php echo $row['user_image'] ?>" width="50px" style="border-radius: 50px"></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['role_type'] ?></td>
                ?>
                <?php
                ?>
                <td>
                  <select class=" form-control bg-info text-light" onchange="is_approve(this)" class="permission" user_id=<?php echo $row['user_id']; ?>>

                    <option value="Pending">Pending</option>
                    <option value="Approved">Approve</option>
                    <option value="Rejected">Reject</option>

                  </select>

                </td>
                <td><button class="btn btn-primary" onclick="done()">Done</button></td>
                <td><?php echo $row['created_at'] ?></td>
              </tr>
            </tbody>
          <?php
          }
          ?>
        </table>
      </center>

    <?php
    }
    ?>

  </div>
  <footer>

    <div class="footer-main footer-bg">
      <div class="footer-bottom-area footer-bg">
        <div class="container">
          <div class="footer-border">
            <div class="row d-flex align-items-center">
              <div class="col-xl-12 ">
                <div class="footer-copy-right text-center">
                  <p>
                    Copyright &copy;<script>
                      document.write(new Date().getFullYear());
                    </script> All rights reserved | Online Blogging Application Developed by Developer Baboo Kumar 19938 Intern @ HIST Jamshoro
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End-->
  </footer>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
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