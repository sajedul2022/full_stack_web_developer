<?php

    $fh = fopen("contents.txt", "r");

    echo fread($fh, filesize('contents.txt'));




   
   
?>

