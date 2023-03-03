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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>Contact Information</title>
    <style>
        * {
            background-color: lightgrey;
        }

        h1 {
            color: red;
            font-family: cursive;
            background-color: chartreuse;
            font-weight: bold;
            border: 2px solid green;
            border-radius: 10px;
            margin-right: 100px;
            margin-left: 100px;

        }

        .button {
            background-color: #ff00ff;
            color: white;
            padding: 5px 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #660066;
        }

        fieldset {
            width: 200px;
            border: 5px dashed purple;
            border-radius: 20px;
        }

        h1 {
            color: red;
            font-family: Serif;
            background-color: chartreuse;
            font-weight: bold;
            border: 2px solid green;
            border-radius: 10px;
            margin-right: 100px;
            margin-left: 100px;

        }
    </style>
</head>

<body>
    <center>
        <h1>Contact Info Page</h1>
        <form method="POST" action="page3.php">
            <!-- ////////////////////////////////////////////////////////////////////////// -->
            <!-- <fieldset>
                <legend>Login Here...!</legend>
                <table>
                    <tr>
                        <td>
                            UserName:
                        </td>
                        <td><input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" type="password" name="pass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" class="button" type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </fieldset> -->
            <!-- ////////////////////////////////////////////////////////////////////////// -->
            <fieldset>
                <legend>Contact Information</legend>
                <table>
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" required type="email" id="email" name="email"><br />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="contact_number">Contact Number:</label></td>
                        <td>
                            <input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" type="text" id="contact_number" name="contact_number">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="address">Address:</label></td>
                        <td>
                            <textarea required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" id="address" name="address"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="button" type="submit" name="submit" value="submit">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>

</html>