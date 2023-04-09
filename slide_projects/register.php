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
                <h1></h1>
                <h3>Register Here </h3>
                <img style="height:15%" src="Images/profile.png" alt="image">
                <form style="width: 70%;" action="login_process.php" method="POST">
                    <fieldset>
                        <legend>
                            SignUp Form
                        </legend>
                        <table>
                            <tr>
                                <td> Enter First Name: <span style="color:red" >*</span></td>
                                <td><input class="input" type="text" name="first_name" id="first_name"></td>
                                <td id="error_message"></td>
                            </tr>
                            <tr>
                                <td> Enter Last Name:</td>
                                <td><input type="text" name="last_name" id="last_name"></td>
                                <td id="error_message"></td>
                            </tr>
                            <tr>
                                <td> Enter Email: <span>*</span></td>
                                <td><input type="text" name="email" id="email"></td>
                                <td id="error_message"></td>
                            </tr>
                            <tr>
                                <td> Enter Phone Number: <span>*</span></td>
                                <td><input type="text" name="phone_number" id="phone_number"></td>
                                <td id="error_message"></td>
                            </tr>
                            <tr>
                                <td> Enter CNIC Number: <span>*</span></td>
                                <td><input type="text" name="cnic_number" id="cnic_number"></td>
                                <td id="error_message"></td>
                            </tr>
                            <tr>
                                <td>About Me: <span>*</span></td>
                                <td><textarea name="about_me" id="about_me" cols="30" rows="10"></textarea></td>
                                <td id="error_message"></td>
                            </tr>
                            <tr>
                                <td><label for="gender">Gender: <span>*</span> </label></td>
                                <td>
                                    <label for="male">Male</label>
                                    <input type="radio" id="male" name="gender" value="male">

                                    <label for="female">Female</label>
                                    <input type="radio" id="female" name="gender" value="female">
                                </td>
                            </tr>
                            <tr>
                                <td>Choose Country <span>*</span> </td>
                                <td>
                                    <select name="country" id="country">
                                        <option value="0">--- Select Country ---</option>
                                        <option value="Pakisan">Pakistan</option>
                                        <option value="Iran">Iran</option>
                                        <option value="China">China</option>
                                    </select>
                                </td>
                                <td id="error_message"></td>
                            </tr>
                            <tr>
                                <td>Policies <span>*</span> </td>
                                <td><input type="checkbox" name="checkbox" id="checkbox" value="Attendance"> Attendance Policy </td>
                                <td><input type="checkbox" name="checkbox" id="checkbox" value="Attendance"> Assignment Policy</td>
                                <td><input type="checkbox" name="checkbox" id="checkbox" value="Attendance"> Tests Policy </td>
                                <td><input type="checkbox" name="checkbox" id="checkbox" value="Attendance"> Stipend Policy</td>
                                <td id="error_message"></td>
                            </tr>
                            <tr>
                                <td>Upload Profile </td>
                                <td><input type="file" name="" id=""></td>
                            </tr>
                            <tr>
                                <td class="icon"><i class="fas fa-lock"></i>Enter Password : </td>
                                <td>
                                    <div class="password-wrapper">
                                        <input type="password" name="password" id="password">
                                        <!-- <i class="fa fa-eye toggle-password" id="togglePassword"></i> -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> <input type="submit" value="Register Here" name="register"></td>
                            </tr>
                        </table>
                        <p style="padding-bottom: 10px;">Already an Account <a href="./index.php" style="text-decoration: none;">Login</a></p>
                    </fieldset>
                </form>
            </div>
        </div>
    </center>
</body>
<script src="./JavaScript/show_password.js"></script>

</html>