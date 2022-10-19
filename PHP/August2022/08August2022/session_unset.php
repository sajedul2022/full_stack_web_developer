<?php
    session_start();

    print_r($_SESSION);

    $_SESSION['username'] = "Sajedul"; 
    $_SESSION['age'] = 25;

    // unset($_SESSION['age']);

    // session_unset();

    // session_destroy();
    
  

?>