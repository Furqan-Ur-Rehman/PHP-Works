
<?php include 'Header.php'; ?>

<h3 class="mt-4" style="margin-left:28%; color:blue; font-family:sans-serif;"><u style="margin-top:15px;">INSERT DATA IN DATABASE BY PHP FORM</u></h3>
<div class="container " style="background-color:rgb(237, 241, 247);  box-shadow: 0px 0px 7px 5px rgba(0,0,0,0.5); border-radius:5px;">

    <form action="All CRUD in PHP File.php" method="post">
        <div class="row mt-3">
            <div class="col-md-12">
            

                <div class="form-group mt-5">
                    <label for="StdName">Student Name:</label>
                    <input type="text" name="name" id="StdName" placeholder="Enter Your Name" class="form-control">
                </div>

            

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            

                <div class="form-group mt-3">
                    <label for="gen" class="mt-2">Gender:</label>
                        <div class="form-check-inline">
                                <label class="form-check-label">
                                Male: <input type="radio" class="form-check-input " name="gen" value = "Male">
                                </label>
                                <label class="form-check-label">
                                Female: <input type="radio" class="form-check-input" name="gen" value = "Female">
                                </label>
                        </div>         
                </div>
                    
            </div>

            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="course" class="mt-2">Select Courses:</label>
                    <div class="form-check-inline ml-4">
                        <label class="form-check-label ">
                        MVC <input type="checkbox" class="form-check-input ml-5" value="MVC" name = "Course[]">
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        PHP <input type="checkbox" class="form-check-input" value="PHP" name = "Course[]">
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        MY SQL <input type="checkbox" class="form-check-input" value="MYSQL" name = "Course[]">
                        </label>
                    </div>
                </div>    
            </div>

            
        </div>

        <div class="row">

           

            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="Edu">Education:</label>
                    <input type="text" class="form-control" id="Edu" name="edu" placeholder="Enter Your Education">
                </div>


            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="city" class="mt-3">Select City:</label>
                    <select class="form-control" id="city" name = "city">
                        <option value="">--Select--</option>
                        <option value = "Karachi">Karachi</option>
                        <option value = "Lahore">Lahore</option>
                        <option value = "Islamabad">Islamabad</option>
                        <option value = "Peshawar">Peshawar</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="fee" class="mt-3">Fees:</label>
                <input type="number" id="fee" name="fees" class="form-control" placeholder="Enter Your Fees">

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary form-control mb-4 mt-3" name="sub">Submit</button>

            </div>

        </div>






    </form>


</div>