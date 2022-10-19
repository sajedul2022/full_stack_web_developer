<?php $db = new mysqli('localhost', 'root', '', 'wdpf51'); ?>
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
        extract($_POST);
        $sql = "INSERT INTO students  VALUES ('$id', '$name', '$email', '$phone')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Successfully inserted";
       }
    }
  
    ?>
    <h1>Student Entry System</h1>
    <form action="" method="post">
        <input type="number" name="id" placeholder="Enter Unique ID"><br>
        <input type="text" name="name" placeholder="Enter name"><br>
        <input type="email" name="email" placeholder="Enter unique email"><br>
        <input type="text" name="phone" placeholder="Enter phone number"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <br>
    <a href="student_list.php">Student List</a>
    
</body>
</html>