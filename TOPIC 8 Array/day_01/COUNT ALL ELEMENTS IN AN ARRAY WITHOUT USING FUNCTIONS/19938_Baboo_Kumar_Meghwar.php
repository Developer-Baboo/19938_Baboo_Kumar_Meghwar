<?php
$array = array(10, 20, 25, 5 => 10, 3 => 12, 0 => 100, 10, 20, "30", "alphabet", "number", "01" => 40);
$sum_of_elements_of_array = 0;
$count = 0;
// echo "<pre>";
//         print_r($array);
// echo "</pre>";
foreach ($array as $i => $k) 
{
    $count = $count + 1;     
}
echo "Total Number of Elements in Array is : $count";
?>