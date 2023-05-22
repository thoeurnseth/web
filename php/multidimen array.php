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
      $x=array (
          array("vanda",20,30),
          array("kim",90,80),
          array("Yonna",32,34),
          array("Tan",29,20)
      );
      echo $x[0][0].": in stock:".$x[0][1].",solid:".$x[0][2]."<br>";
      echo $x[1][0].": in stock:".$x[1][1].",solid:".$x[1][2]."<br>";
      echo $x[2][0].": in stuck:".$x[2][1].",solid:".$x[2][2]."<br>";
      echo $x[3][0].": in stuck:".$x[3][1].",solid:".$x[3][2]."<br>";
    ?>

