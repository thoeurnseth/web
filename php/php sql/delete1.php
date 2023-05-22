<?php
    $id=$_GET['id'];
    $sername="localhost";
    $username="root";
    $password="admin";
    $dbname="table-file";
    $conn=new mysqli($sername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connect error:".$conn->connect_error);
        exit;
    }
    $sql_delete="DELETE FROM file WHERE id=$id";
    if($conn->query($sql_delete)==true){
        echo '1';
        header('Location:http://php/php%20sql/index1.php');
    }else{
        echo '2';
    }
?>
<input type="text" name="user_id">
<input type="text" name="product_id">