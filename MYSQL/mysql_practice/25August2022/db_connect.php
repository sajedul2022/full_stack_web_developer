<?php


$mysqli = @new mysqli('localhost', 'sajedul', '123',
'wdpf51');

// echo "<pre>";
// print_r($mysqli);

 if ($mysqli->connect_errno) {

    echo $mysqli->connect_errno ."<br/>";
    

 printf("Unable to connect to the database:<br/> %s",
 $mysqli->connect_error);
 exit();
 }else{
    echo "Connected";
    
 }

 


?>