<!Doctype html>
<html>

<head>
    <title>Custom Function</title>
</head>

<body style="background-color: lightgreen; font-weight: bold; font-family: cursive; color:blue;font-size:large; border: 4px solid red; border-radius: 20px; padding: 30px 0px 20px 50px;">
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
    function cal_function($num1, $num2, $operator)
    {
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

    echo "<br/> <br/> c) Marksheet In Switch <br/>";
    function mark_function($sub1, $sub2, $sub3, $sub4, $sub5)
    {
        $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
        echo "Your Total Marks are 500";
        echo "<br />";
        echo "Your obtained marks are : $total";
        $percentage = $total * 100 / 500;
        echo "<br />";
        echo "Your percentage is : $percentage";
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
    mark_function(60, 70, 90, 30, 45);

    echo "<br/> <br/> d) Array sum:";
    $arr = [1, 2, 3, 4, 5];
    echo '<br /> Input: $arr = [1, 2, 3, 4, 5];';
    $sum = 0;
    for ($a = 0; isset($arr[$a]); $a++) {
        $sum = $sum + $arr[$a];
    }
    echo "<br /> Sum:" . $sum;
    ?>
</body>

</html>