<?php

    $directory = "C:";
    $bytes =  disk_free_space($directory);
    echo "Free Space: ". round($bytes/1024/1024/1024,2);
    
    echo "<br>";

    $totalSpace = disk_total_space($directory);
    echo "Total Space: ". round($totalSpace/1024/1024/1024,2);






?>