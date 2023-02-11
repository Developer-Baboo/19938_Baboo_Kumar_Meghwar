<?php
    $limit = 5;
    $output = $limit;
    //Using Nested For LOOP
    for ($a = $limit - 1; $a > 0; $a--) {
        $addition= 0;
    for ($b = 0; $b < $a; $b++) {
        $addition += $output;
    }

    $output = $addition;
    }
echo "$output";
?>