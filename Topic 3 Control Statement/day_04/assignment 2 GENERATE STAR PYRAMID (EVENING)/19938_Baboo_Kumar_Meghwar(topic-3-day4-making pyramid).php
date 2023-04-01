<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 11; $j >= $i; $j--) {
        echo "&nbsp";
    }

    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    for ($l = 2; $l <= $i; $l++) {
        echo "*";
    }
    echo "<br />";
}
