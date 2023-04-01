<?php
require_once("./connection.php");
if (isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM register_form WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
?>
<?php
        header('Location: home_page.php');
    } 
    else 
    {
        header('Location: login_page.php');
    }
}
?>