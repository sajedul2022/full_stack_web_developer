<?php

ini_set("date.timezone", "Asia/Dhaka");

    $file = "myfile.txt";
    $fopen = fopen($file, "r");

    // echo fgets($fh); // Single line show


    while(!feof($fopen)){
        echo fgets($fopen). "<br>";
    }

    fclose($fopen);
    
//
 echo "<hr>";
  $file = "myfile.txt";
  $fopen = file($file);

  print_r($fopen);


?>
