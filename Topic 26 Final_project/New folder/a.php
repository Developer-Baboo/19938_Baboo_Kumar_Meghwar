<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:../index.php");
}
require_once('../require/header.php');
require_once('../require/database_connection.php');
require_once('navigation_bar.php');
?>




















<?php
session_start();
// if(!isset($_SESSION['user'])){
// header("location:../index.php?color=red&msg=Kindly First Login Your Account ");


// }

// session_start();
require_once('../require/header.php');
require_once('../require/database_connection.php');
?>









<?php

if (isset($_REQUEST['login'])) {

    extract($_POST);
    $query = "SELECT * FROM users,user_role WHERE users.email='" . $email . "' AND password = '" . $password . "' AND users.user_id = user_role.user_id ";
    $result = mysqli_query($connection, $query);
    $row  = mysqli_fetch_assoc($result);

    if ($row['email'] == $email && $row['password'] == $password) {
        if ($row['role_id'] == 1 && $row['status_id'] == 1) {
            $_SESSION['admin'] = $row;
            header("Location:../Admin/admin_panel.php");
        }
        if ($row['role_id'] == 2 && $row['status_id'] == 1 && $row['is_approve'] == 'Approved') {
            $_SESSION['teacher'] = $row;
            header("Location:../Teacher/teacher_panel.php");
        }
        if ($row['role_id'] == 3 && $row['status_id'] == 1 && $row['is_approve'] == 'Approved') {
            $_SESSION['student'] = $row;
            header("Location:../Student/student_panel.php");
        }
    } else {
        echo " <h6 style='color:red;font-family:times'>Invalid Your Email or Password</h6> ";
    }
}
?>


<div>
    <?php
    if (isset($_REQUEST['msg'])) {
    ?>
        <div style="font-family: times;font-size: 18px; text-align: center ; color: <?php echo  $_REQUEST['color'] ?>;">
            <i class="fas fa-sign-in-alt"> <?php
                                            echo $_REQUEST['msg'];
                                            ?></i>
        </div>
    <?php
    }
    ?>

</div>