<?php
echo "i. Make user defined function of the following like built in function: <br />";
echo " a) .strtoupper";
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
?>