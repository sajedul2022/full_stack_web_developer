<?php 
//     $line = "Vims is the greatest word processor ever created! Oh vim, how I 
//     love thee!";

//    echo  preg_match_all("/vim/i", $line, $matches);

//    print_r($matches);

?>

<?php
 $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);

 echo "<pre>";
 print_r($pat_array);

?>