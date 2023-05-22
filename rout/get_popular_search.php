<?php
    $con     = new mysqli('','root','w36@b12!','sample');
    $sql_str = " SELECT * FROM `tbl_count_search` ORDER BY search_count DESC LIMIT 7 ";
    $rs_sql  = $con->query($sql_str);
    
    while($row = mysqli_fetch_assoc($rs_sql)) {
        $data[] = array(
            'id'    => $row['id'] ,
            'count' => $row['search_count'],
            'key'   => $row['search_text'] 
        );
    }
    echo json_encode($data);