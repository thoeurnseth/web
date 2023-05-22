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
      $var1 = '';
      $var2 = 1;
      $var3 = NULL;
      $var4 = FALSE;
      $var5 = array();
      
        // Testing the variables
        if(empty($var1)){
            echo 'This line is printed, because the $var1 is empty.';
        }
        echo "<br>";
        
        if(!empty($var2)){
            echo 'This line is printed, because the $var2 is empty.';
        }
        echo "<br>";
        
        if(empty($var3)){
            echo 'This line is printed, because the $var3 is empty.';
        }
        echo "<br>";
        
        if(empty($var4)){
            echo 'This line is printed, because the $var4 is empty.';
        }
        echo "<br>";
        
        if(empty($var5)){
            echo 'This line is printed, because the $var5 is empty.';
        }
    ?>
</body>
</html>