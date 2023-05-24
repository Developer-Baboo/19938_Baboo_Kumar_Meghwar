<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (isset($_SESSION['Admin'])) {
  header("location:./admin/admin_dashboard.php");
} else if (isset($_SESSION['User'])) {
  header("location:index.php");
}
?>


<?php
require_once("FPDF/fpdf.php");
include("require/connection.php");

if (isset($_REQUEST['register'])) {
  if (isset($_FILES['upload'])) {
    $file = $_FILES['upload'];
    $file_name = "profile_image_" . time() . substr($file['name'], strpos($file['name'], "."));

    if (move_uploaded_file($file['tmp_name'], "images/" . $file_name)) {
      $date = date('Y-m-d', strtotime($_REQUEST['dob']));
      date_default_timezone_set("Asia/Karachi");
      $current_time = date('Y-m-d h:i:s');

      $query1 = "INSERT into user (first_name, last_name, email, password, gender, date_of_birth, user_image, address, created_at) VALUES ('" . $_REQUEST['first_name'] . "','" . $_REQUEST['last_name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['password'] . "','" . $_REQUEST['gender'] . "','" . $date . "', '" . $file_name . "', '" . $_REQUEST['address'] . "', '" . $current_time . "')";

      $result1 = mysqli_query($connection, $query1);

      if ($result1) {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont("times");
        $pdf->cell(0, 10, $_REQUEST['first_name'], 1, 1, "", 0);
        $pdf->cell(0, 10, $_REQUEST['last_name'], 1, 1, "", 0);
        $pdf->cell(0, 10, $_REQUEST['email'], 1, 1, "", 0);
        $pdf->cell(0, 10, $_REQUEST['password'], 1, 1, "", 0);
        $pdf->cell(0, 10, $_REQUEST['gender'], 1, 1, "", 0);
        $pdf->cell(0, 10, $date, 1, 1, "", 0);
        $pdf->cell(0, 10, $_REQUEST['address'], 1, 1, "", 0);
        $pdf->Output();
      }
    }
  }
}
?>

