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
echo "<br /> b. Alphabetical Triangular Shape<br />";
for ($i = 'a'; $i <= 5; $i++) {
    for ($j = 'a'; $j <= $i; $j++) {
        echo $c;
    }
    echo "<br />";
}

// $a = 'a';
// $c = ++$a;
// echo "$c";
