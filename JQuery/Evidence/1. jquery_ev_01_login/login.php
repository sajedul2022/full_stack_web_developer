<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <title>Login Form</title>
    <style>
         .green{background-color: green; color: white; padding:10px; width:200px;}
         .red{background-color: red; color: white; padding:10px; width:200px;}
    </style>

    <script>

        $(function(){
            $("#login").click(function(){

               var em = $("#email").val();
               var pss = $("#password").val();

            //    $.get(
            //         'check.php', 
            //         {email:em, pass:pss}, 
            //         function(data){
            //             $("#show").html(data);
            //     });

                $.ajax({
                    url: 'check.php',
                    method: 'GET',
                    data: {email:em, pass:pss},
                    success: function(data){
                        $("#show").html(data);

                    }
                });
            });
        });

    </script>
</head>
<body>
    
<div id="show"></div>
    <table>
        <!-- <caption>Login Form</caption>  -->
    <form action="">
        <h1 style="text-align: center ;">Login form</h1> <hr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" id="email">
            </td>
        </tr>

        <tr>
            <td>Password</td>
            <td>
                <input type="password" id="password">
            </td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="button" value="Login" id="login">
            </td>
        </tr>

    </form>
    </table>
</body>
</html>