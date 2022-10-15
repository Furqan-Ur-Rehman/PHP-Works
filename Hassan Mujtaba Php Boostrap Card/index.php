<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
    $StudentMarks = [
    'Student1' => ['PHP' => 70, 'MVC' => 50, 'JS' => 50],
    'Student2' => ['PHP' => 60, 'MVC' => 30, 'JS' => 30],
    'Student3' => ['PHP' => 50, 'MVC' => 90, 'JS' => 70]   
    ];
    ?>

    <table border = 1>
   
    <?php
    foreach ($StudentMarks as $Key => $Val){
    echo '<tr>';
    echo '<th colspan = 6>$Key</th>';
    echo '</tr>';
    echo '<tr>';
    foreach($Val as $Key2 => $V2){
    echo "<th>Student[$Key2]</th>";
    echo "<td>$V2</td>";        
    }
    echo "<tr>";
    }

    ?>
    </table>

    
</body>
</html>