<hr> <h2 style="text-align: center;">  Products List </h2> <hr> 

<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam');  ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Manufacturer</th>
    </tr>

    <?php 

        $sql = "SELECT * FROM product_info_view";
        $result = $db->query($sql);

        while($row = $result->fetch_assoc()){
    ?>

    <tr>
        <td> <?php echo $row['id'] ?> </td>
        <td> <?php echo $row['product_name'] ?> </td>
        <td> <?php echo $row['price'] ?> </td>
        <td> <?php echo $row['manufacturer_name'] ?> </td>
      
    </tr>

    <?php 
        } 
    ?>

</table> <br><br>

<a href="manufacturer.php">Show Manufacturers</a>
