<?php
session_start();
    // if (isset($_SESSION['userDetails'])) 
    // {
    //     foreach ($_SESSION['userDetails'] as $user) 
    //     {
    //         if ($user["Name"] === $_SESSION['username'] &&  $user["Password"] == $_SESSION['pass'] && $user["role"] == "Admin") 
    //         {
    //             header('Location: admin_dashboard.php');
    //         } 
    //         else 
    //         {
    //             // The user is not an admin, redirect to index.php
    //             header('Location: index.php');
    //         }
    //     }
    // } 
    // else 
    // {
    //     // The session variable is not set, redirect to index.php
    //     header('Location: index.php');
    // }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Form</title>
    <style>
        /* Style the table */
        table{
            width: 50%;
        }
        td{
            padding:10px;
        }
        table,
        th,
        td {
            border: 1px solid;
        }

        * {
            background-color:lightblue;
        }

        h4 {
            color: orange;
            font-family: 'Times New Roman';
            background-color: lightseagreen;
            font-weight: bold;
            border: 4px solid yellow;
            border-radius: 5px;
            margin-right: 100px;
            margin-left: 100px;
            padding: 10px;
            text-align: center;
            font-size: 30px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <?php
    if ($_SESSION['userDetails']) {
        foreach ($_SESSION['userDetails'] as $user) {
            if ($user["Name"] === $_SESSION['username'] && $user["Password"] == $_SESSION['pass'] && $user["role"] == "Admin") {
    ?>
                <h4> Welcome to Admin (<?php
                                        echo $user["Name"]; ?>) Page </h4>
                <center>
                    <table>
                        <tr>
                            <td>Name:</td>
                            <td><?php
                                echo $user["Name"]; ?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?php
                                echo $user["Password"]; ?></td>
                        </tr>
                        <tr>
                            <td>Role:</td>
                            <td><?php
                                echo $user["role"]; ?></td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td><?php
                                echo $user["Status"]; ?></td>
                        </tr>
                    </table>
                </center>
    <?php
            }
        }
    }
    ?>







    <!-- $user["Password"]
    $user["role"]
    $user["Status"] -->
</body>

</html>