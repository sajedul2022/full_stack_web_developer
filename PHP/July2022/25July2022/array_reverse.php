<hr> <h2 style="text-align: center;">PHP: array_reverse()  </h2> <hr> 

<?php

    $cities = ["Rangpur","Dhaka", "Khulna",  "Bogura"];

    echo "<pre>";
    print_r($cities);

    $reverse = array_reverse($cities);
    print_r($reverse);


?>