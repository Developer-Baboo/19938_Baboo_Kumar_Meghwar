<?php
$sub1 = 90;
$sub2 = 50;
$sub3 = 70;
$sub3 = 85;
$sub4 = 60;
$sub5 = 80;
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
?>