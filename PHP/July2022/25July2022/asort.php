<hr> <h2 style="text-align: center;">PHP: array asort()  </h2> <hr> 

<?php


    $divisions  = array("Khulna"=>"Rupsa", "Zinaidhah"=>"Tista", "Dhaka"=>"Buriganga","Sylet"=>"Surma", ) ;

    echo "<pre>";
    asort($divisions);
    // ksort($divisions);
    print_r($divisions);
    




?>