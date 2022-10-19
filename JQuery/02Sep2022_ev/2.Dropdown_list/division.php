<?php   $db = new mysqli("localhost", "root", "", "wdpf_ev"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division List</title>

    <style>
        div#show {
        display: contents;
        }
    </style>
    
    <script src="../jquery.min.js"></script>

    <script>
        $(document).ready(function(){

            $("#division").change(function(){
                var divisionID = $("#division").val();
                // alert(divisionID);

                $.get('district.php', {divsn:divisionID}, function(data){
                    $("#show").html(data);
                })

            })
        })
    </script>
</head>
<body>
     <hr> <h1 style="text-align: center;" >Division List</h1> <hr>

     <form action="">
        <select  id="division">
                <option value="" selected disabled>Select One</option> 

             <!-- DB query -->
            <?php 
                $sql = "SELECT * FROM division";
                $result = $db->query($sql);

                while($row = $result->fetch_assoc()){
            ?>

                <option value="<?php echo $row['div_id']; ?>"> 
                        <?php echo $row['div_name']; ?> 
                </option>


            <?php
                }
            ?>
            

        </select>

        <div id="show"></div>
        
     </form>
</body>
</html>