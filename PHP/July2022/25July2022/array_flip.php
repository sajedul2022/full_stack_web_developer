<hr> <h2 style="text-align: center;">PHP: array_flip()  </h2> <hr> 

<?php

    $cities = ["Rangpur","Dhaka", "Khulna",  "Bogura"];

    echo "<pre>";
    print_r($cities);

    $flip = array_flip($cities);
    print_r($flip);


?>