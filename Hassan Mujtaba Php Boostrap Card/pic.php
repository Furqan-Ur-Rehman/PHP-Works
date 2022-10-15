<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
    <?php include 'header.php'; ?>
    <?php   
    $Images = ['Image1.jpg','Image2.png','Image3.png'];
    $k = 0;

    echo"<div class='container' style='margin:auto; display:flex; justify-content:center;'>";
    echo"<div class='row'>";

    for($i=0; $i<3; $i++){
      echo"  <div class='card m-4' style='width: 18rem; box-shadow: 0px 0px 1px 1px black'>";
      echo"  <img class='card-img-top' src='$Images[$k]' height='200px' alt='Card image cap'>";
      echo"  <div class='card-body'>";
      echo"  <h5 class='card-title'>Card title</h5>";
      echo"  <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
      echo"  <a href='#' class='btn btn-primary'>Go somewhere</a>";
      echo"  </div>";
      echo"  </div>";
      $k++;
    }

    echo"</div>";
    echo"</div>";
    ?>
    <?php include 'footor.php'; ?>

</body>
</html>