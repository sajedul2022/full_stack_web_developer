<?php $db = new mysqli("localhost", "root", "", "wdpf_ev"); ?>

        <select  id="district">
                <option value="" selected disabled>Select One</option> 

             <!-- DB query -->
            <?php
             
                $divId = $_GET['divsn'];
                $sql = "SELECT * FROM district WHERE dis_divid = '$divId' ";
                $result = $db->query($sql);

                while($row = $result->fetch_assoc()){
            ?>

                <option value="<?php echo $row['dis_id']; ?>"> 
                        <?php echo $row['dis_name']; ?> 
                </option>

            <?php
                }
            ?>
            

        </select>