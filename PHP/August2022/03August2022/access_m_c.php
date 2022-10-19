<?php

// $datetime = date_default_timezone_set("Asia/Dhaka");
// or
ini_set("date.timezone", "Asia/Dhaka");

    $file = "myfile.txt";

    $ctime = filectime($file);
    $atime = fileatime($file);
    $mtime = filemtime($file);

    echo "File Creation Time:".  date("h:i:s", $ctime);
    echo "<br>";

    echo "File Access Time:".  date("h:i:s", $atime);
    echo "<br>";

    echo "File Modification Time:".  date("h:i:s", $mtime);
    echo "<br>";


?>