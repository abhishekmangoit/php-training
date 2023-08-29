<?php
// for loop for printing left side triangle
    for($i=0; $i<6; $i++){
        for($j=0; $j<=$i; $j++){
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";

// for loop for printing right side triangle
    for($i=0; $i<6; $i++){
        for($j=6; $j>$i; $j--){
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";

// for loop for printing vertical pyramid
    for($i=0; $i<13; $i++){
        if($i<7){
            for($j=0; $j<=$i; $j++){
                echo "* ";
            }
            echo "<br>";
        }else{
            for($j=13; $j>$i; $j--){
                echo "* ";
            }
            echo "<br>";
        }
    }
?>