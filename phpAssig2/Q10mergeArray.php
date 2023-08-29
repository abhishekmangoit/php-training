<?php
    $array1 = array(3,5,1,6);
    $array2 = array(5,2,9,7,0);
    echo "<pre>";
    echo "First ";
    print_r($array1);
    echo "Second ";
    print_r($array2);
    echo "Merged ";
    print_r(array_merge($array1,$array2));
    print_r(array_merge($array2,$array1));
?>