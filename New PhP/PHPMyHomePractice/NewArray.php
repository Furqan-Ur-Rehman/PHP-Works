<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Array Practice</title>


</head>
<body>
    <h2>1) Indexed Array</h2>

    <?php
    
        $color = ["Red", "Green", "Yellow", "Blue"];

       echo $color[0] . "<br>";
       echo $color[1]. "<br>";
        echo $color[2]. "<br>";
        echo $color[3]. "<br>";

        echo "<pre>";
        print_r($color);
        echo "</pre>";

        for($i=0; $i < 4; $i++){
            echo $color[$i] . "<br>";
        }
        echo "<br>";
        
        foreach($color as $value){
            echo $value ."<br>";
        }

        echo "<br>";
        
        echo "<table border=1 cellpadding=5px cellspacing=0>
            <tr>
                <th colspan=4>Color Names</th>
            </tr>
        
        ";
        for ($i=0; $i < 4; $i++){
            echo "<tr>";
            echo '<td style= text-align: center;>' . $color[$i] . '</td>';
            echo "</tr>";

        }
        echo "</table>";
    ?>

    <h2>2) Associative Array</h2>

    <?php
    
    $Course = ['CourseName1' => 'PHP', 'CourseName2' => 'MVC', 'CourseName3' => 'JS'];

    echo $Course['CourseName1'] ."<br>";
    echo $Course['CourseName2'] ."<br>";
    echo $Course['CourseName3'] ."<br>";

    echo "<pre>";
    print_r($Course);
    echo "</pre>";

    echo "<br>";

    // for($i=0; $i < 3; $i++){
    //     echo $Course[$i];
    // }

    foreach($Course as $key => $value1){
        echo $key . ' => ' . $value1 . "<br>";
    }   
    ?>

    <table border =1 cellspacing=0 cellpadding=5px>
        <tr>
            <th colspan=2>Courses Name</th>
            
        </tr>

        <?php

        echo "<br>";
        foreach($Course as $key => $value1){
            echo "<tr>";
            echo '<th>' . $key . '</th>';
                echo '<td>' . $value1 . '</td>';
                echo "</tr>";
            }
        ?>


    </table>

    <h2>3) MultiDimensional Array</h2>

    <?php 
    
        $studentMarks = [
            ['ABC' , 20, 'Matric'],
            ['XYZ' , 25, 'Inter'],
            ['EFG', 30 , 'Graduate']
        ];

        echo "<pre>";
        print_r($studentMarks);
        echo "</pre>";

        echo "<br>";

        for($row =0; $row < 3; $row++){
            echo '<b>Array of StudentMarks: ' . $row . '<br></b>';
            for($col =0; $col < 3; $col++){
                echo  $studentMarks[$row][$col] . "<br>";
            }
            echo "<br>";
        }

        echo "<h3>Print MultiDimensional Array using foreach loop</h3>";

        foreach($studentMarks as $value1){
            foreach($value1 as $val2){
                echo $val2 ."<br>";
            }
            echo "<br>";
        }

        echo "<br>";

        echo "<table border=1 cellpadding=5px cellspacing=0>
            <tr>
            <th>Student Name</th>
            <th>Student Age</th>
            <th>Student Education</th>
            </tr>
        ";
            for($row =0; $row < 3; $row++){
                echo "<tr>";
                for($col =0; $col <3; $col++){
                    echo '<td>' . $studentMarks[$row][$col] . '</td>';
                }
                echo "</tr>";
            }

        echo "</table>";

        echo "<br>";

        echo "<table border=1 cellpadding=5px cellspacing=0>
        <tr>
        <th>Student Name</th>
        <th>Student Age</th>
        <th>Student Education</th>
        </tr>
    ";
        foreach($studentMarks as $val1){
            echo "<tr>";
            foreach($val1 as $val2){
                echo '<td>' . $val2 . '</td>';
            }
            echo "</tr>";
        }

    echo "</table>";


    ?>

    <h2>4) MultiDimensional Associative Array</h2>

    <?php
    
    $Students =[
        'Student1' => ['Student Name' => 'Furqan', 'Student Age' => 30, 'Student Education' => 'BCS'],
        'Student2' => ['Student Name' => 'ABC', 'Student Age' => 20, 'Student Education' => 'Matric'],
        'Student3' => ['Student Name' => 'XYZ', 'Student Age' => 24, 'Student Education' => 'Inter']
    ];

    echo "<pre>";
    print_r($Students);
    echo "</pre>";

    echo "<br>";
    
    foreach($Students as $key => $v1){
        foreach($v1 as $key2 => $v2){
            echo $v2 . "<br>";
        }
        echo "<br>";
    }

    echo "<table border=1 cellspacing=0 cellpadding=5px>";
    foreach($Students as $key => $v1){
        echo "<tr><th colspan=3> $key </th></tr>
        <tr>
            <th>Student Name</th>
            <th>Student Age</th>
            <th>Student Education</th>
        </tr>
        ";
        echo "<tr>";
        foreach($v1 as $key2 => $v2){
            echo '<td>' . $v2 . '</td>';  
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table border=1 cellspacing=0 cellpadding=5px>
        <tr>
            <th>Student Name</th>
            <th>Student Age</th>
            <th>Student Education</th>
        </tr>
    
    ";
    foreach($Students as $key => $v1){
        
        echo "<tr>";
        foreach($v1 as $key2 => $v2){
            echo '<td>' . $v2 . '</td>';  
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>