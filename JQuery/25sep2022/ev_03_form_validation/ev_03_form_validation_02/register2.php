<html>

<head>
    <title>Validate empty fields</title>
    <style type="text/css">
        body {
            font-family: "Trebuchet MS", verdana;
            width: 450px;
        }

        .error {
            color: red;
        }

        #info {
            color: #008000;
            font-weight: bold;
        }
    </style>
    <script type="text/javascript" src="jquery.min.js"></script>

    <script>
        $(document).ready(function() {
                    $('#check').click(validate);

                    function validate() {

                        var dataValid = true;
                        $('#info').html('');

                        $('.required').each(function() {

                            var cur = $(this);
                            cur.next('span').remove();

                            if ($.trim(cur.val()) == '') {
                                cur.after('<span class="error"> Mandatory field </span>');
                                dataValid = false;
                            }
                        });

                        // Not a Number
                        if (!dataValid) return false;
                        $('.number').each(function() {
                                var cur = $(this);
                                cur.next().remove();
                                if (isNaN(cur.val())) {
                                    cur.after('<span class="error"> Must be a number </span>');
                                    dataValid = false;
                                    }
                                });


                            if (dataValid) {
                                $('#info').html('Validation OK');
                            }
                        }
                    });
    </script>

</head>

<body>
    <form>
        <fieldset>
            <legend><strong>Personal</strong></legend>
            <table>
                <tbody>
                    <tr>
                        <td>Name:* </td>
                        <td><input type="text" class="required" /></td>
                    </tr>
                    <tr>
                        <td>Address:* </td>
                        <td><input type="text" class="required" /></td>
                    </tr>
                    <tr>
                        <td>City: </td>
                        <td><input type="text" /></td>
                    </tr>
                    <tr>
                        <td>Country:* </td>
                        <td><input type="text" class="required" /></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <br />

        <fieldset>
            <legend><strong>Other Details</strong></legend>
            <table>
                <tbody>
                    <tr>
                    <tr>
                        <td>Age:* </td>
                        <td><input type="text" class="required number" /></td>
                    </tr>
                    <tr>
                        <td>Monthly Expenses:* </td>
                        <td><input type="text" class="required number" /></td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <span id="info"></span>
        <br />
        <input type="button" value="Check" id="check" />
    </form>
</body>

</html>