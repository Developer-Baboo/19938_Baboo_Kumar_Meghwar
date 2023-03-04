<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Form</title>
    <style>
        * {
            background-color: skyblue;
        }
        h1 {
            color: gold;
            font-family: serif;
            background-color: chartreuse;
            font-weight: bold;
            border: 2px solid green;
            border-radius: 10px;
            margin-right: 100px;
            margin-left: 100px;
            padding: 5px;

        }

        .button {
            background-color: tan;
            color: white;
            padding: 5px 5px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.5s ease;
        }

        .button:hover {
            background-color: #660066;
        }

        fieldset {
            width: 200px;
            border: 4px solid blue;
            border-radius: 6px;
        }

        .icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <center>
        <?php if (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="login_process.php">
            <h1>Sign In Page</h1>
            <?php if (isset($_REQUEST["msg"])) {
                echo $_REQUEST["msg"];
            } ?>
            <fieldset>
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
            </fieldset>
        </form>
    </center>
</body>

</html>