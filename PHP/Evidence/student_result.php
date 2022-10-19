<?php
     ini_set("display_errors", 0); // 0 - 0ff,   1 -  on error;
    class Student {
        
        // public $id;
        // public $name;
        // public $batch;
        public $lines;

        public function __construct(){
            $lines=file('result.txt');
            $this->lines = $lines;
        }

        public function result($sid){
           
            foreach($this->lines as $line){
                list($id, $name, $batch, $result) = explode(",",$line);

                if($id==$sid){
                    $output  = "ID: $id <br>";
                    $output .= "Name: $name <br>";
                    $output .= "Batch: $batch <br>";
                    $output .= "Result: $result <br>";

                }
            }

            return $output;
        }
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

    <?php
        if(isset($_POST['search'])){
            $sid=$_POST['id'];
            $st1=new student;
            echo $st1->result($sid);
        }
    ?>


    <h1>Result search</h1>
    <form action="" method="post">
        <input type="text" name="id">
        <input type="submit" name="search" value="SEARCH">
    </form>


</body>
</html>



