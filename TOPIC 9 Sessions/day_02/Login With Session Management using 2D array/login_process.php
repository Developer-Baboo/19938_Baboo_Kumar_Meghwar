<?php
$flag = true;
if(isset($_POST['login'])){
    $username = $_POST['name'];
    $pass = $_POST['pass'];

$userDetails = array(
    array(
        "Name" => "Baboo Kumar",
        "Password" => 123,
        "role" => "Admin",
        "Status" => 1,
    ),
    array(
        "Name" => "Akash Parmar",
        "Password" => 1234,
        "role" => "Teacher",
        "Status" => 1,
    ),
    array(
        "Name" => "Kelash Kumar",
        "Password" => 1235,
        "role" => "Student",
        "Status" => 1,
    ),
    array(
        "Name" => "Sunita Heerani",
        "Password" => 12,
        "role" => "Student",
        "Status" => 0,
    )
);    
foreach ($userDetails as $user) {
        // echo "Name: " . $user["Name"] . "<br>";
        // &&  $user["Password"] === $pass
    if($user["Name"] === $username &&  $user["Password"] == $pass){
            $flag = false;
        // echo "valid user";
        if($user["Status"] == 1){
            if($user["role"] == "Student"){
                header('Location: student_dashboard.php');
            }
            else if ($user["role"] == "Teacher") {
                header('Location: teacher_dashboard.php');
            }
            else if ($user["role"] == "Admin") {
                header('Location: admin_dashboard.php');
            }
        }
        else if($user["Status"] == 0){
                // echo "you account is inactive";
            header('Location: index.php?msg= You account is Inactive');
        }
    }
}
if($flag)
{
    header('Location: index.php?msg= Incorrect Useraname/Password');
    echo "Invalid user"; 
}
}
?>