<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        if( $_POST["name"] || $_POST["age"] ) {
            if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
                die ("invalid name and name should be alpha");
            }
            echo "Welcome ". $_POST['name']. "<br />";
            echo "You are ". $_POST['age']. " years old.";
            
            exit();
        }
    ?>
<body>
    <form action = "<?php $_PHP_SELF ?>" method = "POST">
        Name: <input type = "text" name = "name" />
        Age: <input type = "text" name = "age" />
        <input type = "submit" />
    </form>
</body>
</html>