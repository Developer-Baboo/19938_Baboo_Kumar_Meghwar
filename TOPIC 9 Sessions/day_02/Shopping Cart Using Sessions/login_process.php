<?php
session_start();
$flag = true;
if(isset($_POST['login'])){
    $username = $_POST['name'];
    $pass = $_POST['pass'];
$userDetails = array(
    array(
        "Name" => "Baboo Kumar",
        "Password" => 123,
    ),
    array(
        "Name" => "Akash Parmar",
        "Password" => 1234,
    ),
    array(
        "Name" => "Kelash Kumar",
        "Password" => 1235,
    ),
    array(
        "Name" => "Sunita Heerani",
        "Password" => 12,
    )
);
    $_SESSION['userDetails'] = $userDetails;
    $_SESSION['username'] = $username;
    $_SESSION['pass'] = $pass;  

foreach ($_SESSION['userDetails'] as $user) {
    if($user["Name"] === $_SESSION['username'] &&  $user["Password"] == $_SESSION['pass']){
        $flag = false;
        if ($_SESSION['username'] === "Baboo Kumar") {
                $_SESSION['user1'] = $user;
                header('Location: user1.php');
        }
        else if ($_SESSION['username'] === "Akash Parmar") {
                $_SESSION['user2'] = $user;
                header('Location: user2.php');
        } 
        else if ($_SESSION['username'] === "Kelash Kumar") {
                header('Location: user3.php');
        } 
        else if ($_SESSION['username'] === "Sunita Heerani") {
                header('Location: user4.php');
        }






        // if($user["Status"] == 1){
        //     if($user["role"] == "Student"){
        //         header('Location: student_dashboard.php');
        //     }
        //     else if ($user["role"] == "Teacher") {
        //         header('Location: teacher_dashboard.php');
        //     }
        //     else if ($user["role"] == "Admin") {
        //         header('Location: admin_dashboard.php');
        //     }
        // }
        // else if($user["Status"] == 0){
        //         // echo "you account is inactive";
        //     header('Location: index.php?msg= Your Account is Inactive');
        // }
    }
}
if($flag)
{
    header('Location: index.php?msg= Incorrect Useraname/Password');
    echo "Invalid user"; 
}
}
?>