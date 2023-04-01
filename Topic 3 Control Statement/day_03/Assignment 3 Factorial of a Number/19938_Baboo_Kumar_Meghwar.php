<?php
echo "<br /> ************** Using For loop ****************** <br />";
$num = 10;
$fact = 1;
for ($x = $num; $x >= 1; $x--) {
    $fact = $fact * $x;
}
echo "Factorial of $num is $fact <br/>";
?>

<?php
echo "<br /> ************** Using While loop ****************** <br />";
$num = 10;
$fact = 1;
$x = $num;
while ($x >= 1) {
    $fact = $fact * $x;
    $x--;
}
echo "Factorial of $num is $fact";
?>







