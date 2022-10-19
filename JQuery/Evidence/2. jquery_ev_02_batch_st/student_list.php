<?php 
 $db = new mysqli("localhost", "root", "", "wdpf51_batch_students"); 
    $bid =   $_GET['bid'];

    $sql = "SELECT * FROM students WHERE st_batch_id = '$bid' ";
                $result = $db->query($sql); 
                ?>

                <table border="1">
                    <tr>
                        <th>student_id </th>
                        <th>student_name</th>
                        <th>st_batch_id	</th>
                    </tr>

                    <?php 
                        while($row = $result->fetch_assoc()){
                    ?>
                    <tr> 
                        <td> <?php echo $row['student_id'];?> </td>
                        <td> <?php echo $row['student_name'];?> </td>
                        <td> <?php echo $row['st_batch_id'];?> </td>
                    </tr>

                    <?php 
                    }
                    ?>
                </table>



