<?php

    $file = "address.txt";

    $datas = file($file);

    // print_r($data);

    foreach($datas as $data){

        list($name, $email) = explode(" ", $data);
        echo "<a href=\"mailto:$email\">$name, $email</a> <br>";
    }
?>

