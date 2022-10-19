<?php
 $foods = array("pasta", "steak", "fish", "potatoes", "burger", "pizza", "steak", "Kacci", 100, 150);
 $food = preg_grep("/[^0-9]/", $foods);
 print_r($food);
?>