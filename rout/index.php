<?php

    $con = new mysqli('','root','w36@b12!','sample');

    $key_word = strtolower($_POST['key_search']);

    if(!empty($key_word)) {

        $get_data_search = " SELECT * FROM `tbl_count_search` ";
        $rs_search = $con->query($get_data_search);

        while($row = mysqli_fetch_assoc($rs_search)) {
            $data_arr[] = $row['search_text'];
        }

        if(in_array($key_word, $data_arr)) {

            // @get search count by key word
            $sql_select_key  = " SELECT * FROM `tbl_count_search` WHERE `search_text`= '$key_word' ";
            $rs_select_key   = $con->query($sql_select_key);
            $data_select_key = mysqli_fetch_assoc($rs_select_key);
            $total_count     = $data_select_key['search_count'] + 1;

            // @update search count
            $sql_str = " UPDATE `tbl_count_search` SET `search_count`= $total_count WHERE `search_text`= '$key_word' ";
            $rs_sql  = $con->query($sql_str);
        }
        else {

            // @insert data
            $sql_str = " INSERT INTO `tbl_count_search`(`search_text`, `search_count`) VALUES ('$key_word', 1) ";
            $rs_sql  = $con->query($sql_str);
            
        }
    }