<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
     echo var_dump(json_decode($json));
    ?>
</body>
</html>