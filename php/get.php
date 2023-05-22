<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
         if($_GET["name"]&&$_GET["age"]){
             echo "wellcome ".$_GET["name"]."<br>";
             echo "you are ".$_GET["age"]."";
            exit();
         }
    ?>
<body>
    <form action="<?php $_PHP_SELF ?>"method="get">
          Name: <input type="text" name="name">
          age: <input type="text"name="age">
          <input type="submit">
    </form>
</body>
</html>