<?php

// echo "<pre>";
// print_r($_FILES);

if(isset($_REQUEST['submit'])){

    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    $error = $_FILES['file']['error'];
    $size = $_FILES['file']['size'];

    $ext = explode(".", $name); 
    $ext = strtolower(end($ext));

    $filetype = array("jpg","jpeg","png", "pdf","doc", "docx");

    $errors = array();

    // echo $size;


    if($size>1024*400){
        $errors[]= "Size Must be Within 400KB <br>";
    }

    if(!in_array($ext, $filetype)){
        $errors[]= "File type must be JPG, PNG, pdf, doc";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>