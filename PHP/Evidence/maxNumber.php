<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Finding Largest Number</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter your numbers">
        <input type="submit" name="submit" value="FIND OUT">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $n = $_POST['number'];

        maxNumber($n);
    }

    function maxNumber($n){
        $numbers = explode(",", $n); //separeted by comma

        echo "<h2> Submitted numbers are: </h2>";
         global $n;
         echo $n;
        // foreach($numbers as $number){
        //     echo $number . "<br>";
        // }
        $max = $numbers[0];
        foreach($numbers as $number){
            if($number >= $max){
                $max = $number;
            }
        }
        echo "<h2>Maximum Number = " . $max . "</h2>";
    }


    ?>
   
</body>
</html>