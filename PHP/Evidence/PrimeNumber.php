<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.notprime{
			color: red;
			font-size: 24px;
            line-height: 30px;
            margin-top: 30px;
		}

		.prime{
			color: green;
			font-size: 24px;
            line-height: 30px;
            margin-top: 30px;
		}
	</style>
</head>
<body>


<h1>Find Prime Number</h1>
    <form action="" method="post">
        <input type="number" name="number">  <br><br> 
        <button name="button" type="submit"> Check Factorial </button> 

        <?php #echo primeNumber($n); 
            if(isset($_REQUEST['button'])){

                $n = $_REQUEST['number'];
                echo primeNumber($n);
            }
        ?>

    </form>


<?php 

    

    


        function primeNumber($n){
            if($n == 1){
                return "<div class='notprime'>" . $n ."NOT Prime Number </div>";
            }else if( $n == 2){
                return "<div class='prime'>" . $n . " Prime Number </div>";
            }else{

                for( $x=2; $x<$n; $x++){
                    if($n%$x == 0){
                    return "<div class='notprime'>". $n  . " NOT Prime Number </div>";
                    }
                }

                return "<div class='prime'>" . $n . " Prime Number </div>";
            }
        }

      

?>


	

</body>
</html>