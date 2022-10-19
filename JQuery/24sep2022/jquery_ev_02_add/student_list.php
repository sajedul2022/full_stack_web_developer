<?php 
 $db = new mysqli("localhost", "root", "", "wdpf51_batch_students"); 
    $bid =   $_GET['bid'];

    $sql = "SELECT * FROM students WHERE st_batch_id = '$bid' ";
                $result = $db->query($sql); 
?>

        
            <select  id="stid">

                    <option value="" selected disabled> Select One </option>
                    <?php 
                        while($row = $result->fetch_assoc()){
                    ?>
                    

                    <option value="<?php echo $row['student_id'];?>">
                        <?php echo $row['student_name'];?>
                    </option>

                    <?php 
                    }
                    ?>

            </select>
        



