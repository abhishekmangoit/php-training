<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>factorial of a number</title>
</head>
<body>
    <?php
    class FactorialOfNumber{
        private $number;
        public function __construct($number)
        {
            if (!is_int($number)) {
                echo ('Not a number or missing argument');
            }
            $this->number = abs($number);
        }
        public function factorial()
        {
            $factorial = 1;
            for ($i = 1; $i <= $this->number; $i++) {
                $factorial *= $i;
            }
            echo "factorial of $this->number is $factorial";
        }
    }
    $number = new FactorialOfNumber(6);
    $number->factorial();
    ?>
</body>
</html>