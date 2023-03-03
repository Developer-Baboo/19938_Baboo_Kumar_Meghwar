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
    <title>Professional Information</title>
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
            width: 50%;
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
        <h1>Professional Information</h1>
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
                <legend>Professional Information</legend>
                <table>
                    <tr>
                        <td>
                            <label>School Name:</label>
                        </td>
                        <td>
                            <input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" required type="text" id="school_name" name="school_name"><br />
                        </td>
                    </tr>
                    <tr>
                        <td><label>College Name:</label></td>
                        <td>
                            <input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" required type="text" id="college_name" name="college_name">
                        </td>
                    </tr>
                    <tr>
                        <td><label>University Name:</label></td>
                        <td>
                            <input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" required type="text" id="university_name" name="university_name">
                        </td>
                    </tr>
                    <tr>
                        <td><label>School S. & E. Date:</label></td>
                        <td>
                            <input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" required type="text" name="school_date">
                        </td>
                    </tr>
                    <tr>
                        <td><label>College S. & E. Date:</label></td>
                        <td>
                            <input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" required type="text"  name="college_date">
                        </td>
                    </tr>
                    <tr>
                        <td><label>University S. & E. Date:</label></td>
                        <td>
                            <input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" required type="text" ; name="university_date">
                        </td>
                    </tr>
                    <tr>
                        <td><label>Summary:</label></td>
                        <td>
                            <textarea required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" name="summary"></textarea>
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