<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Start PhP</h1>


    <?php
           
           $a = 10;
           $b = 10;
           $c = $a + $b;

           echo "Value of a: " .$a. "and value of b: " .$b. "is equal to ".$c."<br>";

            echo "Hello World <br>";


            var_dump($a);


            $text = "Sample text";
            $number = 100;

            echo "<br>";
            var_dump($text);

            echo "<br>";
            echo "Value of text is: ".$text. "And Number is: ".$number;



            echo "<h3>SWAP TWO NUM</h3>";

            $num1 = 20;
            $num2 = 30;

            echo "The number before swapping is: <br>";
            echo "num1 = ".$num1. "and num2 = ".$num2. "<br>";

            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;

            echo "The number after swapping is: <br>";
            echo "num1 = ".$num1. "and num2 = ".$num2;
            
    
    ?>
    <h3>PHP STRING FUNCTIONS</h3>
    <?php
        $stringChar = "Hello Steve";
        $stringLen = strlen($stringChar); //string length
        $stringWordCount = str_word_count($stringChar); // word count
        $stringReverse = strrev($stringChar); //Reverse String

        $stringFind = strpos($stringChar, "Steve"); //find string
        $stringReplace = str_replace("Steve","Diana",$stringChar); //Replace String

        echo "Length of String <b>" .$stringChar. "</b> is: ".$stringLen."<br>";
        echo "Count of String <b>" .$stringChar. "</b> is: ".$stringWordCount."<br>";

        echo "Reverse of String <b>" .$stringChar. "</b> is: ".$stringReverse."<br>";

        echo " Find the String <b>" .$stringChar. "</b> is: ".$stringFind."<br>";

        echo " Replace the String <b>" .$stringChar. "</b> is: ".$stringReplace."<br>";


    ?>

    <h3>PHP Math Function</h3>

    <?php
        echo "<h5>Area of Surface</h5>";
        $radius = 6;
        $surfaceArea = 4 * pi() * $radius * $radius;
        echo "Surface Area is: ".$surfaceArea. "<br>";

        echo(min(0,20,70,-90,-800));
        echo "<br>";
        echo(max(0,20,70,-90,-800));

        // OR

        echo "<br>";
        echo "<br>";
        $greatervalue = max(0,20,70,-90,-800);

        echo $greatervalue;

        // OR
        
        echo "<br>";
        echo "<br>";

        $Lesservalue = min(0,20,70,-90,-800);

        echo $Lesservalue;


    ?>



</body>
</html>