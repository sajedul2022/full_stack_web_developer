<?php 

    include_once('dbconnect.php');
    $email =  $_GET['email'];
    $pass =  $_GET['pass'];
    $pass =  sha1($pass);


    $sql = "SELECT * FROM users WHERE email = '$email'  AND password = '$pass' ";

    $result = $db->query($sql);

    if($result->num_rows == 1){
        echo "<h3 class =\"green\"> Valid User </h3>";
    }else{
        echo "<h3 class =\"red\"> Invalid User </h3>";

    }






?>