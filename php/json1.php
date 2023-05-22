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
       $json='{"vanda":23,"chan":40,"sotha":34,"Keo":80,"seth":20}';

       $ass=json_decode($json);
       foreach ($ass as $a=>$value){
       echo  $a."=>".$value."<br>";
       }
       echo "<hr>";
       // Decode JSON data to PHP object
       $obj=json_decode($json);
       foreach ($obj as $a=>$value){
           echo $a."=>".$value."<br>";
       }
    ?>
</body>
</html>