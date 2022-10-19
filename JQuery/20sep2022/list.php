<?php 
//    echo  $_GET['mydata'];

   if($_GET['mydata'] == 'Good'){
     $name = array('Sherlock Holmes', 'John Watson', 'Hercule Poirot', 'Jane Marple');
     echo getNames($name);
   }else if($_GET['mydata'] == 'Bad'){
        $name = array('100 Professor Moriarty', 'Sebastian ','Charles ','Count march');
        echo getNames($name);
   }


   
   

   function getNames($persons){
        $output = "<ul>";
        
        for($i=0; $i<count($persons); $i++){
            $output .= "<li>".$persons[$i]. "</li>";
        }

        $output .= "</ul>";

       return $output;
   }

//    echo getNames($bad);

?>