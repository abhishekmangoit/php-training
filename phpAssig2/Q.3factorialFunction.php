<?php
    $number = 5;
    function factorialOfNumber($number){
        $factorial = 1;
        while($number >0){
            $factorial = $factorial*$number ;
            $number--;
        }
        echo "Factorial of number is $factorial";
    }
    factorialOfNumber($number);
?>