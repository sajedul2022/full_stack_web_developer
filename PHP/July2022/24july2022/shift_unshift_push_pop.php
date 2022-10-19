<hr> <h2 style="text-align: center;">PHP:array shift_unshift_push_pop </h2> <hr> 

<?php
  

   $division  = array("Dhaka","Sylet", "Khulna") ;
   
   echo "<pre>";
   print_r($division);

   echo "Add from Beginning: array_unshift ";
   array_unshift($division, "Rajshahi", "Chattogram");
   print_r($division);

   echo "Remove from Beginning: array_shift ";
   array_shift($division);
   print_r($division);


   echo "Add from Ending: array_push ";
   array_push($division, "Barishal", "Rangpur");
   print_r($division);

   echo "Remove from Ending: array_pop ";
   array_pop($division);
   print_r($division);








?>

