<?php
    session_start();

    // $_SESSION['username'] = "Sajedul";
    // $_SESSION['login'] = date("M d Y H:i:s");

    $vars = session_encode();

    echo $vars;

    echo "<pre>";
    print_r($_SESSION);

    session_unset();
    
    // session_destroy();


  
    
  

?>