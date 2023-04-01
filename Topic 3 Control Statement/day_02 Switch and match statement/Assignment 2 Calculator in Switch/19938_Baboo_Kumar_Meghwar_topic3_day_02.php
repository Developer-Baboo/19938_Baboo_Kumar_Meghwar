<?php
$num1 = 22;
$num2 = 11;
$operator = '/';
switch (true) {
    case ($operator === '+'):
        $sum = $num1 + $num2;
        echo "Addition of $num1 and $num2 is: $sum";
        break;
    case ($operator === '-'):
        $substract = $num1 - $num2;
        echo "Subtraction of $num1 and $num2 is: $substract";
        break;
    case ($operator === '*'):
        $Multiply = $num1 * $num2;
        echo "Multiplication of $num1 and $num2 is: $Multiply";
        break;
    case ($operator === '/'):
        $Divide = $num1 / $num2;
        echo "Division of $num1 and $num2  is: $Divide";
        break;
}

?>