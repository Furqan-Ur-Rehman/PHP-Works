

<?php 
    include 'connection.php';
?>

<?php 

if(isset($_POST['ins'])){
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fees = $_POST['fee'];

    $Course = $_POST['Course'];

    $Cor = implode(',', $Course);

    $query = "insert into student (StudentName,Gender,City,Education,Fees,Courses) values('$Name',' $Gender','$City','$Education','$Fees','$Cor')";


    $res = mysqli_query($con, $query);

    if($res){
        echo "<a href = 'homeconnection.php'>Insert More Records</a>";
        echo "<script> alert('Data Inserted') </script>";

    }
    else{
        echo "<script> alert('Data Insertion Failed') </script>";
    }
}


?>






<?php include 'footer.php'; ?>