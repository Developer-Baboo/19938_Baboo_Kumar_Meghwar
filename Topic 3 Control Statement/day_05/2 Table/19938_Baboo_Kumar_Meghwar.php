<?php
//using for loop
$table_number = 1;
$i;
$limit = 8;
echo "<br /> *************************Using For Loop*********************** <br/>";
for ($i = 1; $i <= $limit - 1; $i++) {
    $table_number++;
    for ($j = 1; $j <= 10; $j++) {
        echo "$table_number * $j = " . ($table_number * $j);
        echo "<br />";
    }
    echo "<br />";
}
//using while loop
echo "<br /> *************************Using while Loop*********************** <br/>";
$table_number = 1;
$i;
$limit = 8;
$i = 1;
while ($i <= $limit - 1) {
    $table_number++;
    $j = 1;
    while ($j <= 10) {
        echo "$table_number * $j = " . ($table_number * $j);
        echo "<br />";
        $j++;
    }
    echo "<br />";
    $i++;
}
//using do while
echo "<br /> *************************Using do while Loop*********************** <br/>";
$table_number = 1;
$i;
$limit = 8;
$i = 1;
do {
    $table_number++;
    $j = 1;
    do {
        echo "$table_number * $j = " . ($table_number * $j);
        echo "<br />";
        $j++;
    } while ($j <= 10);
    echo "<br />";
    $i++;
} while ($i <= $limit - 1);
?>