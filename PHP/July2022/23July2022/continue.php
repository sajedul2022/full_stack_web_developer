<hr> <h2 style="text-align: center;">PHP: continue; </h2> <hr> 


<?php
    $students = array("Dipu", "Sajedul", "anamul", "Hasan");
    $count = count($students);
    // echo $count;

    for($x=0; $x<$count; $x++){

        if($students[$x]=="anamul"){
            continue;

        }

        printf("Students Member: %s <br>", $students[$x]);

    }
?>
