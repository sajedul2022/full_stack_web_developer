<hr> <h2 style="text-align: center;">PHP:array   explode() </h2> <hr> 

<?php 

// $string1 = "Rabbany | Dipu | Anamul | Aklima";
$string = "Rabbany Dipu Anamul Aklima";
$users = explode(" ", $string);

echo "<pre>";
print_r($users);


?>