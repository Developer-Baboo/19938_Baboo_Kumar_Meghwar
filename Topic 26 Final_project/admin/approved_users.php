<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin'])) {
  header("location:../index_01.php?msg=Sorry! Only Admin can Access It !...&color=red");
}
?>
<?php
include("../require/connection.php");
?>
<!-- Approve User Code -->
<?php
if (isset($_GET['user_id'])) {
  $user_id = $_GET['user_id'];
  $query = "SELECT * FROM user WHERE user_id = $user_id";
  $result = mysqli_query($connection, $query);
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

  // $fetchQuery = "SELECT * FROM user WHERE user_id = $user_id";
  // $result = mysqli_query($connection, $fetchQuery);
  // if (mysqli_num_rows($result) > 0) {
  //   // User exists, update the status to "rejected"
  //   $updateQuery = "UPDATE user SET is_approved = 'approved' WHERE user_id = $user_id";
  //   mysqli_query($connection, $updateQuery);
  // }
}
// approved user code end
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
    <!-- Side Bar  -->
    <?php require_once("../General/side_bar.php"); ?>
    <!-- Side bar End -->
    <div class="col-lg-8 col-md-8">
      <div class="row">
        <!-- Edit User Model -->
        <?php
        if (isset($_GET[''])) {
          // echo 
        }
        // $user_id = UserId;
        // $query = "SELECT * FROM user WHERE user.user_id = '" . UserId . "'";
        // $result = mysqli_query($connection, $query);
        // $row = mysqli_fetch_assoc($result)
        ?>
        <div class="col-md-12">
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 100%">
                <div class="modal-header">
                  <center>
                    <h3 style="font-family: times;color: green; text-align: center; ">Edit User Data</h3>
                  </center>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="firstname" class="form-label">Firstname</label>
                      <input type="text" class="form-control" id="firstname" name="first_name" required placeholder="Enter Your Firstname" value="<?php echo $row['first_name']; ?>">
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

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="register">Edit</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- Edit User Data Model End -->
        <!-- Approved User Table -->
        <div class="row">
          <div class="col-lg-12">
            <?php
            $query = "SELECT * FROM user INNER JOIN role ON role.role_id = user.role_id WHERE user.is_approved = 'Approved' ORDER BY `user`.`user_id` DESC ";
            $result = mysqli_query($connection, $query);
            if ($result->num_rows) {
            ?>
              <center>
                <h2>All Approved Users</h2>

                <div style="margin-left: -100px; " class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <div id="response"></div>
                    <thead>
                      <th>Image</th>
                      <th>User ID</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>DOB</th>
                      <th>Approved At</th>
                      <!-- here -->
                      <th>Status</th>
                      <th>Change Status</th>
                      <!-- Here -->
                      <th>Action</th>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                      // print_r($row);
                    ?>
                      <tbody>
                        <tr>
                          <td><img src="../images/<?php echo $row['user_image'] ?>" width="50px" style="border-radius: 50px"></td>
                          <td><?php echo $row['user_id'] ?></td>
                          <td><?php echo $row['first_name'] ?></td>
                          <td><?php echo $row['last_name'] ?></td>
                          <td><?php echo $row['gender'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['address'] ?></td>
                          <td><?php echo $row['date_of_birth'] ?></td>
                          <td><?php echo $row['created_at'] ?></td>
                          <!-- here -->
                          <td>
                            <?php
                            if ($row['is_active'] == "Active") {
                            ?>
                              <span class="btn btn-success p-2"><?php echo $row['is_active'] ?></span>
                            <?php
                            } else if ($row['is_active'] == "InActive") {
                            ?>
                              <span class="btn btn-danger p-2"><?php echo $row['is_active'] ?></span>
                            <?php
                            }
                            ?>
                          </td>
                          <td>
                            <?php
                            if ($row['is_active'] == "Active") {
                            ?>
                              <a style="padding:5px;" class="btn btn-info" href="approved_users.php?action=update&user_id=<?php echo $row['user_id'] ?>&is_active = 'InActive'">InActive</a>
                            <?php
                            } else if ($row['is_active'] == "InActive") {
                            ?>
                              <a style="padding:5px;" class="btn btn-info" href="approved_users.php?action=update&user_id=<?php echo $row['user_id'] ?>&is_active = 'active'">Active</a>
                            <?php
                            }
                            ?>
                          </td>
                          <!-- here -->
                          <td>
                            <!-- <a href="./category.php">Edit</a> -->
                            <a class="btn btn-dark" href="edit_approved_user.php?user_id=<?php echo $row['user_id'] ?>">Edit</a>
                            <!-- <a href="hh.php">hhh</a> -->
                            <!-- <a href="./a.php">Hi</a> -->
                          </td>
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
        </div>
        <!-- Approved User Data End -->
      </div>
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