<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetVariable in PHP</title>
     <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body{
        background-color: #e2e0e0;
    }
#Form{
    /* border: 1px solid black; */
    width:500px;
    height:400px;
    margin:auto;
    box-shadow: 0px 0px 7px 3px rgba(0,0,0,0.5);
    background-color: white;
    /* border-radius: 5px; */
    /* border-top:5px blue; */
    border-top: 5px solid blue;
    /* border-bottom: 4px solid rgb(47, 47, 232); */

}

h3{
    /* font-family: ; */
    margin-top:30px;
    margin-left: 200px; 
    color: blue;
    font-size:30px;
}

#forminput{

    width:70%;
    margin-left:70px;
}

#Name{
    margin-top: 50px;
}

#Email{
    margin-top: 30px;
}

#Password{
    margin-top:30px;
}

#button{
    margin-top:30px;   
}

table{
    border:1px solid black;
    margin-top:50px;
    margin-left:300px;
}

#inputname{
    font-weight:bold;
    text-align:center;
    background-color:rgb(228, 225, 238);
}

#inputnamevalue{
    text-align:center;
    width:100%;
}
</style>

</head>
<body>
    
    <div class="Container mt-5" id="Form">
        <h3>LOGIN</h3>
        <form action="Example.php" id="forminput" method = "get">
            
            <input type="text" id="Name" placeholder="Enter Your Name" autofocus name="Name" class="form-control">
            
            <input type="email" id="Email" placeholder="Enter Your Email" name="Email" class="form-control">

            <input type="password" id="Password" placeholder="Enter Your Password" name="Pass" class="form-control">
        
            <input type="submit" value="SUBMIT" id="button" name="btn" class="form-control btn btn-primary"> 
        

        </form>
    </div>


    





<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>