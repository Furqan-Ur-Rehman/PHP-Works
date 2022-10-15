<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment of Logical Operators</title>
</head>
<body>
    
    <h2>If Else if Conditions</h2>

    <?php
    $Salary = 50000;
    
    
    if($Salary < 40000){
        $Bonus = $Salary * 0.1;

        $TotalSalary = $Salary + $Bonus;

    }

    else if($Salary > 20000 && $Salary == 50000){

        $Bonus = $Salary * 0.5;
        $TotalSalary = $Salary + $Bonus;
    }

    else{
        $Bonus = "Bonus is: 0";
        $TotalSalary = "(Total Salary without Bonus > 50000)";
        // echo "Salary Without Bonus:" .$Salary; 
    }


    ?>

<table border = 1>
        <tr>
        
            <th>
                Salary:
            </th>
        

        
            <td>
                <input type="text" value=" <?= $Salary ?>">
            </td>

        </tr>

        <tr>
            <th>
            Bonus:
            </th>

            <td>
                <input type="text" value=" <?= $Bonus ?>">
            </td>

        </tr>

        <tr>
            <th>
            Total Salary:
            </th>
            <td>
                <input type="text" value=" <?= $TotalSalary ?>">
            </td>
        </tr>

    </table>

</body>
</html>