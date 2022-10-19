<hr> <h2 style="text-align: center;">PHP: foreach Loop </h2> <hr> 


<?php
    // index array
   $countries = array("Bangladesh", "Srilanka", "India");

  

   foreach($countries as $country){
        echo $country."<br>";
   }

   echo "<br> <hr>";

   // assosiative array
   $languages = array(
        "php"=> "www.php.net",
        "java"=> "www.java.com",
        "oracale"=> "www.oracle.com",
        "python"=> "www.python.org",
        "c#"=> "www.asp.net"
   );

   foreach($languages as $lang=>$site){
        echo "My language is ".$lang." and it's site is <a target=\"_blank\" href=\"http://$site \">$site</a>  <br>";

   }

   echo rand(1,50);

?>
