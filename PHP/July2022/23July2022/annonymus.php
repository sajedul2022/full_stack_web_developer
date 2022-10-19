<?php

    $x = 15;

    $example = function(){
        // global $x;
        $x += 100;
        echo $x;
    };

    $example();
    echo "<br>";
    echo $x;

    echo "<hr>"; // .............................. 

    $a = 15;
    $example1 = function() use ($a) {
        $a += 100;
        echo $a ;
       };
       $example1();
       echo "<br>";
       echo $a ;


       echo "<hr>"; //...............................


       $example2 = function() use (&$a) {
        $a += 100;
        echo $a . "\n";
       };
       $example2();
       echo "<br>";
       echo $a . "\n";

    


?>