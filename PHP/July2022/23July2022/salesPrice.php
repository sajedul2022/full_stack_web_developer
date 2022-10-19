<?php

    function salesPrice($cost, $tran=5){
        $total = $cost + ($cost * $tran/100);

        return $total;
        
    }

    $x = 500; 
    $y = 10; 

    echo salesPrice($x,$y);

    


?>