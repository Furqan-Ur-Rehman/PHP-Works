<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example in PHP</title>
</head>
<body>
    
<?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";


    echo "---------------------------------------------------------------------------------";

    if(isset($_GET['btn'])){

        $NameValue = $_GET["Name"];
        $EmailValue = $_GET["Email"];
        $PasswordValue = $_GET["Pass"];

        if($NameValue == "" || $EmailValue == "" || $PasswordValue == ""){
            echo "<script>alert('Please fill all fields.')</script>";
        }

        else{
            if($NameValue == "Furqan" && $EmailValue == "furqan123@gmail.com" && $PasswordValue == "123456"){
                echo "<script>alert('You have Successfully login!!')</script>";
                echo "<h5>Admin Name is:   $NameValue</h5>";
                echo "<h5>Admin Email is:   $EmailValue</h5>";
                echo "<h5>Admin Password is:   $PasswordValue</h5>";
            }

            else{
                echo "<script>alert('Login failed, Please try again!!')</script>";
            }
        }
    }






?>
</body>
</html>