

<?php include 'Newconnection.php'; 
?>

<?php
//Start from here: Data Insert into database 

if(isset($_POST['sub'])){
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fees = $_POST['fees'];
    $Course = $_POST['Course'];
    // (implode) => convert Array into String with comma (,) operator
    $Cour = implode(',' , $Course);

    $query = "insert into student_table (Name, Gender, City, Courses, Education, Fees) values ('$Name','$Gender','$City','$Cour','$Education','$Fees')";
    $res = mysqli_query($con, $query);

    if($res){
        // echo "<a href='PracticeHomeConnection.php'>Insert New Records</a><br>";
        echo "<script>alert('Data Inserted Successfully!'); window.location.href = 'NewViewData.php';</script>";
    }
    else{
        echo "<script>alert('Data Insertion Failed.')</script>";
    }
}
?>
<!-- End: insert data into Database -->

<!-- Start here: Update / Edit Data into Database -->

<?php
if(isset($_POST['update'])){
    $studentID = $_POST['Stdid'];
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fees = $_POST['fees'];
    $Course = $_POST['Course'];
    // (implode) => convert Array into String with comma (,) operator
    $Cour = implode(',' , $Course);

    $querys = "update student_table set Name = '$Name',Gender = '$Gender',City = '$City',Education = '$Education',Fees = '$Fees',Courses = ' $Cour' where StdID =  $studentID";
    // echo $querys;

    $res = mysqli_query($con, $querys);

    
    if($res){
        // echo "<a href='PracticeHomeConnection.php'>Insert New Records</a><br>";
        echo "<script>alert('Data Updated Successfully!'); window.location.href = 'NewViewData.php'; </script>";
    }
    else{
        echo "<script>alert('Data Updation Failed.')</script>";
    }
}



?>