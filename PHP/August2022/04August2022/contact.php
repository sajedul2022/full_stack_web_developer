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
       extract($_POST);
       $to = "sajedul.idb.info@gmail.com";
       if(mail($to, $subject, $message)){
        echo "Sent Successfully";
       }
    
    ?>
    <h2>Contact With us</h2>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter Email"> <br>
        <input type="text" name="name" placeholder="Enter Name"> <br>
        <input type="text" name="subject" placeholder="Enter Subject Here"> <br>
        <textarea name="message"  cols="30" rows="10" placeholder="Enter Message"></textarea> <br>
        <input type="submit" name="submit" value="SEND"> <br>

    </form>
</body>
</html>