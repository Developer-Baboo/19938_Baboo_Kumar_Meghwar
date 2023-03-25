<?php
require_once("./connection.php");
$query = "SELECT * FROM register_form";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) > 0) {

    $user_details = mysqli_fetch_assoc($result);
} else {
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
                    <?php echo $user_details["first_name"]; ?>
                </td>

                <td>
                    <?php echo $user_details["last_name"]; ?>
                </td>
                <td>
                    <?php echo $user_details["father_name"]; ?>
                </td>
                <td>
                    <?php echo $user_details["email"]; ?>
                </td>
                <td>
                    <?php echo $user_details["password"]; ?>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>