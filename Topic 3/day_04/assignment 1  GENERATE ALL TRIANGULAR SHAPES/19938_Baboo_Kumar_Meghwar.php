<?php

$rows;
$column;
echo "a. Star Triangular Shape<br />";
for ($rows = 1; $rows <= 5; $rows++) {
    for ($column = 1; $column <= $rows; $column++) {
        echo "*";
    }
    echo "<br />";
}


$i;
$j;
$abc = 'A';
echo "<br /> b. Alphabetical Triangular Shape<br />";
for ($i = 'A'; $i <= 'E'; $i++) {
    for ($j = 'A'; $j <= $i; $j++) {
        // $c = 'a';
        echo $j;
    }
    echo "<br />";
}


//c) Numeric Triangular Shape

echo "<br /> c. Numeric Triangular Shape<br />";
for ($i = '1'; $i <= '5'; $i++) {
    for ($j = '1'; $j <= $i; $j++) {
        // $c = 'a';
        echo $j;
    }
    echo "<br />";
}


//d) Numeric Triangular Shape And Its Multiplication
echo "<br /> d) Numeric Triangular Shape And Its Multiplication";
echo "<br />";
for ($a = '1'; $a <= '5'; $a++) {
    for ($b = '1'; $b <= $a; $b++) {
        $c = $a * $a;
        echo "$b";
    }
    // $c = $a * $b;
    echo "&nbsp &nbsp &nbsp = $c";
    echo "<br />";
}

