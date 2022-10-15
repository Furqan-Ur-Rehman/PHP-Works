<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Practice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <h2><u>Upload Image Here</u></h2>
    <?php 
        if(isset($_POST['btn'])){
            echo "1) Image Name: " . "<b>" . $_FILES['uploadfile']['name'] . "</b>" . "<br>";
            echo "2) Image Size: " . "<b>" . $_FILES['uploadfile']['size'] . "</b>" . "<br>";
            echo "3) Image Location: " . "<b>" . $_FILES['uploadfile']['tmp_name'] . "</b>" . "<br>";
            echo "4) Image Type: " . "<b>" . $_FILES['uploadfile']['type'] . "</b>" . "<br>";

            $image = $_FILES['uploadfile']['name'];
            $imagepath = $_FILES['uploadfile']['tmp_name'];
            $imagedestination = 'Image/';

            if(file_exists($imagedestination.$image)){
                $message = "File already exists.";

            }
            else{
                if(move_uploaded_file($imagepath, $imagedestination.$image)){
                    $message = "File Uploaded Successfully.";
                }
                else{
                    $message = "File not Uploaded.";
                }
            }
            
         }
    
    ?>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data">
                    <table>
                        <tr><td><input type="file" name="uploadfile" class="form-control mt-5"></td></tr>
                        <tr><td ><input type="submit" value="Submit" name="btn" class="btn btn-primary form-control mt-3"></td></tr>
                        <tr><td><b><?= @$message ?></b></td></tr>
                    </table>

                </form>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.j"></script>
</body>
</html>