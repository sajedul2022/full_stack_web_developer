<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Dashboard</h1>
    <?php 
        
        echo "loggedin by user " . $_SESSION['email']; 
        echo "<br>";
        echo session_id();
    ?>
    <br>
    <br>
    <br>
    <a href="logout.php">Logout</a>

</body>
</html>