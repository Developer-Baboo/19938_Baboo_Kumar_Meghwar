<?php
echo "Count total number of notes in Given Amount";
echo "<br />";
$amount = 6780;
echo "Amount is $amount";
echo "<br />";

$five_thousand_note = $amount / 5000;
$note = $amount % 5000;
settype($five_thousand_note, "integer");
echo "5000:" . $five_thousand_note;
echo "<br>";

$one_thousand_note = $note / 1000;
$note = $amount % 1000;
settype($one_thousand_note, "integer");
echo "1000:" . $one_thousand_note;
echo "<br>";



$five_hundred_note = $note / 500;
$note = $amount % 500;
settype($five_hundred_note, "integer");
echo "500:" . $five_hundred_note;
echo "<br>";

$one_hundred_note = $note / 100;
$note = $note % 100;
settype($one_hundred_note, "integer");
echo "100:" . $one_hundred_note;
echo "<br>";

$fifty_rupees_note = $note / 50;
$note = $note % 50;
settype($fifty_rupees_note, "integer");
echo "50:" . $fifty_rupees_note;

$twenty_rupees_note = $note / 20;
$note = $note % 20;
settype($twenty_rupees_note, "integer");
echo "<br />";
echo "20:" . $twenty_rupees_note;


$ten_rupees_note = $note / 10;
$note = $note % 10;
settype($ten_rupees_note, "integer");
echo "<br />";
echo "10:" . $ten_rupees_note;

$five_rupees_note = $note / 5;
$note = $note % 5;
settype($five_rupees_note, "integer");
echo "<br />";
echo "5:" . $five_rupees_note;

$two_rupees_note = $note / 2;
$note = $note % 2;
settype($two_rupees_note, "integer");
echo "<br />";
echo "2:" . $two_rupees_note;

$one_rupees_note = $note / 1;
$note = $note % 1;
settype($one_rupees_note, "integer");
echo "<br />";
echo "1:" . $one_rupees_note;


?>