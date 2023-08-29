<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>factorial of five</title>
</head>
<body>
    <?php
        class FactorialOfFive {
            private $number = 5;
            public function factorial()
            {
                $factorial = 1;
                for ($i = 1; $i <= $this->number; $i++) {
                    $factorial *= $i;
                }
                return $factorial;
            }
        }
        $number = new FactorialOfFive();
        echo "factorial of 5 is ".$number->factorial();
    ?>
</body>
</html>