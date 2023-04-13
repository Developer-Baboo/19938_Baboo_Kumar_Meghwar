<?php
if (isset($_COOKIE['user_id']) && isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $user_id = $_COOKIE['user_id'];
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'cookies_login');

    $query = "SELECT * FROM users WHERE id='$user_id' AND username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        header('Location: home.php');
        exit();
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'cookies_login');

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];

        if (isset($_POST['remember'])) {
            setcookie('user_id', $user_id, time()+3600*24*7);
            setcookie('username', $username, time()+3600*24*7);
            setcookie('password', $password, time()+3600*24*7);
        }

        header('Location: home.php');
        exit();
    } else {
        $error_msg = 'Invalid username or password';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error_msg)) { ?>
        <p><?php echo $error_msg; ?></p>
    <?php } ?>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" <?php if (isset($_COOKIE['username'])) { echo 'value="'.$_COOKIE['username'].'"'; } ?>>
        <br>
        <label>Password:</label>
        <input type="password" name="password" <?php if (isset($_COOKIE['password'])) { echo 'value="'.$_COOKIE['password'].'"'; } ?>>
        <br>
        <input type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])) { echo 'checked'; } ?>>
        <label>Remember me</label>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
