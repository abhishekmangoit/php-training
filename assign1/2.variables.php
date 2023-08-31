<?php 
    $score = 100; 
    $percent = 70.80;
    $isPassed = true;
    $message = 'congratulations';
    $messageAgain= "Congrats";
    $subjects = ['php','html','css'];
    $nullType = NULL;
    echo "score $score This is the integer datatype in php.<br>";
    echo "percent $percent This is the float datatype in php.<br>";
    echo "isPassed $isPassed This is the boolean datatype in php.<br>";
    echo "message $message This is the String datatype in single quotes in php.<br>";
    echo "messageAgain $messageAgain This is the String datatype in double qoutes in php.<br>";
    echo var_dump($isPassed)."<br>"; //to show the variable and its type
    echo var_dump($nullType);
    echo "<pre>";
    print_r($subjects);
?>