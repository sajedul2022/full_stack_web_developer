<hr> <h2 style="text-align: center;">PHP:array Ternary Operators </h2> <hr> 

<?php
    $x = 10;

    $show = $x>5 ? "Good" : "Bad"; // ternary operators 
    echo $show;

    echo "<br>";

    $city = array("Dhaka", "Sylet");
    $country = "Bangladesh";

    echo is_array($city) ? "Yes <br>" : "No <br>"; 
    echo is_array($country) ? "Yes <br>" : "No <br>"; 
?>