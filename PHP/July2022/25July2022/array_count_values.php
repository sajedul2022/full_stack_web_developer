<hr> <h2 style="text-align: center;">PHP: array_count_values()  </h2> <hr> 

<?php

    $cities = ["Khulna", "Rangpur","Dhaka", "Khulna", "Rangpur","Dhaka", "Bogura", "Khulna", "Rangpur","Dhaka"];

    $stateFrequency = array_count_values($cities);

    echo "<pre>";

    print_r($stateFrequency);

?>