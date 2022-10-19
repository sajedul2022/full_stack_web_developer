<hr> <h1 style="text-align: center;"> Manufacturers </h1> <hr> 

<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam');  ?>

<?php 
    // Delete
    if(isset($_POST['submit'])){
        $id  = $_POST['manu_id'];
        $sql = "DELETE FROM manufacturer WHERE id = '$id'";
        $db->query( $sql);

        if($db->affected_rows>0){
            echo "Deleted";
        }
    }

?>

<?php 
    // Entry
    if(isset($_POST['manufacturer_submit'])){
        extract($_POST);
        
        $sql = "CALL add_manufacturer('$manu_nm', '$manu_add', '$manu_ph')";
        $db->query( $sql);

        if($db->affected_rows>0){
            echo "Added.";
        }
    }

?>


<!-- Show List Manufacturer -->
<form action="" method="post">
    <select name="manu_id">

    <option value="" disabled selected > Select one</option>

        <?php 
            $sql = "SELECT * FROM manufacturer ";
            $result = $db->query($sql);

            while($row = $result->fetch_assoc()){
        ?>

        <option value="<?php echo $row['id'] ?>">
            <?php echo $row['name'] ?> 
        </option>
            
        
        <?php 
            } 
        ?>
    </select>

    <input type="submit" name="submit" value="DELETE">
</form>

<!-- Manufacturer Entry -->
<h1>Manufacturer Entry</h1>

<form action="" method="post">
    <input type="text" name="manu_nm" placeholder="Enter Manufacturer"> <br>
    <input type="text" name="manu_add" placeholder="Enter Address"> <br>
    <input type="text" name="manu_ph" placeholder="Enter Phone"> <br> <br>
    <input type="submit" name="manufacturer_submit" value="SAVE Manufacturer"> <br>
</form>


<br><br>
<a href="product.php">Show Products</a>

