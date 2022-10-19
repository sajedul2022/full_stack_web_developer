<?php

    class Visitor {

        private static $visitors =  0;

        function __construct(){
            self::$visitors++;

        }

        static function getVisitors(){
            return self::$visitors;
        }
        
    }

    $visits = new Visitor();
    echo Visitor::getVisitors();
    echo "<br>";
    $visits2 = new Visitor();
    echo Visitor::getVisitors();


?>