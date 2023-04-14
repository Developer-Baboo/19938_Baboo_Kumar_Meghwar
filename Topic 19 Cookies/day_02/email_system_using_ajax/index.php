<!DOCTYPE html>
<html>

<head>
    <title>AJAX EMAIL SYSTEMt</title>
    <style>
        input[type="submit"] {
            background-color: #fd7e14;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #e67e22;
        }

        span {
            color: red;
            size: 16px;
            font-size: 16px;
        }

        * {
            background-color: lightsteelblue;
            font-weight: bold;
        }

        h1 {
            font-family: serif;
            background-color: lightseagreen;
            border-radius: 10px;
            border: 3px solid lightskyblue;
            padding: 5px;
            margin: 3px;
        }

        form {
            padding: 20px;
            border: 3px solid lightskyblue;
            border-radius: 10px;
            font-family: Arial, sans-serif;
            width: 50%;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 3px solid lightskyblue;
            border-radius: 3px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <br>
    <center>
        <h1>AJAX EMAIL SYSTEM</h1>
        <?php if (isset($error_msg)) { ?>
            <p style="color:red"><?php echo $error_msg; ?></p>
        <?php } ?>
        <br><br>
        <form method="post" action="login_process.php">
            <fieldset>
                <legend>
                    Login Form
                </legend>
                <table>
                    <tr>
                        <td> <label>Email:</label></td>
                        <td> <input type="email" name="email" placeholder="baboo@gmail.com"></td>
                    </tr>
                    <tr>
                        <td> <label>Password</label></td>
                        <td><input type="password" name="password" placeholder="********"> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Login"></td>
                    </tr>
                </table>

            </fieldset>
        </form>
    </center>
</body>

</html>