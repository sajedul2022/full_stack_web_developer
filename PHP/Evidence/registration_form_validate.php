
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
        echo "<pre>";

        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);

            if($name == '' || $email == '' || $pass == '' || $repass == ''){
                echo "Please Fill up the form";
            }else{
                extract($_POST);

                // Email validate
                if(filter_var($email, FILTER_VALIDATE_EMAIL)== true){
                    echo "Email Validate <br>";
                }else{
                    echo "Invalid Email <br>";
                }

                // Password validate
                if(strlen($pass)>=4 && strlen($pass)<=8){
                    echo "Password Validate <br>";
                }else{
                    echo "Minimum 4 and maximum 8 character Required <br>";

                }

                // Password Retyping Matching
                if($pass != $repass){
                    echo "Password are not same <br>";
                }
            }
        }

    ?>

    <h1>Registration Form</h1>
    <form action="" method="post">
        Name        <input type="text" name="name" placeholder="Enter Name"> <br>
        Email       <input type="text" name="email" placeholder="Enter Name"> <br>
        Password    <input type="password" name="pass" placeholder="Enter Name"> <br>
        Re-Password <input type="password" name="repass" placeholder="Enter Name"> <br> <br>
                     <input type="submit" name="submit" value="Register"> <br>
    </form>
</body>
</html>