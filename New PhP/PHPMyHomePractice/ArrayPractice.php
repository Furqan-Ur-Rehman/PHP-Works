<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayPractice</title>
</head>
<body>
    
<h3>Array in PHP</h3>
<h2>Indexed Array</h2>

<?php
    $color = ['Red', 'Green', 'Blue', 'Yellow'];

    echo $color[0] ."<br><br>";
    echo $color[2];

    echo "<pre>";
    print_r($color);
    echo "</pre>";

    for($i =0; $i< 4; $i++){
        echo $color[$i] . " " . "<br>";
    }
    echo "-----------------------------------------------------------<br>";

    foreach($color as $val){
        echo $val ." " . "<br>";
    }
?>

<h2>Associative Array</h2>

<?php 
    $studentMarks = ['Name' => 'Furqan', 'Marks' => 100, 'Duration' => 3];

    echo $studentMarks['Name'] . "<br>";
    echo $studentMarks['Marks'] . "<br>";

    echo "<pre>";
    print_r($studentMarks);
    echo "</pre>";

    // for($i=0; $i < 4; $i++){
    //     echo $studentMarks[$i] . "<br>";
    // }

    foreach($studentMarks as $key => $val){
        echo "Array[$key] => $val  <br>";
    }

?>


<h2>MultiDimensional Array</h2>

<?php 
    $emp = [

        ['abc' ,'20' , 'Matric'],
        ['xyz' ,'25' , 'Inter'],
        ['efg' ,'30' , 'Graduate']

    ];

    echo "<pre>";
    print_r($emp);
    echo "</pre>";

    
    for($row = 0; $row < 3; $row++){
        echo " Row number: $row  <br>";

        echo "<ul>";
        for($col =0; $col < 3; $col++){
            echo '<li>' . $emp[$row][$col] . '</li>';
        }
        echo "</ul>";
    }

    echo "<h2>Print Array in Table using for loop</h2>";

    echo "<table border=1 cellpadding='5px' cellspacing='0'>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Education</th>
        </tr>
    
    ";

    for($row = 0; $row < 3; $row++){
        
        echo "<tr>";

            
            for($col =0; $col < 3; $col++){
                echo '<td>' . $emp[$row][$col] . '</td>';
            }

        echo "</tr>";
    }

    echo "</table>";


    echo "<br>";

    echo "<h2>Print Array in Table using foreach loop</h2>";

?>
<table border = 1 cellspacing="0" cellpadding="5px">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Education</th>
            </tr>
        <?php

        foreach($emp as $v1){
            
            echo "<tr>";
            foreach($v1 as $v2){
                echo '<td>' . $v2 . '</td>';
            }
            echo "</tr>";
        }
               
        ?>

</table>

<h2>MultiDimensional Associative Array</h2>

<?php 

        $student = [
            'Student1' => ['Name:' => 'Furqan', 'Php:' => 100, 'MVC:' => 98],
            'Student2' => ['Name:' => 'Adnan', 'Php:' => 100, 'MVC:' => 100],
            'Student3' => ['Name:' => 'ABC', 'Php:' => 56, 'MVC:' => 78]


        ];

        echo "<pre>";
        print_r($student);
        echo "</pre>";

        echo "<br>";

        echo "<table border=1 cellspacing='0' cellpadding='5px'>
            <tr>
                <th colspan=2>NAME</th>
                <th colspan=2>PHP MARKS</th>
                <th colspan=2>MVC MARKS</th>
            </tr>
        
        ";

            foreach($student as $key => $val1){
                 echo $key . "<br>";
                echo "<tr>";

                foreach($val1 as $key2 => $val2){
                    echo "<th>" . $key2 . "</th>";
                    echo "<td> $val2 </td>";
                }
                echo "</tr>";
            }

        echo "</table>";



?>
</body>
</html>