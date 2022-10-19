<hr> <h2 style="text-align: center;">PHP: array_values()  </h2> <hr> 

<?php

    $divisions  = array(
            "Dhaka"=>"Buriganga",
            "Sylet"=>"Surma", 
            "Khulna"=>"Rupsa"
        );

    $allvalues =  array_values($divisions);

    echo "<pre>";

    print_r($allvalues);
    






?>