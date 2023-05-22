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
        $student_one= array(
                        "Math"=>90,
                        "Chemistry"=>95,
                        " English"=>100,
                        "Physic"=>90,  
                        );
                        foreach($student_one as $skil=>$value){
                            echo "student_two ".$skil. ":".$value."<br>";
                        }      
    ?>
</body>
</html>