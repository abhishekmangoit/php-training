<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorted Array</title>
</head>
<body>
    <?php
        class SortArray{
            public function sort($array, $type){
                if($type == 'descending'){
                    rsort($array);
                }else{
                    sort($array);
                }
                return $array;
            }
        }
        $array = array(11,-2,4,35,0,8,-9);
        echo "<pre>";
        echo "Unsorted ";
        print_r($array);
        $sortedArray = new SortArray();
        $array = $sortedArray->sort($array,'descending');
        echo "Sorted ";
        print_r($array);
    ?>
</body>
</html>