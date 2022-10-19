<hr> <h2 style="text-align: center;">PHP: array_search()  </h2> <hr> 

<?php

$divisions  = array("Dhaka"=>"Buriganga","Sylet"=>"Surma", "Khulna"=>"Rupsa") ;

echo array_search("Buriganga", $divisions);

$range = range(0,50);

echo array_search(20, $range);




?>