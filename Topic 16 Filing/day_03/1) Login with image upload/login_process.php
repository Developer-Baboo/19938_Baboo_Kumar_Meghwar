<?php
require_once("./Include/connection.php");
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM registraction_table WHERE `email_address` = '$email' AND `password` = '$password'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header('Location: ./Dashboard/home_page.php');
    } else {
        header('Location: index.php');
    }
}
else
{
    echo "error";
}
?>