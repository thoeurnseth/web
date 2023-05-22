<?php
    $sername    =   "localhost";
    $username   =   "root";
    $password   =   "admin";
    $dbname     =   "rout_search";

    $conn=new mysqli($sername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connect error :".$conn->connect_error);
        exit;
    }
    $key_word = strtolower($_POST['key_search']);

    if(!empty($key_word)) { 
        $sql_data_select="SELECT * FROM `tbl_search` ";
        $rs_data_select =$conn->query($sql_data_select);
        while($row=mysqli_fetch_assoc($rs_data_select)){
            $data_arr[] = $row['search_text'];   
        }
        if(in_array($key_word,$data_arr)) { 
            $sql_data_key = " SELECT * FROM `tbl_search` WHERE `search_text` ='$key_word' ";
            $rs_data_key  = $conn->query( $sql_data_key);
            $row_data_key = mysqli_fetch_assoc($rs_data_key);
            $total_count  = $row_data_key['search_count'] + 1;

            // @update search count
            $sql_data_update  = "UPDATE `tbl_search` SET `search_count`= '$total_count' WHERE `search_text` = '$key_word'";
            $rs_data_update   = $conn->query($sql_data_update);
    
        }else{
            // insert data
            $sql_insert =   "INSERT INTO 'tbl_search' ('search_text','search_count') VALUE ('$key_word',1)";
            $rs_insert  =   $conn->query($sql_insert);
        }
    }
?>