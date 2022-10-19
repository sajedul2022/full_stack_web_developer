<?php
    $countrys = array(
        "Zimbabwe" => "Harare",
        "India" => "Delhi",
        "Nepal" => "Kathmundu",
        "Srilanka" => "Colombo",
        "Bangladesh" => "Dhaka",
    );

    echo "<pre>";
    print_r($countrys);

    ksort($countrys);

    

    // print_r($countrys); ?>

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

    
