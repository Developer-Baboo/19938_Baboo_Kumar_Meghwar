<!DOCTYPE html>
<html>

<head>
    <title>Page_02</title>
</head>

<body>
    <?php
    if (isset($_POST['marksheet']))
    // if (isset($_POST['submitbut'])) 
    {
        $sub1 = $_POST['subject1'];
        $sub2 = $_POST['subject2'];
        $sub3 = $_POST['subject3'];
        $sub4 = $_POST['subject4'];
        $sub5 = $_POST['subject5'];
        $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
        echo "You Obtained Marks are: $total";
        echo "<br>";
        echo "Your Total Marks are 500";
        echo "<br>";
        $percentage = $total * 100 / 500;
        echo "Your Percentage is : $percentage";
        echo "<br />";
        switch (true) {
        case ($sub1 < 40 || $sub2 < 40 || $sub3 < 40 || $sub4 < 40 || $sub5 < 40):
            echo "Sorry! You are Failed.";
            break;
        case ($percentage >= 40 && $percentage <= 60):
                echo "Your grade is C";
                echo "<br />";
                break;
            case ($percentage >= 61 && $percentage <= 79):
                echo "Your grade is B";
                echo "<br />";
                break;
            case ($percentage >= 80 && $percentage <= 89):
                echo "Your grade is A";
                echo "<br />";
                break;
            case ($percentage >= 90 && $percentage <= 100):
                echo "Your grade is A+";
                echo "<br />";
                break;
        }
    } 
    ?>
    <?php
    if (isset($_POST['calculator'])) {
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $operator = $_POST['Operator'];
        switch ($operator) {
            case '+':
                $sum = $num1 + $num2;
                echo "Sum is: $sum";
                break;
            case '-':
                $minus = $num1 - $num2;
                echo "Substraction is: $minus";
                break;
            case '*':
                $product = $num1 * $num2;
                echo "Multiplication  is: $product";
                break;
            case '/':
                $Division = $num1 / $num2;
                echo "Division is: $Division";
                break;
            default:
                echo "Incorrect Operator";
                break;
        }
    }
    ?>
</body>

</html>