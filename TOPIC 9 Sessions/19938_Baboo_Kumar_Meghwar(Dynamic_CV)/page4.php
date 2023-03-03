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
    <title>Dynamic CV Display</title>
</head>

<body>
    <table border="1">
        <tr>
            <td> <label></label>Name:</td>
            <td></td>
        </tr>
        <tr>
            <td><label></label>Father's Name</td>
            <td></td>
        </tr>
        <tr>
            <td> <label></label>Gender:</td>
            <td></td>
        </tr>
        <tr>
            <td><label></label>Country</td>
            <td></td>
        </tr>
        <tr>
            <td> <label></label>Email:</td>
            <td></td>
        </tr>
        <tr>
            <td><label></label>Contact Number</td>
            <td></td>
        </tr>
        <tr>
            <td> <label></label>Address</td>
            <td></td>
        </tr>
        <tr>
            <td><label></label>School Name</td>
            <td></td>
        </tr>
        <tr>
            <td> <label></label>College Name:</td>
            <td></td>
        </tr>
        <tr>
            <td><label></label>University Name</td>
            <td></td>
        </tr>
        <tr>
            <td> <label></label>School E. S. Date</td>
            <td></td>
        </tr>
        <tr>
            <td> <label></label>College E. S. Date</td>
            <td></td>
        </tr>
        <tr>
            <td> <label></label>University E. S. Date</td>
            <td></td>
        </tr>
        <tr>
            <td> <label></label>Summary</td>
            <td></td>
        </tr>
    </table>
</body>

</html>