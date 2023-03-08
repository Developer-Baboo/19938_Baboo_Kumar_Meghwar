<?php
echo "i) Convert the following assignments into functions: <br/>";
echo "a) Sorting <br/>";
echo "b) Calculator In Switch <br/>";
echo "c) Marksheet <br/>";
echo "d) Array Sum <br/>";
echo "Note: Make all functions in a single page only <br/>";
echo "a) Sorting <br/>";

function custom_function($arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0, 1000, 200, 10, 20])
{
    $optional_variable = 0;
    $b = 0;
    echo 'Input: $arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0, 1000, 200, 10, 20] <br />  ';
    echo "Output: ";
    for ($a = 1; isset($arr[$a]); $a++) {
        $optional_variable = $arr[$a];
        $b = $a;
        while ($b > 0 && $arr[$b - 1] > $optional_variable) {
            $arr[$b] = $arr[$b - 1];
            $b = $b - 1;
        }
        $arr[$b] = $optional_variable;
    }
    for ($a = 0; isset($arr[$a]); $a++) {
        echo "$arr[$a]" . "    ";
    }
}
custom_function();

echo "<br/> <br/> b) Calculator In Switch <br/>";
function cal_function($num1, $num2,$operator){
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
}
cal_function(22, 11, '/');

?>