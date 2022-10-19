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

    if(isset($_POST['submit'])){

        $name = $_FILES['file']['name'];
        $ext = explode(".", $name); // show any file extention name
        $ext = strtolower(end($ext));
        // echo $ext. "<br>";
        // print_r($ext);


        $type = $_FILES['file']['type'];
        $tmp = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        $size = $_FILES['file']['size'];

        $filetype = array("jpg","jpeg","png");

        $errors = array();

        if($size>1024*1024){
            $errors[]= "Size Must be Within 500KB <br>";
        }

        if(!in_array($ext, $filetype)){
            $errors[]= "File type must be JPG, PNG";
        }

        if(count($errors)>0){

            foreach($errors as $err){
                echo $err. "<br>";
            } 
            
            echo "<br>";
        }else{

            $result = move_uploaded_file($tmp, 'uploads/'.$name);

            if($result ==1 ){
                echo "Upload Successfully";
            }
        }
        

    }
?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>