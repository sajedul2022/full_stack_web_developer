<?php 
    $id = $_GET['id'];
    $db = new mysqli("localhost", "root", "", "wdpf51");

    $sql = "SELECT * FROM students WHERE student_batch='$id'";
    $result = $db->query($sql);
    if($result->num_rows>0){ 
    ?>
    <table border="1">
        <tr>
            <th>SN</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    <?php
    while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['student_id'] ?></td>
            <td><?php echo $row['student_name'] ?></td>
            <td><?php echo $row['student_email'] ?></td>
            <td><?php echo $row['student_phone'] ?></td>
        </tr>
    <?php    
    }    
    ?>
    </table>

    <?php 
        } else {
            echo "<h1>No Data Found</h1>";
        }
    ?>   