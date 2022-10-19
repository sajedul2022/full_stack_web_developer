<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_POST['submit'])){

            $user = $_POST['login'];
            $email = $_POST['email'];

            $status = false;


        
            $usercount  = strlen($user);

            if($usercount>8 || $usercount<4){
                echo "Must Be 4-8 Character User name. <br>";
                return false;
            }else{
                // echo "Valid User name. <br>";
                $status = true;
            }

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                // echo "Valid Email Address. <br>";
                $status = true;
            }else{
                echo "Not Valid Email Address. <br>";
                return false;
            }

            if($status == true){

                echo "Login Successfully";
            }

        }
    ?>

    <h2>Login Form</h2>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Enter User Name"> <br> <br>
        <input type="text" name="email" placeholder="Enter Email Name"> <br> <br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>