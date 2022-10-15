<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task by Function</title>
</head>
<body>
    
    
    <form action="Function Task.php" method="post">
    

        <input type="number" name="num1" placeholder="Enter Your Weekly Sales:">

        <input type="number" name="num2" placeholder="Enter Your Commission Rate:">

        <input type="submit" Value="Submit" name="SubmitBtn">


    </form>
    <?php
        
        if(isset($_POST['SubmitBtn'])){
            $WeeklySales = htmlspecialChars($_POST["num1"]);
            $CommissionRate = htmlspecialChars($_POST["num2"]);


            function Commission($WeeklySales, $CommissionRate){
                $CommissionAmount = $WeeklySales * $CommissionRate /100; 
                echo "<br><h3>The Amount of Commission is: $CommissionAmount<h3>";
                return $CommissionAmount;
            }
            $resultofCommission = Commission($WeeklySales, $CommissionRate);
            
        }
    
    ?>

    <table border=1>

        <tr>
            <th>WeeklySales</th>
            <th>Commission Rate</th>
            <th>Commission Amount</th>    
        </tr>
        <tr>
            <td><?= @$WeeklySales ?></td>
            <td><?= @$CommissionRate ?></td>
            <td><?= @$resultofCommission ?></td>
            
        </tr>
    </table>

</body>
</html>
