<!-- // Database connection -->
<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam2')?>

<!-- Delete Trigger -->
<?php 
   if(isset($_POST['dl_submit'])){

    $st_show = $_REQUEST['st_show'];
    // echo $st_show;
    $sql = "DELETE FROM student WHERE  id = $st_show";
    $db->query($sql);

    if($db->affected_rows>0){
        echo "Deleted";
    }
   }


?>

<!-- Insert into  procedure call by -->
<?php 
    if(isset($_POST['ent_submit'])){
       
        extract($_POST);

        $sql = "CALL add_student('$st_name', '$address', '$mobile')";
        $db->query($sql);

        if($db->affected_rows>0){
            echo "Inserted Succesfully";
        }
    }
?>
<!-- Insert into Student table by procedure   -->
<h1>Entry Student</h1>
<form action="" method="post">
    <input type="text" name="st_name" placeholder="Enter Name"> <br>
    <input type="text" name="address" placeholder="Enter Address"> <br>
    <input type="text" name="mobile" placeholder="Enter Mobile"> <br>
    <input type="submit" name="ent_submit" value="ENTRY"> <br>
</form>



<!-- Show Students from Database -->

<form action="" method="post">
    <select name="st_show" >
        <option disabled selected> Select one</option>
        
        <?php
        $sql = "SELECT * FROM student";
        $result = $db->query($sql);

        while($data = $result->fetch_object()){ ?>

            <option value="<?php echo $data->id; ?>"><?php echo $data->st_name; ?></option>

        <?php  } ?>


        ?>
    </select>
    <input type="submit" name="dl_submit" value="DELETE">
</form>



<br> <br>
    <a href="result.php">Result View</a>