<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reverse a string</title>
</head>
<body>
    <?php 
        class ReverseString{
            public function reverse($string){
                return strrev($string);
            }
        }
        $string = 'Hello World';
        $reversedString = new ReverseString();
        echo $reversedString->reverse($string);
    ?>
</body>
</html>