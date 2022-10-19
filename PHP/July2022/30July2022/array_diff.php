<?php 

$array1 = array("OH", "CA", "NY", "HI", "CT", "BD");
$array2 = array("OH", "CA", "HI", "NY", "IA");
$array3 = array("TX", "MD", "NE", "OH", "HI", "CTG");
$diff = array_diff($array1, $array2, $array3);
print_r($diff);

?>