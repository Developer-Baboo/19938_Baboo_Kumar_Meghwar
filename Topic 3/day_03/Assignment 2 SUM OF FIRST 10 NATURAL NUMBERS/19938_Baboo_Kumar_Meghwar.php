<?php
//using for loop
echo "<br /> ****************Made Using For Loop ****************************** <br/>";
$i = 1;
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    echo " " . $i;
    if ($i != 10) {
        echo " + ";
    }
    $sum = $sum + $i;
}
echo " = $sum";

//Using While loop
echo "<br /> *********************Made Using While Loop********************* <br/>";
$loop = 1;
$sum = 0;
while ($loop <= 10) {

    echo " " . $loop;
    if ($loop != 10) {
        echo " + ";
    }

    $sum = $sum + $loop;

    $loop++;

}
echo " = $sum";
