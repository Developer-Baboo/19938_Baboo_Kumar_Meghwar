<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';;

// print_r($_SESSION['Admin']['role_type']);
// die();

if (isset($_POST['feedback_button'])) {
    include("require/connection.php");
        // var_dump($_POST);
        // echo "hello world";
        // echo $_POST['name'];
        // echo $_POST['email'];
        // echo $_POST['feedback'];
        if(isset($_SESSION['User']['user_id']))
        {
            date_default_timezone_set("Asia/Karachi");
            $current_time = date('Y-m-d h:i:s');
            $query1 = "INSERT into user_feedback (user_id,user_name, user_email,feedback,created_at) VALUES('".$_SESSION['User']['user_id']."','" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['feedback'] . "','" . $current_time . "')";
            $result1 = mysqli_query($connection, $query1);
        }else{
            date_default_timezone_set("Asia/Karachi");
            $current_time = date('Y-m-d h:i:s');
            $query1 = "INSERT into user_feedback (user_name, user_email,feedback,created_at) VALUES('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['feedback'] . "','" . $current_time . "')";
            $result1 = mysqli_query($connection, $query1);
        }
        
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
    $mail->Subject = 'Feedback Reception Message';

    $query = "SELECT * FROM user_feedback";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        //Read an HTML message body
        $msg1 = "<div style='background-color: #f1f1f1; padding: 20px; border-radius: 5px;'>
            <p>You have received the feedback from a user</p>
            <h3 style='color: #555;'>Here is The his/her name,email and feedback message:</h3>
            <ul style='list-style-type: none; padding: 0;'>
                <li><strong>Name:</strong> ".$row['user_name']. "</li>
                <li><strong>Email:</strong> " . $row['user_email'] . "</li>
                <li><strong>Feeback:</strong> " . $row['feedback'] . "</li>
            </ul>
        </div>";

        $mail->Body = $msg1;
        $mail->IsHTML(true);
    }

    //Attach an image file (optional)
    $mail->addAttachment('images/feedback.jpg');
    // $mail->addAttachment('../images/appoval_latter.txt');
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header("Location: ./index.php?color=green&msg= Feedback sent Successfully..");
    }
}
// approved user code end
?>