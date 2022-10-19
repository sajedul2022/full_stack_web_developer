<?php 
$title = " My Page";

$body = "<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis accusantium praesentium aut eos iste, natus reiciendis libero assumenda illum impedit?</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
</head>
<body>
    <?php echo $body;  ?> <br>

    <?php echo "I want to show Tittle- {$title}. {$body} "; ?>

    <?php 
    $x = 10;

    echo "{$x}_abc";

    ?>
     


</body>
</html>