<?php
$dynamic_string = "A1 B$2CD#E3G";
$num  = 0;
$num1 = 0;
$num2 = 0;
$num3 = 0;
$num4 = 0;
$num5 = 0;
$num6 = 0;
$num7 = 0;
$num8 = 0;
for ($a = 1; isset($dynamic_string[$a]); $a++) {
    if ($dynamic_string[$a] === '1') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num = $dynamic_string[$a] + $num;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    } else if ($dynamic_string[$a] === '2') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num1 = $dynamic_string[$a] + $num1;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    }
    if ($dynamic_string[$a] === '3') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num2 = $dynamic_string[$a] + $num2;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    }
    if ($dynamic_string[$a] === '4') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num3 = $dynamic_string[$a] + $num3;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    }
    if ($dynamic_string[$a] === '5') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num4 = $dynamic_string[$a] + $num4;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    }
    if ($dynamic_string[$a] === '6') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num5 = $dynamic_string[$a] + $num5;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    }
    if ($dynamic_string[$a] === '7') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num6 = $dynamic_string[$a] + $num6;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    }
    if ($dynamic_string[$a] === '8') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num7 = $dynamic_string[$a] + $num7;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    }
    if ($dynamic_string[$a] === '9') {
        // $add = $dynamic_string[$a]+1;
        // // echo "      $add       ";
        // $num = ($dynamic_string[$a] - 1) + $num;
        $num8 = $dynamic_string[$a] + $num8;
        // sum = 
        //a = 1+0 
        // $add = ++$a;
        // echo "testing...";
    }
}
$sum = $num + $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8;
echo "Sum = $sum";
