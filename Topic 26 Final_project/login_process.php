<?php
session_start();
require_once('./require/connection.php'); //connnection to database
if (isset($_REQUEST['login'])) {
    // extract($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user,role WHERE user.email='" . $email . "' AND password = '" . $password . "' AND user.role_id = role.role_id ";
    $result = mysqli_query($connection, $query);
    $row  = mysqli_fetch_assoc($result);

    if ($row['email'] == $email && $row['password'] == $password) {
        if ($row['role_id'] == 1) {
            $_SESSION['Admin'] = $row;
            header("Location:./admin/admin_dashboard.php");
        }
        if ($row['role_id'] == 2) {
            $_SESSION['User'] = $row;
            if ($row['is_approved'] == 'Approved') {
                if ($row['is_active'] === 'Active') {
                    header("Location: ./user/index.php");
                } elseif($row['is_active'] === 'InActive') {
                    header("Location: ./index_01.php?color=red&msg=You are not activated yet by the administrator");
                }
            } else if ($row['is_approved'] == 'Rejected'){
                header("Location: ./index_01.php?color=red&msg=You are Rejected by the administrator");
            } else if ($row['is_approved'] == 'Pending') {
                header("Location: ./index_01.php?color=red&msg= You can't login Because you are in Pending");
            }
        }
    } else {
        // $msg = "Invalid email or password";
        // $color="red";
        header("Location:./index_01.php?msg = Invalid email or password");
    }
}
?>