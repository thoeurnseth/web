<?php
    $sername="localhost";
    $username="root";
    $password="admin";
    $dbname="table-file";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<body>
        <div class="header">
            <section>
            
            </section>
        </div>
        <div class="content">
            <section style="position: relative;">
                <form action="" method="post" style="float: right; margin-right: 157px; padding: 20px;">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search"name="search" placeholder="search" id="form1" class="form-control" />
                        </div>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <div class="col">
                    <div class="col-1"style="float: right ;margin: 19px 0px;">
                        <a href="insert1.php"><button type="button" class="btn btn-primary insert" style="margin-left: 507px;margin-top: 11px;">insert</button></a>
                    </div>
                    <table  class="table table-dark">
                        <tr>
                            <th> ID </th>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> City </th>
                            <th> Email </th>
                            <th> Date of birth </th>
                            <th> Gender </th>
                            <th> Age </th>
                            <th> Phone number </th>
                            <th> Image </th>
                            <th> Start_Date </th>
                            <th> End_Date </th>
                            <th> Action </th>
                        </tr>
                        <?php
                            $result="SELECT * FROM file";
                            $connect=$conn->query($result);
                            if($connect->num_rows>0){
                                while($row=$connect->fetch_assoc()){
                                    ?>
                                        <tr>
                                            <td><?php   echo $row['id'] ?></td>
                                            <td><?php   echo $row['firstname']  ?></td>
                                            <td><?php   echo $row['lastname'] ?></td>
                                            <td><?php   echo $row['city'] ?></td>
                                            <td><?php   echo $row['email'] ?></td>
                                            <td><?php   echo $row['date_of_birth'] ?></td>
                                            <td><?php   echo $row['gender'] ?></td>
                                            <td><?php   echo $row['age'] ?></td>
                                            <td><?php   echo $row['phone'] ?></td>
                                            <td><img width="100px" height="50px" src="images/<?php echo $row['image'] ?>"></td>
                                            <td><?php echo $row['start_date'] ?></td>
                                            <td><?php echo $row['end_date'] ?></td>
                                            <td>
                                                <a href="edit1.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-success">EDIT</button></a>
                                                <a href="delete1.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-danger remove">DELETE</button></a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }else{
                                echo "result 0";
                            }
                        ?>
                    </table>
                </div> 
            </section>   
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>