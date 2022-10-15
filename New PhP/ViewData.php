<?php  include 'header.php' ?>
<?php include 'connection.php' ?>

<?php 

$querys = 'Select * from student';
($res = mysqli_query($con, $querys)) or die('Incorrect Query!');
$rowCount = mysqli_num_rows($res);

if( $rowCount > 0){
    ?>


    <table class="container table table-bordered">

    <tr>
        <th>Name</th>
        <th>Education</th>
        <th>Fees</th>
        <th>Gender</th>
        <th>City</th>
        <th>Courses</th>
    </tr>

    <?php while($data = mysqli_fetch_assoc($res)){
        echo '<tr>'; ?>
        <td><?= $data['StudentName'] ?></td>
        <td><?= $data['Gender'] ?></td>
        <td><?= $data['Education'] ?></td>
        <td><?= $data['Fees'] ?></td>
        <td><?= $data['City'] ?></td>
        <td><?= $data['Courses'] ?></td>
        <td><a href="Edit.php?id=<?= $data['StudentID']?>" class="btn btn-primary">Edit</a></td>

        <?php echo '</tr>';
    } ?>

    </table>

<?php }
else{echo '<p>No Records Found </p>';}
?>




