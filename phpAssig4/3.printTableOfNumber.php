<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prints table of a number</title>
</head>
<body>
    <form action="" method="POST">
        <div class="numInput">
            <label for="inputNumber">Number :</label>
            <input type="number" name="inputNumber" id="inputNumber" placeholder="Enter number">
            <input type="submit" value="Print Table">
        </div>
    </form>
    <?php
    class TableOfNumber{
        private $number;
        public function __construct($number){
            $this->number = $number;
        }
        public function printTable(){
            if (isset($this->number)) {
                for ($i = 1; $i <= 10; $i++) {
                    echo "10 * $i = " . ($this->number * $i) . "<br>";
                }
            }
        }
    }
    $table = new TableOfNumber($_POST["inputNumber"]);
    $table->printTable();
    ?>
</body>
</html>