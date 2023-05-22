<!DOCTYPE html>
<html>    
<body>
   <!--Defining Form-->
   <h1 style="color:green">GeeksforGeeks</h1>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="pname">
      <input type="submit">
   </form>    
      
    <?php
  
        // Getting $REQUEST METHOD
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $name = htmlspecialchars($_REQUEST['pname']); 
  
            // Collecting the value of input field from it
            if (empty($name)) {
                echo "Name is empty";
            } 
            else {
               // Printing the entered data
                echo $name;    
           }
        }
    ?>
</body>
</html>