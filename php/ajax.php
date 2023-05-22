<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        $().ready(function() { 

        // Validate the form when it is submitted, using validation plugin.
            var validator = $("#contactform").validate({
                    errorContainer: container,
                    errorLabelContainer: $(),
                    onkeyup: false,
                    onclick: false,
                    onfocusout: false,
                errorPlacement: function (error, element) { 
                    error.insertBefore(element);    
                }   
            });
        });
        $(function() {

            //This submits a form
            $('input[type=submit]').click(function() {
                $.ajax({
                    type: "POST",
                    url: "contact.php",
                    data: $("#contactform").serialize(),
                    beforeSend: function() {
                        $('#result').html('<img src="loading.gif" />');
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }

                })
            })
        })
        //This shows and hides div onclick
        $(document).ready(function(){   
            $(".slidingDiv").hide(); 
            $(".show_hide").show(); 
            $('.show_hide').click(function(){ 
                $(".slidingDiv").slideToggle(); 
            });
        }); 
    </script>
</body>
</html>