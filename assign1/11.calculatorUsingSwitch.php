<?php 
    $firstNumber = 14;
    $secondNumber = 56;
    $operator = '-' ;
    switch($operator){
        case '+' : echo "Addition result is ".($firstNumber+$secondNumber);
            break;
        case '-' : echo "Subtraction result is ".($firstNumber-$secondNumber);
            break;
        case '*' : echo "Multiplication result is ".($firstNumber*$secondNumber);
            break;   
        case '/' : echo "Division result is ".($firstNumber/$secondNumber);
            break;
        default : echo "Select Correct Operator";
    }
?>