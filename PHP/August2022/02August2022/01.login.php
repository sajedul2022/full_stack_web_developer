<?php

    if(isset($_POST['submit'])){

            $user = $_POST['user'];
            $email = $_POST['email'];

            $status = false;
            $count = strlen($user);

            if( $count<4 || $count>8 ){
                echo "Must Be 4-8 Character Username. <br>";
                        return false;
            }else{
                $status = true;
            }

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $status = true;
            }else{
                echo "Invalid Email. Must be @ Symbol";
                return false;
            }

        if($status == true){
                echo "<h1> Login Successfully <h1>";
        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Login Form</h3>

    <form action="" method="post">
       UserName <input type="text" name="user" placeholder="Enter User name"> <br> <br>
       Email <input type="email" name="email" placeholder="Enter Email Address"> <br> <br>

       <input type="submit" name="submit" value="Login"> <br>
    </form>
</body>
</html>

