<?php

    function userProfile(){
        $profile = array("Rabbanay", "Round 51", "WDPF");

        return $profile;
        
    }

    $x = userProfile();
    echo "<pre>";
    var_dump($x);

    list($name, $round, $course) = userProfile();

    echo $name;


?>