<?php

// $datetime = date_default_timezone_set("Asia/Dhaka");
// or
ini_set("date.timezone", "Asia/Dhaka");

    $file = "myfile.txt";

    $time = fileatime($file);
    echo  date("h:i:s", $time);
    echo "<br>";








?>