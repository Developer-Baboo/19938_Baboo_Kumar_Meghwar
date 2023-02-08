

<?php
// 1 3 5 7 9 11….99
// 2 4 6 8 10 12…..100
echo "<br /> ************** Using For loop ****************** <br />";
echo "Even Series <br />";
for($i=1;$i<=50;$i++){
    $a = $i*2;
    echo " $a ";
}
echo "<br /> Odd Series <br />";
for ($i = 1; $i <= 100; $i++) {
  if($i%2!=0){
    echo " $i ";
  }
}

echo "<br /> ************** Using While loop ****************** <br />";
echo "Even Series <br />";
$i = 1;

while($i <= 50) {
    $a = $i * 2;
    echo " $a ";
     $i++;
}
echo "<br /> Odd Series <br />";
$i = 1;
while($i <= 100) {
    if ($i % 2 != 0) {
        echo " $i ";
    }
    $i++;
}


?>