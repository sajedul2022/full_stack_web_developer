<?php

function primeNumber($n){
    if($n == 1){
        return "<div>" . $n ." NOT Prime Number </div>";
    }else if( $n == 2){
        return "<div>" . $n . "  Prime Number </div>";
    }else{

        for( $x=2; $x<$n; $x++){
            if($n%$x == 0){
            return "<div>". $n  . " NOT Prime Number </div>";
            }
        }

        return "<div>" . $n . " Prime Number </div>";
    }
}


?>

<h1>Find Prime Number</h1>

    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter Number">  <br><br> 
        <button name="button" type="submit"> Check Factorial </button> 

        <?php 
            if(isset($_REQUEST['button'])){

                $n = $_REQUEST['number'];
                echo primeNumber($n);
            }
        ?>

    </form>
