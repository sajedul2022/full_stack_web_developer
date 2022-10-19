<?php

    // echo "<pre>";
    // print_r($_REQUEST); //  $_GET, $_POST , $_REQUEST

    if(isset($_REQUEST["login"])){

        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        echo "<h3>You want to login with Your Email is-  <b> {$email} </b> and password:  <b> {$pass} </b> </h3>";

    }
    echo "<pre>";
print_r($GLOBALS);

 

?>