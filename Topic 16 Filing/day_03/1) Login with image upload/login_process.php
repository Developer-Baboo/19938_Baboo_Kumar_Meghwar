<?php
 session_start();
require_once("connection.php");
if (isset($_POST['register'])) {
    $email = $_POST['email_address'];
    $password = $_POST['password'];
    $query = "SELECT * FROM registraction_table WHERE `email_address` ='".$email."' AND `password` = '".$password."'";
    // echo $query;die;
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result)>0) {
        $data=mysqli_fetch_assoc($result);
        $_SESSION['data_users']=$data;
        if ($data) {
             header('Location: ./Dashboard/home_page.php');
        }else{
            header('Location: index.php');
        }
    }
    
}
else
{
    echo "error";
}
?>