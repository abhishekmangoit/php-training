<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculate Electricity bill</title>
</head>
<body>
    <form action="" method="POST">
        <div class="unitInput">
            <label for="consumptionUnit">Consumption Unit :</label>
            <input type="number" name="consumptionUnit" id="consumptionUnit" placeholder="Enter consumption unit">
            <input type="submit" value="Generate Bill">
        </div>
    </form>
    <?php
        class CalculateElectricityBill{
            private $consumptionUnit;
            public function __construct($unit){
                $this->consumptionUnit = $unit;
            }
            public function showElectricityBill(){
                if(isset($this->consumptionUnit)){
                    if ($this->consumptionUnit <= 100 && $this->consumptionUnit > 0) {
                        echo "Your consumption unit are $this->consumptionUnit so as per rate of Rs.6, your electricity bill is Rs. ".($this->consumptionUnit * 6);
                    } else if ($this->consumptionUnit <= 250 && $this->consumptionUnit > 100) {
                        echo "Your consumption unit are $this->consumptionUnit so as per rate of Rs.10, your electricity bill is Rs. ".($this->consumptionUnit * 10);
                    } else if ($this->consumptionUnit > 250 && $this->consumptionUnit > 250) {
                        $consumptionUnitBill = $this->consumptionUnit * 15;
                        $consumptionUnitBillTotal = $consumptionUnitBill + (($consumptionUnitBill * 5) / 100);
                        echo "Your consumption unit are $this->consumptionUnit so as per rate of Rs.15 and 5% additional consumption charge, your electricity bill is Rs. $consumptionUnitBillTotal";
                    } else {
                        echo "Enter correct consumption unit";
                    }
                }
            }
        }
        $bill = new CalculateElectricityBill($_POST["consumptionUnit"]);
        $bill->showElectricityBill();
    ?>
</body>
</html>