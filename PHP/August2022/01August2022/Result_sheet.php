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
        $results = array(
            array("ID"=>1, "Name"=>"Student1", "MCQ"=>40, "Descriptive"=>37, "Evidence"=>30),
            array("ID"=>2, "Name"=>"Student2", "MCQ"=>28, "Descriptive"=>40, "Evidence"=>40),
            array("ID"=>3, "Name"=>"Student3", "MCQ"=>45, "Descriptive"=>39, "Evidence"=>45)
        );

        // echo "ID:  $id  Name:  $name  Written Marks: " . $mcq + $des . "Result: PASS <br>";




        foreach($results as $student){

            list($id, $name, $mcq, $des, $evd) = array_values($student);

                if($mcq + $des >= 70 && $evd >= 30){
                    echo "ID:  $id  Name:  $name  Written Marks: " . ($mcq + $des) . " Result: PASS <br>";
                }else{
                    echo "ID:  $id  Name:  $name  Written Marks: " . ($mcq + $des) . " Result: FAIL <br>";

                }

            
        }

    ?>

</body>
</html>