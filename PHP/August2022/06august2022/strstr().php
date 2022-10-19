<?php

    $email = "admin@gmail.com";

   $string = strstr($email, "@");
//    echo $string;

  echo ltrim($string, "@");
//   echo trim($string, "@");
    
  
?>