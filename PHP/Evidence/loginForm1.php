<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .errors {
            background-color: red;
            padding: 25px;
            width: 200px;

        }

        .success {
            background-color: green;
            padding: 25px;
            width: 200px;
        }
    </style>
</head>
<body>
    <?php

        if(isset($_POST['submit'])){

            $user = $_POST['login'];
            $email = $_POST['email'];

            $errors = array();

            if($user == ""){
                $errors[] = "Login Must be Filled up";
            }

            if($email == ""){
                $errors[] = "Email Must be Filled up";
            }


        
            $usercount  = strlen($user);

            if($usercount>8 || $usercount<4){
                $errors[] = "Username Must Be 4-8 Character";
                
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors[] = "Not Valid Email Address.";
               
            }
            
            // echo "<pre>";
            // print_r($errors);

            if(count($errors)>0){
                echo "<ul class=\"errors\">";
                foreach ($errors as $err){
                    echo " <li> $err </li>";
                }
                echo "</ul>";
            }else{
                echo "<div class=\"success\"> Login Successfull </div>";
            }

        }

       
    ?>

    <h2>Login Form</h2>
    <form action="" method="post">
        <input type="text" name="login" value="<?php if(isset($user)) echo $user; ?>"  placeholder="Enter User Name"> <br> <br>
        <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>"  placeholder="Enter Email Name"> <br> <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>