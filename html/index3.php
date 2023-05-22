<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        $conn->close();

    ?>
<body>
<div class="header">
        <div class="container">
            <div class="row">
               <div class="col-12">
                   <div class="content-header">
                        <div class="left">
                                <h2>Student List</h2>
                        </div>
                        <div class="right">
                                <img src="https://via.placeholder.com/50" alt="">
                        </div>
                   </div>
               </div>  
            </div>
        </div>
    </div>

    <section>
        <div class="button">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="button-right">
                            <div class="new">
                                <button>New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <table class="tbl_information table" border="1px">
                <tr>
                    <td>ID</td>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Gender</td>
                    <td>Dob</td>
                    <td>Tel</td>
                    <td>Action</td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>chan</td>
                    <td>dara</td>
                    <td>male</td>
                    <td>10-05-1994</td>
                    <td>0972013150</td>
                    <td></td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>chan</td>
                    <td>dara</td>
                    <td>male</td>
                    <td>10-05-1994</td>
                    <td>0972013150</td>
                    <td></td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>chan</td>
                    <td>dara</td>
                    <td>male</td>
                    <td>10-05-1994</td>
                    <td>0972013150</td>
                    <td></td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>chan</td>
                    <td>dara</td>
                    <td>male</td>
                    <td>10-05-1994</td>
                    <td>0972013150</td>
                    <td></td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>chan</td>
                    <td>dara</td>
                    <td>male</td>
                    <td>10-05-1994</td>
                    <td>0972013150</td>
                    <td></td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>chan</td>
                    <td>dara</td>
                    <td>male</td>
                    <td>10-05-1994</td>
                    <td>0972013150</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </section>
    <section>
            <div class="top">
             <div class="container">
                 <div class="row">
                     <ul class="top-center">
                        <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                     </ul>
                 </div>
             </div>
            </div>
    </section>
</body>
</html>