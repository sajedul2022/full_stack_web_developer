<hr> <h4 style='text-align:center'> $_SERVER Superglobal </h4> <hr>

<?php

    echo "<pre>";
    // print_r($_SERVER);

    echo "<br>";

    echo "SERVER ADDRESS: ".  $_SERVER['PHP_SELF'];

?>
<hr><h3 style='text-align:center'> $_GET Superglobal </h3> <hr>
<a href="http://localhost/wdpf-51/me/php/04july2022/super_globals.php?name=Sajedul&age=30&district=Dhaka">Click Here</a>
<!-- <a href="super_globals.php?age=30">Click Here 2</a>
<a href="super_globals.php?district=Dhaka">Click Here 2</a> -->

<?php 
// print_r($_GET);

echo $_GET['name'];
echo "<br>";
echo $_GET['age'];
echo "<br>";
echo $_GET['district'];

$_GET['today'] = "Monday";
echo "<br>";
print_r($_GET);

?>
