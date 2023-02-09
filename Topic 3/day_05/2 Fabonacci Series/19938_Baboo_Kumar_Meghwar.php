<?php
$num = 0;
$first_number = 0;
$second_number = 1;

//using for loop
echo "<br /> *************************Using For Loop*********************** <br />";
echo $first_number . " " . $second_number . " ";
for (; $num < 15; $num++) {
    $third_number = $second_number + $first_number;
    echo $third_number . " ";
    $first_number = $second_number;
    $second_number = $third_number;
    $num = $num + 1;
}

//Using while loop
$num = 0;
$first_number = 0;
$second_number = 1;
echo "<br /> *************************Using while Loop*********************** <br/>";
echo $first_number . " " . $second_number . " ";
while ($num < 8) {
    $third_number = $second_number + $first_number;
    echo $third_number . " ";
    $first_number = $second_number;
    $second_number = $third_number;
    $num = $num + 1;
}

//Using Do while loop
$num = 0;
$first_number = 0;
$second_number = 1;
echo "<br /> *************************Using do while Loop*********************** <br/>";
echo $first_number . " " . $second_number . " ";
do {
    $third_number = $second_number + $first_number;
    echo $third_number . " ";
    $first_number = $second_number;
    $second_number = $third_number;
    $num = $num + 1;
} while ($num < 8);
