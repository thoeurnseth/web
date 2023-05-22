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
         function sum(int $a , int $b){
             $z=$a+$b;
             return $z;
         }
         echo("3+5=").sum(3,5)."<br>";
         echo("2+5=").sum(2,5)."<br>";
         echo("1+5=").sum(1,5)."<br>";
         echo("5+5=").sum(5,5);
    ?>
</body>
</html>