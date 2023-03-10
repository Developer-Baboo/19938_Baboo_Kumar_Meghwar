<!DOCTYPE html>
<html>

<head>
    <title>Factorial of a number</title>
</head>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:red;font-size:20px; border: 10px ridge yellow; border-radius: 20px; padding: 30px 0px 100px 100px;">
    <h1>Factorial of a number</h1>
    <script>
        num = 10
        output = 1
        for (i = 1; i <= num; i++) 
        {
            output = output*i;
        }
        document.write(output);
    </script>
</body>

</html>