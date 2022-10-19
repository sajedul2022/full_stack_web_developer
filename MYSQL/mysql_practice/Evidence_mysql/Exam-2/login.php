<!-- // Database connection -->
<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam2') ?>

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
            width: 400px;
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
        // Database Query

        if(isset($_POST['submit'])){
            extract($_POST);
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
            $db->query($sql);

            if($db->affected_rows>0){
                echo "<h2 class=\"success\">Login Successfully</h2>";
            }else{
                echo "<h2 class=\"errors\">UserName OR Password wrong!</h2>";

            }

        }
    ?>

    
    
    <!-- Login Form -->
    <!-- Login Form -->
    <h1>User Login</h1>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter Email"> <br> <br>
        <input type="password" name="pass" placeholder="Enter Password"> <br> <br>
        <input type="submit" name="submit" value="LOGIN"> <br>
    </form>
</body>
</html>