 <?php
   $sername="localhost";
   $username="root";
   $password="admin";
   $dbname="session";
   $conn=new mysqli( $sername,$username,$password,$dbname);
     if($conn->connect_error){
        echo ("connect Fail ".$conn->connect_error);
        exit();
     }

    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];

        $sql=" INSERT INTO tbl_form (firstname,lastname,gender) VALUES ('$firstname','$lastname','$gender')";
        $row= $conn->query($sql);
        
        header("Location: http://php/php%20sql/index.php");        
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
    <nav class="navbar navbar-dark bg-dark mt-4 mb-4">
        <div class="container">
            <h2>student List</h2>
        </div>
    </nav>
    <div class="container">
        <form method="POST">
            <div class="form-group row">
                <label for="inputfirstname" class="col-sm-2 col-form-label">Firstname</label>
                <div class="col-sm-10 mb-4">
                    <input type="text" class="form-control"placeholder="Firstname" name="firstname">

                </div>
                <label for="inputlastname" class="col-sm-2 col-form-label">Lastname</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Lastname" name="lastname">
                </div>
                <div class="row">
                    <div class="col-2">
                       <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Gender</label>
                    </div>
                    <div class="col-10">
                        <select class="custom-select my-1 mr-sm-2" name="gender">
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">submit</button> 
                   <a href="index.php"><button type="button" class="btn btn-primary">cancel</button></a>
                </div>
                <div class="col-4"></div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>