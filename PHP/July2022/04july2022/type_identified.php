<?php
$num = 100;
$string = "Hello World";

echo gettype($num);
echo "<br>";
echo gettype($string);

echo "<br>";

echo is_int($num);
echo is_int($string);

echo "<br>";

$x = false;

echo "Boolean: ". is_bool($x);

echo "<br>";
$y = [10,15,20];
$string = "Hello World";
echo "Scalar: ". is_scalar($string);

//
echo "<br>";

$item = 43;
 printf("The variable \$item is of type array: %d <br />", is_array($item));
 printf("The variable \$item is of type integer: %d <br />", is_integer($item));
 printf("The variable \$item is numeric: %d <br />", is_numeric($item));


?>