<?php
    // echo "<pre>";
    if(isset($_POST['submit'])){

        $id =$_POST['id'];
        $name =$_POST['name'];
        $deg =$_POST['deg'];
        $basic =$_POST['basic'];
        $house =$_POST['house'];
        $transport =$_POST['transport'];

        $total = $basic + $house + $transport;


        echo "ID:  $id  <br> Name:  $name <br> Total Salary:  $total";
    }

    
?>
