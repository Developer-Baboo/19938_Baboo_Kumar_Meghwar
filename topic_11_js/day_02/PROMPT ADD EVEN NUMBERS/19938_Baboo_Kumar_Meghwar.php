<!Doctype html>
<html>

<head>
    <title>.::Prompt ODD & Even Number ::.</title>
</head>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px inset green; border-radius: 20px; padding: 30px 0px 100px 100px;">
    <script>
        sum = 0
        while (true) {
            number = parseInt(prompt('Enter a number: '))
            if (number % 2 != 0) 
            {
                break
            }
            sum += number
        }
        document.write("Sum of even numbers: "+sum)
    </script>
</body>
</html>