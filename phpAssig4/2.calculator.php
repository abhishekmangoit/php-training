<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <?php
        class Calculator{
            private $firstNumber, $secondNumber, $divide;
            public function __construct($firstNumber,$secondNumber, $divide='no'){
                $this->firstNumber = $firstNumber;
                $this->secondNumber = $secondNumber;
                $this->divide = $divide;
                $this->addTwoNumbers();
                $this->subtractTwoNumbers();
                $this->multiplyTwoNumbers();
                if($this->divide == 'yes'){$this->divideTwoNumbers();}
            }
            public function addTwoNumbers(){
                echo "Addition of $this->firstNumber and $this->secondNumber is ".($this->firstNumber+$this->secondNumber)."<br><br>";
            }
            public function subtractTwoNumbers(){
                echo "Subtraction of $this->firstNumber and $this->secondNumber is ".($this->firstNumber-$this->secondNumber)."<br><br>";
            }
            public function multiplyTwoNumbers(){
                echo "Multiplication of $this->firstNumber and $this->secondNumber is ".($this->firstNumber*$this->secondNumber)."<br><br>";
            }
            public function divideTwoNumbers(){
                if(!$this->secondNumber == 0){
                    echo "Devision of $this->firstNumber and $this->secondNumber is ".($this->firstNumber/$this->secondNumber)."<br>";
                }else{
                    echo "Can not divide with 0.<br>";
                }
            }
        }
        $calculate = new Calculator(12,-10,'no');
    ?>
</body>
</html>