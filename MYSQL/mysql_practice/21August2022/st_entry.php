<?php $db = new mysqli('localhost', 'root', '','wdpf51'); ?>

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
        // if(isset($_POST['submit'])){
        //         $id = $_POST['id'];
        //         $name = $_POST['name'];
        //         $email = $_POST['email'];
        //         $phone = $_POST['phone'];

        //         echo $id . "<br>". $name. "<br> ". $email. " <br>". $phone;
        // }


        // Insert mysqli
        if(isset($_POST['submit'])){

            extract($_POST);
            $sql = "INSERT INTO students VALUES 
            ('$id','$name','$email','$phone')";

            $db->query($sql);

            if($db->affected_rows>0){
                echo "Successfully Inserted";
            }


        }

    ?>


    <h1>Student Entry form</h1>
    <form action="" method="post">
        <input type="number" name="id" placeholder="Enter Unique ID"><br>
        <input type="text" name="name" placeholder="Enter Name"><br>
        <input type="email" name="email" placeholder="Enter Email "><br>
        <input type="text" name="phone" placeholder="Enter Phone "><br> <br>
        <input type="submit" name="submit" value="submit"><br>
    </form>



    <!-- Show data from Mysql -->
    <br>
    <a href="st_list_show_from_myql.php">Show Student Entry List</a>
</body>
</html>