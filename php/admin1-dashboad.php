//admin
<?php
 session_start();
 $sername="localhost";
 $username="root";
 $password="admin";
 $dbname="session";
 $conn= new mysqli($sername,$username,$password,$dbname);
 if(!empty($_SESSION['id'])) {
     $user_id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
        $sqlStr = "SELECT * FROM tbl_user WHERE id = $user_id";
        $row = $conn->query($sqlStr);
        $data = mysqli_fetch_assoc($row);
        echo $data['username'];
    ?>
    <h2> wellcome <?php echo $data['username'] ?> </h2>
    <a href="logout1.php"><button type="button" class="btn btn-warning">Logout</button></a>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
    }
    else {
        header('Location: login1.php');
    }
?>