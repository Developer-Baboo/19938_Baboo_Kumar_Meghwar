<?php
$total_units = 201;
switch (true) {
    case ($total_units >= 1 && $total_units <= 100):
        $bill = $total_units * 5;
        echo "Your total electricity bill is: $bill";
        break;
    case ($total_units >= 101 && $total_units <= 200):
        $bill = (100 * 5) + ($total_units - 100) * 10;
        echo "Your total electricity bill is: $bill";
        break;
    case ($total_units >= 201 && $total_units <= 300):
        $bill = (100 * 5) + (100 * 10) + ($total_units - 200) * 15;
        echo "Your total electricity bill is: $bill";
        break;
    case ($total_units >= 301 && $total_units <= 400):
        $bill = (100 * 5) + (100 * 10) + (100 * 15) + ($total_units - 300) * 25;
        echo "Your total electricity bill is: $bill";
        break;
}
