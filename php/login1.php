<?php
    session_start();
    $sername="localhost";
    $username="root";
    $password="admin";
    $dbname="session";
    $conn= new mysqli($sername,$username,$password,$dbname);
        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error;
            exit();
        }
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
    <div class="container">
        <form method="post">
            <div class="form-row  mt-4 mb-3">
                <div class="col">
                   Username: <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="col">
                  Password: <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

    if(isset($_POST['login'])){
        $Username=$_POST['username'];
        $Pass=$_POST['password'];

        $sqlStr = "SELECT * FROM tbl_user WHERE username='$Username' AND password='$Pass'";
        $row = $conn->query($sqlStr);
        while($data = mysqli_fetch_array($row)) {
            $user_id = $data['id'];
            if(count($user_id) > 0){
                $_SESSION["id"] = $user_id;
                header("Location:  admin1-dashboad.php");
            }else{
            echo 'Invalid username or password, Please try again.';
            }
        }
    }
?>