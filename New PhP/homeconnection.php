<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<body>
  
<?php include 'Header.php'; ?>


<div class="container"> <br>
  <h3 style="margin-left:38%; color:blue;">INSERT DATA IN DATABASE</h3> <br>

  <form action="insert.php" method = "post">

    <div class="form-group">
      <label for="name">StudentName:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name">
    </div>

    <div class="form-group">
      <label for="gen" class="mt-3">Gender:</label>
          <div class="form-check-inline ml-3">
            <label class="form-check-label">
              Male: <input type="radio" class="form-check-input " name="gen" value = "Male">
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              Female: <input type="radio" class="form-check-input" name="gen" value = "Female">
            </label>
          </div>
    </div>

  
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



     <div class="form-group">
      <label for="course" class="mt-3">Select Courses:</label>
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




    <div class="form-group">
      <label for="pwd" class="mt-3">Education:</label>
      <input type="text" class="form-control" id="edu" placeholder="Enter your Education" name="edu">
    </div>

    <div class="form-group">
      <label for="fee" class="mt-3">Fees:</label>
      <input type="number" class="form-control" id="fee" placeholder="Enter your Fees" name="fee">
    </div>



    

    <button type="submit" class="btn btn-primary form-control mt-3" name = "ins">Submit</button>
  </form>
</div>

</body>
</html>

    


   
