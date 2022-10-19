<?php
ini_set("display_errors", 0);


if($_POST['submit']){

    $num = $_POST['number'];
    

    if($num>=90 ){				
       echo "<b>You have passed. A+</b>";
    }elseif($num>=80){
       echo "<b>You have passed. A</b>";
    }elseif($num>=60){
        echo "<b>You have passed. A-</b>";
     }elseif($num<=60 && $num>=0 ){
        echo "<b>You have failed</b>";
     }else{
        echo "No Result";
     }
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
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter Any Number"> <br> <br>
        <input type="submit" name="submit" value="CHECK"> <br>
    </form>

    
</body>
</html>