<?php
    session_start();
   if(isset($_POST['login'])){
    $Full_Name  = "Welcome Baboo Kumar Meghwar";
    $username = 'Baboo';
    $password = 123;

    $name = $_POST['name'];
    $pass = $_POST['pass'];

    if($username === $name &&
    $password == $pass)
    {
        $_SESSION['logged_in'] = true;
        $_SESSION['Full_name'] = $Full_Name;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: dashboard.php');
    } else {
        // echo "helo";
        $error = 'Invalid username or password';
        header('Location: index.php');
    }
   }
   
?>
