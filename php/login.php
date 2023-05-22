<?php
  session_start();
  $sername="localhost";
  $username="root";
  $password="admin";
  $dbname="session";
  $conn= new mysqli($sername,$username,$password,$dbname);
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
                  <button type="submit" class="btn btn-primary" name="btn-login">Login</button>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php   
    if(isset($_POST['btn-login'])) {
        $name    = $_POST['username'];
        $pass    = $_POST['password'];
        $user_id = 1;

        if($name == 'sok' && $pass == '123') {
            //Create session key
            $_SESSION['key'] = $user_id;

            $sqlStr = "SELECT * FROM tb_student WHERE username='$name' AND password='$pass'";
            $row = $conn->query($sqlStr);
            var_dump ($row);
            header('Location: admin-dashboad.php');
        }
        else {
            echo 'Invalid username or password, Please try again.';
        }
    }
?>