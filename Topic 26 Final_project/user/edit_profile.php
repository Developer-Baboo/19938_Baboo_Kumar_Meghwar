<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['User'])) {
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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <!-- edit form start -->
  <form method="POST" action="edit_profile_process.php" enctype="multipart/form-data">
    <table cellpadding="10px" cellspacing="0px" style="background: skyblue;width: 100%;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px">
      <tr>
        <td>Firstname:</td>
        <td><input type="text" name="first_name" id="first_name" required placeholder="Enter Your Firstname" style="border-radius: 5px;width: 100%;  padding: 6px;" value="<?php echo $_SESSION['User']['first_name'] ?>"></td>
      </tr>
      <tr>
        <td>Lastname:</td>
        <td><input type="text" name="last_name" id="last_name" required placeholder="Enter Your Lastname" style="border-radius: 5px;width: 100%; padding: 6px;" value="<?php echo $_SESSION['User']['last_name'] ?>"></td>

      </tr>
      <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" id="male" value="Male" class="from-control" value="<?php echo $_SESSION['User']['gender'] ?>">Male

          <input type="radio" name="gender" id="female" value="Female" value="<?php echo $_SESSION['User']['gender'] ?>"> Female
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="text" name="password" id="password" required placeholder="Enter Your Password" style="border-radius: 5px;width: 100%;padding: 5px;" value="<?php echo $_SESSION['User']['password'] ?>"></td>
      </tr>
      <tr>
        <td>Date-Of-Birth</td>
        <td><input type="date" name="dob" id="dob" style="border-radius: 5px;width: 100%;padding: 5px;" value="<?php echo $_SESSION['User']['date_of_birth'] ?>"></td>
      </tr>
      <tr>
        <td>Image</td>
        <td><input type="file" name="upload" id="upload" accept="" value=""></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input type="textarea" name="address" value=" <?php echo trim($_SESSION['User']['address']) ?>" id="address" cols="20" rows="3" style="border-radius: 5px; width: 100%; "></td>
      </tr>
      <tr>
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['User']['user_id'] ?>">
        <td colspan="5" align="center"><input type="submit" name="edit_profile" class="btn btn-info" value="Update Profile"></td>
      </tr>
    </table>
  </form>
  <!-- edit form end -->

  <!-- Footer Start -->
    <?php require_once("./General/footer.php") ?>
  <!-- Footer End -->
</body>

</html>