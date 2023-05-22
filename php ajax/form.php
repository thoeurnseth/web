<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" class="post_data">

        <input type="submit" value="save" id="btn-save">
    </form>
</body>
</html>
<script>
    $(document).ready(function(){
        $("#btn-save").click(function(){
            var fmr = $(this).closest(from.post_data);
            var data_fmr = new FormData(fmr[0]);
            $.ajax({
                url : 'name folder and name fild',
                type :'POST',
                data : 'data_fmr',
                contentType : false,
                cache : false,
                processData : false,
                success : function(dara){
                    
                }
            });
        });
    });
</script>