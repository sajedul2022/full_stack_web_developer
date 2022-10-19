<?php
    $str = "Hello World, How are you?";

    $lower = strtolower($str);
    echo "Lower Case: $lower <br>";

   $ucfirst= ucfirst($lower);
   echo "First Letter Uppercase: $ucfirst <br>";

   $ucwords= ucwords($lower);
   echo "Each word Uppercase: $ucwords <br>";

   $strtoupper = strtoupper($lower);
   echo "Uppercase: $ucwords <br>";

   $lcfirst = lcfirst($strtoupper);
   echo "First Letter Lowercase: $lcfirst <br>";






?>