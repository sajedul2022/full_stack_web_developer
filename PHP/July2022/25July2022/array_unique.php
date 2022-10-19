<hr> <h2 style="text-align: center;">PHP: array_unique()  </h2> <hr> 

<?php

    $cities = ["Khulna", "Rangpur","Dhaka", "Khulna", "Rangpur","Dhaka", "Bogura", "Khulna", "Rangpur","Dhaka"];

    $uniqueItems = array_unique($cities);
    // $newIndex =array_values($uniqueItems);

    echo "<pre>";

    print_r($uniqueItems);

    // print_r($newIndex);

?>