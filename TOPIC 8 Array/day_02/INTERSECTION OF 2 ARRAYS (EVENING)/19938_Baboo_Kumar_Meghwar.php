<?php
// echo "testing";
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
$result = [];
for ($i = 0; isset($array1[$i]); $i++) 
{
  for ($j = 0;isset($array2[$j]); $j++) {
    if ($array1[$i] == $array2[$j]) {
      $result.array_merge($array1[$i]);
      break;
    }
  }
}
echo ($result);
?>