<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>PhP Start</h1>
    
    <?php
    
    

    $a = 10;
    $b = 10;
    $c = $a + $b;
     echo "Value of a: ".$a. "and value of b: " .$b. "is equal to ".$c. "<br>";

     echo "Hello World <br>";
      var_dump($a);

      $text = "Sample text";
      $number = 100;

      echo "<br>";
      echo "Value of text is :".$text. "And Number is:" .$number;
    
      echo "<h3>Swap two Num</h3>";

      $num1 = 20;
      $num2 = 30;

      echo "The number before swapping is: <br>";
      echo "num1 =" .$num1. "and num2 =" .$num2. "<br>";

      $temp = $num1;
      $num1 = $num2;
      $num2 = $temp;

      echo "The number after swapping is: <br>";
      echo "num1 = " .$num1. "and num2 =" .$num2;

    ?>

    <h3>PHP String Functions<h3>
    <?php

    $stringChar = "Hello Steve";
    $stringLen = strlen($stringChar); //string lenght
    $stringWordCount = str_word_count($stringChar);
    $stringReverse = strrev($stringChar);

    $stringFind = strpos($stringChar, "Steve");
    $stringReplace = str_replace("Steve","Diana",$stringChar);

    echo "Lenght of String <b>" .$stringChar. "</b> is: " .$stringLen."<br>";
    echo "Count of string <b>" .$stringChar. "</b> is: " .$stringWordCount."<br>";
    echo "Reverse of string <b>" .$stringChar. "</b> is: " .$stringReverse. "<br>";
    echo "Find the string <b>" .$stringChar. "</b> is: " .$stringFind. "<br>";
    echo "Replace the string <b>" .$stringChar. "</b> is: " .$stringReplace. "<br>";
    
    
    ?>
    <h3>PHP Math Function</h3>
    <?php

    echo "<h5>Area of Surface</h5>";
    $radius =6;
    $surfaceArea = 4 * pi() * $radius * $radius;
    echo "Surface Area is:" . $surfaceArea. "<br>";

    echo (min(0,20,70,-90,-800));
    echo "<br>";
    echo (max(0,20,70,-90,-800));
    

    ?>


    <?php

    echo "<h5>CONSTANT VARIABLE</h5>";

    define("Hello", "What new in PHP", true);

    echo hello;

    echo "<h5>Global Constant</h5>";

    define("HelloVar", "What Something new in PHP", true);

    function myTest(){
        echo HelloVar;
    }

    myTest();
    ?>
</body>
</html>