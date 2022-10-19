<?php

    $file = "myfile.txt";
    $fwrite = fopen($file, "w"); // writing mode

    fwrite($fwrite, "I want to write new. \n");
    fwrite($fwrite, "I want to write new2. \n");
    fwrite($fwrite, "I want to write new3. \n");


    $fileshow = file($file);

    print_r($fileshow);


    fclose($fwrite);
    


?>
