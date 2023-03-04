<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    // User is not logged in, redirect them to the login page
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>Personal Information</title>
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
    </style>
</head>

<body>
    <center>
        <form method="POST" action="page2.php">
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
                <legend>Personal Information</legend>
                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td><input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" type="text" id="name" name="f_name"></td>
                    </tr>
                    <tr>
                        <td>
                            Father Name:
                        </td>
                        <td><input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" required type="text" id="father_name" name="father_name"></td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <label for="gender">Gender: </label>
                            <label for="male">Male</label>
                            <input type="radio" id="male" name="gender" value="male" required>

                            <label for="female">Female</label>
                            <input type="radio" id="female" name="gender" value="female" required>

                            <label for="other">Other</label>
                            <input type="radio" id="other" name="gender" value="other" required>
                        </td>
                    </tr> -->
                    <tr>
                        <td><label>Gender:</label></td>
                        <td>
                            <input required="required" type="radio" name="gender" value="male" /> Male
                            <input required="required" type="radio" name="gender" value="female" />Female
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="country">Country:</label>
                        </td>
                        <td>
                            <select required id="country" name="country">
                                <option value="Pakistan">India</option>
                                <option value="USA">USA</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>Password:</td>
                        <td><input required style="border-radius: 20px; border: 2px solid linear-gradient(to right, #ff5e62, #ff9966);" type="password" name="pass"></td>
                    </tr> -->
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