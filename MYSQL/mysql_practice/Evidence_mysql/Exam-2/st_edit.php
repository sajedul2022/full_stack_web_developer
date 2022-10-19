<!-- // Database connection -->
<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam2')?>

<!-- Update into  procedure call by -->
<?php 
    if(isset($_POST['upd_submit'])){
       
        extract($_POST);

        // $sql = "CALL add_student('$st_name', '$address', '$mobile')";
        $db->query($sql);

        if($db->affected_rows>0){
            echo "Update Succesfully";
        }
    }
?>
<!-- Insert into Student table by procedure   -->
<h1>Update Student</h1>
<form action="" method="post">
    <input type="text" name="st_name" value="Enter Name"> <br>
    <input type="text" name="address" value="Enter Address"> <br>
    <input type="text" name="mobile" value="Enter Mobile"> <br>
    <input type="submit" name="upd_submit" value="UPDATE" <br>
</form>
