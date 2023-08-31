<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            display : flex;
            flex-direction : column;
            align-items : center;
        }
        .black{
            background-color : black;
            margin : 0;
            padding : 0;
        }
        div{
            height : 50px;
            width : 50px;
            margin : 0;
            padding : 0;
            border : 1px solid black;
        }
        .rowDiv{
            width : 400px;
            display: flex;
            margin : 0;
            padding : 0;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h3>Chess-Board</h3>
    <?php
        for($row=0; $row<8; $row++){
            if($row%2==0){
                echo "<div class='rowDiv'>";
                for($col=0 ; $col<8; $col++){
                    if($col%2==0){ 
                        echo "<div class='black'></div>";
                   }else{ 
                        echo "<div></div>";
                    }
                }
               echo"</div>";
            }else{  
                echo "<div class='rowDiv'>";
                for($col=0 ; $col<8; $col++){
                    if($col%2==0){ 
                        echo "<div ></div>";
                    }else{ 
                        echo "<div class='black'></div>";
                    }    
                }
                echo"</div>";
             }
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";

        for($row=0; $row<8; $row++){
            echo "<div class='rowDiv'>";
            if($row%2==0){
                
                for($col=0 ; $col<8; $col++){
                    if($col%2==0){ 
                        echo "<div class='black'></div>";
                   }else{ 
                        echo "<div></div>";
                    }
                }
            }else{
                for($col=0 ; $col<8; $col++){
                    if($col%2==0){ 
                        echo "<div ></div>";
                    }else{ 
                        echo "<div class='black'></div>";
                    }    
                }
                
             }
             echo"</div>";
        }
    ?>
</body>
</html>

