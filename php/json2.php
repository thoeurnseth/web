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
      $json='{"vanda":23,"chanda":40,"rotanak":49,"noun":30}';
      
      $value=json_decode($json , true);

        echo  $value["vanda"] . "<br>";
        echo  $value["chanda"] ."<br>"; 
        echo  $value["rotanak"] ."<br>";
        echo  $value["noun"];   

        echo "<hr>";
      $obj=json_decode($json);
      echo $obj->vanda."<br>";
      echo $obj->chanda."<br>";
      echo $obj->rotanak."<br>";
      echo $obj->noun."<br>";


    ?>
</body>
</html>