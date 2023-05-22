<?php
      $sername = "localhost";
      $username = "root";
      $password = "admin";
      $dbname = "user";
      $conn = new mysqli($sername,$username,$password,$dbname);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-11"></div>
        <div class="col-1 insert" style="float: right; padding: 6px 3px;">
            <button type="button" class="btn btn-warning">insert</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">create_at</th>
                    <th scope="col">is_delete</th>
                    <th scope="col">active</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql_select = "SELECT * FROM `user_test`";
                    $rs_select = $conn->query($sql_select);
                    if($rs_select->num_rows> 0){
                        while($row = $rs_select->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['username']?></td>
                                    <td><?php echo $row['password']?></td>
                                    <td><?php echo $row['first_name']?></td>
                                    <td><?php echo $row['last_name']?></td>
                                    <td><?php echo $row['create_at']?></td>
                                    <td><?php echo $row['is_delete']?></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-update">Update</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <!-- insert -->
    <div class="container">
        <div class="modal">
            <div class="form-user" style="width: 35%;background: rebeccapurple;padding: 34px 3px;position: absolute;margin-top: 49px;margin-left: 810px;">
                <form method="POST">
                    <div class="delet-modal">
                        <div class="row">
                            <div class="col-11"></div>
                            <div class="col-1 hide" style="padding: 5px 3px;">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" placeholder="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">firstname</label>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" class="form-control" placeholder="firstname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">lastname</label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" class="form-control" placeholder="lastname">
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">create date</label>
                        <div class="col-sm-10">
                            <input type="date" name="create_date" class="form-control">
                        </div>
                    </div>     
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">is delete</label>
                        <div class="col-sm-10">
                            <input type="text" name="is_delete" class="form-control" placeholder="is_delete">
                        </div>
                    </div>
                    <button type="submit" name="btn_insert" class="btn btn-danger">submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- @update -->
    <div class="container">
        <div class="modal">
            <div class="form-user" style="width: 35%;background: rebeccapurple;padding: 34px 3px;position: absolute;margin-top: 49px;margin-left: 810px;">
                <form method="POST">
                    <div class="delet-modal">
                        <div class="row">
                            <div class="col-11"></div>
                            <div class="col-1 hide" style="padding: 5px 3px;">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">firstname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="firstname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">lastname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="lastname">
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">create date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" placeholder="Password">
                        </div>
                    </div>     
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">is delete</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="is_delete">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".insert").click(function(){
                $(".modal").show();
            });
            $(".hide").click(function(){
                $(".modal").hide();
            });
            $(".btn-update").click(function(){
                $(".modal").show();
            });
        });
    </script>
</body>
</html>
<?php
    if(isset($_POST['btn_insert'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $create_date = $_POST['create_date'];
        $is_delete = $_POST['is_delete'];
        $sql_insert = "INSERT INTO `user_test`(`username`, `password`, `first_name`, `last_name`, `create_at`, `is_delete`) VALUES ($username,$password,$firstname,$lastname,$create_date,$is_delete )";
        $rl_insert = $conn->query($sql_insert);
    }

    // update
    if(isset($_POST['btn_insert'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $create_date = $_POST['create_date'];
        $is_delete = $_POST['is_delete'];
        $sql_update = "UPDATE `user_test` SET`username`= $username,`password`=$username,`first_name`= $firstname,`last_name`= $lastname,`create_at`= $create_date,`is_delete`= $is_delete WHERE id=";
        $rs_update = $conn->query($sql_update);
    }


   
?>