<!DOCTYPE html>
<html>
<head>
<title>Google Icons</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>


<?php $db = new mysqli('localhost', 'root', '','wdpf51'); ?>

<h1>Show Data from Mysql </h1> <hr>

<!-- Show data from Mysql -->
<table border="1"> 
        
        <tr>
            <th>ID Number</th>
            <th> Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
            <th>Edit</th>
        </tr>
   

    <?php
        $sql = "SELECT * FROM students";
        $result = $db->query($sql);

        echo "<h2>Total Record found $result->num_rows </h2>";

        while($data = $result->fetch_object()){
    ?>
    <tr>
        <td><?php echo $data->student_id; ?></td>
        <td><?= $data->student_name; ?></td>
        <td><?= $data->student_email; ?></td>
        <td><?= $data->student_phone; ?></td>
        <td><a href="st_delete.php?id=<?php echo $data->student_id ?>" onclick="return confirm('Are you sure')"> <img src="bin.png" width="30" alt=""> </a></td>

        <td><a href="st_edit.php?id=<?php echo $data->student_id ?>" onclick="return confirm('Are you sure')"> <img src="pencil.png" width="30" alt=""> </a></td>
    </tr>
   

    <?php } ?>
    
</table>

<!-- Entry data from Mysql -->
<br>
<a href="st_entry.php"> Go to New Entry </a>

</body>
</html>