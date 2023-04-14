<?php
$connection = mysqli_connect('localhost', 'root', '', 'cookies_login');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];
        if (isset($_POST['remember'])) {
            setcookie('user_id', $user_id, time() + 3600 * 24 * 7);
            setcookie('username', $username, time() + 3600 * 24 * 7);
            setcookie('password', $password, time() + 3600 * 24 * 7);
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
    <title>Login wtih Cookies Management</title>
    <style>
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        span {
            color: red;
            size: 16px;
            font-size: 16px;
        }

        * {
            background-color: lightsteelblue;
            font-weight: bold;
        }

        h1 {
            font-family: cursive;
            background-color: lightseagreen;
            border-radius: 10px;
            border: 2px groove yellowgreen;
            padding: 5px;
            margin: 3px;
        }

        form {
            padding: 20px;
            border: 4px groove grey;
            border-radius: 10px;
            font-family: Arial, sans-serif;
            width: 50%;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid black;
            border-radius: 3px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <center>
        <h1>Login Form With Cookies</h1>
        <?php if (isset($error_msg)) { ?>
            <p style="color:red"><?php echo $error_msg; ?></p>
        <?php } ?>
        <form method="post" action="">
            <fieldset>
                <legend>
                    Registraction Form
                </legend>
                <table>
                    <tr>
                        <td> <label>Username:</label><span>*</span> </td>
                        <td> <input type="text" name="username" <?php if (isset($_COOKIE['username'])) {
                                                                    echo 'value="' . $_COOKIE['username'] . '"';
                                                                } ?> </td>
                    </tr>
                    <tr>
                        <td> <label>Password</label> <span>*</span> </td>
                        <td><input type="password" name="password" <?php if (isset($_COOKIE['password'])) {
                                                                        echo 'value="' . $_COOKIE['password'] . '"';
                                                                    } ?> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])) {
                                                                        echo 'checked';
                                                                    } ?></td>
                        <td><label>Remember me</label></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Login"></td>
                    </tr>
                </table>

            </fieldset>
        </form>
    </center>
</body>

</html>