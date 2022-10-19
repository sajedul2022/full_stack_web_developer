<?php

  
    function oddEven(){

        $numbers = array(5,9,12,23,29,34);

        foreach($numbers as $num){

            if($num % 2 == 0){
				echo  $num . " is a Even Number <br>";
		
			}else{
				echo  $num . " is a ODD Number <br>";
			}
        };

		}

          oddEven();

?>