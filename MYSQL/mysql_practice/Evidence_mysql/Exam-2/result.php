<!-- // Database connection -->
<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam2')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04. View Page</title>
</head>
<body>
     <hr><h1 style="text-align:center; ">Student Result View</h1> <hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Module Name</th>
            <th>Total Marks</th>
            <th>Address</th>
        </tr>

        <?php 
            // select data from database view
            $sql = "SELECT * FROM students_records";
            $result = $db->query($sql);
            echo "<h2>Total Record found: $result->num_rows </h2>";

            while($data = $result->fetch_object()){ ?>
            <tr>
                <td><?php echo $data->rid; ?></td>
                <td><?php echo $data->st_name; ?></td>
                <td><?php echo $data->module_name; ?></td>
                <td><?php echo $data->totalmarks; ?></td>
                <td><?php echo $data->address; ?></td>
            </tr>
        <?php 
         } 
        ?>


    </table> 
    <br> <br>
    <a href="student.php">Show Students List</a>

</body>
</html>
