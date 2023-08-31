<?php
    $string = "This is a string";
    function stringUpperCase($string){
        return strtoupper($string);
    }
    function stringLowerCase($string){
        return strtolower($string);
    }
    $selectCase = "sfshfkjhdskjfhsdkjJHKJHWUEUIWQ";
    switch(strtolower($selectCase)){
        case "lowercase" : echo stringLowerCase($string);
            break;
        case "uppercase" : echo stringUpperCase($string);
            break;
        default : echo stringLowerCase($string);
    }
    
?>