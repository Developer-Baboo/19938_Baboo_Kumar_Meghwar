<!Doctype html>
<html>

<head>
    <title>.::Prompt Calculator::.</title>
</head>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px inset green; border-radius: 20px; padding: 30px 0px 100px 100px;">
    <script>
        var first_value = parseInt(prompt("Enter first value"));
        var second_value = parseInt(prompt("Enter Second value"));
        var operator = prompt("Enter operator");

        if (operator === '+') {
            var sum = first_value + second_value;
            document.write("Sum is : " + sum);
        } else if (operator === '-') {
            var Minus = first_value - second_value;
            document.write("Substraction is : " + Minus);
        } else if (operator === '*') {
            var multiply = first_value * second_value;
            document.write("Multiply is : " + multiply);
        } else if (operator === '/') {
            var Division = first_value / second_value;
            document.write("Division is : " + Division);
        }
        else if (first_value == "" || second_value == "" || operator == ""){
            alert("You have left empty boxes ")
        }
        else 
        {
            alert("Sorry! You have entered Incorrect Operator ")
        }
    </script>
</body>

</html>