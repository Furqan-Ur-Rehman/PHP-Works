<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobalVariables</title>
</head>
<body>
    
<?php

$a = 75;
$b = 25;

function addition(){

    $GLOBALS['c'] =$GLOBALS['a'] + $GLOBALS['b'];    
}

addition();
echo "<h3> The Sum of a($a) and b[$b] is: </h3> " . "<h3> ".$c. "</h3>";

?>


<h3><u>Another method on Global Variable</u></h3>

<?php 
$x = 20;

function GlobalTest(){
    global $x; // [$x] is a global variable due to keyword "global"
    $result = $x + 5;  // [$result] is a Local variable.
    echo "Value of x ($x) is : " . $result;
}

GlobalTest();


?>
</body>
</html>