<?php
    $sername="localhost";
    $username="root";
    $password="admin";
    $dbname="session";
    $conn=new mysqli($sername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connect error:".$conn->connect_error);
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
                <input type="text" name="user_id">
                <input type="text" name="product_id">
            <div class="wislist-cart-1111">
                <div class="wislist-112">
             <!-- <span name="btn_submit" type="submit"><a href="">fffff</a></span> -->
                   
                    <a href="" type="submit" name="btn_submit"><i>ddddd</i></a>
                </div>
                <div class="cart-112">
                    <!-- <button type="submit" name="btn_submit"></button>  -->
                    <!-- <input type="text" name="btn_submit" value="eeeeeeeeee"> -->
                </div>
            </div>
        </form>
</body>
</html>
    <?php
        if(isset($_POST['btn_submit'])){
            $user_id = $_POST['user_id'];
            
            $product_id = $_POST['product_id'];
            echo  $user_id.$product_id;
            $sql= "INSERT INTO `user_id`( `user`, `product`) VALUES ( '$user_id','$product_id')";
            $rs=$conn->query($sql);
        } 
    ?>
    <del></del>