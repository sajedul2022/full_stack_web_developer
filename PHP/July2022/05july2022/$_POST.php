<hr> <h2 style='text-align:center'> $_GET, $_POST , $_REQUEST: Superglobal </h2> <hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <h1>Login Form</h1>

    <form action="submit.php" method="post" >
        <input type="text" name="email" placeholder="Enter Email"> <br>
        <input type="password" name="pass" placeholder="Enter Password"> <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>