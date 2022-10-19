<hr> <h1 style="text-align: center;">PHP: Heredoc</h1> <hr> 


<?php

    $students = array("Dipu"=>"Barishal", "Rabbany"=>"Thakudgoan");
    $name = "Introduced: ";

       echo  <<<ABC
         $name We have two students. One is Dipu and Other is Rabbany.
        Dipu's home districts {$students['Dipu']} and Rabbany home districts {$students['Rabbany']
        } <br>
        ABC;

?>