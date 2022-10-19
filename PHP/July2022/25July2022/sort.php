<hr> <h2 style="text-align: center;">PHP: array sort()  </h2> <hr> 

<?php

    $cities = ["Rangpur","Dhaka", "Khulna",  "Bogura"];

    echo "<pre>";
    print_r($cities);

    sort($cities);
    print_r($cities);

    $numbers = array(5,15,28,100,7,24,357);

    sort($numbers);

    print_r($numbers);

    $divisions  = array("Khulna"=>"Rupsa", "Dhaka"=>"Buriganga","Sylet"=>"Surma") ;
    sort($divisions);
    print_r($divisions);
    




?>