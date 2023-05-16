<?php
session_start();
require_once('./require/connection.php'); //connnection to database
if (isset($_REQUEST['login'])) {
    // extract($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user,role WHERE user.email='" . $email . "' AND password = '" . $password . "' AND user.role_id = role.role_id";
    $result = mysqli_query($connection, $query);
    $row  = mysqli_fetch_assoc($result);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
    // die();
    if ($row['email'] == $email && $row['password'] == $password) {
        if ($row['role_id'] == 1) {
            $_SESSION['Admin'] = $row;
            $msg = $row['user_id'];
            header("Location:./admin/admin_dashboard.php?user_id=$msg");
        }
        if ($row['role_id'] == 2) {
            $_SESSION['User'] = $row;
            if ($row['is_approved'] == 'Approved') {
                if ($row['is_active'] === 'Active') {
                    $msg = $row['user_id'];
                    // header("Location: ./user/index.php?user_id=$msg");
                    header("Location: ./index_01.php");
                    //?msg=<?php echo $row['user_id']
                    //send user user_id in query string taka us hi user ki details profile pa nazar ya 
                } elseif ($row['is_active'] === 'InActive') {
                    header("Location: ./index_01.php?color=red&msg=You are not activated yet by the administrator");
                }
            } else if ($row['is_approved'] == 'Rejected') {
                header("Location: ./index_01.php?color=red&msg=You are Rejected by the administrator");
            } else if ($row['is_approved'] == 'Pending') {
                header("Location: ./index_01.php?color=red&msg= You can't login Because you are in Pending");
            }
        }
    } else {
        header("Location:./index_01.php?color=red&msg = Invalid email or password");
    }
}
