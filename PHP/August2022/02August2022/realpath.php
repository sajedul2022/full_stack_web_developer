<?php

    // $path = "myfile.txt"; //same work line number 4
    $path = "./myfile.txt"; // same work line number 3
    $output =  realpath($path); 
    echo($output);

    echo "<br>";

    $path1 = "../27July2022/result.txt";
    echo realpath($path1);
    echo "<br>";



    $path2 =  "../../git_commands.txt";
    echo realpath($path2);



    

?>