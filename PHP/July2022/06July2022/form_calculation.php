<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  echo "<pre>"; ?>

    <!-- HTML form -->

    <hr> <h1 style="text-align: center;">Calculation Form</h1> <hr> 

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="first" placeholder="Enter First Number"> <br>
        <input type="text" name="last" placeholder="Enter Last Number"> <br>
        <input type="submit" name="submit" value="Calculate"> 
    </form>

    <!-- PHP Code run and output -->
    <?php 
    
    // echo "<pre>"; 

                // echo $_SERVER['REQUEST_METHOD'];
                // print_r($_REQUEST);

        // if(isset($_REQUEST['submit'])){

        //     $first = $_REQUEST['first'];
        //     $last = $_REQUEST['last'];
        //     $result = $first + $last;

        //     echo "<h3> Your First number is $first <br> </h3>" ;
        //     echo "<h3> Your Last number is $last <br> </h3>" ;
        //     echo "<h3> Sum of those Result = $result</h3>" ;

        // }


        if($_SERVER['REQUEST_METHOD']=='POST'){

            $first = $_REQUEST['first'];
            $last = $_REQUEST['last'];

            // empty($first) || empty($last)
            //$first==null || $last==null
            //  $first=="" || $last==""

            if(empty($first) || empty($last)){
                echo "Fill up The Number";

            }else{
                $result = $first + $last;
    
                echo "<h3> Your First number is $first <br> </h3>" ;
                echo "<h3> Your Last number is $last <br> </h3>" ;
                echo "<h3> Sum of those Result = $result</h3>" ;
            }

        }

    ?> 
</body>
</html>