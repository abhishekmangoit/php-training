<?php
    $array = array(3,6,1,8,3,2,9,0);
    function sortArray($array){
        $arrayLength = sizeof($array);
        for($i=0; $i<$arrayLength; $i++){
            for($j=$i+1; $j<$arrayLength; $j++){
                if($array[$j]<$array[$i]){
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        return $array;
    }
    
    echo "<pre>";
    echo "Unsorted ";
    print_r($array);
    $sortedArray = sortArray($array);
    echo "Sorted ";
    print_r($sortedArray);
   
?>