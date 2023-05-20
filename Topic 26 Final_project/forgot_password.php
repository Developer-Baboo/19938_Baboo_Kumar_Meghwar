<!DOCTYPE html>
<html>
<head>
  <title> .::Online Blogging Application::.</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <?php
  session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  //use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  require_once("require/connection.php");

  if (isset($_POST['forgot'])) {
    $email = $_REQUEST['email'];
    $query = "SELECT * FROM user WHERE user.email = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (!$result) {
      echo "Query execution failed: " . mysqli_error($connection);
    } else {
      $row = mysqli_fetch_assoc($result);
      if ($row) {
          $retrievedEmail = $row['email'];
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
          $mail->addAddress('babookumar15@gmail.com', 'Developer Baboo');
          //Set the subject line
          $mail->Subject = 'Forgot password';
        require_once("require/connection.php");
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($connection, $query);

        if ($result && $row = mysqli_fetch_assoc($result)) {
          //Read an HTML message body
          //Read an HTML message body
          $msg1 = "<div style='font-family: Arial, sans-serif; font-size: 14px; background-color: #f5f5f5; padding: 20px; border-radius: 5px;'>
          <p style='color: #333;'>Dear User,</p>
          <p style='color: #333;'>We would like to provide you with the requested information. Please find below your password and additional details:</p>
          <p style='color: #333;'>Password: <strong>" . $row['password'] . "</strong></p>
          <p style='color: #333;'>We hope this assists you in accessing the necessary resources. If you have any further questions or require any additional assistance, please don't hesitate to reach out to our support team.</p>
          <p style='color: #333;'>Best regards,</p>
          <p style='color: #333;'><strong>Baboo Kumar</strong></p>
          <p style='color: #333;'><em>HIST Jamshoro</em></p>
        </div>";
          $mail->Body = $msg1;
          $mail->IsHTML(true);
        }
          //Attach an image file (optional)
          $mail->addAttachment('images/forgot.jpeg');
          // $mail->addAttachment('images/rejection_latter.txt');
          //send the message, check for errors
          if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
            header("Location: ./index_01.php?color=green&msg= Email Sent Successfully...!");
          }
        //}
        }
        else {
        header("Location: ./index_01.php?color=red&msg= Sorry Incorrect Eamil Address");
      }
      }
        /////////////////////////////////////////////////////////////////////////////////////////////////////////        -->
    }
  ?>
  <center>
    <form method="POST" action="">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
      </div>
      <br>
      <!-- <input type="submit" name="forgot" class="btn btn-primary"> -->
      <button type="submit" name="forgot" class="btn btn-primary">
        Forget Password..?
      </button>
    </form>
  </center>
</body>

</html>