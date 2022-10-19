<?php 
class Student {

    public $id;
    public $name;
    public $batch;

    public $stores;

    function __construct(){

    $linkFile =  file('info.txt');
    $this->stores =  $linkFile;

    }

    public function result($show){

        foreach($this->stores as $store){

            list($id, $name, $batch, $result) = explode(",", $store);

            if($id==$show){

                $output = " <h3> Your Result is- $result</h3>" ;
            }
        }

        

        echo $output;

    }
}

// if(isset($_POST['submit'])){

// $getNumber = $_POST['number'];

// $ob = new Student;
// $ob->result($getNumber);
// }


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

    <h3>Student Result</h3>

    <form action="" method="post">
    <input type="text" name="number" placeholder="Enter ID"> <br> <br>
    <input type="submit" name="submit" value="Result"> <br><br>

    <?php 
    
    if(isset($_POST['submit'])){

        $getNumber = $_POST['number'];
        
        $ob = new Student;
        $ob->result($getNumber);
        }
    ?>

</form>
</body>
</html>