
<hr> <h1>Printf() </h1> <hr>

<?php

$distance = 40;
$place = "Mawa";

printf("Dhaka to %s is total %s km.",  $place, $distance);

// printf("Bar Inventary: %d Bottoles of tonic water", 100);

?>

<?php
$meal = "Bakarkhani";
$price = 180.5954;

printf("Today %s price is Taka %f", $meal, $price); 
echo "<br>";
printf("Today %s price is Taka %.2f", $meal, $price);

?>

<hr> <h1>sprintf() Statement </h1> <hr>

<?php 

$output = sprintf("Today is %s", "Sunday");

$output1 = sprintf("Today is %.2f celceous Hot Weather", 65.25985);

echo $output;

echo "<br>";

echo $output1;



?>
