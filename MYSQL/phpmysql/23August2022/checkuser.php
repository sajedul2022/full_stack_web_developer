<?php

    include_once('dbconfig.php');

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = sha1($pass);

    // echo $email, $pass;

    echo "<br>";

    // echo "SELECT * FROM users WHERE email='$email' AND password='$pass'";

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

    $result = $db->query($sql);

    if($result->num_rows!=1){
        $msg = "Email or Password May be Wrong";

        // include_once('index.php');
        header("Location:index.php?m=$msg"); // redirect page

    }else{
        session_start();
        $_SESSION['email'] = $email;
        header("Location:dashboard.php");

    }

?>