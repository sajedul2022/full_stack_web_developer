<?php $db = new mysqli("localhost", "root", "", "wdpf_ev"); ?>
           
        <h3> District Wise Result </h3>
        <table border="1" style="text-align: center;" >
            <tr>
                <th>District ID</th>
                <th>District Name</th>
            </tr>
            <!-- DB query -->
                <?php
                
                $divId = $_GET['divsn'];
                $sql = "SELECT * FROM district WHERE dis_divid = '$divId' ";
                $result = $db->query($sql);

                while($row = $result->fetch_assoc()){
                ?>

                    <tr>
                        <td><?php echo $row['dis_id']; ?></td>
                        <td><?php echo $row['dis_name']; ?></td>
                    </tr>

                <?php
                }
                ?>
            
        </table>