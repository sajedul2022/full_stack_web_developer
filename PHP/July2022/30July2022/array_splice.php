<?php 
 $districts = array("Dhaka", "Comilla", "Noakhali", "Barisal", "Khulna", "Pabna", "Narsingdi");

$subset = array_splice($districts, 3, 2, array("Narail", "Jessore"));
echo "<pre>";
print_r($subset);
print_r($districts);

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Connecticut");
$subset = array_splice($states, 2, 2, array("New York", "Florida"));
print_r($states);


?>