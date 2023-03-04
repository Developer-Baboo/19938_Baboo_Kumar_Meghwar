<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // User is not logged in, redirect them to the login page
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Form</title>
    <style>
        * {
            background-color: lightcoral;
        }

        h4 {
            color: orange;
            font-family: cursive;
            background-color: skyblue;
            font-weight: bold;
            border: 2px dashed yellow;
            border-radius: 5px;
            margin-right: 100px;
            margin-left: 100px;

        }

        p {}
    </style>
</head>

<body>
    <h4> Welcome <?php echo $_SESSION['Full_name'] ?> to Dashboard </h4>
    <p> Here is Your Login Detail...!</p>
    <p>Name: <?php echo $_SESSION['username'] ?> </p>
    <p>Password: <?php echo $_SESSION['password'] ?> </p>
</body>

</html>