<hr> <h2 style="text-align: center;">PHP: array_keys()  </h2> <hr> 

<?php

    $divisions  = array(
            "Dhaka"=>"Buriganga",
            "Sylet"=>"Surma", 
            "Khulna"=>"Rupsa"
        );

    $allkeys =  array_keys($divisions);

    echo "<pre>";

    print_r($allkeys);






?>