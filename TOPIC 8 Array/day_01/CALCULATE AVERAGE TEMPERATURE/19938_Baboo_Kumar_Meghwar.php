<?php
$array_variable = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$count = 0;
$sum = 0;
// echo "<pre>";
//         print_r($array_variable);
// echo "</pre>";
foreach ($array_variable as $i => $k) {
    $count = $count + 1;
    $sum = $k + $sum;
}
$average = $sum/$count;
echo "The Average: $average"."<br/>";
echo "5 Maximum are: ";
foreach ($array_variable as $i => $k) {
   if($k>=76){
        echo "  $k  ";
   }
}

echo "<br/>"."5 Minimum are: ";
foreach ($array_variable as $i => $k) {
    if ($k <= 62) {
        echo "  $k  ";
    }
}
?>