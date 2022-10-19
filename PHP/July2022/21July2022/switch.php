<hr> <h2 style="text-align: center;">PHP: Switch Statement</h2> <hr> 

<h3>Catagory Wise Message</h3>

<form action="">
    <select name="cat">
        <option value="">Select One</option>
        <option value="news">News</option>
        <option value="weather">Weather</option>
        <option value="sports">Sports</option>
        <option value="01">01</option>
    </select>
    <input type="submit" name="submit" value="Check">
</form>


<?php

   if(isset($_GET['submit'])){
         $cat = $_GET['cat'];

         switch($cat){
            case "news":
                echo "You Have Selected News.";
                break;

            case "weather":
                echo "You Have Selected Weather.";
                break;

            case "sports":
                echo "You Have Selected Sports.";
                break;

            case 01:
                echo "You Have Selected 01.";
                break;
            
                default:
                echo "Selact Any Category.";

         }
   }

?>