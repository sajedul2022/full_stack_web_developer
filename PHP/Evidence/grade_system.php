<form action="" method="post">
    <input type="text" name="marks" placeholder="Enter your marks"> <br>
    <input type="submit" value="Submit" name="submit">
</form>

<?php

    if(isset($_POST["submit"])){
        $marks = $_POST["marks"];
        if($marks>100 || $marks<0){
            echo "Invalid marks";
        }elseif($marks>=90){
            echo "You have got gpa A+";
        }elseif($marks>=80 && $marks<90){
            echo "You have got gpa A";
        }elseif($marks>=60 && $marks<80){
            echo "You have got gpa A-";
        }elseif($marks<60){
            echo "You have failed";
        }

    }

?>