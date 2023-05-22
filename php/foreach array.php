<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $x=array("khem","chan","vanda","sovan");
    //   $length=count($x);
    //   for($i=0;$i<$length;$i++){
    //       echo  "all name :" .$x[$i]."";
    //       echo "<br>";
    //   }

    foreach($x as $value){
        echo "all name: " .$value."<br>";
    }
    ?>
</body>
</html>