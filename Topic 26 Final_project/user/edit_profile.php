<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['User']['role_type']) == 'User') {
  header("location:../index_01.php?msg=Sorry! Only Registered User can Access It !...&color=red");
}
require_once("../require/connection.php");
?>
<html>

<head>
  <style>
    form {
      box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.2s ease-in-out;
      border-radius: 20px;
    }

    form:hover {
      box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border-radius: 5px;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
  <link rel="stylesheet" href="style.css">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <?php
  if (isset($_REQUEST['msg'])) {
  ?>
    <div class="text-success text-center" style="font-family: times">
      <?php echo $_REQUEST['msg']; ?>
    </div>
  <?php
  }
  ?>

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
  <form method="POST" action="edit_profile_process.php" enctype="multipart/form-data">
    <table cellpadding="10px" cellspacing="0px" style="background: skyblue;width: 100%;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px">

      <tr>
        <td>Firstname:</td>
        <td><input type="text" name="first_name" id="first_name" required placeholder="Enter Your Firstname" style="border-radius: 5px;width: 100%;  padding: 6px;" value="<?php echo $row['first_name'] ?>"></td>
      </tr>
      <tr>
        <td>Lastname:</td>
        <td><input type="text" name="last_name" id="last_name" required placeholder="Enter Your Lastname" style="border-radius: 5px;width: 100%; padding: 6px;" value="<?php echo $row['last_name'] ?>"></td>

      </tr>
      <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" id="male" value="Male" checked class="from-control" value="<?php echo $row['gender'] ?>">Male

          <input type="radio" name="gender" id="female" value="Female" value="<?php echo $row['gender'] ?>"> Female
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" id="email" required placeholder="Enter Your Email" style="border-radius: 5px;width: 100%; padding: 6px;" value="<?php echo $row['email'] ?>"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="text" name="password" id="password" required placeholder="Enter Your Password" style="border-radius: 5px;width: 100%;padding: 5px;" value="<?php echo $row['password'] ?>"></td>
      </tr>
      <tr>
        <td>Date-Of-Birth</td>
        <td><input type="date" name="dob" id="dob" style="border-radius: 5px;width: 100%;padding: 5px;" value="<?php echo $row['date_of_birth'] ?>"></td>
      </tr>
      <tr>
        <td>Image</td>
        <td><input type="file" name="upload" id="upload" accept="" value=""></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input type="textarea" name="address" value=" <?php echo trim($row['address']) ?>" id="address" cols="20" rows="3" style="border-radius: 5px; width: 100%; "></td>
      </tr>
      <tr>
        <input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">

        <td colspan="5" align="center"><input type="submit" name="edit_profile" class="btn btn-info" value="Update Profile"></td>
      </tr>
    </table>
  </form>
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
</body>

</html>