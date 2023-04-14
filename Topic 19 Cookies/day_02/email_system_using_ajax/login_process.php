<?php
$connection = mysqli_connect("localhost", "root", "", "ajax_email_system");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
    ?>
    <?php
        header('Location: home_page.php');
    } else {
        $error_msg = 'Invalid username or password';
        header("location: index.php");
    }
}
?>