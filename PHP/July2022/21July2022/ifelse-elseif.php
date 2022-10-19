<hr> <h2 style="text-align: center;">PHP:  if elseif else Statement</h2> <hr> 
<pre>
<h3>Guess The Number</h3>

<form action="" method="post">
    <input type="text" name="mynum" placeholder="Guess a Number"> <br>
    <input type="submit" name="submit" value="Check">
</form>


<?php

  if(isset($_REQUEST['submit'])){

        $num = $_REQUEST['mynum'];
        $guess = 150;

        if($_REQUEST['mynum']==$guess){
            echo "Congratulation! This number is - ".  $num ;
        }elseif(abs($guess-$_REQUEST['mynum'])<10){
            echo "You are very close!";
        }else{
            echo "Mis Match!";

        }
  }

?>