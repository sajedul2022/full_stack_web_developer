<?php
$current =  mktime();

echo "<br>";

// echo time();

$settimestamp =  mktime(06, 00, 10, 7, 1, 2022);
// echo date("d-m-Y", $settimestamp);

$diff = $current - $settimestamp;

$day = round($diff/60/60/24);

echo number_format($day);



?>