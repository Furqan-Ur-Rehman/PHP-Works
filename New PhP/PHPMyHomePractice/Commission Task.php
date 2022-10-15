<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commission Task</title>
</head>
<body>
    <h3><u>Find Weekly Commission</u></h3>

    <form action="Commission Task.php" method="post">
        <input type="number" name="num1" placeholder="Enter Your Weekly Sales">
        <input type="number" name="num2" placeholder="Enter Your Commission Rate">

        <input type="submit" Value="Submit" name="Submitbtn">
</form>

<?php

if(isset($_POST["Submitbtn"])){
    $WeeklySales = $_POST["num1"];
    $CommissionRate = $_POST["num2"];
    $CommissionAmount = $WeeklySales * $CommissionRate / 100;

    function Commission($WeeklySales){
        global $CommissionAmount;
       $TotalAmount = $CommissionAmount + $WeeklySales;
        return $TotalAmount;
    }
    
    
    $result = Commission($WeeklySales);
}


?>
<br>
<br>
<table border = 1>
    <tr>
        <th>Weekly Sales</th>
        <th>Commission Rate (%)</th>
        <th>Commission Amount</th>
        <th>Total Amount</th>
    </tr>

    <tr>
        <th align="Center">1</th>
        <th>2</th>
        <th>3</th>
        <th>(1 + 3)</th>
    </tr>

    <tr>
        <td align="Center"><?= @$WeeklySales ?></td>
        <td align="Center"><?= @$CommissionRate ?></td>
        <td align="Center"><?= @$CommissionAmount ?></td>
        <td align="Center"><?= @$result ?></td>
    </tr>


</table>
</body>
</html>