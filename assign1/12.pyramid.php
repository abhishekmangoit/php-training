<?php 
    for($i=0; $i<4; $i++){
        for($j=3; $j>$i; $j--){
            echo "&nbsp &nbsp";
        }
        for($k=0; $k<=$i; $k++){
            echo "* ";
        }
        for($l=1; $l<=$i; $l++){
            echo "* ";
        }
        echo "<br>";
    }
?>