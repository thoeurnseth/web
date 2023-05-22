<?php
    session_start();
    $sername="localhost";
    $username="root";
    $password="admin";
    $dbname="session";
    $conn= new mysqli($sername,$username,$password,$dbname);
    //  echo $conn;
    // var_dump($conn);
        // if ($conn->connect_errno) {
        //     echo "Failed to connect to MySQL: " . $conn->connect_error;
        //     exit();
        // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="login-form">
    <form name="frmUser" method="POST" action="" align="center">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" autocomplete="off" class="form-control" placeholder="Password" name="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" value="Submit" name="login">Log in</button>
        </div>      
    </form>
</div>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $Username=$_POST['username'];
        $Pass=$_POST['password'];

        $sqlStr = "SELECT * FROM tbl_employee WHERE username='$Username' AND password='$Pass'";
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