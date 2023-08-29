<?php
    $number = -2;
    function isPrime($number){
        if($number=='1' || $number== '2'){
                return true;
            }
        for($i=2; $i<$number/2; $i++){
            if($number%$i == 0){
                return false;
            }
        }
       return true;
    }
   
    if( isPrime($number)){
        echo 'Entered number is prime';
    }else{
        echo 'Entered number is not prime';
    }
?>