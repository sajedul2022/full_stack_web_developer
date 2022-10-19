<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../jquery.min.js" ></script>
    <title>Document</title>

    <script>
        $(document).ready(function(){
            $("#choice").change(function(){

                var ch = $(this).val();
                // alert(store);
                $.get('list.php', {mydata:ch}, function(data){
                    $('#result').html(data);
                });

                

            });
        });
    </script>
</head>
<body>
    
    <!-- array -->
    <?php 
        // $good = array('Sherlock Holmes', 'John Watson', 'Hercule Poirot', 'Jane Marple');
        // $bad = array('100 Professor Moriarty', 'Sebastian Moran','Charles Milverton', 'Von Bork', 'Count Sylvius');
    ?>
    <form action="">
        <select name="" id="choice">
            <option value="" selected disabled>Select One</option>
            <option value="Good"> Good Boys </option>
            <option value="Bad"> Bad Boys </option>
            
        </select>
    </form>

    <h1 id="result"></h1>
</body>
</html>