<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>

    <h1>Login</h1>
    <form action="checkuser.php" method="post">
        <input type="email" name="email" placeholder="Enter Email"> <br> <br>
        <input type="password" name="pass" placeholder="Enter Password"> <br> <br>
        <input type="submit" name="submit" value="Login"> <br>
    </form>

    <?php
        

        if(isset($_GET['m'])){
           
            $msg =  $_GET['m'];

            echo $msg;
       }
    ?>
</body>
</html>