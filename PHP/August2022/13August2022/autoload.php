<?php

    function __autoload($class){
        require_once("classes/" .$class.".class.php");

    }

    $ev = new Events;

    // $patt = new Patrons;

    $ev->name = "Sajedul";

    print_r($ev);

    session_cache
    

    // echo get_class($ev);

    // $method = get_class_methods("Events");

    // echo "<pre>";

    // print_r($method);

    // echo get_class($patt);

    // $method1 = get_class_methods("Patrons");
    // echo "<pre>";
    // print_r($method1);

    // $vars = get_class_vars("Patrons");
    // print_r($vars);

    // $patt->name = "Sajedul";

    // print_r($patt);






    


?>