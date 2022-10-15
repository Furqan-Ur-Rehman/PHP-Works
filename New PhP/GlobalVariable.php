<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>GLOBAL VARIABLE</h3>
    
    <?php
    
    $x = 75;
    $y = 25;

    function addition(){
        $GLOBALS['c'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo "Value of C is: " .$c;

    ?>

    <h3>Another Work Global Variable</h3>
    <?php
    $a = 80;

    function globalTest(){
        global $a;
        $res = $a + 2;  //Local Variable
        echo "Value of Res is :" .$res;
    }

    globalTest();
    ?>
</body>
</html>