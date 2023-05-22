<?php
   $sername="localhost";
   $username="root";
   $password="admin";
   $dbname="session";
   $conn=new mysqli($sername,$username,$password,$dbname);
      if($conn->connect_error){
          echo ("connect fail: ".$conn->connect_error);
          exit();
      }
    $id = $_POST['id'];
    $sql = "DELETE FROM tbl_form WHERE id=".$id;
    if ($conn->query($sql) === TRUE) {
        echo "1";
    } else {
        echo "2";
    }
 ?>
