<!DOCTYPE html>
<html lang="en">
<head>
    <title>JSON Encode PHP Indexed Array</title>
</head>
<body>

<?php
// An indexed array
    $colors = array("Red", "Green", "Blue", "Orange", "Yellow");
        $sql = json_encode($colors);
    foreach ($sql as $value){
        echo $value."<br>";
    }
?>

</body>
</html>