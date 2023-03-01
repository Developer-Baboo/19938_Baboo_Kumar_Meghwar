<?php
$find_item = 6;
$first_array = [1, 3, 5, 4, 6, 7, 6];
for ($j = 0; isset($first_array[$j]); $j++) {
    if ($first_array[$j] === $find_item) {
        echo "value $find_item found on  $first_array[$j]";
        echo "<br />";
    }
}