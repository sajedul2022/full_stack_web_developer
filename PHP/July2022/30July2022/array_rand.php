<?php 

$countries = array(
    "Bangladesh"=>"Dhaka", 
    "Srilanka"=>"Colombo", 
    "Australia"=>"Sydney", 
    "Nepal"=>"Kathmundu"
);

$randomed = array_rand($countries, 2);

print_r($randomed);

?>