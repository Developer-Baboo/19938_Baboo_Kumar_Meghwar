<?php
session_start();
require_once("../require/connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//require 'PHPMailer/src/Exception.php';
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin'])) {
  header("location:../index.php?msg=Sorry! Only Admin can Access It !...&color=red");
}
?>

<!-- Approve User Code -->
<?php
if (isset($_GET['approve'])) {
  $user_id = $_GET['approve'];
  $fetchQuery1 = "SELECT * FROM user WHERE user_id = $user_id";
  $result1 = mysqli_query($connection, $fetchQuery1);
  $row1 = mysqli_fetch_assoc($result1);
  $email = $row1['email'];
  /**
   * This example shows settings to use when sending via Google's Gmail servers.
   * This uses traditional id & password authentication - look at the gmail_xoauth.phps
   * example to see how to use XOAUTH2.
   * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
   */
  //Import PHPMailer classes into the global namespace



  //Create a new PHPMailer instance
  $mail = new PHPMailer();
  //Tell PHPMailer to use SMTP
  $mail->isSMTP();

  //Enable SMTP debugging
  // SMTP::DEBUG_OFF = off (for production use)
  // SMTP::DEBUG_CLIENT = client messages
  // SMTP::DEBUG_SERVER = client and server messages
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
  //Set the hostname of the mail server
  $mail->Host = 'smtp.gmail.com';
  // use
  // $mail->Host = gethostbyname('smtp.gmail.com');
  // if your network does not support SMTP over IPv6
  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port = 587;
  //Set the encryption mechanism to use - STARTTLS or SMTPS
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;
  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = 'babookumar15@gmail.com';
  //Password to use for SMTP authentication
  $mail->Password = 'aawgarezfgobzaoh';


  //Set who the message is to be sent from
  $mail->setFrom('babookumar15@gmail.com', 'Developer Baboo');
  //Set an alternative reply-to address
  $mail->addReplyTo('babookumar15@gmail.com', 'Developer Baboo');
  //Set who the message is to be sent to
  $mail->addAddress($email, 'Developer Baboo');
  //Set the subject line
  $mail->Subject = 'Account Approval Message';

  $query = "SELECT * FROM user WHERE user_id = $user_id";
  $result = mysqli_query($connection, $query);

  if ($row = mysqli_fetch_assoc($result)) {
    //Read an HTML message body
    $msg1 = "<div style='background-color: #f1f1f1; padding: 20px; border-radius: 5px;'>
            <h2 style='color: green; text-align: center;'>Congratulations, Dear!</h2>
            <p>Your account has been approved successfully. Now you can login to your account.</p>
            <h3 style='color: #555;'>Here are your login details:</h3>
            <ul style='list-style-type: none; padding: 0;'>
                <li><strong>Email:</strong> " . $row['email'] . "</li>
                <li><strong>Password:</strong> " . $row['password'] . "</li>
            </ul>
            <p style='text-align: center; margin-top: 30px;'>Thank you for joining our platform!</p>
        </div>";

    $mail->Body = $msg1;
    $mail->IsHTML(true);
  }

  //Attach an image file (optional)
  $mail->addAttachment('../images/cong.jpg');
  $mail->addAttachment('../images/appoval_latter.txt');
  //send the message, check for errors
  if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    //echo 'Message sent!';
  }

  $fetchQuery = "SELECT * FROM user WHERE user_id = $user_id";
  $result = mysqli_query($connection, $fetchQuery);
  if (mysqli_num_rows($result) > 0) {
    // User exists, update the status to "rejected"
    $updateQuery = "UPDATE user SET is_approved = 'approved' WHERE user_id = $user_id";
    mysqli_query($connection, $updateQuery);
  }
}
// approved user code end


