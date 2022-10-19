<?php

    $file = "../Beginning_PHP_MySQL_ 5th_Edition.Pdf";
    $bytes =  filesize($file);
    $kb = round($bytes/1024, 2);
    $filename = basename($file);
    

    echo "File name: $filename <br> Size in $bytes bytes <br>  Size in $kb kb";

    echo "<br>";



?>