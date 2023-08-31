<?php
    $consumptionUnit = 320;
    if($consumptionUnit <= 100 && $consumptionUnit > 0){
        echo "Your consumption unit are $consumptionUnit so as per rate of Rs.6, your electricity bill is ".($consumptionUnit*6);
    }else if($consumptionUnit <= 250 && $consumptionUnit > 100){
        echo "Your consumption unit are $consumptionUnit so as per rate of Rs.10, your electricity bill is ".($consumptionUnit*10);       
    }else if($consumptionUnit > 250 ){
        $consumptionUnitBill = $consumptionUnit * 15;
        $consumptionUnitBillTotal = $consumptionUnitBill+(($consumptionUnitBill * 5) / 100 );
        echo "Your consumption unit are $consumptionUnit so as per rate of Rs.15 and 5% additional consumption charge, your electricity bill is $consumptionUnitBillTotal";
    }else{
        echo "Enter Correct consumptionUnit";
    }
?>