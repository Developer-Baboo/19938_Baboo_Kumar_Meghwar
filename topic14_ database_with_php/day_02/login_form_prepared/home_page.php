<?php
require_once("./connection.php");
$email = $_POST["email"];
$password = $_POST["password"];
$query = "SELECT * FROM customers WHERE Email = '$email' AND Password = '$password'";
$result = mysqli_query($connection, $query);
// If login credentials match, retrieve customer registration details
if (mysqli_num_rows($result) > 0) {
    $customer = mysqli_fetch_assoc($result);
}
else{
    echo "no record found";
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>
        User Details
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
        <h1> User Details Page </h1>
        <br> <br>
    </center>
    <center>
        <table border="3px" style="padding: 10px; ">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <tr>
                <td>
                    <?php
                    $customer["name"];
                    ?>
                </td>

                <td>
                    Kumar
                </td>
                <td>
                    Mehandro
                </td>
                <td>
                    babooheerani999@gmail.com
                </td>
                <td>
                    12345678
                </td>
            </tr>
        </table>
    </center>
</body>

</html>