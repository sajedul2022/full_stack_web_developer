<hr> <h2 style="text-align: center;">PHP:array  prev() next() reset() end()  </h2> <hr> 

<?php

           $sopts = array("Ahsan Monjil", "Lalbag Fort", "Sonargoan", "Burigonga River");

           echo current($sopts)."<br>";
           echo next($sopts)."<br>";
           echo current($sopts)."<br>";
           echo  next($sopts)."<br>";
           echo   next($sopts)."<br>";
           echo  prev($sopts)."<br>";
           echo current($sopts)."<br>";
           echo   "Last: ". end($sopts)."<br>";
           echo current($sopts)."<br>";
           echo   "Reset: ". reset($sopts)."<br>";

            


    
    






?>