<hr> <h2 style="text-align: center;">PHP:array  current() next()  </h2> <hr> 

<?php

    $fame  = array(
            "Bogura"=>"Cart",
            "Cumilla"=>"Mart", 
            "Sylet"=>"Tea",
            "Dhaka"=>"Bakorkhani",
            "Rajshahi"=>"Mango"
        );

      

        while($values = current($fame)){
            echo $values. "<br>";
                next($fame);
                
        }

    
    






?>