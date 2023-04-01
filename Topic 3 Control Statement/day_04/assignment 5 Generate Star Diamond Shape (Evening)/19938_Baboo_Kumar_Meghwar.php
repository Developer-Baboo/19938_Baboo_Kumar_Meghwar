<?php
for ($a = 1; $a <= 3; $a++) {
    for ($b = 2; $b >= $a; $b--) {
        echo "&nbsp";
        //
    }
    for ($c = 1; $c <= $a; $c++) {
        echo "*";
    }
    for ($d =  2; $d <= $a; $d++) {
        echo "*";
    }
    echo "<br />";
}
// ******************half diamond **********
for ($e = 1; $e <= 2; $e++) {
    for ($f = 1; $f <= $e; $f++) {
        echo "&nbsp";
    }
    for ($g = 2; $g >= $e; $g--) {
        echo "*";
    }
    for ($h = 1; $h <= $e; $h++) {
        if ($e == 2) {
            break;
        }
        echo "*";
    }
    // for ($h = 2; $h <= $a; $h++) {

    // 	echo "*";
    // }
    echo "<br />";
}
?>