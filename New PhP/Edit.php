<?php include 'header.php' ?>

<?php 
    include 'connection.php';
?>

<?php

    $ID = $_GET['id'];
    $query = "select * from student where StudentID = $ID";
    $GetData = mysqli_query($con, $query);
    $res = mysqli_fetch_assoc($GetData);
    print_r($res);
    $chckEdit = $res['Courses'];
    $checkBox = explode(',','$chckEdit');
    print_r($checkBox);
?>

