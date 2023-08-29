<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To check position of word</title>
</head>
<body>
    <?php
        class CheckPositionOfWord {
            public function postionOfWordInString($string, $word){
                $position = strpos($string, $word);
                echo "position of $word in string is $position";
            }
        }
        $string = 'It was a very enriching experience at the University as not only we were actively involved in practical projects';
        $newString = new CheckPositionOfWord();
        $newString->postionOfWordInString($string, 'experience');
    ?>
</body>
</html>