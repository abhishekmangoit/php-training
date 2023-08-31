<?php 
    $gender = "Female" ;
    $genderValue = strtolower($gender);
    switch($genderValue){
        case "male" : echo"gender selected is $gender";
            break;
        case "female" : echo " gender selected is $gender";
            break;
        default : echo "Select Gender";
    }
?>