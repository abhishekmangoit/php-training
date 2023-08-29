<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Replacig word in string</title>
</head>
<body>
    <?php
        class ReplaceWordinString {
            public function replaceWord($word, $newWord, $string){
                return str_replace($word, $newWord, $string);
            }
        }
        $string = 'I have been working as a position for x years';
        $newString = new ReplaceWordinString();
        $string = $newString->replaceWord('position','developer',$string);
        $string = $newString->replaceWord('x','10',$string);
        echo $string;
    ?>
</body>
</html>