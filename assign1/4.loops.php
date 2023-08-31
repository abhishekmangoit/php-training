<?php 
    echo "Printing table of 10 using for loop <br>";
    for($i =1; $i<=10; $i++){
        echo "10 * $i = ".(10*$i)."<br>";
    }
    echo "Printing table of 10 using while loop <br>";
    $i=1;
    while($i<=10){
        echo "10 * $i = ".(10*$i)."<br>";
        $i++;
    }
    $j=1;
    echo "Printing table of 10 using do-while loop <br>";
    do{
        echo "10 * $j = ".(10*$j)."<br>";
        $j++;
    }while($j<=10);
?>