// reject user code
if (isset($_GET['reject'])) {
  $user_id = $_GET['reject'];
  $fetchQuery1 = "SELECT * FROM user WHERE user_id = $user_id";
  $result1 = mysqli_query($connection, $fetchQuery1);
  $row1 = mysqli_fetch_assoc($result1);
  $email = $row1['email'];
  /**
   * This example shows settings to use when sending via Google's Gmail servers.
   * This uses traditional id & password authentication - look at the gmail_xoauth.phps
   * example to see how to use XOAUTH2.
   * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
   */
  //Import PHPMailer classes into the global namespace



  //Create a new PHPMailer instance
  $mail = new PHPMailer();
  //Tell PHPMailer to use SMTP
  $mail->isSMTP();

  //Enable SMTP debugging
  // SMTP::DEBUG_OFF = off (for production use)
  // SMTP::DEBUG_CLIENT = client messages
  // SMTP::DEBUG_SERVER = client and server messages
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
  //Set the hostname of the mail server
  $mail->Host = 'smtp.gmail.com';
  // use
  // $mail->Host = gethostbyname('smtp.gmail.com');
  // if your network does not support SMTP over IPv6
  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port = 587;
  //Set the encryption mechanism to use - STARTTLS or SMTPS
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;
  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = 'babookumar15@gmail.com';
  //Password to use for SMTP authentication
  $mail->Password = 'aawgarezfgobzaoh';


  //Set who the message is to be sent from
  $mail->setFrom('babookumar15@gmail.com', 'Developer Baboo');
  //Set an alternative reply-to address
  $mail->addReplyTo('babookumar15@gmail.com', 'Developer Baboo');
  //Set who the message is to be sent to
  $mail->addAddress($email, 'Developer Baboo');
  //Set the subject line
  $mail->Subject = 'Account Rejection';
  //Read an HTML message body
  $query = "SELECT * FROM user WHERE user_id = $user_id";
  $result = mysqli_query($connection, $query);

  if ($row = mysqli_fetch_assoc($result)) {
    //Read an HTML message body
    $msg1 = "<div style='background-color: #f1f1f1; padding: 20px; border-radius: 5px;'>
            <h2 style='color: red; text-align: center;'>Account Rejection Notification</h2>
            <p>Dear User,</p>
            <p>We regret to inform you that your account has been rejected by the admin.</p>
            <p>Please contact our support team for further assistance.</p>
            <p style='text-align: center; margin-top: 30px;'>Thank you.</p>
        </div>";

    $mail->Body = $msg1;
    $mail->IsHTML(true);
  }

  //Attach an image file (optional)
  $mail->addAttachment('../images/rej.png');
  $mail->addAttachment('../images/rejection_latter.txt');
  //send the message, check for errors
  if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    //echo 'Message sent!';
  }
  $fetchQuery = "SELECT * FROM user WHERE user_id = $user_id";
  $result = mysqli_query($connection, $fetchQuery);
  if (mysqli_num_rows($result) > 0) {
    // User exists, update the status to "rejected"
    $updateQuery = "UPDATE user SET is_approved = 'rejected' WHERE user_id = $user_id";
    mysqli_query($connection, $updateQuery);
  }
}
?>
<!-- Reject User Code Code End -->
<?php
// include("../require/connection.php");

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

<head>
  <style>
    .btn-approve {
      display: inline-block;
      padding: 8px 16px;
      background-color: green;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }

    .btn-reject {
      display: inline-block;
      padding: 8px 16px;
      background-color: red;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
  </style>
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
    <!-- Side Bar Start -->
    <?php require_once("../General/side_bar.php");?>
    <!-- Side Bar End -->

    <div class="col-sm-8 mt-4">
      <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD NEW USER</button>
      </div>

      <!-- <h1 class="text-center" style="color: red; font-family: times; font-size: 18px;">New Users</h1> -->
      <center>
        <h1 style="color: red; font-family: times;">All Pending Users</h1>
      </center>
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

                <div class="col-md-12">
                  <label for="inputState" class="form-label">Assign Role</label>
                  <select id="inputState" class="form-select" name="role">
                    <option selected>Role</option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                  </select>
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="register">Add Users</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Show User Table from databse -->
      <?php
      $query = "SELECT * FROM user INNER JOIN role ON role.role_id = user.role_id WHERE user.is_approved = 'Pending'";
      $result = mysqli_query($connection, $query);
      if ($result->num_rows) {
      ?>
        <center>
          <div style="margin-left: -100px; " class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <div id="response"></div>
              <thead>
                <th>Image</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>HomeTown</th>
                <th>Role</th>
                <th>Action</th>
                <th>Status</th>
                <th>Created At</th>
              </thead>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                // var_dump($row);
                if ($row['role_id'] == 2) {
                  // print_r($row);
              ?>
                  <tbody>
                    <tr>
                      <td><img src="../images/<?php echo $row['user_image'] ?>" width="50px" style="border-radius: 50px"></td>
                      <td><?php echo $row['first_name'] ?></td>
                      <td><?php echo $row['last_name'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td><?php echo $row['role_type'] ?></td>
                      <?php
                      echo "<td>
                  <a href=?approve='" . $row['user_id'] . "' class='btn-approve'>Approve</a>
              <a href=?reject='" . $row['user_id'] . "' class='btn-reject'>Reject</a>
            </td>";
                      ?>
                      <td style="color:red; font-weight: bold; ">Pending</td>
                      <td><?php echo $row['created_at'] ?></td>
                    </tr>
                  </tbody>
              <?php
                }
              }
              ?>
            </table>
          </div>
        </center>

      <?php
      }
      ?>

      <!-- Pending User Tbale End -->

    </div>
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
  </script>
</body>

</html>