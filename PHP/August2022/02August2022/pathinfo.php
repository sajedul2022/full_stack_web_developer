<?php

    $path = "E:\xampp\htdocs\wdpf-51\me\php-Exercise\02August2022\myfile.txt";

    $output =  pathinfo($path); 

    echo "<pre>";

    print_r($output);

    echo "<br>";

    echo "Dir name:". $output['dirname'];
    echo "<br>";

    echo "Base name:". $output['basename'];
    echo "<br>";

    echo "File name:".$output['filename'];
    echo "<br>";

    echo "Extention name:". $output['extension'];
    echo "<br>";


    

?>