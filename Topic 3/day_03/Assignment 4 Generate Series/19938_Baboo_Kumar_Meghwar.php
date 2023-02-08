

<?php
// 1) 1 4 9 16 25
// 2) 1 3 6 10 15 21
//1+0, 2+1,3+3, 6+4, 10+5
// 3) 50 40 30 20 10
// 4) 6 12 20 30 42
echo "<br /> ************** Using For loop ****************** <br />";
//First Series
for ($i = 1; $i <= 5; $i++) {
    $b = $i * $i;
    echo " $b";
}
//Second Series
echo "<br />";
for ($i = 1; $i <= 6; $i++) {
    $b = ($i * ($i + 1)) / 2;
    echo " $b";
}

//third Series
echo "<br />";
for ($i = 5; $i >= 1; $i--) {
    $c = $i * 10;
    echo " $c";
}

//fourth Series
// 4) 6 12 20 30 42
echo "<br />";
for ($i = 2; $i <= 6; $i++) {
    $d = ($i * $i) + $i;
    echo " $d";
}

echo "<br /> ************** Using While loop ****************** <br />";
//First Series
$i = 1;

while ($i <= 5) {
    $b = $i * $i;
    echo " $b";
     $i++;
}
//Second Series
echo "<br />";
$i = 1;
while ($i <= 6) {
    $b = ($i * ($i + 1)) / 2;
    echo " $b";
     $i++;
}

//third Series
echo "<br />";
$i = 5;
while($i >= 1) {
    $c = $i * 10;
    echo " $c";
     $i--;
}

//fourth Series
// 4) 6 12 20 30 42
echo "<br />";
$i = 2;
while($i <= 6) {
    $d = ($i * $i) + $i;
    echo " $d";
    $i++;
}

?>