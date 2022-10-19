<?php

$line = "Vims is the greatest word processor ever created! Oh Vim, how I
love thee!";
 if (preg_match("/\bVim\b/i", $line, $match)) print "Match found! <br>";

 if(preg_match_all("/vim/i", $line, $match)) print "Match <br>";

 print_r($match);

?>