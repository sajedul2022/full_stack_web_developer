<?php

        function factorial($x){
            if($x == 0){
                return 1;
    
            }
            return $x * factorial($x-1); 
    
        }

        if(isset($_POST['sub'])){
            echo factorial($_POST['number']);
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
    
    <h2>Calculate Factorial</h2>
    
    <form action="" method="post">
        <input name="number" type="text" placeholder="Enter Any Number">  <br><br> 
            <input name="sub" type="submit" value="Factorial" >  </input> 
    </form>

</body>
</html>
