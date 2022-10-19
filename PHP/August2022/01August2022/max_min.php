
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


      function largest($max){

        $num = array(10,20,30,40,50);
        $max;

        for($i = 0; $i < count($num); $i++){

            if($num[$i] > $max){
                $max = $num[$i];
            }else{
                $max = $max;
            }

        } return $max;
      }

    //   echo largest();


        if(isset($_POST['search'])){
            $get=$_POST['id'];
            echo "Largest Number is - ". largest($get);
        }
    
    
    ?>



    <h1>Maximum Number search</h1>
    <form action="" method="post">
        <input type="text" name="id" placeholder="Enter Any Number">
        <input type="submit" name="search" value="SEARCH">
    </form>


    
</body>
</html>