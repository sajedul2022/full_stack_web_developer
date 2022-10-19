<hr> <h2 style="text-align: center;">PHP:array vprintf() </h2> <hr> 

<?php
   $players  = array();

   $players["Bangladesh"]  = array("Tamim","Sakib", "Rahim") ;
   $players["Srilanka"]  = array("Mathews", "Dilshan", "Mahela");
   $players["Australia"]  = array("Smith", "Maxwell", "Warner");

   echo "<pre>";
//    print_r($players);

//    foreach($players as $player){
//         vprintf("Player1: %s, Player2: %s, Player3: %s <br>", $player);
//    }

foreach($players as $country=>$player){
    echo "<h1>$country</h1>";

    foreach($player as $pl){
        echo " $pl,";
    }

    echo "<br>";
}

?>

