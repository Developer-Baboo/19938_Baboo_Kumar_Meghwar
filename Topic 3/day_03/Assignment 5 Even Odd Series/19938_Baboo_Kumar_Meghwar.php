

<?php
// 1 3 5 7 9 11….99
// 2 4 6 8 10 12…..100
echo "<br /> ************** Using For loop ****************** <br />";
$even_series = '';
$odd_series = '';
for ($i = 1; $i <= 100; $i++) {
  if ($i % 2 == 0) {
    // If number is even, add it to the even series
    $even_series .= $i . ' ';
  } else {
    // If number is odd, add it to the odd series
    $odd_series .= $i . ' ';
  }
}

// Print the even and odd series on separate lines
echo $even_series . '<br>' . $odd_series;


echo "<br /> ************** Using While loop ****************** <br />";
echo "Even Series <br />";
$even_series = '';
$odd_series = '';
$i = 1;
while($i <= 100) {
  if ($i % 2 == 0) {
    // If number is even, add it to the even series
    $even_series .= $i . ' ';
  } else {
    // If number is odd, add it to the odd series
    $odd_series .= $i . ' ';
  }
   $i++;
}

// Print the even and odd series on separate lines
echo $even_series . '<br>' . $odd_series;


?>