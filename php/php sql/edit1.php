<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<?php
    $id = $_GET['id'];
    $sername  = "localhost";
    $username = "root";
    $password = "admin";
    $dbname   = "table-file";
    $conn = new mysqli($sername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connect error:".$conn->connect_error);
        exit;
    }
    $sql_select = " SELECT * FROM `file` WHERE id = $id ";
    $rs_select  = $conn->query($sql_select);
    $row        = mysqli_fetch_assoc($rs_select);

    $f_name = $row['firstname'];
    $l_name = $row['lastname'];
    $city   = $row['city'];
    $email  = $row['email'];
?>
<body>
    <div class="container" style="background: #C0C0C0; width: 27%;overflow: hidden;">
        <form action=""method="post" enctype = "multipart/form-data" style="padding: 9px 2px;">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Firstname</label>
                    <input type="text" value="<?= $f_name ?>" name="firstname" class="form-control" placeholder="lastname">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Lastname</label>
                    <input type="text" value="<?= $l_name ?>" name="lastname" class="form-control"placeholder="firstname">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" value="<?= $city ?>" name="email"class="form-control" id="exampleInputPassword1" placeholder="Enter your Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">City</label>
                    <select id="inputState" class="form-control" name="city">
                        <option selected>Choose...</option>
                        <option>Phnum Penh</option>
                        <option>.....</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password"name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Date of birth</label>
                    <input type="Date"name="date" class="form-control" placeholder="date of birth">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputState">Gender</label>
                    <select id="inputState" name="gender" class="form-control">
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="text" name="age" class="form-control" id="exampleInputPassword1" placeholder="your age">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">phone number</label>
                    <input type="text" name="number" class="form-control" placeholder="phone number">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name="file" class="form-control file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Start_date</label>
                    <input type="date" class="form-control" name="start-date">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlFile1">End_date</label>
                    <input type="date" class="form-control" name="end-date">
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="index1.php"><button type="button" class="btn btn-primary">Back to list</button></a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php

    if(isset($_POST['submit'])){

        $firtname   =   $_POST['firstname'];
        $lastname   =   $_POST['lastname'];
        $email      =   $_POST['email'];
        $city       =   $_POST['city'];
        $password   =   md5($_POST['password']);
        $date       =   $_POST['date'];
        $phone      =   $_POST['number'];
        $gender     =   $_POST['gender'];
        $age        =   $_POST['age'];
        $start_date =   $_POST['start-date'];
        $end_date   =   $_POST['end-date'];

        // get profile image
        $profile = rand(0,999).'-'.$_FILES['file']['name'];
        $path    = 'images/' . $profile;
        move_uploaded_file($_FILES['file']['tmp_name'] ,$path);

        // @prepare sql to update
        $sql_update = " UPDATE `file` SET `firstname`='$firtname',`lastname`='$lastname',`city`='$city',`email`='$email',`password`='$password'
        ,`date_of_birth`='$date',`gender`='$gender',`age`='$age',`phone`='$phone',`image`='$profile',`start_date`='$start_date',`end_date`='$end_date' WHERE id = $id ";
        $rs_insert  = $conn->query($sql_update);
        if($rs_insert == TRUE) {
            echo '
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                    $(document).ready(function(){
                        swal({
                            title: "Data update success",
                            text: "",
                            icon: "success",
                            button: "Okay",
                        });
                    });
                </script>
            ';
        }
        else {
            echo '
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                    $(document).ready(function(){
                        swal({
                            title: "Oppp Error!",
                            text: "",
                            icon: "warning",
                            button: "Okay",
                        });
                    });
                </script>
            ';
        }

    }
?>