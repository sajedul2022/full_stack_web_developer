<hr> <h2 style="text-align: center;">PHP: break, rand(), in_array() </h2> <hr> 


<?php
    // random number found
    // $numbers = array(5,15,20,30); 
    // $randnumber =  rand(1,50);

    // echo "Random number is : ".  $randnumber. "<br>";

    // echo " Match Number : ". in_array($randnumber, $numbers);

    $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
    // $randnumber =  rand(1,50);

    for($c=1; $c<100; $c++){
        echo "<h4>$c</h4>";
        $randnumber =  rand(1,50);

        if(in_array($randnumber, $primes)){
            echo "Prime number found! ".$randnumber; 
            break;
        }else{
            echo "Not found! ".$randnumber. "<br>"; 
            // break;
        }
    }





?>
