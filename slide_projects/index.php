<?php

?>

<!Doctype html>
<html>

<head>
    <title>.::Crud Application::.</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <center>
        <div class="row">
            <div class="col-12">
                <h1>Welcome Back...! </h1>
                <h3>Sign in to continue </h3>
                <img src="Images/profile.png" alt="image">
                <form action="login_process.php" method="POST">
                    <fieldset>
                        <legend>
                            Login Form
                        </legend>
                        <table>
                            <tr>
                                <td class="icon"><i class="fas fa-envelope"></i>Enter Email : </td>
                                <td> <input type="text" name="email" id="email" placeholder="Enter Your Email"></td>
                            </tr>
                            <tr>
                                <td class="icon"><i class="fas fa-lock"></i>Enter Password : </td>
                                <td>
                                    <div class="password-wrapper">
                                        <input type="password" name="password" id="password">
                                        <i class="fa fa-eye toggle-password" id="togglePassword"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Remember Me <input type="checkbox"></td>

                                <td style="padding-left:150px"> <a href="#" style="text-decoration:none">Forgot Password ? </a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> <input type="submit" value="Login Here" name="login"></td>
                            </tr>
                        </table>
                        <p style="padding-bottom: 10px;" >Don't have an Account <a href="./register.php" style="text-decoration: none;" > Register </a></p>
                    </fieldset>
                </form>
            </div>
        </div>
    </center>
</body>
<script src="./JavaScript/show_password.js"></script>

</html>