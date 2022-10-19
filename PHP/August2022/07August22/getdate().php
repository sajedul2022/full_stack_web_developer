<?php

echo time();

$result= getdate();
echo "<pre>";
print_r($result);

echo "Today's day is ". $result['mday'];
echo " Month is ". $result['month'];
echo " Year is ". $result['year']. "<br>";

// or timestamp

echo date("Y-m-d h:i:s a", time());

?>