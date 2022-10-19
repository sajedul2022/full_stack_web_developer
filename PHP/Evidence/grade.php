<?php
$grades=array("A","B","C","D","F");

function check_grade($g){
    if($g=="A"){
        echo "Excellent";
    }else if($g=="B"){
        echo "Good";
    }else if($g=="C"){
        echo "Fair";
    }else if($g=="D"){
        echo "Poor";
    }else if($g=="F"){
        echo "Failur";
    }else{
        echo "Please input a grade";
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
    <?php
    if(isset($_POST['submit'])){
        $g=$_POST['letter'];
        echo check_grade($g);
    }
   
   
    ?>


    <form action="" method="post">
        <input type="text" name="letter" placeholder="Enter your Grade"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>
   
</body>
</html>