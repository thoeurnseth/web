<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        if( $_GET["name"] || $_GET["age"] ) {
            echo "Welcome ". $_GET['name']. "<br />";
            echo "You are ". $_GET['age']. " years old.";
            
            exit();
        }
    ?>
<body>
    <form action = "get.php" method = "GET">
        Name: <input type = "text" name = "name" />
        Age: <input type = "text" name = "age" />
    <input type = "submit" />
    </form>
</body>
</html>