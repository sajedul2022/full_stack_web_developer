<?php include_once("dbconfig.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>

   
    <table class=" table table-bordered "> 
        <thead>
            <tr>
                <th>Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>

        <?php
            $sql = "SELECT * FROM employees";
            $result = $db->query($sql);

            while($data = $result->fetch_assoc()){
        ?>

        <tbody>
        <tr>
            <td><?php echo $data['employeeNumber']; ?></td>
            <td><?= $data['firstName']; ?></td>
            <td><?= $data['lastName']; ?></td>
            <td><?= $data['email']; ?></td>
        </tr>
        </tbody>

        <?php } ?>
        
    </table>



<?php 
    // $sql = "SELECT * FROM employees";
    // $result = $db->query($sql);

    // $fetch_row = $result->fetch_row();
    // $data = $result->fetch_assoc();
    // $fetch_array = $result->fetch_array();
    // $fetch_object = $result->fetch_object();


    // while($data = $result->fetch_assoc()){
    //     echo $data['employeeNumber'];
    //     echo $data['lastName'];
    //     echo $data['firstName'];
    //     echo "<br>";
    // }


    // echo "<pre>";
    // print_r($fetch_assoc);
// ?>
    
</body>
</html>