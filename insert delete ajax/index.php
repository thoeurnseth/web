<?php  
    $sername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "insert_delete_ajax";
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
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div><button type="button" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#exampleModal">add</button></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-primary">edit</button>
                        <button type="button" class="btn btn-secondary">delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- register modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="not_data"  class="text-secondary"></div>
                        <form>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="First name" id="firsname">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" id="lastname" >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="save">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
<script>
    $(document).ready(function(){
        insert_record()
    });
    function insert_record(){
        $(document).on('click','#save',function(){
            var firsname = $('#firsname').val();
            var lastname = $('#lastname').val(); 

            if(firsname == "" || lastname == ""){
                $('#not_data').html('please enter data');
            }else{
                $.ajax(){
                    
                }
            }
        });
    }
</script>