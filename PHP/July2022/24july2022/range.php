<hr> <h2 style="text-align: center;">PHP:array  range() </h2> <hr> 

<?php

    $numbers = range(1,10);

    echo "<pre>";
    print_r($numbers);

    $numbersEven = range(0,10, 2);
    print_r($numbersEven); // Even number

    $numbersOdd = range(1,10, 2);
    print_r($numbersOdd); // Odd number

    $numletters= range("A", "Z", 2);
    print_r($numletters); // Letter  number





?>
