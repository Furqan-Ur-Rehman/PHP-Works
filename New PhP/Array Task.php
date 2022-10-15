<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
<?Php include 'Header.php'?>
    <h3>Images in PHP With Boostrap Card</h3>
    <div class="Container-fluid">
        <div class="row">
    <?php 
    
        $Image = ['Apple.png', 'Flower.png','NewSimplon.png'];
        $cardtitle =['Apple', 'Flower', 'NewSimplon'];

        

       


        for($i=0; $i<3; $i++){
                   echo "<div class='card ml-5' style='width: 18rem; margin-left:120px'>
                   <img src='$Image[$i]' style='height: 200px' class='card-img-top' alt='...'>
                   <div class='card-body'>
                     <h5 class='card-title' style= 'text-align: center';> $cardtitle[$i]</h5>
                     <p class='card-text' style= 'text-align: justify';>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href='#' class='btn btn-primary' >Go somewhere</a>
                   </div>
                 </div>";
               

                }
                
                
        ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.j"></script>
</body>
</html>