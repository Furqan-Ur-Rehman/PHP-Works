<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop Task</title>

</head>
<body>
    

    <h3>Loop Task</h3>
<!-- 
    <form action="Loop Task.php" method="post">
    
        <input type="number" name="num" placeholder="Enter Any Number">

        <input type="submit" Value="Submit" name="SubmitBtn">

    </form> -->

    <?php
    
        // if(isset($_POST["SubmitBtn"])){
        //     $number = $_POST['num'];
            $num = 50;
            
            for($i = 0; $i < $num; $i++){
                if($i %3 ==0 && $i % 5== 0){
                    echo " $i Number is divisible by both 3 and 5 <br>";
                }

                else if($i % 3 == 0){
                    echo "$i Number is divisible by  only 3 <br>";
                }

                else if($i % 5 == 0){
                    echo "$i  Number is divisible by only 5 <br>";
                }

            

              
            }
        // }
        
    ?>

</body>
</html>
