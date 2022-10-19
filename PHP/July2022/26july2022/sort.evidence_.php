<hr> <h2 style="text-align: center;">PHP: array sort  </h2> <hr> 


<?php
    $countrys = array(
        "Bangladesh" => "Dhaka",
        "Pakistan" => "Islamabad",
        "India" => "Delhi",
        "Nepal" => "Kathmundu",
        "Srilanka" => "Colombo"
    );
    asort($countrys);
    ?>
<table border="1">
    <tr>
        <th>Country Name</th>
        <th>Capital Name</th>
    </tr>
   
<?php 
    foreach($countrys as $country=> $capital){  ?>
        
        <tr> 
            <td> <?php echo $country ?> </td>
            <td> <?php echo $capital ?> </td>
        </tr>
    <?php 
    }
    ?>

</table>

