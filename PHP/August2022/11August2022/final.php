<?php

    class Fruit {
        final public function intro(){
            echo "This is parent";
        }
    }

    class Strawberry extends Fruit {

          function intro(){
            echo "This is Child";
        }
    }
$obj = new Strawberry();

$obj-> intro();


?>


