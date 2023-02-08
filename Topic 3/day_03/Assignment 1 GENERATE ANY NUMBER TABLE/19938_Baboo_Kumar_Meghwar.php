<?php
//Using For Loop
$table_number = 11;
$ending_point = 12;
$i = '';
$starting_point = 5;
echo "Table of $table_number is :";
echo "<br />";
for ($i = $starting_point; $i <= $ending_point; $i++) {
    echo "$table_number X $i = " . $table_number * $i;
    echo "<br />";
}

//Using While Loop Loop
$table_number = 11;
$ending_point = 12;
$i = '';
$starting_point = 5;
echo "Table of $table_number is :";
echo "<br />";
$i = $starting_point;
while ($i <= $ending_point) {
    echo "$table_number X $i = " . $table_number * $i;
    echo "<br />";
    $i++;
}
