<?php include 'Header.php' ?>
<?php include 'Newconnection.php'?>

<?php
$querys = 'Select * from student_table';
if(isset($_GET['scrh'])){
    $SEARCH = $_GET['search'];
    $querys = "Select * from student_table where Name like '%$SEARCH%' or Gender like '%$SEARCH%' or 
    City like '%$SEARCH%' or Courses like '%$SEARCH%' or Education like '%$SEARCH%' or Fees like '%$SEARCH%'";

}


($res = mysqli_query($con, $querys)) or die('Incorrect Query');
$rowCount = mysqli_num_rows($res);

if($rowCount > 0){
    // echo "<a href='PracticeHomeConnection.php'>Insert More Records</a>";
    ?>
    <form action="" method="get">
        <div class="form-group col-md-6 container mt-5 mb-3">
            <input type="text" placeholder="Search Here" autofocus name="search" class="form-control">

            
            <div class="input-group-append mt-3">
                <button type="submit" class="btn btn-primary" name="scrh">&nbsp; Search &nbsp;&nbsp;</button>
                <a href="NewViewData.php" class="btn btn-success ml-4 ">&nbsp;&nbsp; Reset &nbsp;&nbsp;</a>
            </div>

        </div>
    </form>

    <table class="container mt-3 table table-bordered table-striped table-dark">
        <h4><a href="PracticeHomeConnection.php" style="margin-left:80px;">Create New Records</a></h4>
        <tr align="center">
            <th>Name</th>
            <th>Gender</th>
            <th>City</th>
            <th>Courses</th>
            <th>Education</th>
            <th>Fees</th>
            <th>CRUD</th>
        </tr>

        <?php while($data = mysqli_fetch_assoc($res)){
            echo '<tr>'; ?>
            <td align="center"> <?= $data['Name'] ?></td>
            <td align="center"> <?= $data['Gender'] ?></td>
            <td align="center"> <?= $data['City'] ?></td>
            <td align="center"> <?= $data['Courses'] ?></td>
            <td align="center"> <?= $data['Education'] ?></td>
            <td align="center"> <?= $data['Fees'] ?></td>
            <td align="center"><a href="Edit.php?id=<?=$data['StdID']?>" class="btn btn-primary">Edit</a>
            <a href="NewViewData.php?Delid=<?= $data['StdID']?>" class="btn btn-danger"
            onclick="return confirm('Are Your sure you want to delete?'); return false;">Delete</a>
            </td>

            <?php 
            echo '</tr>';

        }
        ?>

    </table>
    <?php 
}
else{echo '<p>No Records Found.</p>';}

error_reporting(0);
$DELETEID = $_GET['Delid'];
$query = "Delete from student_table where StdID = $DELETEID";
$res = mysqli_query($con, $query);

if($res){
    echo "<script>alert('Data Deleted Successfully.'); window.location.href= 'NewViewData.php';</script>";
}
mysqli_close($con);
?>