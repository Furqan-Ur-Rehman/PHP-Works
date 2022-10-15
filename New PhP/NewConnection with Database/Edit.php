<?php include 'Header.php' ?>
<?php include 'Newconnection.php'; 
?>

<?php
$ID = $_GET['id'];
$query = "Select * from student_table where StdID = $ID";
$GETDATA = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GETDATA);
// echo '<pre>';
// print_r($res);
// echo '</pre>';
$chkEdit = $res['Courses'];
// (explode) => convert back String into Array with comma (,) operator
$checkbox = explode(',',$chkEdit);
// echo '<pre>';
// print_r($checkbox);
// echo '</pre>';
?>

<h3 class="mt-4" style="margin-left:28%; color:blue; font-family:sans-serif;"><u style="margin-top:15px;">EDIT DATA IN DATABASE BY PHP FORM</u></h3>

<div class="container " style="background-color:rgb(237, 241, 247);  box-shadow: 0px 0px 7px 5px rgba(0,0,0,0.5); border-radius:5px;">

    <form action="All CRUD in PHP File.php" method="post">
        <div class="row mt-3">
            <div class="col-md-12">
            
                <input type="hidden" name="Stdid" value="<?= $res['StdID'] ?>">

                <div class="form-group mt-5">
                    <label for="StdName">Student Name:</label>
                    <input type="text" name="name" id="StdName" placeholder="Enter Your Name" class="form-control"
                    value="<?= $res['Name'] ?>">
                </div>

            

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            

                <div class="form-group mt-3">
                    <label for="gen" class="mt-2">Gender:</label>
                        <div class="form-check-inline">
                                <label class="form-check-label">
                                Male: <input type="radio" class="form-check-input " name="gen" value = "Male" 
                                <?php if ($res['Gender'] == 'Male'){ echo 'checked';
                                 }  ?>>
                                </label>
                                <label class="form-check-label">
                                Female: <input type="radio" class="form-check-input" name="gen" value = "Female"
                                <?php if($res['Gender'] == 'Female'){ echo 'checked';
                                }?>>
                                </label>
                        </div>         
                </div>
                    
            </div>

            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="course" class="mt-2">Select Courses:</label>
                    <div class="form-check-inline ml-4">
                        <label class="form-check-label ">
                        MVC <input type="checkbox" class="form-check-input ml-5" value="MVC" name = "Course[]"
                        <?php if(in_array('MVC', $checkbox)){ echo 'checked';
                        } ?>>
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        PHP <input type="checkbox" class="form-check-input" value="PHP" name = "Course[]"
                        <?php if(in_array('PHP',$checkbox)){ echo 'checked';
                        }?>>
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        MY SQL <input type="checkbox" class="form-check-input" value="MYSQL" name = "Course[]"
                        <?php if(in_array('MYSQL',$checkbox)){ echo 'checked';
                        }?>>
                        </label>
                    </div>
                </div>    
            </div>

            
        </div>

        <div class="row">

           

            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="Edu">Education:</label>
                    <input type="text" class="form-control" id="Edu" name="edu" placeholder="Enter Your Education"
                    value="<?= $res['Education'] ?>">
                </div>


            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="city" class="mt-3">Select City:</label>
                    <select class="form-control" id="city" name = "city">
                        <option value="" <?php if($res['City'] == ''){echo 'selected';} ?>>--Select--</option>
                        <option value = "Karachi" <?php if($res['City'] == 'Karachi'){echo 'selected';
                        } ?>>Karachi</option>
                        <option value = "Lahore" <?php if($res['City'] == 'Lahore'){echo 'selected';

                        } ?>>Lahore</option>
                        <option value = "Islamabad" <?php if($res['City'] == 'Islamabad'){echo 'selected';
                        } ?>>Islamabad</option>
                        <option value = "Peshawar" <?php if($res['City'] == 'Peshawar'){echo 'selected';
                        } ?>>Peshawar</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="fee" class="mt-3">Fees:</label>
                <input type="number" id="fee" name="fees" class="form-control" placeholder="Enter Your Fees"
                value="<?= $res['Fees'] ?>">

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary form-control mb-4 mt-3" name="update">Edit / Update</button>

            </div>

        </div>






    </form>


</div>