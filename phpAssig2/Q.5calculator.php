<?php
    // Function to add two numbers
    function additionFunction($firstNumber, $secondnumber){
        return $firstNumber+$secondnumber;
    }
    // Function to subtract two numbers
    function subtractionFunction($firstNumber, $secondnumber){
        return $firstNumber-$secondnumber;
    }
    // Function to multiply two numbers
    function multiplicationFunction($firstNumber, $secondnumber){
        return $firstNumber*$secondnumber;
    }
    // Function to divide two numbers
    function divisionFunction($firstNumber, $secondnumber){
        return $firstNumber/$secondnumber;
    }

    $firstNumber = 10;
    $secondnumber = 40;
    $operator = '+';
    switch($operator){
        case '+' :  echo "Addition result is ".additionFunction($firstNumber,$secondnumber)."<br>";
            break;
        case '-' :  echo "Subtraction result is ".subtractionFunction($firstNumber,$secondnumber)."<br>";
            break;
        case '*' : echo "Multiplication result is ".multiplicationFunction($firstNumber,$secondnumber)."<br>";
            break;   
        case '/' :  echo "Division result is ".divisionFunction($firstNumber,$secondnumber)."<br>";
            break;
        default : echo "Select Correct Operator";
    }
?>