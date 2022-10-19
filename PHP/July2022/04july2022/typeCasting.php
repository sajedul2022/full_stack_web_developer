<?php
echo "<hr> <h3 style='text-align:center'> Integer To String </h3> <hr>";
$x = 100;

$converted = (string) $x; // Integer to string

var_dump($x);
echo "<br>";
var_dump($converted);
echo "<br>";
echo "<br>";

echo "<hr> <h3 style='text-align:center'> (Float/ Real number/Doubles)  To Integer </h3> <hr>";

$price = 50.65;

$con = (int) $price; // float/ real number/doubles To integer

var_dump($price);

echo "<br>";
var_dump($con);
echo "<br>";



echo "<hr> <h3 style='text-align:center'> String To Integer </h3> <hr>";


$text = "This is PHP";
$s2i = (int) $text; // String To Integer

var_dump($text);
echo "<br>";
var_dump($s2i);

echo "<hr> <h3 style='text-align:center'> Array Conversion </h3> <hr>";

$miles = 125;
$casted = (array) $miles; // Array Conversion

var_dump($miles);
echo "<br>";
echo $casted[0];
echo "<br>";





echo "<hr> <h3 style='text-align:center'> Object Conversion </h3> <hr>";

$car = "Toyota";
$converter = (object) $car;  // Object Conversion
var_dump($converter);
echo "<br>";
echo $converter->scalar;






?>