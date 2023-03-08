<?php
echo " ***************************** i) Make user defined function of the following like built in function**************************** <br /> <br />";
echo " a) Strtoupper";
 function new_function($my_string = "Baboo Kumar Meghwar") 
 {
    echo "<br/> Input : $my_string";
    $output = "";
    $a = 0;
    do{
        $value = ord($my_string[$a]);
        if($value >= 97 && $value <= 122) 
        {
            $value = $value-32;
        }
        $output = $output.chr($value);
        $a++;
    }while(isset($my_string[$a]));
    return $output;
}
echo"<br/> Output: ". new_function();

echo "<br /><br/>";

echo " b) Implode <br/>";

echo 'Input : $arr = array("Hello", "World!", "Beautiful", "Day!") <br/> ';

echo "Output : ";
function my_function($arr = array('Hello', 'World!', 'Beautiful', 'Day!')){
    for ($a = 0; isset($arr[$a]); $a++) {
        echo "  $arr[$a]  ";
    }
}
my_function();

echo "<br /> <br /> c) Explode <br/>";
// echo " <br/> Input :  ";
function _my_function($str){
    $array = [];
    $current_str = '';
    echo "Input: $str <br/>";
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == " ") {
            $array[] = $current_str;
            $current_str = '';
        } else {
            $current_str .= $str[$i];
        }
    }
    $array[] = $current_str;
    echo "<br/> Output : <br/?";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
_my_function("19938 Baboo Kumar Meghwar");
// $str = "19938 Baboo Kumar Meghwar";


echo "d) Strlen()<br/>";
function _function_($str)
{
    echo "Input: $str <br/>";
    $count = 1;
    for ($a = 1; isset($str[$a]); $a++) {
        $count++;
    }
    echo "Output: $count";
}
_function_("University of Sindh Jamshoro");

echo "<br/>d) Strrev()<br/>";
function rev_function($str)
{
    for ($a = 0; isset($str[$a]); $a++) {
    }
}
rev_function("Baboo");

echo "<br/>d) Range()<br/>";

function range_function($start, $end)
{
    // $start, $end
    echo "Starting value: $start, Ending value: $end <br/>";
    echo "Output : ";
    for ($a = $start; $a <= $end; $a++) {
        echo " $a ";
    }
}
range_function(1, 10);






?>