<!DOCTYPE html>
<html>
<head>
    <title>Calculator in Switch and If</title>
</head>

<body style="background-color:blue ; font-weight: bold; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color:white;font-size:20px; border: 10px groove red; border-radius: 20px; padding: 30px 0px 70px 100px;">
    <h1>Calculator in Switch and If</h1>
    <script>
        document.write("***********************************Calculator in IF ********************************<br/> ")
        num1 = 22
        num2 = 11
        operator = "*"
        if (operator === "+") {
            sum = num1 + num2
            document.write("Addition is: " + sum)
            document.write("<br />")
        }
        if (operator === "-") {
            substract = num1 - num2;
            document.write("Subtraction is: " + substract)
            document.write("<br />")
        }
        if (operator === "*") {
            Multiply = num1 * num2
            document.write("Multiplication is: " + Multiply)
            document.write("<br />")
        }
        if (operator === "/") {
            Divide = num1 / num2
            document.write("Division is: " + Divide)
        }
        document.write("***********************************Calculator in Switch ********************************<br/> ")
        number1 = 222
        number2 = 11
        op = "+"
        switch (true) {
            case (op === '+'):
                sum = number1 + number2
                document.write("Addition is: " + sum)
                break;
            case (op === '-'):
                substract = number1 - number2
                document.write("Subtraction is: " + substract)
                break;
            case (op === '*'):
                Multiply = number1 * number2
                document.write("Multiplication is: " + Multiply)
                break;
            case (op === '/'):
                Divide = number1 / number2
                document.write("Division is " + Divide)
                break;
        }
    </script>
</body>

</html>