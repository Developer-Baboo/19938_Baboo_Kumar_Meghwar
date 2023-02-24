<?php
    $sub1 = 90;
    $sub2 = 80;
    $sub3 = 70;
    $sub3 = 85;
    $sub4 = 60;
    $sub5 = 75;
    $total = $sub1+$sub2+$sub3+$sub4+$sub5;
    echo "Your Total Marks are 500";
    echo "<br />";
    if($sub1<40 || $sub2<40 || $sub3<40 && $sub4<40 || $sub5<40){
        echo "You are failed";
    }
    else {
        echo "Your obtained marks are $total"; 
    }
    $percentage = $total*100/500;
    echo "<br />";
    echo "Your percentage is : $percentage";
     echo "<br />";
    if($percentage>=40 && $percentage<=60){
        echo "Your grade is C";
         echo "<br />";
    }if($percentage>=61 && $percentage<=79){
        echo "Your grade is B";
         echo "<br />";
    }
    if($percentage>=80 && $percentage<=89){
        echo "Your grade is A";
    }
    if($percentage>=90 && $percentage<=100){
        echo "Your grade is A+";
    }
?>