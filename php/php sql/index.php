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
    
      $search=isset($_GET['search'])? $_GET['search']:'';

      $sql="SELECT * FROM tbl_form WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";
      $result=$conn->query($sql);

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<style>
    
</style>
<body>
    <nav class="navbar navbar-dark bg-dark mt-4 mb-4 stiky">
        <div class="container h">
          <h2>student List</h2>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4 mb-4">
                <form  method="GET"class="form-inline my-2 my-lg-0">
                    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-11"></div>
            <div class="col-1 mb-4">
                <a href="insert.php"><button type="button" class="btn btn-dark">insert</button></a>
            </div>    
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Gender</th>
                        <th>Detail</th>
                    </tr>
                </thead>
            <?php               
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['firstname']?></td>
                            <td><?php echo $row['lastname'] ?></td>
                            <td> <?php echo $row['gender'] ?></td>
                            <td>
                                <a href="Edit.php?id=<?php echo $row['id']?>" class="btn btn-success">Edit</a>
                                <a href="index.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-remove">remove</a>
                            </td>
                        </tr>

                    <?php }
                } else {
                echo "0 results";
                }
            ?>
            </table>
        </div>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function(){
        $('.btn-remove').click(function(){
            var _this = $(this);
            if(confirm("Are you sure to delete?")){
                var id = $(this).data('id');
                $.ajax({
                    url: "delete.php",
                    type: "post",
                    data: {'id': id} ,
                    success: function (response) {
                        if(response==1){
                            _this.closest('tr').fadeOut();
                        }else{
                            alert("Delete fail. please contact admin.");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }
        });
    });
</script>