<!DOCTYPE html>
<html>

<head>
    <title>CV Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            color: #333333;
        }

        form {
            width: 80%;
            margin: auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #cccccc;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
            color: #333333;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
            box-shadow: 0px 0px 5px #cccccc;
        }

        input[type="submit"] {
            background-color: #333333;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: #555555;
        }
    </style>
</head>

<body>
    <h1>CV Generator</h1>
    <form action="generate_cv.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name"><br>

        <label for="email">Email:</label>
        <input type="email" name="email"><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone"><br>

        <label for="address">Address:</label>
        <input type="text" name="address"><br>

        <label for="education">Education:</label><br>
        <textarea name="education"></textarea><br>

        <label for="skills">Skills:</label><br>
        <textarea name="skills"></textarea><br>

        <label for="experience">Experience:</label><br>
        <textarea name="experience"></textarea><br>

        <center><input type="submit" value="Generate CV " name="submit"></center>
    </form>
</body>

</html>