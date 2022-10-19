<?php    

    // $foods = array("pasta", "steak", "fish", "potatoes");    

    // $food = preg_grep("/^s/", $foods);    

    // print_r($food);  
    
//     $author = "dipu@example.com";    
// $author = str_replace("@","(a)",$author);    
// echo "Contact the author of this article at $author.";

$url = "nachiketh@example.com";    
echo ltrim(strstr($url, "@"),"@");

?>