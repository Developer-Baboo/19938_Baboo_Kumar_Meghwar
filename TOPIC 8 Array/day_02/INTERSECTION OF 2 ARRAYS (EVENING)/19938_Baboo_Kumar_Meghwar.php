<?php
// echo "Hello I am working";
$first_array = [1,3,5,4,6];
$second_array = [2,2,4,5];
$common_elements = [];

for ($i = 0; isset($first_array[$i]); $i++) 
{
    for ($j = 0; isset($second_array[$j]);$j++){
       if($first_array[$i] === $second_array[$j] )
       {
            continue;
            echo "<pre>";
                    print_r($first_array);
            echo "<pre/>";
       }
    }
    echo "<br />";
}

// echo "<pre>";
// print_r($first_array);
// echo "<pre/>";
// echo "Intersetion of set First Array and Second Array is : "
