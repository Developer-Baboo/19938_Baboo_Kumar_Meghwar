<?php
    session_start();
    include_once("../connection.php");
    // print_r($_SESSION);die;
    $user_id=$_SESSION['data_users']['user_id'];
$query = "SELECT * FROM registraction_table WHERE user_id=$user_id";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) 
{
    $user_details = mysqli_fetch_assoc($result);
} 
else 
{
    echo "no record found";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        User Data
    </title>
    <style>
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

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h1> User Data Page </h1>
        <br> <br>
    </center>
    <center>
        <table border="3px" style="padding: 10px; ">
            <tr>
                <th>First Name</th>
                <!-- <th>Last Name</th>
                <th>Father Name</th> -->
                <th>Email</th>
                <!-- <th>Password</th> -->
                <th> Details</th>
            </tr>
            <tr>
                <td>
                    <?php echo $user_details["first_name"]; ?>
                </td>
                <td>
                    <?php echo $user_details["email_address"]; ?>
                </td>
                <td>
                    <a href="../Dashboard/show_user_data.php?user_id=<?php echo $user_details['user_id'];?>">View Details</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>