<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location:index.php");
    }

?>

<?php

echo "Successfully Login.  Welcome, Dashboard page. <br>";

echo "Loggedin by user". $_SESSION['email'];

echo "<br>";
echo session_id();

?>

<br> <br> <a href="logout.php">Logout</a>