<!Doctype html>
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
  <title>Register Here</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Client Side Validation Start -->
  <script type="text/javascript">
    function validation() {
      var first_name = document.getElementById('first_name').value;
      var last_name = document.getElementById('last_name').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      // alert(password)

      var male = document.getElementById('male').checked;
      var female = document.getElementById('female').checked;
      var dob = document.getElementById('dob').value;
      // console.log(dob);

      var address = document.getElementById('address').value;


      // alert(upload);
      /*Pattern for client side validation*/
      var patt_first_name = /^[A-Z]{1}[a-z]{2,}$/;
      var result_first_name = patt_first_name.test(first_name);
      var result_last_name = patt_first_name.test(last_name);

      var pattern_email = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
      var result_email = pattern_email.test(email);

      var pattern_password = /^[a-z]{3}[0-9]{1,10}$/;
      var result_password = pattern_password.test(password);

      var pattern_date_of_birth = /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/
      var pattern_dob = pattern_date_of_birth.test(dob);

      var pattern_address = /^[#.0-9a-zA-Z\s,-]+$/;
      var pattern_address = pattern_address.test(address);


      /*First name*/
      var flag = true;

      if (first_name == '') {

        flag = false;
        document.getElementById('msg_first_name').innerHTML = "*Please Enter First Name";
      } else if (!result_first_name) {
        flag = false;
        document.getElementById('msg_first_name').innerHTML = "Example: Ali";
      } else {
        flag = true;
        document.getElementById('msg_first_name').innerHTML = "";
      }


      /*Last name*/
      if (last_name == '') {
        flag = false;
        document.getElementById('msg_last_name').innerHTML = "*Please Enter Last Name";
      } else if (!result_last_name) {
        flag = false;
        document.getElementById('msg_last_name').innerHTML = "Example: Khan";
      } else {
        flag = true;
        document.getElementById('msg_last_name').innerHTML = "";
      }

      /*Email*/
      if (email == '') {
        flag = false;
        document.getElementById('msg_email').innerHTML = "*Please Enter Correct Email";
      } else if (!result_email) {
        flag = false;
        document.getElementById('msg_email').innerHTML = "Example: ali@gmail.com";
      } else {
        flag = true;
        document.getElementById('msg_email').innerHTML = "";
      }

      /*Password*/

      if (password == '') {
        flag = false;
        document.getElementById('msg_password').innerHTML = "*Please Enter Correct Password";
      } else if (!result_password) {
        flag = false;
        document.getElementById('msg_password').innerHTML = "Example: Ali123";
      } else {
        flag = true;
        document.getElementById('msg_password').innerHTML = "";
      }

      /*Gender*/
      if (!(male || female)) {
        flag = false;
        document.getElementById('msg_gender').innerHTML = "*Please Specify Gender";
      } else {
        flag = true;
        document.getElementById('msg_gender').innerHTML = "";
      }

      /*date of birth*/

      if (dob == '') {
        flag = false;
        document.getElementById('msg_dob').innerHTML = "*Please Enter Date-Of-Birth";
      } else if (!pattern_dob) {
        flag = false;
        document.getElementById('msg_dob').innerHTML = "Example: 2021-10-20";
      } else {
        flag = true;
        document.getElementById('msg_dob').innerHTML = "";
      }
      /*Address*/

      if (address == '') {
        flag = false;
        document.getElementById('msg_address').innerHTML = "*Please Enter Your Address";
      } else if (!pattern_address) {
        flag = false;
        document.getElementById('msg_address').innerHTML = "Example: Home#30: Form Mithi Tharparkar ";
      } else {
        flag = true;
        document.getElementById('msg_address').innerHTML = "";
      }

    }
  </script>
  <!-- Client Side Validation End -->
</head>

<body>

  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #5DADE2">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">
        <img src="images/logo.png" style="width: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/politics.php">Politics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/buisness.php">Buisness</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/health.php">Health</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/Sport.php">Sport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/about_us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact Us</a>
          </li>
        </ul>
        <button class="btn btn-outline-secondary" class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin" style="margin-right: 10px;">Login</button>
      </div>
    </div>
  </nav>

  <center>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="display-6">Register Here</h1>
          <hr>
        </div>
      </div>
    </div>

    <form style="width:50%; margin-bottom: 20px;" method="POST" action="#" enctype="multipart/form-data">

      <table cellpadding="10px" cellspacing="0px" style="background: skyblue;width: 100%;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px">
        <tr>
          <td>Firstname:<span>*</span></td>
          <td><input type="text" name="first_name" id="first_name" required placeholder="Enter Your Firstname" style="border-radius: 5px;width: 100%;  padding: 6px;"></td>
          <td><span id="msg_first_name"></span></td>
        </tr>
        <tr>
          <td>Lastname:<span>*</span></td>
          <td><input type="text" name="last_name" id="last_name" required placeholder="Enter Your Lastname" style="border-radius: 5px;width: 100%; padding: 6px;"></td>
          <td><span id="msg_last_name"></span></td>

        </tr>
        <tr>
          <td>Gender:<span>*</span></td>
          <td><input type="radio" name="gender" id="male" value="Male" class="from-control"> Male
            <input type="radio" name="gender" id="female" value="Female"> Female
          </td>
          <td><span id="msg_gender"></span></td>
        </tr>
        <tr>
          <td>Email<span>*</span></td>
          <td><input type="email" name="email" id="email" required placeholder="Enter Your Email" style="border-radius: 5px;width: 100%; padding: 6px;"></td>
          <td><span id="msg_email"></span></td>
        </tr>
        <tr>
          <td>Password<span>*</span></td>
          <td><input type="password" name="password" id="password" required placeholder="Enter Your Password" style="border-radius: 5px;width: 100%;padding: 5px;"></td>
          <td><span id="msg_password"></span></td>

        </tr>
        <tr>
          <td>Date-Of-Birth<span>*</span></td>
          <td><input type="date" name="dob" id="dob" style="border-radius: 5px;width: 100%;padding: 5px;"></td>
          <td><span id="msg_dob"></span></td>

        </tr>
        <tr>
          <td>Image<span>*</span></td>
          <td><input type="file" name="upload" id="upload" accept=""></td>
          <td><span id="msg_upload"></span></td>

        </tr>
        <tr>
          <td>Address<span>*</span></td>
          <td><textarea name="address" id="address" cols="20" rows="3" style="border-radius: 5px;width: 100%;"></textarea> </td>
          <td><span id="msg_address"></span></td>


        </tr>

        <tr>
          <td colspan="5" align="center"><input type="submit" name="register" value="Register" class="btn btn-info" onclick="validation()"> </td>
        </tr>

        <!-- Click To login <a href="login.php">Click Here</a> -->
      </table>
    </form>


    <!-- Login Model Here -->
    <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Login Here</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form method="POST" action="login_process.php" class="row g-3 needs-validation" novalidate>
              <div class="col-md-12 position-relative">
                <label for="validationTooltipUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                  <input type="email" name="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
              <div class="col-md-12 position-relative">
                <label for="validationTooltipPassword" class="form-label">Password</label>
                <div class="input-group has-validation">
                  <input name="password" type="password" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                    Password Must 8 to 12 Character
                  </div>
                </div>
              </div>
              <div class="col-12">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button name="login" id="login" class="btn btn-primary" type="submit">Login Here</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- login model end -->
        <!-- Modal Contact Us -->
    
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Feedback Here</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="feedback_process.php" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Name</label>
                            <div class="input-group has-validation">
                                <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                                <input type="text" name="name" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipPassword" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <input name="email" type="email" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Password Enter Valid User Email
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-md-12 position-relative">
                                <label for="validationTooltipPassword" class="form-label">Feedback</label>
                                <div class="input-group has-validation">
                                    <!-- <input name="feedback" type="password" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required> -->
                                    <textarea class="form-control" name="feedback" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required cols="10" rows="1"></textarea>
                                    <div class="invalid-tooltip">
                                        Please Enter Feedback in Proper Way
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="feedback_button" id="login" class="btn btn-primary" type="submit">Send Feedback</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Contact Us End -->


  </center>
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

  <script type="text/javascript" src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>