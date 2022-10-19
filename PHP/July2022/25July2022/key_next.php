<hr> <h2 style="text-align: center;">PHP:array  key() next()  </h2> <hr> 

<?php

    $fame  = array(
            "Bogura"=>"Cart",
            "Cumilla"=>"Mart", 
            "Sylet"=>"Tea",
            "Dhaka"=>"Bakorkhani",
            "Rajshahi"=>"Mango"
        );

        while($key = key($fame)){
            echo $key. "<br>";
                next($fame);
        }

        // while($key = current($fame)){
        //     echo $key. "<br>";
        //         next($fame);
        // }

    
    






?>