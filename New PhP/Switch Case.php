<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Case</title>
</head>
<body>


    <h3>Switch Case</h3>

    <?php
    $message = '';
    $role = 'Subscriber';

    switch($role){
        case 'admin':
            $message = 'Welcome Admin!';
        break;

        case 'Editor':
        case 'Author':    
            $message = 'Welcome! Do you want to create a new Article';
        break;

        case 'Subscriber':
            $message = 'Weclome! Checkout some new article!';
        break;
        default:
        $message = 'You asre not authorized to access this page!';

    }
    
    ?>

    <table>
    <form action=""> 
        <label for="msg">Message</label><br>
        <input type="text" value = "<?= $message ?>" id="msg" name="message">

        <input type="submit" value="Submit" onclick = "ClickEvent()">
    </form>
    </table>
    


    <script>

        function ClickEvent(){
            var Valueget = document.getElementById('msg').value;
            alert("Successfully!" + Valueget);
        }
    </script>

</body>
</html>