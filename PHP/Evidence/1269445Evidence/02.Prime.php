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

<h3>Find Prime Number</h3>

    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter Number">  <br><br> 
        <input type="submit" name="submit" value="Check Number"> <br> <br>
        

        <?php 
            if(isset($_REQUEST['submit'])){

                $n = $_REQUEST['number'];
                echo primeNumber($n);
            }
        ?>

    </form>
