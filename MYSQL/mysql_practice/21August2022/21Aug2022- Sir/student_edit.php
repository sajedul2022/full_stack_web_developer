<?php $db = new mysqli('localhost', 'root', '', 'wdpf51'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$id = $_REQUEST['id'];

    if(isset($_POST['submit'])){
        extract($_POST);
        $sql = "UPDATE students SET student_id = '$stid', student_name = '$name', student_email = '$email', student_phone='$phone' WHERE id = '$id'";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Successfully Updated";
       }
    }
    $sql = "SELECT * FROM students WHERE id = '$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();

  
    ?>
    <h1>Student Entry System</h1>
    <form action="" method="post">
        <input type="number" name="stid" value="<?php echo $data['student_id']; ?>"placeholder="Enter Unique ID"><br>
        <input type="text" name="name" value="<?php echo $data['student_name']; ?>" placeholder="Enter name"><br>
        <input type="email" name="email" value="<?php echo $data['student_email']; ?>" placeholder="Enter unique email"><br>
        <input type="text" name="phone" value="<?php echo $data['student_phone']; ?>" placeholder="Enter phone number"><br>
        <input type="submit" name="submit" value="UPDATE">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    </form>
    <br>
    <a href="student_list.php">Student List</a>
    
</body>
</html>