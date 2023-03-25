<!DOCTYPE html>
<html>

<head>
    <title>
        Registraction Form
    </title>
    <style>
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
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
            font-family: cursive;
            background-color: lightseagreen;
            border-radius: 10px;
            border: 2px groove yellowgreen;
            padding: 5px;
            margin: 3px;
        }

        form {
            padding: 20px;
            border: 4px groove grey;
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
            border: 2px solid black;
            border-radius: 3px;
            /* box-sizing: border-box; */
            font-size: 16px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Login Form</h1>
        <br> <hr>
        <form action="login_process.php" method="POST">
            <fieldset>
                <legend>
                    Registraction Form
                </legend>
                <table>
                    <tr>
                        <td> <label for="">Email</label> <span>*</span> </td>
                        <td><input placeholder="abc@gmail.com" type="email" name="email" id="email"> </td>
                    </tr>
                    <tr>
                        <td> <label for="">Password</label> <span>*</span> </td>
                        <td><input placeholder="********" type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="submit" name="submit" id="submit"></td>
                    </tr>

                </table>

            </fieldset>
        </form>
    </center>
</body>

</html>