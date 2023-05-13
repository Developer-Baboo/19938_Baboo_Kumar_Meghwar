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
        else if ($row['role_id'] == 2){
            $_SESSION['User'] = $row;
            if($row['is_approved'] == 'Approved')
            {
                header("Location:./user/index.php");
            }
            else{
                header("Location:./login.php?msg = You are not Approved by administrator");
            }
            header("Location:./user/index.php");       
        }
    } else {
        echo " <h6 style='color:red;font-family:times'>Invalid Email or Password</h6> ";
    }
}
?>