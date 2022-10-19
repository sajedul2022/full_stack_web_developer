<?php 
 $districts = array("Dhaka", "Comilla", "Noakhali", "Barisal", "Khulna", "Pabna", "Narsingdi");

$subset = array_slice($districts, 3);
echo "<pre>";
print_r($subset);

$subset = array_slice($districts, -3); // total length (7) - 3
echo "<pre>";
print_r($subset);

$subset = array_slice($districts, 3, 2);
echo "<pre>";
print_r($subset);


?>