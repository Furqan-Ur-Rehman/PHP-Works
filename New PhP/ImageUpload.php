<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload</title>


</head>
<body>
    <?php 
    if(isset($_POST['btn'])){
        echo $_FILES['fileupload']['name'] . "<br>";
        echo $_FILES['fileupload']['size'] ."<br>";
        echo $_FILES['fileupload']['tmp_name'] ."<br>";
        echo $_FILES['fileupload']['type'];

        $fn = $_FILES['fileupload']['name'];
        $temp = $_FILES['fileupload']['tmp_name'];

        $destination = 'Images/';
        if(file_exists($destination.$fn)){
            $message = 'file Exist';
        }
        else{
            if(move_uploaded_file($temp, $destination.$fn)){
                $message = 'File Upload';

            }
            else{
                $message = "File not Uploaded";
            }
        }
    }
    
    ?>


    <div class="container">

        <div class="row">
        
            <div class="col-md-12">
            <form method="post" enctype="multipart/form-data">
                <table class="table table-borderless">
                <tr><td><h1>File Uploading Work</h1></td></tr>
                <tr><td><input type="file" class="form-control" name="fileupload"></td></tr>
                <tr><td><input class="btn btn-primary" type="submit" value="Upload" name="btn"/></td></tr>
                <tr><td><?= @$message ?></td></tr>
                </table>
            </form>
            </div>
        </div>

    </div>
</body>
</html>