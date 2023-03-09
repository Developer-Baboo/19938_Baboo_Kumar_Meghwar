<!DOCTYPE html>
<html>

<head>
    <title>Login and Register Form</title>
    <style>
        * {
            background-color: lightblue;
            font-family: sans-serif;
            color: blue;
            font-weight: bold;
        }

        fieldset {
            width: 200px;
            border: 2px solid navy;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    function my_function()
    {

    ?>
        <center>
            <form action="<?php echo "" ?>">
                <fieldset>
                    <legend>Sign In Here</legend>
                    <table>
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" required placeholder="Enter Your Name" name="username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Password</label>
                            </td>
                            <td>
                                <input type="password" required placeholder="************" name="password">
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="login" name="login"></td>
                        </tr>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </center>

        <br><br>


        <center>
            <form action="<?php echo "" ?>">
                <fieldset>
                    <legend>Register Here</legend>
                    <table>
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" required placeholder="Enter Your Name" name="username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Father Name</label>
                            </td>
                            <td>
                                <input type="text" required placeholder="Enter Father Name" name="father_name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" required placeholder="abc@gmail.com" name="email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Password</label>
                            </td>
                            <td>
                                <input type="password" required placeholder="************" name="password">
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="login" name="login"></td>
                        </tr>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </center>



    <?php
    }
    ?>
</body>

</html>