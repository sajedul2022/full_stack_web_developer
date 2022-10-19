<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    
<script>

   $(document).ready(function(){

    $("button").click(function(){
        // // $("p").hide();
        // // $("p").toggle();
        // $("h1").show();
    })

    // hide 
    $(".btn1").click(function(){
        $("#para1").hide();
    })

     // show 
     $(".btn2").click(function(){
        $("#para1").show();
    })

     // hide and show 
     $(".btn3").click(function(){
        $("#para3").toggle();
    })


   });


</script>

 <button class="btn1">Hide Paragraph </button>
 <button class="btn2">Show Paragraph </button>
 <button class="btn3">Show/Hide Paragraph </button>

 <p id="para1" > Paragraph : 01 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis et saepe ipsum, aliquam laboriosam possimus velit doloremque voluptatibus veritatis temporibus.
</p>

<p id="para2" > Paragraph : 02 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis et saepe ipsum, aliquam laboriosam possimus velit doloremque voluptatibus veritatis temporibus.
</p>

<p id="para3" > Paragraph : 03 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis et saepe ipsum, aliquam laboriosam possimus velit doloremque voluptatibus veritatis temporibus.
</p>

<h1 style="display: none;" > met consectetur adipisicing elit. Facilis et saepe ipsum</h1>
</body>
</html>