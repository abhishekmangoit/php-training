<?php
    $string = 'abhishek';
    $stringLength = strlen($string);
    // Reversing String through swaping
    for($i=0; $i<$stringLength/2; $i++){
      $temp = $string[$i];
      $string[$i] = $string[$stringLength-$i-1];
      $string[$stringLength-$i-1] = $temp;
    } 
    echo "Reversed string is $string <br>"; 

?>