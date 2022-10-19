<?php


 $foods = array("pasta", "steak", "fish", "potatoes", 6);
 $food1 = preg_grep("/s/", $foods); // overalll
 $food2 = preg_grep("/s$/", $foods); // in $ use last position
 $food3 = preg_grep("/^s/", $foods); // in ^ use first position or Except
 $food4 = preg_grep("/[st]/", $foods); // in [] use overall
 $food5 = preg_grep("/(st)/", $foods); // in (...) use group specific word 
 $food6 = preg_grep("/[^0-9]/", $foods); // in [^] use  except search 
 $food7 = preg_grep("/[0-9]/", $foods); // in [] use   search 

 echo "<pre>";
 print_r($food1);
 print_r($food2);
 print_r($food3);
 print_r($food4);
 print_r($food5);
 print_r($food6);
 print_r($food7);


?>