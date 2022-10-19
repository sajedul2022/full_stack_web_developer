
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

    if(isset($_POST['submit'])){

        $id =  $_POST['id'];
        $name =  $_POST['name'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];

        $total = $id." ".$name." ".$email." ".$phone."\n";

     
        // echo $id;
     
        $file = fopen("info.txt","a");
        fwrite($file, $total );

        
          
        fclose($file);

    }

?>

    <form action="" method="post">

        ID <input type="text" name="id" placeholder="Enter ID"> <br>
        Name <input type="text" name="name" placeholder="Enter Name"> <br>
        Email <input type="email" name="email" placeholder="Enter Email"> <br>
        Phone <input type="text" name="phone" placeholder="Enter Phone"> <br> <br>
              <input type="submit" name="submit" value="SEND"> <br> <br>
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php
            $file1 = file("info.txt");
            foreach($file1 as $line){
                list($id1, $name1, $email1, $phone1) = explode(" ", $line);
                echo "<tr>

                    <td>$id1</td>
                    <td>$name1</td>
                    <td>$email1</td>
                    <td>$phone1</td>
                
                </tr>";
            }      
        ?>
    </table>
   
</body>
</html>