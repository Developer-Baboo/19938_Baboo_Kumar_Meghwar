<?php
require_once("./connection.php");
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO register_form(`First Name`, `Last Name`, `Father Name`, `Email`, `Password`) VALUES ('$first_name', '$last_name', '$father_name', '$email', '$password')";

    $result = mysqli_query($connection, $sql_query);

    if ($result)
    {
        header("location: login_page.php");
    }
    else{
        echo "data not inserted";
        //header("location: register_form.php");
    }
}
?>