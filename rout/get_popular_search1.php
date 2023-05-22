<?php
    $sername    =   "localhost";
    $username   =   "root";
    $password   =   "admin";
    $dbname     =   "rout_search";
    $conn       =   new mysqli($sername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connect error :".$conn->connect_error);
        exit;
    }

    $sql_str = " SELECT * FROM `tbl_search` ORDER BY `search_count` DESC LIMIT 7 ";
    $rs_sql  = $conn->query($sql_str);
    
    while($row  = mysqli_fetch_assoc($rs_sql)) { 
        $data[] = array(
            'id'    => $row['id'] ,
            'count' => $row['search_count'],
            'key'   => $row['search_text'] 
        );
    }
    echo json_encode($data);

?>