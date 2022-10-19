<?php

    $data = file_get_contents("contents.txt");

    $contents = explode("\n", $data);

    foreach($contents as $line){
        echo $line. "<br>";
    }
   
?>

