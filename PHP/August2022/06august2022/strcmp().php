<?php

    $str1 = "abcd";
    $str2 = "Abcd";

    echo strcmp($str1,$str2);

    echo "<br>";

    $pswd = "supersecret";
    $pswd2 = "supersecret";

    if(strcmp($pswd, $pswd2) !=0 ){
        echo "Passwords do not match!";
    }else{
        echo "Passwords match!";

    }

?>