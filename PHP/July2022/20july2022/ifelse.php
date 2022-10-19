<hr> <h2 style="text-align: center;">PHP:  if else Statement</h2> <hr> 

<h3>Guess The Number</h3>

<form action="" method="post">
    <input type="text" name="mynum" placeholder="Guess a Number"> <br>
    <input type="submit" name="submit" value="Check"> <br>
</form>


<?php

  if(isset($_REQUEST['submit'])){

        $num = $_REQUEST['mynum'];
        $guess = 120;

        if($_REQUEST['mynum']>=$guess){
            echo "Congratulation! This number is - ".  $num ;
        }else{
            echo "Mis Match!";

        }
  }

?>